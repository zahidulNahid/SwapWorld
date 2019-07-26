@extends('layouts.master')

@section('title', 'Product Details')

@section('header')
    @parent
@stop
@section('nav-bar')

    <div class="nav-bar" align="right">
        <ul class="nav">
            <li><a href="{{route('Ad.withoutLoggedAdView')}}"><img src="{{URL::to('/assets/images/swap.png')}}" height="50" width="50" align="left"></a></li>               
            <div class="btn"><a href="{{route('Ad.withoutLoggedAdView')}}">All Ads</a></div>
            <div class="btn"><a href="{{route('Ad.adview')}}">Post your ad</a></div>

            <div class="btn"><a href="{{route('Login.loginView')}}">login</a></div>
                    
        </ul>
    </div>

@stop


@section('sidebar')
    @parent
@stop

@section('content')
            <div class="content">
                <div class="main">
                    <table>
                       
                       @foreach($adData as $dt)
                       <tr>
                       	@foreach($userData as $usdt)
                       	<td><b>Swap deal by {{$usdt->fullName}} , {{$usdt->created_at}} , {{$usdt->location}} </b></td>
                       	@endforeach
                       </tr>
                        <tr>
                            <td><img src="{{URL::to('/productPicture/'.$dt->p_image)}}"  height="400" width="400" align="center" alt="product_image" border="2px">
                            </td>
                        </tr>
                        @foreach($preferData as $pt)
                        <tr>
                        	<td>Swap deal with : <div class="btn" style="height: 50px;width: 150px;">{{$pt->model2}}</div></td>
                        </tr>
                        @endforeach
                        <tr>
                        	<td>Description :
                        	{{$dt->description}}</td>
                        </tr>
                        <tr>
                        	<td>Used Time : {{$dt->used_time}}</td>
                        </tr>
                        <div id="app">
                          <tr>
                       	    @foreach($userData as $usrDt)
                       	      <td>Contact No: {{$usrDt->phone}}</td>
                       	    @endforeach
                          </tr>
                        </div>
                       @endforeach
                    </table>
                </div>
            </div>
@stop


@section('footer')
    @parent
@stop
