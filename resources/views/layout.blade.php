<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dueling Decisions</title>
	<link rel="stylesheet" href="<?php echo asset('css/normalize.css')?>" type="text/css">
	<link rel="stylesheet" href="<?php echo asset('css/styles.css')?>" type="text/css">
</head>
<body>
<<<<<<< HEAD
	<div class="hero">
		<div>
			<header>
				@section('header')
					<a href="/"><img src="/img/logo.png" alt="Home"></a>
					<nav>
						<a href="">Home</a>
						<a href="">New Duel</a>
						<a href="">Something</a>
					</nav>
				@show
			</header>
		</div>
	</div>
=======
	<header>
		@section('header')
			<a href="/"><img src="/img/logo.png" alt="Home" height="100px" width="150px"></a>
			<nav>
				<a href="/">Home</a>
				<a href="">New Duel</a>
				<a href="">Sign In</a>
				<a href="">Logout</a>
			</nav>
		@show
	</header>
>>>>>>> bacbea43e57809aa5458bb879a26f4008fca7e59
	
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