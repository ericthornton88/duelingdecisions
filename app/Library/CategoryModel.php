<?php 
namespace App\Library;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class CategoryModel {
	
	public function getAllCategoryChoice() {
		$results = DB::select('
		SELECT category_name, title, category_id 
		FROM category
		LEFT JOIN choice using (category_id) 
		order by category_name
		');
		
		return $results;
	}

	public function getAllCategories() {
		$results = DB::select('
			SELECT * 
			from category
			');
		return $results;
	}

	public function newCategory($category_name) {
		$results = DB::insert('
			INSERT INTO category (category_name)
			VALUES (:category_name)',
			[':category_name' => $category_name]);
	}



}




