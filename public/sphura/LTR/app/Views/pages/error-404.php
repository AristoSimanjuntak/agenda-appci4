<?= $this->include('layouts/verticalmenu/header'); ?>


	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo base_url('public/assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

		<!-- Page -->
		<div class="page main-signin-wrapper bg-primary construction">

			<div class="container ">
				<div class="construction1 text-center details text-white">
					<div class="row align-items-center">
						<div class="col-lg-12">
							<h1 class="tx-140 mb-0">404</h1>
						</div>
						<div class="col-lg-12 ">
							<h1>Oops.The Page you are looking  for doesn't  exit..</h1>
							<h6 class="tx-15 mt-3 mb-4 text-white-50">You may have mistyped the address or the page may have moved. Try searching below.</h6>
							<a class="btn ripple btn-success text-center" href="<?php echo base_url('pages/index'); ?>">Back to Home</a>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

	</body>
</html>