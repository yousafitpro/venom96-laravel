@extends('layouts.myview')
@section('content')

     <div class="container-fluid wrapc">
        <div class="login_header">
            <div class="inner">
                <div class="logo">
                    <h1>
                        <span></span>
                    </h1>
                </div>
                <div class="login_tiger">
                    <div class="tiger">

                    </div>
                </div>
            </div>
        </div>
        <div class="login_content">
            <div class="inner">
                <div class="login_box">
                    <div class="inner">
                        <div class="login_form_wrap">
                            <div class="inner">
                                <div id="login_form">
                                    <h3>SIGN IN</h3>
                                    <form action="">
                                        <ul>
                                            <li>
                                                <label class="cpt-text" id="login_user">
                                                   <i class="fa  fa-circle-user icon"></i>
                                                   <input type="email" placeholder="Email" name="email" id="login_email" required="">
                                                </label>
                                            </li>
                                            <li>
                                                <div class="cpt-combine">
                                                    <label class="cpt-text">
                                                       <i class="fa fa-lock icon"></i>
                                                       <input type="password" placeholder="Password" name="password" id="login_pass" required="">
                                                    </label>
                                                    <label class="btw btn btn-primary" color="theme" id="login_btw">
                                                       <i class="fa fa-arrow-right"></i>
                                                    </label>
                                                </div>
                                                <div class="tips_wrp">
                                                    <div class="success" id="success_tips"></div>
                                                    <div class="alert" id="login_alert"></div>
                                                </div>
                                            </li>
                                        </ul>
                                    </form>
                                    <div class="pw_reset">
                                        <a href="/sso/reset/password/fill-email?origin=https%3A%2F%2Fwww.kaleoz.com%2F" class="forget" ga-data="3008">Forget password?</a>
                                    </div>
                                </div>
                                <div id="login_form_accounts">
                                    <h3>Sign in with existing login from a social network account</h3>
                                    <ul class="accounts_list">
                                        <li>
                                            <i class="fa-brands fa-xl fa-facebook-square"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-xl  fa-twitter-square"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-xl fa-instagram-square"></i>
                                        </li>
                                        <li>
                                            <i class="fa-brands fa-xl  fa-linkedin"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="L_create_account">
                            <div class="inner">
                                <h1>One account for all SEAGM services</h1>
                                <p>First time here? Create your account to enjoy shopping on SEAGM.</p>
                                <button class="btw">
                                    <a href="">Create New Account</a>
                                </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




 @endsection
