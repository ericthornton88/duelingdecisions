<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use DB;

class AjaxController extends Controller {


	public function getChoice($id) {
		$choice = new ChoiceModel();
		$all_choice = $choice->displayChoice($id);		
		return $all_choice;
	}

}
