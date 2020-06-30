@extends('frontEnd.layouts.master')
@section('title','Review Order Page')
@section('slider')
@endsection
@section('content')
    <div class="container">
    
    <div class="review-payment">
    <h2>Shipping To</h2>
        </div>
        <div class="row">
       
            <form action="{{url('/submit-order')}}" method="post" class="form-order-review">
                <input type="hidden" name="_token" value="{{csrf_token()}}">

                <input type="hidden" name="users_id" value="{{$shipping_address->users_id}}">
                <input type="hidden" name="users_email" value="{{$shipping_address->users_email}}">
                <input type="hidden" name="name" value="{{$shipping_address->name}}">
                <input type="hidden" name="address" value="{{$shipping_address->address}}">
                <input type="hidden" name="province" value="{{$shipping_address->province}}">
                <input type="hidden" name="city" value="{{$shipping_address->city}}">
                <input type="hidden" name="region" value="{{$shipping_address->region}}">
                <input type="hidden" name="barangay" value="{{$shipping_address->barangay}}">
                <input type="hidden" name="postal_code" value="{{$shipping_address->postal_code}}">
                <input type="hidden" name="country" value="{{$shipping_address->country}}">
                <input type="hidden" name="phone_number" value="{{$shipping_address->phone_number}}">
                <input type="hidden" name="delivery_cost" value="0">
                <input type="hidden" name="order_status" value="on process">
                
                <input type="hidden" name="grand_total" value="{{$total_price}}">

                    <div class="table-responsive cart_info">
                        <table id="customers">
                        <tr>
                        <th>Name</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>Region</th>
                        <th>Country</th>
                        <th>Postal Code</th>
                        <th>Phone Number</th>
                        </tr>

                            <tbody>
                            <tr>
                                <td>{{$shipping_address->name}} </td>
                                <td>{{$shipping_address->address}}</td>
                                <td>{{$shipping_address->city}}</td>
                                <td>{{$shipping_address->region}}</td>
                                <td> {{$shipping_address->country}}</td>
                                <td>{{$shipping_address->postal_code}}</td>
                                <td>{{$shipping_address->phone_number}}</td>
                                
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <section id="cart_items">
                        <div class="review-payment">
                            <h2>Review & Payment</h2>
                        </div>
                        <div class="table-responsive cart_info">
                        <table id="customers">
                             
                                <tr>
                                    <th>Item</th>
                                    <th></th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                                
                                <tbody>
                                @foreach($cart_datas as $cart_data)
                                <?php
                                $image_products=DB::table('products')->select('image')->where('id',$cart_data->products_id)->get();
                                ?>
                                <tr>
                                    <td class="cart_product">
                                        @foreach($image_products as $image_product)
                                            <a href=""><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 100px;"></a>
                                        @endforeach
                                    </td>
                                    <td class="cart_description">
                                        <h4><a>{{$cart_data->product_name}}</a></h4>
                                        <p>{{$cart_data->product_code}} | {{$cart_data->color}}</p>
                                    </td>
                                    <td class="cart_price">
                                    
                                        <p>Rp{{number_format($cart_data->price, 0, ".", ".")}}</p>
                                    </td>
                                    <td class="cart_price">
                                        <p>{{$cart_data->quantity}}</p>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">Rp {{number_format($cart_data->price*$cart_data->quantity, 0, ".", ".")}}</p>
                                    </td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td colspan="3">&nbsp;</td>
                                    <td colspan="2">
                                        <div id="demoFontTotalPrice">
                                        <table id="customers">
                                            <tr>
                                                <td>Cart Total</td>
                                                <td>Rp {{number_format($total_price, 0, ".", ".")}}</td>
                                            </tr>
                                            
                                        </table>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="payment-options">
                            <span>Select Payment Method : </span>
                        <span>
                            <label><input type="radio" name="payment_method" value="COD" checked> Cash On Delivery</label>
                        </span>
                        <span>
                            <label><input type="radio" name="payment_method" value="Paypal"> Paypal</label>
                        </span>
                        <span>
                            <label><input type="radio" name="payment_method" value="banktransfer"> Bank Transfer</label>
                        </span>
                            
                            <button type="submit" class="btn btn-checkout" style="float: right;">Order Now</button>
                        </div>
                    </section>

                </div>
            </form>
        </div>
    </div>
    <div style="margin-bottom: 20px;"></div>
@endsection