@extends('layouts.adminLogged')

@section('title', 'Messages')

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
            <form method="post">
                {{csrf_field()}}
            <div class="chatbox">
                <div class="chatlogs">
                    <b>{{ $reader_data->fullName }}</b>
                    @if(count($previous_msg) == 0)
                        <h3>You have not chat with guy. Send a message.</h3>
                    @else
                     @foreach($previous_msg as $msg)
                        @if($msg->sender_userId == $user->userId)
                            <div class="chat self_user">
                                <div class="user-photo"><img src="{{URL::to('/profilePicture/'.$user->profilePicture)}}" height="60px" width="60" style="border-radius: 50%;"></div>
                                <p class="chat-message">{{ $msg->msg }}</p>
                            </div>
                        @else
                            <div class="chat friend">
                                <div class="user-photo"><img src="{{URL::to('/profilePicture/'.$reader_data-->profilePicture)}}" height="60px" width="60" style="border-radius: 50%;"></div>
                                <p class="chat-message">{{ $msg->msg }}</p>
                            </div>
                        @endif
                     @endforeach
                    @endif`
                       
                </div>

                <div class="chat-form">
                    <textarea name="msg""></textarea><input type="submit" name="submit" value="SEND" style="height: 60px;width: 100px;background-color: royalblue;">
                </div>
            </div>

        </form>
            
        </div>
    </div>
@stop


@section('footer')
    @parent
@stop
