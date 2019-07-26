@extends('layouts.master')

@section('title', 'Books || All ads')

@section('header')
    @parent
@stop
@section('nav-bar')
    @parent
@stop
@section('nav-bar2')
    @parent
@stop

@section('content')
            <div class="content">
                <div class="main">
                  <form method="post">
                    {{ csrf_field()}}
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
                            <td>Book Name :   <B>{{$usdt->book_name }}, {{$usdt->edition }}</B></td>
                        </tr>
                        <tr>
                        	<td>Swap deal with any : <div class="btn" style="height: 50px;width: 200px;">{{$usdt-> prefer_category}}</div></td>
                        </tr>
                        <tr>
                        	<td>Description :<p>{{$usdt->description}}</p></td>
                        </tr>
                        <tr>
                        
                       	<td>Contact No: <strike>{{$usdt->phone}} </strike></td>
                       </tr>

                       <tr>
                           <td><a href="{{route('User.sendMessage',['adId'=>$usdt->pid,'table_name'=>'books'])}}"><img src="{{URL::to('/assets/images/msgIcon.png')}}" height="50" width="50" align="left"></a></td>
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
