@extends('layout')

@section('main_content')
		<h1>What's your duel of the day?</h1>
		<div class="main-profile">
			<aside class="left-profile">
				{{-- Ensure these links actually go to the appropriate pages. --}}
				<div>
					<h4>What categories do I have?</h4>
					<a href="">View Categories</a>
				</div>
				<div>
					<h4>What options do I have?</h4>
					<a href="">View Options</a>
				</div>
				<div>
					<h4>View your dueling victories?</h4>
					<a href="">View Past Duels</a>
				</div>
			</aside>
			<div class="duel-setup">
				
				<h4>Choose your category:</h4>
				<form action="">
					<select name="category">
					<?php $cur_cat = ''; ?>
					@foreach($category as $cat)
						@if($cur_cat != $cat->category_name)
						<?php $cur_cat = $cat->category_name; ?>
							<option value="<?php $cat->category_id?>">{{$cat->category_name}}</option>
						@endif
					@endforeach
					</select>
					<button>Choose this category</button>
				</form>
				<a href="">View Categories</a>
				<h4>Choose your options:</h4>
				<p></p>
				<form action="">
					<label>Check All:<input type="checkbox"></label>
					<fieldset>
						{{-- These will be populated from the database. --}}
						<label for="option1"><input type="checkbox" value="1">Option 1</label>
						<label for="option2"><input type="checkbox" value="2">Option 2</label>
						<label for="option3"><input type="checkbox" value="3">Option 3</label>
					</fieldset>
				<button>Start my duel!</button>
				</form>

			</div>
		</div>
@endsection

