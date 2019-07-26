@extends('layouts.logged')

@section('title', 'Profile')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stops
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
                            <td><input type="text" value="{{ $dt->fullName }}" style="height: 30px;width: 300px;" name="fullName"></td>
                        </tr>
                        <tr>
                            <td>Phone : </td>
                            <td><input type="text" value="{{ $dt->phone }}" style="height: 30px;width: 300px;" name="phone"></td>
                        </tr>
                        <tr>
                            <td>Reset Password : </td>
                            <td><input type="password" value="{{ $dt->password }}" style="height: 30px;width: 300px;" name="password"></td>
                        </tr>
                        <tr>
                            <td>Confirm Password : </td>
                            <td><input type="password" value="{{ $dt->confirmPass }}" style="height: 30px;width: 300px;" name="confirmPass"></td>
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
