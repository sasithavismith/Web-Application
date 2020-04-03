<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\formA;
use Auth;
use Illuminate\Support\Facades\Validate;

class formAController extends Controller
{
  public function store(Request $request){
  $formAdetails=new formA;
 
       //dd($request->all());
      

$formAdetails->Full_name=$request->Full_name;
$formAdetails->designation=$request->designation;
$formAdetails->department=$request->department;
$formAdetails->faculty=$request->faculty;
$formAdetails->email=$request->email;
$formAdetails->tel=$request->tel;
$formAdetails->event_name=$request->event_name;
$formAdetails->Contact_detail=$request->Contact_detail;
$formAdetails->country=$request->country;
$formAdetails->period=$request->period;
$formAdetails->Title_of_the_abstract=$request->Title_of_the_abstract;
$formAdetails->Date_of_the_acceptance=$request->Date_of_the_acceptance;
$formAdetails->other_academic_activities=$request->other_academic_activities;
$formAdetails->Registration_fee=$request->Registration_fee;
$formAdetails->Air_ticket=$request->Air_ticket;
$formAdetails->Accommodation_and_meal=$request->Accommodation_and_meal;
$formAdetails->Iternal_travelling=$request->Iternal_travelling;
$formAdetails->Total_cost=$request->Total_cost;
$formAdetails->Finacial_Assistance=$request->Finacial_Assistance;
$formAdetails->Year_I=$request->Year_I;
$formAdetails->Country_I=$request->Country_I;
$formAdetails->Amount_received_I=$request->Amount_received_I;
$formAdetails->Year_II=$request->Year_II;
$formAdetails->Country_II=$request->Country_II;
$formAdetails->Amount_received_II=$request->Amount_received_II;
$formAdetails->Year_III=$request->Year_III;
$formAdetails->Country_III=$request->Country_III;
$formAdetails->Amount_received_III=$request->Amount_received_III;

      $formAdetails->save();
        $data=formA::all();
          return redirect('/formA')->with('details',$data);
         $data=formA::all();
  }
 /*  public function show(Request $request){
    $formBdetails= formA::find($request->id);
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
$grantadmin=formB::where('isapprovedhead',1)->get();

return view('admin.formBview')->with('details',$grantadmin);   
}
elseif (Auth::user()->id=='3') {
$grantadmin=formB::where('isapprovedean',1)->get();
return view('admin.formBview')->with('details',$grantadmin);   
}
elseif (Auth::user()->id=='1') {
$grantadmin=formB::where('isapprovedgrant',1)->get();
return view('admin.formBview')->with('details',$grantadmin);   
}

// else{
//     $grantadmin=manuscript::where('isapprovedean',0)->get();
//                  return view('admin.manuscriptview')->with('details',$grantadmin);
// }
} */
public function save(Request $request)
{

    $request->validate([

    'Full_name'=>'required|string',
    'designation'=>'required|string',
    'department'=>'required|string',
    'faculty'=>'required|string',
    'tel'=>'required|string',
    'email'=>'required|string',
    'event_name'=>'required|string',
    'Contact_detail'=>'required|string',
    'country'=>'required|string',
    'period'=>'required|string',
    'Title_of_the_abstract'=>'required|string',
    'Date_of_the_acceptance'=>'required|string',
    'other_academic_activities'=>'required|string',
    'Registration_fee'=>'required|string',
    'Air_ticket'=>'required|string',
    'Accommodation_and_meal'=>'required|string',
    'Iternal_travelling'=>'required|string',
    'Total_cost'=>'required|string',
    'Finacial_Assistance'=>'required|string',
    'Year_I'=>'required|string',
    'Country_I'=>'required|string',
    'Amount_received_I'=>'required|string',
    'Year_II'=>'required|string',
    'Country_II'=>'required|string',
    'Amount_received_II'=>'required|string',
    'Year_III'=>'required|string',
    'Country_III'=>'required|string',
    'Amount_received_III'=>'required|string',

    
    ]);


    $data = $request->all();
    $check = formA::create($data);

    return Redirect('/formA')->with('submit_success','Submit Successfully!');
}

}
