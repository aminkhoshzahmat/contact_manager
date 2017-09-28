<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

	protected $fillable = ['group_id','name', 'company', 'email', 'phone', 'address', 'about', 'photo', 'created_at', 'updated_at'];

    public function group()
    {
    	return $this->belongsTo('App\Group');
    }

    public function scopeSearchByQueryString($query, $request)
    {
    	if ($request)
    	{
    	    $keywords = '%' . $request . '%';
    	    $query->orWhere('name',    'LIKE', $keywords )
    	          ->orWhere('company', 'LIKE', $keywords )
    	          ->orWhere('email',   'LIKE', $keywords );
    	}

    }
}
