@section('page_title','Employer Dashboard')
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
                    <div class="tabbable">
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="activity">

                                <!-- Timeline -->
                                <div class="timeline timeline-left content-group">
                                    <div class="timeline-container">
                                        <!-- Posted Jobs -->
                                        <div class="timeline-row">
                                            <div class="timeline-icon">
                                                <img src="{{asset('assets/images/jobs.png')}}" alt="Time line icon">
                                            </div>

                                            <div class="panel panel-flat timeline-content">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">Posted Jobs</h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-arrow-down12"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                                <div class="panel-body">

                                                        <div class="panel panel-body">
                                                            <div class="media">
                                                                <div class="media-left">
                                                                    <a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
                                                                </div>

                                                                <div class="media-body">
                                                                    <h6 class="media-heading text-semibold"><a href="#" class="text-default">Porcupine strict nodded</a></h6>
                                                                    Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>

                                                <div class="panel-footer">
                                                    <ul>
                                                        <li>Total Posted Jobs : 438</li><li> | </li>
                                                        <li>Active Job : 438</li><li> | </li>
                                                        <li>In-Active Job : 438</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Posted Jobs -->

                                        <!-- Drafted -->
                                        <div class="timeline-row">
                                            <div class="timeline-icon">
                                                <img src="{{asset('assets/images/jobs.png')}}" alt="Time line icon">
                                            </div>

                                            <div class="panel panel-flat timeline-content">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">Drafted Job</h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-arrow-down12"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                                <div class="panel-body">
                                                    <div class="panel panel-body">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
                                                            </div>

                                                            <div class="media-body">
                                                                <h6 class="media-heading text-semibold"><a href="#" class="text-default">Porcupine strict nodded</a></h6>
                                                                Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel-footer">
                                                    <ul>
                                                        <li>Total Drafted Job : 438</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Drafted -->

                                        <!-- Archived Job -->
                                        <div class="timeline-row">
                                            <div class="timeline-icon">
                                                <img src="{{asset('assets/images/jobs.png')}}" alt="Time line icon">
                                            </div>

                                            <div class="panel panel-flat timeline-content">
                                                <div class="panel-heading">
                                                    <h6 class="panel-title">Archived Job</h6>
                                                    <div class="heading-elements">
                                                        <ul class="icons-list">
                                                            <li class="dropdown">
                                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                                    <i class="icon-arrow-down12"></i>
                                                                </a>

                                                                <ul class="dropdown-menu dropdown-menu-right">
                                                                    <li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
                                                                    <li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
                                                                    <li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
                                                                    <li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <a class="heading-elements-toggle"><i class="icon-menu"></i></a></div>

                                                <div class="panel-body">
                                                    <div class="panel panel-body">
                                                        <div class="media">
                                                            <div class="media-left">
                                                                <a href="#"><i class="icon-file-text2 text-success-400 icon-2x no-edge-top mt-5"></i></a>
                                                            </div>

                                                            <div class="media-body">
                                                                <h6 class="media-heading text-semibold"><a href="#" class="text-default">Porcupine strict nodded</a></h6>
                                                                Left extravagant leered crab repaid outgrew said knelt hello astride within oh disbanded
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="panel-footer">
                                                    <ul>
                                                        <li>Total Archived Job : 438</li>
                                                    </ul>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- /Archived Job -->

                                    </div>
                                </div>
                                <!-- /timeline -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

</body>
</html>