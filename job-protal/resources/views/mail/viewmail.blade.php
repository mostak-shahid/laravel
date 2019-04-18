
<div class="container " style="border: 1px solid #e6e1e1cc;width: 60%;padding: 15px;">
    <div class="panel panel-default">
        <div class="panel-body">
            {{--@if(logo())--}}
                {{--<img src="{{asset(logo())}}">--}}
            {{--@else--}}
                {{--<h3>Login</h3>--}}
            {{--@endif<br><br>--}}
            <h2 style="text-align: center;">Hello! {{ $viewmaildata->name }}</h2>

            <p style="text-align: center;font-size: 18px;font-style: italic;">{{$viewmaildata->message}}</p>

            <a href=" {!! url('/').$viewmaildata->link !!}" style="border: 2px solid #80002d;padding: 5px;text-decoration: none;margin: auto;display: block;width: 150px;text-align: center;font-size: 16px;">
                <b>Reset Password</b>
            </a>

            <div style="margin-top: 20px">
                <p style="margin-top: 20px;font-size: 16px;text-align: center;font-style: italic;color: #121111;">
                    If you did not request a password reset, no further action is required.
                </p>
            </div>

            <h3 style="margin-top: 20px;font-size:24px;text-align: center;font-style: italic;color: #121111;">Thank You...</h3>
            <br/>


        </div>
    </div>
</div>







