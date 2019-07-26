@extends('layouts.master')

@section('title', ' Register new account')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop

@section('content')
    <div class="content">
		<div class="main">
<!-- 			<table border="0" width="100%">
				<tr>
					<td align="center"><h2>Swap your products with others</h2>
					<form method="post" enctype="multipart/form-data">
						{{csrf_field()}}
						<div class="card" style="background-color: #008080;color: white ;width: 700px;height: 550px;" align="center">
							<table>
								<tr><h3 align="center">New user registration</h3></tr>
								<tr>
									<td>FULL NAME: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="fullName"></td>
								</tr>
								<tr>
									<td>EMAIL: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="email"></td>
								</tr>
								<tr>
									<td>PHONE: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="phone"></td>
								</tr>
								<tr>
									<td>GENDER: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="radio" name="gender" value="male">Male<input type="radio" name="gender" value="female">Female<input type="radio" name="gender" value="other">Other</td>
								</tr>
								<tr>
									<td>UPLOAD AN IMAGE: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="file" name="profilePicture"></td>
								</tr>
								<tr>
									<td>PASSWORD: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="password" name="password"></td>
								</tr>
								<tr>
									<td>RE-PASSWORD: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="password" name="confirmPass"></td>
								</tr>
								<tr>
									<td></td>
									<td style="height: 50px;width: 350px" ><input type="submit" value="SUBMIT"></td>
								</tr>
								<tr>
									<td></td>
									<td>
									<br/>
									Click <a href="{{route('Login.loginView')}}">here</a> to login
									</td>
								</tr>

							</table>
						</div>
					</form>
			</table> -->

				<div class="panel panel-default">
					<div class="panel-heading"><h3 class="panel-title"><strong>Create your account </strong></h3></div>
					<div class="panel-body">
						<form method="post"  enctype="multipart/form-data">
							{{csrf_field()}}
							<div class="form-group">
								<label for="exampleInputName">Full Name :</label>
								<input type="text" class="form-control" id="exampleInputName" placeholder="Enter your full name" name="fullName" required>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail"> Email :</label>
								<input type="email" class="form-control" id="exampleInputEmail" placeholder="Enter your email address" name="email" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPhone">Phone :</label>
								<input type="text" class="form-control" id="exampleInputPhone" placeholder="Enter your phone number" name="phone" required>
							</div>
							<div class="form-group">
								<label for="exampleInputGender">Gender :</label>
								<input type="radio" name="gender" class="form-control" id="exampleInputGender">Male
								<input type="radio" name="gender" class="form-control" id="exampleInputGender">Female
								<input type="radio" name="gender" class="form-control" id="exampleInputGender">Other
							</div>
							<div class="form-group">
								<label for="exampleInputForPic">Upload an Image :</label>
								<input type="file" class="form-control" id="exampleInputForPic" name="profilePicture" required>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password :</label>
								<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter your Password" name="password" required>
							</div>
							<div class="form-group">
								<label for="exampleInputForConfirmPassword">Confirm your Password :</label>
								<input type="password" class="form-control" id="exampleInputForConfirmPassword" placeholder="Confirm your password" name="confirmPass" required>
							</div>
							<button type="submit" class="btn btn-sm btn-default">Sign Up</button>

							<p>Are you old user?? Please Click Here <button class="btn btn-sm btn-default"><a style="color: white;" href="{{route('Login.loginView')}}">Sign in</a></button> </p>
						</form>
					</div>
				</div>

		</div>
	</div>
@stop


@section('footer')
    @parent
@stop