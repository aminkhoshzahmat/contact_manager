<?php




Route::get('/mycontacts', 'ContactsController@shit');

Route::get('/mycontacts/{contact_id}', 'ContactsController@shit');













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

// User Profile Controller.
Route::get('/profile', 'UsersController@index');

Route::get('/read/autocomplete', 'ContactsController@autocomplete')->name('contacts.autocomplete');