@extends('frontEnd.layouts.master')
@section('title','List Products')
@section('slider')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                @include('frontEnd.layouts.category_menu')
            </div>
            <div class="col-sm-9 padding-right">
            @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
                <div class="features_items"><!--features_items-->
                    <?php
                            if($byCate!=""){
                                $products=$list_product;
                                echo '<h2 class="title text-center">Category '.$byCate->name.'</h2>';
                            }else{
                                echo '<h2 class="title text-center">List Products</h2>';
                            }
                    ?>
                    @foreach($products as $product)
                        @if($product->category->status==1)
                            <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <a href="{{url('/product-detail',$product->id)}}"><img src="{{url('products/small/',$product->image)}}" alt="" /></a>
                                        
                                        <h2>Rp {{number_format($product->price, 0, ".", ".")}}</h2>
                                        <p>{{$product->p_name}}</p>
                                        <a href="{{url('/product-detail',$product->id)}}" class="btn btn-default add-to-cart">View Product</a>
                                    </div>
                                </div>

                                <form action="{{route('addToCompare')}}" method="post" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="products_id" value="{{$product->id}}">
                                <input type="hidden" name="products_image" value="{{$product->image}}">
                                <input type="hidden" name="products_code" value="{{$product->p_code}}">
                                <input type="hidden" name="products_name" value="{{$product->p_name}}">
                                <input type="hidden" name="products_price" value="{{$product->price}}" id="dynamicPriceInput">
                                <input type="hidden" name="products_description" value="{{$product->description}}">
                                <input type="hidden" name="products_image" value="{{$product->image}}">

                                <div class="choose">
                                <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                <i class="fa fa-plus"></i>
                                Add to compare
                                </button>
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    {{--<ul class="pagination">
                        <li class="active"><a href="">1</a></li>
                        <li><a href="">2</a></li>
                        <li><a href="">3</a></li>
                        <li><a href="">&raquo;</a></li>
                    </ul>--}}
                </div><!--features_items-->
            </div>
        </div>
    </div>
@endsection