@extends('layout')

@section('main_content')
<table>
@foreach($category as $cat)
<tr> <td>{{$cat->category_name}}</td></tr>
<script id="template-option-drop-down" type="text/x-handlebars-template">
<div>test div</div>
</script>
@endforeach
</table>
		
@endsection
