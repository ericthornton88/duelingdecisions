<?php 
namespace App\Library;
use Request;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class ChoiceModel {
	

	public function getChoices() {
		$results = DB::select('
		SELECT * 
		FROM choice
		');		
		return $results;
	}
		
	public function newChoice($user_id, $category_id) {
		$user_id = Request::input('user_id');
		$categry_id = Request::input('categry_id');
		$details = Request::input('details');
		$title = Request::input('title');

		DB::insert(
			'INSERT INTO choice 
			(category_id, user_id, details, title) 
			values (:category_id, :user_id, :details, :title)',
			[':user_id' 	=> $user_id,
			 ':category_id' => $category_id,
			 ':details' 	=> $details,
			 ':title' 		=> $title,
			]);
		$insert_id = DB::getPdo()->lastInsertId();

		$is_positive = Request::input('is_positive');
		$rating = Request::input('rating');
		$description = Request::input('description');

		DB::insert(
			'INSERT INTO user_choice_feature 
			(choice_id, is_positive, rating, description) 
			values (:choice_id, :is_positive, :rating, :description)',
			[':is_positive' 	=> $is_positive,
			 ':choice_id' 		=> $insert_id,
			 ':rating' 			=> $rating,
			 ':description' 	=> $description,
			]);
		return redirect('/');
	}	
	

	public function displayChoice($id) {
		$results = DB::select('
		SELECT category_name, title, category_id, choice_id
		FROM category
		LEFT JOIN choice using (category_id) 
		where category_id = :category_id
		', [':category_id'=>$id]);
		return $results;
	}


	public function duel($resultsArray) {
		// ToDo: Loop through all the array items, to ensure they are all integers	to prevent SQL injection.
		$implosion = implode(", ", $resultsArray);			
		$sql = "SELECT *
		FROM choice
		Join user_choice_feature using (choice_id)
		where choice_id in ($implosion)"; 

		$sqlValues = DB::Select($sql);

		// return results (which is an array).
		return $sqlValues;

	}




}