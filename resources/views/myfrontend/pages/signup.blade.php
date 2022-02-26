@extends('layouts.myfrontend')
@section('content')

     <div class="container-fluid wrapc">
        <div class="login_header">
            <div class="inner">
                <div class="logo">
                    <h1>
                        <img src="{{ asset('images/leftlogo.png') }}" alt="">
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
                                    <h3>SIGN UP</h3>
                                    <form action="">
                                        <ul>
                                            <li>
                                                <p>Please use a valid email address for account verification.</p>
                                                <label class="cpt-text" id="login_user">
                                                   <i class="fa-solid fa-envelope icon"></i>
                                                   <input type="email" placeholder="Email" name="email" id="login_email" required="">
                                                </label>
                                            </li>
                                            <li>
                                                <button class="btw">
                                                    <a href="">Send Verification Email</a>
                                                </button>
                                            </li>
                                        </ul>
                                    </form>
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
                        <div class="create_account">
                            <div class="inner">
                                <h1>EASY STEPS TO JOIN SEAGM MEMBERSHIP.</h1>
                                <ul class="reg_steps">
                                    <li>
                                        <div>Register with email to receive a verification mail.</div>
                                    </li>
                                    <li>
                                         <div>Click on verification link in the registered email.</div>
                                    </li>
                                    <li>
                                         <div>Complete the sign up form.</div>
                                    </li>
                                    <li>
                                         <div>You are all set, start enjoy shopping in SEAGM.</div>
                                    </li>
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    

 @endsection   