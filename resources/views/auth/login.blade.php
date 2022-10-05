@extends('layouts.simple')

@section('content')
<!-- Page Content -->
<div class="bg-image" style="background-image: url('{{ asset('media/abl/abl-bg.jpg') }}');">
    <div class="row g-0 bg-primary-dark-op">
        <!-- Meta Info Section -->
        <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
            <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <a class="link-fx fw-semibold fs-2 text-white" href="index.html">
                        Innovative<span class="fw-normal">Thinking</span>
                    </a>
                    <p class="text-white-75 me-xl-8 mt-2">
                        Innovative, global and efficient. ABL Aviation offers
                        independent full service aircraft leasing and aircraft asset management solutions.
                    </p>
                </div>
            </div>
            <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                <p class="fw-medium text-white-50 mb-0">
                    <strong>ABL Aviation</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline mb-0 py-2">
                    <li class="list-inline-item">
                        <a class="text-white-75 fw-medium" href="https://ablaviation.com/privacy-policy/">Privacy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-white-75 fw-medium" href="https://ablaviation.com/disclaimer/">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Meta Info Section -->

        <!-- Main Section -->
        <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
            <div class="p-3 w-100 d-lg-none text-center">
                <a class="link-fx fw-semibold fs-3 text-dark" href="index.html">
                    ABL <span class="fw-normal">Aviation</span>
                </a>
            </div>
            <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                <div class="w-100">
                    <!-- Header -->
                    <div class="text-center mb-3">
                        <p class="mb-4">
                            <img src="{{ asset('media/abl/abl-logo.png') }}" style="width:200px" alt="">
                        </p>
                        <h1 class="fw-bold mb-2">
                            Sign In
                        </h1>
{{--                            <p class="fw-medium text-muted">--}}
{{--                                Welcome, please login or <a href="op_auth_signup3.html">sign up</a> for a new account.--}}
{{--                            </p>--}}
                    </div>
                    <!-- END Header -->

                    <!-- Sign In Form -->
                    <!-- jQuery Validation (.js-validation-signin class is initialized in js/pages/op_auth_signin.min.js which was auto compiled from _js/pages/op_auth_signin.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-4">
                            <form class="js-validation-signin" action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-4">
                                    <input type="text" name="email" placeholder="Email Address"
                                           class="form-control form-control-lg form-control-alt py-3
                                           @error('email') is-invalid @enderror" id="login-username">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-3" id="login-password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="d-flex justify-content-between mb-4">
                                    <div>
                                        <a class="text-muted fs-sm fw-medium d-block d-lg-inline-block mb-1"
                                           href="{{ route('password.request') }}">
                                            Forgot Password?
                                        </a>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-lg btn-abl-primary">
                                            <i class="fa fa-fw fa-sign-in-alt me-1 opacity-50"></i> Sign In
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign In Form -->
                </div>
            </div>
            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                    <strong>ABL Aviation</strong> &copy; <span data-toggle="year-copy"></span>
                </p>
                <ul class="list list-inline py-2 mb-0">
                    <li class="list-inline-item">
                        <a class="text-muted fw-medium" href="https://ablaviation.com/privacy-policy/">Privacy</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted fw-medium" href="https://ablaviation.com/disclaimer/">Disclaimer</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END Main Section -->
    </div>
</div>
<!-- END Page Content -->
@endsection
