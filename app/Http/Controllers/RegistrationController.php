<?php namespace App\Http\Controllers;

use DB;

class RegistrationController extends Controller {

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
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
