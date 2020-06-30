@extends('administrator.layouts.master')
@section('title','Home Page')
@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                    @include('frontEnd.layouts.category_menu')
                </div>
                

                <div class="col-sm-9 padding-right">
                @if(Session::has('message'))
                    <div class="alert alert-success text-center" role="alert">
                        {{Session::get('message')}}
                    </div>
                @endif
                    <div class="products"><!--features_items-->
                        <h2 class="title text-center">Products</h2>
                        @foreach($products as $product)
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
                                <ul class="thumbnails" style="margin-left: -10px;">
                                
                </ul>
                                <form action="{{route('addToCompare')}}" method="post" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="hidden" name="products_id" value="{{$product->id}}">
                                <input type="hidden" name="products_code" value="{{$product->p_code}}">
                                <input type="hidden" name="products_name" value="{{$product->p_name}}">
                                <input type="hidden" name="products_price" value="{{$product->price}}" id="dynamicPriceInput">
                                <input type="hidden" name="products_description" value="{{$product->description}}">
                                <input type="hidden" name="products_categories_id" value="{{$product->categories_id}}">


                                <div class="choose">
                                <button type="submit" class="btn btn-fefault cart" id="buttonAddToCart">
                                <i class="fa fa-plus"></i>
                                Add to compare
                                </button>
                                </div>
                                </form>
                            </div>
                        </div>
                           
                        @endforeach
                    </div><!--features_items-->

                </div>
                </div>
            </div>
        </div>
    </section>
@endsection


