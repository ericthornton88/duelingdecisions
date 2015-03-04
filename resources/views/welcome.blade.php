@extends('layout')

@section('main_content')
	<h1>Your Decision is in the Ring!</h1>
	<main>
		<span class="cloud"><i class="fa fa-cloud fa-5x"></i></span>
		<div class="brief-info">
			<h3>Having doubts about registering?</h3>
			<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptate 
			ducimus adipisci, expedita iste blanditiis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, dolores.
			 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, possimus.
			 similique obcaecati ipsa illum, maxime quia quas nisi officiis unde corporis voluptatem temporibus dolor sunt.</div>
			<a href="#">More...</a>
		</div>
		<div class="logo"><a href="/"><img src="/img/logo.png" alt="Home"></a> </div>
		<div class="credentials">
			<h3>Login here:</h3>
			<form action="">
				<div><label>Username: <input type="username"></label></div>
				<div><label>Password: <input type="password"></label></div>
				<button>Login</button>
			</form>
			<div>
				Not a member? 
				<a href="">Register Here</a>
			</div>
		</div>
	</main>
@endsection

