@extends('layout')

@section('main_content')
	<h1>Had enough?</h1>
	<main>
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
	</main>
@endsection

