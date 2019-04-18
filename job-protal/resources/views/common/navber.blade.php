
<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
    </div>

    <div class="navbar-collapse collapse" id="navbar-mobile">
        <ul class="nav navbar-nav">
            <li><a class="">Home</a></li>
            <li><a class="">About</a></li>
            <li><a class="">Pages</a></li>
            <li><a class="">Jobs</a></li>
            <li><a class="">News</a></li>
            <li><a class="">Contact</a></li>
        </ul>


        <ul class="nav navbar-nav navbar-right">


            @if(Sentinel::check())
               <?php $slug = Sentinel::getUser()->roles()->first()->slug;?>
            @if($slug=='employer')
                   <li class="dropdown dropdown-user">
                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                    <img src="assets/images/placeholder.jpg" alt="">
                    <span>Victoria</span>
                    <i class="caret"></i>
                </a>

                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="{{url('employer/dashboard')}}"><i class="icon-profile"></i>My Account</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-coins"></i>Payment Status</a></li>
                    <li><a href="{{url('/employer/edit_account')}}"><i class="icon-pencil5"></i>Edit Account</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-key"></i>Change Password</a></li>
                    <li><a href="#"><i class="icon-users4"></i>User Management</a></li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="icon-help"></i>Support</a></li>
                    <form action="{{url('/logout')}}" method="post" id="logout-form">
                    <li style="padding: 5px 15px;">
                            {{csrf_field()}}
                        <a href="#" class="" onclick="document.getElementById('logout-form').submit()"><i class="icon-switch2"></i> Logout</a>

                    </li>
                    </form>
                </ul>
            </li>
                @else
                       candidate
                @endif
            @else
                <li class="dropdown @if(session('error')){{'open'}}@endif">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login / Registration
                        <i class="icon-enter2"></i>
                    </a>

                    <div class="dropdown-menu dropdown-content width-350">
                        <div class="dropdown-content-heading">
                            Login Using Your Account
                            <ul class="icons-list">
                                <li><a href="#"><i class="icon-key"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-12">
                            <form action="{{url('/submit/userlogin')}}" method="post">
                                {{csrf_field()}}
                                <label class="display-block text-semibold">Existing User Login Below..</label>
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
                                <div class="form-group has-feedback has-feedback-left">
                                    <a href="">Forgot Password?</a>
                                </div>
                                <div class="form-group ">
                                    <button type="submit" class="btn btn-info"><i class="icon-arrow-right16"> </i> Login</button>
                                    <a  href="{{url('/registration')}}" class="btn btn-default"><i class="icon-enter6"> </i> Registration</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            @endif

        </ul>

    </div>
</div>