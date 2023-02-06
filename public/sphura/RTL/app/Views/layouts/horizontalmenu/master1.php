<body class="horizontalmenu">

    <!-- Loader -->
    <div id="global-loader">
        <img src="<?php echo base_url('public/assets/img/loader.svg'); ?>" class="loader-img" alt="Loader"> 
    </div>
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

    <?= $this->include('layouts/horizontalmenu/main-header'); ?>

    <?= $this->include('layouts/horizontalmenu/mobile-header'); ?>

    <?= $this->include('layouts/horizontalmenu/horizontalmenu'); ?>

        <!-- Main Content-->
        <div class="main-content pt-0 error-bg">

            <div class="container">
                <div class="inner-body">