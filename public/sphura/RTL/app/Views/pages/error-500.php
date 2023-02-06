<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master1'); ?>

						<!-- Row -->
						<div class="row sidemenu-height">
							<div class="col-md-12">
								<div class="construction1 text-center details">
									<div class="row align-items-center">
										<div class="col-lg-12">
											<h1 class="tx-140 mb-0">500</h1>
										</div>
										<div class="col-lg-12 ">
											<h1>Oops.The Page you are looking  for doesn't  exit..</h1>
											<h6 class="tx-15 mt-3 mb-4 text-muted">You may have mistyped the address or the page may have moved. Try searching below.</h6>
											<a class="btn ripple btn-success text-center" href="<?php echo base_url('pages/index'); ?>">Back to Home</a>
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

	</body>
</html>