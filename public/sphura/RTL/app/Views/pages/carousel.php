<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Owl Carousel css-->
		<link href="<?php echo base_url('public/assets/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet">

		<!-- Multislider css -->
		<link href="<?php echo base_url('public/assets/plugins/multislider/multislider.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Carousel</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Carousel</li>
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
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Static Carousel</h6>
											<p class="text-muted card-sub-title">Here’s a carousel with slides only.</p>
										</div>
										<div class="">
											<div class="carousel slide" data-ride="carousel" id="carouselExampleSlidesOnly">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Controls</h6>
											<p class="text-muted card-sub-title">Adding in the previous and next controls.</p>
										</div>
										<div>
											<div class="carousel slide" data-ride="carousel" id="carouselExample2">
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/12.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/13.jpg'); ?>">
													</div>
												</div>
												<a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
													<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
													<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Indicator</h6>
											<p class="text-muted card-sub-title">You can also add the indicators to the carousel, alongside the controls, too align any where</p>
										</div>
										<div>
											<div class="carousel slide" data-ride="carousel" id="carouselExample3">
												<ol class="carousel-indicators">
													<li class="active" data-slide-to="0" data-target="#carouselExample3"></li>
													<li data-slide-to="1" data-target="#carouselExample3"></li>
													<li data-slide-to="2" data-target="#carouselExample3"></li>
												</ol>
												<div class="carousel-inner">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/14.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/15.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/16.jpg'); ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">With Caption</h6>
											<p class="text-muted card-sub-title">Add captions to your slides easily with the <code>.carousel-caption</code> element within any <code>.carousel-item.</code></p>
										</div>
										<div>
											<div class="carousel slide" data-ride="carousel" id="carouselExample4">
												<ol class="carousel-indicators">
													<li class="active" data-slide-to="0" data-target="#carouselExample4"></li>
													<li data-slide-to="1" data-target="#carouselExample4"></li>
													<li data-slide-to="2" data-target="#carouselExample4"></li>
												</ol>
												<div class="carousel-inner bg-dark">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100 op-3" src="<?php echo base_url('public/assets/img/media/17.jpg'); ?>">
														<div class="carousel-caption d-none d-md-block">
															<h5>First Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="<?php echo base_url('public/assets/img/media/18.jpg'); ?>">
														<div class="carousel-caption d-none d-md-block">
															<h5>Second Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100 op-3" src="<?php echo base_url('public/assets/img/media/19.jpg'); ?>">
														<div class="carousel-caption d-none d-md-block">
															<h5>Third Slide</h5>
															<p class="tx-14">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Fade Animate Carousel</h6>
											<p class="text-muted card-sub-title">Add fade transition to your carousel to animate slides with a fade transition instead of a slide.</p>
										</div>
										<div>
											<div class="carousel slide carousel-fade" data-ride="carousel" id="carouselExample5">
												<ol class="carousel-indicators">
													<li class="active" data-slide-to="0" data-target="#carouselExample5"></li>
													<li data-slide-to="1" data-target="#carouselExample5"></li>
													<li data-slide-to="2" data-target="#carouselExample5"></li>
												</ol>
												<div class="carousel-inner bg-dark">
													<div class="carousel-item active">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/20.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>">
													</div>
													<div class="carousel-item">
														<img alt="img" class="d-block w-100" src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4 col-md-6">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Carousel With Thumbnails</h6>
											<p class="text-muted card-sub-title">The Carousel controls the Thumbnails easily design the images with thumbnails</p>
										</div>
										<div class="carousel-slider">
											<div id="carousel" class="carousel slide" data-ride="carousel">
												<div class="carousel-inner">
													<div class="carousel-item active"><img src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" alt="img"> </div>
													<div class="carousel-item"> <img src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="img"> </div>
												</div>
												<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
													<i class="fa fa-angle-left fs-30" aria-hidden="true"></i>
												</a>
												<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
													<i class="fa fa-angle-right fs-30" aria-hidden="true"></i>
												</a>
											</div>
											<div class="clearfix">
												<div id="thumbcarousel" class="carousel slide" data-interval="false">
													<div class="carousel-inner">
														<div class="carousel-item active">
															<div data-target="#carousel" data-slide-to="0" class="thumb"><img src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="1" class="thumb"><img src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="2" class="thumb"><img src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="3" class="thumb"><img src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" alt="img"></div>
														</div>
														<div class="carousel-item">
															<div data-target="#carousel" data-slide-to="4" class="thumb"><img src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="5" class="thumb"><img src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="6" class="thumb"><img src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" alt="img"></div>
															<div data-target="#carousel" data-slide-to="7" class="thumb"><img src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="img"></div>
														</div>
													</div>
													<a class="carousel-control-prev" href="#thumbcarousel" role="button" data-slide="prev">
														<i class="fa fa-angle-left fs-20" aria-hidden="true"></i>
													</a>
													<a class="carousel-control-next" href="#thumbcarousel" role="button" data-slide="next">
														<i class="fa fa-angle-right fs-20" aria-hidden="true"></i>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Owl Carousel</h6>
											<p class="text-muted card-sub-title">Touch enabled jQuery plugin that lets you create a beautiful responsive carousel slider.</p>
										</div>
										<div id="owl-demo2" class="owl-carousel owl-carousel-icons2">
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Reynante</h5>
															<p class="mb-1">Web Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Joyce Chua</h5>
															<p class="mb-1">Team Leader</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Owen Bongcaras</h5>
															<p class="mb-1">Web Designer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Mariane Galeon</h5>
															<p class="mb-1">Php Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/8.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Reynante</h5>
															<p class="mb-1">Web Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/9.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Joyce Chua</h5>
															<p class="mb-1">Team Leader</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/10.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Owen Bongcaras</h5>
															<p class="mb-1">Web Designer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
											<div class="item">
												<div class="card">
													<div class="card-body user-card text-center">
														<div class="main-img-user avatar-lg online text-center">
															<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/11.jpg'); ?>">
														</div>
														<div class="mt-2">
															<h5 class="mb-1">Mariane Galeon</h5>
															<p class="mb-1">Php Developer</p>
															<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
														</div>
														<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div>
											<h6 class="main-content-label mb-1">Multi Slider</h6>
											<p class="text-muted card-sub-title">Multislider is a jQuery powered slideshow that specializes in showing more than one slide at a time. There's no need to find messy CSS and JS work arounds for other single-slide solutions. Multislider allows the developer to focus fully on each individual slide as it's own component, and then displays as many slides as you decide in a manner that is fluid, consistent, and dymanic.</p>
										</div>
										<div id="basicSlider">
											<div class="MS-content">
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" alt="" /> </a>
												</div>
												<div class="item">
													<a href="#" target="_blank"> <img src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" alt="" /> </a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Owl Carousel js-->
		<script src="<?php echo base_url('public/assets/plugins/owl-carousel/owl.carousel-rtl.js'); ?>"></script>

		<!-- Multislider js -->
		<script src="<?php echo base_url('public/assets/plugins/multislider/multislider-rtl.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/carousel-rtl.js'); ?>"></script>

	</body>
</html>