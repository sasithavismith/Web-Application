<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Research_Allowance;
use Illuminate\Support\Facades\Validator;


class Research_AllowanceController extends Controller
{
    public function storeAllowance(Request $request){
    $allowancedetails=new allowance;
   
         //dd($request->all());
        $allowancedetails->name=$request->name;
        $allowancedetails->designation=$request->designation;
        $allowancedetails->department=$request->department;
        $allowancedetails->a=$request->a;
        $allowancedetails->b=$request->b;
        $allowancedetails->c=$request->c;
        $allowancedetails->published=$request->published;
        $allowancedetails->ongoing=$request->ongoing;
        $allowancedetails->status=$request->status;
        $allowancedetails->current=$request->current;
        $allowancedetails->any_type=$request->any_type;
        $allowancedetails->title=$request->title;
        $allowancedetails->destription=$request->destription;
        $allowancedetails->duration=$request->duration;
        $allowancedetails->expected_date=$request->expected_date;
        $allowancedetails->c=$request->c;
        $allowancedetails->output=$request->output;
        $allowancedetails->date=$request->date;
        
 
        $allowancedetails->save();
          $data=allowance::all();
            return redirect('/higher')->with('details',$data);
           $data=allowance::all();
    }  public function save(Request $request)
    {
  
        $request->validate([
        'name' => 'required|alpha',
        'designation' => 'required',
        'department' => 'required',
        'faculty'=>'required',
        'a'=> 'required',
        'b'=> 'required',
        'c'=> 'required',
        'published'=> 'required',
        'ongoing'=> 'required',
        'status'=> 'required',
        'current'=> 'required',
        'any_type' => 'required',
        'title' => 'required',
        'objective'=>'required',
        'destription' => 'required',
        'duration'=> 'required',
        'expected_date'=> 'required',
        'output'=> 'required',
        'date'=> 'required',
        
        ]);
  
  
        $data = $request->all();
        $check = allowance::create($data);
  
        return Redirect('/higher')->with('submit_success','Submit Successfully!');
    }
  
  }