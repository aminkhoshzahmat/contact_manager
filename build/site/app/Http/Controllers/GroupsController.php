<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Contact;
class GroupsController extends Controller
{
    public function index(Group $group, Request $request)
    {
    	// private $limitperpage = 10;

		$activePage = (explode("/", $request->getPathInfo()))[2];
		$allContacts = Contact::count();
    	$contacts =  $group->contacts()->paginate(10);
    	return view('contacts.index', compact('contacts', 'activePage'));
    }
}



