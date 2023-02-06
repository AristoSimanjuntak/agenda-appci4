<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

		<!-- Sidemenu css-->
		<link href="<?php echo base_url('public/assets/css-rtl/sidemenu/sidemenu.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Widgets</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Widgets</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
									   Import<i class="fe fe-download ml-2"></i>
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
									   Filter<i class="fe fe-filter ml-2"></i>
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									   Download Report<i class="fe fe-download-cloud ml-2"></i>
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Number Of Sales</p>
										<div>
											<h4 class="dash-25 mb-2">568</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<strong><i class="fas fa-caret-down ml-1 text-danger"></i> 0.5%</strong>
											<strong class="mr-auto"><i class="fas fa-caret-up ml-1 text-success"></i>0.7%</strong>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-70p" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="mr-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">New Revenue</p>
										<div>
											<h4 class="dash-25 mb-2">$12,897</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<strong><i class="fas fa-caret-up ml-1 text-success"></i> 0.72%</strong>
											<strong class="mr-auto"><i class="fas fa-caret-down ml-1 text-danger"></i>0.43%</strong>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-60p bg-secondary" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="mr-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Total Cost</p>
										<div>
											<h4 class="dash-25 mb-2">$11,234</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<strong><i class="fas fa-caret-down ml-1 text-danger"></i> 1.4%</strong>
											<strong class="mr-auto"><i class="fas fa-caret-down ml-1 text-danger"></i>1.44%</strong>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-50p bg-success" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="mr-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mb-1 tx-inverse">Profit By Sale</p>
										<div>
											<h4 class="dash-25 mb-2">$789</h4>
										</div>
										<div class="expansion-value d-flex tx-inverse">
											<strong><i class="fas fa-caret-down ml-1 text-danger"></i> 0.4%</strong>
											<strong class="mr-auto"><i class="fas fa-caret-up ml-1 text-success"></i>0.9%</strong>
										</div>
										<div class="progress">
											<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
										</div>
										<div class="expansion-label d-flex text-muted">
											<span>Target</span>
											<span class="mr-auto">Last Month</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-primary-transparent rounded-circle text-primary">
											<i class="fe fe-user"></i>
										</div>
										<p class="mb-1 text-muted">Total Users</p>
										<h3 class="mb-0">34,789</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
											<i class="fe fe-trending-up"></i>
										</div>
										<p class="mb-1 text-muted">Total Sales</p>
										<h3 class="mb-0">98,674</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-info-transparent rounded-circle text-info">
											<i class="fe fe-dollar-sign"></i>
										</div>
										<p class="mb-1 text-muted">Total Profits</p>
										<h3 class="mb-0"><span>$</span>45,078</h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body text-center">
										<div class="icon-service bg-success-transparent rounded-circle text-success">
											<i class="fe fe-shopping-cart"></i>
										</div>
										<p class="mb-1 text-muted">Total Orders</p>
										<h3 class="mb-0">35,897</h3>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-12">
								<div class="card custom-card">
									<div class="row row-sm">
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-left">
											<div class="card-body text-center">
												<h6 class="mb-0">Gross profit Margin</h6>
												<h2 class="mb-1 mt-2 number-font"><span class="counter">77</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 1.68%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-left">
											<div class="card-body text-center">
												<h6 class="mb-0">Opex Ratio</h6>
												<h2 class="mb-1 mt-2 number-font"><span class="counter">60</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 0.27%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0 border-left">
											<div class="card-body text-center">
												<h6 class="mb-0">Operating Profit Margin</h6>
												<h2 class="mb-1 mt-2 number-font"><span class="counter">57</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-danger fs-13 ml-1"><i class="fe fe-arrow-down"></i> 0.87%</span> for Last month</p>
											</div>
										</div>
										<div class="col-xl-3 col-lg-6 col-sm-6 pr-0 pl-0">
											<div class="card-body text-center">
												<h6 class="mb-0">Net Profit Margin</h6>
												<h2 class="mb-1 mt-2 number-font"><span class="counter">35</span>%</h2>
												<p class="mb-0 text-muted"><span class="mb-0 text-success fs-13 ml-1"><i class="fe fe-arrow-up"></i> 22%</span> for Last month</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Reynante</h5>
											<p class="mb-1 tx-inverse">Web Developer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Joyce Chua</h5>
											<p class="mb-1 tx-inverse">Team Leader</p>
											<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Owen Bongcaras</h5>
											<p class="mb-1 tx-inverse">Web Designer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body user-card text-center">
										<div class="main-img-user avatar-lg online text-center">
											<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>">
										</div>
										<div class="mt-2">
											<h5 class="mb-1">Mariane Galeon</h5>
											<p class="mb-1 tx-inverse">Php Developer</p>
											<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
										</div>
										<a href="#" class="btn ripple btn-primary mt-3">View Profile</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6>Click Through Conversions</h6>
											<h6><span class="fs-30 ml-2">14,678</span><span class="badge badge-success">1.5%</span></h6>
											<span class="text-muted">The number of clicks to the ad that consist of a single impression.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6>View Through Conversions</h6>
											<h6><span class="fs-30 ml-2">2,971</span><span class="badge badge-danger">0.55%</span></h6>
											<span class="text-muted">Estimated daily unique views  through conversions per visitor on the ads.</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6>Total Conversions</h6>
											<h6><span class="fs-30 ml-2">1,896</span><span class="badge badge-success">1.8%</span></h6>
											<span class="text-muted">Estimated total conversions on ads per impressions to the ads.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<div class="row row-sm">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order ">
											<label class="main-content-label mb-3 pt-1">New Users</label>
											<h2 class="text-left card-item-icon card-icon">
											<i class="mdi mdi-account-multiple icon-size float-right text-primary"></i><span class="font-weight-bold">3,672</span></h2>
											<p class="mb-0 text-muted">Monthly users<span class="float-left">50%</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-3 pt-1">Total tax</label>
											<h2 class="text-left"><i class="mdi mdi-cube icon-size float-right text-primary"></i><span class="font-weight-bold">$89,265</span></h2>
											<p class="mb-0 text-muted">Monthly Income<span class="float-left">$7,893</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-3 pt-1">Total Profit</label>
											<h2 class="text-left"><i class="icon-size mdi mdi-poll-box   float-right text-primary"></i><span class="font-weight-bold">$23,987</span></h2>
											<p class="mb-0 text-muted">Monthly Profit<span class="float-left">$4,678</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-widget">
											<label class="main-content-label mb-3 pt-1">Total Sales</label>
											<h2 class="text-left"><i class="mdi mdi-cart icon-size float-right text-primary"></i><span class="font-weight-bold">46,486</span></h2>
											<p class="mb-0 text-muted">Monthly Sales<span class="float-left">3,756</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
						</div>

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-4">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 custom-card-header">
										<h6 class="main-content-label mb-0">Projects Overview</h6>
									</div>
									<div class="card-body">
										<div class="border">
											<div class="p-3">
												<h6>HTML Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>35%</span>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-35p" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Wordpress Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>50%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-50p bg-secondary" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Angular Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>40%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>React Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>10%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-10p bg-danger" role="progressbar"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-8">
								<div class="row row-sm">
									<div class="col-sm-12 col-md-6">
										<div class="card custom-card our-team">
											<div class="card-body">
												<div class="picture avatar-lg online text-center">
													<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>">
												</div>
												<div class="text-center mt-3">
													<h5 class="pro-user-username text-dark mt-2 mb-0">Mariane Galeon</h5>
													<p class="pro-user-desc text-muted mb-1">Web Developer</p>
													<p class="user-info-rating">
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="far fa-star text-warning"> </i></a>
													</p>
												</div>
												<div class="contact-info mb-0 text-center">
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6">
										<div class="card custom-card our-team">
											<div class="card-body">
												<div class="picture avatar-lg online text-center">
													<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>">
												</div>
												<div class="text-center mt-3">
													<h5 class="pro-user-username text-dark mt-2 mb-0">Joyce Chua</h5>
													<p class="pro-user-desc text-muted mb-1">App Developer</p>
													<p class="user-info-rating">
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="fa fa-star text-warning"> </i></a>
														<a href="#"><i class="far fa-star text-warning"> </i></a>
													</p>
												</div>
												<div class="contact-info mb-0 text-center">
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
													<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row row-sm">
									<div class="col-lg-12">
										<div class="card custom-card">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-6 border-left">
													<div class="card-body iconfont text-center">
														<h6 class="">Total Cost Reduction</h6>
														<h2 class="mt-1">$23,567</h2>
														<p class="text-muted"><span class="text-purple"><i class="fa fa-arrow-up text-success ml-1"> </i>23% </span> in this year</p>
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-info wd-50p"></div>
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-6">
													<div class="card-body iconfont text-center">
														<h6>Total Cost Savings</h6>
														<h2 class="mt-1">15.2%</h2>
														<p class="text-muted"><span><i class="fa fa-arrow-down text-danger ml-1"> </i>12%</span> in this year</p>
														<div class="progress progress-sm mb-0">
															<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger wd-70p"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-block">
											<div class="row align-items-center justify-content-center">
												<div class="col-auto user-lock">
													<!-- <img class="img-fluid rounded-circle" src="<?php echo base_url('publi/assets/img/users/8.jpg'); ?>" alt="avatar"> -->
												</div>
												<div class="col">
													<h5>Joyce Chua</h5>
													<span>UX Designer</span>
												</div>
											</div>
											<ul class="task-list">
												<li>
													<i class="task-icon bg-primary"></i>
													<h6>Task Finished<span class="float-left text-muted fs-11">29 Oct 2020</span></h6>
													<p class="text-muted fs-12">Adam Berry finished task on<a href="#" class="font-weight-semibold"> Project Management</a></p>
												</li>
												<li>
													<i class="task-icon bg-secondary"></i>
													<h6>New Comment<span class="float-left text-muted fs-11">25 Oct 2020</span></h6>
													<p class="text-muted fs-12">Victoria commented on Project <a href="#" class="font-weight-semibold"> AngularJS Template</a></p>
												</li>
												<li>
													<i class="task-icon bg-secondary"></i>
													<h6>New Comment<span class="float-left text-muted fs-11">25 Oct 2020</span></h6>
													<p class="text-muted fs-12">Victoria commented on Project <a href="#" class="font-weight-semibold"> AngularJS Template</a></p>
												</li>
												<li>
													<i class="task-icon bg-danger"></i>
													<h6>Task Overdue<span class="float-left text-muted fs-11">14 Oct 2020</span></h6>
													<p class="text-muted mb-0 fs-12">Petey Cruiser finished task <a href="#" class="font-weight-semibold"> Integrated management</a></p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-0 d-flex pl-3 ml-1">
										<div>
											<label class="main-content-label mb-2">Top Ongoing Projects</label> <span class="d-block tx-12 mb-2 text-muted">Projects where development work is on completion</span>
										</div>
									</div>
									<div class="card-body pt-2 mt-0">
										<div class="list-group border projects-list">
											<a href="#" class="list-group-item list-group-item-action flex-column border-right-0 border-left-0 align-items-start p-3 border-top-0">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold ">PSD Projects</h6>
													<small class="text-danger"><i class="fa fa-caret-down ml-1"></i>5 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-0 tx-12">Started:17-02-2020</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit...</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action flex-column border-right-0 border-left-0 align-items-start p-3">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold">Wordpress Projects</h6>
													<small class="text-success"><i class="fa fa-caret-up ml-1"></i>2 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-0 tx-12">Started:15-02-2020</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
											<a href="#" class="list-group-item list-group-item-action border-right-0 border-left-0  flex-column align-items-start p-3">
												<div class="d-flex w-100 justify-content-between">
													<h6 class="mb-1 font-weight-semibold">HTML &amp; CSS3 Projects</h6>
													<small class="text-danger"><i class="fa fa-caret-down ml-1"></i>1 days ago</small>
												</div>
												<p class="mb-0 text-muted mb-0 tx-12">Started:26-02-2020</p>
												<small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit..</small>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-6 col-xl-4">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 custom-card-header">
										<h6 class="main-content-label mb-0">Visitors</h6>
									</div>
									<div class="card-body">
										<div class="table-responsive border-left border-top">
											<table class="table table-bordered mg-b-0">
												<tbody>
													<tr>
														<td class="bd-t-0 bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"></div>
														</td>
														<td class="bd-t-0 bd-l-0">
															<h6 class="mg-b-0">Socrates Itumay</h6><small class="tx-11 tx-gray-500">Web Developer</small>
														</td>
														<td class="bd-t-0 bd-l-0">
															<a href="#" class="btn ripple btn-primary btn-sm">Follow</a>
														</td>
													</tr>
													<tr>
														<td class="bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
														</td>
														<td class="bd-l-0">
															<h6 class="mg-b-0">Reynante Labares</h6><small class="tx-11 tx-gray-500">CEO</small>
														</td>
														<td class="bd-l-0">
															<a href="#" class="btn ripple btn-secondary btn-sm">Follow</a>
														</td>
													</tr>
													<tr>
														<td class="bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>"></div>
														</td>
														<td class="bd-l-0">
															<h6 class="mg-b-0">Owen Bongcaras</h6><small class="tx-11 tx-gray-500">Manager</small>
														</td>
														<td class="bd-l-0">
															<a href="#" class="btn ripple btn-danger btn-sm">Follow</a>
														</td>
													</tr>
													<tr>
														<td class="bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
														</td>
														<td class="bd-l-0">
															<h6 class="mg-b-0">Mariane Galeon</h6><small class="tx-11 tx-gray-500">Administrator</small>
														</td>
														<td class="bd-l-0">
															<a href="#" class="btn ripple btn-info btn-sm">Follow</a>
														</td>
													</tr>
													<tr>
														<td class="bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
														</td>
														<td class="bd-l-0">
															<h6 class="mg-b-0">Steven Watson</h6><small class="tx-11 tx-gray-500">Founder</small>
														</td>
														<td class="bd-l-0">
															<a href="#" class="btn ripple btn-success btn-sm">Follow</a>
														</td>
													</tr>
													<tr>
														<td class="bd-l-0">
															<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>"></div>
														</td>
														<td class="bd-l-0">
															<h6 class="mg-b-0">Sonia	Fraser</h6><small class="tx-11 tx-gray-500">App Developer</small>
														</td>
														<td class="bd-l-0">
															<a href="#" class="btn ripple btn-warning btn-sm">Follow</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Jquery-Ui js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

	</body>
</html>