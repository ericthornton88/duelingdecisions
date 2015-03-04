@extends('layout')

@section('main_content')
	<div>Hello</div>
	<div>We will make this our home page. We are currently using laravel</div>
	<h1>Your decisions in the ring!</h1>
	<main>
		<div class="brief-info">
			<h3>Having doubts about registering?</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptate ducimus adipisci, expedita iste blanditiis similique obcaecati ipsa illum, maxime quia quas nisi officiis unde corporis voluptatem temporibus dolor sunt.</div>
		</div>
		<div class="credentials">
			<h3>Login here:</h3>
			<form action="">
				<label>Username: <input type="username"></label>
				<label>Password: <input type="password"></label>
				<button>Login</button>
			</form>
			<div>
				Not a member? 
				<a href="">Register Here</a>
			</div>
		</div>
	</main>
@endsection

