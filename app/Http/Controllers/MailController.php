<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\sendEmail;
use Illuminate\Http\Request;


class MailController extends Controller
{
    public function home(){
        return view("admin.mail");
    }
    public function sendemail(Request $get){
        $this->validate($get,[
            "email"=>"required",
            "message"=>"required",
            "subject"=>"required",
        ]);
        $email= $get->email;
        $subject= $get->subject;
        $message= $get->message;

        Mail::to( $email)->send(new sendEmail($subject,$message));
        return redirect('/admin/mail')->with('flash_message_success','Email Send Successfully!');
    }
}
