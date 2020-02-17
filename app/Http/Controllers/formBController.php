<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formB;
use Illuminate\Support\Facades\Validate;

class formBController extends Controller
{
    public function store(Request $request){
    $formBdetails=new formB;
   
         //dd($request->all());
        $formBdetails->full_name=$request->full_name;
        $formBdetails->designation=$request->designation;
        $formBdetails ->department=$request->department;
        $formBdetails->faculty=$request->faculty;
        $formBdetails->tel=$request->tel;
        $formBdetails->email=$request->email;
        $formBdetails->event=$request->event;
        $formBdetails->country=$request->country;
        $formBdetails->period=$request->period;
        $formBdetails->title=$request->title;
 
        $formBdetails->save();
          $data=formB::all();
            return redirect('/formb')->with('details',$data);
           $data=formB::all();
    }
    public function show(Request $request){
      $formBdetails= formB::find($request->id);
      //return $manuscriptdetails->name;
      //return redirect('/admin/manuscriptShow');
      return view('admin.formBShow',compact('formBdetails'));
  }
  public function save(Request $request)
  {

      $request->validate([
      'full_name' => 'required|string|unique:form_b_s',
      'designation' => 'required',
      'department' => 'required',
      'faculty'=> 'required',
      'tel'=> 'required|unique:form_b_s',
      'email'=> 'required|unique:form_b_s',
      'event'=> 'required',
      'country'=> 'required',
      'period'=> 'required',
      'title'=> 'required|unique:form_b_s',
      
      ]);


      $data = $request->all();
      $check = formB::create($data);

      return Redirect('/formB')->with('submit_success','Submit Successfully!');
  }

}
