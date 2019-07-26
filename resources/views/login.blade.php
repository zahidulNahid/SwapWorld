@extends('layouts.master')

@section('title', 'Login your account')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop

@section('content')
    <div class="content">
		<div class="main">
			

				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
					<div class="panel-body">
						<form role="form" method="post">
							{{csrf_field()}}
							@if(session()->has('message'))
								<div class="alert alert-danger alert-dismissible fade show" role="alert">
								{{ session()->get('message') }}
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
								</div>
							@endif
							<div class="form-group">
								<label for="exampleInputEmail1">Username or Email</label>
								<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password <a href="{{route('Mail.forgotPassword')}}">(forgot password)</a></label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
							</div>
							<button type="submit" class="btn btn-sm btn-default">Sign in</button>

							<p>Are you new?? Please Click Here <button class="btn btn-sm btn-default"><a style="color: white;" href="{{route('Login.registrationView')}}">Sign Up</a></button> </p>
						</form>
					</div>
				</div>


				</div>
			</div>
@stop


@section('footer')
    @parent
@stop
