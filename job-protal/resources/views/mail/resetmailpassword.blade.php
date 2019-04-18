

@include('admin.layout.include.header')

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/admin')}}">
            <img src="{{asset('assets/images/logo.png')}}" alt="logo">

        </a>

        <ul class="nav navbar-nav pull-right visible-xs-block">
            <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
        </ul>
    </div>

</div>
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container login-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="content">

                <!-- Simple login form -->

                <form action="{{url('/submit/email/reset/password')}}" method="post">
                    {{csrf_field()}}

                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                            <h5 class="content-group">Reset Account <small class="display-block">Reset your Admin Panel password . .</small></h5>
                        </div>

                        <input type="hidden" name="id" value="{{$user->id}}" required>

                        <!----Error message--->
                        @if(session('error'))
                            <div class="alert alert-warning no-border">
                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Warning!</span> {{session('error')}}.
                            </div>
                        @endif
                        @if(session('success'))
                            <div class="alert alert-success no-border">
                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Well done!</span> {{session('success')}}.
                            </div>
                       @endif
                    <!----Error message--->

                        <div class="form-group has-feedback has-feedback-left">
                            <input required type="password" name="password"  id="password"  class="form-control" placeholder=" New Password . .">
                            <div class="form-control-feedback">
                                <i class="icon-key text-muted"></i>
                            </div>
                        </div>

                        <p id="message" style="font-size: 11px"></p>

                        <div class="form-group has-feedback has-feedback-left">
                            <input required type="password" name="conformpassword" id="confirm_password" class="form-control" placeholder="Conform Password . .">
                            <div class="form-control-feedback">
                                <i class="icon-key text-muted"></i>
                            </div>
                        </div>
                        <div class="col-xs-4 pull-right">
                            <button type="submit" id="submit" class="btn btn-info"><i class="icon-loop" > </i> Reset</button>
                        </div>
                        <div class="col-xs-6 pull-left">
                            <a  href="{{url('/admin')}}" class="btn btn-default btn-block btn-flat border-radius"><i class="icon-redo2"> </i> Back to Login</a>
                        </div>

                    </div>
                </form>
                <!-- /simple login form -->


                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2019. <a href="#">Design and Developed </a> by <a href="#" target="_blank">Yeasfi IT</a>
                </div>
                <!-- /footer -->

            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->
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












