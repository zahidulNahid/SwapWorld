@extends('layouts.logged')

@section('title', 'Post an ad')

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
                               <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Dhaka'])}}">Dhaka ({{$locationwise}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Chattogram'])}}">Chattogram({{$locationwise_ctg}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Khulna'])}}">Khulna({{$locationwise_khu}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Jessore'])}}">Jessore({{$locationwise_jes}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Barishal'])}}">Barishal({{$locationwise_bar}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Rajshahi'])}}">Rajshahi({{$locationwise_raj}})</a></td></tr>
                                <tr><td style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Sylhet'])}}">Sylhet({{$locationwise_syl}})</a></td></tr>
                                <tr><td  style="font-size: 15px;"><a href="{{route('Ad.loggedUserSearchByLocation_user',['location_name'=>'Rangpur'])}}">Rangpur({{$locationwise_rng}})</a></td></tr>
                                
                                </table>
                            </td>
                            <td>
                                <h3>Please Select a category you want to post ad :</h3>
                                <table>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/mobile.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_electronicsPage')}}"> Electronics</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/books.jpg')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_booksPage')}}"> Books</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/car.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{route('Ad.postad_vehiclesPage')}}"> Vehicle</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <tr>
                                        <td>
                                            <tr><img src="{{URL::to('/assets/images/furniture.png')}}" height="100" width="100"></tr>
                                            <tr><a href="{{ route('Ad.postad_furniturePage')}}"> Furniture</a></tr>
                                        </td>
                                    </tr>
                                    <br>
                                    <br> 
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
