<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Sweet-Alert css-->
		<link href="<?php echo base_url('public/assets/plugins/sweet-alert/sweetalert.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Sweet Alert</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
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
						<div class="sidemenu-height">
							<div class="row row-sm ">
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Basic Alert</h6>
												<p class="text-muted card-sub-title">A Basic Message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-basic'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Title alert</h6>
												<p class="text-muted card-sub-title">A title with a text under</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-title'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Success alert</h6>
												<p class="text-muted card-sub-title">A Success Message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-success'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Warning alert</h6>
												<p class="text-muted card-sub-title">A warning message</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-warning'>
												Click me !
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

							<!-- Row -->
							<div class="row row-sm ">
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Passing a parameter alert</h6>
												<p class="text-muted card-sub-title">By passing a parameter</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-parameter'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Image alert</h6>
												<p class="text-muted card-sub-title">A message with custom Image</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-image'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Timer alert</h6>
												<p class="text-muted card-sub-title">A message with auto close timer</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-timer'>
												Click me !
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-md-6 col-lg-3">
									<div class="card custom-card text-center">
										<div class="card-body">
											<div>
												<h6 class="main-content-label mb-1">Ajax Alert</h6>
												<p class="text-muted card-sub-title">With a loader (for a AJAX requests)</p>
											</div>
											<div class="btn ripple btn-primary" id='swal-ajax'>
												Click me !
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Check-all-mail js-->
		<script src="<?php echo base_url('public/assets/js/check-all-mail.js'); ?>"></script>

		<!-- Internal Sweet-Alert js-->
		<script src="<?php echo base_url('public/assets/plugins/sweet-alert/sweetalert.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/sweet-alert/jquery.sweet-alert.js'); ?>"></script>

	</body>
</html>