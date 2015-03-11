@extends('layout')

@section("title")
	Your Duel...
@endsection

@section('main_content')
	<script>
	var c = <?php echo $results ?>;


	</script>
	<script src="../JavaScript/duel.js"></script>

	<div class="first-child">
		<h3 class="choice-one">Choice 1 </h3>
		<p>Details: <span class="choice-one-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam.</span></p>
		<ul>Pros
			<li class="choice-one-description">Pro 1</li>
		</ul>
		<ul>Cons
			<li>Con 1</li>
			
		</ul>
	</div>

	<div class="middle-child select-choice">
		<form action="">
			<label>Choice 1<input type="radio" value="1" name="choice"></label>	
			<label>Choice 2<input type="radio" value="2" name="choice"></label>	
			<button>Submit</button>
		</form>
	</div>

	<div class="last-child">
		<h3 class="choice-two">Choice 1 </h3>
		<p>Details: <span class="choice-two-details">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam.</span></p>
		<ul>Pros
			<li class="choice-two-description">Pro 1</li>
		</ul>
		<ul>Cons
			<li>Con 1</li>
			
		</ul>
	</div>


@endsection

