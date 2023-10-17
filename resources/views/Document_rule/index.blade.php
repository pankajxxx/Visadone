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
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Visa Offers Documents Configuration</h3>&nbsp;&nbsp;
                        <a href="/offers_rules/create" class="btn btn-success">@lang('Add Documents')</a>
                        <a href="" class="btn btn-success">@lang('Import Document Rules')</a>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="col-12 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body">


                                                <div class="form-inline">
                                                    {{-- <label class="sr-only" for="inlineFormInputName2">Name</label> --}}
                                                    {{-- <input type="text" name="nationality"
                                                        class="form-control mb-2 mr-sm-2" id="inlineFormInputName2"
                                                        placeholder="Nationality"> --}}
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i
                                                                    class="fa fa-location-arrow" aria-hidden="true"></i>
                                                            </div>
                                                        </div>
                                                        <select class="form-control" id="nationality">
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
                                                        <select class="form-control" onchange="getoffers()"
                                                            id="destination">
                                                            <option value="">Select Destination</option>
                                                            @foreach ($country as $option)
                                                                <option name="destination"
                                                                    value="{{ $option->country_name }}">
                                                                    {{ $option->country_name }}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>
                                                    <div class="input-group mb-2 mr-sm-2">
                                                        {{-- <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="fa fa-filter"
                                                                    aria-hidden="true"></i></div>
                                                        </div> --}}
                                                        <select class="form-control" id="optionsDropdown" hidden>
                                                            <option class="dropdown-item" value="">-</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-check mx-sm-2">

                                                    </div>
                                                    <input type="submit" value="Get Documents"
                                                        class="btn btn-primary mb-2"
                                                        onclick="getDocument()"></button>&nbsp;
                                                    <input type="submit" value="Update Document"
                                                        class="btn btn-primary mb-2" onclick="update_Offer()"></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" id="hiddenField" name="myHiddenField" value="">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="table-responsive" style="max-height: 730px; overflow-y: auto;">
                                                <table id="countryTable" class="table sticky-header"
                                                    style=" table-layout: fixed;">
                                                    <thead style="color:#fff; font-family: 'Open Sans', sans-serif;">
                                                        <tr>
                                                            <th style="background-color:#fd7e14; width: 4%;"
                                                                class="text-center"></th>
                                                            <th style="background-color:#fd7e14; width: 16%;"
                                                                class="text-center" onclick="sortTable(0)">
                                                                Country Names</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody class="table-body">
                                                        <!-- Table rows here -->
                                                        {{-- @if (!empty($offers)) --}}
                                                        @foreach ($country as $country_name)
                                                            <tr class="cell-1" data-toggle="collapse"
                                                                data-target="#demo">
                                                                <td><input type="checkbox" class="chh"
                                                                        value="{{ $country_name->country_name }}"
                                                                        data-offer-id="">

                                                                <td class="text-center">
                                                                    {{ $country_name->country_name }}
                                                                    <hr><b>
                                                                        <p
                                                                            id="additionalData_{{ $country_name->country_name }}">
                                                                        </p>
                                                                    </b>
                                                                </td>
                                                            </tr>
                                                        @endforeach

                                                        {{-- @endforeach --}}
                                                        </tr>
                                                        {{-- @endif --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="table-responsive"
                                                style="max-height: 730px; overflow-y: auto;">
                                                <table id="data-table5449" class="table sticky-header">
                                                    <thead style="color:#fff;font-family: 'Open Sans', sans-serif;">
                                                        <tr>
                                                            <th style="background-color:#fd7e14; width: 4%;"
                                                                class="text-center">
                                                            </th>
                                                            <th style="background-color:#fd7e14; width: 70%;"
                                                                class="text-center" onclick="sortTable(0)">Document
                                                                Name</th>
                                                            {{-- <th style="background-color:#4b49ac; width: 17%;" onclick="sortTable(1)">
                                                        Document Type</th>
                                                    <th style="background-color:#4b49ac; width: 17%;" onclick="sortTable(2)">
                                                        Document Condition</th> --}}
                                                            <th style="background-color:#fd7e14;">Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody class="table-body">

                                                    </tbody>

                                                </table>
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
                    $('#optionsDropdown').empty();
                    console.log(response);
                    // Iterate over the response and append options to the drop-down
                    $.each(response, function(index, option) {
                        $('#optionsDropdown').append('<option class="dropdown-item" value="' + option
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

    <script>
        function update_nationality() {
            var nation = [];
            var checkboxes = document.querySelectorAll('#countryTable input[type="checkbox"]:checked');
            for (var i = 0; i < checkboxes.length; i++) {
                nation.push(checkboxes[i].value);
            }

            var offer_id = document.getElementById('offer_put').value;

            console.log(offer_id);
            console.log(nation);

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

    <script>
        function update_Offer() {

            var checkedValues = [];

            // Iterate through checked checkboxes in the #countryTable
            var checkboxes = document.querySelectorAll('#countryTable input[type="checkbox"]:checked');

            checkboxes.forEach(function(checkbox) {
                // Get the value of the checkbox
                var checkboxValue = checkbox.value;

                // Find the associated additionalData element by ID
                var additionalDataElement = document.getElementById('additionalData_' + checkboxValue);

                // Get the value of the additionalData element
                var additionalDataValue = additionalDataElement.innerHTML;

                // Initialize a variable to store the ID value
                var idValue = '';

                // Split the additionalDataValue by '<br>' to get an array of parts
                var parts = additionalDataValue.split('<br>');

                // Loop through the parts to find the one containing 'ID:'
                for (var i = 0; i < parts.length; i++) {
                    var part = parts[i];
                    if (part.includes('ID:')) {
                        // Extract the 'ID' value and trim any leading/trailing spaces
                        id = document.getElementById("hiddenField").value;

                        idValue = part.split(':')[1].trim();
                        console.log(id);
                        console.log(idValue);
                        $.ajax({
                            url: '/api/updatenation/' + id + '/' + idValue,
                            method: 'POST',

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
                        break; // Exit the loop once 'ID' is found
                    }
                }

                // Push the checkbox value and extracted ID value to the checkedValues array
                checkedValues.push({
                    checkboxValue: checkboxValue,
                    idValue: idValue
                });
            });

            console.log(checkedValues);






            // for (var i = 0; i < checkboxes.length; i++) {
            //     nation.push(checkboxes[i].value);
            // }

            // var offer_id = document.getElementById('offer_put').value;

            // console.log(offer_id);
            // console.log(nation);

            // var data = {
            //     offer_id: offer_id,
            //     nation: nation
            // };


        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function getDocument() {
            // Make the AJAX request
            var nationality = document.getElementById('nationality').value;
            var destination = document.getElementById('destination').value;
            var offer_id = document.getElementById('optionsDropdown').value;

            $.ajax({
                url: '/api/document/' + nationality + '/' + destination,
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    // Clear existing table data
                    var tbody = $('#data-table5449 tbody');
                    // console.log(response.x[0].visa_type);
                    tbody.empty();
                    console.log(response); //for Documents
                    // console.log(response.offers); //for Offers




                    // Iterate over the response and append rows to the table
                    $.each(response, function(index, option) {
                        var row = '<tr>' +
                            '<td><input type="checkbox" id="offer_id" value="' + option.vid +
                            '" onchange="view_nation(' + option.id + ')"></td>' +
                            // '<td>' + option.id + '</td>' +
                            // '<td>' + option.document_type + '</td>' +
                            '<td>' + option.document_name +'ID'+ option.id + '</td>' +
                            '<td class="text-left"><a href="/offers_rules/edit/' + option.id +
                            '" class="fa fa-pencil" aria-hidden="true"></a></td>' +
                            '</tr>';
                        tbody.append(row);
                    });
                    // Assuming you have a <tbody> element with an ID 'countryTableBody'
                    // var tbody = $('#countryTableBody');

                    // $.each(response, function(index, option) {
                    //     var row = '<tr>' +
                    //         '<td><input type="checkbox" id="offer_id" value="' + option.vid +
                    //         '" onchange="view_nation(' + option.id + ')"></td>' +
                    //         '<td>' + option.document_name + '</td>' +
                    //         '<td class="text-left"><a href="/offers_rules/edit/' + option.id +
                    //         '" class="fa fa-pencil" aria-hidden="true"></a></td>' +
                    //         '</tr>';
                    //     tbody.append(row);
                    // });


                }
            });


            $.ajax({
                url: '/api/getdocument/nation/' + destination,
                method: 'GET',
                success: function(response) {
                    // List of nationalities to check


                    const nationalitiesToCheck_main = [
                        "Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa",
                        "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina",
                        "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
                        "Bhutan", "Bolivia", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina",
                        "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
                        "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon",
                        "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad",
                        "Chile", "China", "Christmas Island", "Colombia",
                        "Comoros", "Congo", "Congo, The Democratic Republic of ", "Cook Islands",
                        "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark",
                        "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador",
                        "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia",
                        "Faroe Islands", "Fiji", "Finland", "France",
                        "French Guiana", "French Polynesia", "French Southern Territories", "Gabon",
                        "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland",
                        "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau",
                        "Guyana", "Haiti", "Heard and Mc Donald Islands",
                        "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia",
                        "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy",
                        "Jamaica", "Japan", "Jersey", "Jordan", "Kazakstan", "Kenya", "Kiribati",
                        "Korea, Republic of",
                        "Kuwait", "Kyrgyzstan",
                        "Latvia", "Lebanon", "Lesotho", "Liberia",
                        "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao",
                        "Macedonia, The Former Yugoslav Republic Of", "Madagascar", "Malawi", "Malaysia",
                        "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania",
                        "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of",
                        "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco",
                        "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands",
                        "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger",
                        "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman",
                        "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama",
                        "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland",
                        "Portugal", "Puerto Rico", "Qatar", "Republic of Serbia", "Reunion", "Romania",
                        "Russia Federation", "Rwanda", "Saint Helena", "Saint Kitts & Nevis", "Saint Lucia",
                        "Saint Martin", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines",
                        "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal",
                        "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten",
                        "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa",
                        "South Georgia & The South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka",
                        "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland",
                        "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan",
                        "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau",
                        "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                        "Turkmenistan", "Turks and Caicos Islands",
                        "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
                        "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan",
                        "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands, British",
                        "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia",
                        "Zimbabwe"
                    ];

                    console.log(response);

                    // Uncheck all checkboxes at the beginning
                    $('#countryTable input[type="checkbox"]').prop('checked', false);

                    // Check if the response is empty
                    if (response.length === 0) {
                        console.log('No data in the response. All checkboxes are unchecked.');
                        $('#countryTable input[type="checkbox"]').prop('checked', false);
                        nationalitiesToCheck_main.forEach((nationality) => {
                            $('#additionalData_' + nationality).html('');
                        });
                    } else {
                        // Loop through the response data
                        response.forEach((item) => {
                            const destination = item.destination;
                            const offerId = item.offer_id;
                            const nationalitiesToCheck = item.nationality.split(',');

                            // Iterate over the nationalities to check for this item
                            nationalitiesToCheck.forEach((nationality) => {
                                // Remove leading/trailing spaces
                                nationality = nationality.trim();

                                // Check if the nationality is in the list to be checked
                                if (nationalitiesToCheck_main.includes(nationality)) {
                                    // Find the checkbox corresponding to the nationality and set it as checked
                                    var checkboxFound =
                                        false; // Flag to track if the checkbox is found



                                    $('#countryTable input[type="checkbox"]').each(function() {
                                        if ($(this).val() === nationality) {
                                            // Get the item.id from the data-item-id attribute
                                            var countryName = $(this).val();
                                            var offerId = $(this).data('offer-id');

                                            $(this).prop('checked', false);
                                            checkboxFound = true;

                                            $('#additionalData_' + nationality).html(
                                                'Offer Type: ' + item.visa_type +
                                                ',<br> Offer Price: ' + item
                                                .base_rate_adult +
                                                '<br>Visa Validity:' + item
                                                .visa_validity +
                                                '<br>ID:' + item.id
                                            ); // Use offerId
                                        }
                                    });


                                    if (!checkboxFound) {
                                        console.log('Checkbox not found for nationality: ' +
                                            nationality);
                                    }
                                }
                            });
                        });
                    }
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });









        }
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('.chh').change(function() {
            var offer_id = $('#additionalData_' + $(this).val());

            // Get the text content of the element using jQuery
            var offerTypeText = offer_id.text();

            // Extract the "Offer Type" from the text content
            var offerType = offerTypeText.split(':')[2].trim();

            // Extract the "Offer Price" from the text content
            var offerID = offerTypeText.split(':')[3].trim();
            console.log(offerID);

            // JSON data to be sent in the AJAX request
            var jsonData = {
                "offer_id": parseInt(
                    offerID), // Assuming the offerID is a number, convert it to an integer if needed
                "document_id": 9 // Replace this with the appropriate document_id value
            };
            console.log(jsonData);
            $.ajax({
                url: "http://127.0.0.1:8000/api/offer/update",
                type: "POST", // Change to "GET" or "POST" depending on your server-side implementation
                data: JSON.stringify(jsonData), // Convert JSON data to a string
                contentType: "application/json", // Set the content type to JSON
                dataType: "json", // Specify the data type of the response
                success: function(response) {
                    // Handle the response from the server (if applicable)
                    console.log("Success:", response);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    // Handle errors, if any
                    console.log("Error:", textStatus, errorThrown);
                }
            });
        });



        function view_nation(id) {
            console.log(id);
            // Get a reference to the hidden input element by its ID
            var hiddenField = document.getElementById("hiddenField");

            // Set the value of the hidden input field
            hiddenField.value = id;

            var update_field = document.getElementById("offer_put");
            // update_field.value = id;

            $.ajax({
                url: '/api/getdocument/' + id,
                method: 'GET',
                success: function(response) {
                    const data = response;

                    const countries = ["Afghanistan", "Aland Islands", "Albania", "Algeria", "American Samoa",
                        "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina",
                        "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                        "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda",
                        "Bhutan", "Bolivia", "Bonaire, Sint Eustatius and Saba", "Bosnia and Herzegovina",
                        "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory",
                        "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon",
                        "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad",
                        "Chile", "China", "Christmas Island", "Colombia",
                        "Comoros", "Congo", "Congo, The Democratic Republic of ", "Cook Islands",
                        "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark",
                        "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador",
                        "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia",
                        "Faroe Islands", "Fiji", "Finland", "France",
                        "French Guiana", "French Polynesia", "French Southern Territories", "Gabon",
                        "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland",
                        "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guernsey", "Guinea", "Guinea-Bissau",
                        "Guyana", "Haiti", "Heard and Mc Donald Islands",
                        "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia",
                        "Iran, Islamic Republic of", "Iraq", "Ireland", "Isle of Man", "Israel", "Italy",
                        "Jamaica", "Japan", "Jersey", "Jordan", "Kazakstan", "Kenya", "Kiribati",
                        "Korea, Republic of",
                        "Kuwait", "Kyrgyzstan",
                        "Latvia", "Lebanon", "Lesotho", "Liberia",
                        "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macao",
                        "Macedonia, The Former Yugoslav Republic Of", "Madagascar", "Malawi", "Malaysia",
                        "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania",
                        "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of",
                        "Moldova, Republic of", "Monaco", "Mongolia", "Montenegro", "Montserrat", "Morocco",
                        "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands",
                        "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger",
                        "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman",
                        "Pakistan", "Palau", "Palestinian Territory, Occupied", "Panama",
                        "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland",
                        "Portugal", "Puerto Rico", "Qatar", "Republic of Serbia", "Reunion", "Romania",
                        "Russia Federation", "Rwanda", "Saint Helena", "Saint Kitts & Nevis", "Saint Lucia",
                        "Saint Martin", "Saint Pierre and Miquelon", "Saint Vincent and the Grenadines",
                        "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal",
                        "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Sint Maarten",
                        "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa",
                        "South Georgia & The South Sandwich Islands", "South Sudan", "Spain", "Sri Lanka",
                        "Sudan", "Suriname", "Svalbard and Jan Mayen", "Swaziland", "Sweden", "Switzerland",
                        "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan",
                        "Tanzania, United Republic of", "Thailand", "Timor-Leste", "Togo", "Tokelau",
                        "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                        "Turkmenistan", "Turks and Caicos Islands",
                        "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom",
                        "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan",
                        "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands, British",
                        "Wallis and Futuna", "Western Sahara", "Yemen", "Zambia",
                        "Zimbabwe"
                    ]; // Replace with your actual list of countries

                    const obj = data
                        .result; // Assuming the response data has a property named 'result' containing the country data
                    var x = 0;

                    console.log(typeof obj);

                    for (const country of countries) {
                        if (obj && obj[x][nationality] && obj[x][nationality].length > 0) {
                            for (const offer of obj[x][nationality]) {
                                const offerId = offer.offer_id;
                                const offerPrice = offer.offer_price;
                                const offerType = offer.offer_type;

                                console.log(`Country: ${country}`);


                                // Find the checkbox corresponding to the nationality and set it as checked
                                var checkboxFound = false;

                                $('#countryTable input[type="checkbox"]').each(function() {
                                    if ($(this).val() === country) {
                                        $(this).prop('checked', true);
                                        checkboxFound = true;
                                        console.log('additionalData_' + nationality);
                                        // $('#additionalData_' + country).html('Offer Type: ' +
                                        //     offerType + ',<br> Offer Price: ' + offerPrice+'<input type = 'hidden' value='+offerId+' id = 'offer_id_list' />');
                                        $('#additionalData_' + country).html('Offer Type: ' +
                                            offerType + ',<br> Offer Price: ' + offerPrice +
                                            'Offer ID:' + offerId);

                                    }
                                });

                                $('#countryTable td').each(function() {
                                    if ($(this).text() === nationality) {
                                        // $(this).find('input[type="checkbox"]').prop('checked', true);
                                        $(this).find('span').text('additionalData_' + offerId);
                                        checkboxFound = true;
                                    }
                                });


                                if (!checkboxFound) {
                                    console.log('Checkbox not found for country: ' + country);
                                }
                            }
                        }
                        x++;
                    }
                },
                error: function(error) {
                    console.log('Error:', error);
                }
            });
        }
    </script>



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
