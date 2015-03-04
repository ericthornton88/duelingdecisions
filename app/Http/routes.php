<?php


Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('duel', addcontrollerhere!!);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
