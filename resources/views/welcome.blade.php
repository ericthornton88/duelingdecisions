@extends('layout')

@section('main_content')
	<h1>Your Decision is in the Ring!</h1>
<!-- 		<span class="cloud"><i class="fa fa-cloud fa-5x"></i></span>
-->		<div class="main-container-holder">
 			<div class="main-container details">
			<!-- <div class="brief-info"> -->
				<h3>Having doubts about registering?</h3>
				<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui voluptate 
				ducimus adipisci, expedita iste blanditiis Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi, dolores.
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed, possimus.
				 similique obcaecati ipsa illum, maxime quia quas nisi officiis unde corporis voluptatem temporibus dolor sunt.</div>
				<a href="#">More...</a>
			<!-- </div> -->
			</div>
		</div>
		<div class="main-container-holder">
			<div class="main-container login">
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
									<input type="checkbox" name="remember"> Remember Me
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
					<a href="/registration">Register Here</a>
				</div>
			</div>
		</div>
@endsection
