@extends('layouts.logged')

@section('title', 'All Messages')

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
            <h2 align="center">Messages Box</h2>
                <div class="chatbox">
                    <div class="chatlogs">
                        @if(count($msg_data) != 0)
                            @foreach($screen_name as $name)
                                @foreach($name as $nm)
                                    <div class="chat friend">
                                        <div class="user-photo"><img src="{{URL::to('/profilePicture/'.$nm->profilePicture)}}" height="60px" width="60" style="border-radius: 50%;"></div>
                                        <p class="chat-message"><b>your message with {{ $nm->fullName }}<a href="{{route('User.sendMessage',['user_id'=>$nm->userId])}}">See Messages</a></b></p>    
                                    
                                    </div>
                                @endforeach
                            @endforeach
                        @else
                            <h3>     You have no message !!</h3>
                        @endif
                    </div>
                </div>

        </div>
    </div>
@stop


@section('footer')
    @parent
@stop
