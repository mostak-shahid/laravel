<?php

namespace App\Http\Controllers;

use App\BillingAddres;
use App\City;
use App\CompanyProfile;
use App\ContactInfo;
use App\Country;
use App\Industrytype;
use App\Thana;
use Illuminate\Http\Request;
use Sentinel;
use Image;

class CompanyprofileController extends Controller
{
    public function companyprofile(){
        $user_id = Sentinel::getUser()->id;

        $result['company_profile']=CompanyProfile::where('employer_id',$user_id)->first();
        $result['country_list']=Country::all();
        $result['city_list']=City::where('parent_id',$result['company_profile']->country)->get();
        $result['thana_list']=Thana::where('city_id',$result['company_profile']->city)->get();
        $result['industry_type']=Industrytype::all();

        $result['contact_info']=ContactInfo::where('employer_id',$user_id)->first();
        $result['billing_address']=BillingAddres::where('employer_id',$user_id)->first();
        return view('employer.companyprofile',compact('result'));
    }
    public function updatecompanyprofile(Request $request){
//        dd($request);
        $company_profile=CompanyProfile::where('employer_id',$request->employer_id)->first();
        $company_profile->company_name=$request->company_name;
        $company_profile->country=$request->country;
        $company_profile->city=$request->city;
        $company_profile->thana=$request->thana;
        $company_profile->company_address=$request->company_address;
        $company_profile->company_type=json_encode($request->company_type);
        $company_profile->business_description=$request->business_description;
        $company_profile->license_no=$request->license_no;
        $company_profile->rl_no=$request->rl_no;
        $company_profile->company_website=$request->company_website;
        if($request->hasfile('company_logo')) {
            if(!empty($company_profile->company_logo)){
                unlink($company_profile->company_logo);
            }
            $basic_image = $request->file('company_logo');
            $fileExtention = $basic_image->getClientOriginalExtension();
            $uploadPath = 'image/company_logo/';
            $imageName = time() .'company_logo_'.$request->company_name.'.' . $fileExtention;
            $imageUrl = $uploadPath . $imageName;
            Image::make($basic_image)->resize(182, 182)->save($uploadPath . $imageName);
            $company_profile->company_logo = $imageUrl;
        }
        $company_profile->update();
        $contact_info=ContactInfo::where('employer_id',$request->employer_id)->first();
        $contact_info->contact_person_name=$request->contact_person_name;
        $contact_info->person_designation=$request->person_designation;
        $contact_info->contact_phone_no=$request->contact_phone_no;
        $contact_info->update();
        $billing_address=BillingAddres::where('employer_id',$request->employer_id)->first();
        $billing_address->billing_address=$request->billing_address;
        $billing_address->billing_phone_no=$request->billing_phone_no;
        $billing_address->billing_email=$request->billing_email;
        $updata=$billing_address->update();
        if($updata){
            return redirect()->back()->with(['success' => "Your Account Details Update Successfully..."]);
        }
    }
    public function ajaxselectemployercity(Request $request){
        $city_list=City::where('parent_id',$request->country_id)->get();
        $city=[];
        foreach ($city_list as $value){
            $city[]='<option value='.$value->id.'>'.$value->cityname.'</option>';
        }
        return $city;
    }
    public function ajaxselectemployerthana(Request $request){
        $thana_list=Thana::where('city_id',$request->city_id)->get();
        $thana=[];
        foreach ($thana_list as $value){
            $thana[]='<option value='.$value->id.'>'.$value->thananame.'</option>';
        }
        return $thana;
    }
    public function addthana(Request $request){
        $location=new Thana();
        $location->thananame=$request->thana;
        $location->city_id=$request->city_id;
        $add=$location->save();
        if($add){
            return redirect()->back()->with(['success' => $request->thana." Thana Added Successfully..."]);
        }
    }
    public function addindustrytype(Request $request){
        $industry_type=new Industrytype();
        $industry_type->industrytype=$request->industrytype;
        $dataadd=$industry_type->save();
        if($dataadd){
            return redirect()->back()->with(['success' => $request->industrytype." Industry Type Added Successfully..."]);
        }
    }
}
