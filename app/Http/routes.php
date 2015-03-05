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
<<<<<<< HEAD
=======
Route::post('/choice/new', 'ChoiceController@addChoice');
>>>>>>> f80d471fd6d8d3ae0a030d1ea0c0de629c6fe4db


/*** 
These routes need controllers and methods added to them.
***/
Route::get('duel', "addcontrollerhere");
Route::get('logout', function(){return view("logout");});

