<?php

namespace App\Http\Controllers;

use App\BasicSettings;
use App\ContactInfo;
use App\MailSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Image;

class SettingController extends Controller
{
    public function setingindex(){
//        $basic_tabactive=array('basic_setting' => Lang::get("active"));

        $basic_setting=BasicSettings::first();
        $contact_info=ContactInfo::first();
        $mail_info=MailSetting::first();
        return view('admin.setting.index',[
            'basic_setting'=>$basic_setting,
            'contact_info'=>$contact_info,
            'mail_info'=>$mail_info,
            ]);
    }
    public function basicsettings(Request $request){
        $this->validate($request,[
            'sitename' => 'required',
            'logo'=>'mimes:jpg,jpeg,bmp,gif,png,svg',
            'favicon'=>'mimes:jpg,jpeg,bmp,gif,png,svg',
            'footertext' => 'required',
        ]);
             $basicdata=BasicSettings::first();
            $basicupdate= BasicSettings::find($basicdata->id);
            $basicupdate->sitename=$request->sitename;
            $basicupdate->footertext=$request->footertext;
            $basicupdate->footerlink=$request->footerlink;
            if($request->hasfile('favicon')) {
                unlink($basicdata->favicon);
                $basic_image = $request->file('favicon');
                $fileExtention = $basic_image->getClientOriginalExtension();
                $uploadPath = 'image/basicSetting/';
                $imageName = time() .'favicon_'.$request->sitename.'.' . $fileExtention;
                $imageUrl = $uploadPath . $imageName;
                Image::make($basic_image)->resize(300, 150)->save($uploadPath . $imageName);
                $basicupdate->favicon = $imageUrl;
            }
            if($request->hasfile('logo')) {
                unlink($basicdata->logo);
                $basic_image = $request->file('logo');
                $fileExtention = $basic_image->getClientOriginalExtension();
                $uploadPath = 'image/basicSetting/';
                $imageName = time() .'logo_'.$request->sitename.'.' . $fileExtention;
                $imageUrl = $uploadPath . $imageName;
                Image::make($basic_image)->resize(300, 150)->save($uploadPath . $imageName);
                $basicupdate->logo = $imageUrl;
            }
        $data= $basicupdate->update();
        if($data) {
            Session::flash('success', 'Basic Information Upload Successfully...');
            return back();
        }

    }
    public function contactinfo(Request $request){
        $contactdata=ContactInfo::first();
        $contactinfo=ContactInfo::find($contactdata->id);
        $contactinfo->contactaddress=$request->contactaddress;
        $contactinfo->contactemail=$request->contactemail;
        $contactinfo->contactphone=$request->contactphone;
        $contactinfo->contactfax=$request->contactfax;
        $contactinfo->googlemap=$request->googlemap;
        $data=$contactinfo->update();
        if($data) {
            Session::flash('success', 'Contact Information Upload Successfully...');
            return back();
        }

    }
    public function emailinfo(Request $request){
        $mailsetting=MailSetting::first();
        $mailsetting->email=$request->email;
        $mailsetting->emailsubject=$request->emailsubject;
        $mailsetting->thanksmessage=$request->thanksmessage;
        $data=$mailsetting->update();
        if($data){
            Session::flash('success','Mail Setting Upload Successfully...');
            return back();
        }
    }

}
