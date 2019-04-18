@include('admin.layout.include.header')

<body class="navbar-top">

<!-- Main navbar -->
@include('admin.layout.include.navber')
<!-- /main navbar -->


<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">

        <!-- Main sidebar -->
        @include('admin.layout.include.sideber')
        <!-- /main sidebar -->


        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Page breadcrumbs -->
           @include('admin.layout.include.breadcrumb')
            <!-- /page breadcrumbs -->


            <!-- Content area -->
            <div class="content">

               @yield('main_content')


                <!-- Footer -->
                <div class="footer text-muted">
                    &copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
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
