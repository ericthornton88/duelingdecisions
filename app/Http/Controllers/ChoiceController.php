<?php namespace App\Http\Controllers;

use App\Library\ChoiceModel;
use DB;

class ChoiceController extends Controller {


	public function getChoices() {
		$all = new ChoiceModel();
		$all_categories = $all->getCategory();
		print_r($all_categories);

		return view('/category/new', ['category'=>$all_categories]);
	}

	public function newChoice() {
		
	}

}
