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
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../JavaScript/main.js"></script>
</head>
<body>
	
	@section('header')
	<header>
		<div class="hero">
			<a href="/"><img src="/img/logo2.png" alt="Dueling Decisions"></a>
			{{-- <nav>
				<a href="/">Home</a> |
				<a href="/profile"> New Duel</a> |
				<a href="/"> Sign In</a> |
				<a href="logout"> Logout</a>
			</nav> --}}
			<h1>
			@section('title')
			@show
			</h1>
		</div>	
	</header>
	@show
	<div class="main-container">
		<main>
			@yield('main_content')
		</main>
	</div>
	
{{-- 	<div class="aftermain"></div> --}}
		@section('footer')
		<footer>
			<div>
				&copy 2015: 
				Written by Thor, Taco, &amp Drag
			</div>
			<div>
				<div><a href="/">Home</a></div>
				<div><a href="info">Details</a></div>
				<div><a href="">Login</a></div>
			</div>
		</footer>
	@show
</body>
</html>