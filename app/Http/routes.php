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
These routes need controllers and methods added to them.
***/
Route::get('duel', "addcontrollerhere");
Route::get('duel', function(){return view("duel");});
Route::get('logout', function(){return view("logout");});

