<?php namespace App\Http\Controllers;

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

}
