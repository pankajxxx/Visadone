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

        thead {
            position: sticky;
            top: 0;
            background-color: #fd7e14;
            color: #fff;
            font-family: 'Open Sans', sans-serif;
            z-index: 9;
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
            @extends('testing.sidebar')
        </section>


        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->
        <div class="content-wrapper">

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Visa Offers Configuration</h3>&nbsp;&nbsp;
                        <a href="/visa/offer_create" class="btn btn-success">@lang('Add Offer')</a>
                        <a href="" class="btn btn-success">@lang('Import Users')</a>
                    </div>
                    <div class="card-body">


                        <form class="form-inline" action="/visa/offerget" method="GET">
                            {{-- <label class="sr-only" for="inlineFormInputName2">Name</label> --}}
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i
                                            class="fa fa-location-arrow" aria-hidden="true"></i>
                                    </div>
                                </div>
                                <select class="form-control" name="nationality" id="nationality">
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
                                <select class="form-control" name="destination"  onchange="getoffers()"
                                    id="destination">
                                    <option value="">Select Destination</option>
                                    @foreach ($country as $option)
                                        <option name="destination"
                                            value="{{ $option->country_name }}">
                                            {{ $option->country_name }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-check mx-sm-2">

                            </div>
                            <input type="submit" value="Get Offers" class="btn btn-primary mb-2"></button> &nbsp;
                            <input type="button" onclick="update_nationality()" value="Get Update"
                                class="btn btn-primary mb-2"></button>
                        </form>

                    </div>

                </div>

            </div>

            <input type="hidden" id="offer_put" value="">

            {{-- <div class="row"> --}}

            <div class="container-fluid">
                <div class="row">


                    <div class="col-md-3">
                        <div class="table-responsive" style="max-height: 730px; overflow-y: auto;">
                            <table id="countryTable" class="table sticky-header" style=" table-layout: fixed;">
                                <thead style="color:#fff; font-family: 'Open Sans', sans-serif;">
                                    <tr>
                                        <th style=" width: 4%;" class="text-center"></th>
                                        <th style=" width: 16%;" class="text-center" onclick="sortTable(0)">
                                            Country Names</th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    <!-- Table rows here -->
                                    @if (!empty($offers))
                                        @foreach ($country as $country_name)
                                            <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                <td><input type="checkbox" value="{{ $country_name->country_name }}">
                                                </td>
                                                <td class="text-center">{{ $country_name->country_name }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            @foreach ($country as $country_name)
                                        <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                            <td><input type="checkbox" disabled></td>
                                            <td class="text-center">{{ $country_name->country_name }}</td>
                                        </tr>
                                    @endforeach
                                    </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-9">
                        <div class="table-responsive" style="max-height: 730px; overflow-y: auto;">
                            <table class="table sticky-header">
                                <thead
                                    style="position: sticky; top: 0; background-color: #fd7e14; color: #fff; font-family: 'Open Sans', sans-serif;">
                                    <tr>
                                        <th style="width: 7%;" class="text-center"></th>
                                        <th style="width: 93%;" class="text-center" onclick="sortTable(0)">Offers
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="table-body">
                                    <!-- Table rows here -->
                                    @if (!empty($offers))
                                        @foreach ($offers as $data_user)
                                            <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                                <td>
                                                    <input type="checkbox" id="offer_id_{{ $data_user->id }}"
                                                        value="{{ $data_user->id }}"
                                                        onchange="view_nation({{ $data_user->id }}, this)">
                                                </td>

                                                <td>
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h3 class="card-title">{{ $data_user->visa_type }}</h3>
                                                            <p>Category: {{ $data_user->visa_category }}</p>
                                                            <p>Validity: {{ $data_user->visa_validity }}</p>
                                                            <p>Status: {{ $data_user->status }}</p>
                                                            <a href="/visa/offer/edit/{{ $data_user->id }}"
                                                                class="btn btn-primary"
                                                                style="margin-left: 25%">Edit</a>
                                                            <a href="/visa/offer/edit/{{ $data_user->id }}"
                                                                class="btn btn-primary">$</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="2" style="text-align: center;">No Data Available</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>


            {{-- </div> --}}

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('#loading-screen').css('display', 'none');
            }, 1000);

        });
    </script>
    {{-- <script>
        function view_nation(id) {
            console.log(id);
            var update_field = document.getElementById("offer_put");
            update_field.value = id;

            $.ajax({
                url: '/api/getnation/' + id,
                method: 'GET',
                success: function(response) {
                    // Assuming the nationalities are stored in response.nation array
                    var nationalityString = response.nation[0].nationality;
                    var nationalities = nationalityString.split(",");
                    console.log(nationalities);

                    // Iterate over the nationalities array
                    $.each(nationalities, function(index, nationality) {
                        // Find the checkbox corresponding to the nationality and set it as checked
                        var checkboxFound = false; // Flag to track if the checkbox is found
                        nationality = nationality.trim(); // Remove leading/trailing spaces

                        $('#countryTable input[type="checkbox"]').each(function() {
                            if ($(this).val() === nationality) {
                                $(this).prop('checked', true);
                                checkboxFound = true;
                            }
                        });

                        if (!checkboxFound) {
                            console.log('Checkbox not found for nationality: ' + nationality);
                        }
                    });
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        }
    </script> --}}
    <script>
        // function view_nation(id,status) {
        //     console.log(id);
        //     var update_field = document.getElementById("offer_put");
        //     update_field.value = id;

        //     if ($(status).is(":checked")) {
        //         console.log('Checkbox with id ' + id + ' is checked');
        //     } else {
        //         console.log("NHI HAI CHECKED");
        //         id = null;
        //     }

        //     $.ajax({
        //         url: '/api/getnation/' + id,
        //         method: 'GET',
        //         success: function(response) {
        //             if (response.nation && response.nation.length > 0) {
        //                 // Assuming the nationalities are stored in response.nation array
        //                 var nationalityString = response.nation[0].nationality;
        //                 var nationalities = nationalityString.split(",");
        //                 console.log(nationalities);

        //                 // Iterate over the nationalities array
        //                 $.each(nationalities, function(index, nationality) {
        //                     // Find the checkbox corresponding to the nationality and set it as checked
        //                     var checkboxFound = false; // Flag to track if the checkbox is found
        //                     nationality = nationality.trim(); // Remove leading/trailing spaces

        //                     $('#countryTable input[type="checkbox"]').each(function() {
        //                         if ($(this).val() === nationality) {
        //                             $(this).prop('checked', true);
        //                             checkboxFound = true;
        //                         }
        //                     });

        //                     if (!checkboxFound) {
        //                         console.log('Checkbox not found for nationality: ' + nationality);
        //                     }
        //                 });
        //             } else {
        //                 // Handle the case where response.nation is null or empty
        //                 console.log('No data for nationality checkboxes');
        //                 // You can choose to clear checkboxes or perform other actions here
        //             }
        //         },
        //         error: function(error) {
        //             console.log('Error:', error);
        //         }
        //     });
        // }
        function view_nation(id, status) {
            console.log(id);
            var update_field = document.getElementById("offer_put");
            update_field.value = id;

            if ($(status).is(":checked")) {
                console.log('Checkbox with id ' + id + ' is checked');
            } else {
                console.log("NHI HAI CHECKED");
                id = null;
            }

            if (id !== null) {
                // Only iterate through checkboxes if id is not null
                $.ajax({
                    url: '/api/getnation/' + id,
                    method: 'GET',
                    success: function(response) {
                    console.log(response);
                        if (response.nation && response.nation.length > 0) {
                            // Assuming the nationalities are stored in response.nation array
                            var nationalityString = response.nation[0].nationality;
                            var nationalities = nationalityString.split(",");
                            console.log(nationalities);

                            // Iterate over the nationalities array
                            $.each(nationalities, function(index, nationality) {
                                // Find the checkbox corresponding to the nationality and set it as checked
                                var checkboxFound = false; // Flag to track if the checkbox is found
                                nationality = nationality.trim(); // Remove leading/trailing spaces

                                $('#countryTable input[type="checkbox"]').each(function() {
                                    if ($(this).val() === nationality) {
                                        $(this).prop('checked', true);
                                        checkboxFound = true;
                                    }
                                });

                                if (!checkboxFound) {
                                    console.log('Checkbox not found for nationality: ' + nationality);
                                }
                            });
                        } else {
                            // Handle the case where response.nation is null or empty
                            console.log('No data for nationality checkboxes');
                            // You can choose to clear checkboxes or perform other actions here
                        }
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            } else {
                // Uncheck all checkboxes when id is null
                $('#countryTable input[type="checkbox"]').prop('checked', false);
            }
        }
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


</body>

</html>
