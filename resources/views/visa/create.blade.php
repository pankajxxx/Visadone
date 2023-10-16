<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visadone Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../vendors/feather/feather.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{ asset('/plugins/custom-css/style.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <style>
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
            background-color: #007bff;
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
            padding: 10px;
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
    </style> -->

    <script>
        const countries = {
            USA: {
                states: ["New York", "California", "Texas"],
                cities: {
                    "New York": ["New York City", "Buffalo"],
                    California: ["Los Angeles", "San Francisco"],
                    Texas: ["Houston", "Austin"]
                }
            },
            Canada: {
                states: ["Ontario", "Quebec", "British Columbia"],
                cities: {
                    Ontario: ["Toronto", "Ottawa"],
                    Quebec: ["Montreal", "Quebec City"],
                    "British Columbia": ["Vancouver", "Victoria"]
                }
            }
            // Add more countries, states, and cities as needed
        };

        function updateStates() {
            const countrySelect = document.getElementById("countrySelect");
            const stateSelect = document.getElementById("stateSelect");
            const citySelect = document.getElementById("citySelect");

            // Clear previous options
            stateSelect.innerHTML = "<option value=''>Select State</option>";
            citySelect.innerHTML = "<option value=''>Select City</option>";

            const selectedCountry = countrySelect.value;
            if (selectedCountry !== "") {
                const states = countries[selectedCountry].states;

                // Add state options
                for (let i = 0; i < states.length; i++) {
                    const option = document.createElement("option");
                    option.value = states[i];
                    option.text = states[i];
                    stateSelect.appendChild(option);
                }
            }
        }

        function updateCities() {
            const countrySelect = document.getElementById("countrySelect");
            const stateSelect = document.getElementById("stateSelect");
            const citySelect = document.getElementById("citySelect");

            // Clear previous options
            citySelect.innerHTML = "<option value=''>Select City</option>";

            const selectedCountry = countrySelect.value;
            const selectedState = stateSelect.value;
            if (selectedCountry !== "" && selectedState !== "") {
                const cities = countries[selectedCountry].cities[selectedState];

                // Add city options
                for (let i = 0; i < cities.length; i++) {
                    const option = document.createElement("option");
                    option.value = cities[i];
                    option.text = cities[i];
                    citySelect.appendChild(option);
                }
            }
        }
        window.onload = function() {
            updateStates();
        };
    </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="http://127.0.0.1:8000/images/visadone_logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://127.0.0.1:8000/images/visadone_logo.png" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="icon-menu"></span>
                </button>
                <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item nav-search d-none d-lg-block">
                        <div class="input-group">
                            <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                <span class="input-group-text" id="search">
                                    <i class="icon-search"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-success">
                                        <i class="ti-info-alt mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Just now
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-warning">
                                        <i class="ti-settings mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        Private message
                                    </p>
                                </div>
                            </a>
                            <a class="dropdown-item preview-item">
                                <div class="preview-thumbnail">
                                    <div class="preview-icon bg-info">
                                        <i class="ti-user mx-0"></i>
                                    </div>
                                </div>
                                <div class="preview-item-content">
                                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                    <p class="font-weight-light small-text mb-0 text-muted">
                                        2 days ago
                                    </p>
                                </div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="../../images/faces/face28.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                            <a class="dropdown-item">
                                <i class="ti-settings text-primary"></i>
                                Settings
                            </a>
                            <a class="dropdown-item">
                                <i class="ti-power-off text-primary"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                    <li class="nav-item nav-settings d-none d-lg-flex">
                        <a class="nav-link" href="#">
                            <i class="icon-ellipsis"></i>
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <div class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task">Add</button>
                                </div>
                            </div>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span class="offline"></span>
                                </div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" style="position:fixed; " id="sidebar" style="">
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="bi bi-speedometer"></i>
                                <span class="menu-title">&nbsp;Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/visa/create">
                                <i class="bi bi-person-lines-fill"> </i>
                                <span class="menu-title">&nbsp;Apply Visa</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/track">
                                <i class="bi bi-search"></i>
                                <span class="menu-title">&nbsp;Track Application</span>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/branch">
                                <i class="bi bi-bar-chart-fill"></i>
                                <span class="menu-title">&nbsp;Branch Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agents">
                                <i class="bi bi-box-fill"></i>
                                <span class="menu-title">
                                    Agent Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/agency">
                                <i class="bi bi-file-bar-graph-fill"></i>
                                <span class="menu-title">
                                    &nbsp;Agency Management</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/visa/offers">
                                <i class="bi bi-menu-down"></i>
                                <span class="menu-title">
                                    &nbsp;Visa Offer Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/offer/rule/get">
                                <i class="bi bi-person-lines-fill"></i>
                                <span class="menu-title">
                                    &nbsp;Document Rule Engine</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/users">
                                <i class="bi bi-person-vcard-fill"></i>
                                <span class="menu-title">
                                    &nbsp;User Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="bi bi-person-vcard-fill"></i>
                                <span class="menu-title">
                                    &nbsp;User Role Config</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/currency">
                                <i class="bi bi-currency-dollar"></i>
                                <span class="menu-title">
                                    &nbsp;Currency Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/tax">
                                <i class="bi bi-currency-dollar"></i>
                                <span class="menu-title">
                                    &nbsp;Tax Configuration</span>
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <form action="/visa/store_applications" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="content-wrapper" style="padding-left:19%;width:117%;">
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
                                                        <label class="col-sm-3 col-form-label" id="nationality">Nationality <span class="required-field">*</span></label>
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="nationality" id="nationality" required>
                                                                <option value="">Select Nationality</option>
                                                                @foreach ($country as $option)
                                                                <option name="nationality" value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}
                                                                </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <label class="col-sm-3 col-form-label traveling" id="traveling">Destination <span class="required-field">*</span></label>
                                                        {{-- <div class="col-sm-6">
                                                        <input type="text" name="travel_to" id="travel_to"
                                                            class="form-control custom-input" onchange="getOffer()" />
                                                    </div> --}}
                                                        <div class="col-sm-6">
                                                            <select class="form-control" name="destination" id="travel_to" onchange="getOffer()" required>
                                                                <option value="">Select Destination</option>
                                                                @foreach ($country as $option)
                                                                <option name="travel_to" id="travel_to" value="{{ $option->country_name }}">
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
                                                        <label class="col-sm-3 " id="startdate">From Date<span class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <!-- Single input field for both typing and date selection -->
                                                                <input type="text" id="from_date" name="from_date" class="form-control" required>

                                                                <!-- Date picker dropdown -->
                                                                <div class="date-picker-dropdown" id="datePickerDropdown">
                                                                    <input type="date" id="from_date_picker" name="from_date_picker">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group row ">
                                                        <label class="col-sm-3 " id="enddate">To Date<span class="required-field">*</span></label>
                                                        <div class="col-sm-8">
                                                            <div class="custom-date-picker">
                                                                <!-- Single input field for both typing and date selection -->
                                                                <input type="text" id="to_date" name="to_date" class="form-control" required>

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
                                    <div class="card-body">
                                        <div class="form-sample">
                                            <p class="card-description">
                                                Visa Types
                                            </p>
                                            <hr>
                                            <div class="custom-control custom-switch">
                                                <input type="radio" id="radio-one-1" name="switch-one-1" value="standard visa" class="custom-control-input" checked>
                                                <label class="custom-control-label" for="radio-one-1">Standard Visa</label>
                                                <input type="radio" id="radio-two-1" name="switch-one-1" value="express visa" class="custom-control-input">
                                                <label class="custom-control-label" for="radio-two-1">Express Visa</label>
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
                                                <input type="radio" id="radio-one-2" name="switch-one-2" checked="" onchange="getOffer()">

                                                <label for="radio-one-2">Single Entry</label>
                                                <input type="radio" id="radio-two-3" name="switch-one-2" onchange="get_offer_multiple()">
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
                                                <input type="radio" name="tabset" id="tab1" aria-controls="marzen" checked>
                                                <label for="tab1">Tourist</label>

                                                <input type="radio" name="tabset" id="tab2" aria-controls="rauchbier">
                                                <label for="tab2">Business</label>

                                                <input type="radio" name="tabset" id="tab3" aria-controls="dunkles">
                                                <label for="tab3">Student</label>

                                                <input type="radio" name="tabset" id="tab4" aria-controls="popcorn">
                                                <label for="tab4">Transit</label>

                                                <input type="radio" name="tabset" id="tab5" aria-controls="sweet">
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
                                                                    {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
                                                                    <h4 class="modal-title" style="text-align: center;">
                                                                        Modal Header</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal" style="padding-right:0%;">Close</button>
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
                                                <div class="col-md-6">
                                                    <h3 class="card-description">Documents Required</h3>
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

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body " style="background-color: #f8f9fa; border: 2px dash black;">
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


                    <input type="submit" class="btn btn-primary" value="Organize Application" style="    float: right;
                    padding-right: 1%;
                    margin-bottom: 1%;
                    margin-top: 1%;" />
                </form>


                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 |
                            All Rights
                            Reserved | VisaDone
                            <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                          with <i class="ti-heart text-danger ml-1"></i></span> -->
                    </div>
                    <!-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                            href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                      </div> -->
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/file-upload.js"></script>
    <script src="../../js/typeahead.js"></script>
    <script src="../../js/select2.js"></script>




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
        <button class="btn btn-primary" data-toggle="modal" onclick="getModel(${item.id})" data-target="#myModal" id="myBtn" style="margin-top: 6px;">Details</button>
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
            <button class="btn btn-primary" data-toggle="modal" onclick="getModel(${item.id})" data-target="#myModal" id="myBtn" style="margin-top: 6px;">View Information</button>
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


    <script>
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

    <script>
        function getModel(id) {

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
        function getTodayDate() {
            const today = new Date();
            const month = today.getMonth() + 1 < 10 ? `0${today.getMonth() + 1}` : today.getMonth() + 1;
            const day = today.getDate() < 10 ? `0${today.getDate()}` : today.getDate();
            return `${today.getFullYear()}-${month}-${day}`;
        }
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