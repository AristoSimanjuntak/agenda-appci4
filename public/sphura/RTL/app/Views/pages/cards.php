<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Cards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cards</li>
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
							<div class="col-md">
								<div class="card custom-card card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body bg-primary tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body bg-gray-800 tx-white">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card">
									<div class="card-body">
										<h5 class="main-content-label tx-dark tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card  bg-primary tx-white">
									<div class="card-body">
										<h5 class="main-content-label tx-white tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card  bg-gray-800 tx-white">
									<div class="card-body">
										<h5 class="main-content-label tx-white tx-medium mg-b-10">The Card Title</h5>
										<p class="card-subtitle tx-white-8 mg-b-15">This is the card subtitle</p>
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0 ">
										<h5 class="main-content-label tx-dark my-auto tx-medium mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
									  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0 ">
										<h5 class="main-content-label tx-dark my-auto tx-medium mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="#" class="card-options-collapse" data-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a>
											<a href="#" class="card-options-fullscreen" data-toggle="card-fullscreen"><i class="fe fe-maximize"></i></a>
											<a href="#" class="card-options-remove" data-toggle="card-remove"><i class="fe fe-x"></i></a>
										</div>
									</div>
									<div class="card-body">
									  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-4">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0 ">
										<h5 class="main-content-label tx-dark my-auto tx-medium mb-0">Basic Card</h5>
										<div class="card-options">
											<a href="#" class="btn btn-primary btn-sm">Action 1</a>
											<a href="#" class="btn btn-secondary btn-sm mr-2">Action 2</a>
										</div>
									</div>
									<div class="card-body">
									  Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet									</div>
									<div class="card-footer">
										This is Basic card footer
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0">
										<h5 class="main-content-label tx-dark tx-medium mb-0">Card Header</h5>
									</div>
									<div class="card-body">
										<h6 class="">Special title treatment</h6>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
										<a href="#" class="btn btn-primary ripple btn-block">View</a>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0">
										<h5 class="main-content-label tx-dark tx-medium mb-0">Card Header</h5>
									</div>
									<div class="card-body">
										<h6 class="">Special title treatment</h6>
										<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
									</div>
									<div class="card-footer">
										<h6 class="mb-0">Card-footer</h6>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-4 col-md-12 col-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header custom-card-header border-bottom-0">
										<h5 class="main-content-label tx-dark tx-medium mb-0">Blockquote</h5>
									</div>
									<div class="card-body">
										<blockquote class="blockquote mb-0">
											<p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>
											<footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
										</blockquote>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-6 col-lg-3">
								<div class="card overflow-hidden custom-card ">
									<img alt="Image" class="img-fluid b-img" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3 ">
								<div class="card overflow-hidden custom-card">
									<img alt="Image" class="img-fluid b-img" src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>">
									<div class="card-body">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="card overflow-hidden custom-card">
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div><img alt="Image" class="img-fluid b-img" src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>"></div>
							</div>
							<div class="col-md-6 col-lg-3 ">
								<div class="card overflow-hidden custom-card">
								<div class="card-body ">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
								</div><img alt="Image" class="img-fluid b-img" src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>"></div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card overflow-hidden card-blog-overlay1 custom-card">
									<div class="card-body  text-white z-index2">
										<h3 class="main-content-label text-white">card-with image</h3>
										<p class="tx-white-7 tx-13 mb-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer  text-white z-index2">
										This is Basic card footer
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card overflow-hidden card-blog-overlay2 custom-card">
									<div class="card-header border-bottom-0 custom-card-header">
										<h3 class="main-content-label text-white mb-0">card-with image</h3>
									</div>
									<div class="card-body  text-white z-index2">
										<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										<a class="tx-white" href="">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card overflow-hidden card-blog-overlay custom-card">
									<div class="card-body text-white z-index2">
										<h3 class="main-content-label text-white">card-with image</h3>
										<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										<a class="tx-white" href="">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md-4">
								<div class="card custom-card">
									<div class="card-header p-3 tx-medium my-auto tx-white bg-primary">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="card custom-card">
									<div class="card-header p-3 tx-medium my-auto tx-white bg-secondary">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
							<div class="col-md-4 ">
								<div class="card custom-card">
									<div class="card-header p-3 tx-medium my-auto tx-white bg-success">
										Description
									</div>
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer">
										January, 20, 2017 4:30am
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer tx-center">
										<a href="">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card">
									<div class="card-body">
										<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card-footer tx-right">
										Share <i class="icon ion-logo-facebook mg-l-5 mg-r-5"></i> <i class="icon ion-logo-twitter"></i>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-md">
								<div class="card custom-card card-body tx-white-8 bg-primary border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body tx-white-8 bg-secondary border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
							<div class="col-md ">
								<div class="card custom-card card-body tx-white-8 bg-gray-800 border-0">
									Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-6">
								<div class="card card-aside custom-card">
									<a href="#" class="card-aside-column  cover-image rounded-right-11" data-image-src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" style="background: url(&quot;<?php echo base_url('public/assets/img/media/11.jpg'); ?>&quot;) center center;"></a>
									<div class="card-body">
										<h5 class="main-content-label tx-dark tx-medium mg-b-10">The Card Title</h5>
										<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm ml-3">
												<img src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>" class="w-10 rounded-circle" alt="avatar-img">
											</div>
											<div>
												<a href="" class="text-default">Alica Nestle</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside custom-card">
									<div class="card-body">
										<h5 class="main-content-label tx-dark tx-medium mg-b-10">The Card Title</h5>
										<div class="">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
										<div class="d-flex align-items-center pt-3 mt-auto">
											<div class="main-img-user avatar-sm ml-3">
												<img src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>" class="w-10 rounded-circle" alt="avatar-img">
											</div>
											<div>
												<a href="" class="text-default">Alica Nestle</a>
												<small class="d-block text-muted">15 mintues ago</small>
											</div>
											<div class="mr-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-heart mr-1"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ml-3"><i class="far fa-thumbs-up"></i></a>
											</div>
										</div>
									</div>
									<a href="#" class="card-aside-column  cover-image rounded-left-11" data-image-src="<?php echo base_url('public/assets/img/media/13.jpg'); ?>" style="background: url(&quot;<?php echo base_url('public/assets/img/media/13.jpg'); ?>&quot;) center center;"></a>
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

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

	</body>
</html>