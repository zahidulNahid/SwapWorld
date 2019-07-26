@extends('layouts.logged')

@section('title', 'Post your ad')

@section('header')
    @parent
@stop
@section('nav-bar')
    <!-- <div class="nav-bar" align="right">
        <ul class="nav">
            <li><a href="{{route('Admin.index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a></li>
            <li><img src="{{URL::to('/profilePicture/'.$user->profilePicture)}}"  height="50" width="50" alt="user_image"></li>
            <div class="btn" style="background-color: black;font-size: 15px;"><a href="{{route('Admin.profile')}}">profile</a></div> 
            <div class="btn " style="background-color: black;font-size: 15px;"><a href="{{route('User.notification')}}">        <button style="font-size:15px">Notification<i class="fa fa-bell"></i></button></a></div>
            <div class="btn" style="background-color: black;font-size: 15px;"><a href="{{ route('Admin.messageBox')}}">Messege</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.users_list')}}">User List</a></div>              
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.withLoggedAdView')}}">All Ads</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.selectType')}}">Post your ad</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Logout.index')}}">logout</a></div>                 
        </ul>
    </div> -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="{{route('Admin.index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">               
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <!-- <li class="nav-item">
                        <img src="{{URL::to('/profilePicture/'.$user->profilePicture)}}"  height="50" width="50" alt="user_image"/>
                    </li> -->
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Admin.notification')}}">Notification <i class="fa fa-bell"></i></a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Admin.profile')}}">profile</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{ route('Admin.messageBox')}}">Messege</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{ route('Admin.users_list')}}">User List</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Admin.withLoggedAdView')}}">All Ads</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Admin.selectType')}}">Post your ad</a></button>
                    <button class="btn btn-outline-success my-2 my-sm-0"><a style="color: white;" href="{{route('Logout.index')}}">logout</a></button>
                </form>
            </div>
        </nav>
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
						<div class="card" style="width: 700px;background-image: url('/assets/images/mobile.png');background-repeat: no-repeat;background-position: right top;margin-right: 250px;">
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
									<td>Device Type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="devices" name="device_type">
										<datalist id="devices">
  											<option value="Mobile">Mobile</option>
  											<option value="Computer">Computer</option>
  											<option value="Laptop">Laptop</option>
  											<option value="Electronics">Electronics</option>
  											<option value="Other">Other</option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Product Name: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="product_name"></td>
								</tr>
								<tr>
									<td>Brand: </td>
									<td style="height: 50px;width: 350px" colspan="2">
									<input list="Brand" name="brand">
										<datalist id="Brand">
											<option value="Asus"></option>
											<option value="Acer"></option>
											<option value="Dell"></option>
											<option value="HP"></option>
											<option value="mac"></option>
  											<option value="Xiaomi"></option>
  											<option value="Samsung"></option>
  											<option value="Nokia"></option>
  											<option value="iPhone"></option>
  											<option value="Huawei"></option>
  											<option value="Oppo"></option>
  											<option value="Symphony"></option>
											<option value="Others"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Model: </td>
									<td style="height: 50px;width: 350px" colspan="2"><input type="text" name="model"></td>
								</tr>
								<tr>
									<td>Used Time: </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input type="text" name="used_time">
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
									<td></td>
									<td><h4>Now select your prefer product choice :</h4></td>
								</tr>
								<tr>
									<td>Device Type : </td>
									<td style="height: 50px;width: 350px" colspan="2">
										<input list="devices" name="prefer_device">
										<datalist id="devices">
  											<option value="Mobile">Mobile</option>
  											<option value="Computer">Computer</option>
  											<option value="Laptop">Laptop</option>
  											<option value="Electronics">Electronics</option>
  											<option value="Other">Other</option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Brand: </td>
									<td style="height: 50px;width: 350px;" colspan="2">
									<input list="Brand" name="prefer_brand">
										<datalist id="Brand">
											<option value="Asus"></option>
											<option value="Acer"></option>
											<option value="Dell"></option>
											<option value="HP"></option>
											<option value="mac"></option>
  											<option value="Xiaomi"></option>
  											<option value="Samsung"></option>
  											<option value="Nokia"></option>
  											<option value="iPhone"></option>
  											<option value="Huawei"></option>
  											<option value="Oppo"></option>
  											<option value="Symphony"></option>
											<option value="Others"></option>
										</datalist>
									</td>
								</tr>
								<tr>
									<td>Model: </td>
									<td style="height: 50px;width: 350px;" colspan="2"><input type="text" name="prefer_model"></td>
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