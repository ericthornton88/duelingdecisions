@extends('layout')

@section('title')
Your decision has survived the ring!
@endsection

@section('main_content')
	<script>
	var choice = <?php echo $results ?>;


	</script>
	<script src="../JavaScript/duel.js"></script>
	<div class="middle-child">
		
	</div>
	

	<script id="template-choice" type="text/x-handlebars-template">
		<h3> @{{title}} </h3>
		<p>Details: @{{details}}</p>
		<ul>Pros
			<li>@{{pro}}</li>
		</ul>
		<ul>Cons
			<li>@{{con}}</li>
		</ul>
		<a href="/">Return to profile</a>
	</script>
@endsection
