@extends('layouts.backend')

@section('css')
    <link rel="stylesheet" href="{{ asset('js/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('js/plugins/highlightjs/styles/atom-one-dark.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}" />--}}
    <link rel="stylesheet" href="{{ asset('js/plugins/flatpickr/flatpickr.min.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
{{--    <script src="{{ asset('js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>--}}
    <script src="{{ asset('js/plugins/flatpickr/flatpickr.min.js') }}"></script>
{{--    <script src="{{ asset('js/plugins/highlightjs/highlight.pack.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>--}}

    @vite(['resources/js/custom/steps/'.$step.'.js'])
@endsection

@section('content')
    <!-- Hero -->
    <div class="hero bg-body-extra-light overflow-hidden">
        <div class="hero-inner">
            <div class="content content-full">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="block block-rounded">
                                <div class="block-content block-content-full">
                                    @include('pages.steps.' . $step)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
@endsection
