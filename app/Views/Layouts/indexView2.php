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
        <?= $this->renderSection('content') ?>
        <!-- End Header -->
        <?= include 'mobileHeader.php' ?>

        <!-- Main Content-->
        <div class="main-content pt-0">

            <div class="container-fluid">
                <div class="inner-body">
                    <!-- Page Header -->
                    <div class="page-header">
                        <div>
                            <h2 class="main-content-title tx-24 mg-b-5">Badan Pengelola Keuangan Daerah Pemerintah Kota Medan </h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Agenda</li>
                            </ol>
                        </div>
                    </div>
                    <!-- End Page Header -->

                    <!--Row-->
                    <div class="row row-sm">
                        <div class="col-sm-12 col-lg-12 col-xl-12">
                            <!--Row-->
                            <div class="row row-sm">
                                <!-- card 1 -->
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="card-item">
                                                <div class="card-item-icon card-icon">
                                                    <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24" viewBox="0 0 24 24" width="24">
                                                        <g>
                                                            <rect height="14" opacity=".3" width="14" x="5" y="5" />
                                                            <g>
                                                                <rect fill="none" height="24" width="24" />
                                                                <g>
                                                                    <path d="M19,3H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h14c1.1,0,2-0.9,2-2V5C21,3.9,20.1,3,19,3z M19,19H5V5h14V19z" />
                                                                    <rect height="5" width="2" x="7" y="12" />
                                                                    <rect height="10" width="2" x="15" y="7" />
                                                                    <rect height="3" width="2" x="11" y="14" />
                                                                    <rect height="2" width="2" x="11" y="10" />
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                </div>
                                                <!-- 1 -->
                                                <div class="card-item-title mb-2">
                                                    <label class="main-content-label tx-14 font-weight-bold mb-1">Agenda Rapat Hari ini :</label>
                                                </div>
                                                <div class="card-item-body">
                                                    <div class="card-item-stat">
                                                        <h4 class="font-weight-bold"><?= $todayAgenda['count']; ?></h4>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card 1 -->

                                <!--  card 2 -->
                                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                                    <div class="card custom-card">
                                        <div class="card-body">
                                            <div class="card-item">
                                                <div class="card-item-icon card-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24">
                                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                                        <path d="M12 4c-4.41 0-8 3.59-8 8 0 1.82.62 3.49 1.64 4.83 1.43-1.74 4.9-2.33 6.36-2.33s4.93.59 6.36 2.33C19.38 15.49 20 13.82 20 12c0-4.41-3.59-8-8-8zm0 9c-1.94 0-3.5-1.56-3.5-3.5S10.06 6 12 6s3.5 1.56 3.5 3.5S13.94 13 12 13z" opacity=".3" />
                                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM7.07 18.28c.43-.9 3.05-1.78 4.93-1.78s4.51.88 4.93 1.78C15.57 19.36 13.86 20 12 20s-3.57-.64-4.93-1.72zm11.29-1.45c-1.43-1.74-4.9-2.33-6.36-2.33s-4.93.59-6.36 2.33C4.62 15.49 4 13.82 4 12c0-4.41 3.59-8 8-8s8 3.59 8 8c0 1.82-.62 3.49-1.64 4.83zM12 6c-1.94 0-3.5 1.56-3.5 3.5S10.06 13 12 13s3.5-1.56 3.5-3.5S13.94 6 12 6zm0 5c-.83 0-1.5-.67-1.5-1.5S11.17 8 12 8s1.5.67 1.5 1.5S12.83 11 12 11z" />
                                                    </svg>
                                                </div>
                                                <div class="card-item-title mb-2">
                                                    <label class="main-content-label tx-14 font-weight-bold mb-1">Data Seluruh Agenda Rapat :</label>

                                                </div>
                                                <div class="card-item-body">
                                                    <div class="card-item-stat">
                                                        <h4 class="font-weight-bold"><?= $dataAllAgenda; ?></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card 2 -->
                            </div>
                            <!--End row-->

                            <!--row-->
                            <div class="row row-sm">
                                <!-- Tabel -->
                                <?php include 'tabelAgenda.php' ?>
                            </div>
                            <!-- Row end -->
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- Row end -->
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>

    </div>

    <?php include 'javascrip.php' ?>
</body>

</html>