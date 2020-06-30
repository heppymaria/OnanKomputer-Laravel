<?php

namespace App\Http\Controllers;


use App\User;
use App\Orders_model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function login_index(){
        return view('users.login');
    }
    public function register_index(){
        return view('users.register');
    }

    
    public function register(Request $request){
        $this->validate($request,[
            'name'=>'required|string|max:255',
            'email'=>'required|string|email|unique:users,email',
            'password'=>'required|min:6|confirmed',
        ]);
        $input_data=$request->all();
        $input_data['password']=Hash::make($input_data['password']);
        User::create($input_data);
        return view('users.login');
    }

    
  
    public function login(Request $request){
        
        $input_data=$request->all();
        if(Auth::attempt(['email'=>$input_data['email'],'password'=>$input_data['password']])){
            Session::put('frontSession',$input_data['email']);
            return redirect('/');
        }else{
            return back()->with('message','Account is not Valid!');
        }
    }
    public function logout(){
        Auth::logout();
        Session::forget('frontSession');
        return redirect('/');
    }
    public function account(){
        $user_login=User::where('id',Auth::id())->first();
        $orders_user=Orders_model::where([['users_id', $user_login->id]])->get();
        return view('users.account',compact('user_login', 'orders_user'));
    }

    public function track_order($id=null){
        $track_order_pro = Orders_model::findOrFail($id);
        return view('users.track_order');
    }
    public function updateprofile(Request $request,$id){
        $this->validate($request,[ 
            'country'=>'required',
            'address'=>'required',
            'province'=>'required',
            'region'=>'required',
            'city'=>'required',
            'barangay'=>'required',
            'postal_code'=>'required',
            'phone_number'=>'required',
            
        ]);
        $input_data=$request->all();
        DB::table('users')->where('id',$id)->update(['name'=>$input_data['name'],
            'address'=>$input_data['address'],
            'province'=>$input_data['province'],
            'region'=>$input_data['region'],
            'city'=>$input_data['city'],
            'barangay'=>$input_data['barangay'],
            'country'=>$input_data['country'],
            'postal_code'=>$input_data['postal_code'],
            'phone_number'=>$input_data['phone_number']]);
        return back()->with('message','Update Profile already!');

    }
    public function updatepassword(Request $request,$id){
        $oldPassword=User::where('id',$id)->first();
        $input_data=$request->all();
        if(Hash::check($input_data['password'],$oldPassword->password)){
            $this->validate($request,[
               'newPassword'=>'required|min:6|max:12|confirmed'
            ]);
            $new_pass=Hash::make($input_data['newPassword']);
            User::where('id',$id)->update(['password'=>$new_pass]);
            return back()->with('message','Update Password Already!');
        }else{
            return back()->with('oldpassword','Old Password is Inconrrect!');
        }
    }
}
