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
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../css/vertical-layout-light/style.css">
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
                <form action="/offers_rule/store" method="POST">
                    @csrf
                    <div class="content-wrapper">

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-description">Create New Document Rule Offer</h3>
                                        <div class="form-sample">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="countrySelect">Nationality</label>
                                                        <select class="form-control" name="nationality"
                                                            id="nationality">
                                                            <option value="">Select Nationality</option>
                                                            @foreach ($country as $option)
                                                                <option name="nationality"
                                                                    value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stateSelect">Travelling To</label>
                                                        <select class="form-control" name="destination"
                                                            id="destination" onchange="getoffers()">
                                                            <option value="">Select Destination</option>
                                                            <option value="all">Select All</option>
                                                            @foreach ($country as $option)
                                                                <option name="destination"
                                                                    value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}</option>
                                                            @endforeach
                                                        </select>
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
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h5 class="card-description">Visa Offer:</h5>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <select id="group_id" name="group_id[]" class="form-control"
                                                    multiple onclick="multipleFunc()">


                                                </select> --}}
                                                {{-- <select class="form-control" name="offer_id[]" id="offer_id" multiple>
                                                    <option value="">Select Visa Offer</option>
                                                </select> --}}
                                                <div class="form-group">

                                                    <select class="form-control" name="offer_id[]" id="offer_id" multiple>
                                                        <option value="">Select Visa Offer</option>
                                                    </select>
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
                                        <h5 class="card-description">Basic Document Information</h5>
                                        <div class="form-sample">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="countrySelect">Document Type</label>
                                                        <select class="form-control" name="document_type"
                                                            id="nationality">
                                                            <option value="">Select Nationality</option>
                                                            @foreach ($document as $option)
                                                                <option name="nationality"
                                                                    value="{{ $option->document_name }}">
                                                                    {{ $option->document_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stateSelect">Document Name</label>
                                                        <input type="text" name="document_name"
                                                            class="form-control mb-2 mr-sm-2"
                                                            id="inlineFormInputName2" placeholder="Document Name">
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
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Mandatory:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="switch-field">
                                                    <input type="radio" id="radio-one-1" name="document_mandatory"
                                                        value="Yes" checked="">
                                                    <label for="radio-one-1">Yes</label>
                                                    <input type="radio" id="radio-two-1" name="document_mandatory"
                                                        value="No">
                                                    <label for="radio-two-1">No</label>
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
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Description:</h4>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">

                                                    <textarea name="message" class="form-control mb-2 mr-sm-2" rows="4" cols="60"></textarea>
                                                    {{--  --}}
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
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Required:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="switch-field">
                                                    <input type="radio" id="radio-one-3"
                                                        name="document_requiredments" value="always" checked="">
                                                    <label for="radio-one-3">Always</label>
                                                    <input type="radio" id="radio-two-3"
                                                        name="document_requiredments" value="conditionally">
                                                    <label for="radio-two-3">Conditionally</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <input type="submit">
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
