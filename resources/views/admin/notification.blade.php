@extends('layouts.logged')

@section('title', 'Notification')

@section('header')
    @parent
@stop
@section('nav-bar')
    
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
@section('nav-bar2')
    
@stop

@section('sidebar')
    @parent
@stop

@section('content')
    <div class="content">
		<div class="main">
            <table>
                <tr>
                <td>
                    <table>
                        <tr>
                            <td style="font-size: 15px;">
                                All category({{$total_ad}})
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'electronics'])}}">Electronics({{$total_electronics}})</a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'books'])}}">Books({{$total_books}})</a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">
                                <a href="{{route('Ad.searchByCategory',['category_name'=>'vehicles'])}}">Vehicles({{$total_vehicles}})</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'furniture'])}}">Furnitures({{$total_furniture}})</a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="#"></a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">All location({{$total_locationwise}})</td>
                        </tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Dhaka'])}}">Dhaka ({{$locationwise}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Chattogram'])}}">Chattogram({{$locationwise_ctg}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Khulna'])}}">Khulna({{$locationwise_khu}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Jessore'])}}">Jessore({{$locationwise_jes}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Barishal'])}}">Barishal({{$locationwise_bar}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Rajshahi'])}}">Rajshahi({{$locationwise_raj}})</a></td></tr>
                        <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Sylhet'])}}">Sylhet({{$locationwise_syl}})</a></td></tr>
                        <tr><td  style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Rangpur'])}}">Rangpur({{$locationwise_rng}})</a></td></tr>
                                
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <h2>Notification({{ $total_notification }})</h2>
                                @if($total_notification == 0)
                                    <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                        Your product did not match.
                                    </div>
                                @else
                                    @if(isset($e_noti))
                                        @foreach($e_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                Your prefer product matched with a electronics product.
                                                <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

                                @if($count_vnoti == 0)
                                    <br>
                                @else
                                    @if(isset($v_noti))
                                        @foreach($v_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                    Your prefer product mathced with vehicles product 
                                                    <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForVehicles',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

                                @if($count_bnoti == 0)
                                    <br>
                                @else
                                    @if(isset($b_noti))
                                        @foreach($b_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                Your prefer product matched with books product
                                                <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForBooks',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif
                            </td>
                        </tr>
                    </table>
                </td>
                </tr>
            </table>
		</div>
	</div>
@stop


@section('footer')
    @parent
@stop
