<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dueling Decisions</title>
	<link rel="stylesheet" href="/public/css/app.css">
	<link rel="stylesheet" href="/public/css/styles.css">
</head>
<body>
	<header>
		@section('header')
			<a href="/"><img src="/img/logo.png" alt="Home"></a>
			<a href="/">Home</a>
			<nav>
				<a href="">Home</a>
				<a href="">New Duel</a>
				<a href=""></a>
			</nav>
		@show
	</header>
	
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