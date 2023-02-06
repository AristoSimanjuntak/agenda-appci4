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
								<h2 class="main-content-title tx-24 mg-b-5">Buy & Sell</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buy & Sell</li>
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
						<div class="row row-sm">
							<div class="col-md-12">
								<div class="card custom-card overflow-hidden">
									<div class="d-flex mb-3 p-3 border-bottom">
										<div class="align-items-center">
											<h4 class="d-flex">Bitcoin<span class="text-muted tx-13 mr-2 my-auto">BTC</span></h4>
										</div>
										<button class="btn btn-primary mr-auto">Buy Bitcoin</button>
									</div>
									<div class="card-body">
										<div class="d-sm-flex mb-0">
											<div class="">
												<p class="tx-13 text-muted mb-2">Bitcoin [BTC] Price Chart</p>
												<h3>$3468.42<span class="text-success tx-15 mr-2"><i class="fas fas fa-dollar-sign"></i> 23.5</span></h3>
											</div>
											<div class="mr-auto">
												<ul class="nav nav-tabs crypto-btc-usd border-0" id="charts" role="tablist">
													<li class="nav-item border-0">
														<a class="nav-link border-0 active"  data-toggle="tab" href="#chart-tab" role="tab" aria-controls="chart-tab"
														aria-selected="true">1m</a>
													</li>
													<li class="nav-item border-0 ">
														<a class="nav-link border-0 "  data-toggle="tab" href="#chart2-tab" role="tab" aria-controls="chart2-tab"
														aria-selected="false">1h</a>
													</li>
													<li class="nav-item border-0">
														<a class="nav-link border-0 " data-toggle="tab" href="#chart3-tab" role="tab" aria-controls="chart3-tab"
														aria-selected="false">1d</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="row">
											<div class="col-lg-9 col-xl-10 col-md-8">
												<div class="tab-content" id="myTabContent">
													<div class="tab-pane fade show active" id="chart-tab" role="tabpanel" aria-labelledby="chart-tab">
														<div class="chart-wrapper">
															<div id="chart-bitcoin" class="ht-300"></div>
														</div>
													</div>
													<div class="tab-pane fade" id="chart2-tab" role="tabpanel" aria-labelledby="chart2-tab">
														<div class="chart-wrapper">
															<div id="chart-bitcoin1" class="ht-300"></div>
														</div>
													</div>
													<div class="tab-pane fade" id="chart3-tab" role="tabpanel" aria-labelledby="chart3-tab">
														<div class="chart-wrapper">
															<div id="chart-bitcoin2" class="ht-300"></div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-lg-3 col-xl-2 col-md-4">
												<div class="card bg-light custom-card">
													<div class="card-body">
														<span class="text-muted tx-13"><b>BNB</b> / BUSD</span>
														<h5 class="my-1">29.83267</h5>
														<span class="text-danger">-0.04%</span>
													</div>
												</div>
												<div class="card bg-light custom-card">
													<div class="card-body">
														<span class="text-muted tx-13"><b>ETH</b> / BUSD</span>
														<h5 class="my-1">34.25356</h5>
														<span class="text-success">+0.03%</span>
													</div>
												</div>
												<div class="card bg-light custom-card mb-0">
													<div class="card-body">
														<span class="text-muted tx-13"><b>EOS</b> / BUSD</span>
														<h5 class="my-1">22.32315</h5>
														<span class="text-danger">-0.02%</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6  col-md-12">
								<div class="card custom-card overflow-hidden crypto-buysell-card">
									<div class="card-body">
										<div class="card-header border-bottom-0 pl-0 pt-0">
											<label class="main-content-label my-auto">Buy Currency</label>
										</div>
										<div class="d-flex mt-3 mb-3">
											<div class="">
												<p class="tx-16 text-muted mb-2">1 USDT is roughly</p>
												<h3>5.47<span class="text-success tx-15 mr-2">CNY</span></h3>
											</div>
											<div class="mr-auto my-auto">
												<span class="">Claim <span class="font-weight-bold text-success">20</span> Free Bitcoin</span>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control input-lg wd-80p" value="Spend 32 - 6500">
												<div class="input-group-append wd-30p">
													<select class="form-control border-left-0 icons_select2 br-0" data-placeholder="Choose one">
														<optgroup label="Coins">
															<option value="cf cf-btc" data-icon="cf cf-btc cryptoicon bg-primary-transparent text-primary">BTC</option>
															<option value="cf cf-eth" data-icon="cf cf-eth cryptoicon bg-primary-transparent text-primary">ETH</option>
															<option value="cf cf-xrp" data-icon="cf cf-xrp cryptoicon bg-primary-transparent text-primary">XRP</option>
															<option value="cf cf-dash" data-icon="cf cf-dash cryptoicon bg-primary-transparent text-primary">DASH</option>
															<option value="cf cf-neos" data-icon="cf cf-neos cryptoicon bg-primary-transparent text-primary">NEO</option>
															<option value="cf cf-ltc" data-icon="cf cf-ltc cryptoicon bg-primary-transparent text-primary">LTC</option>
															<option value="cf cf-bsd" data-icon="cf cf-bsd cryptoicon bg-primary-transparent text-primary">BSD</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="input-group">
												<input type="text" class="form-control input-lg wd-80p" value="Buy">
												<div class="input-group-append wd-30p">
													<select class="form-control border-left-0 icons_select2 br-0" data-placeholder="Choose one">
														<optgroup label="Coins">
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">USD</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AED</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AUD</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">ARS</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AZN</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">BGN</option>
															<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">BRL</option>
														</optgroup>
													</select>
												</div>
											</div>
										</div>
										<div class="form-group fs-14">
											<input class="form-control input-lg" type="text" placeholder="498fd7c42932070ff3ec30">
										</div>
										<label class="main-content-label mt-4 mb-4">Select payment method</label>
										<form class="payment-form form">
											<div class="payment-type d-flex">
												<input type="radio" name="radio3" id="credit" value="credit" checked><label class="credit-label payment-cards four ml-0 col" for="credit"><span class="d-none d-md-block">New card</span><img src="<?php echo base_url('public/assets/img/visa.png'); ?>" alt="visa"></label>
												<input type="radio" name="radio3" id="debit" value="debit"><label class="debit-label payment-cards four col" for="debit"><span class="d-none d-md-block">Debit Card</span><img src="<?php echo base_url('public/assets/img/mastercard.png'); ?>" alt="Debitcard"></label>
												<input type="radio" name="radio3" id="paypal" value="paypal"><label class="paypal-label payment-cards four col" for="paypal"><span class="d-none d-md-block">Paypal</span><img src="<?php echo base_url('public/assets/img/paypal.png'); ?>" alt="paypal"></label>
												<input type="radio" name="radio3" id="amex" value="amex"><label class="amex-label payment-cards four col" for="amex"><span class="d-none d-md-block">Amex</span><img src="<?php echo base_url('public/assets/img/amex.png'); ?>" alt="amexg1096"></label>
											</div>
											<a href="#" class="btn btn-primary btn-lg btn-block mt-4">Buy Now</a>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-6 col-md-12">
								<div class="card custom-card overflow-hidden crypto-buysell-card">
									<div class="card-body">
										<div class="card-header border-bottom-0 pl-0 pt-0">
											<label class="main-content-label my-auto">Sell Currency</label>
										</div>
										<div class="form-group">
											<label class="font-weight-semibold tx-16 mt-3 mb-2">Sell From</label>
											<div class="p-3 border d-flex">
												<div class="d-flex"><span class="crypto-icon bg-primary-transparent ml-3"><i class="cf cf-btc text-primary"></i></span><span class="my-auto tx-18 font-weight-semibold">Bitcoin BTC</span></div>
												<div class="d-flex mr-auto">
													<div class="card-item-stat d-none d-md-block">
														<h4 class="font-weight-semibold mb-0 tx-15">0.374648545 BTC</h4>
														<small class="tx-13 float-right text-right text-muted">$5,634.65</small>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class="font-weight-semibold tx-16 mt-2 mb-2">Deposit to</label>
											<div class="p-3 border d-flex">
												<span class="crypto-icon bg-primary-transparent"><i class="fa fa-bank text-primary"></i></span>
												<div class="my-auto mr-3">
													<div class="d-flex my-auto tx-16 font-weight-semibold">Banking</div>
													<small class="tx-13 text-muted">Checking</small>
												</div>
											</div>
										</div>
										<label class="font-weight-semibold tx-16 mt-2 mb-2">Amount</label>
										<hr class="my-2">
										<div class="d-flex mt-3 mb-3">
											<p class="tx-16 mb-0 text-muted">Weekly bank limit</p>
											<div class="mr-auto my-auto">
												<span class="tx-16 text-muted">$10,000.00 remaining</span>
											</div>
										</div>
										<div class="row">
											<div class="form-group col-xl-5 col-lg-12 col-md-12 mb-0">
												<div class="input-group">
													<input type="text" class="form-control input-lg wd-80p" value="0.041323">
													<div class="input-group-append wd-40p">
														<select class="form-control border-left-0 icons_select2 br-0" data-placeholder="Choose one">
															<optgroup label="Coins">
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">USD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AED</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AUD</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">ARS</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">AZN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">BGN</option>
																<option value="fas fa-dollar-sign" data-icon="fas fa-dollar-sign cryptoicon">BRL</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
											<div class="form-group col-xl-2 text-center col-lg-12 col-md-12 my-auto">
												<i class="pe-7s-repeat my-3 mt-xl-0 mb-xl-0 tx-26"></i>
											</div>
											<div class="form-group col-xl-5 col-lg-12 col-md-12 mb-0">
												<div class="input-group">
													<input type="text" class="form-control input-lg wd-80p" value="500">
													<div class="input-group-append wd-40p">
														<select class="form-control border-left-0 icons_select2 br-0" data-placeholder="Choose one">
															<optgroup label="Coins">
																<option value="cf cf-btc" data-icon="cf cf-btc cryptoicon bg-primary-transparent text-primary">BTC</option>
																<option value="cf cf-eth" data-icon="cf cf-eth cryptoicon bg-primary-transparent text-primary">ETH</option>
																<option value="cf cf-xrp" data-icon="cf cf-xrp cryptoicon bg-primary-transparent text-primary">XRP</option>
																<option value="cf cf-dash" data-icon="cf cf-dash cryptoicon bg-primary-transparent text-primary">DASH</option>
																<option value="cf cf-neos" data-icon="cf cf-neos cryptoicon bg-primary-transparent text-primary">NEO</option>
																<option value="cf cf-ltc" data-icon="cf cf-ltc cryptoicon bg-primary-transparent text-primary">LTC</option>
																<option value="cf cf-bsd" data-icon="cf cf-bsd cryptoicon bg-primary-transparent text-primary">BSD</option>
															</optgroup>
														</select>
													</div>
												</div>
											</div>
										</div>
										<a href="#" class="btn btn-primary btn-lg btn-block mt-4">Sell Bitcoin</a>
									</div>
								</div>
							</div>
						</div>
						<!-- Row End -->

						<!-- Row-->
						<div class="row row-sm">
							<div class="col-xl-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2">Recent Buying & selling Orders</label>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table card-table text-nowrap table-bordered border-top">
												<thead>
													<tr>
														<th>ID</th>
														<th>Type</th>
														<th>Amount</th>
														<th>Remaining</th>
														<th>Price</th>
														<th>USD</th>
														<th>Fee (%)</th>
														<th>Status</th>
														<th>Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#12450</td>
														<td class="text-success">Buy</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.37218</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.42173</td>
														<td>52681.13</td>
														<td>$ 5273.15</td>
														<td>0.1</td>
														<td><span class="badge badge-success-light badge-pill">Completed</span></td>
														<td>31-05-2019 02:12:34</td>
													</tr>
													<tr>
														<td>#12451</td>
														<td class="text-danger">Sell</td>
														<td><i class="cc BTC-alt text-warning"></i> 1.47364</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.36472</td>
														<td>73647.15</td>
														<td>$ 2637.37</td>
														<td>0.1</td>
														<td><span class="badge badge-warning-light badge-pill">Pending</span></td>
														<td>02-06-2019 07:14:32</td>
													</tr>
													<tr>
														<td>#12452</td>
														<td class="text-danger">Sell</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63736</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.73748</td>
														<td>72637.02</td>
														<td>$ 6345.16</td>
														<td>0.1</td>
														<td><span class="badge badge-danger-light badge-pill">Cancelled</span></td>
														<td>05-06-2019 12:57:12</td>
													</tr>
													<tr>
														<td>#12453</td>
														<td class="text-success">Buy</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.63647</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.83643</td>
														<td>83748.19</td>
														<td>$ 23836.09</td>
														<td>0.1</td>
														<td><span class="badge badge-success-light badge-pill">Completed</span></td>
														<td>15-07-2019 10:43:17</td>
													</tr>
													<tr>
														<td>#12454</td>
														<td class="text-success">Buy</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.76263</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.72563</td>
														<td>32635.32</td>
														<td>$ 7235.25</td>
														<td>0.1</td>
														<td><span class="badge badge-success-light badge-pill">Completed</span></td>
														<td>22-07-2019 11:44:45</td>
													</tr>
													<tr>
														<td>#12455</td>
														<td class="text-danger">Sell</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.46263</td>
														<td><i class="cc BTC-alt text-warning"></i> 0.27363</td>
														<td>28937.22</td>
														<td>$ 4853.15</td>
														<td>0.1</td>
														<td><span class="badge badge-info-light badge-pill">In Process</span></td>
														<td>30-07-2019 08:23:15</td>
													</tr>
												</tbody>
											</table>
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

		<!-- Internal Apexchart js-->
		<script src="<?php echo base_url('public/assets/js/apexcharts.js'); ?>"></script>

		<!-- Internal Polyfills js-->
		<script src="<?php echo base_url('public/assets/plugins/polyfill/polyfill.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/polyfill/classList.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/polyfill/polyfill_mdn.js'); ?>"></script>

		<!-- Internal Dashboard js-->
		<script src="<?php echo base_url('public/assets/js/crypto-buysell.js'); ?>"></script>


	</body>
</html>