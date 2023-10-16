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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Currency Management</h3>&nbsp;&nbsp;

                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal">
                                    @lang('Import Data')
                                  </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="table-responsive">
                                            <table class="table" id="example1">
                                                <thead >
                                                    <tr>
                                                        <th>
                                                            #
                                                        </th>
                                                        <th >
                                                            Currency</th>
                                                        <th>
                                                            Country Name</th>
                                                        <th >
                                                            Exchange Rate</th>

                                                    </tr>
                                                </thead>

                                                <tbody class="table-body">
                                                    <!-- Table rows here -->
                                                    @foreach ($currency as $data_user)
                                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                            <td>USD 1</td>

                                                            <td class="text-center">{{ $data_user->country_currency }}</td>
                                                            <td class="text-center">{{ $data_user->country_name }}</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    @if (session('user_type') === 'S')
                                                                        <input type="text" name="exchange" id="exchange"
                                                                            class="form-control btnInput_{{ $data_user->id }}"
                                                                            value="{{ $data_user->exchange_rate }}" disabled>
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
                                                                            value="{{ $data_user->exchange_rate }}" disabled>
                                                                    @endif
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tr>
                                                    <th>
                                                        #
                                                    </th>
                                                    <th >
                                                        Currency</th>
                                                    <th>
                                                        Country Name</th>
                                                    <th >
                                                        Exchange Rate</th>

                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
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
