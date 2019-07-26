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
                <h3 style="text-decoration: underline;">Satistics of User in SWAP World</h3>
            </tr>
            <tr>
                <td style="text-decoration: underline;">Total User of this system</td>
            </tr>
            <tr>
                <td><img src="{{URL::to('/assets/images/admin.jpg')}}" height="50" width="50" align="left">Admin</td>
                <td>{{  $total_admin  }}</td>
            </tr>
            <tr>
                <td><img src="{{URL::to('/assets/images/User_group.png')}}" height="50" width="50" align="left">Users</td>
                <td>{{  $total_users  }}</td>
            </tr>
            <tr>
                <td><img src="{{URL::to('/assets/images/download.png')}}" height="50" width="50" align="left">Total Ad</td>
                <td>{{ $total_ad }}</td>
            </tr>
            <tr>
                <td><h4 style="text-decoration: underline;">Deal done yet</h4></td>
            </tr>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>January({{$deal_done_january}})</td>
                            <td>February({{$deal_done_february}})</td>
                            <td>March({{$deal_done_march}})</td>
                        </tr>
                        
                        <tr>
                            <td>April({{$deal_done_april}})</td>
                            <td>May({{$deal_done_may}})</td>
                            <td>June({{$deal_done_june}})</td>                                                    
                        </tr>
                        
                        <tr>
                            <td>July({{$deal_done_july}})</td>
                            <td>August({{$deal_done_august}})</td>
                            <td>September({{$deal_done_september}})</td>                                                    
                        </tr>
                        
                        <tr>
                            <td>October({{$deal_done_october}})</td>
                            <td>November({{$deal_done_november}})</td>
                            <td>December({{$deal_done_december}})</td>
                        </tr>
                    </table>
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
