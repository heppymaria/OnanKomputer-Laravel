<?php

namespace App\Http\Controllers;

use App\Category_model;
use App\ImageGallery_model;
use App\ProductAtrr_model;
use App\Products_model;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request){
        
        if($request->has('cari')){
            $products = \App\Products_model::where('p_name','LIKE','%'.$request->cari.'%')->
            orwhere('p_code','LIKE','%'.$request->cari.'%')->get();
        }else{
         $products=Products_model::all();
        }
         return view('frontEnd.index',compact('products'));
     }

     public function admin_index(Request $request){
        
        if($request->has('cari')){
            $products = \App\Products_model::where('p_name','LIKE','%'.$request->cari.'%')->
            orwhere('p_code','LIKE','%'.$request->cari.'%')->get();
        }else{
         $products=Products_model::all();
        }
         return view('administrator.index',compact('products'));
     }

    public function shop(){
        $products=Products_model::all();
        $byCate="";
        return view('frontEnd.products',compact('products','byCate'));
    }
    public function listByCat($id){
        $list_product=Products_model::where('categories_id',$id)->get();
        $byCate=Category_model::select('name')->where('id',$id)->first();
        return view('frontEnd.products',compact('list_product','byCate'));
    }
    public function detailpro($id){
        $detail_product=Products_model::findOrFail($id);
        $imagesGalleries=ImageGallery_model::where('products_id',$id)->get();
        $totalStock=ProductAtrr_model::where('products_id',$id)->sum('stock');
        $relateProducts=Products_model::where([['id','!=',$id],['categories_id',$detail_product->categories_id]])->get();
        $descriptionProducts=Products_model::select ('description')->where([['id', $detail_product->products_id]])->get();

        return view('frontEnd.product_details',compact('detail_product','imagesGalleries','totalStock','relateProducts', 'descriptionProducts'));
    }
    public function getAttrs(Request $request){
        $all_attrs=$request->all();
        $attr=explode('-',$all_attrs['color']);
        $result_select=ProductAtrr_model::where(['products_id'=>$attr[0],'color'=>$attr[1]])->first();
        echo $result_select->price."#".$result_select->stock;
    }
    
}
