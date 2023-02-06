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
    <link href="http://localhost/LTR/public/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Icons css-->
    <link href="http://localhost/LTR/public/assets/plugins/web-fonts/icons.css" rel="stylesheet" />
    <link href="http://localhost/LTR/public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet" />
    <link href="http://localhost/LTR/public/assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <!-- Style css-->
    <link href="http://localhost/LTR/public/assets/css/style.css" rel="stylesheet" />
    <link href="http://localhost/LTR/public/assets/css/skins.css" rel="stylesheet" />
    <link href="http://localhost/LTR/public/assets/css/dark-style.css" rel="stylesheet" />
    <link href="http://localhost/LTR/public/assets/css/colors/default.css" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="http://localhost/LTR/public/assets/css/colors/color.css" />

    <!-- Select2 css-->
    <link href="http://localhost/LTR/public/assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="http://localhost/LTR/public/assets/css/sidemenu/sidemenu.css" rel="stylesheet">

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="http://localhost/LTR/public/assets/plugins/multipleselect/multiple-select.css">

</head>

<div class="main-header side-header sticky">
    <div class="container-fluid">
        <div class="col-lg-1 thumb">
            <a class="thumbnail" href="">
                <img class="img-responsive" src="http://localhost/appci4/public/img/logo.png" alt="" width="50" height="50">
            </a>
        </div>
        <!-- 1 -->
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="<?php base_url('Home/indexView'); ?>"><img src="http://localhost/appci4/public/img/logo.png" class="mobile-logo" alt="logo"></a>

            </div>
        </div>

        <!-- 2 -->
        <div class="main-header-right">
            <div class="input-group">
                <div class="input-group-btn search-panel">
                </div>
                <input type="search" class="form-control rounded-0" placeholder="Search for anything...">
                <button class="btn search-btn"><i class="fe fe-search"></i></button>
            </div>

            <div class="dropdown main-profile-menu">
                <a class="d-flex" href="">
                    <span class="main-img-user"><img alt="avatar" src="http://localhost/LTR/public/assets/img/users/1.jpg"></span>
                </a>

                <div class="dropdown-menu">
                    <div class="header-navheading">
                        <h6 class="main-notification-title">BPKAD MEDAN</h6>
                        <p class="main-notification-text">Web Designer</p>
                    </div>

                    <a class="dropdown-item border-top" href="http://localhost/LTR/pages/profile">
                        <i class="fe fe-user"></i> My Profile
                    </a>
                    <a class="dropdown-item" href="http://localhost/LTR/pages/profile">
                        <i class="fe fe-edit"></i> Edit Profile
                    </a>
                    <a class="dropdown-item" href="http://localhost/LTR/pages/profile">
                        <i class="fe fe-settings"></i> Account Settings
                    </a>
                    <a class="dropdown-item" href="http://localhost/LTR/pages/profile">
                        <i class="fe fe-settings"></i> Support
                    </a>
                    <a class="dropdown-item" href="http://localhost/LTR/pages/profile">
                        <i class="fe fe-compass"></i> Activity
                    </a>
                    <a class="dropdown-item" href="http://localhost/LTR/pages/signin">
                        <i class="fe fe-power"></i> Sign Out
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>

<div class="row row-sm">
    <div class="col-lg-12 col-md-12">
        <div class="card custom-card">
            <div class="card-body">
                <div>
                    <h2 class="main-content-label mb-1 tx-20">Tambah Agenda</h2>
                </div> <br>
                <div class="row row-sm">
                    <div class="col-md-12 col-lg-12 col-xl-12">
                        <div class="">
                            <div class="form-group">
                                <label class="">Nama Agenda Rapat</label>
                                <input class="form-control" required="" placeholder="Isi Nama Agenda Rapat" type="text">
                            </div>
                            <div class="form-group">
                                <label class="">Asal Surat</label>
                                <div class="pos-relative">
                                    <input class="form-control pd-r-80" required="" placeholder="Isi Asal Surat" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="">Nomor Surat</label>
                                <div class="pos-relative">
                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="">Nomor Surat BKAD</label>
                                <div class="pos-relative">
                                    <input class="form-control pd-r-80" required="" placeholder="Isi Nomor Surat BKAD" type="int">
                                </div>
                            </div>
                            <div class="row row-sm">
                                <div class="col-lg-6">
                                    <div class="mg-b-20">
                                        <label class="">Tanggal</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fe fe-calendar lh--9 op-6"></i>
                                                </div>
                                            </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mg-b-20">
                                        <label class="">Tempat</label>
                                        <div class="form-group">
                                            <div class="pos-relative">
                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <label class="">Disposisi</label>
                                        <form action="<?php echo base_url('Agenda/indexView'); ?>" id="selectForm" name="selectForm">
                                            <div class="d-sm-flex">
                                                <div class="parsley-select wd-sm-250" id="slWrapper">
                                                    <select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Pilih Disposisi" required="">
                                                        <option label="Choose one">
                                                        </option>
                                                        <option value="Sekertaris">
                                                            Sekertaris
                                                        </option>
                                                        <option value="Kabid Anggaran">
                                                            Kabid Anggaran
                                                        </option>
                                                        <option value="Kabid Pembedaharaan">
                                                            Kabid Pembedaharaan
                                                        </option>
                                                        <option value="Kabid Aset dan Investasi">
                                                            Kabid Aset dan Investasi
                                                        </option>
                                                        <option value="Kabid Akuntansi">
                                                            Kabid Akuntansi
                                                        </option>
                                                    </select>
                                                    <div id="slErrorContainer"></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <label class="">Disposisi</label>
                                        <div class="form-group">
                                            <div class="pos-relative">
                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <label class="">Disposisi</label>
                                        <div class="form-group">
                                            <div class="pos-relative">
                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="mg-b-20">
                                        <label class="">Disposisi</label>
                                        <div class="form-group">
                                            <div class="pos-relative">
                                                <input class="form-control pd-r-80" required="" placeholder="Lokasi Rapat" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row row-sm mg-t-20">
                                <div class="col-lg">
                                    <label class="">Catatan</label>
                                    <textarea class="form-control" placeholder="Isi Catatan" rows="3"></textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group mg-b-20">
                                <label class="ckbox">
                                    <input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
                                </label>
                            </div>
                            <button class="btn ripple btn-main-primary btn-block">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Main Header-->
<!-- Main Footer-->
<div class="main-footer text-center">
    <div class="container">
        <div class="row row-sm">
            <div class="col-md-12">
                <span>Copyright © 2021 <a href="#">BPKAD Medan</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
            </div>
        </div>
    </div>
</div>
<!--End Footer-->
<!-- Back-to-top -->
<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

<!-- Jquery js-->
<script src="http://localhost/LTR/public/assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap js-->
<script src="http://localhost/LTR/public/assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="http://localhost/LTR/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect-scrollbar js -->
<script src="http://localhost/LTR/public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Sidemenu js -->
<script src="http://localhost/LTR/public/assets/plugins/sidemenu/sidemenu.js"></script>

<!-- Sidebar js -->
<script src="http://localhost/LTR/public/assets/plugins/sidebar/sidebar.js"></script>

<!-- Select2 js-->
<script src="http://localhost/LTR/public/assets/plugins/select2/js/select2.min.js"></script>

<!-- Sticky js -->
<script src="http://localhost/LTR/public/assets/js/sticky.js"></script>

<!-- Custom js -->
<script src="http://localhost/LTR/public/assets/js/custom.js"></script>
<!-- Internal Chart.Bundle js-->
<script src="http://localhost/LTR/public/assets/plugins/chart.js/Chart.bundle.min.js"></script>

<!-- Peity js-->
<script src="http://localhost/LTR/public/assets/plugins/peity/jquery.peity.min.js"></script>

<!-- Internal Morris js -->
<script src="http://localhost/LTR/public/assets/plugins/raphael/raphael.min.js"></script>
<script src="http://localhost/LTR/public/assets/plugins/morris.js/morris.min.js"></script>

<!-- Circle Progress js-->
<script src="http://localhost/LTR/public/assets/js/circle-progress.min.js"></script>
<script src="http://localhost/LTR/public/assets/js/chart-circle.js"></script>

<!-- Internal Dashboard js-->
<script src="http://localhost/LTR/public/assets/js/index.js"></script>

<!-- Internal Jquery-Ui js-->
<script src="http://localhost/LTR/public/assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

<!-- Internal Jquery.maskedinput js-->
<script src="http://localhost/LTR/public/assets/plugins/jquery.maskedinput/jquery.maskedinput.js"></script>

<!-- Internal Specturm-colorpicker js-->
<script src="http://localhost/LTR/public/assets/plugins/spectrum-colorpicker/spectrum.js"></script>

<!-- Internal Ion-rangeslider js-->
<script src="http://localhost/LTR/public/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>

<!-- Select2 js-->
<script src="http://localhost/LTR/public/assets/js/select2.js"></script>

<!--Bootstrap-datepicker js-->
<script src="http://localhost/LTR/public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<!-- Internal jquery-simple-datetimepicker js -->
<script src="http://localhost/LTR/public/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js"></script>

<!-- Internal Form-elements js-->
<script src="http://localhost/LTR/public/assets/js/form-elements.js"></script>

</html>