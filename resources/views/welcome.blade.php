@extends('layouts.app')
@section('content')
    
        <div class="row usr-wlcm">
            <div class="col-md-8 offset-md-2">
                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
            </div>
        </div>
        <div class="row usr-login">
            <div class="col-lg-3 col-sm-8 offset-lg-2 offset-sm-2 usr-login-sec">
                <p>Existing user?</p>
                <a class="usr-btn" href="{{ url('/login') }}">Login</a>
            </div>
            <div class="col-lg-3 col-sm-8 offset-lg-2 offset-sm-2 usr-register-sec">
                <p>New user?</p>
                <a class="usr-btn" href="{{ url('/register') }}">Register</a>
            </div>
        </div>
@stop
    
