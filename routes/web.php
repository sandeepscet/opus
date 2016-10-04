<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
Route::get('people', function() {
	return view('people.people');
});
Route::get('people/{id}', function() {
    return view('people.profile');
});


/*
|--------------------------------------------------------------------------
| Organization Routes
|--------------------------------------------------------------------------|
*/
Route::get('organizations',  ['uses' => 'OrganizationController@index', '']);
Route::get('organizations/{id}',  ['uses' => 'OrganizationController@show', '']);
Route::post('organizations',  ['uses' => 'OrganizationController@store', '']);
Route::patch('organizations/{id}',  ['uses' => 'OrganizationController@update', '']);
Route::delete('organizations/{id}',  ['uses' => 'OrganizationController@destroy', '']);

/*
|--------------------------------------------------------------------------
| Wiki Routes
|--------------------------------------------------------------------------|
*/
Route::get('wikis', ['uses' => 'WikiController@index', ]);
Route::get('wikis/{id}', ['uses' => 'WikiController@show', ]);
Route::post('wikis', ['uses' => 'WikiController@store', ]);
Route::patch('wikis/{id}', ['uses' => 'WikiController@update', ]);
Route::delete('wikis/{id}', ['uses' => 'WikiController@destroy', ]);
