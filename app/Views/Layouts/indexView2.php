<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

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

        <!-- Mobile-header -->
        <div class="mobile-main-header">
            <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                    <div class="d-flex order-lg-2 ml-auto">
                        <div class="dropdown header-search">
                            <a class="nav-link icon header-search">
                                <i class="fe fe-search header-icons"></i>
                            </a>
                            <div class="dropdown-menu">
                                <div class="main-form-search p-2">
                                    <div class="input-group">
                                        <div class="input-group-btn search-panel">
                                            <select class="form-control select2-no-search">
                                                <option label="All categories">
                                                </option>
                                                <option value="IT Projects">
                                                    IT Projects
                                                </option>
                                                <option value="Business Case">
                                                    Business Case
                                                </option>
                                                <option value="Microsoft Project">
                                                    Microsoft Project
                                                </option>
                                                <option value="Risk Management">
                                                    Risk Management
                                                </option>
                                                <option value="Team Building">
                                                    Team Building
                                                </option>
                                            </select>
                                        </div>
                                        <input type="search" class="form-control" placeholder="Search for anything...">
                                        <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                                <circle cx="11" cy="11" r="8"></circle>
                                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            </svg></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown main-header-notification flag-dropdown">
                            <a class="nav-link icon country-Flag">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <circle cx="256" cy="256" r="256" fill="#f0f0f0" />
                                    <g fill="#0052b4">
                                        <path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z" />
                                    </g>
                                    <g fill="#d80027">
                                        <path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z" />
                                        <path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z" />
                                    </g>
                                </svg>
                            </a>

                        </div>
                        <div class="dropdown full-screen-link">
                            <a class="nav-link icon ">
                                <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
                                <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
                            </a>
                        </div>

                        <div class="dropdown main-header-notification">
                            <a class="nav-link icon" href="">
                                <i class="fe fe-message-square header-icons"></i>
                                <span class="badge badge-success nav-link-badge">3</span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <p class="main-notification-text tx-medium text-left"> 3 New messages </p>
                                </div>
                                <div class="main-notification-list">
                                    <div class="media new">
                                        <div class="main-img-user online"><img alt="avatar" src="http://localhost/LTR/public/assets/img/users/10.jpg"></div>
                                        <div class="media-body">
                                            <p>Paul Molive <span>I'm sorry but i'm not sure how...</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user online"><img alt="avatar" src="http://localhost/LTR/public/assets/img/users/8.jpg"></div>
                                        <div class="media-body">
                                            <p>Sahar DaryAll<span> set ! Now, time to get to you now......</span>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <div class="main-img-user online"><img alt="avatar" src="http://localhost/LTR/public/assets/img/users/11.jpg"></div>
                                        <div class="media-body">
                                            <p>Barney Cull</p><span>Here are some products ...</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="dropdown-footer">
                                    <a href="#">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown main-profile-menu">
                            <a class="d-flex" href="#">
                                <span class="main-img-user"><img alt="avatar" src="http://localhost/LTR/public/assets/img/users/1.jpg"></span>
                            </a>
                            <div class="dropdown-menu">
                                <div class="header-navheading">
                                    <h6 class="main-notification-title">Sonia Taylor</h6>
                                    <p class="main-notification-text">Web Designer</p>
                                </div>
                                </a>
                                <a class="dropdown-item" href="http://localhost/LTR/pages/signin">
                                    <i class="fe fe-power"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <div class="dropdown  header-settings">
                            <a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
                                <i class="fe fe-align-right header-icons"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile-header closed -->

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
                                                    <!-- <span class="d-block tx-12 mb-0 text-muted">Previous month vs this months</span>-->
                                                </div>
                                                <div class="card-item-body">
                                                    <div class="card-item-stat">
                                                        <h4 class="font-weight-bold">1</h4>
                                                        <!-- <small><b class="text-success">55%</b> higher</small> -->
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
                                                        <h4 class="font-weight-bold">15</h4>

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