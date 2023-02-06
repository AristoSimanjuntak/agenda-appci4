<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Owl-carousel css-->
		<link href="<?php echo  base_url('public/assets/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" />

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo  base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

		<!-- Internal DataTables css-->
		<link href="<?php echo  base_url('public/assets/plugins/datatable/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo  base_url('public/assets/plugins/datatable/responsivebootstrap4.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo  base_url('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" />

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Transcations</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Crypto Currencies</a></li>
									<li class="breadcrumb-item active" aria-current="page">Transcations</li>
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
							<div class="col-md-12 col-lg-12 col-xl-12">
								<div class="card custom-card transcation-crypto">
									<div class="card-header border-bottom-0">
										<div class="main-content-label">Transaction History</div>
										<p class="d-block tx-12 mb-0 mt-2 text-muted">Transaction History it shows you who sent the transaction, how much has been sent, its destination and the fees that were paid for it.</p>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table" id="example1">
												<thead>
													<tr>
														<th class="wd-1"></th>
														<th>TRANSACTION HASH</th>
														<th>Date</th>
														<th>From</th>
														<th>To</th>
														<th>Coin</th>
														<th>Amount</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232401</td>
														<td>03/12/2020</td>
														<td>Olive Yew</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Peg Legge</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/btc.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Bitcoin</td>
														<td class="text-success font-weight-bold">+0.041</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232402</td>
														<td>05/12/2020</td>
														<td>Addie Minstra</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Art Decco</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/eth.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Ethereum</td>
														<td class="text-danger font-weight-bold">-0.344</td>
														<td><span class="text-danger font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232403</td>
														<td>14/12/2020</td>
														<td>Stan Dupp</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Neil Down</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/xrp.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Ripple</td>
														<td class="text-muted font-weight-bold">-0.345</td>
														<td><span class="text-muted font-weight-semibold">PENDING</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232404</td>
														<td>16/12/2020</td>
														<td>Penny Black</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Anna Domino</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/dash.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Dash</td>
														<td class="text-success font-weight-bold">+0.132</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232405</td>
														<td>18/12/2020</td>
														<td>Phil Harmonic </td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/6.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Paul Misunday</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/ltc.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">litecoin</td>
														<td class="text-danger font-weight-bold">-0.523</td>
														<td><span class="text-danger font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232406</td>
														<td>20/12/2020</td>
														<td>Arty Ficial</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Marsha Mello</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/xmr.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Monero</td>
														<td class="text-muted font-weight-bold">-0.232</td>
														<td><span class="text-muted font-weight-semibold">PENDING</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232407</td>
														<td>22/12/2020</td>
														<td>Donatella Nobatti</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Peg Legge</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/steem.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Steem</td>
														<td class="text-success font-weight-bold">+0.456</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232408</td>
														<td>25/12/2020</td>
														<td>Juan Annatoo</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Jack Dup</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/miota.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Iota</td>
														<td class="text-success font-weight-bold">+0.232</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232409</td>
														<td>25/12/2020</td>
														<td>Stew Gots</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/10.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Sara Bellum</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/waves.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Waves</td>
														<td class="text-muted font-weight-bold">-0.232</td>
														<td><span class="text-muted font-weight-semibold">PENDING</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232410</td>
														<td>28/12/2020</td>
														<td>Anna Rexia</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/11.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Marge Arita</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/neo.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Neo</td>
														<td class="text-danger font-weight-bold">-0.344</td>
														<td><span class="text-danger font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232411</td>
														<td>29/12/2020</td>
														<td>Matt Innae</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/12.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Barry Cuda</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/eos.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Eos</td>
														<td class="text-danger font-weight-bold">-0.231</td>
														<td><span class="text-danger font-weight-semibold">CANCELED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232412</td>
														<td>30/12/2020</td>
														<td>Gabe Lackmen</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Marion Gaze</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/eur.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Euros</td>
														<td class="text-success font-weight-bold">+0.124</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232413</td>
														<td>31/12/2020</td>
														<td>Jim Nasium</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Marcus Down</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/btc.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Bitcoin</td>
														<td class="text-muted font-weight-bold">-0.241</td>
														<td><span class="text-muted font-weight-semibold">PENDING</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-up-right text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232414</td>
														<td>02/01/2021</td>
														<td>Ella Vator</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Gene Jacket</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/eth.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Ethereum</td>
														<td class="text-success font-weight-bold">+0.134</td>
														<td><span class="text-success font-weight-semibold">COMPLETED</span></td>
													</tr>
													<tr class="border-bottom">
														<td>
															<span class="crypto-icon bg-primary-transparent mr-3 my-auto">
																<i class="fe fe-arrow-down-left text-primary"></i>
															</span>
														</td>
														<td class="font-weight-bold">#1242232415</td>
														<td>04/01/2021</td>
														<td>Bart Ender</td>
														<td class="d-flex my-auto"><img src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>" class="avatar avatar-sm mr-2" alt=""><span class="my-auto">Marty Graw</span></td>
														<td class="font-weight-semibold"><img src="<?php echo  base_url('public/assets/img/svgs/crypto-currencies/xrp.svg'); ?>" class="wd-30 hd-30 mr-2" alt="">Ripple</td>
														<td class="text-muted font-weight-bold">-0.244</td>
														<td><span class="text-muted font-weight-semibold">PENDING</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
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

		<!-- Internal Data Table js -->
		<script src="<?php echo  base_url('public/assets/plugins/datatable/jquery.dataTables.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/datatable/dataTables.bootstrap4.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/js/table-data.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/datatable/dataTables.responsive.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/datatable/fileexport/dataTables.buttons.min.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js'); ?>"></script>

	</body>
</html>