<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>VisaDone</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/visadone_logo.png" />

</head>
<style>
    .content-wrapper {
    background: #ffffff;
    padding: 2.375rem 2.375rem;
    width: 100%;
    -webkit-flex-grow: 1;
    flex-grow: 1;
}
</style>
<body>
    <div class="container-scroller">
        <div class="container page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0" >
                <div class="row w-100 mx-0">
                    <div class="col-lg-6 mx-auto" style="background-color: rgb(244 244 244);">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5" style="background-color: rgb(244 244 244);" >
                            <div class="brand-logo">
                                <img src="../../images/visadone_logo_login.png" alt="logo" class="mx-auto">

                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="font-weight-light">Sign in to continue.</h6>
                            <form action="/auth/login" method="GET" class="pt-3">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" name="mobile_number" id="exampleInputEmail1"
                                        placeholder="Phone Number">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-lg"
                                        id="exampleInputPassword1" name="password" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <input type="submit" value="SIGN IN" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                       style="background-color: #ff7c00;border:none;" />
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            Keep me signed in
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black" style="color:#ff7c00">Forgot password?</a>
                                </div>
                                {{-- <div class="mb-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook mr-2"></i>Connect using facebook
                                    </button>
                                </div> --}}
                                <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="/register" class="text-primary">Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6" style="background-color: rgb(244 244 244);">
                        <div class="topic" wi>

                            <img src="/images/Visa Login_cop.png" alt="" width="100%" >

                        </div>



                    </div>

                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
