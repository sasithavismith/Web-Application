<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\manuscript;
use Illuminate\Support\Facades\Validator;

class manuscriptController extends Controller
{
    public function store1(Request $request){
        $manuscriptdetails=new manuscript;
    //     $validator = Validator::make($request->all(),[
    //        'full_name'=>'required|max:100|min:5',
    //    'designation'=>'required',
    //        'department'=>'required',
    //         'faculty'=>'required',
    //         'tel'=>'required',
    //         'email' => 'require|email|unique:users',
    //         'event'=>'required',
    //         'country'=>'required',
    //         'period'=>'required',
    //         'title'=>'required',
    //         'date'=>'required',
    //         'remember'=>'required',
    //         ]);
            // dd($request->all());
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
}
