@extends('frontEnd.layouts.master')
@section('title','Cart Page')

@section('content')
<section id="cart_items">
        <div class="container">
            @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="table-responsive cart_info">
                <table id="customer">
                    <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description"></td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                    </thead>
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
                                    <h4><a href="">{{$cart_data->product_name}}</a></h4>
                                    <p>{{$cart_data->product_code}} | {{$cart_data->color}}</p>
                                </td>
                                <td class="cart_total">
                            
                                    <p class="cart_total_price" >Rp{{number_format($cart_data->price, 0, ".", ".")}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$cart_data->id.'/1')}}"> + </a>
                                        <input class="cart_quantity_input" type="text" name="quantity" value="{{$cart_data->quantity}}" autocomplete="off" size="2">
                                        @if($cart_data->quantity>1)
                                            <a class="cart_quantity_down" href="{{url('/cart/update-quantity/'.$cart_data->id.'/-1')}}"> - </a>
                                        @endif
                                    </div>
                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">Rp {{number_format($cart_data->price*$cart_data->quantity, 0, ",", ",")}}</p>
                                </td>
                                <td class="cart_delete">
                                    <a class="cart_quantity_delete" href="{{url('/cart/deleteItem',$cart_data->id)}}"><i class="fa fa-times"></i></a>
                                </td>
                            </tr>
                        @endforeach

                        <tr>
                            <td><a style="margin-left: 20px;"href="{{ url('/') }}" class="btn btn-cart"> < Get Other</a></td>
                           
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

    <section id="do_action">
        <div class="container">
            <div class="heading">
                <h3>What would you like to do next?</h3>
                <p>Choose if you would like to estimate your delivery cost.</p>
            </div>
            <div class="row">
                <div class="col-sm-6">
                <div id = "demoFontCart">
                    
                    <div class="chose_areas" style="padding: 20px;">
                        
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div id = "demoFontCart">
                    @if(Session::has('message_apply_sucess'))
                        <div class="alert alert-success text-center" role="alert">
                            {{Session::get('message_apply_sucess')}}
                        </div>
                    @endif
                    <div class="total_area">
                        <ul>
                            
                            
                        <li>Total <span>Rp {{number_format($total_price, 0, ".", ".")}}</span></li>
                           
                        </ul>
                        <div style="margin-left: 20px;"><a class="btn btn-cart" href="{{url('/check-out')}}">Check Out</a></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!--/#do_action-->
@endsection