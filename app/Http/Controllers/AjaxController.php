<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use DB;
use Request;

class AjaxController extends Controller {


	public function getChoice($id) {
		$choice = new ChoiceModel();
		$all_choice = $choice->displayChoice($id);		
		return $all_choice;
	}

	public function initDuel() {
		print_r($_POST);
		$resultsArray = Request::Except("_token", "category");
		$choice = new ChoiceModel();
		$results = $choice->duel($resultsArray);
		// ->withInput($allData);
		// print_r($allData);
		return view('/duel');
		// ->withInput($allData);
		// do something with results.
	}

}
