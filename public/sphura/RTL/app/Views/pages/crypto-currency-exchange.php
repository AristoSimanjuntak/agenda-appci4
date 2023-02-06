<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Owl-carousel css-->
		<link href="<?php echo base_url('public/assets/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" />

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Currency-exchange</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Currency-exchange</li>
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

						<!-- Row-->
						<div class="row">
							<div class="col-md-12">
								<div class="pt-0 card custom-card pt-7 bg-background2 card pb-7 border-0 overflow-hidden">
									<div class="header-text mb-0">
										<div class="container-fluid p-5">
											<div class="text-right text-white background-text">
												<h1 class="mb-3 tx-50 font-weight-semibold">Buy and sell Coins without additional fees</h1>
												<p class="tx-18 mb-5 text-white-50">Buy now and get +50% extra bonus Minimum pre-sale
												amount 100 Crypto Coin. We accept BTC crypto-currency..</p>
											</div>
											<div class="row">
												<div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
													<div class="item-search-tabs mb-6 background-text">
														<div class="buy-sell">
															<div class="form row mx-auto justify-content-center d-flex p-4">
																<div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0">
																	<input type="text" class="form-control mb-4 mb-lg-0" id="text7" placeholder="13.2458">
																</div>
																<div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0">
																	<select name="country" id="select-Categories14" class="form-control select2  custom-select br-md-0">
																		<option value="1" selected>BTC</option>
																		<option value="2">Ethereum</option>
																		<option value="3">Ripple</option>
																		<option value="4">Bitcoin Cash</option>
																		<option value="5">Cardano</option>
																		<option value="6">Litecoin</option>
																		<option value="7">NEO</option>
																		<option value="8">Stellar</option>
																		<option value="9">EOS</option>
																		<option value="10">NEM</option>
																	</select>
																</div>
																<div class="col-xl-12 col-lg-12 col-md-12 my-3 text-left">
																	<i class=" pe-7s-repeat exchange-icon tx-30 text-white inline-block"></i>
																</div>
																<div class="form-group  col-xl-6 col-lg-6 col-md-12 mb-0">
																	<input type="text" class="form-control mb-4 mb-lg-0" id="text6" placeholder="02.24">
																</div>
																<div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0">
																	<select name="country" id="select-Categories13" class="form-control select2 custom-select br-md-0">
																		<option value="1" selected>USD</option>
																		<option value="2">EURO</option>
																		<option value="3">POUND</option>
																		<option value="4">Rupee</option>
																		<option value="5">WON</option>
																		<option value="6">DINAR</option>
																		<option value="7">RIAL</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
													<div class="text-center background-text">
														<a href="#" class="btn btn-warning pr-6 pr-6 pt-2 pb-2 mx-auto float-right mt-5">EXCHANGE NOW</a>
													</div>
												</div>
											</div>
										</div>
									</div><!-- /header-text -->
								</div>
							</div>
							<div class="col-md-12">
								<div class="row row-sm">
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-btc"></i></span>Bitcoin BTC</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000434<span class="text-info tx-14 mt-auto mr-2">$0.04</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +4.16%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="bitcoin-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-eth"></i></span> Ethereum ETH</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000235<span class="text-info tx-14 mt-auto mr-2">$0.12</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +2.12%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="ethereum-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-xrp"></i></span> Ripple  XRP</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000434<span class="text-info tx-14 mt-auto mr-2">$0.03</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +3.12%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="ripple-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-dash"></i></span>Dash  DASH</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000372<span class="text-info tx-14 mt-auto mr-2">$0.12</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +4.23%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="dash-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-neos"></i></span> Neo NEO</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000257<span class="text-info tx-14 mt-auto mr-2">$0.07</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +2.17%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="neo-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 col-md-12 col-lg-6">
										<div class="card custom-card crypto-card overflow-hidden">
											<div class="card-body pb-0">
												<div class="mb-0 d-flex">
													<h5 class="d-flex mb-0"><span class="cryp-icon bg-primary my-auto ml-2 mt-1"><i class="cf cf-ltc"></i></span> Litecoin LTC</h5>
													<span class="float-right mr-auto btn btn-success btn-sm">24h</span>
												</div>
												<div class="d-flex justify-content-between mt-2">
													<h5 class="d-flex my-auto font-weight-normal">0.00000534<span class="text-info tx-14 mt-auto mr-2">$0.32</span> </h5>
													<div class="text-danger"><i class="mr-1 text-success"></i> +2.12%</div>
												</div>
												<div class="chart-wrapper mt-4">
													<canvas id="litecoin-chart"></canvas>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js'); ?>"></script>

		<!-- Owl Carousel js -->
		<script src="<?php echo base_url('public/assets/plugins/owl-carousel/owl.carousel-rtl.js'); ?>"></script>

		<!-- Internal Morris js -->
		<script src="<?php echo base_url('public/assets/plugins/raphael/raphael.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/morris.js/morris.min.js'); ?>"></script>

		<!-- Internal Select2 -->
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>

		<!-- Internal Dashboard js-->
		<script src="<?php echo base_url('public/assets/js/crypto-exchange.js'); ?>"></script>

	</body>
</html>