<?php

namespace App\Http\Controllers;

use App\Mail\emailMessage;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Sentinel;


class forgetpasswordController extends Controller
{
    public function verifyemail(){
        return view('mail.verifyemail');
    }
    public function forgetpassword(Request $request){

        $user=User::where('email','=',$request->email)->first();
        if(isset($user->email)){
            $objmail = new \stdClass();
            $objmail->name = $user->first_name;
            $objmail->subject = 'Resetting Your Forgotten Password';
            $objmail->message = ' You are receiving this email because we received a password reset request for your account.';
            $objmail->link = '/admin/w4t'.$user->id.'j6/reset-password';
            Mail::to($user->email)->send(new emailMessage($objmail));
            return view('mail.conformation');
        }
        else{
            Session::flash('error','Email address does not match to your existing Record . .');
            return back();
        }
    }

    public function mailtoresetindex($id){
        $user=User::find($id);
        return view('mail.resetmailpassword',compact('user'));
    }
    public function mailtoresetpassword(){
        $password = Input::get('password');
        $id = Input::get('id');
        $user=$user = Sentinel::findById($id);
        $password = [
            'password' => $password,
        ];
        Sentinel::update($user, $password);
        Session::flash('success', 'Password Reset . .');
        return redirect()->back();
    }
}
