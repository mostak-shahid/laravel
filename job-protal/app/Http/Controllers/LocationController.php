<?php

namespace App\Http\Controllers;

use App\City;
use App\Country;
use App\Thana;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LocationController extends Controller
{
    public function index(){
        $result['country']=Country::all();

        $result['location']=DB::table('countries')
            ->leftJoin('cities', 'countries.id', '=', 'cities.parent_id')
            ->leftJoin('thanas', 'cities.id', '=', 'thanas.city_id')
            ->select('countries.*','cities.cityname as city','cities.id as cities_id','cities.updated_at as city_updated_at','thanas.thananame as thana','thanas.id as thana_id','thanas.updated_at as thana_updated_at')
            ->get();
//        dd( $result['location']);
        return view('admin.location.index',compact('result'));
    }
    public function addcountry(Request $request){
       $location=new Country();
        $location->country=$request->country;
        $add=$location->save();
        if($add){
            return redirect()->back()->with(['success' => $request->country." Country Added Successfully..."]);
        }
    }
    public function deleteCountry($country_id){
        $country=Country::find($country_id);
        $delete=$country->delete();
        if($delete){
            return redirect()->back()->with(['success' => $country->country." Country Delete Successfully..."]);
        }
    }
    public function addcity(Request $request){
       $location=new City();
        $location->cityname=$request->city;
        $location->parent_id=$request->country_id;
        $add=$location->save();
        if($add){
            return redirect()->back()->with(['success' => $request->city." City Added Successfully..."]);
        }
    }
    public function deletecity($city_id){
        $thana=City::find($city_id);
        $delete=$thana->delete();
        if($delete){
            return redirect()->back()->with(['success' => $thana->cityname." City Delete Successfully..."]);
        }
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
    public function deletethana($thana_id){
        $thana=Thana::find($thana_id);
        $delete=$thana->delete();
        if($delete){
            return redirect()->back()->with(['success' => $thana->thananame." Thana Delete Successfully..."]);
        }
    }
    public function ajaxselectcity(Request $request){
        $parent_id=$request->country_id;
        $get_city=City::where('parent_id',$parent_id)->get();
        $city=[];
        foreach ($get_city as $value){
            $city[]='<option value='.$value->id.'>'.$value->cityname.'</option>';
        }
       return $city;
    }



}
