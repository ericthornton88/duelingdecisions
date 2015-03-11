<?php namespace App\Http\Controllers;

use App\Library\CategoryModel;
use App\Library\ChoiceModel;
use Request;
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

	public function newCategory() {
		$name = Request::input('category_name');
		$category = new CategoryModel();
		$category->newCategory($name);
		$all_categories = $category->getAllCategoryChoice();		
		// return view('/category/all', ['category'=>$all_categories]);

		return redirect('category/all');

	}

	// 	public function getCategoryList() {
	// 	$category = new CategoryModel();
	// 	$all_categories = $category->getAllCategories();		
	// 	print_r($all_categories);
	// 	return view('choice/new', ['categories'=>$all_categories]);
	// }

}
