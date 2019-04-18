
@include('admin.layout.include.header')
@section('page_title','Login')
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

                <form action="{{url('/submit/login')}}" method="post">
                    {{csrf_field()}}
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                            <h5 class="content-group">Login to your account <small class="display-block">Enter your credentials below</small></h5>
                        </div>

                        <!----Error message--->
                            @if(session('error'))
                                <div class="alert alert-warning no-border">
                                    <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                    <span class="text-semibold">Warning ! </span> {{session('error')}}.
                                </div>
                            @endif
                        <!----Error message--->

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="email" name="email" class="form-control" placeholder="Email Address . .">
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group has-feedback has-feedback-left">
                            <input type="password" name="password" class="form-control" placeholder="Password . .">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="{{url('/forget-password')}}">Forgot password?</a>
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

</body>
</html>










