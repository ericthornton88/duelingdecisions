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

		<div class="container">
		    <div class="switch">
		      <input type="radio" class="switch-input" name="choice" value="@{{id_1}}" id="week" checked>
		      <label for="week" class="switch-label switch-label-off">@{{name_1}}</label>
		      <input type="radio" class="switch-input" name="choice" value="@{{id_2}}" id="month">
		      <label for="month" class="switch-label switch-label-on">@{{name_2}}</label>
		      <span class="switch-selection"></span>
		    </div>
		</div>
		<button>Submit</button>

</script>








@endsection

