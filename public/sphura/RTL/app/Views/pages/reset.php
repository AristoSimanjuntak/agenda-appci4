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
							<div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
								<div class="mt-4 pt-5 p-2 pos-absolute">
									<img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="header-brand-img mb-4" alt="logo">
									<div class="clearfix"></div>
									<img src="<?php echo base_url('public/assets/img/svgs/user.svg'); ?>" class="ht-100 mb-0" alt="user">
									<h5 class="mt-4 text-white">Reset Your Password</h5>
									<span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span>
								</div>
							</div>
							<div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
								<div class="container-fluid">
									<div class="row row-sm">
										<div class="card-body mt-2 mb-2">
											<img src="<?php echo base_url('public/assets/img/brand/logo.png'); ?>" class=" d-lg-none header-brand-img text-left float-left mb-4" alt="logo">
											<div class="clearfix"></div>
											<h5 class="text-right mb-2">Reset Your Password</h5>
											<p class="mb-4 text-muted tx-13 ml-0 text-right">It's free to signup and only takes a minute.</p>
											<form>
												<div class="form-group text-right">
													<label>Email</label>
													<input class="form-control" placeholder="Enter your email" type="text">
												</div>
												<div class="form-group text-right">
													<label>New Password</label>
													<input class="form-control" placeholder="Enter your password" type="password">
												</div>
												<div class="form-group text-right">
													<label>Confirm Password</label>
													<input class="form-control" placeholder="Enter your password" type="password">
												</div>
												<button class="btn ripple btn-main-primary btn-block">Reset Password</button>
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