@extends('layout')

@section('main_content')
<table>
@foreach($category as $cat)
<tr> <td>{{$cat->category_name}} <div class="options">Options go here</div></td></tr>

@endforeach
</table>
		
@endsection

