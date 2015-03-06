<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use DB;

class AjaxController extends Controller {


	public function getChoice() {
		$category = new CategoryModel();
		$all_categories = $category->getAllCategoryChoice();		
		return view('/profile', ['choice'=>$all_categories]);
	}

}
