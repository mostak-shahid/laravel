<?php

namespace App\Http\Controllers;

use App\Pagemodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Image;

class PageController extends Controller
{
//    public function pageindex(){
//        $page_list=Pagemodel::all();
//        return view('admin.pages.index',compact('page_list'));
//    }
//    public function createpage(){
//        return view('admin.pages.createpage');
//    }
//    public function storenewpage(Request $request){
//        $this->validate($request,[
//            'image'=>'mimes:jpg,jpeg,bmp,gif,png,svg',
//        ]);
//        $pagemodel=new Pagemodel();
//        $pagemodel->pagename=$request->pagename;
//        $pagemodel->slug=str_slug($pagemodel->pagename);
//        $pagemodel->layout=$request->layout;
//        $pagemodel->page_description=$request->page_description;
//        if($request->hasfile('image')) {
//            $page_image = $request->file('image');
//            $fileExtention = $page_image->getClientOriginalExtension();
//            $uploadPath = 'image/pagebanner/';
//            $imageName = time() .'page_'.$request->pagename.'.' . $fileExtention;
//            $imageUrl = $uploadPath . $imageName;
//            Image::make($page_image)->resize(1280, 400)->save($uploadPath . $imageName);
//            $pagemodel->image = $imageUrl;
//        }
//        $pagemodel->activation=$request->activation;
//        $pagemodel->metaname=$request->metaname;
//        $pagemodel->metakeyword=$request->metakeyword;
//        $pagemodel->metadescription=$request->metadescription;
//        $data=$pagemodel->save();
//        if($data){
//            Session::flash('success', $request->pagename.'Create Successfully...');
//            return back();
//        }
//    }
//    public function editpage($id){
//        $pagemodel=Pagemodel::find($id);
//        return view('admin.pages.editpage',compact('pagemodel'));
//    }
//    public function updatepage(Request $request, $id){
//        $this->validate($request,[
//            'image'=>'mimes:jpg,jpeg,bmp,gif,png,svg',
//        ]);
//        $pageupdate=Pagemodel::find($id);
//        $pageupdate->pagename=$request->pagename;
//        $pageupdate->slug=str_slug($pageupdate->pagename);
//        $pageupdate->layout=$request->layout;
//        $pageupdate->page_description=$request->page_description;
//        if($request->hasfile('image')) {
//            unlink($pageupdate->image);
//            $page_image = $request->file('image');
//            $fileExtention = $page_image->getClientOriginalExtension();
//            $uploadPath = 'image/pagebanner/';
//            $imageName = time() .'page_'.$request->pagename.'.' . $fileExtention;
//            $imageUrl = $uploadPath . $imageName;
//            Image::make($page_image)->resize(1280, 400)->save($uploadPath . $imageName);
//            $pageupdate->image = $imageUrl;
//        }
//        $pageupdate->activation=$request->activation;
//        $pageupdate->metaname=$request->metaname;
//        $pageupdate->metakeyword=$request->metakeyword;
//        $pageupdate->metadescription=$request->metadescription;
//        $data=$pageupdate->update();
//        if($data){
//            Session::flash('success', $request->pagename.'Update Successfully...');
//            return back();
//        }
//    }
//    public function deletepage($id){
//        $pagedelete=Pagemodel::find($id);
//        unlink($pagedelete->image);
//        $data=$pagedelete->delete();
//        if($data){
//            Session::flash('success', $pagedelete->pagename.'Delete Successfully...');
//            return back();
//        }
//    }
}
