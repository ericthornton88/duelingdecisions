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
		
	</div>

	<div class="middle-child select-choice">
		
	</div>

	<div class="last-child">
		
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
</script>

<script id="template-decision" type="text/x-handlebars-template">
	<form action="/duel/complete" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<label>Choice 1<input type="radio" value="@{{id_1}}" name="choice"></label>	
		<label>Choice 2<input type="radio" value="@{{id_2}}" name="choice"></label>
		<button>Submit</button>
	</form>
</script>








@endsection

