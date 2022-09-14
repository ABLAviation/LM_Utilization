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

    @vite(['resources/js/custom/home.js'])
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
                                    <div class="row">
                                        <div class="col-lg-12 _offset-lg-2 space-y-5">
                                            <form id="form">
                                                <div class="filter form-section">
                                                    <h3>Filter</h3>
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 operators mb-3">
                                                            <label for="operator" class="mb-1">Operators</label>
                                                            <select class="form-select operators_list"
                                                                    id="operator" name="operator" width="100%">
                                                                <option value="">Operator</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 msn mb-3">
                                                            <label for="msn" class="mb-1">MSN</label>
                                                            <select class="form-select msn_list" disabled
                                                                    id="msn" name="msn" width="100%">
                                                                <option value="">MSN</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-12">
                                                            <button type="button" class="btn btn-alt-info search">Search</button>
                                                            <button type="button" class="btn btn-alt-secondary cancel">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="review-section form-section disabled">
                                                    <h3>Review</h3>
                                                    <div class="row">
                                                        <div class="col-md-6 col-12 users mb-2">
                                                            <label for="data-entry" class="mb-1">Data Entry</label>
                                                            <select class="form-select users_list data-entry"
                                                                    id="data-entry" name="data-entry" width="100%">
                                                                <option value="">Data Entry</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 users mb-2">
                                                            <label for="reviewer-1" class="mb-1">Reviewer 1</label>
                                                            <select class="form-select users_list reviewer-1"
                                                                    id="reviewer-1" name="reviewer-1" width="100%">
                                                                <option value="">Reviewer 1</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 users mb-2">
                                                            <label for="reviewer-2" class="mb-1">Reviewer 2</label>
                                                            <select class="form-select users_list reviewer-2"
                                                                    id="reviewer-2" name="reviewer-2" width="100%">
                                                                <option value="">Reviewer 2</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-md-6 col-12 date-of-approval mb-2">
                                                            <label class="form-label" for="example-flatpickr-default">Date of Approval</label>
                                                            <input type="text" class="js-flatpickr form-control flatpickr-input"
                                                                   id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d" readonly="readonly">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="details form-section">
                                                    <h3>Details</h3>
                                                    <div class="details-row row"><p class="mb-0">Choose an operator + msn to view the details</p></div>
                                                </div>
                                                <div class="btn-actions mt-0">
                                                    <button type="submit" class="btn btn-alt-primary update">Submit</button>
                                                </div>
                                            </form>
                                        </div>
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
    <div class="hidden-params d-none">
        <input type="hidden" id="columns_names" value="{{ json_encode($column_names) }}">
    </div>
@endsection
