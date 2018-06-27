@extends('master')
@section('title', 'Register')
@section('banner')
    @include('shared.small_banner')
@endsection
@section('content')
    <!-- reg-form -->
    <div class="account">
        <div class="container">
            <div class="account-left">
                <h1>new user ? <span> create an account </span></h1>
                <div class="registration_form">
                    <form id="registration_form" method="post">
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        {!! csrf_field() !!}
                        <div>
                            <label>
                                <input placeholder="first name" type="text" tabindex="1" required="required" id="f_name"
                                       name="f_name" value="{{ old('f_name') }}">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="last name" type="text" tabindex="2" required="required" id="l_name"
                                       name="l_name" value="{{ old('l_name') }}">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="email address" type="email" tabindex="3" required="required"
                                       id="email"
                                       name="email" value="{{ old('email') }}">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="Mobile" type="text" tabindex="3" required="required" id="mobile"
                                       name="mobile" value="{{ old('mobile') }}">
                            </label>
                        </div>
                        <div class="sky_form1">
                            <ul>
                                <li><label class="radio left">
                                        <input type="radio" name="gender" checked="" value="Male"><i></i>Male</label>
                                </li>
                                <li><label class="radio">
                                        <input type="radio" name="gender" value="Female"><i></i>Female</label></li>
                                <div class="clearfix"></div>
                            </ul>
                        </div>
                        <div>
                            <label>
                                <input placeholder="password" type="password" tabindex="4" required="required"
                                       id="password" name="password" value="{{ old('password') }}">
                            </label>
                        </div>
                        <div>
                            <label>
                                <input placeholder="retype password" type="password" tabindex="4" required="required"
                                       id="password_confirmation" name="password_confirmation"
                                       value="{{ old('password_confirmation') }}">
                            </label>
                        </div>
                        <div>
                            <input type="submit" value="create an account" id="register-submit">
                        </div>
                        <div class="sky-form">
                            <label class="checkbox"><input type="checkbox" name="checkbox" checked="checked">
                                <i>i agree to example.com&nbsp;<a class="terms" href="terms">terms of service</a></i>
                            </label>
                        </div>
                    </form>
                    <!-- /Form -->
                </div>
            </div>
            <!--
                <div class="account-left">
                    <h2>existing user</h2>
                    <div class="registration_form">
                <form id="registration_form" method="post">
                    <div>
                        <label>
                            <input placeholder="email" type="email" tabindex="3">
                        </label>
                    </div>
                    <div>
                        <label>
                            <input placeholder="password" type="password" tabindex="4">
                        </label>
                    </div>
                    <div>
                        <input type="submit" value="sign in" id="register-submit">
                    </div>
                    <div class="forget">
                        <a href="#">forgot your password</a>
                    </div>
                </form>
            </div>
        </div>
        -->
            <div class="clearfix"></div>
        </div>
    </div>
@endsection