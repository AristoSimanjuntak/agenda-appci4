<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal RatingThemes css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/ratings.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-1to10.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-movie.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-square.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-pill.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-reversed.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bars-horizontal.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/fontawesome-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/css-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/bootstrap-stars.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/rating/themes/fontawesome-stars-o.css'); ?>">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Rating</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Rating</li>
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
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Static Star Rating</h6>
										</div>
										<div class="static-rate text-center fs-30">
											<i class="fa fa-star text-warning" aria-hidden="true"></i>
											<i class="fa fa-star text-warning" aria-hidden="true"></i>
											<i class="fa fa-star text-warning" aria-hidden="true"></i>
											<i class="fa fa-star text-warning" aria-hidden="true"></i>
											<i class="fa fa-star text-warning" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Static Heart Rating</h6>
										</div>
										<div class="static-rate text-center fs-30">
											<i class="fa fa-heart text-danger" aria-hidden="true"></i>
											<i class="fa fa-heart text-danger" aria-hidden="true"></i>
											<i class="fa fa-heart text-danger" aria-hidden="true"></i>
											<i class="fa fa-heart text-danger" aria-hidden="true"></i>
											<i class="fa fa-heart text-danger" aria-hidden="true"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bar 1/10 Rating</h6>
										</div>
										<div class="box  box-example-1to10">
											<div class="box-body">
												<select id="example-1to10" name="rating" autocomplete="off">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7" selected="selected">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Opinion rating</h6>
										</div>
										<div class="box box-example-movie">
											<div class="box-body">
												<select id="example-movie" name="rating" autocomplete="off">
													<option value="Bad">Bad</option>
													<option value="Mediocre">Mediocre</option>
													<option value="Good" selected="selected">Good</option>
													<option value="Awesome">Awesome</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Square Rating</h6>
										</div>
										<div class="box  box-example-1to10">
											<div class="box box-example-square">
												<div class="box-body">
													<select id="example-square" name="rating" autocomplete="off">
														<option value="1">1</option>
														<option value="2">2</option>
														<option value="3">3</option>
														<option value="4">4</option>
														<option value="5">5</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Grade Rating</h6>
										</div>
										<div class="box  box-example-pill">
											<div class="box-body">
												<select id="example-pill" name="rating" autocomplete="off">
													<option value="A">A</option>
													<option value="B">B</option>
													<option value="C">C</option>
													<option value="D">D</option>
													<option value="E">E</option>
													<option value="F">F</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Horizontal Bar Rating</h6>
										</div>
										<div class="box box-large box-example-horizontal">
											<div class="box-body">
												<select id="example-horizontal" name="rating" autocomplete="off">
													<option value="10">10</option>
													<option value="9">9</option>
													<option value="8">8</option>
													<option value="7">7</option>
													<option value="6">6</option>
													<option value="5">5</option>
													<option value="4">4</option>
													<option value="3">3</option>
													<option value="2">2</option>
													<option value="1" selected="selected">1</option>
												</select>
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

		<!-- Internal Check-all-mail js-->
		<script src="<?php echo base_url('public/assets/js/check-all-mail.js'); ?>"></script>

		<!-- Rating js-->
		<script src="<?php echo base_url('public/assets/plugins/rating/jquery.barrating.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/rating/ratings.js'); ?>"></script>

	</body>
</html>