@extends('layouts.master')

@section('title', 'Location based ads')

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

                    <table>
                        <tr><td style="font-size: 17px;">All ads -> search result for location -> {{ $location }}</td></tr>
                        <tr>
                            <td>
                                @if(count($electronics_data) == null)
                                    @if(count($vehicles_data) == null)
                                        @if(count($books_data) == null)
                                            @if(count($furniture_data) == null)
                                                <h2> No Result Found </h2>
                                            @endif
                                        @endif
                                    @endif
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <td>                   
                                @foreach($electronics_data as $data)
                                               
                                    <a value="{{$var=$data->pid}}" href="{{route('viewProductForElectronics',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="user_image">
                                                    <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->model}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @foreach($vehicles_data as $us)
                                            <a value="{{$var=$us->pid}}" href="{{route('viewProductForVehicles',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/vehicles/'.$us->image)}}"  height="120" width="120" align="left" alt="vehicle_image">
                                                            <h6 style="font-size: 17px">{{$us->brand}} :</h6>
                                                            <B style="font-size: 17px">{{$us->vehicle_type}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$us->prefer_brand}}</B>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                 @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>
                                @foreach($books_data as $us)
                                                <a value="{{$var=$us->pid}}" href="{{route('viewProductForBooks',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/books/'.$us->image)}}"  height="120" width="120" align="left" alt="book_image">
                                                            <h6 style="font-size: 17px">{{$us->book_name}} :</h6>
                                                            <B style="font-size: 17px">{{$us->writer_name}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$us->prefer_category}}</B>
                                                        </div>
                                                    </div>
                                                </div>
                                                </a>
                                @endforeach
                            </td>
                        </tr> 
                        <tr>
                            <td>
                                @foreach($furniture_data as $us)
                                                    <a value="{{$var=$us->pid}}" href="{{route('viewProductForFurniture',['product_id'=>$var])}}">
                                                    <div class="card" style="height: 150px;width: 500px;>
                                                        <div class="card bg-light text-dark">
                                                            <div class="card-body">
                                                                <img src="{{URL::to('/productPicture/furniture/'.$us->image)}}"  height="120" width="120" align="left" alt="furniture_image">
                                                                <h6 style="font-size: 17px">{{$us->product_name}} :</h6>
                                                                <B style="font-size: 17px">{{$us->furniture_type}}</B>

                                                                <h6 style="font-size: 17px;">want to swap with: </h6>
                                                                <B style="font-size: 17px;">{{$us->prefer_furniture_type}}</B>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    </a>
                                                    <br>
                                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>
                                            
                                @if((count($electronics_data)>count($books_data)) and (count($electronics_data)>count($vehicles_data)))
                                    <p style="">{{ $electronics_data ->render()}}</p>
                                @elseif((count($books_data)>count($electronics_data)) and (count($books_data)>count($vehicles_data)))
                                     <p style="">{{ $books_data ->render()}}</p>
                                @else
                                    <p style="">{{ $vehicles_data ->render()}}</p>
                                @endif
                            </td>
                        </tr>                                  
                    </table>
				</div>
			</div>

@stop


@section('footer')

    @parent
@stop