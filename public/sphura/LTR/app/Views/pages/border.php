<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Border</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Border</li>
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

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-9 col-lg-12">
								<div class="card custom-card" id="brset">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Set Border</h6>
											<p class="text-muted  card-sub-title">The following border utilities classes will add border to any side of an element.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6 col-xl-4 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2">.border</div>
												<div class="p-3 p-3 bg-gray-100 bd-l bd-2 mt-4 mb-4 mb-xl-0">.border-left</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd-t bd-2 ">.border-top</div>
												<div class="p-3 p-3 bg-gray-100 bd-y bd-2 mt-4 mb-4 mb-xl-0">.border-top & .border-bottom</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd-r bd-2">.border-right</div>
												<div class="p-3 p-3 bg-gray-100 bd-x bd-2 mt-4 mb-4 mb-xl-0">.border-left & .border-right</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mt-4">
												<div class="p-3 p-3 bg-gray-100 bd-b bd-2 mb-0">.border-bottom</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
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
														<td><code class="pd-0 bg-transparent">class="bd"</code></td>
														<td>Add border in all sides of an element using default color and width.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-t"</code></td>
														<td>Add border to top side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-r"</code></td>
														<td>Add border to right side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-b"</code></td>
														<td>Add border to bottom side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-l"</code></td>
														<td>Add border to left side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-x"</code></td>
														<td>Add border to left and right side of element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd-y"</code></td>
														<td>Add border to top and bottom side of element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="brsizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Border Sizes</h6>
											<p class="text-muted  card-sub-title">Below are the available border size utilities classes.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6 col-xl-3 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd mb-4 mb-xl-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-3 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 mb-4 mb-xl-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-3 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-3 mb-4 mb-xl-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-3 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-4 mb-4 mb-xl-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-3  col-md-4 ">
												<div class="p-3 p-3 bg-gray-100 bd bd-5">.border</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
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
														<td><code class="pd-0 bg-transparent">class="bd"</code></td>
														<td>Set 1px (default) border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd bd-2"</code></td>
														<td>Set 2px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd bd-3"</code></td>
														<td>Set 3px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd bd-4"</code></td>
														<td>Set 4px border to element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">class="bd bd-5"</code></td>
														<td>Set 5px border to element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="brremove">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Remove Border</h6>
											<p class="text-muted  card-sub-title">You can remove a border to a single side of an element by using the following border utilities classes.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 bd-t-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 bd-r-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 bd-b-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4 mb-xl-0">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 bd-l-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4 mb-xl-0">
												<div class="p-3 p-3 bg-gray-100  bd bd-2 bd-x-0">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4">
												<div class="p-3 p-3 bg-gray-100 bd bd-2 bd-y-0">.border</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
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
														<td><code class="pd-0 bg-transparent">.bd-t-0</code></td>
														<td>Remove top border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-r-0</code></td>
														<td>Remove right border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-b-0</code></td>
														<td>Remove bottom border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-l-0</code></td>
														<td>Remove left border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-x-0</code></td>
														<td>Remove left and right border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-y-0</code></td>
														<td>Remove top and bottom border of an element</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-[t||r|bl|x|y]-0-f</code></td>
														<td>Force remove border of any side of an element.</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="brcolor">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Border Color</h6>
											<p class="text-muted  card-sub-title">You can set a border color of any side of an element by adding the following utilities classes below.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-primary">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-success">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-warning">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-danger">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-info">.border</div>
											</div>
											<div class="col-md-6 col-xl-4 col-md-4 mb-4">
												<div class="p-3 p-3 bd bd-2 bd-gray-500">.border</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
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
														<td><code class="pd-0 bg-transparent">.bd-[value]</code></td>
														<td>primary | success | warning | danger | info | indigo | purple | pink | teal | orange</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.bd-gray-[value]</code></td>
														<td>100 | 200 | 300 | 400 | 500 | 600 | 700 | 800 | 900</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="brradius">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Border Radius</h6>
											<p class="text-muted  card-sub-title">You can set a border to any element by using the following utilities classes below.</p>
										</div>
										<div class="d-md-flex">
											<div class="wd-60 mt-md-0 ht-60 mg-l-10 bd rounded"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-5"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-10"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-20"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-30"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-top"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-right"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-bottom"></div>
											<div class="wd-80 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-left"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-circle"></div>
											<div class="wd-60 mt-md-0 mt-4 ht-60 mg-l-10 bd rounded-0"></div>
										</div>
									</div>
									<div class="card-footer">
										<div class="table-responsive">
											<table class="table main-table-reference mt-0 mb-0">
												<thead>
													<tr>
														<th class="wd-30p">Class</th>
														<th class="wd-70p">Description / Value</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td><code class="pd-0 bg-transparent">.rounded</code></td>
														<td>Set a border radius of 2px (default) to an element.</td>
													</tr>
													<tr>
														<td><code class="pd-0 bg-transparent">.rounded-[value]</code></td>
														<td>5 | 10 | 20 | 30 | 40 | 50 | circle</td>
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
												<a class="nav-link" href="#brset">Set Border</a>
												<a class="nav-link" href="#brsizes">Border Sizes</a>
												<a class="nav-link" href="#brremove">Remove Border</a>
												<a class="nav-link" href="#brcolor">Border Color</a>
												<a class="nav-link" href="#brradius">Border Radius</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-primary-transparent rounded-circle text-primary">
												<i class="fe fe-user"></i>
											</div>
											<p class="mb-1 text-muted">Total Users</p>
											<h3 class="mb-0">34,789</h3>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
												<i class="fe fe-trending-up"></i>
											</div>
											<p class="mb-1 text-muted">Total Sales</p>
											<h3 class="mb-0">98,674</h3>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-info-transparent rounded-circle text-info">
												<i class="fe fe-dollar-sign"></i>
											</div>
											<p class="mb-1 text-muted">Total Profits</p>
											<h3 class="mb-0"><span>$</span>45,078</h3>
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