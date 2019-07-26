@extends('layouts.adminLogged')

@section('title', 'Edit Profile')

@section('header')
    @parent
@stop
@section('nav-bar')
 <!--    @foreach($data as $dt)
    <div class="nav-bar" align="right">
        <ul class="nav">
            <li><a href="{{route('Admin.index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a></li>
            <li><img src="{{URL::to('/profilePicture/'.$dt->profilePicture)}}"  height="50" width="50" alt="user_image"></li>
            <div class="btn" style="background-color: black;font-size: 15px;"><a href="{{route('Admin.profile')}}">profile</a></div> 
            <div class="btn " style="background-color: black;font-size: 15px;"><a href="{{route('User.notification')}}">        <button style="font-size:15px">Notification<i class="fa fa-bell"></i></button></a></div>
            <div class="btn" style="background-color: black;font-size: 15px;"><a href="{{ route('Admin.messageBox')}}">Messege</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.users_list')}}">User List</a></div>              
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.withLoggedAdView')}}">All Ads</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Admin.selectType')}}">Post your ad</a></div>
            <div class="btn" style="font-size: 15px;"><a href="{{route('Logout.index')}}">logout</a></div>                 
        </ul>
    </div>
    @endforeach -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="{{route('Admin.index')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">               
                    
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    
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
					
                    <table>
                        @foreach($data as $dt)
                        <tr>
                           <td style="width: 250px;border-style: circle">            
                           </td>
                            <td><img src="{{URL::to('/profilePicture/'.$dt->profilePicture)}}"  height="200" width="200" align="center" alt="user_image">
                            </td>
                        </tr>
                        <tr>
                            <td>Name : </td>
                            <td><input type="text" value="{{ $dt->fullName }}" style="height: 30px;width: 300px;" name="fullName" required></td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td><input type="text" value="{{ $dt->phone }}" style="height: 30px;width: 300px;" name="phone" required></td>
                        </tr>
                        <tr>
                            <td>Reset Password : </td>
                            <td><input type="password" value="{{ $dt->password }}" style="height: 30px;width: 300px;" name="password" required></td>
                        </tr>
                        <tr>
                            <td>Confirm Password : </td>
                            <td><input type="password" value="{{ $dt->confirmPass }}" style="height: 30px;width: 300px;" name="confirmPass" required></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td><input style="height: 30px;width: 300px;" type="submit" value="SAVE"></td></a>
                        </tr>
                    </table>
                    </form>
				</div>
			</div>
@stop


@section('footer')
    @parent
@stop
