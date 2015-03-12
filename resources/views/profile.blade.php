@extends('layout')


@section("title")
What's your duel of the day?
@endsection

@section('main_content')

	<div class="first-child">
		{{-- Ensure these links actually go to the appropriate pages. --}}
		<div>
			<h4>What categories do I have?</h4>
			<a href="category/all">View Categories</a>
		</div>
		<div>
			<h4>What options do I have?</h4>
			<a href="category/all">View Options</a>
		</div>
		<div>
			<h4>View your dueling victories?</h4>
			<a href="/">View Past Duels</a>
		</div>
	</div>


	<div class="last-child">		
		<h4>Choose your category:</h4>

		<form action="/duel" method='POST'>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<select name="category" class="startDuel">
			<?php $cur_cat = ''; ?>
			@foreach($category as $cat)
				@if($cur_cat != $cat->category_name)
				<?php $cur_cat = $cat->category_name; ?>
					<option value="{{$cat->category_id}}">{{$cat->category_name}}</option>
				@endif
			@endforeach
			</select>
			<a href="">View Categories</a>
			<h4>Choose your options:</h4>
			<fieldset class="options">
			{{-- Add the option id to this fieldset. --}}
			</fieldset>
			<button>Start my duel!</button>
		</form>
	</div>

@endsection

