@extends('layouts.master')

@section('title', 'Electronics')

@section('header')
    @parent
@stop
@section('nav-bar')
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
                            <td><img src="{{URL::to('/productPicture/electronics/'.$usdt->image)}}"  height="400" width="500" align="center" alt="product_image" border="2px">
                            </td>
                        </tr>
                       <tr>
                        	<td>Swap deal with : <div class="btn" style="height: 50px;width: 140px;">{{$usdt->prefer_model}}</div></td>
                        </tr>
                        <tr>
                        	<td>Description :
                        	{{$usdt->description}}</td>
                        </tr>
                        <tr>
                        	<td>Used Time : {{$usdt->used_time}}</td>
                        </tr>
                        <tr>
                        
                       	<td>Contact No: <strike>{{$usdt->phone}}</strike></td>
                       </tr>
                       <tr>
                           <td><a href="{{route('User.sendMessage',['table_name'=>'electronics','adID'=>$usdt->pid])}}"><img src="{{URL::to('/assets/images/msgIcon.png')}}" height="50" width="50" align="left"></a></td>
                       </tr>
                       @endforeach
                    </table>
                  </form>
                </div>
            </div>
@stop


@section('footer')
    @parent
@stop
