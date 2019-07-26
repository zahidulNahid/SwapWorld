@extends('layouts.adminLogged')

@section('title', 'All Ads')

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
                                <table>
                                    <tr><td style="font-size: 12px;">All ads</td></tr>
                                    <tr>
                                        <td>                   
                                            @foreach($electronics_data as $data)
                                            <a value="{{$var=$data->pid}}" href="{{route('Admin.viewProductForElectronics',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="user_image">
                                                            <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                            <B style="font-size: 17px">{{$data->model}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$data->prefer_brand}}</B><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>

                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        @foreach($vehicles_data as $us)

                                            <a value="{{$var=$us->pid}}" href="{{route('Admin.viewProductForVehicles',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/vehicles/'.$us->image)}}"  height="120" width="120" align="left" alt="vehicle_image">
                                                            <h6 style="font-size: 17px">{{$us->brand}} :</h6>
                                                            <B style="font-size: 17px">{{$us->vehicle_type}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$us->prefer_brand}}</B><br>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        @foreach($books_data as $us)
                                                <a value="{{$var=$us->pid}}" href="{{route('Admin.viewProductForBooks',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/books/'.$us->image)}}"  height="120" width="120" align="left" alt="book_image">
                                                            <h6 style="font-size: 17px">{{$us->book_name}} :</h6>
                                                            <B style="font-size: 17px">{{$us->writer_name}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$us->prefer_category}}</B><br>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                            @endforeach
                                        </td>
                                    </tr>
                                     <tr>
                                        <td>
                                            @foreach($furniture_data as $us)
                                                    <a value="{{$var=$us->pid}}" href="{{route('Admin.viewProductForFurniture',['product_id'=>$var])}}">
                                                    <div class="card" style="height: 150px;width: 500px;>
                                                        <div class="card bg-light text-dark">
                                                            <div class="card-body">
                                                                <img src="{{URL::to('/productPicture/furniture/'.$us->image)}}"  height="120" width="120" align="left" alt="furniture_image">
                                                                <h6 style="font-size: 17px">{{$us->product_name}} :</h6>
                                                                <B style="font-size: 17px">{{$us->furniture_type}}</B>

                                                                <h6 style="font-size: 17px;">want to swap with: </h6>
                                                                <B style="font-size: 17px;">{{$us->prefer_furniture_type}}</B>
                                                                <br>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                @endforeach
                                            </td>
                                        </tr>
 
                                    <tr>
                                        <td>
                                            @if(isset($max_page))
                                                @if($max_page==$total_electronics)
                                                    <p style="">{{ $electronics_data->render()}}</p>
                                                    Hello       
                                                @elseif($max_page==$total_books)
                                                    <p style="">{{ $books_data->links() }}</p>
                                                    Condom
                                                @elseif($max_page == $total_furniture)
                                                    <p style="">{{ $furniture_data->render()}}</p> 
                                                @else
                                                    <p style="">{{ $vehicles_data->render()}}</p>     
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
