<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VisaDone</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('/new_css/style.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/css/bootstrap2-toggle.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-toggle/2.2.2/js/bootstrap2-toggle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <style>
        #datePickerDropdown {
            background-color: #fff;
            /* Set the background color to white */
        }

        .card {
            background: #fafafa;
            border-radius: 10px;
            box-shadow: 0 0 7px 2px rgba(0, 0, 0, 0.1);
        }


        .card-description {
            font-size: 24px;
            color: #333;
            margin: 0;
        }

        .form-sample {
            padding: 20px;
        }

        hr {
            border: none;
            border-top: 1px solid #ccc;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        .custom-select {
            width: 100%;
            border: 2px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            background: #fff;
            color: #333;
            font-size: 16px;
        }

        .custom-select:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .required-field {
            color: #ff0000;
        }

        /* Customize the select2 dropdown */
        .select2-container .select2-selection--single {
            height: 42px;
            border: 2px solid #ccc;
            border-radius: 5px;
            background: #fff;
        }

        .select2-selection--single .select2-selection__arrow b {
            border-color: #333 transparent transparent transparent;
        }

        .select2-selection--single .select2-selection__rendered {
            color: #333;
        }

        /* Adjust the appearance of the search box */
        .select2-search--dropdown .select2-search__field {
            border: none;
            border-bottom: 2px solid #007bff;
        }

        .custom-switch-field {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-switch-field input[type="radio"] {
            display: none;
        }

        .custom-label {
            position: relative;
            padding: 10px 18px 11px 39px;
            background-color: #e9e9e9;
            border: 1px solid #ccc;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
            display: flex;
            align-items: center;
        }

        .custom-label::before {
            content: "";
            position: absolute;
            top: 1px;
            margin-left: -8px;
            left: 2px;
            width: 39px;
            height: 42px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 50%;
            transition: transform 0.3s;
        }

        .custom-switch-field input[type="radio"]:checked+.custom-label {
            background-color: #007bff;
            color: #fff;
            transition: background-color 0.3s, color 0.3s;
        }

        .custom-switch-field input[type="radio"]:checked+.custom-label::before {
            left: calc(30% - 2px);
            transform: translateX(-100%);
            transition: transform 0.3s;
        }

        .highlighted-card {
            border: 2px dashed #00aaff;
        }
    </style>
    <style>
        .checkmark::before {
            content: '\2713';
            color: #000;
            position: absolute;
            top: -5px;
            /* border: 2px solid #fff; */
            right: 5px;
            border-radius: 20px;
            font-size: 40px;
        }

        /* Custom CSS for the ticket container */
        .ticket {
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 10px;
            margin: 0px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Custom CSS for the document title */
        .custom-card-title {
            font-size: 18px;
            margin: 0;
            color: #007BFF;
        }

        /* Custom CSS for the document description */
        .custom-card-description {
            margin: 2px 0;
        }

        /* Custom CSS for the upload button */
        .custom-upload-button {
            cursor: pointer;
            text-align: center;
        }

        /* Add a hover effect for the upload button */
        .custom-upload-button:hover {
            background-color: #0056b3;
            color: #fff;
        }
    </style>
    <!-- <script>
        import React from 'react';
        import ReactDOM from 'react-dom';
        import AntDesignComponent from './js/components/AntDesignComponent'; // Correct the path to the AntDesignComponent file
        import Datepicker from './js/components/datepicker'; // Correct the path to the datepicker file

        ReactDOM.render( < AntDesignComponent / > , document.getElementById('datepicker'));
    </script> -->
    <!-- <script src="{{ asset('/js/components/datepicker.jsx') }}"></script>
    <script>
        import React from 'react';
        import ReactDOM from 'react-dom';
        import AntDesignComponent from '/js/components/AntDesignComponent';
        ReactDOM.render( < AntDesignComponent / > , document.getElementById('datepicker'));
    </script> -->
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="https://visadone.com/laravel_demo/testing/laravel8/public/images/visadone_logo.png" alt="AdminLTELogo">
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
                <form action="/visa/store_applications" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="container-fluid pt-3">
                        <div class="row">
                            <div class="col-md-12 col-md-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-description">Apply for a New Visa</h3>
                                        <div class="form-sample">
                                            <div class="row form-group">
                                                <!-- Nationality Select -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="nationality">Nationality <span class="required-field">*</span></label>
                                                        <select class="form-control select2 custom-select" name="nationality" id="nationality" data-live-search="true" required>
                                                            <option value="">Select Nationality</option>
                                                            @foreach ($country as $option)
                                                            <option value="{{ $option->country_name }}">
                                                                {{ $option->country_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Destination Select -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="travel_to">Destination <span class="required-field">*</span></label>
                                                        <select class="form-control select2 custom-select" name="destination" id="travel_to" data-live-search="true" onchange="getOffer()" required>
                                                            <option value="">Select Destination</option>
                                                            @foreach ($country as $option)
                                                            <option value="{{ $option->country_name }}">
                                                                {{ $option->country_name }}
                                                            </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <button class="btn btn-primary" type="submit">Submit</button> -->

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-sample">
                                            <p class="card-description">
                                                Travel Dates
                                            </p>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-1.5 " id="startdate">From Date<span class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <!-- Single input field for both typing and date selection -->
                                                                <div class="input-group-append">


                                                                    <input type="text" id="from_date" name="from_date" class="form-control" placeholder="DD-MM-YYYY" required>
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                            </div>

                                                            <!-- Date picker dropdown -->
                                                            <div class="date-picker-dropdown" id="datePickerDropdown" style="background-color: #f8f9fa;">
                                                                <input type="date" id="from_date_picker" name="from_date_picker">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label class="col-sm-1.5 " id="enddate">To Date<span class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <div class="input-group-append">
                                                                    <!-- Single input field for both typing and date selection -->
                                                                    <input type="text" id="to_date" name="to_date" class="form-control" placeholder="DD-MM-YYYY" required>
                                                                    <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                                                                </div>
                                                                <!-- Date picker dropdown -->
                                                                <div class="date-picker-dropdown" id="datePickerDropdownTo">
                                                                    <input type="date" id="to_date_picker" name="to_date_picker">
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
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body" style="padding: 8px 1px 35px;">
                                        <div class="form-sample">
                                            <p class="card-description">Visa Types</p>
                                            <hr>
                                            <div class="custom-switch-field">
                                                <input type="radio" id="radio-one-1" name="switch-one-1" value="standard visa" checked>
                                                <label for="radio-one-1" class="custom-label">Standard Visa</label>
                                                <input type="radio" id="radio-two-1" name="switch-one-1" value="express visa">
                                                <label for="radio-two-1" class="custom-label">Express Visa</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body" style="padding: 8px 1px 35px;">
                                        <div class="form-sample">
                                            <p class="card-description">
                                                Entry Type
                                            </p>
                                            <hr>
                                            <div class="custom-switch-field">
                                                <input type="radio" id="radio-two-2" name="switch-one-2" value="standard visa" checked="" onchange="getOffer()">
                                                <label for="radio-two-2" class="custom-label">Single Entry</label>
                                                <input type="radio" id="radio-two-3" name="switch-one-2" value="express visa" onchange="get_offer_multiple()">
                                                <label for="radio-two-3" class="custom-label">Multiple Entry</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-sample">
                                            <h3 class="card-description">
                                                Visa Offers
                                            </h3>
                                            <div id="currency_selection_div">
                                                <!-- Add the buttons here -->
                                                <select class="form-control" id="currency_code" style="
                                                width: fit-content;
                                                float: right;
                                                margin-top: 2%;
                                            " onchange="curreny_update()">
                                                    <option value="">Currency</option>
                                                    @foreach ($currency as $option)
                                                    <option name="currency_values" value="{{ $option->country_currency }}">
                                                        {{ $option->country_currency }} -
                                                        {{ $option->country_name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <hr>
                                            <div class="tabset">
                                                <!-- tabs -->
                                                <div class="pcss3t pcss3t-effect-scale pcss3t-theme-1">
                                                    <input type="radio" name="pcss3t" checked id="tab1" class="tab-content-first">
                                                    <label for="tab1"><i class="icon-globe"></i>Tourist</label>

                                                    <input type="radio" name="pcss3t" id="tab2" class="tab-content-2">
                                                    <label for="tab2"><i class="icon-picture"></i>Business</label>

                                                    <input type="radio" name="pcss3t" id="tab3" class="tab-content-3">
                                                    <label for="tab3"><i class="icon-cogs"></i>Student</label>

                                                    <input type="radio" name="pcss3t" id="tab5" class="tab-content-last">
                                                    <label for="tab5"><i class="icon-globe"></i>Transit</label>

                                                    <input type="radio" name="pcss3t" id="tab6" class="tab-content-last">
                                                    <label for="tab6"><i class="icon-globe"></i>Medical</label>

                                                    <ul>

                                                        <li class="tab-content tab-content-first typography">


                                                            <div id="coupon-container"></div>

                                                        </li>

                                                        <li class="tab-content tab-content-2 typography">

                                                            <div id="coupon-container_bussiness"></div>

                                                        </li>

                                                        <li class="tab-content tab-content-3 typography">

                                                            <div id="coupon-container_student"></div>

                                                        </li>

                                                        <li class="tab-content tab-content-4 typography">
                                                            <div class="typography">

                                                                <div id="coupon-container_transit"></div>

                                                            </div>
                                                        </li>

                                                        <li class="tab-content tab-content-last typography">
                                                            <div class="typography">

                                                                <div id="coupon-container_medical"></div>

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <!-- <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                                                <label for="tab1">Tourist</label>

                                                <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                                                <label for="tab2">Business</label>

                                                <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                                                <label for="tab3">Student</label>

                                                <input type="radio" name="tabset" id="tab4" aria-controls="popcorn">
                                                <label for "tab4">Transit</label>

                                                <input type="radio" name="tabset" id="tab5" aria-controls="sweet">
                                                <label for="tab5">Medical</label> -->

                                                <div class="tab-panels">

                                                    {{-- Model Start --}}


                                                    <div id="myModal" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content -->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title" style="text-align: center;">Visa Offer Details
                                                                    </h4>
                                                                    <h4 class="modal-title" style="text-align: center;">


                                                                    </h4><br>

                                                                </div><br>
                                                                <h5 id="description" style="margin-left: 4%;font-weight:700;">Package
                                                                    Details</h5>

                                                                <div class="modal-body">
                                                                    <table class="table table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th style="background-color: #b2b2b2;">
                                                                                    Visa Type</th>
                                                                                <th style="background-color: #b2b2b2;">
                                                                                    Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td id="visaType">Adult</td>
                                                                                <td id="visaPrice">NULL</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="serviceType">Service Fees</td>
                                                                                <td id="servicePrice">NULL</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="serviceType">GST(18%)</td>
                                                                                <td id="taxPrice">NULL</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td id="serviceType">Total Fees</td>
                                                                                <td id="totalPrice">00</td>
                                                                            </tr>
                                                                            <!-- Add more rows for other visa types and prices -->
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    {{-- Model END --}}
                                                    <input type="hidden" id="hidden_offer_id" name="offer_secrate_field" />

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div><br>
                        <section id="marzen_1" class="tab-panel">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="card-description">Documents Required</h4>
                                                    <hr>
                                                </div>
                                                <div class="col-md-12 text-md-right">
                                                    <!-- Add the buttons here -->
                                                    {{-- <button class="btn" id="button_new_tab"
                                                        style="background-color: #039afe;color:white;">View Document
                                                        Requiredments</button>
                                                    <button class="btn"
                                                        style="background-color: #039afe;color:white;">Send
                                                        Requirements
                                                        using Email</button> --}}

                                                </div>
                                                <div class="col" style="width: 100%">
                                                    <div class="row">
                                                        {{-- <div class="col-md-12"> --}}
                                                        <div id="coupon-container_document">
                                                            {{-- </div> --}}
                                                        </div>

                                                    </div>
                                                </div>



                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section id="marzen_2" class="tab-panel">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h5 class="card-description">Additional Documents Required</h5>
                                                    <hr>
                                                </div>
                                                <!-- <div class="col-md-6 text-md-right">
                                                    {{-- <button class="btn" id="button_new_tab"
                                                        style="background-color: #039afe;color:white;">View Document
                                                        Requiredments</button>
                                                    <button class="btn"
                                                        style="background-color: #039afe;color:white;">Send
                                                        Requirements
                                                        using Email</button> --}}

                                                </div> -->
                                                <div class="col" style="width: 100%">
                                                    <div class="row">
                                                        {{-- <div class="col-md-12"> --}}
                                                        <div id="coupon-container_document_1" style="display: flex;">
                                                            {{-- </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body " style="background-color: #f8f9fa; border-radius: 10px;">
                                        <h3 class="card-description">Upload Documents</h3>
                                        <div class="container mt-5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="dropzone" id="myDropzone">
                                                        <label id="myDropzone" for="fileInput">

                                                            <h4>Drag and Drop Files Here</h4>
                                                            <input type="file" name="dataFile[]" onchange="viewImages()" id="fileInput" multiple>

                                                            <i class="fas fa-cloud-upload-alt fa-3x"></i>

                                                            <p>Or click to select files</p>
                                                            <p style="color: #b3b4b4">[Supported Formats
                                                                JPG,PNG,JPEG Less then 2MB]</p>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div><!-- Example -->
                        <section id="marzen_1" class="tab-panel">
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 class="card-description">Documents Uploaded</h3>
                                                    <hr>
                                                    <div id="imageContainer">
                                                        <!-- Images will be displayed here -->
                                                        <div class="row">
                                                            <div class="col-md-12">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Rest of your content here -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-description">Disclaimer</h3>
                                        <div class="form-sample" style="padding: 5px;">
                                            <hr>
                                            <li class="pt-2">Please note that the processing time indicated are from
                                                the
                                                time they are submitted to the respective visa decision making
                                                authority.
                                            </li>
                                            <li class="pt-2">Processing time may vary under exceptional circumstances
                                                beyond the control of Visadone.</li>
                                            <li class="pt-2">Please note that the document/documents list shown are
                                                subject to change without prior notice. Any additional
                                                documents/information
                                                required will be communicated after careful evaluation of the
                                                application.
                                            </li>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>


                    <input type="submit" class="float-right btn btn-success" value="Organise Application" style="
                    margin-right: 2%;
                    margin-bottom: 2%;
                    margin-top: 1%;
                    width: 166px;
                    height  : 50px;
                    ">
                    <input type="submit" class="float-right btn btn-danger" value="Archive Application" style="
                    margin-right: 2%;
                    margin-bottom: 2%;
                    margin-top: 1%;
                    width: 166px;
                    height: 50px;
                     ">
                </form>



            </div>
        </div>

    </div>
    <!-- Include Flatpickr JavaScript from a CDN -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        function toggleHighlightCheckmark(card) {
            card.classList.toggle('highlighted-card');
            card.querySelector('.custom-radio').click(); // Trigger a click event on the radio button
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            flatpickr("#from_date_picker", {
                allowInput: true, // Allow manual date entry
                altFormat: "F j, Y",
                dateFormat: "Y-m-d", // Set the date format to yyyy-mm-dd
                altInput: true, // Enable the alternate input field
                altInputClass: "form-control", // Apply the same style as the original input
                altInputPlaceholder: "DD-MM-YYYY" // Placeholder for the alternate input field
            });
            flatpickr("#to_date_picker", {
                allowInput: true, // Allow manual date entry
                altFormat: "F j, Y",
                dateFormat: "Y-m-d", // Set the date format to yyyy-mm-dd
                altInput: true, // Enable the alternate input field
                altInputClass: "form-control", // Apply the same style as the original input
                altInputPlaceholder: "DD-MM-YYYY" // Placeholder for the alternate input field
            });
        });
    </script>
    @section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const container = document.getElementById('datepicker-container');
            ReactDOM.render( < Datepicker / > , container);
        });
    </script>
    @show
    <script src="/js/components/datepicker.js"></script>
    <script>
        // Initialize Bootstrap Toggle on the checkboxes
        $(function() {
            $('input[type="checkbox"]').bootstrapToggle();
        });
    </script>
    <script>
        $('.select2').select2();
    </script>

    <script src="/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip w    ith Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="./plugins/chart.js/Chart.min.js"></script>
    <script src="/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="/plugins/moment/moment.min.js"></script>
    <script src="/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dist/js/demo.js"></script>

    <script src="/publicdist/js/pages/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



    <script>
        function getModel(id, user_id) {
            // Set the ID in the modal when it's shown
            $('#modalOfferId').text('ID: ' + id);

            // Make an AJAX request to fetch data from the server
            $.ajax({
                url: '/api/offerdetails/' + id + '/' + user_id, // Replace with your server endpoint
                method: 'GET',

                success: function(data) {
                    console.log(data);
                    if (Array.isArray(data) && data.length > 0) {
                        // Access the properties of the first offer (index 0)
                        const offer = data[0];
                        var description = offer.visa_category + ' | ' + offer.visa_type + ' | ' + offer
                            .entry_fees + ' | ' + offer.stay_validity + 'Days';

                        // Populate the table cells with data from the server
                        $('#visaType').text(offer.visa_type);
                        $('#visaPrice').text('$' + offer.base_rate_adult);
                        $('#description').text(description);


                        // Assuming that offer.base_rate_adult is a string representing a numeric value
                        var baseRateAdult = parseFloat(offer.base_rate_adult);

                        // Calculate the GST amount (18% of baseRateAdult)
                        var gstAmount = (baseRateAdult * 18) / 100;

                        // Calculate the total price (base rate + GST)
                        var totalPrice = baseRateAdult + gstAmount;

                        // Display the base rate and GST in the #taxPrice element
                        $('#taxPrice').text(gstAmount.toFixed(2) + ' (GST)');



                        $('#serviceType').text('Service Fees');
                        $('#servicePrice').text('$' + offer.govt_fees_adult);
                        $('#totalPrice').text('$' + (parseFloat(gstAmount) + (parseFloat(offer
                            .govt_fees_adult) + parseFloat(offer
                            .base_rate_adult))));

                        var modal = document.getElementById('myModal');
                        modal.style.display = 'block';
                    } else {
                        console.error('No valid offer data received from the server.');
                    }
                },

            });
        }
    </script>
    <script>
        function curreny_update() {
            var currency = document.getElementById('currency_code');
            var offerTitles = document.querySelectorAll('[data-offer-id]');

            if (!currency) {
                console.error('Element with ID "currency_code" not found.');
                return;
            }

            if (currency.value === '') {
                // If no currency is selected, reset the offer prices to their original values
                offerTitles.forEach(function(title) {
                    var offerId = title.getAttribute('data-offer-id');
                    var originalPrice = parseFloat(document.querySelector(
                        `[data-offer-id="${offerId}"][name="selected_offer_id"]`).value);
                    title.innerHTML = "Visa Price:&nbsp;$ " + originalPrice.toFixed(2);
                });
            } else {
                $.ajax({
                    url: '/api/convert/' + currency.value,
                    method: 'GET',
                    success: function(response) {
                        console.log(response.offerinfo[0].country_rate);
                        var countryRate = parseFloat(response.offerinfo[0].country_rate);

                        // Loop through all offer title elements and update their prices
                        offerTitles.forEach(function(title) {
                            var offerId = title.getAttribute('data-offer-id');
                            var currentPrice = parseFloat(document.querySelector(
                                `[data-offer-id="${offerId}"][name="selected_offer_id"]`).value);
                            var calculatedPrice = currentPrice * countryRate;
                            title.innerHTML = "Visa Price:&nbsp;" + currency.value + " " +
                                calculatedPrice.toFixed(2);
                        });

                        console.log("sa");
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        }
    </script>


    <!-- End custom js for this page-->
    <script>
        function getOffer() {
            $(document).ready(function() {
                var country = document.getElementById("travel_to").value;
                var country_currency = document.getElementById("currency_code").value;
                country_currency.disabled = false;
                // alert(type);
                console.log(country);
                $.ajax({
                    url: '/offers/get/' + country + '/single_entry',
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        var container = $('#coupon-container');
                        var containerBusiness = $('#coupon-container_bussiness');
                        var containerMedical = $('#coupon-container_medical');
                        var containerTransit = $('#coupon-container_transit');
                        var containerStudent = $('#coupon-container_student');

                        // Clear previous content
                        container.empty();
                        containerBusiness.empty();
                        containerStudent.empty(); // Add this line to clear other containers
                        containerMedical.empty(); // Add this line to clear other containers
                        containerTransit.empty(); // Add this line to clear other containers

                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {
                            console.log(item);
                            var customCard = $('<div>').addClass('coupon-container');
                            var customCardBody = $('<div>').addClass('coupon').attr('style',
                                'flex-direction: row;');

                            // Create four columns
                            var column1 = $('<div>').addClass('col-md-4');
                            var column2 = $('<div>').addClass('col-md-4');
                            var column3 = $('<div>').addClass('col-md-4');
                            var column4 = $('<div>').addClass('col-md-4');

                            // Create card content using the item properties
                            var cardContent = `
                            <div class="card" style="margin-bottom: 0px;" onclick="selectCard(this)" >
                                <div class="card" style="margin-bottom: 0px;">
                                <div class="card-header" style="${item.visa_category === 'e-visa' ? 'background-color:#00aaff;color:white;' : 'background-color:#a77cb6;color:white;'}">
    <span class="visa-type-tag">
        <span style="${item.visa_category === 'e-visa' ? 'font-weight: bold; font-size: 1.2em;' : ''}">
            ${item.visa_category === 'e-visa' ? 'E-VISA' : 'Sticker Visa'}
        </span>
        ${item.visa_category === 'e-visa' ? '<i class="fa fa-credit-card" aria-hidden="true" style="font-size: 1.2em;"></i>' : '<i class="fa fa-id-card" aria-hidden="true" style="font-size: 1.2em;"></i>'}
    </span>
</div>
<div class="card-body custom-card-body ${item.visa_category === 'e-visa' ? 'e-visa-border' : 'sticker-visa-border'}" style="padding: 5px;" onclick="toggleHighlightCheckmark(this); getDocuments(${item.id});">
    <!-- The rest of your card content here -->
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-12">
            <label style="display: inline-block;">
    <input type="radio" class="custom-radio" name="selected_offer_current" style="vertical-align: middle;" onclick="toggleHighlightCheckmark(this.closest('.custom-card-body'));" />
    <h4 data-offer-id="${item.id}" style="display: inline-block; margin-left: 10px;">Visa Price: $${item.base_rate_adult}</h4>
</label>
                <input type="hidden" name="selected_offer_id" data-offer-id="${item.id}" value="${item.id}" class="checkk" />
                <input type="hidden" id="price_offer" value="${item.base_rate_adult}" />
                <p class="card-text">Processing Time: ${item.processing_time} Working Days</p>
                <p class="card-text">Visa Validity: ${item.visa_validity} Days (From Visa Issuance Date)</p>
                <p class="card-text">Stay Validity: ${item.stay_validity} Days (From Arrival Date)</p><br>
                <a href="#" class="btn custom-button" data-toggle="modal" onclick="getModel(${item.id},{{ session('id') }})" data-target="#myModal">View Information</a>
            </div>
        </div>
    </div>
</div>
`;

                            var cardStyle = document.createElement("style");
                            cardStyle.textContent = `

                            /* Custom CSS for styling radio button and card body */
.custom-card-body {
    border: 1px solid #a77cb6;
}

.e-visa-border {
    border: 1px solid #00aaff;
}

.custom-radio {
    /* Add your custom radio button styles here */
    /* For example, you can change the appearance, colors, and size of the radio button */
}

.custom-button {
    background-color: #00aaff;
    color: white;
    text-decoration: none;
    /* Add any additional styles for your button here */
}

.card {
    margin-bottom: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    margin-bottom: 0rem !important;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.card-title {
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    color: #555;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
.selected-card {
            border: 2px solid #007bff;
        }
`;
                            var cardScript = document.createElement("script");
                            cardScript.textContent = 'function selectCard(card) {' +
                                'var allCards = document.querySelectorAll(".card");' +
                                'allCards.forEach(function(card) {' +
                                'card.classList.remove("selected-card");' +
                                '});' +
                                'card.classList.add("selected-card");' +
                                '}';
                            document.head.appendChild(cardScript);


                            // Check the visa_type to decide which container to append the card
                            if (item.visa_type === 'Bussiness') {
                                // Append to Business Visa Container
                                customCard.append(customCardBody);
                                containerBusiness.append(customCard);
                            } else if (item.visa_type === 'Student') {
                                customCard.append(customCardBody);
                                containerStudent.append(customCard);
                            } else if (item.visa_type === 'Medical') {
                                customCard.append(customCardBody);
                                containerMedical.append(customCard);
                            } else if (item.visa_type === 'Transit') {
                                customCard.append(customCardBody);
                                containerTransit.append(customCard);
                            } else {
                                // Append to Regular Visa Container
                                customCard.append(customCardBody);
                                container.append(customCard);
                            }

                            // Set the card content
                            customCardBody.html(cardContent);
                            customCardBody.append(column1, column2, column3, column4);
                            // Append the card body to the card
                            customCard.append(customCardBody);

                            // Append the card to the card container

                            // Initialize the slider
                            // Add any additional code related to slider initialization here if needed
                        });

                        // Check if any offers were found and show/hide the "No offers" message
                        var noOffersMessage = $('#no-offers-message');
                        if (container.children().length === 0 &&
                            containerBusiness.children().length === 0 &&
                            containerStudent.children().length === 0 &&
                            containerMedical.children().length === 0 &&
                            containerTransit.children().length === 0) {
                            noOffersMessage.show();
                        } else {
                            noOffersMessage.hide();
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script>

    <script>
        function get_offer_multiple() {
            $(document).ready(function() {
                        var country = document.getElementById("travel_to").value;
                        // alert(type);
                        console.log(country);
                        $.ajax({
                                    url: '/offers/get/' + country + '/multi_entry',
                                    method: 'GET',
                                    success: function(response) {
                                            console.log(response);
                                            var container = $('#coupon-container');
                                            var containerBusiness = $('#coupon-container_bussiness');
                                            var containerMedical = $('#coupon-container_medical');
                                            var containerTransit = $('#coupon-container_transit');
                                            var containerStudent = $('#coupon-container_student');

                                            // Clear previous content
                                            container.empty();
                                            containerBusiness.empty();

                                            // Iterate over the data and generate HTML for each card
                                            $.each(response, function(index, item) {
                                                var customCard = $('<div>').addClass('coupon-container');
                                                var customCardBody = $('<div>').addClass('coupon');

                                                // Create card content using the item properties
                                                var cardContent = `
    <div class="ticket">
        <div class="card">
            <div class="card-header ${item.visa_category === 'e-visa' ? 'bg-primary text-white' : 'bg-secondary text-white'}">
                <span class="visa-type-tag">${item.visa_category === 'e-visa' ? 'E-VISA' : 'Sticker Visa'}</span>
            </div>
            <div class="card-body ${item.visa_category === 'e-visa' ? 'border-primary' : 'border-secondary'}">
                <!-- The rest of your card content here -->
                <input type="radio" name="selected_offer_current" onchange="getDocuments(${item.id})" />
                <h5 class="card-title" data-offer-id="${item.id}">Visa Price: $${item.base_rate_adult}</h5>
                <p class="card-text" id="offer_id" value="${item.id}" hidden>Visa Price: ${item.id}</p>
                <input type="hidden" id="price_offer" value="${item.base_rate_adult}" />
                <p class="card-text">Processing Time: ${item.processing_time} Working Days</p>
                <p class="card-text">Visa Validity: ${item.visa_validity} Days (From Visa Issuance Date)</p>
                <p class="card-text">Stay Validity: ${item.stay_validity} Days (From Arrival Date)</p><br>
                <a href="#" class="btn btn-primary" data-toggle="modal" onclick="getModel(${item.id},{{ session('id') }})" data-target="#myModal">View Information</a>
            </div>
        </div>
    </div>
    `;

                                                customCardBody.html(cardContent);
                                                customCard.append(customCardBody);
                                                var cardStyle = document.createElement("style");
                                                cardStyle.textContent = `

.custom-card-body {
    border: 1px solid #a77cb6;
}

.e-visa-border {
    border: 1px solid #00aaff;
}

.custom-radio {
    /* Add your custom radio button styles here */
    /* For example, you can change the appearance, colors, and size of the radio button */
}

.custom-button {
    background-color: #00aaff;
    color: white;
    text-decoration: none;
    /* Add any additional styles for your button here */
}

.card {
    margin-bottom: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
    margin-bottom: 0rem !important;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
}

.card-title {
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    color: #555;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
}
.selected-card {
            border: 2px solid #007bff;
        }
`;
                                                // Append the card to the container
                                                // Add your card to the desired container here
                                            });

                                            `;




                            var cardStyle = document.createElement("style");
                            cardStyle.textContent = `
                                            .card {
                                                margin - bottom: 20 px;
                                                box - shadow: 0 4 px 8 px 0 rgba(0, 0, 0, 0.2);
                                                transition: 0.3 s;
                                                margin - bottom: 0 rem!important;
                                            }

                                            .card: hover {
                                                    box - shadow: 0 8 px 16 px 0 rgba(0, 0, 0, 0.2);
                                                }

                                                .card - title {
                                                    font - weight: bold;
                                                    color: #333;
        margin-bottom: 10px;
    }

    .card-text {
        color: # 555;
                                                }

                                                .btn - primary {
                                                    background - color: #007bff;
        border-color: # 007 bff;
                                                }

                                                .btn - primary: hover {
                                                    background - color: #0069d9;
        border-color: # 0062 cc;
                                                }
                                            `;
                            // Check the visa_type to decide which container to append the card
                            if (item.visa_type === 'Bussiness') {
                                // Append to Business Visa Container
                                customCard.append(customCardBody);
                                containerBusiness.append(customCard);
                            } else if (item.visa_type === 'Student') {
                                customCard.append(customCardBody);
                                containerStudent.append(customCard);
                            } else if (item.visa_type === 'Medical') {
                                customCard.append(customCardBody);
                                containerMedical.append(customCard);
                            } else if (item.visa_type === 'Transit') {
                                customCard.append(customCardBody);
                                containerTransit.append(customCard);
                            } else {
                                // Append to Regular Visa Container
                                customCard.append(customCardBody);
                                container.append(customCard);
                            }

                            // Set the card content
                            customCardBody.html(cardContent);
                            customCardBody.append(column1, column2, column3, column4);
                            // Append the card body to the card
                            customCard.append(customCardBody);

                            // Append the card to the card container

                            // Initialize the slider

                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script>


    {{-- <script>
        function getDocuments(offer_id) {
            $(document).ready(function() {
                var country = document.querySelectorAll("offer_id").value;

                var hide_offer_id = document.getElementById("hidden_offer_id");
                hide_offer_id.value = offer_id;

                var container = $('#coupon-container_document');
                container.empty();

                console.log(offer_id);

                $.ajax({
                    url: '/visa/offers/rules/' + offer_id,
                    method: 'GET',
                    success: function(response) {
                        var container = $('#coupon-container_document');
                        console.log(response);
                        if (response.length === 0) {
                            container.empty();
                            return;
                        }

                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {
                            var customCard = $('<div>').addClass('coupon-container_document');
                            var customCardBody = $('<div>').addClass('coupon');

                            // Create card content using the item properties

                            //                             var cardContent = `

                        //                            <div class="ticket">
                        //     <h5 class="custom-card-text">${item.document_name}</h5>
                        //     <div class="file-input">
                        //         <label for="formFile" class="form-label"></label>
                        //         <input type="hidden" name="documents_name[]" value ="documents_${item.document_name}" >
                        //         <input class="form-control" type="file" id="imageInput" onchange="viewImages()" accept=".jpg, .png, .pdf" name="documents_${item.document_name}[]" id="formFile" multiple>
                        //     </div>
                        // </div>
                        //                   `;

                            var cardContent = `

                            <div class="ticket">
    <h5 class="custom-card-title">
        <i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; ${item.document_name}
    </h5>
    <hr>
    <p class="custom-card-description text-muted">${item.document_description}</p>
    <div class="file-input">
        <label for="formFile" class="form-label btn btn-primary custom-upload-button">
            Upload Document
            <input type="file" class="form-control" id="formFile" style="display: none;">
        </label>
    </div>
</div>



`;

                            // Set the card content
                            customCardBody.html(cardContent);

                            // Append the card body to the card
                            customCard.append(customCardBody);

                            // Append the card to the container
                            container.append(customCard);
                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script> --}}

    {{-- <script>
        function getDocuments(offer_id) {
            $(document).ready(function() {
                var country = document.querySelectorAll("offer_id").value;

                var hide_offer_id = document.getElementById("hidden_offer_id");
                hide_offer_id.value = offer_id;

                var container = $('#coupon-container_document');
                var container_1 = $('#coupon-container_document_1');

                container.empty();
                container_1.empty();

                console.log(offer_id);

                $.ajax({
                    url: '/visa/offers/rules/' + offer_id,
                    method: 'GET',
                    success: function(response) {
                        var container = $('#coupon-container_document');
                        var container_1 = $('#coupon-container_document_1');
                        console.log(response);
                        if (response.length === 0) {
                            container.empty();
                            container_1.empty();
                            return;
                        }

                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {


                            // Check if visa_type is 'conditionally' and add the class accordingly
                            if (item.visa_type === 'conditionally') {
                                console.log(item.visa_type);
                                customCard = $('<div>').addClass('coupon-container_document_1');
                            } else {
                                customCard = $('<div>').addClass('coupon-container_document');
                            }
                            var customCardBody = $('<div>').addClass('coupon');

                            // Create card content using the item properties

                            var cardContent = `
                                <div class="ticket">
                                    <h5 class="custom-card-text"><i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; ${item.document_name}</h5>
                                    <hr>
                                    <p class="custom-card-text" style="color:gray;">${item.document_description}</p>
                                    <div class="file-input">
                                        <label for="formFile" class="form-label"></label>
                                        <input type="hidden" name="documents_name[]" value="documents_${item.document_name}">
                                    </div>
                                </div>
                            `;

                            // Set the card content
                            customCardBody.html(cardContent);

                            // Append the card body to the card
                            customCard.append(customCardBody);

                            // Append the card to the container
                            // container.append(customCard);
                            if (item.visa_type === 'conditionally') {
                                $('#coupon-container_document_1').append(customCard);
                            } else {
                                $('#coupon-container_document').append(customCard);
                            }
                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script> --}}
    <script>
        function getDocuments(offer_id) {
            $(document).ready(function() {
                var country = document.querySelectorAll("offer_id").value;

                var hide_offer_id = document.getElementById("hidden_offer_id");
                hide_offer_id.value = offer_id;

                var container = $('#coupon-container_document');
                var container_1 = $('#coupon-container_document_1');

                container.empty();
                container_1.empty();

                console.log(offer_id);

                $.ajax({
                    url: '/visa/offers/rules/' + offer_id,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);

                        if (response.length === 0) {
                            // Display "No Data Found" message when the response is empty
                            $('#coupon-container_document').html('<p style="font-size: 16px; font-weight: bold; padding-left: 20px;">No Data Found</p>');
                            $('#coupon-container_document_1').html('<p style="font-size: 16px; font-weight: bold; padding-left: 20px;">No Data Found</p>');
                            return;
                        }

                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {
                            var customCard;

                            // Check if visa_type is 'conditionally' and add the class accordingly
                            if (item.visa_type === 'conditionally') {
                                console.log(item.visa_type);
                                customCard = $('<div>').addClass('coupon-container_document_1');
                            } else {
                                customCard = $('<div>').addClass('coupon-container_document');
                            }
                            var customCardBody = $('<div>').addClass('coupon');

                            // Create card content using the item properties

                            var cardContent = `
                            <div class="ticket">
                                <h5 class="custom-card-text"><i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; ${item.document_name}</h5>
                                <hr>
                                <p class="custom-card-text" style="color:gray;">${item.document_description}</p>
                                <div class="file-input">
                                    <label for="formFile" class="form-label"></label>
                                    <input type="hidden" name="documents_name[]" value="documents_${item.document_name}">
                                </div>
                            </div>
                        `;

                            // Set the card content
                            customCardBody.html(cardContent);

                            // Append the card body to the card
                            customCard.append(customCardBody);

                            // Append the card to the appropriate container
                            if (item.visa_type === 'conditionally') {
                                $('#coupon-container_document_1').append(customCard);
                            } else {
                                $('#coupon-container_document').append(customCard);
                            }
                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
        }
    </script>


    <script>
        function viewImages() {
            const imageInput = document.getElementById('fileInput');
            const imageContainer = document.getElementById('imageContainer');
            imageContainer.innerHTML = ''; // Clear previous images

            const files = imageInput.files;

            for (const file of files) {
                if (file) {
                    const reader = new FileReader();

                    reader.onload = (e) => {
                        const imageUrl = e.target.result;
                        const imagePreview = document.createElement('div');
                        imagePreview.classList.add('image-preview');
                        const image = document.createElement('img');
                        image.src = imageUrl;
                        imagePreview.appendChild(image);

                        const deleteButton = document.createElement('button');
                        deleteButton.innerText = 'X';
                        deleteButton.classList.add('delete-button');
                        deleteButton.addEventListener('click', () => {
                            imagePreview.remove();
                        });
                        imagePreview.appendChild(deleteButton);

                        imageContainer.appendChild(imagePreview);
                    };

                    reader.readAsDataURL(file);
                }
            }
        }
    </script>


    <script>
        // Get the input element
        var fromDateInput = document.getElementById('from_date');

        // Get today's date in the format "YYYY-MM-DD"
        var today = new Date().toISOString().split('T')[0];

        // Set the "min" attribute of the input to today's date
        fromDateInput.setAttribute('min', today);
    </script>
    <script>
        var fromDateInput = document.getElementById('to_date');


        var today = new Date().toISOString().split('T')[0];


        fromDateInput.setAttribute('min', today);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- JavaScript code to synchronize the selected date -->
    <script>
        const dateInput = document.getElementById("from_date");
        const datePickerDropdown = document.getElementById("datePickerDropdown");
        const datePicker = document.getElementById("from_date_picker");


        dateInput.addEventListener("focus", function() {
            datePicker.min = getTodayDate(); // Set the minimum selectable date to today
            datePickerDropdown.style.display = "block";
        });


        document.addEventListener("click", function(event) {
            if (!datePickerDropdown.contains(event.target) && event.target !== dateInput) {
                datePickerDropdown.style.display = "none";
            }
        });


        datePicker.addEventListener("change", function() {
            dateInput.value = datePicker.value;
        });

        // When the user types in the input field, update the date picker value
        dateInput.addEventListener("input", function() {
            datePicker.value = dateInput.value;
        });

        // Function to get today's date in the format yyyy-mm-dd
        // Get the input element
        var fromDateInput = document.getElementById('from_date');

        // Get today's date as a JavaScript Date object
        var today = new Date();

        // Add three days to today's date (tomorrow + 1 day)
        today.setDate(today.getDate() + 3);

        // Format the date as "YYYY-MM-DD"
        var minDate = today.toISOString().split('T')[0];

        // Set the "min" attribute of the input to one day after tomorrow's date
        fromDateInput.setAttribute('min', minDate);
    </script>

    <script>
        const toDateInput = document.getElementById("to_date");
        const datePickerDropdownTo = document.getElementById("datePickerDropdownTo");
        const toDatePicker = document.getElementById("to_date_picker");

        // Show the date picker when the input field is focused
        toDateInput.addEventListener("focus", function() {
            toDatePicker.min = getTodayDate(); // Set the minimum selectable date to today
            datePickerDropdownTo.style.display = "block";
        });

        // Hide the date picker when the user clicks outside of it
        document.addEventListener("click", function(event) {
            if (!datePickerDropdownTo.contains(event.target) && event.target !== toDateInput) {
                datePickerDropdownTo.style.display = "none";
            }
        });

        // When the date picker value changes, update the text input
        toDatePicker.addEventListener("change", function() {
            toDateInput.value = toDatePicker.value;
        });

        // When the user types in the input field, update the date picker value
        toDateInput.addEventListener("input", function() {
            toDatePicker.value = toDateInput.value;
        });

        // Function to get today's date in the format yyyy-mm-dd
        function getTodayDate() {
            const today = new Date();
            const month = today.getMonth() + 1 < 10 ? `0${today.getMonth() + 1}` : today.getMonth() + 1;
            const day = today.getDate() < 10 ? `0${today.getDate()}` : today.getDate();
            return `${today.getFullYear()}-${month}-${day}`;
        }
    </script>

    <script>
        const myButton = document.getElementById("button_new_tab");

        myButton.addEventListener("click", function() {
            const url = "/generate-pdf "; // Replace this with the URL you want to open in the new tab
            const newTab = window.open(url, "_blank");
            newTab
                .focus(); // Optional: Set focus to the new tab (some browsers might automatically focus the new tab)
        });
    </script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#loading-screen').css('display', 'none');
            }, 10);

        });
    </script>
    <script>
        $(document).ready(function() {
            $('#nationality, #travel_to').on('change', function() {
                if ($('#nationality').val() !== '' && $('#travel_to').val() !== '') {
                    // Both nationality and destination selected, show the "offers" section
                    $('#offers-section').show();
                } else {
                    // At least one option is not selected, hide the "offers" section
                    $('#offers-section').hide();
                }
            });

            // AJAX to fetch destination cities when "destination" changes
            $('#travel_to').on('change', function() {
                let selectedDestination = $(this).val();
                if (selectedDestination) {
                    $.ajax({
                        url: '/get-cities', // Replace with your route for fetching cities
                        data: {
                            destination: selectedDestination
                        },
                        success: function(data) {
                            // Update the destination cities in your HTML, e.g., in a select element
                            $('#destination-cities').html(data);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>