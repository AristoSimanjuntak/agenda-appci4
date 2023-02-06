<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Background</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Background</li>
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
							<div class="col-xl-9 col-lg-12">
								<div class="card custom-card" id="graybg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Gray Set</h6>
											<p class="text-muted  card-sub-title">A set of gray background utilities classes.</p>
										</div>
										<div class="gray-set">
											<div class="flex-1 bg-gray-100 ht-100p p-3">.bg-gray-100</div>
											<div class="flex-1 bg-gray-200 ht-100p p-3">.bg-gray-200</div>
											<div class="flex-1 bg-gray-300 ht-100p p-3">.bg-gray-300</div>
											<div class="flex-1 bg-gray-400 ht-100p p-3">.bg-gray-400</div>
											<div class="flex-1 bg-gray-500 ht-100p p-3">.bg-gray-500</div>
											<div class="flex-1 bg-gray-600 ht-100p p-3">.bg-gray-600</div>
											<div class="flex-1 bg-gray-700 ht-100p p-3 tx-white-7">.bg-gray-700</div>
											<div class="flex-1 bg-gray-800 ht-100p p-3 tx-white-7">.bg-gray-800</div>
											<div class="flex-1 bg-gray-900 ht-100p p-3 tx-white-7">.bg-gray-900</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-gray-[value]"</code></td>
														<td>900 | 800 | 700 | 600 | 500 | 400 | 300 | 200 | 100</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="solidbg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Solid Background Set</h6>
											<p class="text-muted  card-sub-title"> set of solid background utilities classes.</p>
										</div>
										<div class="">
											<div class="flex-1 bg-primary p-3 tx-white">.bg-primary</div>
											<div class="flex-1 bg-secondary p-3 tx-white">.bg-secondary</div>
											<div class="flex-1 bg-success p-3 tx-white">.bg-success</div>
											<div class="flex-1 bg-warning p-3 tx-white">.bg-warning</div>
											<div class="flex-1 bg-danger p-3 tx-white">.bg-danger</div>
											<div class="flex-1 bg-info p-3 tx-white">.bg-info</div>
											<div class="flex-1 bg-purple p-3 tx-white">.bg-purple</div>
											<div class="flex-1 bg-pink p-3 tx-white">.bg-pink</div>
											<div class="flex-1 bg-teal p-3 tx-white">.bg-teal</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-[value]"</code></td>
														<td>primary | secondary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="whitebg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent White Set</h6>
											<p class="text-muted  card-sub-title">A set of overlay transparent white background utilities classes.</p>
										</div>
										<div class="d-flex flex-wrap ht-50 mb-lg-5">
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-1"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-2"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-3"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-4"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-5"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-6"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-7"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-8"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-9"></div>
											</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-white-[value]"</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="blackbg">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Black Set</h6>
											<p class="text-muted  card-sub-title">A set of overlay transparent black background utilities classes.</p>
										</div>
										<div class="d-flex flex-wrap ht-50 mb-lg-5">
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-1"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-2"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-3"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-4"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-5"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-6"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-7"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-8"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-black-9"></div>
											</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-black-[value]"</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="colortrans">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Transparent Colors Set</h6>
											<p class="text-muted  card-sub-title">A set of overlay transparent colors background utilities classes.</p>
										</div>
										<div class="d-flex flex-wrap ht-50 mb-lg-5">
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-white-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-dark-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-primary-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-secondary-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-success-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-info-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-warning-transparent "></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-danger-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-pink-transparent"></div>
											</div>
											<div class="flex-1 pos-relative">
												<img alt="" class="wd-100p ht-100p object-fit-cover" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>">
												<div class="pos-absolute a-0 bg-purple-transparent"></div>
											</div>
										</div>
									</div>
									<div class="card-footer p-4">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-40p">Class Reference</th>
														<th class="wd-60p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>class="bg-[value]-transparent"</code></td>
														<td>light | dark | primary | secondary | success | info | warning | danger | pink | purple </td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="card-body component-item">
											<nav class="nav flex-column">
												<a class="nav-link" href="#graybg">Gray Set</a>
												<a class="nav-link" href="#solidbg">Solid Background Set</a>
												<a class="nav-link" href="#whitebg">Transparent White Set</a>
												<a class="nav-link" href="#blackbg">Transparent Black Set</a>
												<a class="nav-link" href="#colortrans">Transparent Colors Set</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="alert text-center fade show p-3">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											<i class="fe fe-upload-cloud fs-50 text-success"></i>
											<h5 class="mt-2 mb-1">Success !</h5>
											<p class="mb-3 mb-3 tx-inverse">Data Upload Successfully </p>
											<a class="btn ripple btn-success" href="#">Continue</a>
										</div>
									</div>
									<div class="card custom-card">
										<div class="alert text-center fade show p-3">
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
											<i class="fe fe-download-cloud fs-50 text-danger"></i>
											<h5 class="mt-2 mb-1">Oops!</h5>
											<p class="mb-3 mb-3 tx-inverse">Something went wrong</p>
											<a class="btn ripple btn-danger" href="#">Try again</a>
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