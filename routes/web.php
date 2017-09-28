<?php

// Contacts Controller.
Route::get('/contacts', 'ContactsController@index')->name('contacts.index');
Route::get('/contacts/cards', 'ContactsController@cards');
Route::get('/contacts/create', 'ContactsController@create');
Route::post('/contacts/create', 'ContactsController@store');

Route::get('/contacts/{contact}/edit', 'ContactsController@edit');
Route::post('/contacts/update/{contact}', 'ContactsController@update');

Route::delete('/contacts/{contact}/delete', 'ContactsController@delete')->name('contacts.delete');


// Groups Controller.
Route::get('/contacts/{group}', 'GroupsController@index');
Route::get('/amin', 'GroupsController@amin');
Route::post('/groups/autocomplete', 'GroupsController@store');


// User Profile Controller.
Route::get('/profile', 'UsersController@index');

Route::get('/read/autocomplete', 'ContactsController@autocomplete')->name('contacts.autocomplete');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
