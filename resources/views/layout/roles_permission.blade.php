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

    <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
            @extends('testing.sidebar')
        </section>


        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body" style="background-color: #eeeeee;">
                            <div class="card-header">
                                <h3 class="card-title">Users Role Management</h3>&nbsp;&nbsp;
                                <button class="btn btn-success" onclick="openModal()">Add Role</button>

                            </div>





                            <div class="row g-4">
                                @foreach ($roles as $data)
                                    <div class="col-xl-4 col-lg-6 col-md-6 pt-3">
                                        <div class="card pt-3">
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between mb-2">
                                                    <h6 class="fw-normal">Total {{ $data->user_count }} users</h6>
                                                    <ul
                                                        class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                                        <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                            data-bs-placement="top" class="avatar avatar-sm pull-up"
                                                            aria-label="Vinnie Mostowy"
                                                            data-bs-original-title="Vinnie Mostowy">
                                                            {{-- <img class="rounded-circle" src="images/faces/face1.jpg"
                                                                alt="Avatar"> --}}
                                                        </li>

                                                    </ul>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-end">
                                                    <div class="role-heading">
                                                        <h3 class="mb-1">{{ $data->name }}</h3><br>
                                                        {{-- <a href="{{ route('assign.permission', ['id' => $data->id]) }}"
                                                            data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                            class="role-edit-modal"><small>Edit Role</small></a> --}}
                                                        <a href="{{ route('assign.permission', ['id' => $data->id]) }}"
                                                            data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                            class="role-edit-modal">
                                                            <small>
                                                                <i class="fa fa-edit" style="font-size: 200%;"></i>
                                                            </small>
                                                        </a>

                                                        <a href="" class="role-delete-modal">
                                                            <small>
                                                                <i class="fa fa-trash" style="font-size: 200%;"></i>
                                                            </small>
                                                        </a>


                                                    </div>
                                                    <a href="javascript:void(0);" class="text-muted"><i
                                                            class="bx bx-copy"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="col-xl-4 col-lg-6 col-md-6 pt-3">
                                    <div class="card pt-5">
                                        <div class="card-body">
                                            <div class="row h-100" style="padding-left:1%;">
                                                <div class="col-sm-5">
                                                    <div
                                                        class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                                                        <img src="images/faces/download.jpg" class="img-fluid"
                                                            alt="Image" width="120"
                                                            data-app-light-img="illustrations/sitting-girl-with-laptop-light.png"
                                                            data-app-dark-img="illustrations/sitting-girl-with-laptop-dark.png">
                                                    </div>
                                                </div>
                                                <div class="col-sm-7">
                                                    <div class="card-body text-sm-end text-center ps-sm-0">
                                                        <button data-bs-toggle="modal"
                                                            class="btn btn-primary mb-3 text-nowrap add-new-role"
                                                            onclick="openModal()">Add
                                                            New Role</button>
                                                        <p class="mb-0">Add role, if it does not exist</p>
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
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Add New Role</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('role.store') }}" method="POST">
                                @csrf
                                <p>Enter Role Name:</p>
                                <input type="text" class="form-control" name="role_name"><br><br>
                                <button class="btn btn-primary mb-3 text-nowrap add-new-role" type="submit  "> Save
                                    Role</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="container my-3">


            </div>


        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $('#loading-screen').css('display', 'none');
                }, 1000);

            });
        </script>





        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                setTimeout(() => {
                    $('#loading-screen').css('display', 'none');
                }, 100);

            });
        </script>
        <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#example1').DataTable();

            });
        </script>
        <script src="/plugins/jquery/jquery.min.js"></script>
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="./plugins/chart.js/Chart.min.js"></script>
        <script src="/plugins/sparklines/sparkline.js"></script>
        <script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
        <script src="/plugins/moment/moment.min.js"></script>
        <script src="/plugins/daterangepicker/daterangepicker.js"></script>
        <script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <script src="/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="/dist/js/adminlte.js"></script>
        <script src="/dist/js/demo.js"></script>
        <script src="/publicdist/js/pages/dashboard.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
        <script src="/plugins/jszip/jszip.min.js"></script>
        <script src="/plugins/pdfmake/pdfmake.min.js"></script>
        <script src="/plugins/pdfmake/vfs_fonts.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="./dist/js/adminlte.min.js"></script>


        <script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false,
                    "responsive": true,
                });
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            // Use jQuery in noConflict mode
            jQuery.noConflict();

            function openModal() {
                jQuery("#myModal").modal("show");
            }
        </script>
    </div>
