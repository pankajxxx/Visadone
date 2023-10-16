<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            background-color: orange;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .header img {
            max-width: 100%;
            height: auto;
        }

        .header-icons {
            display: flex;
            align-items: center;
        }

        .header-icons a {
            margin: 0 10px;
            color: rgb(4, 86, 250);
            font-size: 24px;
            text-decoration: none;
        }

        .banner-section {
            text-align: center;
            padding: 20px;
            background-color: #f5f5f5;
        }

        .banner-section img {
            max-width: 100%;
            height: auto;
        }

        .email-contents {
            padding: 10px;
            background-color: #ffffff;
        }

        .footer {
            background-color: orange;
            padding: 20px;
            text-align: center;
        }

        .footer-icons {
            margin-top: 20px;
            text-align: right;
        }

        .footer-icons a {
            margin: 0 10px;
            color: white;
            font-size: 24px;
            text-decoration: none;
        }

        /* Media Query for Smaller Screens */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
            }
            .header-icons {
                margin-top: 10px;
            }
        }

        /* Status Bar Styles */
        .status-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
            background-color: #f5f5f5;
            border-radius: 5px;
            padding: 5px;
        }

        .status-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .status-icon {
            width: 30px;
            height: 30px;
            background-color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            margin-bottom: 5px;
        }

        .status-text {
            font-weight: bold;
        }

        .status-line {
            position: absolute;
            height: 2px;
            background-color: #ddd;
            width: 100%;
            top: 50%;
            transform: translateY(-50%);
            z-index: -1;
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="https://visadone.com/laravel_demo/laravel8/public/images/visadone_logo.png" alt="logo">
        <div class="header-icons">
            <a href="#"><i class="fas fa-envelope"></i></a>
            <a href="#"><i class="fas fa-phone"></i></a>
            <a href="#"><i class="fas fa-info-circle"></i></a>
        </div>
    </div>
    {{-- <section class="banner-section">
        <img src="D:\Aditya.Yadav\Downloads\Visa Email Templetebg.png" alt="Image">
    </section> --}}
    <div class="container email-contents">
        <!-- Your main email contents go here -->
        <h2><b>Visa Status Update</b></h2>
        <p>Dear {{$name}},</p>
        <p>We are writing to inform you that your visa status has been updated. Please log in to your account to view
            the details. Reference Number: {{$id}}</p>
        <p>If you have any questions or concerns, feel free to contact our support team.</p>
        <p>Thank you for choosing our services.</p>
        <p>Sincerely,<br>Your Visa Team</p>

        <h4 align="center">Application Status</h4>

        <!-- Status Bar -->
        <div class="status-bar">
            <div class="status-step">
                <div class="status-icon">
                    @if($status === 'Ready To Submit')
                    <i class="fas fa-check"></i>
                    @endif
                </div>
                <div class="status-text">Step 1</div>
                <div class="status-line"></div>
            </div>
            <div class="status-step">
                <div class="status-icon">
                    @if($status === 'In Process')
                    <i class="fas fa-check"></i>
                    @endif
                </div>
                <div class="status-text">Step 2</div>
                <div class="status-line"></div>
            </div>
            <div class="status-step">
                <div class="status-icon">
                    @if($status === 'Completed Applications')
                    <i class="fas fa-check"></i>
                    @endif
                </div>
                <div class="status-text">Step 3</div>
                <div class="status-line"></div>
            </div>
            <div class="status-step">
                <div class="status-icon">
                    @if($status === 'Held Applications')
                    <i class="fas fa-check"></i>
                    @endif
                </div>
                <div class="status-text">Step 4</div>
                <div class="status-line"></div>
            </div>
        </div>


    </div>
    <div class="footer">
        <div class="footer-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
