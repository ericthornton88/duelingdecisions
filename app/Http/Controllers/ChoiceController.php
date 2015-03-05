<?php namespace App\Http\Controllers;

use App\Library\ChoiceModel;
use Request;
use DB;

class ChoiceController extends Controller {


	public function getChoices() {
		$all = new ChoiceModel();
		$all_categories = $all->getCategory();
		print_r($all_categories);

		return view('/category/new', ['category'=>$all_categories]);
	}

	public function addChoice() {
		$user_id = Request::input('user_id');
		$category_id = Request::input('category_id');
		$allData = Request::all();

		$choice = new ChoiceModel();
		$choice->newChoice($user_id, $category_id)->withInput($allData);
		return redirect("/profile");
	}

}
