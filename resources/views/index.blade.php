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
            <img class="animation__shake" src="images/visadone_logo.png"" alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active">VisaDone Dashboard</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <div class="row col-12 ">
                <div class="col-lg-6">

                    <h3 class="font-weight-bold" style="padding-left: 2%;">Welcome To Visadone <h2
                            style="padding-left: 2%;">{{ session('name') }}</h2>
                    </h3>
                    <h6 class="font-weight-normal mb-0" style="padding-left: 2%;">All systems are running smoothly!

                    </h6>
                </div>

                <div class="col-lg-6">
                    <div class="card" style="width: 97%;">
                        <div class="card-header border-0">
                            <div class="d-flex justify-content-between">
                                <h3 class="card-title">Total Applications</h3>
                                <a href="/track">View Applications</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="d-flex flex-column">
                                    <span class="text-bold text-lg">{{$visa_count}}</span>
                                    <span>Visa Over Time</span>
                                </p>
                                <p class="ml-auto d-flex flex-column text-right">
                                    <span class="text-success">
                                        <i class="fas fa-arrow-up"></i> 1.5%
                                    </span>
                                    <span class="text-muted">Since last week</span>
                                </p>
                            </div>
                            <!-- /.d-flex -->


                        </div>
                    </div>

                </div><br><br>
                <!-- Main content DO NOT TOUCH -->
                <section class="content">
                    <div class="container-fluid">


                        {{-- ROW -1 OF DASHBOARD --}}
                        <div class="row col-12  ">
                            {{-- Statistics --}}
                            <section class="col-lg-6 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Statistics</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="chart-responsive">
                                                    <canvas id="myChart_pie">
                                                    </canvas>

                                                </div>

                                                <!-- ./chart-responsive -->
                                            </div>
                                            <!-- /.col -->
                                            <div class="col-md-4" style="padding-left:16%;">
                                                {{-- <ul class="chart-legend clearfix">
                                                <li><i class="far fa-circle text-danger"></i> Chrome</li>
                                                <li><i class="far fa-circle text-success"></i> IE</li>
                                                <li><i class="far fa-circle text-warning"></i> FireFox</li>
                                                <li><i class="far fa-circle text-info"></i> Safari</li>
                                                <li><i class="far fa-circle text-primary"></i> Opera</li>
                                                <li><i class="far fa-circle text-secondary"></i> Navigator</li>
                                            </ul> --}}
                                            </div>
                                            <!-- /.col -->
                                        </div>
                                        <!-- /.row -->
                                    </div>
                                    <!-- /.card-body -->

                                    <!-- /.footer -->
                                </div>
                                <!-- /.card -->
                            </section>
                            {{-- END --}}


                            {{-- Bussiness Health --}}
                            <section class="col-lg-6 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-pie mr-1"></i>
                                            Bussiness Health
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">


                                            </ul>
                                        </div>
                                    </div><!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="tab-content p-0">
                                            <!-- Morris chart - Sales -->
                                            <div class="chart tab-pane active" id="revenue-chart"
                                                style="position: relative; height: 300px;">
                                                <canvas id="myChart_line" style="width:100%;max-width:600px"></canvas>
                                            </div>
                                            <div class="chart tab-pane" id="sales-chart"
                                                style="position: relative; height: 300px;">
                                                <canvas id="sales-chart-canvas" height="300"
                                                    style="height: 300px;"></canvas>
                                            </div>
                                        </div>
                                    </div><!-- /.card-body -->
                                </div>
                                <!-- /.card -->


                            </section>
                            {{-- END --}}

                        </div>

                        {{-- ROW -MID OF DASHBOARD --}}
                        <div class="row col-12  ">
                            <section class="col-lg-6 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-pie mr-1"></i>
                                            Top 5 Destinations(6 Months)
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#revenue-chart"
                                                        data-toggle="tab"></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#sales-chart" data-toggle="tab"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
                                    </div><!-- /.card-header -->

                                </div>
                                <!-- /.card -->
                            </section>
                            <section class="col-lg-6 connectedSortable">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">
                                            <i class="fas fa-chart-pie mr-1"></i>
                                            Top 5 Destinations(Current Month)
                                        </h3>
                                        <div class="card-tools">
                                            <ul class="nav nav-pills ml-auto">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#revenue-chart"
                                                        data-toggle="tab"></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#sales-chart" data-toggle="tab"></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <canvas id="revenue-chart-canvas" height="300" width="600px;"
                                            style="height: 300px;"></canvas>
                                    </div><!-- /.card-header -->

                                </div>
                                <!-- /.card -->
                            </section>


                        </div>

                        <!-- Small boxes (Stat box) -->
                        <div class="row">

                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{ $visa_status }}</h3>

                                        <p>In Draft</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>53<sup style="font-size: 20px"></sup></h3>

                                        <p>Pending Submission</p>
                                    </div>
                                    <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Pending Submission</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-file-o" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Archived</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-archive" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>

                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-light">
                                    <div class="inner">
                                        <h3>50</h3>

                                        <p>RPA Queue</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-slack" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box" style="background-color: #FFA500;">
                                    <div class="inner">
                                        <h3>38<sup style="font-size: 20px"></sup></h3>

                                        <p>RPA Processed</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box" style="background-color: #b884db;">
                                    <div class="inner">
                                        <h3>44</h3>

                                        <p>Decision Taken</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-handshake-o" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box" style="background-color: #ecff60;">
                                    <div class="inner">
                                        <h3>65</h3>

                                        <p>Submitted To RPA</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-check-square" aria-hidden="true"></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i
                                            class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->
                        </div>

                        {{-- SILDERS --}}
                        <div class="row">
                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card position-relative">
                                    <div class="card-body">
                                        <div id="detailedReports"
                                            class="carousel slide detailed-report-carousel position-static pt-2"
                                            data-ride="carousel">

                                            <div class="carousel-inner">

                                                @foreach ($destination as $key => $data)
                                                    <div class="carousel-item{{ $key === 0 ? ' active' : '' }}">
                                                        <div class="row">
                                                            <div
                                                                class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                                <div class="ml-xl-4 mt-3">


                                                                    <h3 class="font-weight-500 mb-xl-4 text-primary">
                                                                        {{ $data->destination }}</h3>
                                                                    <p class="mb-2 mb-xl-0">The total number of visa
                                                                        applications within the specified date range.
                                                                        This
                                                                        represents the period during which individuals
                                                                        have
                                                                        actively engaged in applying for a visa on your
                                                                        website or application.c</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-xl-9">
                                                                <div class="row">
                                                                    <div class="col-md-6 border-right">
                                                                        <div
                                                                            class="table-responsive mb-3 mb-md-0 mt-3">
                                                                            <table
                                                                                class="table table-borderless report-table">
                                                                                <tr>
                                                                                    <td class="text-muted">Standard
                                                                                        Visa
                                                                                    </td>
                                                                                    <td class="w-100 px-0">
                                                                                        <div
                                                                                            class="progress progress-md mx-4">
                                                                                            <div class="progress-bar bg-primary"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $data->visa_type_selected == 'standard visa' ? $data->count : 0 }}%"
                                                                                                aria-valuenow="{{ $data->visa_type_selected == 'standard visa' ? $data->count : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <h5
                                                                                            class="font-weight-bold mb-0">
                                                                                            {{ $data->visa_type_selected == 'standard visa' ? $data->count : 0 }}
                                                                                        </h5>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-muted">Sticker Visa
                                                                                    </td>
                                                                                    <td class="w-100 px-0">
                                                                                        <div
                                                                                            class="progress progress-md mx-4">
                                                                                            <div class="progress-bar bg-warning"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $data->visa_type_selected == 'sticker visa' ? $data->count : 0 }}%"
                                                                                                aria-valuenow="{{ $data->visa_type_selected == 'sticker visa' ? $data->count : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <h5
                                                                                            class="font-weight-bold mb-0">
                                                                                            {{ $data->visa_type_selected == 'sticker visa' ? $data->count : 0 }}
                                                                                        </h5>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-muted">E-Visa</td>
                                                                                    <td class="w-100 px-0">
                                                                                        <div
                                                                                            class="progress progress-md mx-4">
                                                                                            <div class="progress-bar bg-danger"
                                                                                                role="progressbar"
                                                                                                style="width: {{ $data->visa_type_selected == 'Bussiness' ? $data->count : 0 }}%"
                                                                                                aria-valuenow="{{ $data->visa_type_selected == 'Bussiness' ? $data->count : 0 }}"
                                                                                                aria-valuemin="0"
                                                                                                aria-valuemax="100">
                                                                                            </div>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <h5
                                                                                            class="font-weight-bold mb-0">
                                                                                            {{ $data->visa_type_selected == 'Bussiness' ? $data->count : 0 }}
                                                                                        </h5>
                                                                                    </td>
                                                                                </tr>
                                                                            </table>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6 mt-3">
                                                                        <canvas id="north-america-chart"></canvas>
                                                                        <div id="north-america-legend"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>

                                            <a class="carousel-control-prev" href="#detailedReports" role="button"
                                                data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#detailedReports" role="button"
                                                data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.container-fluid -->
                </section>

                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <section>

            </section>
            {{-- <footer class="main-footer">
                <strong>Copyright &copy; 2014-2021 <a href="https://visadone.com">visadone.com</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.2.0
                </div>
            </footer> --}}

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->
        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
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


        {{-- DO NOT Change Untile Controller Data is Ready    Scatter for Top 5 Destinations --}}
        <script>
            const json_top = {!! json_encode($destination) !!};

            // Initialize arrays for destination names and count values
            const zaValues = [];
            const qaValues = [];

            // Iterate through the json object and extract values
            json_top.forEach(item => {
                // Push destination names to zaValues
                zaValues.push(item.destination);
                // Push count values to qaValues
                qaValues.push(item.count);
            });

            console.log('zaValues:', zaValues);
            console.log('qaValues:', qaValues);

            const xValues = zaValues;
            const yValues = qaValues;

            new Chart("myChart", {
                type: "scatter", // Use "scatter" type for a dot chart
                data: {
                    datasets: [{
                        label: 'Top Destinations Applications(6 Months)',
                        data: xValues.map((value, index) => ({
                            x: value,
                            y: yValues[index]
                        })),
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        x: {
                            type: 'category', // Use category scale for the x-axis
                            labels: xValues,
                        },
                        y: {
                            ticks: {
                                min: Math.min(...yValues),
                                max: Math.max(...yValues),
                            }
                        },
                    }
                }
            });
        </script>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Replace these variables with your data
            var countries = ["UAE", "USA", "Kenya", "Sounth Africa", "New Zealand"];
            var newDataX = [50, 60, 70, 80, 90, 100, 110, 150, 130, 140, 150];

            new Chart("revenue-chart-canvas", {
                type: "scatter",
                data: {
                    labels: countries, // Use the array of country names as Y-axis labels
                    datasets: [{
                        fill: false,
                        lineTension: 0,
                        backgroundColor: "rgba(0,0,255,1.0)",
                        borderColor: "rgba(0,0,255,0.1)",
                        data: newDataX // Use your new dataset here (X-axis data)
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                // You can customize the tick settings here if needed
                            }
                        }],
                        // You can customize the x-axis further here if needed
                    }
                }
            });
        </script>

        {{-- VISA APPLICATIONS LINE --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const json_count = {!! $visa_per_month !!};
            const zxValues = [];
            const qxValues = [];

            // Iterate through the json object and extract values
            json_count.forEach(item => {
                // Push month names to zxValues
                zxValues.push(item.month);
                // Push count values to qxValues
                qxValues.push(item.count);
            });

            console.log('zxValues:', zxValues);
            console.log('qxValues:', qxValues);

            new Chart("myChart_line", {
                type: "line",
                data: {
                    labels: zxValues,
                    datasets: [{
                        label: 'Visa Applications', // Label for the dataset
                        data: qxValues,
                        borderColor: "red",
                        fill: false
                    }]
                },
                options: {
                    legend: {
                        display: false
                    }
                }
            });
        </script>

        {{-- PIE CHART --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const json = {!! $destination !!};
            const zyValues = [];
            const qyValues = [];

            // Iterate through the json object and extract values
            json.forEach(item => {

                // Push destination names to zValues
                zyValues.push(item.destination);

                // Push count values to qValues
                qyValues.push(item.count);

            });

            console.log('zValues:', zyValues);
            console.log('qValues:', qyValues);



            const zValues = zyValues;
            const qValues = qyValues;
            const barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];

            new Chart("myChart_pie", {
                type: "doughnut",
                data: {
                    labels: zValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: qValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "World Wide Wine Production 2018"
                    }
                }
            });
        </script>

</body>

</html>
