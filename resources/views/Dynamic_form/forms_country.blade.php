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

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/public/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->

    <!-- Tempusdominus Bootstrap 4 -->



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
            /* padding: 0 15px; */
            border: none;
            border-bottom: 1px solid #080808;
            background: #ffffff;
            color: #000000;
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

            border-bottom: 1px solid #1d6fb9;
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
    </style>

    <style>
        /* Styles for the modal */
        /* Styles for the image display */
        .image-display {
            display: none;
            position: fixed;
            z-index: 2;
            padding: 50px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            text-align: center;
        }

        .displayed-image {
            max-width: 90%;
            max-height: 90%;
            margin: auto;
        }

        .close-button {
            color: white;
            position: absolute;
            top: 10px;
            right: 25px;
            font-size: 25px;
            cursor: pointer;
        }
    </style>

    <style>
        .image-container {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
        }

        .image {
            width: 108px;
            height: 100px;
            margin: 3px;
            cursor: pointer;
        }

        .main-image {
            width: ;
            margin-right: 2%;
            max-height: 310px;
            display: none;

        }

        .red-asterisk {
            color: red;
            /* Set the color to red or any other desired color */
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
                            <img src="../images/faces/face.jpeg" alt="profile" />
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
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section"
                            role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <div class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input"
                                        placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
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
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="../../images/faces/face1.jpg" alt="image"><span
                                        class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span>
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
                                <div class="profile"><img src="../../images/faces/face3.jpg" alt="image"><span
                                        class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span>
                                </div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face5.jpg" alt="image"><span
                                        class="online"></span>
                                </div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="../../images/faces/face6.jpg" alt="image"><span
                                        class="online"></span>
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
                                                                <input type="text" value="{{ $visa_nationality }}"
                                                                    id="field1" class="form-control" readonly>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label"
                                                                id="nationality">Destination</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" value="{{ $visa_destination }}"
                                                                    id="field1" class="form-control" readonly>
                                                            </div>


                                                            <label class="col-sm-1 col-form-label"
                                                                id="nationality">Date From</label>
                                                            <div class="col-sm-2">
                                                                <input type="text"
                                                                    value="{{ $visa_travel_date_from }}"
                                                                    id="field1" class="form-control" readonly>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label"
                                                                id="nationality">Date To</label>
                                                            <div class="col-sm-2">
                                                                <input type="text"
                                                                    value="{{ $visa_travel_date_to }}" id="field1"
                                                                    class="form-control" readonly>
                                                            </div>
                                                            <label class="col-sm-1 col-form-label"
                                                                id="nationality">Offer Selected</label>
                                                            <div class="col-sm-2">
                                                                <input type="text" value="{{ $visa_visa_offer }}"
                                                                    id="field1" class="form-control" readonly>
                                                            </div>


                                                            <label class="col-sm-1 col-form-label"
                                                                id="nationality">Visa Type Selected</label>
                                                            <div class="col-sm-4">
                                                                <input type="text" id="field1"
                                                                    value="{{ $visa_visa_type_selected }}"
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
                        <div class="col-12">
                            <div class="row justify-content-center" style="padding-bottom: 2%;">
                                <div class="col-auto">
                                    <ul class="nav nav-pills">
                                        @for ($i = 1; $i <= $count; $i++)
                                            <li class="nav-item">
                                                <a class="nav-link {{ $i === 1 ? 'active' : '' }}" data-toggle="tab"
                                                    href="#tab{{ $i }}">
                                                    Application {{ $i }}
                                                </a>
                                            </li>
                                        @endfor
                                    </ul>
                                </div>
                            </div>

                            <div class="container-fluid main content" style="background-color: #ffffff;">

                                <div class="row">
                                    <div class="col-4 grid-margin">
                                        <!-- Your existing content here -->
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="card-description">Application Documents</h3><br>
                                                <div class="main-image-container">
                                                    <img class="main-image"
                                                        src="D:/Aditya.Yadav/Downloads/Sheetal Deshpande Passport 1.jpg"
                                                        alt="Main Image">
                                                </div>
                                                <div class="image-container">

                                                    @foreach ($results as $result)
                                                        @foreach ($result['files_mapping'] as $data_files)
                                                            <img class="image"
                                                                src="{{ asset('/storage/documents/' . $visa_id . '/' . $data_files) }}"
                                                                alt="Image 1">
                                                        @endforeach
                                                    @endforeach

                                                </div>

                                                <script>
                                                    const mainImage = document.querySelector('.main-image');
                                                    const images = document.querySelectorAll('.image');

                                                    // Initially show the first image
                                                    mainImage.src = images[0].src;
                                                    mainImage.style.display = 'block';

                                                    // Add click event listeners to all images
                                                    images.forEach((image, index) => {
                                                        image.addEventListener('click', () => {
                                                            mainImage.src = image.src;
                                                        });
                                                    });
                                                </script>



                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <!-- Add the previous card with tab content here -->
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="tab-content">
                                                    @for ($i = 0; $i < count($results); $i++)

                                                        <div class="tab-pane {{ $i === 0 ? 'active' : '' }}"
                                                            id="tab{{ $i + 1 }}">
                                                            <h3>{{ $results[$i]['First_Name'] }}</h3>
                                                            <div class="form-group">
                                                                <div class="input-field with-divider">


                                                                    {{-- <input type="text" class="form-control" value="{{ $results[$i]['First_Name'] }}" required spellcheck="false"> --}}
                                                                    <form>

                                                                        <div class="container">
                                                                            <div class="row">
                                                                                @php $fieldCount = 0; @endphp

                                                                                {{-- @foreach ($results as $result) --}}
                                                                                @foreach ($country_info as $fields)
                                                                                    @if ($fields->is_dropdown != 'Yes' && $fields->conditional_filed != '1')
                                                                                        @if ($fieldCount % 16 === 0)
                                                                                            <!-- Start a new column every 8 fields -->
                                                                                            <div class="col-md-4">
                                                                                        @endif


                                                                                        <div class="form-group">
                                                                                            <div
                                                                                                class="input-field with-divider">
                                                                                                @if (
                                                                                                    $fields->field_name === 'First Name' ||
                                                                                                        $fields->field_name === 'First name' ||
                                                                                                        $fields->field_name === 'first name' ||
                                                                                                        $fields->field_name === 'Forename')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['First_Name'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(
                                                                                                    $fields->field_name === 'Surname' ||
                                                                                                        $fields->field_name === 'Surname ' ||
                                                                                                        $fields->field_name === 'surname' ||
                                                                                                        $fields->field_name === 'last name')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Surname'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(
                                                                                                    $fields->field_name === 'Date of Birth' ||
                                                                                                        $fields->field_name === 'Date Of Birth' ||
                                                                                                        $fields->field_name === 'date of birth' ||
                                                                                                        $fields->field_name === 'Date Of birth')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Date_of_Birth'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(
                                                                                                    $fields->field_name === 'Passport number' ||
                                                                                                        $fields->field_name === 'Passaport No' ||
                                                                                                        $fields->field_name === 'passport number' ||
                                                                                                        $fields->field_name === 'Passport Number')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Passport_Number'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(
                                                                                                    $fields->field_name === 'Passport Date of issue' ||
                                                                                                        $fields->field_name === 'Passaport  Valid From' ||
                                                                                                        $fields->field_name === 'Passport Date of Issue' ||
                                                                                                        $fields->field_name === 'Passport date of issue')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Date_of_Issue'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(
                                                                                                    $fields->field_name === 'Passport Valid until' ||
                                                                                                        $fields->field_name === 'Passaport  Valid Until' ||
                                                                                                        $fields->field_name === 'Passport valid until' ||
                                                                                                        $fields->field_name === 'Passport valid until')
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Date_of_expiry'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @elseif(str_contains($fields->field_name, 'Place of birth'))
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        value="{{ $results[$i]['Code'] }}"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @else
                                                                                                    <input
                                                                                                        type="text"
                                                                                                        class="form-control"
                                                                                                        id="input-{{ $fields->field_name }}"
                                                                                                        required
                                                                                                        spellcheck="false">
                                                                                                @endif

                                                                                                <label
                                                                                                    class="input-field-label {{ $fields->is_required == 'Yes' ? 'red-asterisk' : '' }}">
                                                                                                    {{ $fields->field_name }}
                                                                                                    @if ($fields->is_required == 'Yes')
                                                                                                        *
                                                                                                    @endif
                                                                                                </label>

                                                                                            </div>
                                                                                        </div>
                                                                                        {{-- @endforeach --}}


                                                                                        @if ($fieldCount % 16 === 15)
                                                                                            <!-- Close the current column every 8 fields -->
                                                                            </div>
                                                    @endif

                                                    @php $fieldCount++; @endphp
                                                    @endif
                                                    @endforeach
                                                    {{-- @endforeach --}}
                                                    <!-- Close the last column if necessary -->
                                                    @if ($fieldCount % 16 !== 0)
                                                </div>
                                                @endif

                                                <div class="col-md-4" style="display:contents;">
                                                    @foreach ($country_info as $fields)
                                                        @if ($fields->is_dropdown == 'Yes' && $fields->conditional_filed != '1')
                                                            <div class="form-group">
                                                                <div class="input-field with-divider">
                                                                    <select class="form-control"
                                                                        name="{{ $fields->field_name }}"
                                                                        id="{{ $fields->field_name }}"
                                                                        @if ($fields->is_required == 'Yes') required @endif>
                                                                        <option value="" disabled selected>
                                                                            {{ $fields->field_name }}</option>
                                                                        @if ($fields->default_values == 'Country List')
                                                                            @foreach ($country as $option)
                                                                                <option
                                                                                    value="{{ $option->country_name }}">
                                                                                    {{ $option->country_name }}
                                                                                </option>
                                                                            @endforeach
                                                                        @else
                                                                            <?php
                                                                            $values = $fields->default_values;
                                                                            $options = explode(', ', $values);
                                                                            foreach ($options as $option) {
                                                                                echo "<option value='$option'>$option</option>";
                                                                            }
                                                                            ?>
                                                                        @endif
                                                                    </select>
                                                                    <label
                                                                        class="input-field-label">{{ $fields->field_name }}</label>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                    {{-- <label for="selection">Select an option:</label>
                                                                                    <select id="selection" class="form-control"
                                                                                        onchange="toggleFields()">
                                                                                        <option value="yes">Yes</option>
                                                                                        <option value="no">No</option>
                                                                                    </select> --}}

                                                    <div id="fieldsToToggle" class="mt-3" style="display: none;">
                                                        <label for="field1">Field 1:</label>
                                                        <input type="text" id="field1" class="form-control">

                                                        <label for="field2">Field 2:</label>
                                                        <input type="text" id="field2" class="form-control">

                                                        <label for="field3">Field 3:</label>
                                                        <input type="text" id="field3" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
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


    {{-- <div class="container">
                            <div class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">

                                    <div class="container -fluid"
                                        style="width: 50%;
                                        height: 60%;
                                        margin: auto;
                                        border: 1px solid black;
                                    ">
                                        <img class="d-block w-100"
                                        src="//placehold.it/1200x600/444" alt="1 slide"
                                        onclick="showImage(this)">

                                    </div>

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-sm"><img class="d-block w-100"
                                                    src="//placehold.it/1200x600/444" alt="1 slide"
                                                    onclick="showImage(this)"></div>
                                            <div class="col-sm"><img class="d-block w-100"
                                                    src="//placehold.it/1200x600/ccff00" alt="2 slide"
                                                    onclick="showImage(this)"></div>
                                            <div class="col-sm"><img class="d-block w-100"
                                                    src="//placehold.it/1200x600" alt="3 slide"
                                                    onclick="showImage(this)"></div>
                                        </div>
                                    </div>
                                    <!-- Add more carousel items as needed -->
                                </div>
                            </div>
                        </div> --}}





    <div class="container-fluid main content" style="background-color: #ffffff;">
        <div class="row">
            {{-- <div class="col-4 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-description">Application Documents</h3><br>
                        <div class="main-image-container">
                            <img class="main-image" src="D:/Aditya.Yadav/Downloads/Sheetal Deshpande Passport 1.jpg"
                                alt="Main Image">
                        </div>
                        <div class="image-container">

                            @foreach ($files as $data_files)
                                <img class="image"
                                    src="{{ asset('/storage/documents/' . $visa_id . '/' . $data_files) }}"
                                    alt="Image 1">
                            @endforeach
                        </div>

                        <script>
                            const mainImage = document.querySelector('.main-image');
                            const images = document.querySelectorAll('.image');

                            // Initially show the first image
                            mainImage.src = images[0].src;
                            mainImage.style.display = 'block';

                            // Add click event listeners to all images
                            images.forEach((image, index) => {
                                image.addEventListener('click', () => {
                                    mainImage.src = image.src;
                                });
                            });
                        </script>



                    </div>
                </div>
            </div> --}}

            <div class="col-8 grid-margin">

                <div class="card">

                    <div class="card-body">



                        {{-- <h3 class="card-description">{{ $country_name }} Form</h3> --}}


                        <div class="form-sample">
                            <hr>
                            @if (isset($message))
                                <div class="alert alert-warning">
                                    <p>{{ $message }}</p>
                                    {{-- <img src="{{ asset('no_visa_image.png') }}" alt="No Visa Image"> --}}
                                </div>
                            @endif





                            <!-- <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <div class="input-field">
                                                    <button type="Submit" class="btn btn-primary"><i class="ti-check mr-2"></i>Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                        </div>

                    </div>
                </div>

            </div>
            <br>

            <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="errorModalLabel">Error</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p id="errorMessage">An error occurred.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    </div>
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
    <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
        function showModalIfDataAvailable(data) {

            if (data !== null) {
                $('#myModal').modal('show');
                // alert("Pervious Data Found");
            }
        }


        $(document).ready(function() {
            showModalIfDataAvailable(
                @json($country_info)); // Pass the PHP variable to the JavaScript function
        });
    </script>
    <script>
        @if ($errors->any())
            $('#errorModalLabel').text('Error');
            $('#errorMessage').text("{{ $errors->first() }}");
            $('#errorModal').modal('show');
        @endif
    </script>

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
        // Get the country dropdown element
        var countryDropdown = document.getElementById("countryDropdown");

        // Fetch country data from REST Countries API
        fetch("https://restcountries.com/v2/all")
            .then(function(response) {
                return response.json();
            })
            .then(function(data) {
                // Generate the dropdown options
                data.forEach(function(country) {
                    var option = document.createElement("option");
                    option.value = country.name;
                    option.textContent = country.name;
                    countryDropdown.appendChild(option);
                });
            })
            .catch(function(error) {
                console.log("Error fetching country data:", error);
            });
    </script>
    {{--
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const zoomableImage = document.getElementById('zoomable-image');
        const zoomInButton = document.getElementById('zoom-in');
        const zoomOutButton = document.getElementById('zoom-out');
        const resetZoomButton = document.getElementById('reset-zoom');
        let currentScale = 0.5;

        zoomInButton.addEventListener('click', function() {
            currentScale += 0.1;
            zoomableImage.style.transform = `scale(${currentScale})`;
        });

        zoomOutButton.addEventListener('click', function() {
            if (currentScale > 0.1) {
                currentScale -= 0.1;
                zoomableImage.style.transform = `scale(${currentScale})`;
            }
        });

        resetZoomButton.addEventListener('click', function() {
            currentScale = 1;
            zoomableImage.style.transform = `scale(${currentScale})`;
        });
    });
</script> --}}

    {{-- <script>
    document.addEventListener('DOMContentLoaded', function() {
        const zoomableImage = document.getElementById('zoomable-image');
        let currentScale = 1;
        const scaleIncrement = 0.1;
        const maxScale = 3;
        const minScale = 0.5;

        zoomableImage.addEventListener('mouseover', function() {
            zoomableImage.style.transform = `scale(${maxScale})`;
        });

        zoomableImage.addEventListener('mouseout', function() {
            zoomableImage.style.transform = `scale(${currentScale})`;
        });

        window.addEventListener('wheel', function(event) {
            event.preventDefault();
            if (event.deltaY < 0) {
                currentScale = Math.min(currentScale + scaleIncrement, maxScale);
            } else {
                currentScale = Math.max(currentScale - scaleIncrement, minScale);
            }
            zoomableImage.style.transform = `scale(${currentScale})`;
        });
    });
</script> --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const zoomableImages = document.querySelectorAll('.zoomable-image');
            const zoomInButtons = document.querySelectorAll('.zoom-in');
            const zoomOutButtons = document.querySelectorAll('.zoom-out');
            const resetZoomButtons = document.querySelectorAll('.reset-zoom');


            for (let i = 0; i < zoomableImages.length; i++) {
                const image = zoomableImages[i];
                let currentScale = 1;

                zoomInButtons[i].addEventListener('click', function() {
                    currentScale += 0.1;
                    image.style.transform = `scale(${currentScale})`;
                });

                zoomOutButtons[i].addEventListener('click', function() {
                    if (currentScale > 0.1) {
                        currentScale -= 0.1;
                        image.style.transform = `scale(${currentScale})`;
                    }
                });

                resetZoomButtons[i].addEventListener('click', function() {
                    currentScale = 1;
                    image.style.transform = `scale(${currentScale})`;
                });
            }
        });
    </script>

    <script>
        function showImage(imgElement) {
            var imageDisplay = document.getElementById("imageDisplay");
            var displayedImage = document.getElementById("displayedImage");

            displayedImage.src = imgElement.src;
            imageDisplay.style.display = "block";
        }

        function closeImageDisplay() {
            var imageDisplay = document.getElementById("imageDisplay");
            imageDisplay.style.display = "none";
        }
    </script>

</body>

</html>
