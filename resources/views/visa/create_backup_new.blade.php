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
    <style>
        [class*=sidebar-dark-] .sidebar a {
            color: #565656 !important;
        }

        [class*=sidebar-dark-] .sidebar a:hover {
            color: #090909 !important;
            background-color: #fde4ad !important;
        }
    </style>
    <style>
        .custom-input {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: 5px;
        }

        #nationality {
            font-size: 17px !important;
            line-height: 1.0rem !important;
            vertical-align: top;
            margin-bottom: 0.5rem;
            font-family: system-ui;
        }

        #traveling {
            font-size: 17px !important;
            line-height: 1.0rem !important;
            vertical-align: top;
            margin-bottom: 0.5rem;
            font-family: system-ui;
        }

        #startdate {
            font-size: 15px !important;
            /* line-height: 1.0rem; */
            vertical-align: top;
            margin-bottom: 0.5rem;
            font-family: system-ui;
        }

        #enddate {
            font-size: 17px !important;
            /* line-height: 1.0rem; */
            vertical-align: top;
            margin-bottom: 0.5rem;
            font-family: system-ui;
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
            background-color: #039afe;
            color: #ffffff;
            box-shadow: none;
            font-size: medium;
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        #coupon-container_document {
            display: flex;
            flex-direction: row-reverse;
            flex-wrap: wrap;
            justify-content: flex-end;
            align-items: center;
            align-content: center;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }

        .card .card-description {
            margin-bottom: 0.875rem;
            font-weight: 700;
            color: #393939;
            font-family: system-ui;
        }

        .tabset>input[type="radio"] {
            position: absolute;
            left: -200vw;
        }

        .tabset .tab-panel {
            display: none;
        }

        .tabset>input:first-child:checked~.tab-panels>.tab-panel:first-child,
        .tabset>input:nth-child(3):checked~.tab-panels>.tab-panel:nth-child(2),
        .tabset>input:nth-child(5):checked~.tab-panels>.tab-panel:nth-child(3),
        .tabset>input:nth-child(7):checked~.tab-panels>.tab-panel:nth-child(4),
        .tabset>input:nth-child(9):checked~.tab-panels>.tab-panel:nth-child(5),
        .tabset>input:nth-child(11):checked~.tab-panels>.tab-panel:nth-child(6) {
            display: block;
        }

        .tabset>label {
            position: relative;
            display: inline-block;
            padding: 15px 15px 25px;
            border: 1px solid transparent;
            border-bottom: 0;
            cursor: pointer;
            font-weight: 600;
        }

        .tabset>label::after {
            content: "";
            position: absolute;
            left: 15px;
            bottom: 10px;
            width: 22px;
            height: 4px;
            background: #8d8d8d;
        }

        input:focus-visible+label {
            outline: 2px solid rgba(0, 102, 204, 1);
            border-radius: 3px;
        }

        .tabset>label:hover,
        .tabset>input:focus+label,
        .tabset>input:checked+label {
            color: #06c;
        }

        .tabset>label:hover::after,
        .tabset>input:focus+label::after,
        .tabset>input:checked+label::after {
            background: #06c;
        }

        .tabset>input:checked+label {
            border-color: #ccc;
            border-bottom: 1px solid #fff;
            margin-bottom: -1px;
        }

        .tab-panel {
            padding: 30px 0;
            border-top: 1px solid #ccc;
        }

        .tabset {
            width: 100%;
        }

        .bi::before,
        [class^="bi-"]::before,
        [class*=" bi-"]::before {
            display: inline-block;
            font-family: bootstrap-icons !important;
            font-style: normal;
            font-weight: normal !important;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            color: black;
            vertical-align: -0.125em;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
    <style>
        .coupon-container {
            display: flex;
            justify-content: left;
            align-items: left;
            float: left;

        }

        .coupon {
            /* background-color: #f5f5f5;
            border: 1px solid #ccc; */
            border-radius: 5px;
            padding: 10px;
            margin-right: 10px;
        }

        .coupon-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .coupon-description {
            margin-bottom: 5px;
            margin-top: 5%;
        }
    </style>
    <style>
        .custom-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-right: 10px;
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .custom-card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .custom-card-text {
            /* margin-bottom: 5px; */
            margin-top: 5px;
        }

        .custom-card-button {
            background-color: #f5a720;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
    <style>
        .coupon-container {
            display: flex;
            justify-content: left;
            align-items: center;
        }

        .coupon {
            /* background-color: #f5f5f5;
            border: 1px solid #ccc; */
            border-radius: 5px;
            padding: 10px;
            margin-right: 10px;
        }

        .coupon-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .coupon-description {
            margin-bottom: 5px;
        }
    </style>

    <style>
        /* Add your custom styles to the input field */
        .custom-date-picker {
            /* Add your custom styling here */
            position: relative;
        }

        /* Style the date picker dropdown */
        .date-picker-dropdown {
            position: absolute;
            z-index: 1;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px;
            /* Add your custom styling for the dropdown */
            display: none;
        }
    </style>
    <style>
        /* Add your custom styles to the input field */
        .custom-date-picker {
            /* Add your custom styling here */
            position: relative;
        }

        /* Style the date picker dropdown */
        .date-picker-dropdown {
            position: absolute;
            z-index: 1;
            background-color: #fff;
            border: 1px solid #ccc;
            padding: 5px;
            /* Add your custom styling for the dropdown */
            display: none;
        }
    </style>

    <style>
        .dropzone {
            border: 2px dashed #ccc;
            padding: 20px;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
            background-color: #f8f9fa;
        }

        .dropzone:hover {
            background-color: #f8f9fa;
        }

        /* Hide the default file input */
        #fileInput {
            display: none;
        }
    </style>

    <style>
        /* Styling for the date picker dropdown */
        .date-picker-dropdown {
            display: none;
            /* Hide the dropdown by default */
            position: absolute;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Styling for the date picker input field */
        .form-control {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Additional styling for the date picker dropdown */
        /* Customize these styles as per your preference */
        .date-picker-dropdown input[type="date"] {
            width: 150px;
            padding: 5px;
        }
    </style>

    <style>
        .ticket {
            border: 1px solid #c7c7c7;
            padding: 10px;
            padding-bottom: 1px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0px -1px 15px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 0 auto;
            height: fit-content;
            /* display: flex; */
            justify-content: space-between;
            /* Aligns items to both ends */
        }

        .file-input {
            display: flex;
            align-items: center;
            /* Vertically center align the input elements */
        }

        .file-input input {
            margin-left: 10px;
            /* Add some spacing between the label and the input */
        }


        .custom-card-text {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .form-label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            /* padding: 10px; */
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        /* Optional: If you want to style the file input button */
        .form-control[type="file"] {
            cursor: pointer;
            background-color: #fff;
            color: #555;
        }

        .form-control[type="file"]::-webkit-file-upload-button {
            cursor: pointer;
            padding: 8px 12px;
            border: 2px solid #555;
            border-radius: 4px;
            background-color: #f9f9f9;
            font-size: 16px;
        }

        .form-control[type="file"]::before {
            content: "Browse";
            /* Change this to your desired button text */
        }

        .form-control[type="file"]:hover::before {
            border-color: #333;
        }

        .form-control[type="file"]:focus::before {
            outline: none;
            border-color: #555;
        }

        /* Optional: If you want to style the multiple file selection text */
        .form-control[type="file"]::after {
            content: "Choose files";
            /* Change this to your desired text */
            font-size: 14px;
            display: block;
            margin-top: 5px;
        }

        /* Optional: If you want to style the file names after selection */
        .form-control[type="file"]:not(:focus)+.selected-files::before {
            content: attr(data-placeholder);
            font-size: 14px;
            color: #555;
        }

        /* Optional: If you want to show the selected file names */
        .form-control[type="file"]:focus+.selected-files::before {
            content: attr(data-content);
            font-size: 14px;
            color: #333;
        }

        .required-field {
            color: red;
        }
    </style>

    <style>
        .image-preview {
            display: inline-block;
            margin: 10px;
            border: 1px solid #ccc;
            padding: 5px;
        }

        .image-preview img {
            max-width: 187px;
            max-height: 132px;
        }

        .delete-button {
            display: block;
            margin-top: 5px;
            background-color: #ff5a5a;
            color: white;
            border: none;
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 4px;
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
                <form action="/visa/store_applications" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="continer-fluid">
                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-description">Apply New Visa</h3>
                                        <div class="form-sample">
                                            <!-- <p class="card-description">
                      Basic info
                    </p> -->
                                            <hr>
                                            <br>
                                            <div class="row form-group">
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-1.5 col-form-label"
                                                            id="nationality">Nationality <span
                                                                class="required-field">*</span></label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="nationality"
                                                                id="nationality" required>
                                                                <option value="">Select Nationality</option>
                                                                @foreach ($country as $option)
                                                                    <option name="nationality"
                                                                        value="{{ $option->country_name }}">
                                                                        {{ $option->country_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-1.5 col-form-label traveling"
                                                            id="traveling">Destination <span
                                                                class="required-field">*</span></label>

                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="destination"
                                                                id="travel_to" onchange="getOffer()" required>
                                                                <option value="">Select Destination</option>
                                                                @foreach ($country as $option)
                                                                    <option name="travel_to" id="travel_to"
                                                                        value="{{ $option->country_name }}">
                                                                        {{ $option->country_name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
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
                                                    <div class="form-group row ">
                                                        <label class="col-sm-1.5 " id="startdate">From Date<span
                                                                class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <!-- Single input field for both typing and date selection -->
                                                                <input type="text" id="from_date" name="from_date"
                                                                    class="form-control" required>

                                                                <!-- Date picker dropdown -->
                                                                <div class="date-picker-dropdown"
                                                                    id="datePickerDropdown">
                                                                    <input type="date" id="from_date_picker"
                                                                        name="from_date_picker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label class="col-sm-1.5 " id="enddate">To Date<span
                                                                class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <!-- Single input field for both typing and date selection -->
                                                                <input type="text" id="to_date" name="to_date"
                                                                    class="form-control" required>

                                                                <!-- Date picker dropdown -->
                                                                <div class="date-picker-dropdown"
                                                                    id="datePickerDropdownTo">
                                                                    <input type="date" id="to_date_picker"
                                                                        name="to_date_picker">
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
                                    <div class="card-body">
                                        <div class="form-sample">
                                            <p class="card-description">
                                                Visa Types
                                            </p>
                                            <hr>
                                            <div class="switch-field">
                                                <input type="radio" id="radio-one-1" name="switch-one-1"
                                                    value="standard visa" checked="">
                                                <label for="radio-one-1">Standard Visa</label>
                                                <input type="radio" id="radio-two-1" name="switch-one-1"
                                                    value="express visa">
                                                <label for="radio-two-1">Express Visa</label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="form-sample">
                                            <p class="card-description">
                                                Entry Type
                                            </p>
                                            <hr>
                                            {{-- <div class="switch-field">
                                            <input type="radio" id="radio-one-1" name="switch-one-2"
                                                value="single_entry" checked="">
                                            <label for="radio-one-2">Single Entry</label>
                                            <input type="radio" id="radio-two-2" name="switch-one-2"
                                                value="multi_entry" onselect="">
                                            <label for="radio-two-2">Multiple Entry</label>
                                        </div> --}}
                                            <div class="switch-field">
                                                <input type="radio" id="radio-one-2" name="switch-one-2"
                                                    checked="" onchange="getOffer()">

                                                <label for="radio-one-2">Single Entry</label>
                                                <input type="radio" id="radio-two-3" name="switch-one-2"
                                                    onchange="get_offer_multiple()">
                                                <label for="radio-two-3">Multiple Entry</label>
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
                                                <select class="form-control" id="currency_code"
                                                    style="
                                                width: fit-content;
                                                float: right;
                                                margin-top: 2%;
                                            "
                                                    onchange="curreny_update()">
                                                    <option value="">Currency</option>
                                                    @foreach ($currency as $option)
                                                        <option name="currency_values"
                                                            value="{{ $option->country_currency }}">
                                                            {{ $option->country_currency }} -
                                                            {{ $option->country_name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>



                                            <hr>
                                            <div class="tabset">
                                                <input type="radio" name="tabset" id="tab1"
                                                    aria-controls="marzen" checked>
                                                <label for="tab1">Tourist</label>

                                                <input type="radio" name="tabset" id="tab2"
                                                    aria-controls="rauchbier">
                                                <label for="tab2">Business</label>

                                                <input type="radio" name="tabset" id="tab3"
                                                    aria-controls="dunkles">
                                                <label for="tab3">Student</label>

                                                <input type="radio" name="tabset" id="tab4"
                                                    aria-controls="popcorn">
                                                <label for="tab4">Transit</label>

                                                <input type="radio" name="tabset" id="tab5"
                                                    aria-controls="sweet">
                                                <label for="tab5">Medical</label>

                                                <div class="tab-panels">
                                                    <section id="marzen" class="tab-panel">
                                                        <!-- <h2>6A. Märzen</h2> -->
                                                        <div id="coupon-container"></div>
                                                        <div id="no-offers-message" style="display: none;">No offers
                                                            for
                                                            Tourist </div>
                                                    </section>
                                                    <section id="rauchbier" class="tab-panel">
                                                        <!-- <h2>6B. Rauchbier</h2> -->
                                                        <div id="coupon-container_bussiness"></div>
                                                        <div id="no-offers-message" style="display: none;">No offers
                                                            for
                                                            Tourist </div>
                                                    </section>
                                                    <section id="dunkles" class="tab-panel">
                                                        <!-- <h2>6C. Dunkles Bock</h2> -->
                                                        <div id="coupon-container_student"></div>
                                                        <div id="no-offers-message" style="display: none;">No offers
                                                            for
                                                            Tourist </div>

                                                    </section>
                                                    <section id="popcorn" class="tab-panel">
                                                        <!-- <h2>6C. Dunkles Bock</h2> -->
                                                        <div id="coupon-container_transit"></div>
                                                        <div id="no-offers-message" style="display: none;">No offers
                                                            for
                                                            Tourist </div>

                                                    </section>
                                                    <section id="sweet" class="tab-panel">
                                                        <!-- <h2>6C. Dunkles Bock</h2> -->
                                                        <div id="coupon-container_medical"></div>
                                                        <div id="no-offers-message" style="display: none;">No offers
                                                            for
                                                            Tourist </div>

                                                    </section>

                                                    {{-- Model Start --}}


                                                    <div id="myModal" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">
                                                            <!-- Modal content -->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"
                                                                        style="text-align: center;">Visa Offer Details
                                                                    </h4>
                                                                    <h4 class="modal-title"
                                                                        style="text-align: center;">


                                                                    </h4><br>

                                                                </div><br>
                                                                <h5 id="description"
                                                                    style="margin-left: 4%;font-weight:700;">Package
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
                                                                                <td id="TaxType">GST(18%)</td>
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
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                    {{-- Model END --}}
                                                    <input type="hidden" id="hidden_offer_id"
                                                        name="offer_secrate_field" />

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
                                                <div class="col-md-6">
                                                    <h4 class="card-description">Documents Required</h4>
                                                    <hr>
                                                </div>

                                                <div class="col-md-6 text-md-right">
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
                                                <div class="col-md-6">
                                                    <h5 class="card-description">Additional Documents Required</h5>
                                                    <hr>
                                                </div>

                                                <div class="col-md-6 text-md-right">
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
                                    <div class="card-body "
                                        style="background-color: #f8f9fa; border: 2px dash black;">
                                        <h3 class="card-description">Upload Documents</h3>
                                        <div class="container mt-5">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="dropzone" id="myDropzone">
                                                        <label id="myDropzone" for="fileInput">

                                                            <h4>Drag and Drop Files Here</h4>
                                                            <input type="file" name="dataFile[]"
                                                                onchange="viewImages()" id="fileInput" multiple>

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
                                        <div class="form-sample">
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


                    <input type="submit" class="float-right btn btn-success" value="Organise Application"
                        style="
                    margin-right: 2%;
                    margin-bottom: 2%;
                    margin-top: 1%;
                    width: 166px;
                    height  : 50px;
                ">
                    <input type="submit" class="float-right btn btn-danger" value="Archive Application"
                        style="
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
    <script>
        // Initialize Swiper when the document is ready
        $(document).ready(function() {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 'auto', // Show as many slides as possible
                spaceBetween: 10, // Space between slides
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
            });
        });
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
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="/publicdist/js/pages/dashboard.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- Your HTML code remains the same -->

    {{-- <script>
        function curreny_update() {
            var currency = document.getElementById('currency_code');
            var priceElements = document.querySelectorAll('#price_offer');
            var targetElements = document.querySelectorAll('#price_offer_1');
            var checkk = document.querySelectorAll('.checkk');
            console.log(checkk.length);
            var len = checkk.length;

            console.log(currency.value);
            console.log(priceElements);
            console.log(typeof priceElements);
            console.log(targetElements);

            if (!currency) {
                console.error('Element with ID "currency_code" not found.');
                return;
            }



            if (currency.value === '') {
                // If no currency is selected, reset the offer_price elements to their original values
                // for (var i = 0; i < priceElements.length; i++) {
                //     targetElements[i].innerHTML = "Visa Price: " + parseFloat(priceElements[i].value).toFixed(2);
                //     targetElements1.innerHTML = "hwy";
                // }
            } else {
                $.ajax({
                    url: '/api/convert/' + currency.value,
                    method: 'GET',
                    success: function(response) {
                        console.log(response.offerinfo[0].country_rate);
                        var countryRate = parseFloat(response.offerinfo[0].country_rate);

                        // Loop through all price_offer elements and update the corresponding offer_price element
                        for (var i = 0; i < priceElements.length; i++) {
                            var currentPrice = parseFloat(priceElements[i].value);
                            var calculatedPrice = currentPrice * countryRate;

                            // Target the specific h5 element by its ID
                            var targetElement = document.getElementById('price_offer_1');
                            console.log(targetElement);
                            // Update the content of the h5 element
                            if (targetElement) {
                                targetElement.innerHTML = "Visa Price: " + calculatedPrice.toFixed(2);
                            }

                            console.log("sa");
                            // $('#price_offer_11').text('dsada');
                        }

                        for (var t = 1; t <= checkk.length; t++) {
                            console.log("chek: " + $('#price_offer' + t).val());
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
                // Make sure that the ID "price_offer_1"
                // is unique in your HTML, and this code should update the content of that specific < h5 >
                //     element correctly when the AJAX request succeeds.






            }
        }
    </script> --}}

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
                            <div class="card">
                                <div class="card">
    <div class="card-header" style="${item.visa_category === 'e-visa' ? 'background-color:#00aaff;color:white;' : 'background-color:#a77cb6;color:white;'}">
        <!-- Add the tag here based on the type of visa -->
        <!-- Assuming you have a property 'type' in the 'item' object indicating the visa type -->
        <span class="visa-type-tag">${item.visa_category === 'e-visa' ? 'E-VISA' : 'Sticker Visa'}</span>
    </div>
    <div class="card-body" style="${item.visa_category === 'e-visa' ? 'border :1px solid #00aaff;' : 'border :1px solid #a77cb6;'}">
        <!-- The rest of your card content here -->
        <input type="radio" name="name="selected_offer_current" onchange="getDocuments(${item.id})" />
        <h5 class="card-title" data-offer-id="${item.id}">Visa Price:&nbsp;$ ${item.base_rate_adult}</h5>
<input type="hidden" name="selected_offer_id" data-offer-id="${item.id}" value="${item.id}" class="checkk" />

        <input type="hidden" id="price_offer" value="${item.base_rate_adult}" />
        <p class="card-text">Processing Time: ${item.processing_time} Working Days</p>
        <p class="card-text">Visa Validity: ${item.visa_validity} Days (From Visa Issuance Date)</p>
        <p class="card-text">Stay Validity: ${item.stay_validity} Days (From Arrival Date)</p>
       <a href="#" class="btn btn-primary" data-toggle="modal" onclick="getModel(${item.id},{{ session('id') }})" data-target="#myModal" style="margin-top: 6px;">View Information</a>

    </div>
</div>


`;

                            var cardStyle = document.createElement("style");
                            cardStyle.textContent = `
.card {
    margin-bottom: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    transition: 0.3s;
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

                            // Create four columns
                            var column1 = $('<div>').addClass('col-md-4');
                            var column2 = $('<div>').addClass('col-md-4');
                            var column3 = $('<div>').addClass('col-md-4');
                            var column4 = $('<div>').addClass('col-md-4');

                            // Create card content using the item properties
                            var cardContent = `
                            <div class="ticket">
    <div class="card">
        <div class="card-header" style="${item.visa_category === 'e-visa' ? 'background-color:#00aaff;color:white;' : 'background-color:#a77cb6;color:white;'}">
            <!-- Add the tag here based on the type of visa -->
            <!-- Assuming you have a property 'type' in the 'item' object indicating the visa type -->
            <span class="visa-type-tag">${item.visa_category === 'e-visa' ? 'E-VISA' : 'Sticker Visa'}</span>
        </div>
        <div class="card-body" style="${item.visa_category === 'e-visa' ? 'border :1px solid #00aaff;' : 'border :1px solid #a77cb6;'}">
            <!-- The rest of your card content here -->
            <input type="radio" name="selected_offer_current" onchange="getDocuments(${item.id})" />
            <h5 class="card-title" id="offer_price" data-price="${item.base_rate_adult}">Visa Price:&nbsp;$ ${item.base_rate_adult}</h5>
            <p class="card-text" id="offer_id" value="${item.id}" hidden>Visa Price: ${item.id}</p>
            <input type="hidden" id="price_offer" value="${item.base_rate_adult}" />
            <b><p class="card-text">Processing Time: ${item.processing_time} Working Days</p></b>
            <b><p class="card-text">Visa Validity: ${item.visa_validity} Days (From Visa Issuance Date)</p></b>
            <b><p class="card-text">Stay Validity: ${item.stay_validity} Days (From Arrival Date)</p></b>
            <a href="#" class="btn btn-primary" data-toggle="modal" onclick="getModel(${item.id})" data-target="#myModal" style="margin-top: 6px;">View Information</a>

        </div>
    </div>
    </div>
`;




                            var cardStyle = document.createElement("style");
                            cardStyle.textContent = `
    .card {
        margin-bottom: 20px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
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
<h5 class="custom-card-text"><i class="fa fa-file-text-o" aria-hidden="true"></i> &nbsp; ${item.document_name}</h5>
<hr>
<p class="custom-card-text" style="color:gray;">${item.document_description}</p>
<div class="file-input">
<label for="formFile" class="form-label"></label>
<input type="hidden" name="documents_name[]" value ="documents_${item.document_name}" >

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
                            $('#coupon-container_document').html('<p>No Data Found</p>');
                            $('#coupon-container_document_1').html('<p>No Data Found</p>');
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
        // Get the input element
        var fromDateInput = document.getElementById('to_date');

        // Get today's date in the format "YYYY-MM-DD"
        var today = new Date().toISOString().split('T')[0];

        // Set the "min" attribute of the input to today's date
        fromDateInput.setAttribute('min', today);
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getModel(id, user_id) {
            // Set the ID in the modal when it's shown
            $('#modalOfferId').text('ID: ' + id);
            console.log(user_id);
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
                        var visaPriceText = offer.currency_name ? offer.currency_name + offer.base_rate_adult :
                            '$' + offer.base_rate_adult;
                        $('#visaPrice').text(visaPriceText);
                        // Populate the table cells with data from the server
                        $('#visaType').text(offer.visa_type);
                        // $('#visaPrice').text(offer.currency_name + offer.base_rate_adult);
                        $('#description').text(description);
                        $('#TaxType').text(offer.tax_name ||
                            'GST'); // Set a default value 'GST' if offer.tax_name is not defined or falsy

                        // Assuming that offer.base_rate_adult is a string representing a numeric value
                        var baseRateAdult = parseFloat(offer.base_rate_adult);

                        // Calculate the GST amount (18% of baseRateAdult if offer.tax_percentage is not defined or falsy)
                        var taxPercentage = offer.tax_percentage || 18;
                        var gstAmount = (baseRateAdult * taxPercentage) / 100;

                        // Calculate the total price (base rate + GST)
                        var totalPrice = baseRateAdult + gstAmount;
                        var currency = offer.currency_name || '$';

                        // Display the base rate and GST in the #taxPrice element
                        $('#taxPrice').text(gstAmount.toFixed(2));




                        $('#serviceType').text('Service Fees');
                        $('#servicePrice').text(currency + '' + offer.govt_fees_adult);
                        $('#totalPrice').text(currency + '' + (parseFloat(gstAmount) + (parseFloat(
                            offer
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
    <!-- JavaScript code to synchronize the selected date -->
    <script>
        const dateInput = document.getElementById("from_date");
        const datePickerDropdown = document.getElementById("datePickerDropdown");
        const datePicker = document.getElementById("from_date_picker");

        // Show the date picker when the input field is focused
        dateInput.addEventListener("focus", function() {
            datePicker.min = getTodayDate(); // Set the minimum selectable date to today
            datePickerDropdown.style.display = "block";
        });

        // Hide the date picker when the user clicks outside of it
        document.addEventListener("click", function(event) {
            if (!datePickerDropdown.contains(event.target) && event.target !== dateInput) {
                datePickerDropdown.style.display = "none";
            }
        });

        // When the date picker value changes, update the text input
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
</body>

</html>
