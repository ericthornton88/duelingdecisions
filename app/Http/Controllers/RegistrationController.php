<?php namespace App\Http\Controllers;

use DB;

class RegistrationController extends Controller {

	
	public function index()
	{
		return view('registration');
	}

	public function addUser()
	{
		//pass info in from registration
		return view('home');
	}

}
