<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use DB;

class AjaxController extends Controller {


	public function getChoice() {
		$choice = new ChoiceModel();
		$all_choice = $category->displayChoice();		
		return view('/profile', ['choice'=>$all_choice]);
	}

}
