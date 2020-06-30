<?php

namespace App\Http\Controllers;

use App\Compare_model;
use App\Products_model;
use App\Category_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class compareController extends Controller
{
    public function index(){

        $session_id=Session::get('session_id');
        $compare_datas = Compare_model::all();
        return view('frontEnd.compare', compact('compare_datas'));  
    }

    public function addToCompare(Request $request){
        $addToCompare=$request->all();
        $session_id=Session::get('session_id');
                if(empty($addToCompare['session_id'])){
                    $addToCompare['session_id'] = '';
                }
        
        $addToCompare['products_id']=$request->products_id;
        $addToCompare['products_code']=$request->products_code;
        $addToCompare['products_name']=$request->products_name;
        $addToCompare['products_description']=$request->products_description;
        $addToCompare['products_price']=$request->products_price;
        $addToCompare['products_categories_id']=$request->products_categories_id;
        
        $count_duplicateItems=Compare_model::where(['products_id'=>$addToCompare['products_id'],
                    'products_code'=>$addToCompare['products_code']])->count();
        if($count_duplicateItems>0){
            return back()->with('message','This Item Added already');
        }else{
            compare_model::create($addToCompare);
            return back()->with('message','Add To Compare Already');
        }

    }
    public function deleteItem($id=null){
        $delete_item = Compare_model::findOrFail($id);
        $delete_item->delete();
        return back()->with('message','Deleted Success!');
    }
   
}
