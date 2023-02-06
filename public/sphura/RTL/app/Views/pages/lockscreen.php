<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo base_url('public/assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper">

			<!-- Row -->
			<div class="row signpages text-center">
				<div class="col-md-12">
					<div class="card">
						<div class="row row-sm">
							<div class="col-lg-6 col-xl-5 d-none d-lg-block bg-primary details">
								<div class="mt-4 pt-4 pl-5 ml-3 pr-5 pos-absolute">
									<img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="<?php echo base_url('public/assets/img/svgs/user.svg'); ?>" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Unlock</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Enter your password to access the admin.</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body main-profile-overview mt-3 mb-3">
											<img src="<?php echo base_url('public/assets/img/brand/logo.png'); ?>" class=" d-lg-none header-brand-img text-right float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-right mb-2">Lockscreen</h5>
											<p class="mb-4 text-muted tx-13 ml-0 text-right">Unlock your screen by entering password</p>
											<form action="<?php echo base_url('pages/index'); ?>">
												<div class="text-right d-flex float-right mb-4 user-lock">
													<img alt="avatar avatar-sm" class="rounded-circle mb-0" src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>">
													<div class="my-auto">
														<p class="font-weight-semibold my-auto mr-2 text-uppercase ">Sonia Taylor</p>
													</div>
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your password" type="password">
												</div>
												<div class="text-right">
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">show password</span>
													</label>
												</div>
												<button class="btn ripple btn-main-primary btn-block mt-4">Unlock</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Row -->

		</div>
		<!-- End Page -->

		<!-- Jquery js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url('public/assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url('public/assets/js/custom.js'); ?>"></script>

	</body>
</html>