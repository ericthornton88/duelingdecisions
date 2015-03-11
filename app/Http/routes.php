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

/*** 
Category Routes
***/
Route::get('category/all', 'CategoryController@getCategories');
Route::post('category/all', 'CategoryController@getCategories');
Route::post('category/new', 'CategoryController@newCategory');

/*** 
Choice Routes
***/
// Route::get('/choice/new', function(){return view("choice/newChoice");});
Route::get('/choice/new', 'CategoryController@getCategoryList');
Route::post('/choice/new', 'ChoiceController@addChoice');

Route::post('duel/complete', function(){return view("doneDuel");});
/*** 
Duel Routes
***/

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



