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
                                            <td style="font-size: 15px;"><a href="#"></a></td>
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
                                        <tr><td style="font-size: 12px;">All ads</td></tr>
                                        <tr>
                                            <td>                   
                                                @foreach($electronics_data as $data)
                                                    
                                                <a value="{{$var=$data->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">
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

                                                <a value="{{$var=$us->pid}}" href="{{route('User.viewProductForVehicles',['product_id'=>$var])}}">
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
                                                    <a value="{{$var=$us->pid}}" href="{{route('User.viewProductForBooks',['product_id'=>$var])}}">
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
                                                    <a value="{{$var=$us->pid}}" href="{{route('User.viewProductForFurniture',['product_id'=>$var])}}">
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
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                
                                                @if ($max_page == $total_electronics)
                                                <p style="">{{ $electronics_data ->links()}}</p>
                                                    
                                                @elseif ($max_page == $total_books)
                                                    <p style="">{{ $books_data ->links()}}</p>
                                                @elseif ($max_page == $total_furniture)
                                                    <p style="">{{ $furniture_data ->links()}}</p> 
                                                @else
                                                    <p style="">{{ $vehicles_data ->links()}}</p>     
                                                @endif
                                            </td>
                                        </tr>                                  
                                    </table>
                                </td>
                            </tr>
                        </table> 
                
            </div>
        </div>
@stop


@section('footer')
    @parent
@stop
