<?= $this->extend('Layouts/indexView2') ?>
<?= $this->section('content') ?>

<div class="main-header sticky">
    <div class="container-fluid">
        <div class="col-lg-1 thumb">
            <a class="thumbnail" href="">
                <img class="img-responsive" src="http://localhost/appci4/public/img/logo.png" alt="" width="50" height="50">
            </a>
        </div>
        <!-- 1 -->
        <div class="main-header-center">
            <div class="responsive-logo">
                <a href="http://localhost/LTR/pages/index"><img src="http://localhost/LTR/public/assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
                <a href="http://localhost/LTR/pages/index"><img src="http://localhost/LTR/public/assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
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
<!-- End Main Header-->
<?= $this->endSection() ?>