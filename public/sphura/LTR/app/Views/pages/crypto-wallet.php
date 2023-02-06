<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Owl-carousel css-->
		<link href="<?php echo  base_url('public/assets/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" />

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo  base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">


	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Wallet</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Wallet</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-download mr-2"></i> Import
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 mr-2">
									  <i class="fe fe-filter mr-2"></i> Filter
									</button>
									<button type="button" class="btn btn-primary my-2 btn-icon-text">
									  <i class="fe fe-download-cloud mr-2"></i> Download Report
									</button>
								</div>
							</div>
						</div>
						<!-- End Page Header -->

						<!-- row -->
						<div class="row row-sm">
							<div class="col-xxl-4 col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 mb-0">
										<label class="main-content-label mb-0">Wallet</label>
									</div>
									<div class="card-body pt-1">
										<div class="d-flex">
											<img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/btc.svg'); ?>" class="wd-40 ht-40 mr-3 my-auto" alt="">
											<div class="">
												<span class="text-uppercase tx-14 mt-4 text-muted">Available BTC</span>
												<div class="d-flex my-auto"><h2 class="mt-1 mb-0">0.0245465</h2><span class="mt-auto ml-2">BTC</span></div>
											</div>
										</div>
										<div class="d-flex mt-4 justify-content-between">
											<div>
												<p class="text-uppercase tx-13 text-muted mb-1">Buy this month</p>
												<div class="d-flex my-auto"><h5 class="mt-1 mb-0">0.0324354</h5><span class="mt-auto ml-2">BTC</span></div>
											</div>
											<div>
												<p class="text-uppercase tx-13 text-muted mb-1">Sell this month</p>
												<div class="d-flex my-auto"><h5 class="mt-1 mb-0">0.02434566</h5><span class="mt-auto ml-2">BTC</span></div>
											</div>
										</div>
										<div class="row mt-4">
											<div class="col-6">
												<button class="btn btn-block btn-primary">Deposit</button>
											</div>
											<div class="col-6">
												<button class="btn btn-block btn-success">Withdraw</button>
											</div>
										</div>
										<ul class="list-group mt-4 tx-13">
											<li class="list-group-item pd-x-0 d-flex justify-content-between">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
													<span class="my-auto font-weight-semibold tx-15">Received Bitcoin</span>
												</div>
												<span class="font-weight-semibold my-auto text-success tx-15">+0.00004564 <span class="mt-auto ml-2 text-muted font-weight-normal">BTC</span></span>
											</li>
											<li class="list-group-item pd-x-0 d-flex justify-content-between">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-up-right text-primary"></i></span>
													<span class="my-auto font-weight-semibold tx-15">Sent Bitcoin</span>
												</div>
												<span class="font-weight-semibold my-auto text-danger tx-15">-0.03445436 <span class="mt-auto ml-2 text-muted font-weight-normal">BTC</span></span>
											</li>
											<li class="list-group-item pd-x-0 d-flex justify-content-between">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
													<span class="my-auto font-weight-semibold tx-15">Received Ethereum</span>
												</div>
												<span class="font-weight-semibold my-auto text-success tx-15">+4.2543 <span class="mt-auto ml-2 text-muted font-weight-normal">ETH</span></span>
											</li>
											<li class="list-group-item pd-x-0 d-flex justify-content-between">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-up-right text-primary"></i></span>
													<span class="my-auto font-weight-semibold tx-15">Sent Bitcoin</span>
												</div>
												<span class="font-weight-semibold my-auto text-danger tx-15">+0.00255423 <span class="mt-auto ml-2 text-muted font-weight-normal">BTC</span></span>
											</li>
											<li class="list-group-item pd-x-0 d-flex justify-content-between">
												<div class="d-flex">
													<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
													<span class="my-auto font-weight-semibold tx-15">Received Litecoin</span>
												</div>
												<span class="font-weight-semibold my-auto text-success tx-15">-0.02434525 <span class="mt-auto ml-2 text-muted font-weight-normal">LTC</span></span>
											</li>
										</ul>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label mt-3">My  Wallet</label>
										<div class="float-right my-auto"><a class="btn btn-light mt-1" href="#"><i class="fa fa-plus"></i></a> </div>
									</div>
									<div class="card-body p-3">
										<div class="d-flex"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/btc.svg'); ?>" class="wd-30 ht-30 mr-3 my-auto" alt="img">
											<div class="mt-1">
												<h5 class="mb-2 tx-16">Bitcoin Account</h5>
												<span class="mb-0 tx-18 text-dark font-weight-normal">2.2546854 BTC = $6,334.89</span>
											</div>
										</div>
										<div class="row no-gutters mt-3">
											<div class="col"> <a class="btn btn-light btn-block btn-square" href="#">Transfer</a></div>
											<div class="col"> <a class="btn btn-white border border-left-0 btn-block btn-square" href="#">Network Transfer</a> </div>
										</div>
									</div>
									<div class="card-body p-3">
										<div class="d-flex"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/dash.svg'); ?>" class="wd-30 ht-30 mr-3 my-auto" alt="img">
											<div class="mt-1">
												<h5 class="mb-2 tx-16">Dash</h5>
												<span class="mb-0 tx-18 text-dark font-weight-normal">3.3454545 DASH = $5,232.23</span>
											</div>
										</div>
										<div class="row no-gutters mt-3">
											<div class="col"> <a class="btn btn-light btn-block btn-square" href="#">Transfer</a></div>
											<div class="col"> <a class="btn btn-white border border-left-0 btn-block btn-square" href="#">Network Transfer</a> </div>
										</div>
									</div>
									<div class="card-body p-3">
										<div class="d-flex"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/miota.svg'); ?>" class="wd-30 ht-30 mr-3 my-auto" alt="img">
											<div class="mt-1">
												<h5 class="mb-2 tx-16">IOTA</h5>
												<span class="mb-0 tx-18 text-dark font-weight-normal">1.3455672 IOTA = $2,434.32</span>
											</div>
										</div>
										<div class="row no-gutters mt-3">
											<div class="col"> <a class="btn btn-light btn-block btn-square" href="#">Transfer</a></div>
											<div class="col"> <a class="btn btn-white border border-left-0 btn-block btn-square" href="#">Network Transfer</a> </div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-xxl-8 col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<label class="main-content-label mb-0">BTC Wallet Address</label>
										<div class="row mt-3 crypto-wallet">
											<div class="col-md-10">
												<p>Wallet Address .</p>
												<div class="input-group">
													<input type="text" class="form-control input-lg" id="wallet-address" value="afb0dc8bc84625587b85415c86ef43ed8df">
													<div class="input-group-prepend">
														<button class="btn btn-primary clipboard-icon clipboard-box" data-clipboard-target="#wallet-address">COPY</button>
													</div>
												</div>
											</div>
											<div class="col-md-2">
												<img src="<?php echo  base_url('public/assets/img/pngs/qrcode.png'); ?>" alt="qrcode" class="ht-100 float-right">
											</div>
										</div>
									</div>
									<div class="row row-sm pl-4 pr-4">
										<div class="col-lg-4 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-primary-transparent mr-3 my-auto"><i class="fe fe-arrow-down-left text-primary"></i></span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Received</p>
															<h5 class="">4,342.4545 <span class="tx-14 text-muted font-weight-normal ml-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
															<i class="fe fe-arrow-up-right text-primary"></i>
														</span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Sent</p>
															<h5 class="">5,194.24623539 <span class="tx-14 text-muted font-weight-normal ml-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-4 col-xl-4">
											<div class="card border custom-card">
												<div class="card-body">
													<div class="d-flex">
														<span class="crypto-icon bg-primary-transparent mr-3 my-auto"><i class="fas fa-wallet text-primary"></i></span>
														<div class="">
															<p class="text-uppercase tx-13 text-muted mb-1">Balance</p>
															<h5 class="">2.33823739 <span class="tx-14 text-muted font-weight-normal ml-1">BTC</span></h5>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!-- row -->
								<div class="row row-sm">
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card custom-card wallet">
											<div class="card-body">
												<label class="main-content-label mb-2">ETHEREUM  Wallet</label>
												<br>
												<span class="text-muted">Wallet Address</span>
												<br>
												<div class="d-flex mt-4">
													<img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/eth.svg'); ?>" class="wd-40 ht-40 mr-3 my-auto" alt="">
													<div class="">
														<span class="text-uppercase tx-14 mt-4 text-muted">Available ETH</span>
														<div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.257134</h4><span class="mt-auto ml-2">ETH</span></div>
													</div>
													<img src="<?php echo  base_url('public/assets/img/pngs/qrcode.png'); ?>" class="wd-50 ht-50  my-auto ml-auto float-right" alt="">
												</div>
												<div class="input-group my-4">
													<span class="input-group-addon-left bg-light"><i class="cf cf-btc"></i></span>
													<input type="text" class="form-control input-lg" value="ac34290d04cc54f02d22" id="ethereum-wallet">
													<span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#ethereum-wallet"><i class="fe fe-copy"></i></span>
												</div>
												<div class="row">
													<div class="col-md-6">
														<p class="text-uppercase tx-13 text-muted mb-1">Received ETH</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
															<h5 class="my-auto">+ 1,50,500</h5>
															<span class="my-auto ml-2">ETH</span>
														</div>
													</div>
													<div class="col-md-6 mt-3 mt-md-0">
														<p class="text-uppercase tx-13 text-muted mb-1">Sent ETH</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
															<h5 class="my-auto">- 25,500</h5>
															<span class="my-auto ml-2">ETH</span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-6">
														<button class="btn btn-block btn-primary">Deposit</button>
													</div>
													<div class="col-6">
														<button class="btn btn-block btn-outline-primary">Withdraw</button>
													</div>
												</div>
											</div>
										</div>
									</div><!-- End col -->
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card custom-card wallet">
											<div class="card-body">
												<label class="main-content-label mb-2">Ripple  Wallet</label>
												<br>
												<span class="text-muted">Wallet Address</span>
												<br>
												<div class="d-flex mt-4">
													<img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/xrp.svg'); ?>" class="wd-40 ht-40 mr-3 my-auto" alt="">
													<div class="">
														<span class="text-uppercase tx-14 mt-4 text-muted">Available XRP</span>
														<div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.243457</h4><span class="mt-auto ml-2">XRP</span></div>
													</div>
													<img src="<?php echo  base_url('public/assets/img/pngs/qrcode.png'); ?>" class="wd-50 ht-50  my-auto ml-auto float-right" alt="">
												</div>
												<div class="input-group my-4">
													<span class="input-group-addon-left bg-light"><i class="cf cf-xrp"></i></span>
													<input type="text" class="form-control input-lg" value="1EeWrxcDDjyhWwcKu" id="ripple-wallet">
													<span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#ripple-wallet"><i class="fe fe-copy"></i></span>
												</div>
												<div class="row">
													<div class="col-md-6">
														<p class="text-uppercase tx-13 text-muted mb-1">Received XRP</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
															<h5 class="my-auto">+ 1,25,500</h5>
															<span class="my-auto ml-2">XRP</span>
														</div>
													</div>
													<div class="col-md-6 mt-3 mt-md-0">
														<p class="text-uppercase tx-13 text-muted mb-1">Sent XRP</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
															<h5 class="my-auto">- 59000</h5>
															<span class="my-auto ml-2">XRP</span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-6">
														<button class="btn btn-block btn-primary">Deposit</button>
													</div>
													<div class="col-6">
														<button class="btn btn-block btn-outline-primary">Withdraw</button>
													</div>
												</div>
											</div>
										</div>
									</div><!-- End col -->
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card custom-card wallet">
											<div class="card-body">
												<label class="main-content-label mb-2">Dash  Wallet</label>
												<br>
												<span class="text-muted">Wallet Address</span>
												<br>
												<div class="d-flex mt-4">
													<img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/dash.svg'); ?>" class="wd-40 ht-40 mr-3 my-auto" alt="">
													<div class="">
														<span class="text-uppercase tx-14 mt-4 text-muted">Available DASH</span>
														<div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.0224645</h4><span class="mt-auto ml-2">DASH</span></div>
													</div>
													<img src="<?php echo  base_url('public/assets/img/pngs/qrcode.png'); ?>" class="wd-50 ht-50  my-auto ml-auto float-right" alt="">
												</div>
												<div class="input-group my-4">
													<span class="input-group-addon-left bg-light"><i class="cf cf-dash"></i></span>
													<input type="text" class="form-control input-lg" value="1N4LsCG8ko4aia4vJYR" id="dash-wallet">
													<span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#dash-wallet"><i class="fe fe-copy"></i></span>
												</div>
												<div class="row">
													<div class="col-md-6">
														<p class="text-uppercase tx-13 text-muted mb-1">Received DASH</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
															<h5 class="my-auto">+ 3,25,765</h5>
															<span class="my-auto ml-2">DASH</span>
														</div>
													</div>
													<div class="col-md-6 mt-3 mt-md-0">
														<p class="text-uppercase tx-13 text-muted mb-1">Sent DASH</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
															<h5 class="my-auto">- 1,12,490</h5>
															<span class="my-auto ml-2">DASH</span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-6">
														<button class="btn btn-block btn-primary">Deposit</button>
													</div>
													<div class="col-6">
														<button class="btn btn-block btn-outline-primary">Withdraw</button>
													</div>
												</div>
											</div>
										</div>
									</div><!-- End col -->
									<div class="col-xl-6 col-lg-12 col-md-12">
										<div class="card custom-card wallet">
											<div class="card-body">
												<label class="main-content-label mb-2">Litecoin  Wallet</label>
												<br>
												<span class="text-muted">Wallet Address</span>
												<br>
												<div class="d-flex mt-4">
													<img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/ltc.svg'); ?>" class="wd-40 ht-40 mr-3 my-auto" alt="">
													<div class="">
														<span class="text-uppercase tx-14 mt-4 text-muted">Available LTC</span>
														<div class="d-flex my-auto"><h4 class="mt-1 mb-0">0.0133467</h4><span class="mt-auto ml-2">LTC</span></div>
													</div>
													<img src="<?php echo  base_url('public/assets/img/pngs/qrcode.png'); ?>" class="wd-50 ht-50  my-auto ml-auto float-right" alt="">
												</div>
												<div class="input-group my-4">
													<span class="input-group-addon-left bg-light"><i class="cf cf-ltc"></i></span>
													<input type="text" class="form-control input-lg" value="1LgejHMvhRoWxRqNM" id="litecoin-wallet">
													<span class="input-group-addon-right bg-light clipboard-icon" data-clipboard-target="#litecoin-wallet"><i class="fe fe-copy"></i></span>
												</div>
												<div class="row">
													<div class="col-md-6">
														<p class="text-uppercase tx-13 text-muted mb-1">Received LTC</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
															<h5 class="my-auto">+ 2,32,598</h5>
															<span class="my-auto ml-2">LTC</span>
														</div>
													</div>
													<div class="col-md-6 mt-3 mt-md-0">
														<p class="text-uppercase tx-13 text-muted mb-1">Sent LTC</p>
														<div class="d-flex my-auto">
															<span class="crypto-icon bg-primary-transparent mr-3">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
															<h5 class="my-auto">- 1,34,568</h5>
															<span class="my-auto ml-2">LTC</span>
														</div>
													</div>
												</div>
												<div class="row mt-4">
													<div class="col-6">
														<button class="btn btn-block btn-primary">Deposit</button>
													</div>
													<div class="col-6">
														<button class="btn btn-block btn-outline-primary">Withdraw</button>
													</div>
												</div>
											</div>
										</div>
									</div><!-- End col -->
								</div>
								<!-- Row End -->
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
		<script src="<?php echo  base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo  base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo  base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

		<!-- Owl Carousel js -->
		<script src="<?php echo  base_url('public/assets/plugins/owl-carousel/owl.carousel.js'); ?>"></script>

		<!-- Internal Morris js -->
		<script src="<?php echo  base_url('public/assets/plugins/raphael/raphael.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/morris.js/morris.min.js'); ?>"></script>

		<!-- Internal Clipboard js-->
		<script src="<?php echo  base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Apexchart js-->
		<script src="<?php echo  base_url('public/assets/js/apexcharts.js'); ?>"></script>

	</body>
</html>