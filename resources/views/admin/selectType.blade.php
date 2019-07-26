@extends('layouts.adminLogged')

@section('title', 'Post an ad')

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
                                            <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'property'])}}"></a></td>
                                        </tr>
                                        <tr>
                                            <td style="font-size: 15px;">All location({{$total_locationwise}})</td>
                                        </tr>
                               <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Dhaka'])}}">Dhaka ({{$locationwise}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Chattogram'])}}">Chattogram({{$locationwise_ctg}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Khulna'])}}">Khulna({{$locationwise_khu}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Jessore'])}}">Jessore({{$locationwise_jes}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Barishal'])}}">Barishal({{$locationwise_bar}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Rajshahi'])}}">Rajshahi({{$locationwise_raj}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Sylhet'])}}">Sylhet({{$locationwise_syl}})</a></td></tr>
                                <tr><td  style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_admin',['location_name'=>'Rangpur'])}}">Rangpur({{$locationwise_rng}})</a></td></tr>
                                
                                </table>
                            </td>
                            <td>
                                <h3>Please Select a category you want to post ad :</h3>
                                <table>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/mobile.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_electronicsPage')}}"> Electronics</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/books.jpg')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_booksPage')}}"> Books</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/car.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_vehiclesPage')}}"> Vehicle</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/furniture.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{ route('Ad.postad_furniturePage')}}"> Furniture</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    
                                    <br> 
                                </table>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                </div>
            </div>


@stop


@section('footer')
    @parent
@stop
