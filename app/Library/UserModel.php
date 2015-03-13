<?php 
namespace App\Library;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class CategoryModel {
	
	// This one is giving an error.
	public function updateUserInfo($username, $email, $password, $first_name, $last_name) {
		$update = DB::update('
		UPDATE user SET username = :username , email = :email, password = :password, first_name = :first_name, last_name = :last_name 
		where user_id = :user_id
		', [':username'=> $username, ':email'=> $email, 'password' => $password, 'first_name' => $first_name, 'last_name' => $last_name , ':user_id' => \Auth::User()->user_id]);
		

	}




}




