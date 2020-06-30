<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CheckOutController extends Controller
{
    public function index(){
        $user_login=User::where('id',Auth::id())->first();
        return view('checkout.index',compact('user_login'));
    }
    public function submitcheckout(Request $request){
       $this->validate($request,[
           'billing_name'=>'required',
           'billing_country'=>'required',
           'billing_province'=>'required',
           'billing_region'=>'required',
           'billing_city'=>'required',
           'billing_barangay'=>'required',
           'billing_address'=>'required',
           'billing_postal_code'=>'required',
           'billing_phone_number'=>'required',
           'shipping_name'=>'required',
           'shipping_country'=>'required',
           'shipping_province'=>'required',
           'shipping_region'=>'required',
           'shipping_city'=>'required',
           'shipping_barangay'=>'required',
           'shipping_address'=>'required',
           'shipping_postal_code'=>'required',
           'shipping_phone_number'=>'required',
       ]);
        $input_data=$request->all();
       $count_shippingaddress=DB::table('delivery_address')->where('users_id',Auth::id())->count();
       if($count_shippingaddress==1){
           DB::table('delivery_address')->where('users_id',Auth::id())->update(['name'=>$input_data['shipping_name'],
               'address'=>$input_data['shipping_address'],
               'province'=>$input_data['shipping_province'],
               'city'=>$input_data['shipping_city'],
               'region'=>$input_data['shipping_region'],
               'country'=>$input_data['shipping_country'],
               'barangay'=>$input_data['shipping_barangay'],
               'postal_code'=>$input_data['shipping_postal_code'],
               'phone_number'=>$input_data['shipping_phone_number']]);
       }else{
            DB::table('delivery_address')->insert(['users_id'=>Auth::id(),
                'users_email'=>Session::get('frontSession'),
                'name'=>$input_data['shipping_name'],
                'address'=>$input_data['shipping_address'],
                'province'=>$input_data['shipping_province'],
                'city'=>$input_data['shipping_city'],
                'region'=>$input_data['shipping_region'],
                'country'=>$input_data['shipping_country'],
                'barangay'=>$input_data['shipping_barangay'],
                'postal_code'=>$input_data['shipping_postal_code'],
                'phone_number'=>$input_data['shipping_phone_number']]);
       }
        DB::table('users')->where('id',Auth::id())->update(['name'=>$input_data['billing_name'],
            'country'=>$input_data['billing_country'],
            'province'=>$input_data['billing_province'],
            'region'=>$input_data['billing_region'],
            'city'=>$input_data['billing_city'],
            'barangay'=>$input_data['billing_barangay'],
            'address'=>$input_data['billing_address'],
            'postal_code'=>$input_data['billing_postal_code'],
            'phone_number'=>$input_data['shipping_phone_number']]);
       return redirect('/order-review');

    }
}
