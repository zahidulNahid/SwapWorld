@extends('layouts.master')

@section('title', 'Reset Password')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop

@section('content')
    <div class="content">
		<div class="main">
			<form method="post">
				{{csrf_field()}}
				<br>
				<br>
				@if(session()->has('message'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session()->get('message') }}
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
					</div>
				@endif
				
				<table align="center">
					<tr>
						<td>
							<div class="card" align="center" style="height: 180px;width: 800px;>
			                    <div class="card bg-light text-dark" align="center">
			                        <div class="card-body" align="center">
			                        	<label style="color: red">
											@foreach($errors->all() as $err)
											{{$err}} <br>
											@endforeach
										</label>
			                            <h5>Enter your email address and you will get a new password</h5>
			                            
			                            <input type="email" class="form-control" name="email" placeholder="Enter email address here" style="height:40px;width: 300px;">
			                            <input type="submit" name="send" value="SEND" style="height: 40px;width: 300px;">

			                        </div>
			                    </div>
			                </div>
			                <br>
			                <br>
						</td>
					</tr>
				</table>
				
			</form>
			
		</div>
	</div>
@stop


@section('footer')
    @parent
@stop