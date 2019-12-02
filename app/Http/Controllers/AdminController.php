<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Session;

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

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successed');
    }
}
