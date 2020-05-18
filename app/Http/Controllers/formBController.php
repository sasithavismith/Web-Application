<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formB;
use Auth;
use Illuminate\Support\Facades\Validate;
use Validator,Redirect,Response;

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

  public function updateApproved( ){
    // $approveddetail=manuscript::find($request->isapproved);
    if(Auth::user()->id=='1'){
     $approveddetail=formB::where('isapprovedvc',1)->get();

     return view('admin.formBApprove')->with('approved',$approveddetail);
    }
    elseif(Auth::user()->id=='2'){
     $approveddetail=formB::where('isapprovedean',1)->get();

     return view('admin.formBApprove')->with('approved',$approveddetail);
     
    }
    elseif(Auth::user()->id=='3'){
     $approveddetail=formB::where('isapprovedgrant',1)->get();

     return view('admin.formBApprove')->with('approved',$approveddetail);
     
    }
    elseif(Auth::user()->id=='4'){
     $approveddetail=formB::where('isapprovedhead',1)->get();

     return view('admin.formBApprove')->with('approved',$approveddetail);
     
    }


    
    
 }
 public function updateApprovedd($id){
  if(Auth::user()->id=='1'){
  $manuscriptdetails=formB::find($id);
  $manuscriptdetails->isapprovedvc=1;
  $manuscriptdetails->save();
 // return redirect()->back();
  return redirect('/admin/formBview')->with('details',$manuscriptdetails);
  }
  elseif(Auth::user()->id=='2'){
      $manuscriptdetails=formB::find($id);
      $manuscriptdetails->isapprovedean=1;
      $manuscriptdetails->save();
  //    return redirect()->back();  
      return redirect('/admin/formBview')->with('details',$manuscriptdetails);
  }
  elseif(Auth::user()->id=='3'){
      $manuscriptdetails=formB::find($id);
      $manuscriptdetails->isapprovedgrant=1;
      $manuscriptdetails->save();
  //    return redirect()->back();  
      return redirect('/admin/formBview')->with('details',$manuscriptdetails);
  }
  elseif(Auth::user()->id=='4'){
      $manuscriptdetails=formB::find($id);
      $manuscriptdetails->isapprovedhead=1;
      $manuscriptdetails->save();
  //    return redirect()->back();  
      return redirect('/admin/formBview')->with('details',$manuscriptdetails);
  }
}
public function grantadmin(){
                  
  if(Auth::user()->id=='4'){
     $grantadmin=formB::where('isapprovedhead',0)->get();
     
          return view('admin.formBview')->with('details',$grantadmin);

}
elseif (Auth::user()->id=='2') {
$grantadmin=formB::where('isapprovedean',0)->get();

return view('admin.formBview')->with('details',$grantadmin);   
}
elseif (Auth::user()->id=='3') {
$grantadmin=formB::where('isapprovedgrant',0)->get();
return view('admin.formBview')->with('details',$grantadmin);   
}
elseif (Auth::user()->id=='1') {
$grantadmin=formB::where('isapprovedvc',0)->get();
return view('admin.formBview')->with('details',$grantadmin);   
}

// else{
//     $grantadmin=manuscript::where('isapprovedean',0)->get();
//                  return view('admin.manuscriptview')->with('details',$grantadmin);
// }
}
  public function save(Request $request)
  {
    $request->validate([
  'full_name'=>'required|string',
      'designation' => 'required|string',
      'department' => 'required|string',
      'faculty'=> 'required|string|',
      'tel'=> 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|max:10',
      'email'=> 'required|unique:form_b_s',
      'event'=> 'required',
      'country'=> 'required|string',
      'period'=> 'required|numeric',
      'title'=> 'required|string',
      ]);


      $data = $request->all();
      $check = formB::create($data);

      return Redirect('/formB')->with('submit_success','Submit Successfully!');
  }

}
