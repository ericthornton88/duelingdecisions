<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use DB;

class CategoryController extends Controller {


	public function getCategories() {
		$category = new CategoryModel();
		$all_categories = $category->getAllCategoryChoice();		


		return view('/category/all', ['category'=>$all_categories]);
	}

	public function getAllCategories() {
		
		$category = new CategoryModel();
		$all_categories = $category->getAllCategoryChoice();

		return view('profile', ['category'=>$all_categories]);		



	}

}
