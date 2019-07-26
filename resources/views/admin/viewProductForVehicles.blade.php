@extends('layouts.adminLogged')

@section('title', 'Product')

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
                    <table>
                       <tr>
                       	@foreach($userData as $usdt)
                       	<td><b>Swap deal by {{$usdt->fullName}} , {{$usdt->created_at}} , {{$usdt->location}} </b></td>
                       </tr>
                        <tr>
                            <td><img src="{{URL::to('/productPicture/vehicles/'.$usdt->image)}}"  height="400" width="500" align="center" alt="product_image" border="2px">
                            </td>
                        </tr>
                        <tr>
                            <td>Vehicle Name :   {{$usdt->brand }} {{$usdt->model_year }}</td>
                        </tr>
                        <tr>
                        	<td>Swap deal with : <div class="btn" style="height: 50px;width: 180px;">{{$usdt->prefer_brand}}</div></td>
                        </tr>
                        <tr>
                        	<td>Description :<p>{{$usdt->description}}</p></td>
                        </tr>
                        <tr>
                        	<td>Used Time : {{$usdt->kilometers_run}}</td>
                        </tr>
                        <tr>
                        
                       	<td>Contact No: {{$usdt->phone}}</td>
                       </tr>
                       <tr>
                           <td><a href="{{route('User.sendMessage',['adId'=>$usdt->pid,'table_name'=>'vehicles'])}}"><img src="{{URL::to('/assets/images/msgIcon.png')}}" height="50" width="50" align="left"></a></td>
                       </tr>
                        @if(($user->userId) == ($usdt->userId))
                          <tr>
                            <td>Deal Done?If done click the button</td>
                          </tr>
                          <tr>
                            <td><input type="hidden" name="table_name" value="vehicles"></td>
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
                            <td><input type="hidden" name="table_name" value="vehicles"></td>
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
