<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VisaDone</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/plugins/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <style>
        [class*=sidebar-dark-] .sidebar a {
            color: #565656 !important;
        }

        [class*=sidebar-dark-] .sidebar a:hover {
            color: #090909 !important;
            background-color: #fde4ad !important;
        }

        .switch-field {
            display: flex;
            margin-bottom: 36px;
            overflow: hidden;
            font-family: system-ui;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            font-family: system-ui;
            border: 0;
            margin-left: 3%;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #ffffff;
            color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
            font-weight: 100%;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked+label {
            background-color: #fca224;
            color: #ffffff;
            box-shadow: none;
            font-size: medium;
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake"
                src="https://visadone.com/laravel_demo/testing/laravel8/public/images/visadone_logo.png"
                alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')


        <div class="content-wrapper">
            <div class="main-panel">
                <form action="/offer/update" method="POST">
                    @csrf
                    @foreach ($offer as $data)
                        <div class="container-fluid">
                            <input type="hidden" name="id" value="{{ $data->id }}" />
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-description">Edit Visa Offer</h3>
                                            <div class="form-sample">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="countrySelect">Nationality</label>
                                                            @php
                                                                $string = $data->nationality;
                                                                $array = explode(',', $string);
                                                            @endphp
                                                            <select class="form-control" name="nationality[]" multiple
                                                                id="nationality" onchange="support_currency()">
                                                                <option value="">Select Nationality</option>
                                                                @foreach ($country as $option)

                                                                        <option name="nationality"
                                                                            value="{{ $option->country_name }}"
                                                                            @if (in_array($option->country_name, $array)) selected @endif>
                                                                            {{ $option->country_name }}</option>

                                                                    {{-- <option name="nationality"
                                                                        value="{{ $option->country_name }}">
                                                                        {{ $option->country_name }}</option> --}}
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="stateSelect">Travelling To</label>
                                                            @php
                                                                $string = $data->destination;
                                                                $array = explode(',', $string);
                                                            @endphp
                                                            <select class="form-control" name="destination[]" multiple
                                                                id="destination">
                                                                <option value="">Select Nationality</option>
                                                                @foreach ($country as $option)

                                                                        <option name="nationality"
                                                                            value="{{ $option->country_name }}"
                                                                            @if (in_array($option->country_name, $array)) selected @endif>
                                                                            {{ $option->country_name }}</option>

                                                                    {{-- <option name="destination"
                                                                        value="{{ $option->country_name }}">
                                                                        {{ $option->country_name }}</option> --}}
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group" style="display: none;">
                                                    <label for="citySelect">Select City</label>
                                                    <select class="form-control" id="citySelect">
                                                        <option value="">Select City</option>
                                                        <!-- City options will be dynamically added here -->
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>


                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <h4 class="card-description">Visa Type :</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="switch-field">
                                                        <input type="radio" id="radio-one-1" name="visa_type"
                                                            value="standard visa"
                                                            @if ($data->visa_type == 'Standard visa') checked="" @endif>
                                                        <label for="radio-one-1">Standard Visa</label>
                                                        <input type="radio" id="radio-two-1" name="visa_type"
                                                            value="express visa"
                                                            @if ($data->visa_type == 'Express visa') checked="" @endif>
                                                        <label for="radio-two-1">Express Visa</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <h4 class="card-description">Entry Type :</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="switch-field">
                                                        <input type="radio" id="radio-one-2" name="entry_type"
                                                            value="single_entry"
                                                            @if ($data->entry_fees == 'single_entry') checked="" @endif>
                                                        <label for="radio-one-2">Single Entry</label>
                                                        <input type="radio" id="radio-two-2" name="entry_type"
                                                            value="multi_entry"
                                                            @if ($data->entry_fees == 'multi_entry') checked="" @endif>
                                                        <label for="radio-two-2">Multi Entry</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <h4 class="card-description">Visa :</h4>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="switch-field">
                                                        <input type="radio" id="radio-one-3" name="visa_category"
                                                            value="e-visa"
                                                            @if ($data->visa_type == 'e-visa') checked="" @endif>
                                                        <label for="radio-one-3">E-Visa</label>
                                                        <input type="radio" id="radio-two-3" name="visa_category"
                                                            value="normal-visa"
                                                            @if ($data->visa_type == 'normal-visa') checked="" @endif>
                                                        <label for="radio-two-3">Normal Visa</label>
                                                        {{-- <input type="radio" id="radio-two-3" name="visa_category"
                                                    value="sticker-visa">
                                                <label for="radio-two-3">Sticker Visa</label> --}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="row">
                                        <div class="col-md-1">
                                            <h4 class="card-description">Catrgory :</h4>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="switch-field">
                                                <input type="radio" id="radio-one-4" name="switch-one-4" value="standard visa" checked="">
                                                <label for="radio-one-4">Tourist</label>
                                                <input type="radio" id="radio-two-4" name="switch-one-4" value="express visa">
                                                <label for="radio-two-4">Business</label>
                                            </div>

                                        </div>
                                    </div> -->
                                            <div class="row">
                                                <div class="col-md-1">
                                                    <h4 class="card-description">Category :</h4>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="switch-field">
                                                            <input type="radio" id="radio-one-5" name="category"
                                                                value="tourist" @if ($data->visa_category == 'tourist') checked="" @endif>
                                                            <label for="radio-one-5">Tourist</label>
                                                            <input type="radio" id="radio-two-5" name="category"
                                                                value="bussiness" @if ($data->visa_category == 'business') checked="" @endif>
                                                            <label for="radio-two-5">Business</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="switch-field">
                                                            <input type="radio" id="radio-one-6" name="category"
                                                                value="student" @if ($data->visa_category == 'student') checked="" @endif>
                                                            <label for="radio-one-6">Student</label>
                                                            <input type="radio" id="radio-two-6" name="category"
                                                                value="Transit">
                                                            <label for="radio-two-6">Transit</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="switch-field">
                                                            <input type="radio" id="radio-one-7" name="category"
                                                                value="medical" @if ($data->visa_category == 'medical') checked="" @endif>
                                                            <label for="radio-one-7">Medical</label>
                                                            <input type="radio" id="radio-two-7" name="category"
                                                                value="none">
                                                            <label for="radio-two-7">None</label>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <br>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-description">Visa Processing Fields</h3>
                                            <div class="form-sample">
                                                <hr>
                                                <div class="row mt-2">
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" id="duration"
                                                                aria-describedby="durationHelp" placeholder="Duration"
                                                                value="{{ $data->duration }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <select class="form-control" name="duration_type"
                                                                id="durationType" placeholder="Duration Type">
                                                                <option value="days">Days</option>
                                                                <option value="weeks">Weeks</option>
                                                                <option value="months">Months</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control"
                                                                id="processingTime" name="processing_time"
                                                                aria-describedby="processingTimeHelp"
                                                                placeholder="Processing Time"
                                                                value="{{ $data->processing_time }} Working Days">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <input type="text" name="visa_validity"
                                                                class="form-control" id="visaValidity"
                                                                aria-describedby="visaValidityHelp"
                                                                placeholder="Visa Validity"
                                                                value="{{ $data->visa_validity }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <div class="form-group">
                                                            <input type="text" name="stay_validity"
                                                                class="form-control" id="stayValidity"
                                                                aria-describedby="stayValidityHelp"
                                                                placeholder="Stay Validity"
                                                                value="{{ $data->stay_validity }}">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row mt-4">
                                                    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
                                                        <div class="form-group">
                                                            <textarea class="form-control" name="visa_description" value="" id="description"
                                                                rows="3" placeholder="Description">{{ $data->visa_description }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-description">Base Currency</h3>
                                            <hr>
                                            <div class="row mt-4">
                                                <div class="col-12 col-sm-12 col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-white">
                                                            <h4 class="card-description">USD Currency</h4>
                                                        </div>
                                                        <div class="card-body">
                                                            <!-- <h4 class="card-title">USD <small>currency</small></h4> -->
                                                            <div class="row">
                                                                <div class="col-12 col-sm-8 col-md-8">
                                                                    <div class="row">
                                                                        <div class="col-12 col-sm-2 col-md-2">
                                                                            <label
                                                                                class="mt-2 card-description">Adult</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Embassy Fees"
                                                                                    id="base_adult_embassy"
                                                                                    name="base_rate_adult"
                                                                                    value="{{ $data->base_rate_adult }}"
                                                                                    onchange="currency_adult()">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="base_adult_service"
                                                                                    name="govt_fees_adult"
                                                                                    value="{{ $data->govt_fees_adult }}"
                                                                                    onchange="currency_adult_service()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-12 col-sm-2 col-md-2">
                                                                            <label
                                                                                class="mt-2 card-description">Child</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Embassy Fees"
                                                                                    id="base_rate_child"
                                                                                    name="child_fees"
                                                                                    value="{{ $data->base_rate_child }}"
                                                                                    onchange="currency_child()">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="base_child_service"
                                                                                    name="govt_fees_child"
                                                                                    value="{{ $data->govt_fees_child }}"
                                                                                    onchange="currency_child_service()">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mt-2">
                                                                        <div class="col-12 col-sm-2 col-md-2">
                                                                            <label
                                                                                class="mt-2 card-description">Infant</label>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Embassy Fees"
                                                                                    id="base_rate_Infant"
                                                                                    name="infant_fees"
                                                                                    value="{{ $data->base_rate_Infant }}"
                                                                                    onchange="currency_infant()">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="base_infant_service"
                                                                                    name="govt_fees_infant"
                                                                                    value="{{ $data->govt_fees_infant }}"
                                                                                    onchange="currency_infant_service()">
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
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!--<div class="row">-->
                            <!--    <div class="col-12 grid-margin">-->
                            <!--        <div class="card">-->
                            <!--            <div class="card-body">-->
                            <!--                <h3 class="card-description">Support Currencies</h3>-->
                            <!--                <input type="hidden" id="currency_data" name="currency_data" />-->
                            <!--                <hr>-->

                            <!--                <div class="row mt-4">-->
                            <!--                    <div class="col-12 col-sm-12 col-md-12">-->
                            <!--                        <div class="card">-->
                            <!--                            <div class="card-header bg-white">-->
                            <!--                                <h4 class="card-description_header"><b>Nationality-->
                            <!--                                        Currency</b>-->
                            <!--                                </h4>-->
                            <!--                            </div>-->
                            <!--                            <div class="card-body">-->
                                                            <!-- <h4 class="card-title">USD <small>currency</small></h4> -->
                            <!--                                <div class="row">-->
                            <!--                                    <div class="col-12 col-sm-8 col-md-8">-->
                            <!--                                        <div class="row">-->
                            <!--                                            <div class="col-12 col-sm-2 col-md-2">-->
                            <!--                                                <label-->
                            <!--                                                    class="mt-2 card-description">Adult</label>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Embassy Fees"-->
                            <!--                                                        id="converted_adult_embassy"-->
                            <!--                                                        name="base_rate_adult"-->
                            <!--                                                        value={{ $data->govt_fees_adult }}-->
                            <!--                                                        readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Service Fees"-->
                            <!--                                                        id="converted_adult_service"-->
                            <!--                                                        name="govt_fees_adult"-->
                            <!--                                                        value="" readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="row mt-2">-->
                            <!--                                            <div class="col-12 col-sm-2 col-md-2">-->
                            <!--                                                <label-->
                            <!--                                                    class="mt-2 card-description">Child</label>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Embassy Fees"-->
                            <!--                                                        id="converted_rate_child"-->
                            <!--                                                        name="child_fees"-->
                            <!--                                                        value={{ $data->govt_fees_child }}-->
                            <!--                                                        readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Service Fees"-->
                            <!--                                                        id="converted_child_service"-->
                            <!--                                                        name="govt_fees_child"-->
                            <!--                                                        value="" readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                        <div class="row mt-2">-->
                            <!--                                            <div class="col-12 col-sm-2 col-md-2">-->
                            <!--                                                <label-->
                            <!--                                                    class="mt-2 card-description">Infant</label>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Embassy Fees"-->
                            <!--                                                        id="converted_rate_Infant"-->
                            <!--                                                        name="infant_fees"-->
                            <!--                                                        value={{ $data->govt_fees_infant }}-->
                            <!--                                                        readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                            <div class="col-12 col-sm-3 col-md-3">-->
                            <!--                                                <div class="form-group">-->
                            <!--                                                    <input type="text"-->
                            <!--                                                        class="form-control"-->
                            <!--                                                        placeholder="Service Fees"-->
                            <!--                                                        id="convert_infant_service"-->
                            <!--                                                        name="govt_fees_infant"-->
                            <!--                                                        value="" readonly>-->
                            <!--                                                </div>-->
                            <!--                                            </div>-->
                            <!--                                        </div>-->
                            <!--                                    </div>-->
                            <!--                                </div>-->
                            <!--                            </div>-->
                            <!--                        </div>-->
                            <!--                    </div>-->
                            <!--                </div>-->
                            <!--            </div>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--    <br>-->
                            <!--</div>-->
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-description">Visa Status</h3>
                                            <hr>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <select name="status_offer" class="form-control"
                                                        id="durationType" placeholder="Duration Type">
                                                        <option value="Active">Active</option>
                                                        <option value="In-Active">In-active</option>
                                                        <!-- <option value="months">Months</option> -->
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <div id="cardContainer"></div>
                        </div>
                    @endforeach
                    <input type="submit" value="submit">
                </form>


                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->

                <!-- partial -->
            </div>
        </div>

    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Include jQuery UI -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Include Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Include ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Include Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

    <!-- Include JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- Include jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Include moment.js -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>

    <!-- Include daterangepicker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Include Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Include Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- Include overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- Include AdminLTE App -->
    <script src="{{ asset('./dist/js/adminlte.js') }}"></script>

    <!-- Include AdminLTE for demo purposes -->
    <script src="{{ asset('./dist/js/demo.js') }}"></script>

    <!-- Include AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('./dist/js/pages/dashboard.js') }}"></script>

    <!-- Include jQuery 3.6.0 (if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Chart.js from CDN (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Include Chart.js 2.9.4 from CDN (if needed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        function getOffer() {
            $(document).ready(function() {
                var country = document.getElementById("travel_to").value;
                console.log(country);

                $.ajax({
                    url: '/offers/get/' + country,
                    method: 'GET',
                    success: function(response) {
                        var container = $('#cardContainer');

                        if (response.length === 0) {
                            container.empty();
                            return;
                        }
                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {
                            var card = $('<div>').addClass('card');
                            var cardBody = $('<div>').addClass('card-body');

                            // Create card content using the item properties
                            var cardContent = `
                      <h5 class="card-title">${item.visa_type}</h5>
                      <p class="card-text">${item.visa_category}</p>
                      <p class="card-text">${item.destination}</p>
                      <p class="card-text">${item.processing_time}</p>
                      <!-- Add more properties as needed -->

                      <button class="btn btn-primary">Apply</button>
                    `;

                            // Set the card content
                            cardBody.html(cardContent);

                            // Append the card body to the card
                            card.append(cardBody);

                            // Append the card to the container
                            container.append(card);
                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getoffers() {
            // Make the AJAX request
            var nationality = document.getElementById('nationality').value;
            var destination = document.getElementById('destination').value;
            // alert(nationality);
            var check = '/api/visa/' + nationality + '/' + destination;
            console.log(check);
            $.ajax({
                url: '/api/visa/' + nationality + '/' + destination,
                type: 'GET',
                dataType: 'json',

                success: function(response) {
                    // Clear existing options
                    $('#offer_id').empty();
                    console.log(response);
                    // Iterate over the response and append options to the drop-down
                    $.each(response, function(index, option) {
                        $('#offer_id').append('<option class="dropdown-item" value="' + option
                            .id + '">' + option.visa_type + ' ' + option.visa_category + ' ' +
                            option.duration +
                            '</option>');
                    });
                }
            });
        }

        $(document).ready(function() {
            getoffers(); // Call the function to populate options when the document is ready
        });
    </script>



</body>

</html>
