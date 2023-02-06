<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Orders</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Orders</li>
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
							<div class="col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header  border-bottom-0 pb-0">
										<div>
											<div class="d-flex">
												<label class="main-content-label my-auto pt-2">All Orders</label>
											</div>
										</div>
									</div>
									<div class="card-body">
										<div class="row table-filter">
											<div class="col-lg-3">
												<div class="show-entries">
													<span>Show</span>
													<select class="form-control">
														<option>5</option>
														<option>10</option>
														<option>15</option>
														<option>20</option>
													</select>
													<span>entries</span>
												</div>
											</div>
											<div class="col-lg-9 d-lg-flex">
												<div class="d-flex mr-auto mt-4 ml-4 mt-lg-0">
													<div class="filter-group">
														<input type="text" class="form-control rounded-left-0" placeholder="search">
													</div>
													<button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
												</div>
												<div class="d-flex mt-4 mt-lg-0">
													<div class="filter-group">
														<label>Location</label>
														<select class="form-control">
															<option>All</option>
															<option>Berlin</option>
															<option>London</option>
															<option>Madrid</option>
															<option>New York</option>
															<option>Paris</option>
														</select>
													</div>
													<div class="filter-group mr-3">
														<label>Status</label>
														<select class="form-control">
															<option>Any</option>
															<option>Delivered</option>
															<option>Shipped</option>
															<option>Pending</option>
															<option>Cancelled</option>
														</select>
													</div>
												</div>
											</div>
										</div>
										<div class="table-responsive border">
											<table class="table mb-0 text-nowrap text-md-nowrap">
												<thead>
													<tr>
														<th>ID</th>
														<th>Invoice</th>
														<th>Name</th>
														<th>Date</th>
														<th>Total</th>
														<th>Warehouse</th>
														<th>Status</th>
														<th>Actions</th>
													</tr>
												</thead>
												<tbody>
													<tr class="border-bottom">
														<th scope="row">#W83549801</th>
														<td>2</td>
														<td>Anna Sthesia</td>
														<td>08/11/2020</td>
														<td>$1000</td>
														<td>Boston</td>
														<td><span class="status bg-warning"></span> Pending</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549802</th>
														<td>5</td>
														<td>Barb Dwyer</td>
														<td>15/11/2020</td>
														<td>$4577</td>
														<td>Washington DC</td>
														<td><span class="status bg-success"></span> Delivered</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn "><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549803</th>
														<td>3</td>
														<td>Wilma Mumduya</td>
														<td>17/11/2020</td>
														<td>$4500</td>
														<td>San Francisco</td>
														<td><span class="status bg-success"></span> Delivered</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549804</th>
														<td>4</td>
														<td>Zack Lee</td>
														<td>18/11/2020</td>
														<td>$3266</td>
														<td>Las Vegas</td>
														<td><span class="status bg-info"></span> Refunded</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549805</th>
														<td>5</td>
														<td>Tom Foolery</td>
														<td>20/11/2020</td>
														<td>$1,30,000</td>
														<td>Los Angeles</td>
														<td><span class="status bg-danger"></span> Cancelled</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549806</th>
														<td>6</td>
														<td>Pat Agonia</td>
														<td>22/11/2020</td>
														<td>$2,535</td>
														<td>Chicago</td>
														<td><span class="status bg-success"></span> Delivered</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549807</th>
														<td>6</td>
														<td>Mary Christmas</td>
														<td>26/11/2020</td>
														<td>$1,526</td>
														<td>Los Angeles</td>
														<td><span class="status bg-danger"></span> Cancelled</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549808</th>
														<td>5</td>
														<td>Ella Vator</td>
														<td>29/11/2020</td>
														<td>$1,500</td>
														<td>Chicago</td>
														<td><span class="status bg-warning"></span> Pending</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549809</th>
														<td>8</td>
														<td>Sharon Needles</td>
														<td>01/12/2020</td>
														<td>$2,30,000</td>
														<td>Uk</td>
														<td><span class="status bg-success"></span> Delivered</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn btn-primary-transparent"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549810</th>
														<td>7</td>
														<td>Anne Fibbiyon</td>
														<td>04/12/2020</td>
														<td>$33,990</td>
														<td>Chicago</td>
														<td><span class="status bg-info"></span> Refunded</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn btn-primary-transparent"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549811</th>
														<td>9</td>
														<td>Frank Senbeans</td>
														<td>09/12/2020</td>
														<td>$12,999</td>
														<td>Chicago</td>
														<td><span class="status bg-danger"></span> Cancelled</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn btn-primary-transparent"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
													<tr class="border-bottom">
														<th scope="row">#W83549812</th>
														<td>12</td>
														<td>Chris P. Bacon</td>
														<td>12/12/2020</td>
														<td>$15,993</td>
														<td>Brazil</td>
														<td><span class="status bg-success"></span> Delivered</td>
														<td>
															<div class="button-list">
																<a href="#" class="btn"><i class="ti ti-files"></i></a>
																<a href="#" class="btn"><i class="ti ti-pencil"></i></a>
																<a href="#" class="btn"><i class="ti ti-trash"></i></a>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<nav class="mt-3">
												<ul class="pagination justify-content-end">
													<li class="page-item disabled"><a class="page-link" href="#">Prev</a></li>
													<li class="page-item active"><a class="page-link" href="#">1</a></li>
													<li class="page-item"><a class="page-link" href="#">2</a></li>
													<li class="page-item"><a class="page-link" href="#">3</a></li>
													<li class="page-item"><a class="page-link" href="#">4</a></li>
													<li class="page-item"><a class="page-link" href="#">5</a></li>
													<li class="page-item"><a class="page-link" href="#">Next</a></li>
												</ul>
											</nav>
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

		
	



	</body>
</html>