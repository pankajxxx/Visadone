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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'" rel="stylesheet" />
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
</head>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="http://127.0.0.1:8000/images/visadone_logo.png" class="mr-2" alt="logo" /></a>
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
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">
                                <i class="bi bi-speedometer"></i>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="new_visa.html">
                                <i class="bi bi-person-lines-fill"> </i>
                                <span class="menu-title">&nbsp;New Visa</span>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                  <a class="nav-link" href="index.html">
                    <i class="icon-grid menu-icon"></i>
                    <span class="menu-title">New Visa</span>
                  </a>
                </li> -->

                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-search"></i>
                                <span class="menu-title">Track Application</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                                <span class="menu-title">External Fulfillment</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-airplane-fill"></i>
                                <span class="menu-title">Travel Insurance</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-clipboard2-data-fill"></i>
                                <span class="menu-title">Data E-sim</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-bar-chart-fill"></i>
                                <span class="menu-title">Branch Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-box-fill"></i>
                                <span class="menu-title">
                                    Agent Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-file-bar-graph-fill"></i>
                                <span class="menu-title">Agency Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-qr-code"></i>
                                <span class="menu-title">Coupon Code</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-menu-down"></i>
                                <span class="menu-title">Visa Offer Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-person-lines-fill"></i>
                                <span class="menu-title">Document Rule Engine</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-person-vcard-fill"></i>
                                <span class="menu-title">User Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-person-workspace"></i>
                                <span class="menu-title">User Role Config</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-currency-dollar"></i>
                                <span class="menu-title">Currency Configuration</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-globe2"></i>
                                <span class="menu-title">Travel Desk Management</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages/documentation/documentation.html">
                                <i class="bi bi-book-half"></i>
                                <span class="menu-title">Reports</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-description">Dynamic Form</h3>
                                    <div class="form-sample">
                                        <hr>
                                        <form>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    @foreach ($data as $fields)
                                                    @if ($fields->is_dropdown == 'Yes' && $fields->conditional_filed != '1')
                                                    <div class="form-group">
                                                        <div class="input-field with-divider">
                                                            @if ($fields->default_values == 'Country List')
                                                            <select class="form-control" name="destination" id="destination" @if ($fields->is_required == 'Yes') required @endif>
                                                                <option value="" disabled @if (!$fields->is_required) selected @endif>Select</option>
                                                                @foreach ($country as $option)
                                                                <option name="destination" value="{{ $option->country_name }}">{{ $option->country_name }}</option>
                                                                @endforeach
                                                            </select>
                                                            @else
                                                            <select class="form-control" id="dropdown-select">
                                                                <option value="" disabled @if (!$fields->is_required) selected @endif>Select an option</option>
                                                                <?php
                                                                $values = $fields->default_values;
                                                                $options = explode(', ', $values);
                                                                foreach ($options as $option) {
                                                                    echo "<option value='$option'>$option</option>";
                                                                }
                                                                ?>
                                                            </select>
                                                            @endif
                                                            <label class="input-field-label">{{ $fields->field_name }}</label>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                                <div class="col-md-6">
                                                    @foreach ($data as $fields)
                                                    @if ($fields->is_dropdown != 'Yes' && $fields->conditional_filed != '1')
                                                    <div class="form-group">
                                                        <div class="input-field with-divider">
                                                            <input type="text" class="form-control" id="input-{{ $fields->field_name }}" required spellcheck="false">
                                                            <label class="input-field-label">{{ $fields->field_name }}@if ($fields->is_required == 'Yes') * @endif</label>
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>

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
                    </div>

                    <div id="cardContainer"></div>
                </div>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 | All Rights
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
</body>

</html>
