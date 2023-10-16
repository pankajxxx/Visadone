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
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')

        <div class="content-wrapper">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Agency Management</h3>&nbsp;
                    <a href="/agency/create" class="btn btn-success">@lang('Add Agency')</a>
                    <a href="" class="btn btn-success">@lang('Import Agency')</a>
                </div>
                <!-- /.card-header -->
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-md-2" style="margin-left: 1%;">
                                <div class="input-field">
                                    <select class="form-control" name="country" id="country" onchange="getbranch()">
                                        <option value="">Select Country</option>
                                        @foreach ($country as $option)
                                            <option name="country" value="{{ $option->country_name }}">
                                                {{ $option->country_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="input-field">
                                    <select class="form-control" name="branch" id="branch">
                                        <option value="">Select Branch</option>
                                        @foreach ($branch as $option)
                                            <option name="branch" value="{{ $option->name }}">
                                                {{ $option->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-field">
                                    <button type="Submit" onclick="getAgency()" class="btn btn-primary"><i
                                            class="mr-2"></i>Get Data</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Country Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-body">
                            @foreach ($data as $data_user)
                                <tr>

                                    <td class="text-center">{{ $data_user->id }}</td>
                                    <td>{{ $data_user->agency_name }}</td>
                                    <td>{{ $data_user->country }}</td>
                                    <td>{{ $data_user->address_line }}</td>
                                    <td>{{ $data_user->contact_number_branch }}</td>
                                    <td class="text-center">
                                        <a href="/agency/edit/{{ $data_user->id }}">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Country Name</th>
                                <th>Address</th>
                                <th>Contact Number</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

    </div>
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
    <script>
        function getbranch() {
            var country = $('#country').val();

            $.ajax({
                url: '/api/getbranches/' + country,
                method: 'GET', // Change to 'GET' or 'POST' depending on your server setup
                headers: {
                    'Content-Type': 'application/json',
                    // Add any other headers you might need
                },
                success: function(data) {
                    // Handle the response data here
                    console.log(data);

                    var branchSelect = $('#branch');
                    branchSelect.empty(); // Clear existing options

                    $.each(data, function(index, branch) {
                        branchSelect.append($('<option>').text(branch.name).attr('value', branch.name));
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>


    <script>
        function getAgency() {
            console.log('AAYA Function Mai');
            var country = document.getElementById('country').value;
            var branch = document.getElementById('branch').value;

            fetch('/api/getagency/' + country + '/' + branch, {
                    method: 'GET',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data);

                    var tableBody = document.querySelector('.table-body');
                    tableBody.innerHTML = ''; // Clear existing rows

                    data.forEach(branch => {
                        var newRow = '<tr>' +

                            '<td class="text-center">' + branch.id + '</td>' +
                            '<td>' + branch.agency_name + '</td>' +
                            '<td>' + branch.country + '</td>' +
                            '<td>' + branch.address_line + '</td>' +
                            '<td>' + branch.contact_number_branch + '</td>' +
                            '<td class="text-center">' +
                            '<a href="/agency/edit/' + branch.id + '">' +
                            '<i class="fa fa-pencil"></i>' +
                            '</a>' +
                            '</td>' +
                            '</tr>';
                        tableBody.innerHTML += newRow;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>


</body>

</html>
