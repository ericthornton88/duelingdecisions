@extends('layout')

@section('main_content')
	<?php $cur_cat = ''; ?>
	<ul>
	@foreach($category as $cat)
		@if($cur_cat == $cat->category_name)
			<div class="options">{{$cat->title}}</div>
		@else 
			</ul>
			<?php $cur_cat = $cat->category_name;?>
			
			<ul> <li>{{$cat->category_name}} <div class="options">{{$cat->title}}</div></li>
		@endif
	@endforeach
	</ul>

		
@endsection

