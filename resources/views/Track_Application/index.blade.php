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
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/visadone_logo.png"" alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')

        <div class="content-wrapper">
            {{-- <div class="container-fluid"> --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-title">@lang('Track Application') &nbsp;<br><br>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <form action="/search" method="GET">
                                                <div class="input-group">
                                                    <input type="text" name="search_name"
                                                        class="form-control border-1 rounded-0" id="searchInput"
                                                        placeholder="Search...">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary rounded-0"
                                                            type="submit">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary rounded-0"
                                                            type="button" onclick="removeText()" id="clearSearch">
                                                            <i class="fa fa-times" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-6 d-flex justify-content-end">
                                        <!-- Use 'd-flex' and 'justify-content-end' classes for alignment -->
                                        <div class="form-group">

                                            <form action="/search_range" method="GET">
                                                <div class="input-group">
                                                    <input type="date" name="from" class="form-control"
                                                        id="dateFilter">
                                                    <input type="date" name="to" class="form-control"
                                                        id="dateFilter">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="submit">
                                                            <i class="fa fa-calendar" aria-hidden="true"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>





                            <!-- Date Filter -->



                            <a href="/track"
                                class="btn btn-outline-secondary {{ request()->is('track') ? 'active' : '' }}">@lang('All Applications')</a>
                            <a href="/track/active"
                                class="btn btn-outline-secondary {{ request()->is('track/active') ? 'active' : '' }}">@lang('Active')</a>
                            <a href="/track/inactive"
                                class="btn btn-outline-secondary {{ request()->is('track/inactive') ? 'active' : '' }}">@lang('in Active')</a>
                            <a href="/track/Ready To Submit"
                                class="btn btn-outline-secondary {{ request()->is('track/Ready To Submit') ? 'active' : '' }}">@lang('Ready To Submit')</a>
                            <a href="/track/In Process"
                                class="btn btn-outline-secondary {{ request()->is('track/In Process') ? 'active' : '' }}">@lang('In Process')</a>
                            <a href="/track/Completed Application"
                                class="btn btn-outline-secondary {{ request()->is('track/Completed Application') ? 'active' : '' }}">@lang('Completed Application')</a>
                            <a href="/track/Held Applications"
                                class="btn btn-outline-secondary {{ request()->is('track/Held Applications') ? 'active' : '' }}">@lang('Held Applications')</a>
                            <a href="/track/Archived"
                                class="btn btn-outline-secondary {{ request()->is('track/Archived') ? 'active' : '' }}">@lang('Archived')</a>

                            </p>

                            <div class="table-responsive" style="overflow-x: auto;">
                                <table class="table" id="example1">
                                    <thead style="color:#fff;font-family: 'Open Sans', sans-serif;">
                                        <tr style="border: none;">
                                            <th style="background-color:#f8c37f;" class="text-center"
                                                style="border: none;"></th>
                                            <th style="background-color:#f8c37f;" class="text-center"
                                                onclick="sortTable(0)" style="border: none;">Ref ID.</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(1)"
                                                style="border: none;">
                                                Applicants#</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(2)"
                                                style="border: none;">
                                                Nationality</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(3)"
                                                style="border: none;">
                                                Destination</th>

                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Arrival Date</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Departure Date</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Created At</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Visa Type</th>
                                            {{-- <th style="background-color:#4b49ac;" onclick="sortTable(4)">
                                                    Processed Center</th> --}}
                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Status</th>
                                            <th style="background-color:#f8c37f;" onclick="sortTable(4)"
                                                style="border: none;">
                                                Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-body">
                                        <!-- Table rows here -->
                                        @php
                                            $jsonData = json_decode($restructuredJson);
                                        @endphp
                                        @if (empty($jsonData))
                                            <tr>
                                                <td colspan="10" class="text-center">No Data Found</td>
                                            </tr>
                                        @else
                                            @foreach ($jsonData as $item)
                                                <tr class="accordion-toggle" style="border: none;">
                                                    <td><input type="checkbox"
                                                            style="height: 56px;background-color: rgb(143, 212, 255);">
                                                    </td>
                                                    <td class="text-center">{{ $item->visa_id }}</td>
                                                    <td>{{ $item->application_count }}</td>
                                                    <td>{{ $item->nationality }}</td>
                                                    <td>{{ $item->destination }}</td>
                                                    <td>{{ $item->To_date }}</td>
                                                    <td>{{ $item->To_date }}</td>
                                                    <td>{{ $item->created_at }}</td>
                                                    <td>{{ $item->visa_type }} Days</td>
                                                    <td>
                                                        {{ $item->status }}
                                                        {{-- @dump($item->status) --}}
                                                    </td>
                                                    <td class="text-center" style="border-left: 1px solid #ccc;">
                                                        @if ($item->status === 'Ready To Submit')
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-info" style="color:white;">In
                                                                    Process</button>
                                                            </a>
                                                        @elseif ($item->status === 'In Process')
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-success"
                                                                    style="color:white;">Complete Application</button>
                                                            </a>
                                                        @elseif ($item->status === 'Completed Application')
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-warning"
                                                                    style="color:white;">Held Application</button>
                                                            </a>
                                                        @elseif ($item->status === 'Held Application')
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-danger"
                                                                    style="color:white;">Archived Application</button>
                                                            </a>
                                                        @elseif ($item->status === 'Download Visa')
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-danger"
                                                                    style="color:white;">Archived Application</button>
                                                            </a>
                                                        @else
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-danger"><i
                                                                        class="fa fa-archive"
                                                                        aria-hidden="true"></i></button>
                                                            </a>
                                                            <a
                                                                href="/track/{{ $item->visa_id }}/{{ $item->status }}">
                                                                <button class="btn btn-primary"><i
                                                                        class="fa fa-pencil-square-o"
                                                                        aria-hidden="true"></i></button>
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <p></p>
                                                <!-- Additional row (hidden by default) -->
                                                @foreach ($item->applications as $application)
                                                    <tr class="pt-2"
                                                        style="border-right: none;background-color: antiquewhite;">
                                                        <td colspan="1" class="hidden-row">
                                                            <div class="accordion-body collapse"
                                                                id="demo_{{ $item->visa_id }}">
                                                        <td colspan="3"
                                                            style="border-right: 1px solid #ccc;background-color: antiquewhite;">
                                                            First Name: {{ $application->firstname }}
                                                        </td>
                                                        <td colspan="4"
                                                            style="border-right: 1px solid #ccc;background-color: antiquewhite;">
                                                            Surname: {{ $application->surname }}
                                                        </td>
                                                        <td colspan="5"
                                                            style="border-right: 1px solid #ccc;background-color: antiquewhite;">
                                                            Passport Number: {{ $application->passport }}
                                                        </td>
                            </div>
                            </td>
                            </tr>
                            @endforeach
                            @endforeach
                            @endif

                            </tbody>
                            </table>
                        </div>
                        {{-- {{ $restructuredJson->links() }} --}}
                    </div>
                </div>
            </div>
            {{-- </div> --}}
        </div>
    </div>
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
</body>

</html>
