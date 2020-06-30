<?php

namespace App\Http\Controllers;

use App\Cart_model;
use App\ProductAtrr_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');
        $cart_datas=Cart_model::where('session_id',$session_id)->get();
        $total_price=0;
        foreach ($cart_datas as $cart_data){
            $total_price+=$cart_data->price*$cart_data->quantity;
        }
        return view('frontEnd.cart',compact('cart_datas','total_price'));
    }

    public function addToCart(Request $request){
        $inputToCart=$request->all();
        
        if($inputToCart['color']==""){
            return back()->with('message','Please select Color');
        }else{
            $stockAvailable=DB::table('product_att')->select('stock','sku')->where(['products_id'=>$inputToCart['products_id'],
                'price'=>$inputToCart['price']])->first();
            if($stockAvailable->stock>=$inputToCart['quantity']){
                $inputToCart['user_email']='heppymarias@gmail.com';
                $session_id=Session::get('session_id');
                if(empty($session_id)){
                    $session_id=str_random(40);
                    Session::put('session_id',$session_id);
                }
                $inputToCart['session_id']=$session_id;
                $colorAtrr=explode("-",$inputToCart['color']);
                $inputToCart['color']=$colorAtrr[1];
                $inputToCart['product_code']=$stockAvailable->sku;
                $count_duplicateItems=Cart_model::where(['products_id'=>$inputToCart['products_id'],
                    'color'=>$inputToCart['color']])->count();
                if($count_duplicateItems>0){
                    return back()->with('message','This Item Added already');
                }else{
                    Cart_model::create($inputToCart);
                    return back()->with('message','Add To Cart Already');
                }
            }else{
                return back()->with('message','Stock is not Available!');
            }
        }
    }
    public function deleteItem($id=null){
        $delete_item=Cart_model::findOrFail($id);
        $delete_item->delete();
        return back()->with('message','Deleted Success!');
    }
    public function updateQuantity($id,$quantity){
        $sku_color=DB::table('cart')->select('product_code','color','quantity')->where('id',$id)->first();
        $stockAvailable=DB::table('product_att')->select('stock')->where(['sku'=>$sku_color->product_code,
            'color'=>$sku_color->color])->first();
        $updated_quantity=$sku_color->quantity+$quantity;
        if($stockAvailable->stock>=$updated_quantity){
            DB::table('cart')->where('id',$id)->increment('quantity',$quantity);
            return back()->with('message','Update Quantity already');
        }else{
            return back()->with('message','Stock is not Available!');
        }


    }
}
