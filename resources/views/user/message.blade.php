@extends('layouts.logged')

@section('title', 'Messages')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
@section('nav-bar2')
    
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
                                    <div class="user-photo"><img src="{{URL::to('/profilePicture/'.$reader_data->profilePicture)}}" height="60px" width="60" style="border-radius: 50%;"></div>
                                    <p class="chat-message">{{ $msg->msg }}</p>
                                </div>
                            @endif
                        @endforeach
                    @endif
                           
                </div>

                <div class="chat-form">
                    <textarea name="msg"></textarea><input type="submit" name="submit" value="SEND" style="height: 60px;width: 100px;background-color: royalblue;">
                </div>
            </div>

        </form>
            
        </div>
    </div>
@stop


@section('footer')
    @parent
@stop
