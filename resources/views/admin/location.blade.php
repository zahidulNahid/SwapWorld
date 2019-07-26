@extends('layouts.adminLogged')

@section('title', 'Location based search')

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
                        <tr><td style="font-size: 17px;">All ads -> search result for location -> {{ $location }}</td></tr>
                        <tr>
                            <td>                   
                                @foreach($electronics_data as $data)
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
                                @foreach($vehicles_data as $us)
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
                                @foreach($books_data as $us)
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
                        <tr>
                            <td>
                                @if(isset($result_number))
                                    <h2> No Result Found </h2>
                                @endif
                            </td>
                        </tr>                                  
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    {{ $electronics_data->render()}}
				</div>
			</div>

@stop


@section('footer')

    @parent
@stop