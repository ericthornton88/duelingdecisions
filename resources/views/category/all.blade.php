@extends('layout')

@section('main_content')
	<h1>All Categories and Choices</h1>

	<div class="main-cat-container">
		<?php $cur_cat = ''; ?>
		<div class="cat-container">

		{{-- LOBATAMIZED OWL GOES HERE KRISTIN --}}
		{{-- <ul class="category"> --}}
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
		
@endsection

