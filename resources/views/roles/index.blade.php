{{-- @extends('layout.app') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Visadone Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
        integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap4.min.css">
    <link rel="shortcut icon" href="images/visadone_logo - Copy.png" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 100%;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
        }

        th {
            background-color: #f2f2f2;
        }

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ddd;
            margin-right: 10px;
        }

        #usermana {
            color: #ffffff;
            margin-bottom: 1.2rem;
            text-transform: capitalize;
            font-size: 1.125rem;
            font-weight: 700;
            font-family: system-ui;
            border-radius: 10px;
            padding: 10px;
            background: #3a37c7;
        }
    </style>
    <style>
        /* Styles for the table and other elements */
        .container {
            margin-top: 5rem;
        }

        .table-elipse {
            cursor: pointer;
        }

        .sidebar .nav {
            overflow: hidden;
            flex-wrap: nowrap;
            flex-direction: column;
            margin-bottom: 0px;
        }

        .sidebar .nav:not(.sub-menu) {
            margin-top: 0rem;
            margin-left: 0rem;
            margin-right: 0rem;
        }

        .rotate-icon {
            transform: rotate(0deg);
            transition: transform 0.2s ease-in-out;
        }

        .collapsed .rotate-icon {
            transform: rotate(-90deg);
        }
    </style>
    <script>
        function sortTable(n) {
            var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
            table = document.querySelector('.table');
            switching = true;
            // Set the sorting direction to ascending
            dir = 'asc';
            // Loop until no switching has been done
            while (switching) {
                switching = false;
                rows = table.rows;
                // Loop through all table rows (except the header row)
                for (i = 1; i < (rows.length - 1); i++) {
                    shouldSwitch = false;
                    x = rows[i].getElementsByTagName('TD')[n];
                    y = rows[i + 1].getElementsByTagName('TD')[n];
                    // Check if the two rows should switch places based on the sorting direction
                    if (dir === 'asc') {
                        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    } else if (dir === 'desc') {
                        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
                            shouldSwitch = true;
                            break;
                        }
                    }
                }
                if (shouldSwitch) {
                    // If a switch has been marked, make the switch and mark that a switch has been done
                    rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
                    switching = true;
                    // Increase the switch count by 1
                    switchcount++;
                } else {
                    // If no switching has been done and the direction is 'asc', set the direction to 'desc' and run the loop again
                    if (switchcount === 0 && dir === 'asc') {
                        dir = 'desc';
                        switching = true;
                    }
                }
            }
        }
    </script>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="images/visadone_logo.png"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/visadone_logo.png"
                        alt="logo" /></a>
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
                            {{-- <a class="dropdown-item preview-item">
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
                            </a> --}}
                        </div>
                    </li>
                    <li class="nav-item nav-profile dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="images/faces/face.jpeg" alt="profile" />
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
            <!-- partial:partials/_settings-panel.html -->
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
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input"
                                        placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
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
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span></div>
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
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
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
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar" style="">
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="bi bi-speedometer"></i>
                                <span class="menu-title">&nbsp;Dashboard</span>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
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
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#managementSubMenu">
                                <i class="fa fa-users"></i>
                                <span class="menu-title">&nbsp; Authority &nbsp;</span>
                                <i class="left fa fa-caret-down rotate-icon"></i>
                            </a>
                            <div class="collapse" id="managementSubMenu">
                                <ul class="nav flex-column pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/users">
                                            <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">&nbsp;User Management</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/branch">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">&nbsp;Branch Management</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/agents">
                                            <i class="fa fa-neuter"></i>
                                            <span class="menu-title">&nbsp;Agent Management</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/agency">
                                            <i class="bi bi-file-bar-graph-fill"></i>
                                            <span class="menu-title">&nbsp;Agency Management</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#managementSubMenu_1">
                                <i class="fa fa-cc-visa"></i>
                                <span class="menu-title">&nbsp; VISA Applications &nbsp;</span>
                                <i class="left fa fa-caret-down rotate-icon"></i>
                            </a>
                            <div class="collapse" id="managementSubMenu_1">
                                <ul class="nav flex-column pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/visa/create">
                                            <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">&nbsp;New Visa Application</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/visa">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="menu-title">&nbsp;Management Visa</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/track">
                                            <i class="fa fa-th-list"></i>
                                            <span class="menu-title">&nbsp;Track Applications</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#managementSubMenu_2">
                                <i class="fa fa-cc-visa"></i>
                                <span class="menu-title">&nbsp; VisaDocs &nbsp;</span>
                                <i class="left fa fa-caret-down rotate-icon"></i>
                            </a>
                            <div class="collapse" id="managementSubMenu_2">
                                <ul class="nav flex-column pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/visa/offer_create">
                                            <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">&nbsp;New Offer</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/visa/offers">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="menu-title">&nbsp;Management Offers</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/offers_rules/create">
                                            <i class="fa fa-th-list"></i>
                                            <span class="menu-title">&nbsp;New Document Rule</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/offer/rule/get">
                                            <i class="fa fa-th-list"></i>
                                            <span class="menu-title">&nbsp;Manage Documents</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link collapsed" data-toggle="collapse" href="#managementSubMenu_3">
                                <i class="fa fa-sliders"></i>
                                <span class="menu-title">&nbsp; Settings &nbsp;</span>
                                <i class="left fa fa-caret-down rotate-icon"></i>
                            </a>
                            <div class="collapse" id="managementSubMenu_3">
                                <ul class="nav flex-column pl-4">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/currency">
                                            <i class="fa fa-user-circle"></i>
                                            <span class="menu-title">&nbsp;Currency Config</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/tax">
                                            <i class="fa fa-list-alt"></i>
                                            <span class="menu-title">&nbsp;Tax Config</span>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="/user_role">
                                <i class="fa fa-user-circle"></i>
                                <span class="menu-title">
                                    &nbsp;User Role Config</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/form_fields">
                                <i class="fa fa-user-circle"></i>
                                <span class="menu-title">
                                    &nbsp;Sticker Visa Forms</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/form_fields_evisa">
                                <i class="fa fa-user-circle"></i>
                                <span class="menu-title">
                                    &nbsp;Evisa Forms</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">@lang('User Roles Configuration') &nbsp;
                                    <a href="" class="btn btn-success" data-toggle="modal"
                                        data-target="#addModal">@lang('Add Role')</a>
                                    <a href="" class="btn btn-success">@lang('Export Data')</a>
                                    <a href="#" class="btn btn-success" data-toggle="modal"
                                        data-target="#importModal">
                                        @lang('Import Data')
                                    </a>

                                </p>
                                <div class="table-responsive">
                                    <table class="table" id="example1">
                                        <thead style="color:#fff;font-family: 'Open Sans', sans-serif;">
                                            <tr>
                                                <th style="background-color:#4b49ac; width: 4%;" class="text-center">
                                                    #
                                                </th>
                                                <th class="text-center" style="background-color:#4b49ac; width: 17%;"
                                                    onclick="sortTable(2)">
                                                    User Role</th>
                                                <th class="text-center" style="background-color:#4b49ac; width: 17%;"
                                                    onclick="sortTable(3)">
                                                    Role Description</th>
                                                <th class="text-center" style="background-color:#4b49ac; width: 17%;"
                                                    onclick="sortTable(4)">
                                                    Created At</th>

                                            </tr>
                                        </thead>

                                        <tbody class="table-body">
                                            <!-- Table rows here -->
                                            @foreach ($data as $data_user)
                                                <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                    <td>{{ $data_user->id }}</td>

                                                    <td class="text-center">{{ $data_user->name }}</td>
                                                    <td class="text-center">{{ $data_user->role_description }}</td>
                                                    <td class="text-center">{{ $data_user->created_at }}</td>


                                                </tr>
                                            @endforeach
                                        </tbody>


                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="addModal" tabindex="-1" role="dialog"
                    aria-labelledby="addModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="/roles/store" method="post">
                                @csrf
                                <!-- Replace "/submit_tax" with the appropriate form submission URL -->
                                <!-- Modal content goes here -->
                                <div class="modal-header">
                                    <h4 class="modal-title">@lang('Add Tax')</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        {{-- <h6 class="text-muted">@lang('Add Taxes'):</h6> --}}
                                        <label for="countrySelect">Enter Role Name</label>
                                        <input type="text" name="name" id="role_name"
                                            placeholder="Enter Role Name" class="form-control">
                                        <br>

                                        <label for="countrySelect">Enter Role Description</label>
                                        <input type="text" name="role_description" id="tax_name"
                                            placeholder="Tax Name" class="form-control">
                                        <br>
                                        <label for="countrySelect">Select User Type</label>
                                        <select class="form-control" name="guard_name" id="country">
                                            <option value="">Select User Type</option>
                                            <option value="Country Admin">Country Admin</option>
                                            <option value="Central Processing Admin EVisa">Central Processing Admin
                                                EVisa</option>
                                            <option value="Central Processing Admin Visa">Central Processing Admin Visa
                                            </option>
                                            <option value="Branch Admin">Branch Admin</option>
                                            <option value="Branch Finance Admin">Branch Finance Admin</option>
                                            <option value="Central Finance Admin">Central Finance Admin</option>
                                            <option value="country Finance Admin">country Finance Admin</option>
                                            <option value="Agency Agent">Agency Agent</option>
                                            <option value="Travel Desk Admin">Travel Desk Admin</option>



                                        </select>
                                        <br>

                                    </div>
                                </div>
                                <div class="modal-footer">

                                    <button class="btn btn-warning" type="submit">@lang('Save Tax')</button>
                                    <button class="btn btn-danger" type="button" class="btn btn-default"
                                        data-dismiss="modal">@lang('Close')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <<div class="modal fade" id="importModal" tabindex="-1" role="dialog"
                aria-labelledby="importModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal content goes here -->
                        <div class="modal-header">
                            <h4 class="modal-title">@lang('Import Currency Configuration')</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <a href="{{ asset('assets/samples/currency.xlsx') }}">@lang('Download Sample Excel File')</a>

                            </div>
                            <div class="form-group">
                                <h6 class="text-muted">@lang('Note'):</h6>
                                <ul class="text-muted">
                                    <li>@lang('Download the Sample Files.')</li>
                                    <li>@lang('Add all the Data on Excel file according to Format')</li>
                                    <li>@lang('Upload the File')</li>
                                    <li>@lang('Press Import')</li>

                                </ul>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" type="submit">@lang('Import File')</button>
                                <button type="button" class="btn btn-default"
                                    data-dismiss="modal">@lang('Close')</button>
                            </div>
                        </div>
                        <div class="modal-footer">
                            {{-- Your modal footer content goes here --}}
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <!-- endinject -->
    <!-- Plugin js for this page -->
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="vendors/js/vendor.bundle.base.js"></script>


    <script src="vendors/chart.js/Chart.min.js"></script>
    {{-- <script src="vendors/datatables.net/jquery.dataTables.js"></script> --}}
    {{-- <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script> --}}
    {{-- <script src="js/dataTables.select.min.js"></script> --}}

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/Chart.roundedBarCharts.js"></script>
    <!-- page-body-wrapper ends -->
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        // Function to open the modal
        function openModal(id) {
            var modal = document.getElementById(id);
            modal.style.display = "block";
        }

        // Function to close the modal
        function closeModal(id) {
            var modal = document.getElementById(id);
            modal.style.display = "none";
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>

    <script>
        function edit_reate() {

            var field = document.getElementById("exchange");
            var edit_on = document.getElementById("edit_rate");
            var save = document.getElementById("save");

            edit_on.disabled = true;
            save.disabled = false;
            field.disabled = false;
        }

        $(document).on("click", ".tryFun", function() {
            var classNames = $(this).attr('class');

            var classesArray = classNames.split(" ");
            var targetClass = classesArray.find(className => className.includes("btnEdit_"));
            var finalClass = targetClass.split('_');

            console.log(finalClass);

            $('.btnInput_' + finalClass[1]).attr('disabled', false);
            $('.btnSave_' + finalClass[1]).attr('disabled', false);
        });

        // $(document).on("click", ".tryFun_save", function() {
        //     var classNames = $(this).attr('class');
        //     var classesArray = classNames.split(" ");
        //     var targetClass = classesArray.find(className => className.includes("btnSave_"));
        //     var editClass = classesArray.find(className => className.includes("btnEdit_"));
        //     var id = editClass ? editClass.split('_')[1] : null;
        //     console.log(id);
        //     if (targetClass && id) {
        //         var finalClass = targetClass.split('_');

        //         var field = $("#exchange");
        //         $.ajax({
        //             url: '/api/exchange_rate/' + id + '/' + field.val(),
        //             method: 'POST',
        //             success: function(response) {
        //                 console.log(response);
        //                 alert("Rate Updated");
        //             },
        //             error: function(error) {
        //                 console.log('Error:', error);
        //             }
        //         });

        //         $('.btnInput_' + id).attr('disabled', true);
        //         $('.btnSave_' + id).attr('disabled', true);
        //         $('.btnEdit_' + id).attr('disabled', false);

        //         $('.btnInput_' + finalClass[1]).attr('disabled', true);
        //         $('.btnSave_' + finalClass[1]).attr('disabled', true);
        //         $('.btnEdit_' + finalClass[1]).attr('disabled', false);
        //     } else {
        //         console.log('ID not found or targetClass not found');
        //     }
        // });

        $(document).on("click", ".tryFun_save", function() {
            var targetButton = $(this).closest('tr.cell-1').find("[class*=btnEdit_]");
            var id = null;
            var fieldVal = null;

            if (targetButton.length) {
                var classNames = targetButton.attr('class');
                var classesArray = classNames.split(" ");
                var editClass = classesArray.find(className => className.includes("btnEdit_"));
                id = editClass ? editClass.split('_')[1] : null;
                fieldVal = $(this).closest('tr.cell-1').find("input[name='exchange'][id='exchange']").val();
            }

            console.log(id);
            console.log(fieldVal);

            if (id) {
                var finalClass = $(this).attr('class').split('_');
                $.ajax({
                    url: '/api/exchange_rate/' + id + '/' + fieldVal,
                    method: 'POST',
                    success: function(response) {
                        console.log(response);
                        alert("Rate Updated");
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
                // Rest of your code...
            } else {
                console.log('ID not found');
            }
            $('.btnInput_' + id).attr('disabled', true);
            $('.btnSave_' + id).attr('disabled', true);
            $('.btnEdit_' + id).attr('disabled', false);
        });






        function save_rate(id) {

            var field = document.getElementById("exchange");
            var edit_on = document.getElementById("edit_rate");
            var save = document.getElementById("save");

            $.ajax({
                url: '/api/exchange_rate/' + id + '/' + field.value,
                method: 'POST',
                success: function(response) {
                    console.log(response);
                    alert("Rate Updated");
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });


            edit_on.disabled = false;
            save.disabled = true;
            field.disabled = true;
        }
    </script>




</body>

</html>
