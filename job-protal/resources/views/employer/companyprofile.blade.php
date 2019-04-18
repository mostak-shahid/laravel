@section('page_title','Company Information')
@include('admin.layout.include.header')

<body class="navbar-top">

<!-- Main navbar -->
@include('common.navber')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <div class="content">
            <div class="row">
                <div class="col-lg-3">
                    @include('common.employer_sideber')
                </div>
                <div class="col-lg-9">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h5 class="panel-title"> Account Details</h5>
                        </div>

                        <div class="panel-body">
                            <!----success message--->
                            @if(session('success'))
                                <div class="alert alert-success no-border">
                                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                    <span class="text-semibold">SUCCESS ! </span> {{session('success')}}.
                                </div>
                            @endif
                            <!----success message--->
                            <p class="content-group-lg">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text
                                ever since the 1500s, when an unknown printer took a galley of type and scrambl
                                ed it to make a type specimen book. It has survived not only five centuries, but
                                also the leap into electronic typesetting, remaining essentially unchanged.
                                publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                            <form class="form-horizontal" action="{{url('employer/update_company_profile')}}" method="post" enctype="multipart/form-data">
                               {{csrf_field()}}
                                <fieldset class="content-group">
                                    <legend class="text-bold">Company Details Information</legend>
                                    <input type="hidden" name="employer_id" id="employer_id" value="{{$result['company_profile']['employer_id']}}">
                                    <div class="form-group">
                                        <label class="control-label">Company Name*</label>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <input  required class="form-control input-sm" name="company_name" value="{{$result['company_profile']['company_name']}}" type="text" placeholder="Company Name . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <label class="control-label">Company Address*</label>
                                        <div class="row">
                                              <div class="col-lg-4">
                                                  <select  class="select-search" name="country" id="country" data-placeholder="Select Country...">
                                                      @foreach($result['country_list'] as $country_list)
                                                          <?php
                                                          if ($country_list->id ==$result['company_profile']['country'])
                                                          {
                                                              $selected='selected';
                                                          }else{
                                                              $selected='';
                                                          }
                                                          ?>
                                                          <option {{ $selected }} value="{{ $country_list->id }}">{{ $country_list->country }}</option>
                                                      @endforeach
                                                  </select>
                                            </div>
                                            <div class="col-lg-4">
                                                <select data-placeholder="Select a City..." name="city" id="city"  class="select-search">
                                                    @foreach($result['city_list'] as $city_list)
                                                        <?php
                                                        if ($city_list->id ==$result['company_profile']['city'])
                                                        {
                                                            $selected='selected';
                                                        }else{
                                                            $selected='';
                                                        }
                                                        ?>
                                                        <option  {{ $selected }} value="{{ $city_list->id }}">{{ $city_list->cityname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <select  class="select-search" id="thana" name="thana" data-placeholder="Select Thana...">
                                                                    <option></option>

                                                                @foreach($result['thana_list'] as $thana_list)
                                                                    <?php
                                                                    if ($thana_list->id ==$result['company_profile']['thana'])
                                                                    {
                                                                        $selected='selected';
                                                                    }else{
                                                                        $selected='';
                                                                    }
                                                                    ?>
                                                                    <option  {{ $selected }} value="{{ $thana_list->id }}">{{ $thana_list->thananame }}</option>
                                                                @endforeach
                                                            </select>
                                                            <a href=""  data-toggle="modal" data-target="#thana_model" class="input-group-addon btn btn-info"><i class="icon-plus2"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <textarea class="form-control" name="company_address" placeholder="Company Address . .">{{$result['company_profile']['company_address']}}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">

                                        <label>Industry Type*</label>
                                            <div class="input-group">
                                                <select required data-placeholder="Select a State..." name="company_type[]" multiple="multiple" class="select">
                                                      <?php
                                                        $company_types=json_decode($result['company_profile']['company_type']);
                                                        foreach($result['industry_type'] as $company_type_list) {
                                                         if (in_array($company_type_list->company_type, $company_types))
                                                               {
                                                                    $selected='selected';
                                                               } else{
                                                                    $selected='';
                                                                }

                                                             ?>
                                                        <option {{$selected}} value="{{$company_type_list->id}}">{{$company_type_list->industrytype}}</option>
                                                        <?php } ?>

                                                </select>
                                                <a href=""  data-toggle="modal" data-target="#industry_type_model" class="input-group-addon btn btn-info"><i class="icon-plus2"></i></a>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Business Description</label>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <textarea class="form-control" name="business_description"  placeholder="Business Description. .">{{$result['company_profile']['business_description']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">Business/ Trade License No</label>
                                                <input class="form-control input-sm" name="license_no" value="{{$result['company_profile']['license_no']}}" type="text" placeholder="Business/ Trade License No . .">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">RL No (For Recruiting Agency)</label>
                                                <input class="form-control input-sm" name="rl_no" value="{{$result['company_profile']['rl_no']}}" type="text" placeholder="RL No (For Recruiting Agency) . .">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Company Website</label>
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <input class="form-control input-sm" name="company_website" value="{{$result['company_profile']['company_website']}}" type="text" placeholder="Company Website . .">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-lg-2">Company Logo / image</label>
                                        <div class="col-lg-4">
                                            <div class="form-control"><input type="file" name="company_logo" class="file-styled-primary"></div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="">
                                                <img src="{{asset($result['company_profile']['company_logo'])}}" alt="Time line icon" style="border: 1px solid #ededed;height: 40px;width: 40px;">
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <fieldset class="content-group">
                                    <legend class="text-bold">Primary Contact</legend>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">Contact Person's Name*</label>
                                                <input required class="form-control input-sm" value="{{$result['contact_info']['contact_person_name']}}" name="contact_person_name" type="text" placeholder="Contact Person's Name">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">Contact Person's Designation*</label>
                                                <input  required class="form-control input-sm" name="person_designation"  value="{{$result['contact_info']['person_designation']}}"type="text" placeholder="Contact Person's Designation">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label"> Contact Person's Email*</label>
                                                <input required class="form-control input-sm" name="contact_email"  value="{{$result['contact_info']['contact_email']}}" readonly type="text" placeholder=" Contact Person's Email">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">Contact Person's Mobile*</label>
                                                <input required class="form-control input-sm" name="contact_phone_no" value="{{$result['contact_info']['contact_phone_no']}}" type="text" placeholder="Contact Person's Mobile">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <fieldset class="content-group">
                                    <legend class="text-bold">Billing Address</legend>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label class="control-label">Billing Address*</label>
                                                <textarea  required class="form-control input-sm" name="billing_address"  placeholder=" Contact Person's Email">{{$result['billing_address']['billing_address']}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <label class="control-label">Billing Contact Number*</label>
                                                <input required class="form-control input-sm" name="billing_phone_no" value="{{$result['billing_address']['billing_phone_no']}}" type="text" placeholder="Billing Contact Number">
                                            </div>
                                            <div class="col-lg-6">
                                                <label class="control-label">Person's Email*</label>
                                                <input required class="form-control input-sm" name="billing_email" value="{{$result['billing_address']['billing_email']}}" type="text" placeholder="Person's Email">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>


                                <div class="text-right">
                                    <button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->


    <!----Thana add  model---->
    <div class="modal fade" id="thana_model" role="dialog">
        <div class="modal-dialog modal-sm">
            <form action="{{url('/employer/add-thana')}}" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Thana</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Select City</label>
                            <select class="select-search" name="city_id" id="city_model" required>
                                <option></option>
                            </select>
                        </div>

                        <label class="control-label">New thana</label>
                        <input type="text" class="form-control" name="thana" placeholder="Thana" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" >Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!----Thana add  model end---->
    <!----industry type  add  model---->
    <div class="modal fade" id="industry_type_model" role="dialog">
        <div class="modal-dialog modal-sm">
            <form action="{{url('/employer/industry-type')}}" method="post">
                {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Industry Type</h4>
                    </div>
                    <div class="modal-body">
                         <input type="hidden" class="form-control" name="employer_id" value="" id="employer_id">
                        <label class="control-label">New Industry type</label>
                        <input type="text" class="form-control" name="industrytype" placeholder="Industry type" required>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" >Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!----industry type  add  model---->

</div>
<!-- /page container -->
<script>
    $('#country').on('change',function () {
        var country_id=$(this).val();
        $.ajax({
            type: 'GET',
            url: '{!!URL::route('ajaxselectemployercity')!!}',
            data:{country_id: country_id},
            success: function (data) {
                $('#city').html(data);
            }
        });
    });

    $('#city').on('change',function () {

        var city_id=$(this).val();
        $.ajax({
            type: 'GET',
            url: '{!!URL::route('ajaxselectemployerthana')!!}',
            data:{city_id: city_id},
            success: function (data) {
                $('#thana').html(data);
            }
        });
    });

    $('#thana_model').on('show.bs.modal', function (event) {
        var country_id=$('#country').val();
        $.ajax({
            type: 'GET',
            url: '{!!URL::route('ajaxselectemployercity')!!}',
            data:{country_id: country_id},
            success: function (data) {

                $('#city_model').html(data);
            }
        });
    });
      //industry type
    $('#industry_type_model').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var empl_id =$('#employer_id').val();
        var modal = $(this);
        modal.find('.modal-body #employer_id').val(empl_id);
    })
//    image rep
    function readURL(input){
        if(input.files && input.files[0]){
            var reader=new FileReader();
            reader.onload=function (e) {
                $('#blah')
                    .attr('src',e.target.result)
                    .width(100)
                    .height(60);

            };
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>

</body>
</html>