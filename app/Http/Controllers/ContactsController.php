<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Group;
class ContactsController extends Controller
{

    private $limit = 10;
    private $upload_dir = "/public/uploads/contacts/";
    private $rules = [
        'company' => 'required|min:5',
        'phone' => 'required|min:5',
        'name' => 'required|min:5',
        'email' => 'required|min:5',
        'about' => 'max:200'
    ];


    public function __construct()
    {
        // $this->middleware('auth');
        $this->upload_dir = base_path() . $this->upload_dir;
    }

    public function cards()
    {
        $contacts = Contact::orderBy('id', 'desc')->paginate($this->limit);
         return view('contacts.cards', compact('contacts'));
    }

    public function autocomplete(Request $request)    
    {
        if ($request->ajax())
        {
            return Contact::select(['company' ,'name as value', 'email'])
                ->searchByQueryString($request->get("term"))
                ->orderBy('name', 'asc')
                ->take(10)
                ->get();
        }
    }


    // Show all Contacts or Search.
    // ================================================
    public function index(Request $request)
    {
        // $contacts = Contact::where(function($query) use ($request) {
        //     if ($term = $request->get("term"))
        //     {
        //         $keywords = '%' . $term . '%';
        //         $query->orWhere('name',    'LIKE', $keywords )
        //               ->orWhere('company', 'LIKE', $keywords )
        //               ->orWhere('email',   'LIKE', $keywords );
        //     }                        
        // })
        // we made to scopes :D
        $contacts = Contact::searchByQueryString($request->get("term"))
            ->orderBy('id', 'desc')
            ->paginate($this->limit);
            // \DB::enableQueryLog();
            // dd(\DB::getQueryLog());

         return view('contacts.index', compact('contacts'));
    }

    // Show New Contact form.
    // ================================================
    public function create()
    {
        $groups = Group::pluck('name', 'id');
        return view('contacts.create', compact('groups'));
    }


    // Updating a contact. 
    // ============================================
    public function edit(Contact $contact)
    {
        $groups = Group::pluck('name', 'id');
        return view('contacts.edit', compact('contact', 'groups'));
    }

    // Deleting a contact. 
    // ============================================
    public function delete(Contact $contact)
    {
        $contact->delete();
        $this->removePhoto($contact->photo);
        session()->flash('success', 'Contact deleted successfully');
        return back();
    }

    private function removePhoto($photo)
    {
        if (! empty($photo))
        {
            $file_path = $this->upload_dir . $photo;
            if (file_exists($file_path)) unlink($file_path);
        }

    }

    // For store and update methods.
    // ================================================


    private function getFileRequest(Request $request)
    {
        if ($request->hasFile('photo'))
        {
            $data = $request->all();
            $photo = $request->file('photo');
            $fileName = $photo->getClientOriginalName();
            $destination = $this->upload_dir;
            $photo->move($destination, $fileName);
            $data['photo'] = $fileName;
        }
        return $data;
    }

    public function update(Contact $contact, Request $request)
    {
        $this->validate(request(), $this->rules);
        $oldPhoto = $contact->photo;
        $data = $this->getFileRequest($request);
        $contact->update($data);
        if ($oldPhoto !== $contact->photo)
        {
            $this->removePhoto($oldPhoto);
        }
        session()->flash('success', 'Contact edited successfully.');
        return redirect()->back();
    }

    // Create new contact.
    // ================================================
    public function store(Request $request)
    {
        $this->validate(request(), $this->rules);

        $data = $this->getFileRequest($request);
        Contact::create($data);

        session()->flash('success', 'Contact added successfully.');
        return redirect()->back();
    }

}