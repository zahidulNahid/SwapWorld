@extends('layouts.logged')

@section('title', 'Product')

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
                  <form method="post">
                    {{ csrf_field()}}
                    <table>
                       <tr>
                       	@foreach($userData as $usdt)
                       	<td><b>Swap deal by {{$usdt->fullName}} , {{$usdt->created_at}} , {{$usdt->location}} </b></td>
                       </tr>
                        <tr>
                            <td><img src="{{URL::to('/productPicture/books/'.$usdt->image)}}"  height="400" width="500" align="center" alt="product_image" border="2px">
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
                       @endforeach

                    </table>
                  </form>
                </div>
            </div>
@stop


@section('footer')
    @parent
@stop
