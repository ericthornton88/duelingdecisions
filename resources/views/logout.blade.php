@extends('layout')

@section("title")
	Had enough?
@endsection
s
@section('main_content')
	<div>
		<p>Are you sure you want to log out?</p>
		<form action="">
			<button>Log Out</button>
		</form>		
	</div>
	<div>
		<p>Did you want to stay logged in?
			<a href="/">Home</a>
		</p>
	</div>
@endsection

