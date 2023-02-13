<?php include 'header.php' ?>

<body class="main-body leftmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="http://localhost/appci4/public/assets/img/loader.svg" class="loader-img" alt="Loader">
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">
        <!-- Header -->
        <div class="main-header sticky">
            <div class="container-fluid">
                <div class="col-lg-1 thumb">
                    <a class="thumbnail" href="">
                        <img class="img-responsive" src="http://localhost/appci4/public/img/logo.png" alt="" width="50" height="50">
                    </a>
                </div>
                <div class="page-header">
                    <div>
                        <h3 class="main-content-title tx-18 mg-b-5">Badan Pengelola Keuangan Daerah Pemerintah Kota Medan </h3>
                    </div>
                </div>

                <!-- 1 -->
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="http://localhost/appci4/pages/index"><img src="http://localhost/appci4/public/assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
                        <a href="http://localhost/appci4/pages/index"><img src="http://localhost/appci4/public/assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
                    </div>
                </div>

                <!-- 2 -->
                <div class="main-header-right">

                    <!-- <div class="input-group">
                <input class="form-control" placeholder="Search for..." type="text">
                <span class="input-group-btn"><button class="btn ripple btn-primary" type="button">
                        <span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
            </div> -->

                    <div class="dropdown main-profile-menu">
                        <a class="d-flex" href="">
                            <span class="main-img-user"><img alt="avatar" src="http://localhost/appci4/public/img/user.png"></span>
                        </a>

                        <div class="dropdown-menu">
                            <div class="header-navheading">
                                <h6 class="main-notification-title">BPKAD</h6>

                            </div>
                            <?php if ($session->get('role') === "superadmin") { ?>
                                <a class="dropdown-item" href="/user/index">
                                    <i class="fe fe-user"></i> Manajemen user
                                </a>
                            <?php
                            }
                            ?>

                            <?php if ($session->has('logged_in')) { ?>
                                <a class="dropdown-item" href="/logout">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>

                            <?php    } else { ?>
                                <a class="dropdown-item" href="/auth">
                                    <i class="fe fe-power"></i> Login
                                </a>
                            <?php } ?>
                        </div>

                    </div>



                </div>
            </div>
        </div>

        <!-- End Header -->


        <!-- Main Content-->
        <?= $this->renderSection('content') ?>
    </div>
    <?php include 'footer.php' ?>

    </div>

    <?php include 'javascrip.php' ?>
</body>

</html>