@extends('layout')

@section('title')
Register to Duel!
@endsection


@section('main_content')
<div>
	<form action="registration/adduser"> {{-- Where does this send to? --}}
		Full Name: <input type="text">
		Email: <input type="text">
		Password: <input type="password">
		Re-enter password: <input type="password">
		<select name="gender">
			<option value="m">Male</option>
			<option value="f">Female</option>
			<option value="u">Choose not to Answer</option>
		</select>
		Gender: <input type="text">
		<button>Submit</button>
	</form>
</div>
@endsection
