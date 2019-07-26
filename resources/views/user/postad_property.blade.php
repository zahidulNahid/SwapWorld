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
    
@stop

@section('content')
    <div class="content">
		<div class="main">
			<form method="post" enctype="multipart/form-data">
				{{csrf_field()}}
					<h3>Swap your products with others</h3>
						<div class="card" style="width: 700px;background-image: url('/assets/images/furniture.png');background-repeat: no-repeat;background-position: right top;margin-right: 250px;">
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
									<td>Address : </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="address"></td>
								</tr>
								
								<tr>
									<td>Land Type: </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="land_types" name="land_type">
										<datalist id="land_types">
											<option value="Residential"></option>
											<option value="Agricultural"></option>
											<option value="Commercial"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Land Size: </td>
									<td  style="height: 50px;width: 350px" colspan="2"><input type="text" name="number" style="width: 100px;">
									<input type="radio" name="unit" value="Kathas">Kathas<input type="radio" name="unit" value="Bighas">Bighas<input type="radio" name="unit" value="Hector">Hectors</td>
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
									<td>Your Product's Price: </td>
									<td>
										<input list="Price_range" name="price_range">
										<datalist id="Price_range">
  											<option value="50000-300000"></option>
  											<option value="300001-600000"></option>
  											<option value="600001-900000"></option>
  											<option value="900001-1200000"></option>
  											<option value="1200001-1500000"></option>
  											<option value="1500001-1800000"></option>
  											<option value="1800001-2100000"></option>
  											<option value="2100001-2500000"></option>
  											<option value="2500001-3000000"></option>
  											<option value="3000001-3500000"></option>
  											<option value="3500001-4000000"></option>
  											<option value="4000001-5000000"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td></td>
									<td><h4>Now select your prefer product choice :</h4></td>
								</tr>
								<tr>
									<td> Prefer Location : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="locations" name="prefer_location">
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
									<td>Prefer Land Size: </td>
									<td  style="height: 50px;width: 350px" colspan="2"><input type="text" name="prefer_number" style="width: 100px;">
									<input type="radio" name="prefer_unit" value="Kathas">Kathas<input type="radio" name="prefer_unit" value="Bighas">Bighas<input type="radio" name="prefer_unit" value="Hector">Hectors</td>
								</tr>
								<tr>
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