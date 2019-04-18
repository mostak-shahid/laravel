
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


                    <div class="panel panel-body login-form">
                        <div class="text-center">
                           <img src="{{asset('image/email.png')}}" style="width: 50%;margin: auto;display: block;padding: 20px"></div>
                            <h5 class="content-group"style="text-align: justify"> Password Reset mail send to your email Account.Please check your email Account
                                and Reset your "Admin Panel" login password . . .</h5>
                                <div class="text-right " style="padding: 5px">
                                    <a  href="{{url('/admin')}}" class="btn btn-default  btn-flat border-radius"> <i class="icon-redo2"></i> Back to login </a>
                                </div>
                        </div>

                        <!----Error message--->
                        @if(session('error'))
                            <div class="alert alert-warning no-border">
                                <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                                <span class="text-semibold">Warning ! </span> {{session('error')}}.
                            </div>
                    @endif
                    <!----Error message--->


                    </div>

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
