@extends('layout')

@section('main_content')
	<h1>Want to see your decisions in the ring?</h1>
	<main>
		<h2>Add a new choice.</h2>
		<form action="" method="POST">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="category_id" value="1" required>
			<input type="hidden" name="user_id" value="1" required>
			<label>Choice Name: <input type="text" name="title" required></label>
			<label>Details: <input type="text" name="details"></label>
			<label>Rating: Low <input type="range" name="rating" min="1" max="5"> High </label>
			
			<fieldset>
			<p>Add pros or cons.</p>
			<input type="text" name="description">
			<label for="is_pro">Is this a pro?
				<input type="checkbox" value="1" name="is_pro">
			</label>
			<button>Add</button>
		</form>
	</main>
@endsection

