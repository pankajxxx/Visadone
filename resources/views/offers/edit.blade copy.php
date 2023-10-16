<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visadone Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('../vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('../vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('../vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('../vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('../vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('../js/select.dataTables.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('../css/vertical-layout-light/style.css') }}">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'"
        rel="stylesheet" />
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
            max-width: 65em;
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
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img
                        src="http://127.0.0.1:8000/images/visadone_logo.png" class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img
                        src="http://127.0.0.1:8000/images/visadone_logo.png" alt="logo" /></a>
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
                            <a class="nav-link" href="index.html">
                                <i class="bi bi-speedometer"></i>
                                <span class="menu-title">&nbsp;Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./index.blade.php">
                                <i class="bi bi-person-lines-fill"></i>
                                <span class="menu-title">&nbsp;New Visa</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-search"></i>
                                <span class="menu-title">&nbsp;Track Application</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="icon-paper menu-icon"></i>
                                <span class="menu-title">&nbsp;External Fulfillment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-airplane-fill"></i>
                                <span class="menu-title">&nbsp;Travel Insurance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="icon-paper menu-icon"></i>
                                <span class="menu-title">&nbsp;Data E-sim</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-bar-chart-fill"></i>
                                <span class="menu-title">&nbsp;Branch Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-box-fill"></i>
                                <span class="menu-title">&nbsp;
                                    Agent Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-file-bar-graph-fill"></i>
                                <span class="menu-title">
                                    &nbsp;Agency Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-qr-code"></i>
                                <span class="menu-title">
                                    &nbsp;Coupon Code</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-menu-down"></i>
                                <span class="menu-title">
                                    &nbsp;Visa Offer Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
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
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-person-vcard-fill"></i>
                                <span class="menu-title">
                                    &nbsp;User Role Config</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-currency-dollar"></i>
                                <span class="menu-title">
                                    &nbsp;Currency Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-globe2"></i>
                                <span class="menu-title">
                                    &nbsp;Travel Desk Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-book-half"></i>
                                <span class="menu-title">
                                    &nbsp;Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <form action="/offer/update" method="POST">
                    @csrf
                    @foreach ($offer as $data)
                        <div class="content-wrapper">
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
                                                            @if ($data->visa_type == 'standard visa') checked="" @endif>
                                                        <label for="radio-one-1">Standard Visa</label>
                                                        <input type="radio" id="radio-two-1" name="visa_type"
                                                            value="express visa"
                                                            @if ($data->visa_type == 'express visa') checked="" @endif>
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
                                                            @if ($data->visa_category == 'e-visa') checked="" @endif>
                                                        <label for="radio-one-3">E-Visa</label>
                                                        <input type="radio" id="radio-two-3" name="visa_category"
                                                            value="normal-visa"
                                                            @if ($data->visa_category == 'normal-visa') checked="" @endif>
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
                                                                value="tourist" checked="">
                                                            <label for="radio-one-5">Tourist</label>
                                                            <input type="radio" id="radio-two-5" name="category"
                                                                value="bussiness">
                                                            <label for="radio-two-5">Business</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="switch-field">
                                                            <input type="radio" id="radio-one-6" name="category"
                                                                value="student" checked="">
                                                            <label for="radio-one-6">Student</label>
                                                            <input type="radio" id="radio-two-6" name="category"
                                                                value="Transit">
                                                            <label for="radio-two-6">Transit</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="switch-field">
                                                            <input type="radio" id="radio-one-7" name="category"
                                                                value="medical" checked="">
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
                                                            <textarea class="form-control" name="visa_description" value="{{ $data->description }}" id="description"
                                                                rows="3" placeholder="Description"></textarea>
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
                            <div class="row">
                                <div class="col-12 grid-margin">
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="card-description">Support Currencies</h3>
                                            <input type="hidden" id="currency_data" name="currency_data" />
                                            <hr>

                                            <div class="row mt-4">
                                                <div class="col-12 col-sm-12 col-md-12">
                                                    <div class="card">
                                                        <div class="card-header bg-white">
                                                            <h4 class="card-description_header"><b>Nationality
                                                                    Currency</b>
                                                            </h4>
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
                                                                                    id="converted_adult_embassy"
                                                                                    name="base_rate_adult"
                                                                                    value={{ $data->govt_fees_adult }}
                                                                                    readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="converted_adult_service"
                                                                                    name="govt_fees_adult"
                                                                                    value="" readonly>
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
                                                                                    id="converted_rate_child"
                                                                                    name="child_fees"
                                                                                    value={{ $data->govt_fees_child }}
                                                                                    readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="converted_child_service"
                                                                                    name="govt_fees_child"
                                                                                    value="" readonly>
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
                                                                                    id="converted_rate_Infant"
                                                                                    name="infant_fees"
                                                                                    value={{ $data->govt_fees_infant }}
                                                                                    readonly>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-sm-3 col-md-3">
                                                                            <div class="form-group">
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    placeholder="Service Fees"
                                                                                    id="convert_infant_service"
                                                                                    name="govt_fees_infant"
                                                                                    value="" readonly>
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
    <!-- End custom js for this page-->

    <script>
        function getOffer() {
            $(document).ready(function() {
                var country = document.getElementById("travel_to").value;
                var country = document.getElementById("nationality").value;
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

    <script>
        function support_currency() {
            var nationality = document.getElementById("nationality").value;
            var currency = document.getElementById("currency_data");

            // Find the header element with the class "card-description_header"
            var header = document.querySelector('.card-description_header');

            // Set the data of the header
            header.innerText = nationality + " " + "Currency";

            $.ajax({
                url: '/api/getcurrency/' + nationality,
                method: 'GET',
                success: function(response) {

                    // Iterate over the data and generate HTML for each card
                    $.each(response, function(index, item) {
                        console.log(item.country_rate)
                        currency.value = item.country_rate
                    });
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });


        }
    </script>


    <script>
        function currency_adult() {
            var price = document.getElementById('base_adult_embassy').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('converted_adult_embassy');
            ans = price * comvert;

            ans_field.value = ans;

        }
    </script>

    <script>
        function currency_child() {
            var price = document.getElementById('base_rate_child').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('converted_rate_child');
            ans = price * comvert;

            ans_field.value = ans;
        }
    </script>

    <script>
        function currency_infant() {
            var price = document.getElementById('base_rate_Infant').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('converted_rate_Infant');
            ans = price * comvert;

            ans_field.value = ans;
        }
    </script>

    <script>
        function currency_infant_service() {
            var price = document.getElementById('base_infant_service').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('convert_infant_service');
            ans = price * comvert;

            ans_field.value = ans;
        }
    </script>

    <script>
        function currency_child_service() {
            var price = document.getElementById('base_child_service').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('converted_child_service');
            ans = price * comvert;

            ans_field.value = ans;
        }
    </script>

    <script>
        function currency_adult_service() {
            var price = document.getElementById('base_adult_service').value;
            var comvert = document.getElementById('currency_data').value;
            var ans_field = document.getElementById('converted_adult_service');
            ans = price * comvert;

            ans_field.value = ans;
        }
    </script>


</body>

</html>
