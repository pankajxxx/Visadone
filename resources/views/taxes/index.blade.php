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
    <style type="text/css">
        .checkbox,
        #chk_all {
            width: 20px;
            height: 20px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Tax Management</h3>&nbsp;&nbsp;
                                <a href="" class="btn btn-success" data-toggle="modal"
                                    data-target="#addModal">@lang('Add Tax')</a>
                                <a href="#" class="btn btn-success" data-toggle="modal"
                                    data-target="#importModal">
                                    @lang('Import Data')
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Country</th>
                                            <th>
                                                Country Code</th>
                                            <th>
                                                Tax Applied</th>
                                            <th>
                                                Tax Percentage</th>
                                            <th>
                                                Is Active?</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tax as $data_user)
                                            <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                <td>{{ $data_user->id }}</td>
                                                <td class="text-center">{{ $data_user->country_name }}</td>
                                                <td class="text-center">{{ $data_user->country_code }}</td>
                                                @if (session('user_type') === 'S')
                                                    <td class="text-center"><input type="text" name="exchange_name"
                                                            id="exchange_name"
                                                            class="form-control btnInput_{{ $data_user->id }}"
                                                            value="{{ $data_user->tax_name }}" disabled></td>
                                                @else
                                                    <td class="text-center">
                                                        <input type="text" name="exchange_name" id="exchange_name"
                                                            class="form-control btnInput_{{ $data_user->id }}"
                                                            value="{{ $data_user->tax_name }}" disabled>
                                                    </td>
                                                @endif
                                                <td>
                                                    <div class="input-group">
                                                        @if (session('user_type') === 'S')
                                                            <input type="text" name="exchange" id="exchange"
                                                                class="form-control btnInput_{{ $data_user->id }}"
                                                                value="{{ $data_user->tax_percentage }}" disabled>
                                                            <div class="input-group-append">

                                                                <button type="button" id="edit_rate"
                                                                    class="btn btn-primary btn-edit tryFun btnEdit_{{ $data_user->id }}"
                                                                    data-id="{{ $data_user->id }}">Edit</button>
                                                                <button type="button" id="save"
                                                                    class="btn btn-success btn-edit mx-1 tryFun_save btnSave_{{ $data_user->id }}"
                                                                    data-id="{{ $data_user->id }}"
                                                                    disabled>Save</button>
                                                            </div>
                                                        @else
                                                            <input type="text" name="" id=""
                                                                class="form-control"
                                                                value="{{ $data_user->tax_percentage }}" disabled>
                                                            <input type="text" name="" id=""
                                                                class="form-control"
                                                                value="{{ $data_user->tax_percentage }}" disabled>
                                                        @endif
                                                    </div>
                                                </td>
                                                <td>
                                                    @if ($data_user->is_active == 1)
                                                        <label class="switch">
                                                            <input type="checkbox"
                                                                {{ $data_user->is_active == 1 ? 'checked' : '' }}>
                                                            <span class="slider round"></span>
                                                        </label>
                                                    @else
                                                        <label class="switch">
                                                            <input type="checkbox">
                                                            <span class="slider round"></span>
                                                        </label>
                                                    @endif

                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                #
                                            </th>
                                            <th>
                                                Country</th>
                                            <th>
                                                Country Code</th>
                                            <th>
                                                Tax Applied</th>
                                            <th>
                                                Tax Percentage</th>
                                            <th>
                                                Is Active?</th>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="importModal" tabindex="-1" role="dialog"
                aria-labelledby="importModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <!-- Modal content goes here -->
                        <div class="modal-header">
                            <h4 class="modal-title">@lang('Import Tax Configuration')</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <a href="{{ asset('assets/samples/tax.xlsx') }}">@lang('Download Sample Excel File')</a>

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


            <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="/submit_tax" method="post">
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
                                    <label for="countrySelect">Select Country</label>
                                    <select class="form-control" name="country" id="country">
                                        <option value="">Select Country</option>
                                        @foreach ($country as $option)
                                            <option name="country" value="{{ $option->country_name }}">
                                                {{ $option->country_name }}</option>
                                        @endforeach
                                    </select>
                                    <br>
                                    <label for="countrySelect">Select Country ISO Code</label>
                                    <select class="form-control" name="country_code" id="country_code">
                                        <option value="">Select Country ISO</option>
                                        @foreach ($country as $option)
                                            <option name="country_code" value="{{ $option->contry_code }}">
                                                {{ $option->contry_code }}</option>
                                        @endforeach
                                    </select><br>
                                    <label for="countrySelect">Enter Tax Name</label>
                                    <input type="text" name="tax_name" id="tax_name" placeholder="Tax Name"
                                        class="form-control">
                                    <br>
                                    <label for="countrySelect">Enter Tax in Percentage</label>
                                    <input type="number" name="tax_per" id="tax_per" placeholder="In %"
                                        class="form-control">
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
                fieldVal_name = $(this).closest('tr.cell-1').find("input[name='exchange_name'][id='exchange_name']")
                    .val();

            }

            // console.log(id);
            // console.log(fieldVal);
            // console.log(fieldVal_name);

            if (id) {
                var finalClass = $(this).attr('class').split('_');
                $.ajax({
                    url: '/api/update_tax/' + id + '/' + fieldVal + '/' + fieldVal_name,
                    method: 'POST',
                    success: function(response) {
                        // console.log(response);
                        alert("Tax Updated");
                    },
                    error: function(error) {
                        // console.log('Error:', error);
                        alert("500 Error Internal Server Error");
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
