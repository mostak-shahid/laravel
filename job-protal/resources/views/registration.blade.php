@section('page_title','Registration')
@include('admin.layout.include.header')


<body class="navbar-top">
@include('common.navber')
<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Registration form -->
                <form action="{{url('store_registration')}}" method="post">
                    {{csrf_field()}}
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="panel registration-form">
                                    <div class="panel-body">
                                        <div class="text-center">
                                            <h5 class="content-group-lg">New Candidate Registration <small class="display-block">All fields are required</small></h5>
                                        </div>
                                        <!----Error message--->
                                        @if(session('error'))
                                            <div class="alert alert-warning no-border">
                                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                                <span class="text-semibold">Warning ! </span> {{session('error')}}.
                                            </div>
                                        @endif

                                        @if($errors->has('email') | $errors->has('password'))
                                            <div class="alert alert-warning no-border">
                                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                                <span class="text-semibold">Warning ! </span> {!! $errors->first('email') !!} . {!! $errors->first('password') !!}.
                                            </div>
                                        @endif

                                        <!----Error message--->
                                        <div class="form-group">
                                            <label class="display-block text-semibold">Please Select Your Login Area..</label>
                                            <label class="radio-inline ">
                                                <span class=""><input type="radio" name="account_type" class="styled" value="candidate" checked="checked" ></span>
                                                Candidate
                                            </label>

                                            <label class="radio-inline ">
                                                <span class=""><input type="radio" name="account_type" value="employer"class="styled"></span>
                                                Employer
                                            </label>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <input type="text" name="last_name" class="form-control" placeholder="Last name">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-check text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group has-feedback">
                                                    <input type="email" required id="email" name="email" class="form-control" placeholder="Your email">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-mention text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" id="selectdata" class="styled" >
                                                    Use Email as User Name
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input type="text" class="form-control" id="username" name="username" placeholder="Choose username">
                                            <div class="form-control-feedback">
                                                <i class="icon-user-plus text-muted"></i>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <input required type="password" class="form-control" id="password" name="password" placeholder="Create password">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-lock text-muted"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group has-feedback">
                                                    <input required type="password" class="form-control" id="confirm_password" name="conformpassword" placeholder="Repeat password">
                                                    <div class="form-control-feedback">
                                                        <i class="icon-user-lock text-muted"></i>
                                                    </div>
                                                    <p id="message" style="font-size: 11px"></p>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" class="styled" required>
                                                    Accept <a href="#">terms of service</a>
                                                </label>
                                            </div>
                                        </div>

                                        <div class="text-right">
                                            <a href="" class="btn btn-link"><i class="icon-arrow-left13 position-left"></i> Back to login form</a>
                                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right ml-10"><b><i class="icon-plus3"></i></b> Create account</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- /registration form -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->


    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

<script>
    $( "#selectdata" ).on( 'click', function() {
        var value = $('#email').val();
        var checked_status = this.checked;
        if(checked_status == true) {
            $('#username').val(value);
        }
        else {
            $('#username').val('');
        }

    });
</script>
<script>
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('<i class=" icon-check"> </i> Password match').css('color', 'green');
            $('#submit').show();
        } else{
            $('#message').html('<i class=" icon-warning2"> </i> Password Not Matching').css('color', 'red');
            $('#submit').hide();
        }

    });
</script>
</body>
</html>