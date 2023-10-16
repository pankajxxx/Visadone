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

        select.form-control,
        select.asColorPicker-input,
        .dataTables_wrapper select,
        .jsgrid .jsgrid-table .jsgrid-filter-row select,
        .select2-container--default select.select2-selection--single,
        .select2-container--default .select2-selection--single select.select2-search__field,
        select.typeahead,
        select.tt-query,
        select.tt-hint {
            padding: 0.4375rem 0.75rem;
            border: 0;
            outline: 1px solid #9b9b9b;
            color: #90858f;
            height: 60px;
        }

        /* .custom-select {
            appearance: none;
            padding-right: 2.25rem;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3E%3Cpath d='M8 12l-4-4h8l-4 4z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 8px 8px;
        } */

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
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="/images/visadone_logo.png" alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')
        <div class="content-wrapper">
            <h3 class="card-header">Add New Agent</h3>
            <form action="/agents/store" method="POST">
                @csrf
                <div class="form-sample" style="padding-left: 14px;padding-right:10px;">
                    <hr>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <select class="form-control" name="country" id="country" onchange="getbranch()">
                                        <option value="">Select Country</option>
                                        @foreach ($country as $option)
                                            <option name="country" value="{{ $option->country_name }}">
                                                {{ $option->country_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    {{-- <label>Country</label> --}}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field">
                                    <select class="form-control" name="branch" id="branch" onfocus="getAgency()">
                                        <option value="">Select Branch</option>
                                        @foreach ($branch as $option)
                                            <option name="branch" value="{{ $option->id }}">
                                                {{ $option->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <select class="form-control" name="agency" id="agency">
                                        <option value="">Select Agency</option>
                                        @foreach ($agency as $option)
                                            <option name="currency" value="{{ $option->id }}">
                                                {{ $option->agency_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <input type="text" name="firstname" required spellcheck="false">
                                    <label>Agent FirstName</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <input type="text" name="agency_name" required spellcheck="false">
                                    <label>Agent LastName</label>
                                    <!-- <label>User Type</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field">
                                    <input type="text" name="email" required spellcheck="false">
                                    <label>Agent Email</label>
                                    <!-- <label>User Type</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <input type="number" name="contact_number" required spellcheck="false">
                                    <label>Agent Contact Number</label>
                                    <!-- <label>User Type</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field with-divider">
                                    <input type="text" name="role" required spellcheck="false">
                                    <label>Agent Role</label>
                                    <!-- <label>User Type</label> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="input-field">
                                    <select class="form-control custom-select" name="status" required>
                                        <option value="">Select Status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">In-Active</option>
                                    </select>
                                    <!-- <label>User Type</label> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <div class="input-field">
                                    <button type="Submit" class="btn btn-primary"><i
                                            class="ti-check mr-2"></i>Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>

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


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getbranch() {
            var country = $('#country').val();
            var currency_ip = $('#currency');
            // currency_ip.val(currency); // Corrected this line
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
                        branchSelect.append($('<option>').text(branch.name).attr('value', branch.id));
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

            var country = document.getElementById('country').value;
            var branch = document.getElementById('branch').value;


            $.ajax({
                url: '/api/getagency/' + country + '/' + branch,
                method: 'GET', // Change to 'GET' or 'POST' depending on your server setup
                headers: {
                    'Content-Type': 'application/json',
                    // Add any other headers you might need
                },
                success: function(data) {
                    // Handle the response data here
                    console.log(data);

                    var branchSelect = $('#agency');
                    branchSelect.empty(); // Clear existing options

                    $.each(data, function(index, branch) {
                        branchSelect.append($('<option>').text(branch.agency_name).attr('value', branch
                            .id));
                    });
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });

        }
    </script>
</body>

</html>
