@extends('layout')

@section("title")
	Your Duel...
@endsection

@section('main_content')
<script>
c = <?php echo $results ?>;
console.log(c);
</script>
<script src="../JavaScript/duel.js"></script>

	<div>
		<h3 class="choice-one">Choice 1 </h3>
		<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
		<ul>Pros
			<li></li>
		</ul>
		<ul>Cons
			<li>Con 1</li>
			<li>Con 2</li>
			<li>Con 3</li>
		</ul>
	</div>
	<div>
		<form action="">
			<label>Choice 1<input type="radio" value="1"></label>	
			<label>Choice 2<input type="radio" value="1"></label>	
			<button>Submit</button>
		</form>
	</div>
	<div>
		<h3>Choice 2 </h3>
		<p>Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, deleniti. Eaque dolores, optio. Illo id ad, exercitationem, consequuntur vitae dolore? Ratione quia debitis officiis ut? Eaque fugiat veritatis enim totam. </p>
		<ul>Pros
			<li>Pro 1</li>
			<li>Pro 2</li>
			<li>Pro 3</li>
		</ul>
		<ul>Cons
			<li></li>
			<li>Con 2</li>
			<li>Con 3</li>
		</ul>
	</div>
@endsection

