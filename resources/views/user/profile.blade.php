@extends('layouts.logged')

@section('title', 'Profile')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
@section('nav-bar2')
    
@stop

@section('sidebar')
    @parent
@stop

@section('content')
    		<div class="content">
				<div class="main">
                    <form>
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
                            <td><b> {{ $dt->fullName }} </b></td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td><b> {{ $dt->phone }} </b></td>
                        </tr>
                        @endforeach
                        <tr>
                            <td></td>
                            <td style="height: 5px;"><a value="{{$var=$dt->fullName}}" href="{{route('User.editProfile',['user_name'=>$var])}}"><input type="BUTTON" style="height: 30px;width: 300px;" value="Edit Profile" ></a></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td style="height: 5px;"><a value="{{$var=$dt->fullName}}" href="{{route('User.see_my_ad',['user_name'=>$var])}}"><input type="BUTTON" style="height: 30px;width: 300px;" value="Click to see my ad"></td>
                        </tr>
                    </table>
                    </form>
				</div>
			</div>
@stop


@section('footer')
    @parent
@stop
