<?= $this->include('layouts/verticalmenu/header'); ?>


		<!-- Internal Jquery.Coutdown css-->
		<link href="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.countdown.css'); ?>" rel="stylesheet">

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
					<div class="">
						<img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="mb-5" alt="logo">
						<h4 class="text-center text-white tx-30 font-weight-bold ">We are Comming soon</h4>
						<p class="text-white-50 tx-15">We're making the system more awesome.we'll be back shortly.</p>
						<div id="launch_date"></div>
					</div>
					<div class="text-center">© 2021  <a href="https://www.spruko.com/" class="text-white-50">Spruko</a> All rights reserved.</div>
				</div>
			</div>

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

		<!-- Internal Jquery.Coutdown js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.plugin.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/jquery.countdown.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/jquery-countdown/countdown.js'); ?>"></script>


	</body>
</html>