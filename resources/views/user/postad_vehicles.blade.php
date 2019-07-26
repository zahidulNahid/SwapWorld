@extends('layouts.logged')

@section('title', 'Post your ad')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
@section('nav-bar2')

@stop

@section('sidebar')
    @parent
@stop

@section('content')
    <div class="content">
		<div class="main">
			<form method="post" enctype="multipart/form-data">
				{{csrf_field()}}
					<h3>Swap your products with others</h3>
						<div class="card" style="width: 700px;background-image: url('/assets/images/vehicles.jpg');background-repeat: no-repeat;background-position: right top;margin-right: 250px;">
							<table>
								<tr><h4 align="center">Post your ad</h4></tr>
								<tr>
									<td>Location : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="locations" name="location">
										<datalist id="locations">
  											<option value="Dhaka"></option>
  											<option value="Chattogram"></option>
  											<option value="Khulna"></option>
  											<option value="Jessore"></option>
  											<option value="Rangpur"></option>
  											<option value="Barishal"></option>
  											<option value="Sylhet"></option>
  											<option value="Rajshahi"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Vehicle Type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="vehicles" name="vehicle_type">
										<datalist id="vehicles">
  											<option value="Car">Car</option>
  											<option value="MotorCycle">MotorCycle</option>
  											<option value="Electic Cycle">Electric Cycle</option>
  											<option value="Cycle">Cycle</option>
  											<option value="CNG">CNG</option>
  											<option value="Other">Other</option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Brand: </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="Brand" name="brand">
										<datalist id="Brand">
											<option value="TVS"></option>
											<option value="Suzuki"></option>
											<option value="Bajaj"></option>
											<option value="Yamaha"></option>
											<option value="Toyota"></option>
  											<option value="Nissan"></option>
  											<option value="Ford"></option>
  											<option value="Volks Wagan"></option>
  											<option value="Mitsubishi"></option>
  											<option value="Hyundai"></option>
  											<option value="Audi"></option>
  											<option value="BMW"></option>
											<option value="Marcedez"></option>
											<option value="Duronto"></option>
											<option value="Runner"></option>
											<option value="Zenshen"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Model year: </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="model_year"></td>
								</tr>
								<tr>
									<td>Fuel Type or not: </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="fuel_type" name="fuel_type">
										<datalist id="fuel_type">
											<option value="Octane"></option>
											<option value="Gas"></option>
											<option value="Electric"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Total kilometers run: </td>
									<td style="height: 50px;width:350px;" colspan="2">
										<input type="text" name="kilometers_run">
					   				</td>
								</tr>
								<tr>
									<td valign="top">Description: </td>
									
									<td valign="top"><textarea name="description" cols="50" rows="10" style="height:150px;width:350px;"></textarea>
					   				</td>
								</tr>
								<tr>
									<td>UPLOAD AN IMAGE: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="file" name="image"></td>
								</tr>
								<tr>
									<td></td>
									<td><h4>Now select your prefer product choice :</h4></td>
								</tr>
								<tr>
									<td>Vehicle Type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="vehicles" name="prefer_device_type">
										<datalist id="vehicles">
  											<option value="Car">Car</option>
  											<option value="MotorCycle">MotorCycle</option>
  											<option value="Electic Cycle">Electric Cycle</option>
  											<option value="Cycle">Cycle</option>
  											<option value="CNG">CNG</option>
  											<option value="Other">Other</option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Brand: </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="Brand" name="prefer_brand">
										<datalist id="Brand">
											<option value="TVS"></option>
											<option value="Suzuki"></option>
											<option value="Bajaj"></option>
											<option value="Yamaha"></option>
											<option value="Toyota"></option>
  											<option value="Nissan"></option>
  											<option value="Ford"></option>
  											<option value="Volks Wagan"></option>
  											<option value="Mitsubishi"></option>
  											<option value="Hyundai"></option>
  											<option value="Audi"></option>
  											<option value="BMW"></option>
											<option value="Marcedez"></option>
											<option value="Duronto"></option>
											<option value="Runner"></option>
											<option value="Zenshen"></option>
										</datalist>
									</td>
								</tr>
									<td></td>
									<td style="height: 50px;width: 350px;"><input type="submit" value="SUBMIT" style="height: 30px;width: 350px;background-color: rgb(30, 144, 255);"></td>
								</tr>

								<tr>
									<label style="color: red">
									@foreach($errors->all() as $err)
									{{$err}} <br>
									@endforeach
									</label>
								</tr>
							</table>
						</div>
			</form>
		</div>
	</div>
@stop


@section('footer')
    @parent
@stop