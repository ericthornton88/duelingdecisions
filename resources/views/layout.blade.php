<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dueling Decisions</title>
	<link rel="shortcut icon" href="/img/logo2.png"/>
	<link rel="stylesheet" href="<?php echo asset('css/normalize.css')?>" type="text/css">
	<link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
	<script src="/bower_components/handlebars/handlebars.js"></script>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../JavaScript/main.js"></script>
</head>
<body>
	
	@section('header')
	<?php
	use App\User;
	if (Auth::guest()) {
		$welcome = 'Login';
		$option_1 = 'Login';
		$link_1 = '/auth/login';
		$logo_1 = 'fa fa-sign-in';
		$option_2 = 'Register';
		$link_2 = '/auth/register';
		$logo_2 = 'fa fa-plus-square';
	} else {
		$user = \Auth::user()->first_name;
		$welcome = 'Welcome ' . $user;
		$option_1 = 'New Duel';
		$link_1 = '/profile';
		$logo_1 = 'fa fa-star';
		$option_2 = 'Logout';
		$link_2 = '/auth/logout';
		$logo_2 = 'fa fa-sign-out';
		// $option_3 = 'New';
	}
	
	
	?>
	<header>
		<div class="btn-group open">
		  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>{{$welcome}}</a>
		  <ul class="dropdown-menu">
		    <li><a href="{{$link_1}}"><i class="{{$logo_1}} fa-fw"></i>{{$option_1}}</a></li>
		    <li><a href="{{$link_2}}"><i class="{{$logo_2}} fa-fw"></i>{{$option_2}}</a></li>
		    {{-- <li><a href="#"><i class="fa fa-ban fa-fw"></i>{{$option_3}}</a></li> --}}
		  </ul>
		</div>
		<div class="hero">
			<a href="/"><img src="/img/logo2.png" alt="Dueling Decisions" class="logo"></a>
			<h1>
				@section('title')
				@show
			</h1>
		</div>	
	</header>
	@show
	<main>
		@yield('main_content')
	</main>
	
{{-- 	<div class="aftermain"></div> --}}
		@section('footer')
		<footer>
			<div>
				&copy 2015: 
				Written by Thor, Taco, &amp Drag
			</div>
			<div>
				<a href="/">Home</a>
				<a href="/info">Details</a>
				<a href="/auth/login">Login</a>
			</div>
		</footer>
	@show
</body>
</html>