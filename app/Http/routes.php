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
Route::get('category/all', 'CategoryController@getCategories');
Route::get('profile', 'CategoryController@getAllCategories');


/*** 
Choice Routes
***/
Route::get('/choice/new', function(){return view("choice/newChoice");});
Route::post('/choice/new', 'ChoiceController@addChoice');


/*** 
Duel Routes
***/
Route::get('duel', function(){return view("duel");});


/*** 
Logging out Routes. 
***/
// This route needs functionality to actually log users out. 
Route::get('logout', function(){return view("logout");});

/***
Ajax Routes
***/
Route::get('/choice/{id}', 'AjaxController@getChoice');



