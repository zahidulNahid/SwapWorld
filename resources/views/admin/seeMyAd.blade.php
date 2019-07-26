@extends('layouts.adminLogged')

@section('title', 'my ads')

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
                        <!-- <table>
                            <tr><td style="font-size: 12px;">My ads</td></tr>
                            <tr>
                                <td>                   
                                    @foreach($my_ad_for_electronics as $data)
                                        <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">
                                            <div class="card" style="background-color: rgb(214,220,220);height: 120px;width: 500px; text-align: left;">
                                                <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="user_image">
                                                    <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->model}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                            </div>
                                            <br>
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @foreach($my_ad_for_vehicles as $us)
                                        <a value="{{$var=$us->pid}}" href="{{route('User.viewProductForVehicles',['product_id'=>$var])}}">
                                            <div class="card" style="background-color: rgb(214,220,220);height: 120px;width: 500px; text-align: left;">
                                                <img src="{{URL::to('/productPicture/vehicles/'.$us->image)}}"  height="120" width="120" align="left" alt="vehicle_image">
                                                    <h6 style="font-size: 17px">{{$us->brand}} :</h6>
                                                    <B style="font-size: 17px">{{$us->vehicle_type}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$us->prefer_brand}}</B>
                                                    
                                            </div>
                                                <br>
                                        </a>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @foreach($my_ad_for_books as $us)
                                        <a value="{{$var=$us->pid}}" href="{{route('User.viewProductForBooks',['product_id'=>$var])}}">
                                            <div class="card" style="background-color: rgb(214,220,220);height: 120px;width: 500px; text-align: left;">
                                                <img src="{{URL::to('/productPicture/books/'.$us->image)}}"  height="120" width="120" align="left" alt="book_image">
                                                    <h6 style="font-size: 17px">{{$us->book_name}} :</h6>
                                                    <B style="font-size: 17px">{{$us->writer_name}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$us->prefer_category}}</B>
                                                    
                                            </div>
                                                <br>
                                        </a>
                                    @endforeach
                                </td>
                            </tr>                                  
                        </table> -->
                        <table>
                            <tr><td style="font-size: 12px;">My ads</td></tr>
                            <tr>
                                <td>                   
                                    @foreach($my_ad_for_electronics as $data)
                                        <a value="{{$var=$data->pid}}" href="{{route('Admin.viewProductForElectronics',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="electronic_image">
                                                    <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->model}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @foreach($my_ad_for_vehicles as $data)
                                        
                                        <a value="{{$var=$data->pid}}" href="{{route('Admin.viewProductForVehicles',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/vehicles/'.$data->image)}}"  height="120" width="120" align="left" alt="vehicle_image">
                                                    <h6 style="font-size: 17px">{{$data->brand}} :</h6>
                                                    <B style="font-size: 17px">{{$data->vehicle_type}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                    @endforeach
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    @foreach($my_ad_for_books as $data)
                                        
                                        <a value="{{$var=$data->pid}}" href="{{route('Admin.viewProductForBooks',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/books/'.$data->image)}}"  height="120" width="120" align="left" alt="book_image">
                                                    <h6 style="font-size: 17px">{{$data->book_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->writer_name}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_category}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                    @endforeach
                                </td>
                            </tr>                                  
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
