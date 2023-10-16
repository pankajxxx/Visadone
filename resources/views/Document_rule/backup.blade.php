{{-- @extends('layout.app') --}}

<head>
    <!-- Required meta tags -->
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link href="./images/visadone_logo.png" />
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
    </style>
    <style>
        .sticky-header {
            position: relative;
        }

        .sticky-header thead {
            position: sticky;
            top: 0;
            z-index: 1;
            background-color: #4b49ac;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
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
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="..images/visadone_logo.png"
                    class="mr-2" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="..images/visadone_logo.png"
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
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                        aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
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
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
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
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                            <i class="bi bi-speedometer"></i>
                            <span class="menu-title">&nbsp;Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/documentation/documentation.html">
                            <i class="bi bi-person-lines-fill"> </i>
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
                            <span class="menu-title">External Fulfillment</span>
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
                            <span class="menu-title">
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
        {{-- <div class="row">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title">User Management</p>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table id="example" class="display expandable-table"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Quote#</th>
                                                        <th>Product</th>
                                                        <th>Business type</th>
                                                        <th>Policy holder</th>
                                                        <th>Premium</th>
                                                        <th>Status</th>
                                                        <th>Updated at</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        const table = document.getElementById('example');
                        const rows = table.getElementsByTagName('tr');
                        const numColumns = table.rows[0].cells.length;

                        // Create input fields for filtering dynamically
                        const filterInputsContainer = document.createElement('div');
                        filterInputsContainer.id = 'filterInputs';
                        filterInputsContainer.className = 'row my-0';
                        table.parentNode.insertBefore(filterInputsContainer, table);

                        for (let i = 0; i < numColumns; i++) {
                            if (i === 6 || i === 7) continue; // Skip columns 7 and 8

                            const inputDiv = document.createElement('div');
                            inputDiv.className = 'col-md-2 mb-3';

                            const input = document.createElement('input');
                            input.type = 'text';
                            input.placeholder = 'Search Here';
                            input.className = 'form-control';
                            input.style.borderRadius = '10px';
                            input.style.fontFamily = 'Verdana, sans-serif';
                            // input.className = 'table-responsive';
                            inputDiv.appendChild(input);

                            filterInputsContainer.appendChild(inputDiv);
                        }

                        // Attach event listeners to input fields
                        const filterInputs = filterInputsContainer.getElementsByTagName('input');
                        for (const input of filterInputs) {
                            input.addEventListener('input', filterTable);
                        }

                        function filterTable() {
                            const filterValues = Array.from(filterInputs).map(input => input.value.toUpperCase());

                            for (let i = 1; i < rows.length; i++) {
                                const cells = rows[i].getElementsByTagName('td');
                                let showRow = true;

                                for (let j = 0; j < cells.length; j++) {
                                    if (j === 6 || j === 7) continue; // Skip columns 7 and 8

                                    const cell = cells[j];
                                    const cellText = cell.innerText.toUpperCase();
                                    const filterValue = filterValues[j];

                                    if (cellText.indexOf(filterValue) === -1) {
                                        showRow = false;
                                        break;
                                    }
                                }

                                rows[i].style.display = showRow ? '' : 'none';
                            }
                        }
                    </script>

                </div>
            </div>
            <div class="row">
            </div> --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">@lang('Document Rule Config Management') &nbsp;
                                <a href="/offers_rules/create" class="btn btn-success">@lang('Add Document Rules')</a>
                                <a href="" class="btn btn-success">@lang('Export Document Rules')</a>
                                <a href="" class="btn btn-success">@lang('Import Document Rules')</a>
                            </p>

                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">


                                        <div class="form-inline">
                                            {{-- <label class="sr-only" for="inlineFormInputName2">Name</label> --}}
                                            {{-- <input type="text" name="nationality"
                                                class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                                placeholder="Nationality"> --}}
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-location-arrow"
                                                            aria-hidden="true"></i></div>
                                                </div>
                                                <select class="form-control" id="nationality">
                                                    <option value="">Select Nationality</option>
                                                    @foreach ($country as $option)
                                                        <option name="nationality"
                                                            value="{{ $option->country_name }}">
                                                            {{ $option->country_name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                            {{-- <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label> --}}
                                            <div class="input-group mb-2 mr-sm-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-plane"
                                                            aria-hidden="true"></i></div>
                                                </div>
                                                <select class="form-control" onchange="getoffers()" id="destination">
                                                    <option value="">Select Destination</option>
                                                    @foreach ($country as $option)
                                                        <option name="destination"
                                                            value="{{ $option->country_name }}">
                                                            {{ $option->country_name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="input-group mb-2 mr-sm-2">
                                                {{-- <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-filter"
                                                            aria-hidden="true"></i></div>
                                                </div> --}}
                                                <select class="form-control" id="optionsDropdown" hidden>
                                                    <option class="dropdown-item" value="">-</option>

                                                </select>
                                            </div>
                                            <div class="form-check mx-sm-2">

                                            </div>
                                            <input type="submit" value="Get Documents" class="btn btn-primary mb-2"
                                                onclick="getDocument()"></button>&nbsp;
                                            <input type="submit" value="Update Document"
                                                class="btn btn-primary mb-2" onclick=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="table-responsive" style="max-height: 530px; overflow-y: auto;">
                                        <table id="countryTable" class="table sticky-header"
                                            style="border: 1px solid black; table-layout: fixed;">
                                            <thead style="color:#fff; font-family: 'Open Sans', sans-serif;">
                                                <tr>
                                                    <th style="background-color:#4b49ac; width: 4%;"
                                                        class="text-center"></th>
                                                    <th style="background-color:#4b49ac; width: 16%;"
                                                        class="text-center" onclick="sortTable(0)">
                                                        Country Names</th>
                                                </tr>
                                            </thead>

                                            <tbody class="table-body">
                                                <!-- Table rows here -->
                                                {{-- @if (!empty($offers)) --}}
                                                @foreach ($country as $country_name)
                                                    <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                        <td><input type="checkbox" class="chh"
                                                                value="{{ $country_name->country_name }}"></td>
                                                        <td class="text-center">{{ $country_name->country_name }}
                                                            <hr><b>
                                                                <p
                                                                    id="additionalData_{{ $country_name->country_name }}">
                                                                </p>
                                                            </b>
                                                        </td>
                                                    </tr>
                                                @endforeach

                                                {{-- @endforeach --}}
                                                </tr>
                                                {{-- @endif --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="table-responsive" style="max-height: 530px; overflow-y: auto;">
                                        <table id="data-table5449" class="table sticky-header">
                                            <thead style="color:#fff;font-family: 'Open Sans', sans-serif;">
                                                <tr>
                                                    <th style="background-color:#4b49ac; width: 4%;"
                                                        class="text-center">
                                                    </th>
                                                    <th style="background-color:#4b49ac; width: 70%;"
                                                        class="text-center" onclick="sortTable(0)">Document Name</th>
                                                    {{-- <th style="background-color:#4b49ac; width: 17%;" onclick="sortTable(1)">
                                                Document Type</th>
                                            <th style="background-color:#4b49ac; width: 17%;" onclick="sortTable(2)">
                                                Document Condition</th> --}}
                                                    <th style="background-color:#4b49ac;">Action</th>


                                                </tr>
                                            </thead>
                                            <tbody class="table-body">
                                                <!-- Table rows here -->
                                                {{-- @if (!empty($offers))
                                            @foreach ($offers as $data_user)
                                                <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                    <td><input type="checkbox"></td>
                                                    <td class="text-center">{{ $data_user->visa_type }}</td>
                                                    <td class="text-center">{{ $data_user->visa_category }}</td>
                                                    <td class="text-center">{{ $data_user->entry_fees }}</td>
                                                    <td class="text-center">{{ $data_user->processing_time }} Working
                                                        Days</td>
                                                    <td class="text-center">{{ $data_user->visa_validity }}</td>

                                                    <td class="text-center">{{ $data_user->status }}</td>

                                                    <td class="text-center"><i class="fa fa-pencil"
                                                            aria-hidden="true"></i></td>
                                                </tr>
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="8" style="text-align: center;">No Data Available</td>
                                            </tr>
                                        @endif --}}
                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script>
            const table = document.getElementById('example1');
            const rows = table.getElementsByTagName('tr');
            const numColumns = table.rows[0].cells.length;

            // Create input fields for filtering dynamically
            const filterInputsContainer = document.createElement('div');
            filterInputsContainer.id = 'filterInputs';
            filterInputsContainer.className = 'row my-0';
            table.parentNode.insertBefore(filterInputsContainer, table);

            const columnWidths = ['100%', '100%', '100%', '100%', '100%', '100%', '100%', '100%'];
            const tableHeadings = Array.from(table.querySelectorAll('th')).map(th => th.innerText);

            for (let i = 0; i < numColumns; i++) {
                if (i === 6 || i === 7) continue; // Skip columns 7 and 8

                const inputDiv = document.createElement('div');
                inputDiv.className = 'col-md-2 mb-2';

                const input = document.createElement('input');
                input.type = 'text';
                input.placeholder = tableHeadings[i];
                input.className = 'form-control';
                input.style.borderRadius = '10px';
                input.style.fontFamily = 'Verdana, sans-serif';
                input.style.width = columnWidths[i];

                inputDiv.appendChild(input);

                filterInputsContainer.appendChild(inputDiv);
            }

            // Attach event listeners to input fields
            const filterInputs = filterInputsContainer.getElementsByTagName('input');
            for (const input of filterInputs) {
                input.addEventListener('input', filterTable);
            }

            function filterTable() {
                const filterValues = Array.from(filterInputs).map(input => input.value.toUpperCase());

                for (let i = 1; i < rows.length; i++) {
                    const cells = rows[i].getElementsByTagName('td');
                    let showRow = true;

                    for (let j = 0; j < cells.length; j++) {
                        if (j === 6 || j === 7) continue; // Skip columns 7 and 8

                        const cell = cells[j];
                        const cellText = cell.innerText.toUpperCase();
                        const filterValue = filterValues[j];

                        if (cellText.indexOf(filterValue) === -1) {
                            showRow = false;
                            break;
                        }
                    }

                    rows[i].style.display = showRow ? '' : 'none';
                }
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
                        $('#optionsDropdown').empty();
                        console.log(response);
                        // Iterate over the response and append options to the drop-down
                        $.each(response, function(index, option) {
                            $('#optionsDropdown').append('<option class="dropdown-item" value="' + option
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

        <script>
            function update_nationality() {
                var nation = [];
                var checkboxes = document.querySelectorAll('#countryTable input[type="checkbox"]:checked');
                for (var i = 0; i < checkboxes.length; i++) {
                    nation.push(checkboxes[i].value);
                }

                var offer_id = document.getElementById('offer_put').value;

                // console.log(offer_id);
                // console.log(nation);

                var data = {
                    offer_id: offer_id,
                    nation: nation
                };

                $.ajax({
                    url: '/api/updatenation/' + offer_id + '/' + nation,
                    method: 'POST',
                    data: JSON.stringify(data),
                    contentType: 'application/json',
                    success: function(response) {
                        // Assuming the nationalities are stored in response.nation array

                        console.log(response);
                        alert("Data Updated");

                        // Iterate over the nationalities array

                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        </script>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            function getDocument() {
                // Make the AJAX request
                var nationality = document.getElementById('nationality').value;
                var destination = document.getElementById('destination').value;
                var offer_id = document.getElementById('optionsDropdown').value;

                $.ajax({
                    url: '/api/document/' + nationality + '/' + destination,
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // Clear existing table data
                        var tbody = $('#data-table5449 tbody');
                        // console.log(response.x[0].visa_type);
                        tbody.empty();
                        console.log(response);

                        // Iterate over the response and append rows to the table
                        $.each(response, function(index, option) {
                            var row = '<tr>' +
                                '<td><input type="checkbox" id="offer_id" value="' + option.vid +
                                '" onchange="view_nation(' + option.id + ')"></td>' +
                                // '<td>' + option.id + '</td>' +
                                // '<td>' + option.document_type + '</td>' +
                                '<td>' + option.document_name + '</td>' +
                                '<td class="text-left"><a href="/offers_rules/edit/' + option.id +
                                '" class="fa fa-pencil" aria-hidden="true"></a></td>' +
                                '</tr>';
                            tbody.append(row);
                        });


                    }
                });
            }

            $(document).ready(function() {
                getDocument(); // Call the function to populate the table when the document is ready
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>




        <script>
            $('.chh').change(function() {
                var offer_id = $('#additionalData_' + $(this).val());

                // Get the text content of the element using jQuery
                var offerTypeText = offer_id.text();

                // Extract the "Offer Type" from the text content
                var offerType = offerTypeText.split(':')[2].trim();

                // Extract the "Offer Price" from the text content
                var offerID = offerTypeText.split(':')[3].trim();
                console.log(offerID);

                // JSON data to be sent in the AJAX request
                var jsonData = {
                    "offer_id": parseInt(
                    offerID), // Assuming the offerID is a number, convert it to an integer if needed
                    "document_id": 9 // Replace this with the appropriate document_id value
                };
                console.log(jsonData);
                $.ajax({
                    url: "http://127.0.0.1:8000/api/offer/update",
                    type: "POST", // Change to "GET" or "POST" depending on your server-side implementation
                    data: JSON.stringify(jsonData), // Convert JSON data to a string
                    contentType: "application/json", // Set the content type to JSON
                    dataType: "json", // Specify the data type of the response
                    success: function(response) {
                        // Handle the response from the server (if applicable)
                        console.log("Success:", response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        // Handle errors, if any
                        console.log("Error:", textStatus, errorThrown);
                    }
                });
            });



            function view_nation(id) {
                console.log(id);
                var update_field = document.getElementById("offer_put");
                // update_field.value = id;

                $.ajax({
                    url: '/api/getdocument/' + id,
                    method: 'GET',
                    success: function(response) {
                        const data = response;

                        const countries = ["Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa",
                            "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina",
                            "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
                            "Bhutan", "Bolivia", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina",
                            "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
                            "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon",
                            "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad",
                            "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia",
                            "Comoros", "Congo", "Congo, The Democratic Republic of ", "Cook Islands",
                            "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark",
                            "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador",
                            "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia",
                            "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France",
                            "French Guiana", "French Polynesia", "French Southern Territories", "Gabon",
                            "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland",
                            "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau",
                            "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)",
                            "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia",
                            "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy",
                            "Jamaica", "Japan", "Jersey", "Jordan", "Kazakstan", "Kenya", "Kiribati",
                            "Korea, Democratic People's Republic of", "Korea, Republic of",
                            "Kosovo (temporary code)", "Kuwait", "Kyrgyzstan",
                            "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia",
                            "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao",
                            "Macedonia, The Former Yugoslav Republic Of", "Madagascar", "Malawi", "Malaysia",
                            "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania",
                            "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of",
                            "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco",
                            "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands",
                            "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger",
                            "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman",
                            "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama",
                            "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland",
                            "Portugal", "Puerto Rico", "Qatar", "Republic of Serbia", "Reunion", "Romania",
                            "Russia Federation", "Rwanda", "Saint Helena", "Saint Kitts & Nevis", "Saint Lucia",
                            "Saint Martin", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines",
                            "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal",
                            "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten",
                            "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa",
                            "South Georgia & The South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka",
                            "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland",
                            "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan",
                            "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau",
                            "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                            "Turkish Rep N Cyprus (temporary code)", "Turkmenistan", "Turks and Caicos Islands",
                            "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
                            "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan",
                            "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands, British",
                            "Virgin Islands, U.S.", "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia",
                            "Zimbabwe"
                        ]; // Replace with your actual list of countries

                        const obj = data
                            .result; // Assuming the response data has a property named 'result' containing the country data
                        var x = 0;
                        for (const country of countries) {
                            if (obj && obj[x][country] && obj[x][country].length > 0) {
                                for (const offer of obj[x][country]) {
                                    const offerId = offer.offer_id;
                                    const offerPrice = offer.offer_price;
                                    const offerType = offer.offer_type;

                                    console.log(`Country: ${country}`);
                                    console.log(`Offer ID: ${offerId}`);
                                    console.log(`Offer Price: ${offerPrice}`);
                                    console.log(`Offer Type: ${offerType}`);
                                    console.log('---');

                                    // Find the checkbox corresponding to the nationality and set it as checked
                                    var checkboxFound = false;

                                    $('#countryTable input[type="checkbox"]').each(function() {
                                        if ($(this).val() === country) {
                                            $(this).prop('checked', true);
                                            checkboxFound = true;
                                            console.log('additionalData_' + country);
                                            // $('#additionalData_' + country).html('Offer Type: ' +
                                            //     offerType + ',<br> Offer Price: ' + offerPrice+'<input type = 'hidden' value='+offerId+' id = 'offer_id_list' />');
                                            $('#additionalData_' + country).html('Offer Type: ' +
                                                offerType + ',<br> Offer Price: ' + offerPrice +
                                                'Offer ID:' + offerId);

                                        }
                                    });

                                    $('#countryTable td').each(function() {
                                        if ($(this).text() === country) {
                                            // $(this).find('input[type="checkbox"]').prop('checked', true);
                                            $(this).find('span').text('additionalData_' + offerId);
                                            checkboxFound = true;
                                        }
                                    });


                                    if (!checkboxFound) {
                                        console.log('Checkbox not found for country: ' + country);
                                    }
                                }
                            }
                            x++;
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            }
        </script>


        <script src="vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="vendors/chart.js/Chart.min.js"></script>
        <script src="vendors/datatables.net/jquery.dataTables.js"></script>
        <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
        <script src="js/dataTables.select.min.js"></script>

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
    </div>
