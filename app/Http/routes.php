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





/*** 
These routes need controllers and methods added to them.
***/
Route::get('profile', function(){return view("profile");});
Route::get('duel', "addcontrollerhere");
Route::get('logout', function(){return view("logout");});

