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
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


    <style>
        [class*=sidebar-dark-] .sidebar a {
            color: #565656 !important;
        }

        [class*=sidebar-dark-] .sidebar a:hover {
            color: #090909 !important;
            background-color: #fde4ad !important;
        }

        .switch-field {
            display: flex;
            margin-bottom: 36px;
            overflow: hidden;
            font-family: system-ui;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            font-family: system-ui;
            border: 0;
            margin-left: 3%;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #ffffff;
            color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
            font-weight: 100%;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked+label {
            background-color: #fca224;
            color: #ffffff;
            box-shadow: none;
            font-size: medium;
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }
    </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake"
                src="https://visadone.com/laravel_demo/testing/laravel8/public/images/visadone_logo.png"
                alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <section>
            @include('testing.header')
        </section>

        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @extends('testing.sidebar')


        <div class="content-wrapper">
            <div class="main-panel">
                <form action="/offers_rule/store" method="POST">
                    @csrf
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h3 class="card-description">Create New Document Rule Offer</h3>
                                        <div class="form-sample">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="countrySelect">Nationality</label>
                                                        <select class="form-control" name="nationality"
                                                            id="nationality">
                                                            <option value="">Select Nationality</option>
                                                            @foreach ($country as $option)
                                                                <option name="nationality"
                                                                    value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <link
                                                    href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
                                                    rel="stylesheet">
                                                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stateSelect">Destination</label>
                                                        <select class="form-control js-example-basic-single"
                                                            name="destination" id="destination" onchange="getoffers()">
                                                            <option value="">Select Destination</option>
                                                            <option value="all">Select All</option>
                                                            @foreach ($country as $option)
                                                                <option name="destination"
                                                                    value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>


                                                <script>
                                                    $(document).ready(function() {
                                                        $('#destination').select2({
                                                            width: '100%', // Adjust the width as needed
                                                            placeholder: 'Search for a country',
                                                            allowClear: true, // Option to clear the selection
                                                        });
                                                    });
                                                </script>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <h5 class="card-description">Visa Offer:</h5>
                                            </div>
                                            <div class="col-md-6">
                                                {{-- <select id="group_id" name="group_id[]" class="form-control"
                                                    multiple onclick="multipleFunc()">


                                                </select> --}}
                                                {{-- <select class="form-control" name="offer_id[]" id="offer_id" multiple>
                                                    <option value="">Select Visa Offer</option>
                                                </select> --}}
                                                <div class="form-group">

                                                    <select class="form-control" name="offer_id[]" id="offer_id"
                                                        multiple>
                                                        <option value="">Select Visa Offer</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>


                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-description">Basic Document Information</h5>
                                        <div class="form-sample">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="countrySelect">Document Type</label>
                                                        <select class="form-control" name="document_type"
                                                            id="document_type" onchange="updateInputField()">
                                                            <option value="">Select Document</option>
                                                            @foreach ($document as $option)
                                                                <option value="{{ $option->document_name }}">
                                                                    {{ $option->document_type }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stateSelect">Document Name</label>
                                                        <input type="text" name="document_name"
                                                            class="form-control mb-2 mr-sm-2"
                                                            id="inlineFormInputName2" placeholder="Document Name">
                                                    </div>
                                                </div>
                                                <script>
                                                    function updateInputField() {
                                                        var dropdown = document.getElementById('document_type');
                                                        var selectedOption = dropdown.options[dropdown.selectedIndex];
                                                        var inputField = document.getElementById('inlineFormInputName2');

                                                        if (selectedOption.value) {
                                                            inputField.value = selectedOption.value;
                                                        } else {
                                                            inputField.value = ''; // Clear the input field if "Select Document" is chosen
                                                        }
                                                    }
                                                </script>






                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>





                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Mandatory:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="switch-field">
                                                    <input type="radio" id="radio-one-1" name="document_mandatory"
                                                        value="Yes" checked="">
                                                    <label for="radio-one-1">Yes</label>
                                                    <input type="radio" id="radio-two-1" name="document_mandatory"
                                                        value="No">
                                                    <label for="radio-two-1">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>


                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Description:</h4>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group">

                                                    <textarea name="message" class="form-control mb-2 mr-sm-2" rows="4" cols="60"></textarea>
                                                    {{--  --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>


                        <div class="row">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-1.5">
                                                <h4 class="card-description">Document Required:</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="switch-field">
                                                    <input type="radio" id="radio-one-3"
                                                        name="document_requirements" value="always"
                                                        onchange="show_block()">
                                                    <label for="radio-one-3">Always</label>
                                                    <input type="radio" id="radio-two-3"
                                                        name="document_requirements" value="conditionally"
                                                        checked="" onchange="show_block()">
                                                    <label for="radio-two-3">Conditionally</label>
                                                </div>
                                            </div>
                                            {{-- <div id="conditional-fields" style="display: none;">
                                                <h1>Check one</h1>
                                            </div> --}}
                                            <script>
                                                function show_block() {
                                                    var condition = document.getElementById('radio-two-3'); // Check the "Conditionally" radio button

                                                    if (condition.checked) {
                                                        document.getElementById('conditional-fields').style.display = 'block'; // Show the conditional block
                                                    } else {
                                                        document.getElementById('conditional-fields').style.display = 'none'; // Hide the conditional block
                                                    }
                                                }
                                            </script>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>




                        <div class="row" id="conditional-fields">
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">

                                        <div class="form-sample">
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="stateSelect">Conditional Description</label>
                                                        <input type="text" name="condition_description"
                                                            class="form-control mb-2 mr-sm-2"
                                                            id="inlineFormInputName2"
                                                            placeholder="Conditional Description">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-sample">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="condition_Key" class="form-control mb-2 mr-sm-2"
                                                            id="keySelect">
                                                            <option value="Operator">Select Key</option>
                                                            <option value="Age">Age</option>
                                                            <option value="Gender">Gender</option>
                                                            <option value="Marital Status">Marital Status</option>
                                                            <option value="Observation Page">Observation Page</option>
                                                            <option value="Spouse Name on Passport">Spouse Name on
                                                                Passport</option>
                                                            <!-- Add more options here if needed -->
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="condition_operator"
                                                            class="form-control mb-2 mr-sm-2" id="operatorSelect">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <select name="condition_value"
                                                            class="form-control mb-2 mr-sm-2" id="descriptionInput">
                                                            <option value="">Select Value</option>
                                                            <!-- Age options will be populated dynamically here -->
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <script>
                                            // Get references to the select elements and input field
                                            const keySelect = document.getElementById('keySelect');
                                            const operatorSelect = document.getElementById('operatorSelect');
                                            const descriptionInput = document.getElementById('descriptionInput');

                                            // Event listener to update the input field based on the selected key
                                            keySelect.addEventListener('change', function() {
                                                const selectedKey = keySelect.value;
                                                // You can implement logic here to update the input field based on the selected key
                                                switch (selectedKey) {
                                                    case 'Age':
                                                        // Update the input field as needed for the 'Age' key
                                                        descriptionInput.innerHTML = ''; // Clear any existing options
                                                        for (let age = 1; age <= 70; age++) {
                                                            descriptionInput.innerHTML += `<option value="${age}">${age}</option>`;

                                                        }
                                                        operatorSelect.innerHTML = ``;
                                                        operatorSelect.innerHTML+= `<option value="<"><</option>`;
                                                        operatorSelect.innerHTML+= `<option value=">">></option>`;
                                                        operatorSelect.innerHTML+= `<option value="<="><=</option>`;
                                                        operatorSelect.innerHTML+= `<option value=">">>=</option>`;
                                                        // descriptionInput.placeholder = 'Enter Age';
                                                        break;
                                                    case 'Gender':
                                                        descriptionInput.innerHTML = ''; // Clear any existing options
                                                        descriptionInput.innerHTML += '<option value="Male">Male</option>';
                                                        descriptionInput.innerHTML += '<option value="Female">Female</option>';
                                                        descriptionInput.innerHTML += '<option value="Other">Other</option>';

                                                        operatorSelect.innerHTML = ``;
                                                        operatorSelect.innerHTML+= `<option value="=">=</option>`;
                                                        operatorSelect.innerHTML+= `<option value="!=">!=</option>`;

                                                        break;
                                                    case 'Marital Status':
                                                        descriptionInput.innerHTML = ''; // Clear any existing options
                                                        descriptionInput.innerHTML += '<option value="SINGLE">SINGLE</option>';
                                                        descriptionInput.innerHTML += '<option value="MARRIED">MARRIED</option>';
                                                        descriptionInput.innerHTML += '<option value="DIVORCED">DIVORCED</option>';
                                                        descriptionInput.innerHTML += '<option value="WIDOW">WIDOW</option>';
                                                        descriptionInput.innerHTML += '<option value="DECEASED">DECEASED</option>';
                                                        descriptionInput.innerHTML += '<option value="UNSPECIFIC">UNSPECIFIC</option>';
                                                        descriptionInput.innerHTML += '<option value="CHILD">CHILD</option>';


                                                        operatorSelect.innerHTML = ``;
                                                        operatorSelect.innerHTML+= `<option value="=">=</option>`;
                                                        operatorSelect.innerHTML+= `<option value="!=">!=</option>`;
                                                        break;
                                                    case 'Observation Page':
                                                        descriptionInput.innerHTML = ''; // Clear any existing options
                                                        descriptionInput.innerHTML += '<option value="Exits">Exits</option>';
                                                        descriptionInput.innerHTML += '<option value="Blank">Blank</option>';

                                                        operatorSelect.innerHTML = ``;
                                                        operatorSelect.innerHTML+= `<option value="=">=</option>`;

                                                        break;
                                                    case 'Spouse Name on Passport':
                                                        descriptionInput.innerHTML = ''; // Clear any existing options
                                                        descriptionInput.innerHTML += '<option value="Endorsed">Endorsed</option>';

                                                        operatorSelect.innerHTML = ``;
                                                        operatorSelect.innerHTML+= `<option value="is">is</option>`;
                                                        operatorSelect.innerHTML+= `<option value="is not">is not</option>`;
                                                        break;

                                                        // Add more cases for other keys as needed
                                                    default:
                                                        // Reset the input field for the default case
                                                        descriptionInput.placeholder = 'Value';
                                                }
                                            });
                                        </script>

                                        {{-- <div class="form-sample">
                                            <div class="row">

                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <a class="float-left btn btn-success"
                                                      >Add Rule</a>


                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <div class="form-group">
                                                        <a class="float-left btn btn-success"
                                                        >Add Block</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>

                    </div>
                    <input type="submit" class="float-left btn btn-success" value="Submit"
                        style="
                    margin-left: 2%;
                    margin-bottom: 2%;
                    margin-top: 1%;
                    width: 114px;
                    height: 50px;
                ">
                </form>

                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->

                <!-- partial -->
            </div>
        </div>

    </div>
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

    <!-- Include jQuery UI -->
    <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <!-- Include Bootstrap 4 -->
    <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Include ChartJS -->
    <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>

    <!-- Include Sparkline -->
    <script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>

    <!-- Include JQVMap -->
    <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <!-- Include jQuery Knob Chart -->
    <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <!-- Include moment.js -->
    <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>

    <!-- Include daterangepicker -->
    <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>

    <!-- Include Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Include Summernote -->
    <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>

    <!-- Include overlayScrollbars -->
    <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <!-- Include AdminLTE App -->
    <script src="{{ asset('./dist/js/adminlte.js') }}"></script>

    <!-- Include AdminLTE for demo purposes -->
    <script src="{{ asset('./dist/js/demo.js') }}"></script>

    <!-- Include AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('./dist/js/pages/dashboard.js') }}"></script>

    <!-- Include jQuery 3.6.0 (if needed) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Include Chart.js from CDN (if needed) -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Include Chart.js 2.9.4 from CDN (if needed) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <script>
        function getOffer() {
            $(document).ready(function() {
                var country = document.getElementById("travel_to").value;
                console.log(country);

                $.ajax({
                    url: '/offers/get/' + country,
                    method: 'GET',
                    success: function(response) {
                        var container = $('#cardContainer');

                        if (response.length === 0) {
                            container.empty();
                            return;
                        }
                        // Iterate over the data and generate HTML for each card
                        $.each(response, function(index, item) {
                            var card = $('<div>').addClass('card');
                            var cardBody = $('<div>').addClass('card-body');

                            // Create card content using the item properties
                            var cardContent = `
                      <h5 class="card-title">${item.visa_type}</h5>
                      <p class="card-text">${item.visa_category}</p>
                      <p class="card-text">${item.destination}</p>
                      <p class="card-text">${item.processing_time}</p>
                      <!-- Add more properties as needed -->

                      <button class="btn btn-primary">Apply</button>
                    `;

                            // Set the card content
                            cardBody.html(cardContent);

                            // Append the card body to the card
                            card.append(cardBody);

                            // Append the card to the container
                            container.append(card);
                        });
                    },
                    error: function(error) {
                        console.log('Error:', error);
                    }
                });
            });
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
                    $('#offer_id').empty();
                    console.log(response);
                    // Iterate over the response and append options to the drop-down
                    $.each(response, function(index, option) {
                        $('#offer_id').append('<option class="dropdown-item" value="' + option
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



</body>

</html>
