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
            <img class="animation__shake" src="images/visadone_logo.png" alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')


        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="../../dist/img/avatar4.png" alt="User profile picture">
                                    </div>

                                    <h3 class="profile-username text-center">{{ session('name') }}</h3>

                                    {{-- <p class="text-muted text-center">Software Engineer</p> --}}

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Visa Processed</b> <a class="float-right">{{ $visa_details_count }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Visa Completed</b> <a class="float-right">{{ $visa_done }}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Visa Rejected</b> <a class="float-right">{{ $visa_archive }}</a>
                                        </li>
                                    </ul>

                                    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->

                            <!-- About Me Box -->

                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item"><a class="nav-link active" href="#timeline"
                                                data-toggle="tab">Recent Visa Processed</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">User
                                                Information</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#emails" data-toggle="tab">Track
                                                Emails</a></li>
                                    </ul>
                                </div><!-- /.card-header -->
                                <div class="card-body">
                                    <div class="tab-content">

                                        <!-- /.tab-pane -->
                                        <div class="active tab-pane" id="timeline">
                                            <!-- The timeline -->
                                            <div class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        {{ now()->format('j M Y') }}
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->

                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fas fa-user bg-info"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i>Updated 5 mins
                                                            ago</span>

                                                        <div class="card-body">
                                                            <table id="example2"
                                                                class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Visa Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($visa_today as $data)
                                                                        <tr>
                                                                            <td>{{ $data->id }}</td>
                                                                            <td>{{ $data->nationality }}
                                                                            </td>
                                                                            <td>{{ $data->destination }}</td>
                                                                            <td>{{ $data->visa_status }}</td>
                                                                            <td><a href="/track">View</a></td>
                                                                        </tr>
                                                                    @endforeach


                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Visa Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->

                                                <!-- END timeline item -->
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-success">
                                                        {{ now()->format('j M Y') }},{{ now()->subDay()->format('j M Y') }}
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fa fa-star-o" aria-hidden="true"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i> 1 days
                                                            ago</span>

                                                        <h3 class="timeline-header"><a
                                                                href="#">{{ session('name') }}</a>
                                                            Last 10 Applications</h3>

                                                        <div class="card-body">
                                                            <table id="example2"
                                                                class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Visa Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($visa_last_10 as $data)
                                                                        <tr>
                                                                            <td>{{ $data->id }}</td>
                                                                            <td>{{ $data->nationality }}
                                                                            </td>
                                                                            <td>{{ $data->destination }}</td>
                                                                            <td>{{ $data->visa_status }}</td>
                                                                            <td><a href="/track">View</a></td>
                                                                        </tr>
                                                                    @endforeach


                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Visa Status</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->

                                        <div class="tab-pane" id="settings">
                                            <form class="form-horizontal">
                                                <div class="form-group row">
                                                    <label for="inputName"
                                                        class="col-sm-2 col-form-label">Name</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" value="{{$user_details[0]->first_name}}{{$user_details[0]->last_name}}" class="form-control" id="inputName"
                                                            placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputEmail"
                                                        class="col-sm-2 col-form-label">Email</label>
                                                    <div class="col-sm-10">
                                                        <input type="email" value="{{$user_details[0]->email}}" class="form-control" id="inputEmail"
                                                            placeholder="Email">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label">Mobile
                                                        Number</label>
                                                    <div class="col-sm-10">
                                                        <input type="text"  value="{{$user_details[0]->mobile_number}}" class="form-control" id="inputName2"
                                                            placeholder="mobile_number">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputName2" class="col-sm-2 col-form-label">Country
                                                        Origin</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" class="form-control" id="inputName2"
                                                            placeholder="Country Origin" value="{{$user_details[0]->country}}" name="country">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="inputExperience"
                                                        class="col-sm-2 col-form-label">Change Password</label>
                                                    <div class="col-sm-10">
                                                        <input type="password" class="form-control" value="{{$user_details[0]->password}}" id="inputExperience" placeholder="Change Password">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputSkills" class="col-sm-2 col-form-label">Date Of
                                                        Birth</label>
                                                    <div class="col-sm-10">
                                                        <input type="date" class="form-control" id="inputSkills"
                                                            placeholder="Skills">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputProfilePic" class="col-sm-2 col-form-label">Profile Picture</label>
                                                    <div class="col-sm-10">
                                                        <input type="file" class="form-control-file" id="inputProfilePic" name="profile_pic">
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <div class="offset-sm-2 col-sm-10">
                                                        <button type="submit" class="btn btn-danger">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="tab-pane" id="emails">
                                            <div class="timeline timeline-inverse">
                                                <!-- timeline time label -->
                                                <div class="time-label">
                                                    <span class="bg-danger">
                                                        {{ now()->format('j M Y') }}
                                                    </span>
                                                </div>
                                                <!-- /.timeline-label -->
                                                <!-- timeline item -->

                                                <!-- END timeline item -->
                                                <!-- timeline item -->
                                                <div>
                                                    <i class="fa fa-envelope-o bg-info" aria-hidden="true"></i>

                                                    <div class="timeline-item">
                                                        <span class="time"><i class="far fa-clock"></i>Updated 5
                                                            mins
                                                            ago</span>

                                                        <div class="card-body">
                                                            <table id="example2"
                                                                class="table table-bordered table-hover">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Email Status</th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($visa_today as $data)
                                                                        <tr>
                                                                            <td>{{ $data->id }}</td>
                                                                            <td>{{ $data->nationality }}
                                                                            </td>
                                                                            <td>{{ $data->destination }}</td>
                                                                            <td>
                                                                                @if ($data->email_status == 0)
                                                                                    <span class="text-success">Send</span>
                                                                                @elseif ($data->email_status == 1)
                                                                                    <span class="text-danger">Error</span>
                                                                                @endif
                                                                            </td>



                                                                        </tr>
                                                                    @endforeach


                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>Reference ID:</th>
                                                                        <th>Nationality</th>
                                                                        <th>Destination</th>
                                                                        <th>Visa Status</th>

                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!-- END timeline item -->
                                                <!-- timeline item -->

                                                <!-- END timeline item -->
                                                <!-- timeline time label -->



                                                <!-- END timeline item -->
                                                <div>
                                                    <i class="far fa-clock bg-gray"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.tab-pane -->
                                    </div>
                                    <!-- /.tab-content -->
                                </div><!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
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
