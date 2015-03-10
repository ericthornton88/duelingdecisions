@extends('layout')


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
