<?php namespace App\Http\Controllers;

use App\Library\UserModel;
use Request;
use DB;

class UserController extends Controller {

	public function currentUser() {
		$user = new UserModel();
		$current_user = $user->retrieveUser();
		print_r($current_user);
		return view('updateUser', ['current'=>$current_user[0]]);
	}

	public function updateUser() {
		$first_name = Request::input('first_name');
		$last_name = Request::input('last_name');
		$email = Request::input('email');

		$user = new UserModel();
		$update_user = $user->updateUserInfo($first_name, $last_name, $email);
		

		return redirect('/profile');
	}


	
}
