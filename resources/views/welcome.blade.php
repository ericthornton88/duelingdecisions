@extends('layout')

@section('header')
<header>
		<div class="btn-group open">
		  <a class="btn btn-primary" href="#"><i class="fa fa-user fa-fw"></i>Login/Sign Up</a>
		  {{-- <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#">
		    <span class="fa fa-caret-down"></span></a> --}}
		  <ul class="dropdown-menu">
		    <li><a href="#"><i class="fa fa-pencil fa-fw"></i> Edit</a></li>
		    <li><a href="#"><i class="fa fa-trash-o fa-fw"></i> Delete</a></li>
		    <li><a href="#"><i class="fa fa-ban fa-fw"></i> Ban</a></li>
		  </ul>
		</div>
		<div class="hero">
			<a href="/"><img src="/img/logo2.png" alt="Dueling Decisions"></a>
			{{-- <nav>
				<a href="/">Home</a> |
				<a href="/profile"> New Duel</a> |
				<a href="/"> Sign In</a> |
				<a href="logout"> Logout</a>
			</nav> --}}
			<h1>
			@section('title')
			@show
			</h1>
		</div>	
	</header>
@endsection

@section('title')
Your Decision is in the Ring!
@endsection

@section('main_content')
	<div>
		<h3>Having doubts about registering?</h3>
		<div>Making decisions is hard! Sometimes we have so many options that it prevents us from making any decision at all. Dueling Decisions can help you make your choice easier! When you log in, you'll be able to create categories to duel with! Add your options and get ready to duel!
		</div>
		<a href="info">More...</a>
	</div>
	<div>
		<h3>Login here:</h3>
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<div class="form-group">
				<label class="col-md-4 control-label">E-Mail Address</label>
				<div class="col-md-6">
					<input type="email" class="form-control" name="email" value="{{ old('email') }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-4 control-label">Password</label>
				<div class="col-md-6">
					<input type="password" class="form-control" name="password">
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<div class="checkbox">
						<label>
							<input type="checkbox" name="remember" class="check"> Remember Me
						</label>
					</div>
				</div>
			</div>

			<div class="form-group">
				<div class="col-md-6 col-md-offset-4">
					<button type="submit" class="btn btn-primary">Login</button>

					<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
				</div>
			</div>
		</form>
		<div>
			Not a member?
			<a class="btn-link"href="auth/register">Register Here</a>
		</div>
	</div>
@endsection
