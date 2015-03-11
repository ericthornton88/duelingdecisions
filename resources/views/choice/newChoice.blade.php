@extends('layout')

@section('title')
Want to see your decisions in the ring? Add a new choice.
@endsection

<form action="" method="POST">
	 <?php // print_r($categories); ?>
@section('main_content')
	<div class="first_child">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="user_id" value="1" required>
		<select name="category_id">
		</select>
		<input type="hidden" name="category_id" value="1" required>
		<label>Choice Name: <input type="text" name="title" required></label>
		<label>Details: <input type="text" name="details"></label>
		<label>Rating: Low <input type="range" name="rating" min="1" max="5"> High </label>
	</div>
	<div class="last_child">
		<fieldset>
			<p>Add pros or cons.</p>
			<input type="text" name="description">
			<p>What kind of feature is this?</p>
			<label for="is_positive">
				Positive <input type="radio" value="1" name="is_positive">
				Negative <input type="radio" value="0" name="is_positive">
			</label>
		</fieldset>
		<button>Add</button>
	</div>
@endsection
</form>

