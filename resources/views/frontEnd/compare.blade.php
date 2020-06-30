@extends('frontEnd.layouts.master')
@section('title','Compare Page')

@section('content')
<section id="compare_items">
        <div class="container">
        
            @if(Session::has('message'))
                <div class="alert alert-success text-center" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif
            <div class="table-responsive cart_info">
            
                <table id="compare">

                    <tr>
                        <td> </td>
                        @foreach($compare_datas as $row )
                        <?php
                                $image_products=DB::table('products')->select('image')->where('id',$row->products_id)->get();
                        ?>
                        <td>
                        @foreach($image_products as $image_product)
                        <a><img src="{{url('products/small',$image_product->image)}}" alt="" style="width: 150px; height: 150px;"></a>
                        @endforeach
                        </td>   
                        @endforeach
                    </tr>

                    <tr>
                        <th>Product Name</th>
                        @foreach($compare_datas as $row )
                        <td>
                        {{$row['products_name']}}</td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Product Category</th>
                        @foreach($compare_datas as $row )
                        <?php
                                $cate=DB::table('categories')->select('name')->where('id',$row->products_categories_id)->get();
                        ?>
                        <td>
                            @foreach($cate as $cates)
                            {{$cates->name}}
                            @endforeach
                        </td>
                        @endforeach
                    </tr>
                    <tr>
                        <th>Description</th>
                        @foreach($compare_datas as $row )
                        <td>
                        <textarea name="description" id="description" rows="8" style="width: 350px;">{{$row['products_description']}}</textarea>
                        </td>
                        @endforeach
                    </tr>

                    <tr>
                        <th>Price</th>
                        @foreach($compare_datas as $row )
                        <td>
                        Rp {{number_format($row['products_price'], 0, ".", ".")}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th></th>
                        @foreach($compare_datas as $row )
                        <td class="cart_delete">
                        <a class="cart_quantity_delete" href="{{url('/compare/deleteItem',$row->id)}}"><i class="fa fa-times"></i>Delete</a>
       
                        </td>
                        @endforeach
                        
                    </tr>
                                  
                </table>
                <table>
                <td><a style="margin-left: 20px;"href="{{ url('/') }}" class="btn btn-cart"> < Get Other</a></td>
                </table>
            </div>
      
        </div>
    </section> <!--/#compare_items-->
        
     <div style="margin-bottom: 130px;"></div>
@endsection