@extends('layout')

@section('title')
All Categories and Choices
@endsection

@section('main_content')
	<div class="first-child">
		<?php $cur_cat = ''; ?>
		<div>
			<h3>Categories</h3>
			<ul class="category">
			@foreach($category as $cat)
				@if($cur_cat == $cat->category_name)
					<div class="options">{{$cat->title}}</div>
				@else 
					</ul>
					<?php $cur_cat = $cat->category_name;?>
					
					<ul class="category"> <li>{{$cat->category_name}} <div class="options">{{$cat->title}}</div></li>
				@endif
			@endforeach
			</ul>
		</div>
	</div>
	<div class="last-child">
		<div><h2>Want to create a new category?</h2></div>
		<form action="/category/new" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<label>Category Name: <input type="text" name="category_name" required></label>		
			<button>Create this category</button>
		</form>
		<div><h2>Want to create a choice?</h2></div>
		<p>It's hard to have a duel with no choices in the category! <a href="/choice/new">Add a choice here.</a></p>
	</div>
		
@endsection

