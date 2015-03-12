<?php namespace App\Http\Controllers;

use App\Library\UserModel;
use Request;
use DB;

class UserController extends Controller {



	public function updateUser($username, $email, $password, $first_name, $last_name) {
		$update = Request::all();
		$user = new UserModel();
		$update_user = $user->updateUserInfo($username, $email, $password, $first_name, $last_name);
		print_r($update);

		return view('profile');
	}


	
}
