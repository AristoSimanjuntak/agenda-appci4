<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Width</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Width</li>
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
								<div class="card custom-card" id="set">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Width</h6>
											<p class="text-muted  card-sub-title">You can set a width to an element instantly by using the following utilities classes for width.</p>
										</div>
										<div class="d-flex">
											<div class="d-flex align-items-center justify-content-center wd-80 ht-80 bg-light">
												.wd-80
											</div>
											<div class="d-flex align-items-center justify-content-center wd-150 ht-80 bg-light mg-r-20">
												.wd-150
											</div>
											<div class="d-flex align-items-center justify-content-center wd-100 ht-80 bg-light mg-r-20">
												.wd-100
											</div>
										</div>
									</div>
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Smaller Width</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-[value]</code></td>
														<td>1 | 2 | 3 | 4 | 5 | 6 | 7 | 8 | 9 | 10</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0">
												<thead>
													<tr>
														<th class="wd-30p">Regular Width</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-[value]</code></td>
														<td>15 | 20 | 25 | 30 | ... | 100 &nbsp; (step of 5)</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Bigger Width</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-[value]</code></td>
														<td>150 | 200 | 250 | 300 | ... | 1000 &nbsp; (step of 50)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="percentage">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Percentage Width</h6>
											<p class="text-muted  card-sub-title">You can set a width through percentage using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-[value]p</code></td>
														<td>10 | 20 | 30 | 40 | ... | 100 &nbsp; (step of 10)</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="media">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Media Query Width</h6>
											<p class="text-muted  card-sub-title">You can also set a width to a different media query using the following utilities classes.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-[size]-[value]</code></td>
														<td rowspan="2">
															<p class="mg-b-5">size: xs | sm | md | lg | xl</p>
															<p class="mg-b-0">value: the width value (refer to code above)</p>
														</td>
													</tr>
													<tr>
														<td><code>.wd-[size]-[value]p</code></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="extra">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Extra Width Classes</h6>
											<p class="text-muted  card-sub-title">You can also set a width using the extra utilities classes below.</p>
										</div>
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code>.wd-100v</code></td>
														<td>Set a width to an element based on viewport width.</td>
													</tr>
													<tr>
														<td><code>.wd-auto</code></td>
														<td>Set an auto width to an element.</td>
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
												<a class="nav-link" href="#set">Set Width</a>
												<a class="nav-link" href="#percentage">Percentage Width</a>
												<a class="nav-link" href="#media">Media Query Width</a>
												<a class="nav-link" href="#extra">Extra Width Classes</a>
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