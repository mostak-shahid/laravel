<?php

namespace App\Http\Controllers;

use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function index(){
        return view('admin.authontication.login');
    }
    public function submitlogin(Request $request){
        try {
            if (Sentinel::authenticate($request->all())) {
                $slug = Sentinel::getUser()->roles()->first()->slug;

                if ($slug == 'admin')
                    return Redirect('admin/dashboard');

            } else {
                return redirect()->back()->with(['error' => 'Wrong Credentials.']);
            }
        }
        catch (ThrottlingException $e){
            $delay=$e->getDelay();
            return redirect()->back()->with(['error' => "You are banned for $delay Seconds. Please wait..."]);
        }
        catch (NotActivatedException $e){
            return redirect()->back()->with(['error' => 'Your account is not activated!.Please contact to Admin']);
        }
    }
    public function loginproviderseker(Request $request){
        try {
            if (Sentinel::authenticate($request->all())) {
                $slug = Sentinel::getUser()->roles()->first()->slug;

                if ($slug == 'candidate'){
                    return Redirect('candidate/dashboard');
                }
                   if ($slug == 'employer'){
                    return Redirect('employer/dashboard');
                }


            } else {
                return redirect()->back()->with(['error' => 'Wrong Credentials.']);
            }
        }
        catch (ThrottlingException $e){
            $delay=$e->getDelay();
            return redirect()->back()->with(['error' => "You are banned for $delay Seconds. Please wait..."]);
        }
        catch (NotActivatedException $e){
            return redirect()->back()->with(['error' => 'Your account is not activated!.Please Check your Email And Active your account']);
        }
    }

    public function logout(){
        Sentinel::logout();
        return redirect('/');
    }
}
