<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
        public function store(){
            return view('layouts/form/form1');
        }

public function store1(){
    return view('layouts/form/manuscript');
}

public function store2(){
    return view('layouts/form/higher');
}
public function store3(){
    return view('layouts/form/formB');
}
public function store4(){
    return view('layouts/form/formA');
}

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
        return view('admin.adminlogin');
    }

    public function dashboard(){
        if(Session::has('adminSession')){
            
        }else{
            return redirect('/admin')->with('flash_message_error',"Please login to access");  
        }
        return view('admin.dashboard');
    }

    public function settings(){
        return view('admin.settings');
    }

    public function chkpwd(Request $request){
        $data = $request->all();
        $current_pwd=$data['current_pwd'];
        $check_pwd=User::where(['name'=>Auth::user()->name])->first();
        if(Hash::check($current_pwd,$check_pwd->password)){
            echo "true";
            die;
        }else{
            echo "false";
            die;
        }
    }
    
    public function updatePassword(Request $request){
            if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>";
            //print_r($data);
            //die;
            $check_pwd=User::where(['name'=>Auth::user()->name])->first();
            $current_pwd=$data['current_pwd'];
            if(Hash::check($current_pwd,$check_pwd->password)){
                $password=bcrypt($data['new_pwd']);

                User::where(['name'=>Auth::user()->name])->update(['password'=>$password]);
                return redirect('/admin/settings')->with('flash_message_success','Password updated Successfully!');

            }else{
                return redirect('/admin/settings')->with('flash_message_error','Password updated Uns uccessfully!');

        }
    }
} 

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','Logged out Successed');
    }
    
    
}

