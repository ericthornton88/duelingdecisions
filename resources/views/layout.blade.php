<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dueling Decisions</title>
	<link rel="stylesheet" href="<?php echo asset('css/normalize.css')?>" type="text/css">
	<link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Orbitron:900,400' rel='stylesheet' type='text/css'>
</head>
<body>
	
	@section('header')
	<header>
		<div class="hero">
			<a href="/"><img src="/img/logo.png" alt="Dueling Decisions"></a>
			<nav>
				<a href="/">Home</a>
				<a href="/profile">New Duel</a>
				<a href="/">Sign In</a>
				<a href="logout">Logout</a>
			</nav>
		</div>	
	</header>
	@show
	
	<main>
		@yield('main_content')
	</main>

	<footer>
		@section('footer')
		<div>&copy 2015</div>
		<div>Rockit Bootcamp</div>
		<div>Eric Thornton, Garrett Tacoronte, Kristin Dragos</div>
		@show
	</footer>
</body>
</html>