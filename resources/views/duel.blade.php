@extends('layout')

@section('main_content')
	<h1>Your Duel...</h1>
	<main>
		<div>
			<h3>Choice 1 Name</h3>
			<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
			<ul>Pros
				<li>Pro 1</li>
				<li>Pro 2</li>
				<li>Pro 3</li>
			</ul>
			<ul>Cons
				<li>Con 1</li>
				<li>Con 2</li>
				<li>Con 3</li>
			</ul>
		</div>
		<div class="decision">
			<form action="">
				<label>Choice 1<input type="radio" value="1"></label>	
				<label>Choice 2<input type="radio" value="1"></label>	
				<button>Submit</button>
			</form>
		</div>
		<div>
			<h3>Choice 2 Name</h3>
			<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
			<ul>Pros
				<li>Pro 1</li>
				<li>Pro 2</li>
				<li>Pro 3</li>
			</ul>
			<ul>Cons
				<li>Con 1</li>
				<li>Con 2</li>
				<li>Con 3</li>
			</ul>
		</div>
	</main>
@endsection

