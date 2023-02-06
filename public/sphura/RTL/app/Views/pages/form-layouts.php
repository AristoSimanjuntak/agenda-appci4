<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Layouts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
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
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">A form control layout using basic layout.</p>
										</div>
										<div class="d-flex flex-column">
											<div class="form-group">
												<input class="form-control" placeholder="Enter your username" type="text">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter Your Email" type="email">
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Enter Your Password" type="password">
											</div>
											<div class="form-group">
												<label class="ckbox">
													<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
												</label>
											</div>
											<button class="btn ripple btn-main-primary">Submit</button>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Horizonatal Form</h6>
											<p class="text-muted card-sub-title">A form control layout using basic layout.</p>
										</div>
										<div class="">
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="mg-b-0">Firstname</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your firstname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="mg-b-0">Lastname</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your lastname" type="text">
												</div>
											</div>
											<div class="row row-xs align-items-center mg-b-20">
												<div class="col-md-4">
													<label class="mg-b-0">Email</label>
												</div>
												<div class="col-md-8 mg-t-5 mg-md-t-0">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div>
											</div>
											<div class="form-group row justify-content-end">
												<div class="col-md-8 pl-md-2">
													<div class="form-group mb-0">
														<label class="ckbox">
															<input type="checkbox"><span class="tx-13">I agree terms and conditions</span>
														</label>
													</div>
												</div>
											</div>
											<div class="form-group row justify-content-end mb-0">
												<div class="col-md-8 pl-md-2">
													<button class="btn ripple btn-primary pd-x-30 mg-l-5">Register</button>
													<button class="btn ripple btn-secondary pd-x-30">Cancel</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Grid Form</h6>
											<p class="text-muted card-sub-title">A form group layout for entering card information upon checkout.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-12 col-lg-12 col-xl-12">
												<div class="">
													<div class="form-group">
														<label class="">Name</label>
														<input class="form-control" required="" type="text">
													</div>
													<div class="form-group">
														<label class="">Email</label>
														<div class="pos-relative">
															<input class="form-control pd-r-80" required="" type="email">
														</div>
													</div>
													<div class="form-group">
														<div class="row row-sm">
															<div class="col-sm-4">
																<label class="">Date</label>
																<select class="form-control select select2">
																	<option label="Date"></option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																	<option value="13">13</option>
																	<option value="14">14</option>
																	<option value="15">15</option>
																	<option value="16">16</option>
																	<option value="17">17</option>
																	<option value="18">18</option>
																	<option value="19">19</option>
																	<option value="20">20</option>
																	<option value="21">21</option>
																	<option value="22">22</option>
																	<option value="23">23</option>
																	<option value="24">24</option>
																	<option value="25">25</option>
																	<option value="26">26</option>
																	<option value="27">27</option>
																	<option value="28">28</option>
																	<option value="29">29</option>
																	<option value="30">30</option>
																	<option value="31">31</option>
																</select>
															</div>
															<div class="col-sm-4 mg-t-20 mg-sm-t-0">
																<label class="">Month</label>
																<select class="form-control select select2">
																	<option label="Month"></option>
																	<option value="January">January</option>
																	<option value="February">February</option>
																	<option value="March">March</option>
																	<option value="April">April</option>
																	<option value="May">May</option>
																	<option value="June">June</option>
																	<option value="July">July</option>
																	<option value="August">August</option>
																	<option value="September">September</option>
																	<option value="October">October</option>
																	<option value="November">November</option>
																	<option value="December">December</option>
																</select>
															</div>
															<div class="col-sm-4 mg-t-20 mg-sm-t-0">
																<label class="">Year</label>
																<select class="form-control select select2">
																	<option label="year"></option>
																	<option value="2020">2020</option>
																	<option value="2018">2018</option>
																	<option value="2017">2017</option>
																	<option value="2016">2016</option>
																	<option value="2015">2015</option>
																	<option value="2014">2014</option>
																	<option value="2013">2013</option>
																	<option value="2012">2012</option>
																	<option value="2011">2011</option>
																	<option value="2010">2010</option>
																	<option value="2009">2009</option>
																	<option value="2008">2008</option>
																	<option value="2007">2007</option>
																	<option value="2006">2006</option>
																	<option value="2005">2005</option>
																	<option value="2004">2004</option>
																	<option value="2003">2003</option>
																	<option value="2002">2002</option>
																	<option value="2001">2001</option>
																	<option value="1999">1999</option>
																	<option value="1998">1998</option>
																</select>
															</div>
														</div>
													</div>
													<div class="form-group mg-b-20">
														<label class="ckbox">
															<input checked type="checkbox"><span class="tx-13">I agree terms and conditions</span>
														</label>
													</div>
													<button class="btn ripple btn-main-primary btn-block">Submit</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Form in Dropdown</h6>
											<p class="text-muted card-sub-title">A form group layout inside a dropdown panel.</p>
										</div>
										<div class="main-dropdown-form-demo">
											<button class="btn ripple btn-main-primary pd-x-20" data-toggle="dropdown">Live Example <i class="icon ion-ios-arrow-down mg-r-5 tx-12"></i></button>
											<div class="dropdown-menu">
												<h6 class="dropdown-title text-center mb-4">Subscribe</h6>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your fullname" type="text">
												</div>
												<div class="form-group">
													<input class="form-control" placeholder="Enter your email" type="email">
												</div><button class="btn ripple btn-primary btn-block">Subscribe</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Form in Modal</h6>
											<p class="text-muted card-sub-title">A form group layout inside a modal panel.</p>
										</div>
										<div class="">
											<a class="btn ripple btn-main-primary" data-target="#modaldemo1" data-toggle="modal" href="">View Live Demo</a>
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

			<!-- Form Modal -->
			<div class="modal" id="modaldemo1">
				<div class="modal-dialog wd-xl-400" role="document">
					<div class="modal-content">
						<div class="modal-body pd-20 pd-sm-40">
							<button aria-label="Close" class="close pos-absolute t-15 r-20 tx-26" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
							<h5 class="modal-title mb-4 text-center">Create New Account</h5>
							<div class="form-group">
								<input class="form-control" placeholder="Firstname" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Lastname" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Phone" type="text">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Email" type="text">
							</div>
							<div class="form-group mg-b-25">
								<label class="ckbox mg-b-5"><input type="checkbox"> <span class="tx-13">I agree to <a href="">Terms</a> and <a href="">Privacy Policy</a></span></label>
							</div>
							<button class="btn ripple btn-primary btn-block">Continue</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Form Modal -->

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Form-layouts-->
		<script src="<?php echo base_url('public/assets/js/form-layouts.js'); ?>"></script>

	</body>
</html>