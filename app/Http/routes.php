<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('duel', "addcontrollerhere");

Route::get('registration', 'RegistrationController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
