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

    @vite(['resources/js/custom/steps/script.js'])
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
                                    <div class="main-content">
                                        <!-- Results -->
                                        <div class="block block-rounded overflow-hidden">
                                            <ul class="nav nav-tabs nav-tabs-block" role="tablist">
                                                @for($step = 1; $step <= $stepsLimit; $step++)
                                                    <li class="nav-item" role="presentation">
                                                        <button type="button" class="nav-link {{ $step == 1 ? 'active' : '' }}" id="search-tab-{{ $step }}"
                                                                data-bs-toggle="tab" data-bs-target="#search-{{ $step }}" role="tab"
                                                                aria-controls="search-{{ $step }}" aria-selected="false" tabindex="-1">{{ $column_names[$step]['title'] }}</button>
                                                    </li>
                                                @endfor
                                            </ul>
                                            <div class="block-content tab-content overflow-hidden bg-body-light">
                                                @for($step = 1; $step <= $stepsLimit; $step++)
                                                <div class="tab-pane fade fade-up {{ $step == 1 ? 'show active' : '' }}" id="search-{{ $step }}" role="tabpanel" aria-labelledby="search-tab-{{ $step }}" tabindex="0">
                                                    <div class="p-2 bg-body-light">
                                                        @include("pages.steps.$step", ['step' => $step, 'title' => $column_names[$step]['title']])
                                                    </div>
                                                </div>
                                                @endfor
                                            </div>
                                        </div>
                                        <!-- END Results -->
                                    </div>
                                    <div class="hidden-params d-none">
                                        <input type="hidden" id="columns_names" value="{{ json_encode($column_names) }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->
    <div id="alert-zone" class="right-bottom-corner"></div>
@endsection
