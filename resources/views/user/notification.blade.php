@extends('layouts.logged')

@section('title', 'Notification')

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
                            <td style="font-size: 15px;"><a href="#">Electronics({{$total_electronics}})</a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="#">Books({{$total_books}})</a></td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;">
                                <a href="#">Vehicles({{$total_vehicles}})</a>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-size: 15px;"><a href="#">Furnitures({{$total_furniture}})</a></td>
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
                        <tr>
                            <td>
                                <h2>Notification({{ $total_notification }})</h2>
                                @if($total_notification == 0)
                                    <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                        Your product did not match.
                                    </div>
                                @else
                                    @if(isset($e_noti))
                                        @foreach($e_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                Your prefer product matched with a electronics product.
                                                <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForElectronics',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

                                @if($count_vnoti == 0)
                                    <br>
                                @else
                                    @if(isset($v_noti))
                                        @foreach($v_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                    Your prefer product mathced with vehicles product 
                                                    <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForVehicles',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

                                @if($count_bnoti == 0)
                                    <br>
                                @else
                                    @if(isset($b_noti))
                                        @foreach($b_noti as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                Your prefer product matched with books product
                                                <a value="{{$var=$notify->pid}}" href="{{route('User.viewProductForBooks',['product_id'=>$var])}}">Click to see your matched Product</a>
                                            </div>
                                        @endforeach
                                    @endif
                                @endif

                                @if(isset($notification_for_deleted_ad))
                                    @if(count($notification_for_deleted_ad) > 0)
                                        @foreach($notification_for_deleted_ad as $notify)
                                            <br>
                                            <div class="card" style="background-color: rgb(214,220,220);height: 70px;width: 500px; text-align: left;color: red">
                                                Your ad from {{$notify->table_name}} category has been deleted due to lack of data.
                                            </div>
                                        @endforeach
                                    @endif
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
