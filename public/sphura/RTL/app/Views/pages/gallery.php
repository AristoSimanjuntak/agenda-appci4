<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Gallery css-->
		<link href="<?php echo base_url('public/assets/plugins/gallery/gallery.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Gallery</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Light Gallery</h6>
											<p class="text-muted card-sub-title">A customizable, modular, responsive, lightbox gallery plugin for jQuery.</p>
										</div>
										<ul id="lightgallery" class="list-unstyled row mb-0">
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" data-sub-html="<h4>Gallery Image 1</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" data-sub-html="<h4>Gallery Image 2</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" data-sub-html="<h4>Gallery Image 3</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" data-sub-html=" <h4>Gallery Image 4</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" data-sub-html="<h4>Gallery Image 5</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 pl-md-2 pr-md-2" data-responsive="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" data-sub-html="<h4>Gallery Image 6</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" data-sub-html="<h4>Gallery Image 7</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" data-sub-html="<h4>Gallery Image 8</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive" src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3" data-responsive="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" data-sub-html="<h4>Gallery Image 9</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive mb-0" src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0" data-responsive="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" data-sub-html="<h4>Gallery Image 10</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive mb-0" src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 mb-3 mb-sm-0" data-responsive="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" data-sub-html="<h4>Gallery Image 11</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive mb-0" src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" alt="Thumb-1">
												</a>
											</li>
											<li class="col-xs-6 col-sm-4 col-md-4 col-xl-4 " data-responsive="<?php echo base_url('public/assets/img/media/12.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/12.jpg'); ?>" data-sub-html="<h4>Gallery Image 12</h4><p> Many desktop publishing packages and web page editors now use Lorem Ipsum</p>">
												<a href="" class="wd-100p">
													<img class="img-responsive mb-0" src="<?php echo base_url('public/assets/img/media/12.jpg'); ?>" alt="Thumb-2">
												</a>
											</li>
										</ul>
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

		<!-- Internal Gallery js-->
		<script src="<?php echo base_url('public/assets/plugins/gallery/picturefill.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lightgallery.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/gallery/lightgallery-1.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-pager.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-autoplay.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-fullscreen.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-zoom.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-hash.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-share.js'); ?>"></script>


	</body>
</html>