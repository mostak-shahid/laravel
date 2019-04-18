<?php

namespace App\Http\Controllers;

use App\BillingAddres;
use App\CompanyProfile;
use App\ContactInfo;
use Illuminate\Http\Request;
use Mail;
use Mockery\Exception;
use Sentinel;
use Activation;


class RegistrationController extends Controller
{
  public function registerindex(){
      return view('registration');
  }
  public function storeregister(Request $request){
      $this->validate($request, [
          'email'     => 'required|email|unique:users,email',
          'password'     => 'required|min:6|max:20',
      ]);
      $user=Sentinel::register($request->all());
      $activation=Activation::create($user);
      $role=Sentinel::findRoleBySlug($request->account_type);
      $role->users()->attach($user);
      $this->sendEmail($user, $activation->code);
      if($user->account_type=='employer'){
          $profile=new CompanyProfile();
          $profile->employer_id=$user->id;
          $profile->save();
          $contact=new ContactInfo();
          $contact->employer_id=$user->id;
          $contact->contact_email=$user->email;
          $contact->save();
          $billing=new BillingAddres();
          $billing->employer_id=$user->id;
          $billing->save();
          return redirect('/');
      }else{
          return redirect('/');
      }


  }
  private function sendEmail($user,$code){
      Mail::send('mail.activation',[
          'user'=>$user,
          'code'=>$code
      ],function ($message) use ($user){
          $message->to($user->email);
          $message->subject("hello $user->first_name, activate your account. ");
      });
  }

}
