<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('registration', 'RegistrationController@index');


/*** 
These routes need controllers added to them.
***/
Route::get('profile', function(){return view("profile");});
Route::get('duel', "addcontrollerhere");



Route::get('logout', function(){return view("logout");});

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
