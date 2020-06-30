@extends('frontEnd.layouts.master')
@section('title','Review Order Page')

@section('content')
    <div class="container">
        <div id ="demoFontCOD">
        <h1 class="text-center">YOUR ORDER HAS BEEN PLACED</h3>
        <p class="text-center">Thanks for your Order that use Options on Cash On Delivery</p>
        <p class="text-center">We will contact Your Email (<b>{{$user_order->users_email}}</b>) or Your Phone Number (<b>{{$user_order->phone_number}}</b>)</p>
        </div>
    </div>
    <div style="margin-bottom: 400px;"></div>
@endsection