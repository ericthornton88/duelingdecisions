<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use DB;

class CategoryController extends Controller {


	public function getCategories() {
		$all = new CategoryModel();
		$all_categories = $all->getCategory();
		print_r($all_categories);

		return view('/category/new', ['category'=>$all_categories]);
	}

}
