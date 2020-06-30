<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\ListOrders_model;

class AdminController extends Controller
{
    public function index(){
        $menu_active=1;
        $i=0;
        $orders=ListOrders_model::orderBy('created_at','asc')->get();
        return view('backEnd.index',compact('menu_active','orders','i'));
       
    }

    public function manage_product_index(){
        $menu_active=1;
        $i=0;
        $orders=ListOrders_model::orderBy('created_at','asc')->get();
        return view('administrator.backEnd.index',compact('menu_active','orders','i'));
       
    }
    public function settings(){
        $menu_active=0;
        return view('backEnd.setting',compact('menu_active'));
    }
    public function chkPassword(Request $request){
        $data=$request->all();
        $current_password=$data['pwd_current'];
        $email_login=Auth::user()->email;
        $check_pwd=User::where(['email'=>$email_login])->first();
        if(Hash::check($current_password,$check_pwd->password)){
            echo "true"; die();
        }else {
            echo "false"; die();
        }
    }
    public function updatAdminPwd(Request $request){
        $data=$request->all();
        $current_password=$data['pwd_current'];
        $email_login=Auth::user()->email;
        $check_password=User::where(['email'=>$email_login])->first();
        if(Hash::check($current_password,$check_password->password)){
            $password=bcrypt($data['pwd_new']);
            User::where('email',$email_login)->update(['password'=>$password]);
            return redirect('/admin/settings')->with('message','Password Update Successfully');
        }else{
            return redirect('/admin/settings')->with('message','InCorrect Current Password');
        }
    }


    // public function login(Request $request){
    //     if($request->isMethod('post')){
    //         $data=$request->input();
    //         if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password'],'admin'=>'1'])){
    //             echo 'success'; die();
    //         }else{
    //             return redirect('admin')->with('message','Account is Incorrect!');
    //         }
    //     }else{
    //         return view('backEnd.login');
    //     }
    // }
}
