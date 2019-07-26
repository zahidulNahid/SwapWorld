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
									<td>Product Name: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="product_name"></td>
								</tr>
								<tr>
									<td>Furniture type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="furniture" name="furniture_type">
										<datalist id="furniture">
  											<option value="Sofa"></option>
  											<option value="Table"></option>
  											<option value="Chair"></option>
  											<option value="Dining Table"></option>
  											<option value="Dining Chair"></option>
  											<option value="Bed"></option>
  											<option value="Dressing Table"></option>
  											<option value="Wardrobe"></option>
  											<option value="Showcase"></option>
  											<option value="TV Stand"></option>
  											<option value="Book Shelfe"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td valign="top">Description: </td>
									<td valign="top"><textarea name="description" cols="50" rows="10" style="height:150px;width:350px;"></textarea>
					   				</td>
								</tr>
								<tr>
									<td>Used Time: </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input type="text" name="used_time">
									</td>
								</tr>
								<tr>
									<td>Your Product's Price: </td>
									<td>
										<input list="Price_range" name="price_range">
										<datalist id="Price_range">
  											<option value="500-3000"></option>
  											<option value="3001-6000"></option>
  											<option value="6001-9000"></option>
  											<option value="9001-12000"></option>
  											<option value="12001-15000"></option>
  											<option value="15001-18000"></option>
  											<option value="18001-21000"></option>
  											<option value="21001-25000"></option>
  											<option value="25001-30000"></option>
  											<option value="30001-35000"></option>
  											<option value="35001-40000"></option>
  											<option value="40001-50000"></option>
  											<option value="50001-60000"></option>
  											<option value="60001-70000"></option>
  											<option value="70001-80000"></option>
  											<option value="80001-90000"></option>
  											<option value="90001-100000"></option>
  											<option value="100001-110000"></option> 											
										</datalist>
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
									<td>Furniture type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="furniture" name="prefer_furniture_type">
										<datalist id="furniture">
  											<option value="Sofa"></option>
  											<option value="Table"></option>
  											<option value="Chair"></option>
  											<option value="Dining Table"></option>
  											<option value="Dining Chair"></option>
  											<option value="Bed"></option>
  											<option value="Dressing Table"></option>
  											<option value="Wardrobe"></option>
  											<option value="Showcase"></option>
  											<option value="TV Stand"></option>
  											<option value="Book Shelfe"></option>
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