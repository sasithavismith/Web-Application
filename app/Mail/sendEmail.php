<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * 
     */
    public $sub;
    public $mes;

    public function __construct($subject,$message)
    {
        $this->sub=$subject;
        $this->mes=$message; 
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $e_subject=$this->sub;
        $e_message=$this->mes;

        return $this->view('admin.sendmail',compact("e_message"))->subject($e_subject);
        //return $this->view('view.name');
    }
}
