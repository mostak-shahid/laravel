<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class emailMessage extends Mailable
{
    use Queueable, SerializesModels;



    public $viewmaildata;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($objmail)
    {
        $this->viewmaildata = $objmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $name = $this->viewmaildata->name;
        $subject = $this->viewmaildata->subject;
        return $this->from('mostafiz128@gmail.com',$name)
            ->view('mail.viewmail')
            ->subject($subject);
//            ->with(
//                [
////                    'link' => '/reset-password',
////                    'testVarTwo' => '2',
//                ]);


//        attached file send
//            ->attach(public_path('/image').'/logo-1.png', [
//                'as' => 'logo-1.jpg',
//                'mime' => 'image/png',
//            ]);
    }
}
