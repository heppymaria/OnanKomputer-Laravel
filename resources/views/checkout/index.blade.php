@extends('frontEnd.layouts.master')
@section('title','checkOut Page')

@section('content')
<section id="do_action" align ="center">
<div class="container">
<div class="row">
<div id="demoFontCheckOut">

        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
            <form action="{{url('/submit-checkout')}}" method="post" class="check-out-form">
            <div class="col-sm-6">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <legend>Billing To</legend>
                        <div class="form-group {{$errors->has('billing_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_name" id="billing_name" value="{{$user_login->name}}" placeholder="Billing name">
                            <span class="text-danger">{{$errors->first('billing_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_country')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_country" value="{{$user_login->country}}" id="billing_country" placeholder=" Billing country">
                            <span class="text-danger">{{$errors->first('billing_country')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_province')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_province" value="{{$user_login->province}}" id="billing_province" placeholder=" Billing province">
                            <span class="text-danger">{{$errors->first('billing_province')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_region')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_region" value="{{$user_login->region}}" id="billing_region" placeholder=" Billing region">
                            <span class="text-danger">{{$errors->first('billing_region')}}</span>
                        </div>
                        
                        <div class="form-group {{$errors->has('billing_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_city" value="{{$user_login->city}}" id="billing_city" placeholder="Billing city">
                            <span class="text-danger">{{$errors->first('billing_city')}}</span>
                        </div>
                        
                        <div class="form-group {{$errors->has('billing_barangay')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_barangay" value="{{$user_login->barangay}}" id="billing_barangay" placeholder=" Billing barangay">
                            <span class="text-danger">{{$errors->first('billing_barangay')}}</span>
                        </div>
                        
                        <div class="form-group {{$errors->has('billing_postal_code')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_postal_code" value="{{$user_login->postal_code}}" id="billing_postal_code" placeholder=" Billing postal code">
                            <span class="text-danger">{{$errors->first('billing_postal_code')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_phone_number')?'has-error':''}}">
                            <input type="text" class="form-control" name="billing_phone_number" value="{{$user_login->phone_number}}" id="billing_phone_number" placeholder="Billing phone number">
                            <span class="text-danger">{{$errors->first('billing_phone_number')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('billing_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="billing_address" id="billing_address" placeholder="Billing address">
                            <span class="text-danger">{{$errors->first('billing_address')}}</span>
                        </div>

                        
                    
                </div>
             

               
                <div class="col-sm-6">
                    
                        <legend>Shipping To</legend>
                        <div class="form-group {{$errors->has('shipping_name')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_name" id="shipping_name" value="{{$user_login->name}}" placeholder="Shipping name">
                            <span class="text-danger">{{$errors->first('shipping_name')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_country')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_country" value="{{$user_login->country}}" id="shipping_country" placeholder="Shipping country">
                            <span class="text-danger">{{$errors->first('shipping_country')}}</span>
                        </div>

                        <div class="form-group {{$errors->has('shipping_province')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_province" value="{{$user_login->province}}" id="shipping_province" placeholder="Shipping province">
                            <span class="text-danger">{{$errors->first('shipping_province')}}</span>
                        </div>

                        <div class="form-group {{$errors->has('shipping_region')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_region" value="{{$user_login->region}}" id="shipping_region" placeholder="Shipping region">
                            <span class="text-danger">{{$errors->first('shipping_region')}}</span>
                        </div>
                       
                        <div class="form-group {{$errors->has('shipping_city')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_city" value="{{$user_login->city}}" id="shipping_city" placeholder="Shipping city">
                            <span class="text-danger">{{$errors->first('shipping_city')}}</span>
                        </div>
                        
                        <div class="form-group {{$errors->has('shipping_barangay')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_barangay" value="{{$user_login->barangay}}" id="shipping_barangay" placeholder="Shipping barangay">
                            <span class="text-danger">{{$errors->first('shipping_barangay')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_postal_code')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_postal_code" value="{{$user_login->postal_code}}" id="shipping_postal_code" placeholder="Shipping postal code">
                            <span class="text-danger">{{$errors->first('shipping_postal_code')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_phone_number')?'has-error':''}}">
                            <input type="text" class="form-control" name="shipping_phone_number" value="{{$user_login->phone_number}}" id="shipping_phone_number" placeholder="Shipping phone number">
                            <span class="text-danger">{{$errors->first('shipping_phone_number')}}</span>
                        </div>
                        <div class="form-group {{$errors->has('shipping_address')?'has-error':''}}">
                            <input type="text" class="form-control" value="{{$user_login->address}}" name="shipping_address" id="shipping_address" placeholder="Shipping address">
                            <span class="text-danger">{{$errors->first('shipping_address')}}</span>
                        </div>
                        <button type="submit" class="btn btn-checkout" style="float: right;">CheckOut</button>
                   
                </div>
            </form>
        </div>
    </div>
</div>
</section>
@endsection