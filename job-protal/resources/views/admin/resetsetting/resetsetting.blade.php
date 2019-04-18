@section('page_title','Dashboard')
@extends('admin.layout.master')
@section('siderber-accountsetting','active')
@section('siderber-accountsetting','active')
@section('breadcrumb-one','Dashboard')
@section('breadcrumb-two','Account Setting')
@section('breadcrumb-three','Setting')
@section('maincontent')
    <div class="col-lg-6">
        <div class="row">
            <!-- Table with togglable columns -->
            <div class="panel panel-flat panel-setting-extra">
                <div class="panel-heading panel-default">
                    <h5 class="panel-title"><i class="fa fa-cog"> </i> Reset Account Setting
                    </h5>
                </div>

                <div class="panel-body">
                    <div class="panel-body">
                        <form action="{{ url('/admin/reset/password') }}" method="POST">
                            {{csrf_field()}}
                            @if(Sentinel::check())
                                <div class="form-group">
                                    <label class="control-label">User Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i> </span>
                                        <input type="text" class="form-control" name="name" value="{{ Sentinel::getuser()->first_name }}"  placeholder="User Name..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope-o"></i> </span>
                                        <input type="email" class="form-control" name="email" value="{{ Sentinel::getuser()->email }}"  placeholder="Enter Email..">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Enter Old Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                        <input type="password" class="form-control" name="old_password" placeholder="Enter Old Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Enter New Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                        <input type="password" class="form-control" name="password" placeholder="Enter Password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Enter Conform Password</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-key"></i> </span>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Conform Password">
                                    </div>
                                </div>
                            @endif
                            <div class="pull-right">
                                <button type="submit" class="btn btn-default"><i class="fa  fa-undo"> </i> Reset</button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
            <!-- /table with togglable columns -->
        </div>

    </div>
@endsection