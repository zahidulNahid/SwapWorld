@extends('layouts.adminLogged')

@section('title', 'Product')

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
                  <form method="post">
                    {{csrf_field()}}
                    <table>
                       <tr>
                       	@foreach($userData as $usdt)
                       	<td><b>Swap deal by {{$usdt->fullName}} , {{$usdt->created_at}} , {{$usdt->location}} </b></td>
                       </tr>
                        <tr>
                            <td><img src="{{URL::to('/productPicture/furniture/'.$usdt->image)}}"  height="400" width="500" align="center" alt="product_image" border="2px">
                            </td>
                        </tr>
                        <tr>
                            <td>Furniture Name :   {{$usdt->product_name }} {{$usdt->furniture_type }}</td>
                        </tr>
                        <tr>
                        	<td>Swap deal with : <div class="btn" style="height: 50px;width: 180px;">{{$usdt->prefer_furniture_type}}</div></td>
                        </tr>
                        <tr>
                        	<td>Description :<p>{{$usdt->description}}</p></td>
                        </tr>
                        <tr>
                        	<td>Used Time : {{$usdt->used_time}}</td>
                        </tr>
                        <tr>
                        
                       	<td>Contact No: {{$usdt->phone}}</td>
                       </tr>
                       <tr>
                           <td><a href="{{route('User.sendMessage',['user_id'=>$usdt->userId])}}"><img src="{{URL::to('/assets/images/msgIcon.png')}}" height="50" width="50" align="left"></a></td>
                       </tr>
                        @if(($user->userId) == ($usdt->userId))
                          <tr>
                            <td>Deal Done?If done click the button</td>
                          </tr>
                          <tr>
                            <td><input type="hidden" name="table_name" value="books"></td>
                          </tr>
                          <tr>
                            <td>
                              <input type="submit" value="DEAL DONE" style="height: 30px;width: 300px; background-color:#1E90FF">
                            </td>
                          </tr>
                        @endif
                        
                        @if(($user_type->type) == 'Admin')
                          <tr>
                            <td>Are you sure for delete this ad?</td>
                          </tr>
                          <tr>
                            <td><input type="hidden" name="table_name" value="furniture"></td>
                          </tr>
                          <tr>
                            <td>
                              <input type="submit" value="Delete" style="height: 30px;width: 300px; background-color:#1E90FF">
                            </td>
                          </tr>
                          @endif
                       @endforeach
                    </table>
                  </form>
                </div>
            </div>
@stop


@section('footer')
    @parent
@stop
