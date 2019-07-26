@extends('layouts.adminLogged')

@section('title', 'Home')

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
                <tr><td align="center" style="text-decoration: underline;"><h4>Users List</h4></td></tr>
                <!-- <tr>
                    @foreach($users_list as $key=>$data)
                            <td>
                                <div class="card" style="background-color: white; height: 180px;width: 150px;">
                                    <img src="{{URL::to('/profilePicture/'.$data->profilePicture)}}"  height="130" width="150" align="left" alt="user_image">
                                    <a href="{{Route('Admin.users_profile',['userId'=>$data->userId])}}">{{$data->fullName}}</a>                     
                                </div>
                            </td>
                                @if(($key==3))
                                    <tr></tr>
                                @endif
                    @endforeach
                </tr> -->                   
                @foreach($users_list as $data)
                    <tr>
                        <td>
                            <a href="{{Route('Admin.users_profile',['userId'=>$data->userId])}}">
                                <div class="card" style="height: 150px;width: 700px;>
                                    <div class="card bg-light text-dark">
                                        <div class="card-body">
                                            <img src="{{URL::to('/profilePicture/'.$data->profilePicture)}}"  height="130" width="150" align="left" alt="user_image">
                                                <h6 style="font-size: 25ppx">{{$data->fullName}}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td align="center">{{$users_list->render()}}</td>
                </tr>
            </table>
        </div>
    </div>
@stop


@section('footer')
    @parent
@stop
