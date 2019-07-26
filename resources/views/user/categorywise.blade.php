@extends('layouts.logged')

@section('title', 'Location based search')

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
                    <table>
                        <tr><td style="font-size: 17px;">All ads -> search result for category -> {{ $category_name }}</td></tr>
                        @if($category_name == 'electronics')
                        <tr>
                            <td>                   
                                @foreach($ad_data as $data)
                                    
                                    <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="elctronic_image">
                                                    <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->model}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                        @endif
                        @if($category_name == 'vehicles')
                        <tr>
                            <td>
                                @foreach($ad_data as $data)
                                    <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForVehicles',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/vehicles/'.$data->image)}}"  height="120" width="120" align="left" alt="vehicle_image">
                                                    <h6 style="font-size: 17px">{{$data->brand}} :</h6>
                                                    <B style="font-size: 17px">{{$data->vehicle_type}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_brand}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                        @endif
                        @if($category_name == 'furniture')
                        <tr>
                            <td>
                                @foreach($ad_data as $data)
                                 
                                    <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForFurniture',['product_id'=>$var])}}">
                                                <div class="card" style="height: 150px;width: 500px;>
                                                    <div class="card bg-light text-dark">
                                                        <div class="card-body">
                                                            <img src="{{URL::to('/productPicture/furniture/'.$data->image)}}"  height="120" width="120" align="left" alt="furniture_image">
                                                            <h6 style="font-size: 17px">{{$data->product_name}} :</h6>
                                                            <B style="font-size: 17px">{{$data->furniture_type}}</B>

                                                            <h6 style="font-size: 17px;">want to swap with: </h6>
                                                            <B style="font-size: 17px;">{{$data->prefer_furniture_type}}</B>
                                                        </div>
                                                    </div>
                                                </div>
                                    </a>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                        @endif
                        @if($category_name == 'books')
                        <tr>
                            <td>
                                @foreach($ad_data as $data)
                                    <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForBooks',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/books/'.$data->image)}}"  height="120" width="120" align="left" alt="book_image">
                                                    <h6 style="font-size: 17px">{{$data->book_name}} :</h6>
                                                    <B style="font-size: 17px">{{$data->writer_name}}</B>

                                                    <h6 style="font-size: 17px;">want to swap with: </h6>
                                                    <B style="font-size: 17px;">{{$data->prefer_category}}</B>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <br>
                                @endforeach
                            </td>
                        </tr>
                        @endif                                 
                    </table>

                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    {{ $ad_data->render()}}
				</div>
			</div>

@stop


@section('footer')

    @parent
@stop