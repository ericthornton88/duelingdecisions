<?php 
namespace App\Library;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class CategoryModel {
	
	public function getCategory() {
		$results = DB::select('
		SELECT * 
		FROM category
		');
		
		return $results;
	}
}