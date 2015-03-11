@extends('layout')

@section('title')
Upgrade your choices with current information.
@endsection

@section('main_content')
	<form action="/choice/update" method="POST">
		<div class="first_child">

		</div>
		<div class="last_child">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="hidden" name="user_id" value="{{\Auth::User()->user_id}}" required>
			<div>
				<select name="category_id">
{{-- 					@foreach($categories as $cat)				
						<option value="{{$cat->category_id}}" required>{{$cat->category_name}}</option>
					@endforeach --}}
				</select>
			</div>	
			<div>	
				<label>Choice Name: <input type="text" name="title" required></label>
			</div>
			<div>
				<label>Details: <input type="text" name="details"></label>
			</div>
			<div>
				<label>Rating: Low <input type="range" name="rating" min="1" max="5"> High </label>	
			</div>
			<fieldset>
				<p>Add pros or cons.</p>
				<input type="text" name="description">
				<p>What kind of feature is this?</p>
				<label for="is_positive">
					Pro <input type="radio" value="1" name="is_positive">
					Con <input type="radio" value="0" name="is_positive">
				</label>
			</fieldset>
			<button>Add</button>
		</div>
	</form>
@endsection

