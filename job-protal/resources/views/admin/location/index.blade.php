@section('page_title','Add Location')
@extends('admin.layout.master')

@section('main_content')

        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Location List . .</h5>
            </div>
            <div class="panel-body ">
                <!----success message--->
                @if(session('success'))
                    <div class="alert alert-success no-border">
                        <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                        <span class="text-semibold">SUCCESS ! </span> {{session('success')}}.
                    </div>
                @endif
                <!----success message--->

                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title"><i class="icon-location3"></i> Add New Location</h6>
                        </div>
                       <form action="{{url('/admin/add-thana')}}" method="post">
                           {{csrf_field()}}
                            <div class="panel-body">
                                <div class="col-md-4">

                                    <label class="control-label">Select Country</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select  class="select-search" name="country" id="country" data-placeholder="Select Country...">
                                                <option value="">Select Country</option>
                                                @foreach($result['country'] as $countrys)
                                                    <option value="{{$countrys->id}}">{{$countrys->country}}</option>
                                                @endforeach
                                            </select>
                                            <a href="#" data-toggle="modal" data-target="#country_model" class="input-group-addon btn btn-info"><i class="icon-plus2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="control-label">Select City</label>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select  class="select-search" id="city" name="city_id" data-placeholder="Select City...">
                                                <option value="">Select City</option>
                                            </select>
                                            <a href=""  data-toggle="modal" data-target="#city_model" class="input-group-addon btn btn-info"><i class="icon-plus2"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <label class="control-label">Select Thana</label>
                                    <input class="form-control" name="thana" placeholder="Select Thana...">

                                </div>
                                <div class="col-md-1">
                                    <label class="control-label"><i class="icon-arrow-down6"></i> </label>
                                    <button type="submit" class=" btn btn-info"> Save</button>
                                </div>
                            </div>
                       </form>
                    </div>
                 </div>


                <table class="table datatable-basic">
                    <thead>
                    <tr>
                        <th>SL</th>
                        <th>Thana</th>
                        <th>City</th>
                        <th>Country</th>
                        <th>Create/Update date</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $count=1;?>
                    @foreach($result['location'] as $location)
                    <tr>
                        <td>{{$count++}}</td>
                        <td>{{$location->thana}}</td>
                        <td>{{$location->city}}</td>
                        <td>{{$location->country}}</td>
                        <td><span class="label label-success">
                                @if($location->thana_updated_at){{$location->thana_updated_at}}
                                @elseif($location->city_updated_at){{$location->city_updated_at}}
                                @else{{$location->updated_at}}
                                @endif
                            </span>
                        </td>
                        <td width="15%" class="text-center">
                            @if($location->thana_id)
                                <a href="{{url('admin/delete/thana/'.$location->thana_id)}}" class="btn btn-danger  btn-xs"><i class="icon-trash"></i> </a>
                            @elseif($location->cities_id)
                                <a href="{{url('admin/delete/city/'.$location->cities_id)}}" class="btn btn-danger  btn-xs"><i class="icon-trash"></i> </a>
                             @else
                                <a href="{{url('admin/delete/country/'.$location->id)}}" class="btn btn-danger  btn-xs"><i class="icon-trash"></i> </a>
                             @endif
                        </td>
                    </tr>
                        @endforeach

                    </tbody>
                </table>

        </div>

    <!----country add  model---->
        <div class="modal fade" id="country_model" role="dialog">
            <div class="modal-dialog modal-sm">
                <form action="{{url('admin/add-country')}}" method="post">
                    {{csrf_field()}}
                <div class="modal-content">
                    <div class="modal-header bg-info">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add New Country</h4>
                    </div>
                    <div class="modal-body">
                        <label class="control-label">Add New Country</label>
                       <input type="text" class="form-control" name="country" placeholder="Country" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info" >Add</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    <!----country add  model end---->

        <!----country add  model---->
        <div class="modal fade" id="city_model" role="dialog">
            <div class="modal-dialog modal-sm">
                <form action="{{url('admin/add-city')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-content">
                        <div class="modal-header bg-info">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add New city</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Select Country</label>
                                <select class="select-search" name="country_id">
                                    @foreach($result['country'] as $countrys)
                                        <option value="{{$countrys->id}}">{{$countrys->country}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <label class="control-label">Add New city</label>
                            <input type="text" class="form-control" name="city" placeholder="city" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info" >Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!----country add  model end---->

    <script>
        $('#country').on('change',function () {
            var country_id=$(this).val();
            $.ajax({
                type: 'GET',
                url: '{!!URL::route('ajaxselectcity')!!}',
                data:{country_id: country_id},
                success: function (data) {
                    $('#city').html(data);
                }
            });
        });
    </script>

@endsection