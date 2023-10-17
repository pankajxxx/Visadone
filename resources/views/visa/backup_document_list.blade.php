<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visadone Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('.vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('.vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('.vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('.vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('.js/select.dataTables.min.css') }}">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('./css/vertical-layout-light/style.css') }}">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .input-field {
            position: relative;
        }

        .input-field input {
            width: 100%;
            height: 60px;
            border-radius: 6px;
            font-size: 18px;
            padding: 0 15px;
            border: 1px solid #9b9b9b;
            background: #ffffff;
            color: #b4b4b4;
            outline: none;
        }

        .input-field label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #76838f;
            font-size: 14px;
            pointer-events: none;
            transition: 0.3s;
        }

        input:focus {
            border: 1px solid #1d6fb9;
        }

        input:focus~label,
        input:valid~label {
            top: 0;
            left: 15px;
            font-size: 12px;
            padding: 0 2px;
            background: #fff;
        }


        .custom-select:focus {
            border-color: #80bdff;
            outline: 0;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        .with-divider {
            border-right: 1px solid #ccc;
            padding-right: 30px;
            margin-right: 0px px;
        }





        /* .form-control-placeholder {
            position: absolute;
            pointer-events: none;
            padding-top: 10px;
            top: 0;
            left: 0;
            transition: all 200ms;
            opacity: 0.5;
        }

        .form-control:focus+.form-control-placeholder,
        .form-control:valid+.form-control-placeholder {
            font-size: 75%;
            transform: translate3d(0, -100%, 0);
            opacity: 1;
        } */
    </style>
    <style>
        /* Add these styles to your existing CSS */
        .zoomable-image-container {
            position: relative;
            display: inline-block;
        }

        .zoom-buttons {
            position: absolute;
            bottom: 10px;
            /* Adjust as needed */
            right: 10px;
            /* Adjust as needed */
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .img-fluid {
            /* max-width: 100%; */
            height: 200px;
        }

        .zoom-buttons button {
            /* Your existing styles */
            background-color: transparent;
            border: none;
            cursor: pointer;
            font-size: 16px;
            color: white;
            /* Set the color of the symbol to white */
        }

        /* Adjust the icon color */
        .zoom-buttons button i {
            color: #a8a8a8;
        }

        .circle-button {
            display: inline-block;
            width: 150px;
            height: 50px;
            border-radius: 7%;
            background-color: #3490dc;
            color: white;
            font-size: 20px;
            border: none;
            margin: 5px;
        }

        .circle-button.active {
            background-color: #ff9900;
            /* Change the background color for the active state */
        }

        .image-stack {
            display: flex;
            flex-direction: row;
            align-items: center;
        }

        .image-container {
            position: relative;
            margin-bottom: 10px;
        }

        .zoomable-image {
            max-width: fit-content;
            max-height: 240px;
            /* border: 1px solid #ccc; */
            padding-left: 12px;
        }

        .remove-icon {
            position: absolute;
            top: 1px;
            right: 0px;
            background-color: #ff6262;

            padding: 2px;
            cursor: pointer;
        }

        #div1 {
            width: 350px;
            height: 70px;
            padding: 10px;
            border: 1px solid #aaaaaa;
        }

        .tab-content1>.tab-pane1 {
            display: contents;
        }

        .card-body_1 {
            margin-right: 10%;
            border: 1px dashed rgb(127, 174, 249);
            background-color: #f6f8fa;

        }

        .card_1 {
            width: 109%;
            margin-top: 5%;
        }

        <style>

        /* Style for the file input and label */
        input[type="file"] {
            display: none;
            /* Hide the default file input */
        }

        label[for^="file-upload-"] {
            cursor: pointer;
            background-color: #007bff;
            /* Change to your desired background color */
            color: #fff;
            /* Change to your desired text color */
            padding: 10px 15px;
            border-radius: 5px;
        }

        /* Optional: Style for the label when hovering */
        label[for^="file-upload-"]:hover {
            background-color: #0056b3;
            /* Change to your desired hover color */
        }

        .file-label {
            cursor: pointer;
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            display: inline-block;
        }

        .file-hidden {
            display: none;
        }

        .dropzone.dz-clickable {
            cursor: pointer;
            height: 207px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img
                        src="http://127.0.0.1:8000/images/visadone_logo.png" class="mr-2" alt="logo" /></a>
                <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="http://127.0.0.1:8000/images/visadone_logo.png" alt="logo" /></a>
             -->
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
                            <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now"
                                aria-label="search" aria-describedby="search">
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                            data-toggle="dropdown">
                            <i class="icon-bell mx-0"></i>
                            <span class="count"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                            aria-labelledby="notificationDropdown">
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
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                            aria-labelledby="profileDropdown">
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
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                    data-toggle="offcanvas">
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

            <!-- partial -->
            <!-- partial:../../partials/_sidebar.html -->



            <nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
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
                <div class="content-wrapper">

                    {{-- BAsic information --}}
                    {{-- <form action="route('getfields_visa')" method="GET"> --}}
                    <form
                        action="{{ route('getfields_visa', ['type' => $commonVisaData['visa_type'], 'destination' => $commonVisaData['visa_destination'], 'id' => $commonVisaData['visa_id'], 'count' => $commonVisaData['count']]) }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="card" style="margin-bottom: 20px;">
                                    <div class="col-12 grid-margin">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="card-description">Basic Information</h3>
                                                <hr><br>
                                                <div class="form-sample">

                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <div class="row">
                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Nationality</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"
                                                                        value="{{ $commonVisaData['visa_nationality'] }}"
                                                                        id="field1" class="form-control" readonly>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Destination</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"
                                                                        value="{{ $commonVisaData['visa_destination'] }}"
                                                                        id="field1" class="form-control" readonly>
                                                                </div>


                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Date From</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"
                                                                        value="{{ $commonVisaData['visa_travel_date_from'] }}"
                                                                        id="field1" class="form-control" readonly>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Date To</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"
                                                                        value="{{ $commonVisaData['visa_travel_date_to'] }}"
                                                                        id="field1" class="form-control" readonly>
                                                                </div>
                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Offer Selected</label>
                                                                <div class="col-sm-2">
                                                                    <input type="text"
                                                                        value="{{ $commonVisaData['visa_visa_offer'] }}"
                                                                        id="field1" class="form-control" readonly>
                                                                </div>


                                                                <label class="col-sm-1 col-form-label"
                                                                    id="nationality">Visa Type Selected</label>
                                                                <div class="col-sm-4">
                                                                    <input type="text" id="field1"
                                                                        value="{{ $commonVisaData['visa_visa_type_selected'] }}"
                                                                        class="form-control" readonly>
                                                                </div>

                                                                {{-- <label class="col-sm-1 col-form-label"
                                                                id="nationality">Entry Type</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" id="field1"
                                                                    class="form-control" readonly>
                                                            </div> --}}

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            {{-- FOR Uploaded Documents --}}
                            <div class="container-fluid main content" style="background-color: #ffffff;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card" style="margin-bottom: 20px;">
                                            <div class="col-12 grid-margin">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h3 class="card-description">Documents Uploaded</h3>
                                                        <hr><br>

                                                        <div class="container-fluid">


                                                            <div class="tab-content" id="myTabContent">
                                                                @for ($j = 0; $j < count($processedDataArray); $j++)
                                                                    <div class="tab-pane fade {{ $j === 0 ? 'show active' : '' }}"
                                                                        role="tabpanel">

                                                                        <div class="image-stack">
                                                                            <div class="image-container">
                                                                                @foreach ($commonVisaData['files'] as $index => $file)
                                                                                    <img src="	http://127.0.0.1:8000/storage/documents/{{ $commonVisaData['visa_id'] }}/{{ $file }}"
                                                                                        alt="Image {{ $index + 1 }}"
                                                                                        class="zoomable-image img-fluid">
                                                                                @endforeach



                                                                                {{-- <span class="remove-icon">&times;</span> --}}
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                                </div>

                            </div>

                            {{-- <div class="dropzone" id="my-dropzone">
                                <p>Drag &amp; Drop images here or click to upload.</p>
                            </div>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

                            <script>
                                // Initialize Dropzone
                                Dropzone.autoDiscover = false; // Disable auto-initialization to customize it
                                var myDropzone = new Dropzone("div#my-dropzone", {
                                    url: "/upload-handler", // Specify the URL for uploading files
                                    acceptedFiles: "image/*", // Specify allowed file types (e.g., images)
                                    maxFilesize: 2, // Specify the maximum file size in MB
                                    addRemoveLinks: true, // Add remove links for uploaded files
                                    parallelUploads: 1, // Upload files one by one
                                    dictDefaultMessage: "Drag &amp; Drop images here or click to upload.",
                                    // You can customize other options and messages as needed
                                });

                                // Handle file upload success
                                myDropzone.on("success", function (file, response) {
                                    // Handle the successful upload response, if needed
                                    console.log("File uploaded successfully", response);
                                });
                            </script> --}}

                            {{-- FOR MAPPING DOCUMENTS --}}

                            <div class="container-fluid main content" style="background-color: #ffffff;">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card" style="margin-bottom: 20px;">
                                            <div class="col-12 grid-margin">
                                                <div class="card">
                                                    <div class="card-body">

                                                        <hr><br>

                                                        <div class="container-fluid">
                                                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                                @foreach ($processedDataArray as $i => $data)
                                                                    <li class="nav-item">
                                                                        <a class="nav-link {{ $i === 0 ? 'active' : '' }}"
                                                                            id="tab-{{ $i }}"
                                                                            data-toggle="tab"
                                                                            href="#tab-content-{{ $i }}"
                                                                            role="tab"
                                                                            aria-controls="tab-content-{{ $i }}"
                                                                            aria-selected="{{ $i === 0 ? 'true' : 'false' }}">
                                                                            {{ $data['First_Name'] }}
                                                                            {{ $data['Surname'] }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach


                                                            </ul>


                                                            <div class="tab-content">
                                                                <link rel="stylesheet"
                                                                    href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
                                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
                                                                @php $k = 0 @endphp <!-- Initialize $k -->
                                                                @foreach ($processedDataArray as $i => $data)
                                                                    <div class="tab-pane fade {{ $i === 0 ? 'show active' : '' }}"
                                                                        id="tab-content-{{ $i }}"
                                                                        role="tabpanel"
                                                                        aria-labelledby="tab-{{ $i }}">

                                                                        <div class="row">

                                                                            @foreach ($data['doc'] as $key => $value)
                                                                                <div class="col-md-3">
                                                                                    <p><b>{{ $key }}</b></p>
                                                                                    @if (!empty($value))
                                                                                        <div class="black-card">
                                                                                            <div
                                                                                                class="card_1 text-center">
                                                                                                <div
                                                                                                    class="card-body_1">
                                                                                                    <img src="http://127.0.0.1:8000/storage/documents/{{ $commonVisaData['visa_id'] }}/{{ $value }}"
                                                                                                        alt="Image"
                                                                                                        class="zoomable-image img-fluid">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    @else
                                                                                        <link rel="stylesheet"
                                                                                            href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.css">
                                                                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>

                                                                                        <div class="black-card dropzone-container"
                                                                                            id="my-dropzone-{{ $k }}">
                                                                                            {{-- <div class="card_1 text-center">
                                                                                            <div class="card-body_1">
                                                                                                <i class="fas fa-cloud-upload-alt fa-5x mb-3"></i>
                                                                                                <h5 class="card-title">Drag & Drop or Click to Upload</h5>
                                                                                                <p class="card-text">Supported file types: images</p>
                                                                                            </div>
                                                                                        </div> --}}
                                                                                            <div id="my-awesome-dropzone-{{ $k }}"
                                                                                                class="dropzone">
                                                                                            </div>

                                                                                        </div>



                                                                                        <script>
                                                                                            Dropzone.autoDiscover = false; // Disable auto-initialization to customize it

                                                                                            // Initialize Dropzone for each container
                                                                                            var myDropzone{{ $k }} = new Dropzone("#my-awesome-dropzone-{{ $k }}", {
                                                                                                url: "/upload-handler-{{ $k }}", // Specify the URL for handling file uploads
                                                                                                acceptedFiles: "image/*", // Specify allowed file types (e.g., images)
                                                                                                maxFilesize: 1, // Specify the maximum file size in MB
                                                                                                addRemoveLinks: true, // Add remove links for uploaded files
                                                                                                parallelUploads: 1, // Upload files one by one
                                                                                                dictDefaultMessage: "Drag & Drop or Click to Upload",
                                                                                                // You can customize other options and messages as needed
                                                                                            });
                                                                                        </script>
                                                                                    @endif
                                                                                    @php $k++ @endphp
                                                                                    <!-- Increment $k -->
                                                                                </div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>









                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="submit" class="btn btn-primary" value="Process Application"
                                        style="    float: right;
                                padding-right: 1%;
                                margin-bottom: 1%;
                                margin-top: 1%;" />


                                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
                                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


                                </div>

                            </div>

                        </div>
                    </form>
                    <footer class="footer">
                        <div class="d-sm-flex justify-content-center justify-content-sm-between">
                            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright ©
                                2023 | All Rights
                                Reserved | VisaDone
                                <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                          with <i class="ti-heart text-danger ml-1"></i></span> -->
                        </div>
                        <!-- <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a
                            href="https://www.themewagon.com/" target="_blank">Themewagon</a></span>
                      </div> -->
                    </footer>


                </div>
                <div id="cardContainer"></div>
            </div>

            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#loading-screen').css('display', 'none');
            }, 100);

        });
    </script>
    <script>
        function toggleFields() {
            var selection = document.getElementById("selection").value;
            var fieldsToToggle = document.getElementById("fieldsToToggle");

            if (selection === "yes") {
                fieldsToToggle.style.display = "block";
            } else {
                fieldsToToggle.style.display = "none";
            }
        }
    </script>

    <script>
        const removeIcons = document.querySelectorAll('.remove-icon');

        removeIcons.forEach(icon => {
            icon.addEventListener('click', (event) => {
                const imageContainer = event.target.parentNode;
                imageContainer.remove();
            });
        });
    </script>

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
    <!-- End custom js for this page-->

    <script>
        function allowDrop(ev) {
            ev.preventDefault();
        }

        function drag(ev) {
            ev.dataTransfer.setData("text", ev.target.id);
        }

        function drop(ev) {
            ev.preventDefault();
            var data = ev.dataTransfer.getData("text");
            console.log("Data:", data); // Check the value of data
            var elementToAppend = document.getElementById(data);
            console.log("Element to Append:", elementToAppend); // Check the retrieved element
            ev.target.appendChild(elementToAppend);
        }
    </script>

    <script>
        function fileInputChange(input) {
            const fileLabel = input.nextElementSibling;
            if (input.files.length > 0) {
                fileLabel.textContent = input.files[0].name;
            } else {
                fileLabel.textContent = 'Browse';
            }
        }

        // Trigger initial update
        document.addEventListener('DOMContentLoaded', function() {
            const fileInputs = document.querySelectorAll('input[type="file"]');
            fileInputs.forEach(function(input) {
                fileInputChange(input);
            });
        });
    </script>



</body>

</html>
