<?php 
namespace App\Library;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class CategoryModel {
	
	public function getCategory() {
		$results = DB::select('
		SELECT category_name, title 
		FROM category
		LEFT JOIN choice using (category_id) 
		order by category_name
		');
		
		return $results;
	}
}




