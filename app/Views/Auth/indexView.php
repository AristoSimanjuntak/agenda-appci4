<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">

    <!-- Favicon -->
    <link rel="icon" href="http://localhost/appci4/public/img/logo.png" type="image/x-icon" />

    <!-- Title -->
    <title><?= $title ?? 'Dashboard' ?></title>

    <!-- Bootstrap css-->
    <link href="http://localhost/appci4/public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="http://localhost/appci4/public/assets/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="http://localhost/appci4/public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet" />
    <link href="http://localhost/appci4/public/assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="http://localhost/appci4/public/assets/css/style.css" rel="stylesheet" />
    <link href="http://localhost/appci4/public/assets/css/skins.css" rel="stylesheet" />
    <link href="http://localhost/appci4/public/assets/css/dark-style.css" rel="stylesheet" />
    <link href="http://localhost/appci4/public/assets/css/colors/default.css" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="http://localhost/appci4/public/assets/css/colors/color.css" />

    <!-- Select2 css-->
    <link href="http://localhost/appci4/public/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="http://localhost/appci4/public/assets/css/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="http://localhost/appci4/public/assets/plugins/multipleselect/multiple-select.css">

</head>

<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="http://localhost/appci4/public/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page main-signin-wrapper">
        <div class="row signpages text-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="row row-sm">
                        <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                            <div class="mt-5 pt-4 p-2 pos-absolute">
                                <h2 class="mt-0 text-white">B P K A D </h2>

                                <div class="clearfix"></div>
                                <img src="http://localhost/appci4/public/img/logo.png" class="ht-150 mb-0" alt="user">
                                <h5 class="mt-0 text-white">Create Your Account</h5>
                                <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Badan Pengelolaan Keuangan dan Aset Daerah Kota Medan</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                            <div class="container-fluid">
                                <div class="row row-sm">
                                    <div class="card-body mt-2 mb-2">
                                        <img src="http://localhost/appci4/public/assets/img/brand/logo.png" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
                                        <div class="clearfix"></div>
                                        <form action="/auth/login" method="post">
                                            <h5 class="text-left mb-2">Signin to Your Account</h5>
                                            <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to create, discover and connect with the global community</p>

                                            <div class="form-group text-left">
                                                <label>Email</label>
                                                <input class="form-control" placeholder="Enter your email" type="text" id="email" name="email" value="<?= set_value('email') ?>">
                                            </div>
                                            <div class="form-group text-left">
                                                <label>Password</label>
                                                <input class="form-control" placeholder="Enter your password" type="password" id="password" name="password">
                                            </div>
                                            <button class="btn ripple btn-main-primary btn-block" type="submit">Sign In</button>
                                        </form>

                                        <div class="text-left mt-5 ml-0 mb-1">
                                            <?php if (session()->getFlashdata('msg')) : ?>
                                                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
                                            <?php endif; ?>
                                            <!-- <div class="mb-1"><a href="<?php echo base_url('pages/forgot'); ?>">Forgot password?</a></div>
                                            <div>Don't have an account? <a href="<?php echo base_url('pages/signup'); ?>">Register Here</a></div> -->
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

    <!-- End Row -->

    </div>

</body>
<!-- Jquery js-->
<script src="http://localhost/appci4/public/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="http://localhost/appci4/public/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="http://localhost/appci4/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect-scrollbar js -->
<script src="http://localhost/appci4/public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Sidemenu js -->
<script src="http://localhost/appci4/public/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Sidebar js -->
<script src="http://localhost/appci4/public/assets/plugins/sidebar/sidebar.js"></script>

<!-- Select2 js-->
<script src="http://localhost/appci4/public/assets/plugins/select2/js/select2.min.js"></script>

<!-- Sticky js -->
<script src="http://localhost/appci4/public/assets/js/sticky.js"></script>

<!-- Custom js -->
<script src="http://localhost/appci4/public/assets/js/custom.js"></script>

<!-- Internal Chart.Bundle js-->
<script src="http://localhost/appci4/public/assets/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Peity js-->
<script src="http://localhost/appci4/public/assets/plugins/peity/jquery.peity.min.js"></script>

<!-- Internal Morris js -->
<script src="http://localhost/appci4/public/assets/plugins/raphael/raphael.min.js"></script>
<script src="http://localhost/appci4/public/assets/plugins/morris.js/morris.min.js"></script>

<!-- Circle Progress js-->
<script src="http://localhost/appci4/public/assets/js/circle-progress.min.js"></script>
<script src="http://localhost/appci4/public/assets/js/chart-circle.js"></script>

<!-- Internal Dashboard js-->
<script src="http://localhost/appci4/public/assets/js/index.js"></script>

<!-- Internal Jquery-Ui js-->
<script src="http://localhost/appci4/public/assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- Internal Jquery.maskedinput js-->
<script src="http://localhost/appci4/public/assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

<!-- Internal Specturm-colorpicker js-->
<script src="http://localhost/appci4/public/assets/plugins/spectrum-colorpicker/spectrum.js"></script>

<!-- Internal Ion-rangeslider js-->
<script src="http://localhost/appci4/public/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<!-- Select2 js-->
<script src="http://localhost/appci4/public/assets/js/select2.js"></script>

<!--Bootstrap-datepicker js-->
<script src="http://localhost/appci4/public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- Internal jquery-simple-datetimepicker js -->
<script src="http://localhost/appci4/public/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

<!-- Internal Form-elements js-->
<script src="http://localhost/appci4/public/assets/js/form-elements.js"></script>

</html>