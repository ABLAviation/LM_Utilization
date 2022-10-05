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
                            Reset Password
                        </h1>
                        {{--                        <p class="fw-medium text-muted">--}}
                        {{--                            Get your access today in one easy step--}}
                        {{--                        </p>--}}
                    </div>
                    <!-- END Header -->

                    <!-- Sign Up Form -->
                    <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                    <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                    <div class="row g-0 justify-content-center">
                        <div class="col-sm-8 col-xl-4">
                            <form class="js-validation-signup" method="POST" action="{{ route('password.update') }}">
                                @csrf
                                <input type="hidden" name="token" value="{{ $token }}">
                                <div class="mb-4">
                                    <input type="email" class="form-control form-control-lg form-control-alt py-3 @error('email') is-invalid @enderror"
                                           id="signup-email" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-3 @error('password') is-invalid @enderror"
                                           id="signup-password" name="password" placeholder="Password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <input type="password" class="form-control form-control-lg form-control-alt py-3"
                                           id="signup-password-confirm" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                                </div>
                                {{--                                <div class="mb-4">--}}
                                {{--                                    <div class="d-md-flex align-items-md-center justify-content-md-between">--}}
                                {{--                                        <div class="form-check">--}}
                                {{--                                            <input class="form-check-input" type="checkbox" value="" id="signup-terms" name="signup-terms">--}}
                                {{--                                            <label class="form-check-label" for="signup-terms">I agree to Terms &amp; Conditions</label>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="py-2">--}}
                                {{--                                            <a class="fs-sm fw-medium" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#one-signup-terms">View Terms</a>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="text-center">
                                    <button type="submit" class="btn btn-lg btn-abl-primary">
                                        <i class="fa-solid fa-arrows-rotate me-1 opacity-50"></i> Reset Password
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Sign Up Form -->
                </div>
            </div>
            <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                <p class="fw-medium text-black-50 py-2 mb-0">
                    <strong>OneUI 5.4</strong> &copy; <span data-toggle="year-copy"></span>
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

    <!-- Terms Modal -->
    <div class="modal fade" id="one-signup-terms" tabindex="-1" role="dialog" aria-labelledby="one-signup-terms" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-rounded block-transparent mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Terms &amp; Conditions</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content">
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                        <p>Dolor posuere proin blandit accumsan senectus netus nullam curae, ornare laoreet adipiscing luctus mauris adipiscing pretium eget fermentum, tristique lobortis est ut metus lobortis tortor tincidunt himenaeos habitant quis dictumst proin odio sagittis purus mi, nec taciti vestibulum quis in sit varius lorem sit metus mi.</p>
                    </div>
                    <div class="block-content block-content-full text-end bg-body">
                        <button type="button" class="btn btn-sm btn-alt-secondary me-1" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-sm btn-primary" data-bs-dismiss="modal">I Agree</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Terms Modal -->
</div>
<!-- END Page Content -->


<div class="container d-none">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
