<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function show(){
        return view('index');
    }

    public function login(REQUEST $request){
        if($request->isMethod('post')){
            $data=$request->input();
            if(Auth::attempt(['name'=>$data['name'],'password'=>$data['password'],'Vice Chancellor'=>'1','Grant Admin'=>'2','Dean'=>'3','Department Head'=>'4'])){
                //echo "success";die;
                Session::put('adminSession',$data['name']);
                return redirect('admin/dashboard');
            }else{
                //echo "failed";
                return redirect('/admin')->with('flash_message_error','Invalid Username or Pssword');
            }

        }
        return view('admin.login');
    }

    public function dashboard(){
        if(Session::has('adminSession')){
            //
        }else{
            return redirect('/admin')->with('flash_message_error','Please login to access');  
        }
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function chkpwd(Request $request){
        $data = $request->all();
        $current_password=$data['current_pwd'];
        $check_password=User::where(['admin'=>'1'])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true";
            die;
        }else{
            echo "false";
            die;
        }
    }

    public function updatepwd(Request $request){
        if($request->isMethod('post')){
            $data=$request->all();
            echo "<pre>";
            //print_r($data);
            //die;
            $check_password=User::where(['email'=>Auth::user()->email])->first();
            $current_password=$data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password=bcrypt($data['new_pwd']);
                User::where('id','1')->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');
                }else{
                return redirect('/admin/settings')->with('flash_error_message','Incorrect Current Password');
            }
        }
    } 
    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successed');
    }
    
    
}

