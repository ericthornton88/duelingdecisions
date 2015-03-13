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
		
		$resultsArray = Request::Except("_token", "category");
		$choice = new ChoiceModel();
		$results = $choice->duel($resultsArray);
		$json_results = json_encode($results);
		// print_r($results);
		return view('/duel', ['results'=>$json_results]);
		
	}

	public function endDuel() {
		// $resultsArray = Request::input("roundWinner");
		// print_r($resultsArray);
		$resultsArray = Request::Except("_token");
		$choice = new ChoiceModel();
		$results = $choice->duel($resultsArray);
		$json_results = json_encode($results);
		// echo $json_results;

		return view("/doneDuel", ['results'=>$json_results]);
	}

	public function completeDuel() {
		$resultsArray = Request::input("roundWinner");
		print_r($resultsArray);
		// $resultsArray = Request::Except("_token");
		// $choice = new ChoiceModel();
		// $results = $choice->duel($resultsArray);
		// $json_results = json_encode($results);
		// echo $json_results;
		echo ("made it here via a get!");

		return view("/doneDuel", ['results'=>$resultsArray]);
	}
}
