@extends('layouts.logged')

@section('title', 'Home')

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
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td style="font-size: 15px;">
                                    All category({{$total_ad}})
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'electronics'])}}">Electronics({{$total_electronics}})</a></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'books'])}}">Books({{$total_books}})</a></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;">
                                <a href="{{route('Ad.searchByCategory',['category_name'=>'vehicles'])}}">Vehicles({{$total_vehicles}})</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'furniture'])}}">Furnitures({{$total_furniture}})</a></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;"><a href="{{route('Ad.searchByCategory',['category_name'=>'property'])}}"></a></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px;">All location({{$total_locationwise}})</td>
                            </tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Dhaka'])}}">Dhaka ({{$locationwise}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Chattogram'])}}">Chattogram({{$locationwise_ctg}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Khulna'])}}">Khulna({{$locationwise_khu}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Jessore'])}}">Jessore({{$locationwise_jes}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Barishal'])}}">Barishal({{$locationwise_bar}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Rajshahi'])}}">Rajshahi({{$locationwise_raj}})</a></td></tr>
                            <tr><td style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Sylhet'])}}">Sylhet({{$locationwise_syl}})</a></td></tr>
                            <tr><td  style="font-size: 15px;"><a href="{{route('Ad.searchByLocation',['location_name'=>'Rangpur'])}}">Rangpur({{$locationwise_rng}})</a></td></tr>
                                
                        </table>
                    </td>
                    <td>
                        <table>
                            <tr><td style="font-size: 12px;">My ads</td></tr>
                            <tr>
                                <td>                   
                                    @foreach($my_ad_for_electronics as $data)
                                        <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">
                                        <div class="card" style="height: 150px;width: 500px;>
                                            <div class="card bg-light text-dark">
                                                <div class="card-body">
                                                    <img src="{{URL::to('/productPicture/electronics/'.$data->image)}}"  height="120" width="120" align="left" alt="electronic_image">
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
                            <tr>
                                <td>
                                    @foreach($my_ad_for_vehicles as $data)
                                        
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
                            <tr>
                                <td>
                                    @foreach($my_ad_for_books as $data)
                                        
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
                        </table>
                    </td>
                </tr>
            </table>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>  
        </div>
    </div>
@stop


@section('footer')
    @parent
@stop
