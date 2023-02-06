<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Basic Tables</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Maps & Tables</a></li>
									<li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
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
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Simple Table</h6>
											<p class="text-muted card-sub-title">Using the most basic table markup</p>
										</div>
										<div class="table-responsive border">
											<table class="table text-nowrap text-md-nowrap mg-b-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Striped Rows</h6>
											<p class="text-muted card-sub-title">Add zebra-striping to any table row.</p>
										</div>
										<div class="table-responsive border">
											<table class="table  text-nowrap text-md-nowrap table-striped mg-b-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bordered Table</h6>
											<p class="text-muted card-sub-title">Add borders on all sides of the table and cells.</p>
										</div>
										<div class="table-responsive">
											<table class="table text-nowrap text-md-nowrap table-bordered mg-b-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Hoverable Rows Table</h6>
											<p class="text-muted card-sub-title">To enable a hover state on table rows.</p>
										</div>
										<div class="table-responsive border">
											<table class="table text-nowrap text-md-nowrap table-hover mg-b-0">
												<thead>
													<tr>
														<th>ID</th>
														<th>Name</th>
														<th>Position</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Joan Powell</td>
														<td>Associate Developer</td>
														<td>$450,870</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>Gavin Gibson</td>
														<td>Account manager</td>
														<td>$230,540</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Julian Kerr</td>
														<td>Senior Javascript Developer</td>
														<td>$55,300</td>
													</tr>
													<tr>
														<th scope="row">4</th>
														<td>Cedric Kelly</td>
														<td>Accountant</td>
														<td>$234,100</td>
													</tr>
													<tr>
														<th scope="row">5</th>
														<td>Samantha May</td>
														<td>Junior Technical Author</td>
														<td>$43,198</td>
													</tr>
												</tbody>
											</table>
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