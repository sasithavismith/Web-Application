<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\manuscript;
use Auth;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Validator;


class manuscriptController extends Controller
{
    public function store1(Request $request){
        $manuscriptdetails=new manuscript;

            $manuscriptdetails->name=$request->name;
            $manuscriptdetails->designation=$request->designation;
            $manuscriptdetails ->department=$request->department;
            $manuscriptdetails->faculty=$request->faculty;
            $manuscriptdetails->title=$request->title;
            $manuscriptdetails->first_author=$request->first_author;
            $manuscriptdetails->corresponding_author=$request->corresponding_author;
            $manuscriptdetails->other_author=$request->other_author;
            $manuscriptdetails->journal=$request->journal;
            $manuscriptdetails->volume_and_issue_number=$request->volume_and_issue_number;
            $manuscriptdetails->date_of_acceptance=$request->date_of_acceptance;
            $manuscriptdetails->issn=$request->issn;
            $manuscriptdetails->publisher=$request->publisher;
            $manuscriptdetails->publication_fee=$request->publication_fee;
            if($request->hasfile('file_copy')){
                $file=$request->file('file_copy');
                $extension= $file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/file copy/',$filename);
                $manuscriptdetails->file_copy=$filename;
            }
            else{
                return $request;
                $manuscriptdetails->file_copy='';
            }
            if($request->hasfile('file_evidence')){
                $file=$request->file('file_evidence');
                $extension= $file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/file evidence/',$filename);
                $manuscriptdetails->file_evidence=$filename;
            }
            else{
                return $request;
                $manuscriptdetails->file_evidence='';
            }
            if($request->hasfile('file_letter')){
                $file=$request->file('file_letter');
                $extension= $file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/file letter/',$filename);
                $manuscriptdetails->file_letter=$filename;
            }
            else{
                return $request;
                $manuscriptdetails->file_letter='';
            }
            if($request->hasfile('file_invoice')){
                $file=$request->file('file_invoice');
                $extension= $file->getClientOriginalExtension();
                $filename=time().'.'.$extension;
                $file->move('uploads/file invoice/',$filename);
                $manuscriptdetails->file_invoice=$filename;
            }
            else{
                return $request;
                $manuscriptdetails->file_invoice='';
            }
            $manuscriptdetails->date1=$request->date1;
            $manuscriptdetails->save();
              $data=manuscript::all();
                return redirect('/index')->with('details',$data);
               $data=manuscript::all();
        }
        public function show(Request $request){
            $manuscriptdetails= manuscript::find($request->id);
            //return $manuscriptdetails->name;
            //return redirect('/admin/manuscriptShow');
            return view('admin.manuscriptShow',compact('manuscriptdetails'));
        }
        public function updateApproved( ){
           // $approveddetail=manuscript::find($request->isapproved);
           
            $approveddetail=manuscript::where('isapproved',1)->get();

            return view('admin.manuscriptApprove')->with('approved',$approveddetail);

        }
        public function updateApprovedd($id){
            $manuscriptdetails=manuscript::find($id);
            $manuscriptdetails->isapproved=1;
            $manuscriptdetails->save();
            return redirect('/admin/manuscriptview');
           // return redirect()->back();

        }
        public function grantadmin(){
            // $user = Auth::find('name', $request->name)->first();

            // switch ($user->name){
            //     case 'Grant admin':
            //         $grantadmin=manuscript::where('isapproved',1)->get();
            //            return view('admin.manuscriptgrant')->with('approved',$grantadmin);
                   
             if(Auth::user()->id=='2'){
                $grantadmin=manuscript::where('isapproved',1)->get();
                     return view('admin.manuscriptview')->with('details',$grantadmin);
    }else{
        $grantadmin=manuscript::where('isapproved',0)->get();
                     return view('admin.manuscriptview')->with('details',$grantadmin);;
    }
        }
        // public function updateApprovedean($id){
        //     $manuscriptdetails=manuscript::find($id);
        //     $manuscriptdetails->isapprovedean=1;
        //     $manuscriptdetails->save();
        //     return redirect('/admin/manuscriptview');
        //    // return redirect()->back();

        // }
        //     $grantadmin=User::where(['name'=>Auth::user('Grant Admin')->name])->first();
        //     $grantadmin=manuscript::where('isapproved',1)->get();
        //     return view('admin.manuscriptgrant')->with('approved',$grantadmin);
            
        // }

        // public function grantadmin(){
        //     $grantadmin=User::where(['name'=>Auth::user('Grant Admin')->name])->first();
        //     $grantadmin=manuscript::where('isapproved',1)->get();
        //     return view('admin.manuscriptgrant')->with('approved',$grantadmin);
            
        // }
        public function save(Request $request)
    {
 
        $request->validate([
        'name' => 'required|string|unique:users',
        'designation' => 'required',
        'department' => 'required',
        'faculty'=> 'required',
        'title'=> 'required',
        'first_author'=> 'required',
        'corresponding_author'=> 'required',
        'other_author'=> 'required',
        'journal'=> 'required',
        'volume_and_issue_number'=> 'required',
        'date_of_acceptance'=> 'required',
        'issn'=> 'required',
        'publisher'=> 'required',
        'publication_fee'=> 'required',
        'file_copy'=> 'required',
        'file_evidence'=> 'required',
        'file_letter'=> 'required',
        'file_invoice'=> 'required',
        'date1'=> 'required',
        ]);
 
 
        $data = $request->all();
        $check = manuscript::create($data);
 
        return Redirect('/manuscript')->with('submit_success','Submit Successfully!');
    }



    
}
