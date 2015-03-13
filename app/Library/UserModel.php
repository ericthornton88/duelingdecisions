<?php 
namespace App\Library;
use DB;

class UserModel {
	
	

	public function retrieveUser() {
		$current_user = DB::select('
			select * 
			from user 
			WHERE user_id = :user_id', 
			[':user_id' => \Auth::User()->user_id]);
		return $current_user;

	}


	public function updateUserInfo( $first_name, $last_name, $email) {
		DB::update('
			UPDATE user 
			SET first_name = :first_name, last_name = :last_name, email = :email
			where user_id = :user_id
			', [ ':first_name' => $first_name, ':last_name' => $last_name,
			':email'=> $email, ':user_id' => \Auth::User()->user_id]);
		

	}




}




