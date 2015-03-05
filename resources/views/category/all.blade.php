@extends('layout')

@section('main_content')
	
	<h1>All Categories and Choices</h1>

	<?php $cur_cat = ''; ?>
	<div class="cat-container">
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

		
@endsection

