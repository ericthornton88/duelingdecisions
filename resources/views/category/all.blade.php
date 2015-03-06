@extends('layout')

@section('title')
All Categories and Choices
@endsection

@section('main_content')
	<div>
		<?php $cur_cat = ''; ?>
		<div>
		{{-- LOBATAMIZED OWL GOES HERE KRISTIN --}}
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
		
@endsection

