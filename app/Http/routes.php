<?php


Route::get('/', 'WelcomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



/*** 
New Registration Routes
***/
Route::get('registration', 'RegistrationController@index');
Route::get('registration/adduser', 'RegistrationController@addUser');
Route::get('profile', 'CategoryController@getAllCategories');
Route::get('info', function(){return view('info');});
Route::get('/edit', function(){return view('updateUser');});
Route::post('/edit', 'UserController@updateUser');

/*** 
Category Routes
***/
Route::get('category/all', 'CategoryController@getCategories');
Route::post('category/all', 'CategoryController@getCategories');
Route::post('category/new', 'CategoryController@newCategory');

/*** 
Choice Routes
***/

Route::get('/choice/new', "CategoryController@getCategoryList");
Route::post('/choice/new', 'ChoiceController@addChoice');
Route::get('/choice/{choice_id}/delete', 'ChoiceController@deleteChoice');



/*** 
Duel Routes
***/
Route::post('duel/complete', "AjaxController@endDuel");
Route::get('duel/complete', function(){return view("doneDuel");});
Route::post('/duel', "AjaxController@initDuel");


/*** 
Logging out Routes. 
***/
// This route needs functionality to actually log users out. 
Route::get('logout', function(){return view("logout");});

/***
Ajax Routes
***/
Route::get('/choice/{id}', 'AjaxController@getChoice');





