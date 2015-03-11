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
		<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
		<ul>Pros
			<li class="pro">Pro 1	</li>
		</ul>
		<ul>Cons
			<li>Con 1</li>
			
		</ul>
	</div>

	<div class="middle-child select-choice">
		<form action="">
			<label>Choice 1<input type="radio" value="1"></label>	
			<label>Choice 2<input type="radio" value="1"></label>	
			<button>Submit</button>
		</form>
	</div>

	<div class="last-child">
		<h3 class="choice-two">Choice 2 </h3>
		<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
		<ul>Pros
			<li>Pro 1</li>
		
		</ul>
		<ul>Cons
			<li class="con">Con 2</li>
		</ul>
	</div>

@endsection

