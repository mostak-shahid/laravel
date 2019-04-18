
@include('admin.layout.include.header')

<body>

<!-- Main navbar -->
<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/admin')}}"><img src="{{ asset('assets/images/logo.png') }}" alt="logo"></a>

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

                <form action="{{url('/submit/verify-email')}}" method="post">
                    {{csrf_field()}}
                    <div class="panel panel-body login-form">
                        <div class="text-center">
                            <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                            <h5 class="content-group">Verify To Your Email<small class="display-block">Enter user email for verify account Authentication</small></h5>
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
                                <i class="icon-mail5 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 position-right"></i></button>
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















{{--@section('page_title','Verify Your Email')--}}
{{--@include('admin.layout.include.header')--}}
{{--<body class="hold-transition login-page">--}}
{{--<div class="container">--}}
    {{--<div class="col-md-4 col-md-offset-4">--}}
    {{--<!-- /.login-logo -->--}}
         {{--<div class="login-box-body">--}}
        {{--<a class="logo-area" href="{{url('/login')}}">--}}
            {{--@if(logo())--}}
                {{--<img src="{{asset(logo())}}">--}}
            {{--@else--}}
                {{--<h3>Verify Login</h3>--}}
            {{--@endif--}}
        {{--</a>--}}
        {{--<!----Error message--->--}}
        {{--@if(session('error'))--}}
            {{--<div class="alert alert-danger alert-dismissible fade in">--}}
                {{--<p class="close" data-dismiss="alert" aria-label="close">&times;</p>--}}
                {{--<strong><i class="fa fa-exclamation-triangle"> </i> ERROR !</strong> {{session('error')}}.--}}
            {{--</div>--}}
        {{--@endif--}}
    {{--<!----Error message--->--}}

        {{--<p class="login-box-msg box-msg-extra">Enter user email for verify account Authentication . .</p>--}}

        {{--<form action="{{url('/submit/verify-email')}}" method="post">--}}
            {{--{{csrf_field()}}--}}
            {{--<div class="form-group has-feedback">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="email" name="email" class="form-control border-radius" placeholder="Enter Account Email . . ." required>--}}
                    {{--<span class="input-group-addon border-radius"><i class="fa fa-envelope"></i></span>--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="row">--}}
                {{--<!-- /.col -->--}}
                {{--<div class="col-xs-4 pull-right">--}}
                    {{--<button type="submit" class="btn btn-primary btn-block btn-flat border-radius">Verify  <i class="fa fa-paper-plane-o"></i> </button>--}}

                {{--</div><!-- /.col -->--}}
            {{--</div>--}}
        {{--</form>--}}

    {{--</div>--}}
    {{--<!-- /.login-box-body -->--}}
    {{--</div>--}}
{{--</div>--}}

{{--@include('admin.layout.include.login_footer')--}}
{{--<!-- /.login-box -->--}}


{{--@include('admin.layout.include.script')--}}
