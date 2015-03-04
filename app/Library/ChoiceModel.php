<?php 
namespace App\Library;
use DB;
//class here. 
//name php file exactly what you make the class name.
//a new file for a new class
class ChoiceModel {
	
	public function getChoice() {
		$results = DB::select('
		SELECT * 
		FROM choice
		');
		
		return $results;
	}
}