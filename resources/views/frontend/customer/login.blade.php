@extends('layout.frontend.master')
@section('dynamic_content')
    <style>
        .fb {
            background-color: #3F5FA3; }
        .google {
            background-color: #E8513E;}
        input,
        .btn {
            border-radius: 4px;}
        a.btn, a.btn:hover{color:#fff;font-weight:bold;}
        a.fb.btn:hover{background:#314C85;}
        a.google.btn:hover{background:#E02D2D;}
        .social{margin:auto;display:block;text-align: center;padding: 2px;}
        .or{text-align:center;margin: auto;display: block;line-height: 2.5;font-weight: bold;}
        .newaccount{
            line-height: 2.5;
            margin-left: -20px;
            margin-right: -20px;
            color: #fff;
            font-weight: bold;
            text-align: center;}
    </style>
    <main class="site-main">

        <div class="columns container">
            <!-- Block  Breadcrumb-->

            <ol class="breadcrumb no-hide">
                <li><a href="">Home    </a></li>
                <li class="active"> Login</li>
            </ol><!-- Block  Breadcrumb-->
            <h2 class="page-heading">
                <span class="page-heading-title2"> Customer Login</span>
            </h2>
            <div class="page-content checkout-page">
                <div class="box-border">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <div class="col-sm-6" style="background: #F0F2F5;padding: 20px;border: solid 2px #dbdbdb;">
                            <h4>Login</h4>
                            <p>Already registered? Please log in below:</p>
                            <form method="post" action="{{route('loginCustomer.submit')}}" id="" >
                                @csrf
                                <label><i class="fa fa-envelope"></i> Email address</label>
                                <input class="form-control input" type="email" name="email" placeholder="Enter Your Email">

                                <label><i class="fa fa-lock"></i> Password</label>
                                <input class="form-control input" type="password" name="password" placeholder="Enter Your Password">

                                <p><a href="">Forgot your password?</a></p>
                                <button class="button" type="submit">Login</button>
                            </form>
                            <div class="or">OR</div>

                            <div class="social col-lg-6">
                                <a href="" class="fb btn">
                                     Login with <i class="fa fa-facebook fa-fw"></i>
                                </a>
                            </div>
                            <div class="social col-lg-6">
                                <a href="" class="google btn">
                                     Login with <i class="fa fa-google fa-fw"></i>
                                </a>
                            </div>
                            <div style="clear:both">&nbsp;</div>
                            <div class="newaccount">
                                <button class="btn btn-primary" style="color:#fff;"><a href="" style="color:#fff;">Create Your Account</a></button>
                            </div>
                        </div>
                        <div class="col-lg-3"></div>

                    </div>
                </div>
            </div>

        </div>

        <div style="clear:both;">&nbsp;</div>
    </main>

@endsection
