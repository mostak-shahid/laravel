<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Activation;
use Sentinel;
use Cartalyst\Sentinel\Users\UserInterface;



class ActivationController extends Controller
{
    public function activate($email, $activationCode){
       $usera=User::whereEmail($email)->first();
        $user=Sentinel::findById($usera->id);
        if(Activation::complete($user,$activationCode)){
          return redirect('/');
        }
        else{

        }
    }
}
