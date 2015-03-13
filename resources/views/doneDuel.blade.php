@extends('layout')

@section('title')
Your decision has survived the ring!
@endsection

@section('main_content')
	<script>
	// var choice = {{ $results }}
	<?php echo $results; ?>


	</script>
	<script src="../JavaScript/duel.js"></script>
	<div class="middle-child duel-container">
		
	</div>
	

	<script id="template-choice" type="text/x-handlebars-template">
		<?php print_r($results); ?>
		<h3> @{{title}} </h3>
		<p>Details: @{{details}}</p>
		Pros
		<ul>
			<li>@{{pro}}</li>
		</ul>
		Cons
		<ul>
			<li>@{{con}}</li>
		</ul>
		<a href="/">Return to profile</a>
	</script>
@endsection
