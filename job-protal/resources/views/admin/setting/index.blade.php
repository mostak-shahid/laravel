@section('page_title','Settings')
@section('breadcrumbs1','Settings')
@extends('admin.layout.master')
@section('main_content')
<div class="col-md-12">

    <!-- tabs left -->
    <div class="tabbable tabs-left">
        <ul class="nav nav-tabs ">
            <li class="active"><a href="#a" data-toggle="tab">Basic Info</a></li>
            <li ><a href="#b" data-toggle="tab">Contact Info</a></li>
            <li><a href="#c" data-toggle="tab">Mail Settings</a></li>
            <li><a href="#d" data-toggle="tab">Home Page</a></li>
            <li><a href="#e" data-toggle="tab">Page Banner</a></li>
            <li><a href="#f" data-toggle="tab">Blog / News</a></li>
            <li><a href="#g" data-toggle="tab">Site design</a></li>
        </ul>
        <div class="tab-content tab-content-style">
               @include('admin.layout.include.alert')

            <div class="tab-pane active" id="a">
                 <div class="panel  panel-default">
                     <div class="panel-heading">
                         Basic Settings
                     </div>

                     <div class="panel-body">
                         <form  action="{{url('admin/basic-setting-add')}}"   method="post" enctype="multipart/form-data">
                             {{csrf_field()}}
                             <div class="form-group row">
                                 <div class="col-md-4">
                                     <label for="sitename" class="text-color">Site Name <span class="color-danger">*</span></label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="text" required class="form-control border-radius" name="sitename" value="{{$basic_setting->sitename}}" id="sitename" placeholder="Enter Site Name . . ">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-4">
                                     <label for="favicon" class="text-color">Favicon <span class="color-danger"></span></label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="file" class="border-radius" name="favicon" id="favicon">
                                     <img src="{{asset($basic_setting->favicon)}}" class="image-common">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-4">
                                     <label for="logo"  class="text-color">Logo <span class="color-danger"></span></label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="file" class=" border-radius" name="logo" id="logo">
                                     <img src="{{asset($basic_setting->logo)}}" class="image-common">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-4">
                                     <label for="footertext" class="text-color">Footer Copyright<span class="color-danger">*</span></label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="text" required class="form-control border-radius" value="{{$basic_setting->footertext}}" name="footertext" id="footertext" placeholder="Enter Footer Text . . ">
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-md-4">
                                     <label for="footerlink" class="text-color">Footer Link <span class="color-danger"></span></label>
                                 </div>
                                 <div class="col-md-8">
                                     <input type="text" class="form-control border-radius" name="footerlink" value="{{$basic_setting->footerlink}}" id="footerlink" placeholder="Enter Footer Link . . ">
                                 </div>
                             </div>

                             <div class="pull-right">
                                 <button type="submit" class="btn btn-info border-radius"><i class="fa fa-upload" aria-hidden="true"> </i> Upload</button>
                             </div>
                         </form>
                     </div>
                 </div>
            </div>
            <div class="tab-pane" id="b">
                <div class="panel  panel-default">
                    <div class="panel-heading">
                        Contact Information
                    </div>

                    <div class="panel-body">
                        <form  action="{{url('admin/contact-info-add')}}"   method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="contactaddress" class="text-color">Contact Address <span class="color-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <textarea required rows="5" class="form-control border-radius" name="contactaddress" id="contactaddress" placeholder="Enter Contact Address . . ">{{$contact_info->contactaddress}}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="contactemail" class="text-color">Contact Email <span class="color-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" required class="form-control border-radius" value="{{$contact_info->contactemail}}" name="contactemail" id="contactemail" placeholder="Enter Contact Email . . ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="contactphone" class="text-color">Contact Phone <span class="color-danger">*</span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" required class="form-control border-radius" value="{{$contact_info->contactphone}}" name="contactphone" id="contactphone" placeholder="Enter Contact Phone . . ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="contactfax" class="text-color">Contact Fax Number <span class="color-danger"></span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control border-radius" value="{{$contact_info->contactfax}}" name="contactfax" id="contactfax" placeholder="Enter Contact Fax Number . . ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="googlemap" class="text-color">Google Map iFrame <span class="color-danger"></span></label>
                                </div>
                                <div class="col-md-8">
                                    <textarea  rows="5" class="form-control border-radius" name="googlemap" id="googlemap" placeholder="Enter Google Map iFrame . . ">{{$contact_info->googlemap}}</textarea>
                                </div>
                            </div>


                            <div class="pull-right">
                                <button type="submit" class="btn btn-info border-radius"><i class="fa fa-upload" aria-hidden="true"> </i> Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="c">
                <div class="panel  panel-default">
                    <div class="panel-heading">
                        Mail Settings
                    </div>

                    <div class="panel-body">
                        <form  action="{{url('admin/email-info-add')}}"   method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="email" class="text-color">Email Address <span class="color-danger"></span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="email" class="form-control border-radius" value="{{$mail_info->email}}" name="email" id="email" placeholder="Enter Email Address . . ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="emailsubject" class="text-color">Email Subject <span class="color-danger"></span></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text"  class="form-control border-radius" value="{{$mail_info->emailsubject}}" name="emailsubject" id="emailsubject" placeholder="Enter Email subject . . ">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-4">
                                    <label for="thanksmessage" class="text-color">Thank you message <span class="color-danger"></span></label>
                                </div>
                                <div class="col-md-8">
                                    <textarea  rows="5" class="form-control border-radius" name="thanksmessage" id="thanksmessage" placeholder="Enter Thank you message. . ">{{$mail_info->thanksmessage}}</textarea>

                                </div>
                            </div>



                            <div class="pull-right">
                                <button type="submit" class="btn btn-info border-radius"><i class="fa fa-upload" aria-hidden="true"> </i> Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="d">Lorem ipsum dolor sit amet, charetra varius quam sit amet vulputate.
                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero.
            </div>
            <div class="tab-pane" id="e">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.
            </div>
            <div class="tab-pane" id="f">Thirdamuno, ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                Quisque mauris augue, molestie tincidunt condimentum vitae.
            </div>
            <div class="tab-pane" id="g">Secondo sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan.
                Aliquam in felis sit amet augue.
            </div>

        </div>
    </div>
</div>



@endsection