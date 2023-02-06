<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">UserList</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">UserList</li>
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

						<!--Row-->
						<div class="row row-sm">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 grid-margin">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-0">
										<div class="d-flex justify-content-between">
											<label class="main-content-label mb-0 pt-1">User Table</label>
											<div class="ml-auto float-right">
												<div class="">
													<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i></a>
													<div class="dropdown-menu border dropdown-menu-right" style="">
														<a class="dropdown-item" href="#">Today</a>
														<a class="dropdown-item" href="#">Last Week</a>
														<a class="dropdown-item" href="#">Last Month</a>
														<a class="dropdown-item" href="#">Last Year</a>
													</div>
												</div>
											</div>
										</div>
										<p class="tx-12 tx-gray-500 mt-0 mb-2">Example of Spruha Simple Table. <a href="">Learn more</a></p>
									</div>
									<div class="card-body">
										<div class="table-responsive border userlist-table">
											<table class="table card-table table-striped table-vcenter text-nowrap mb-0">
												<thead>
													<tr>
														<th class="wd-lg-8p"><span>User</span></th>
														<th class="wd-lg-20p"><span></span></th>
														<th class="wd-lg-20p"><span>Created</span></th>
														<th class="wd-lg-20p"><span>Status</span></th>
														<th class="wd-lg-20p"><span>Email</span></th>
														<th class="wd-lg-20p">Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>">
														</td>
														<td>Megan Peters</td>
														<td>
															08/06/2020
														</td>
														<td class="text-center">
															<span class="label text-muted d-flex"><span class="dot-label bg-gray-300 mr-1"></span>Inactive</span>
														</td>
														<td>
															<a href="#">mila@kunis.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>">
														</td>
														<td>George Clooney</td>
														<td>
															12/06/2020
														</td>
														<td class="text-center">
															<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>Active</span>
														</td>
														<td>
															<a href="#">marlon@brando.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>">
														</td>
														<td>Ryan Gossling</td>
														<td>
															14/06/2020
														</td>
														<td class="text-center">
															<span class="label text-danger d-flex"><span class="dot-label bg-danger mr-1"></span> Banned</span>
														</td>
														<td>
															<a href="#">jack@nicholson</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>">
														</td>
														<td> Emma Watson</td>
														<td>
															16/06/2020
														</td>
														<td class="text-center">
															<span class="label text-warning d-flex"><span class="dot-label bg-warning mr-1"></span>Pending</span>
														</td>
														<td>
															<a href="#">jack@nicholsonm</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>">
														</td>
														<td>Mila Kunis</td>
														<td>
															18/06/2020
														</td>
														<td class="text-center">
															<span class="label text-muted d-flex"><span class="dot-label bg-gray-300 mr-1"></span>Inactive</span>
														</td>
														<td>
															<a href="#">mila@kunis.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>">
														</td>
														<td>Phil Watson</td>
														<td>
															23/06/2020
														</td>
														<td class="text-center">
															<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>active</span>
														</td>
														<td>
															<a href="#">phil@watson.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>">
														</td>
														<td>Sonia Robertson</td>
														<td>
															25/06/2020
														</td>
														<td class="text-center">
															<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>active</span>
														</td>
														<td>
															<a href="#">robertson@sonia.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>">
														</td>
														<td>Adam Hamilton</td>
														<td>
															31/06/2020
														</td>
														<td class="text-center">
															<span class="label text-danger d-flex"><span class="dot-label bg-danger mr-1"></span>Banned</span>
														</td>
														<td>
															<a href="#">mila@kunis.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/9.jpg'); ?>">
														</td>
														<td>Leah Morgan</td>
														<td>
															02/07/2020
														</td>
														<td class="text-center">
															<span class="label text-warning d-flex"><span class="dot-label bg-warning mr-1"></span>pending</span>
														</td>
														<td>
															<a href="#">morganleah@.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/11.jpg'); ?>">
														</td>
														<td>Amelia McDonald</td>
														<td>
															08/07/2020
														</td>
														<td class="text-center">
															<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>active</span>
														</td>
														<td>
															<a href="#">amelia23@kunis.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
													<tr>
														<td>
															<img alt="avatar" class="rounded-circle avatar-md mr-2" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>">
														</td>
														<td>Paul Molive</td>
														<td>
															12/07/2020
														</td>
														<td class="text-center">
															<span class="label text-success d-flex"><span class="dot-label bg-success mr-1"></span>active</span>
														</td>
														<td>
															<a href="#">paul45@kunis.com</a>
														</td>
														<td>
															<a href="#" class="btn btn-sm btn-primary">
																<i class="fe fe-search"></i>
															</a>
															<a href="#" class="btn btn-sm btn-info">
																<i class="fe fe-edit-2"></i>
															</a>
															<a href="#" class="btn btn-sm btn-danger">
																<i class="fe fe-trash"></i>
															</a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<ul class="pagination mt-4 mb-0 float-right">
											<li class="page-item page-prev disabled">
												<a class="page-link" href="#" tabindex="-1">Prev</a>
											</li>
											<li class="page-item active"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">5</a></li>
											<li class="page-item page-next">
												<a class="page-link" href="#">Next</a>
											</li>
										</ul>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- row closed  -->
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