@extends('layout')

@section('main_content')
	<h1>Your Decision is in the Ring!</h1>
	{{-- <span class="cloud"><i class="fa fa-cloud fa-5x"></i></span> --}}
	<main>
		<h2>Can't take the dueling?</h2>
		<p>Are you sure you want to log out?</p>
		<form action="">
			<button>Log Out</button>
		</form>
		<p>Did you want to stay logged in?
		<a href="/">Home</a>
		</p>
	</main>
@endsection

