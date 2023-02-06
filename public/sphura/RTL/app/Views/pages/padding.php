<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Padding</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Padding</li>
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
								<div class="card custom-card" id="setpd">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Padding</h6>
											<p class="text-muted  card-sub-title">You can set a padding to an element instantly by using the following utilities classes.</p>
										</div>
										<div class="d-md-flex">
											<div class="wd-200 ht-100 bg-gray-500 pd-t-30">
												<div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
													.pd-t-30
												</div>
											</div>
											<div class="wd-200 ht-100 bg-gray-500 mr-md-4 pd-t-50 mt-4 mt-xl-0">
												<div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
													.pd-t-50
												</div>
											</div>
											<div class="wd-200 ht-100 bg-gray-500 mr-md-4 pd-t-70 mt-4 mt-xl-0">
												<div class="d-flex align-items-center justify-content-center ht-100p bg-gray-400">
													.pd-t-70
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Smaller Padding</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.pd-t-[value]<br>
														.pd-r-[value]<br>
														.pd-b-[value]<br>
														.pd-l-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
													<tr>
														<td><code>.pt-[value]<br>
														.pr-[value]<br>
														.pb-[value]<br>
														.pl-[value]</code></td>
														<td>0 | 1 | 2 | 3 | 4 | 5 </td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Bigger Padding</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.pd-t-[value]<br>
														.pd-r-[value]<br>
														.pd-b-[value]<br>
														.pd-l-[value]</code></td>
														<td>15 | 20 | 25 | 30 | ... | 120 &nbsp; (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Even Bigger Padding</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.pd-t-[value]<br>
														.pd-r-[value]<br>
														.pd-b-[value]<br>
														.pd-l-[value]</code></td>
														<td>110 | 120 | 130 | 140 | ... | 200 &nbsp; (step of 10)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="mediapd">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Media Query Padding</h6>
											<p class="text-muted  card-sub-title">You can also set a padding to a different media query using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th>Class</th>
														<th>Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.pd-[size]-t-[value] </code> (or) <code>.pt-[size]-[value]</code><br>
														<code>.pd-[size]-r-[value]</code> (or) <code>.pr-[size]-[value]</code> <br>
														<code> .pd-[size]-b-[value]</code> (or) <code>.pb-[size]-[value]</code> <br>
														<code> .pd-[size]-l-[value]</code> (or) <code>.pl-[size]-[value]</code></td>
														<td>
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the padding value (refer to code above)</p>
														</td>
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
												<a class="nav-link" href="#setpd">Set Padding</a>
												<a class="nav-link" href="#mediapd">Media Query Padding</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header custom-card-header border-bottom-0">
											<h6 class="main-content-label mb-0">Sales Summary</h6>
										</div>
										<div class="card-body">
											<div class="border">
												<div class="main-list-item p-3">
													<div>
														<h6>Total Revenue</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$15,300</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Tax</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$1,625</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Income</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$55,897</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Loss</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>20%</h5>
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