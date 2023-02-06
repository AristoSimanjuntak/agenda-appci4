<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Validation</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Validation</li>
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
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Input Validation</h6>
											<p class="text-muted card-sub-title">This is a demo of a required field that must not leave empty.</p>
										</div>
										<form action="<?php echo base_url('pages/form-validation');?>" data-parsley-validate="">
											<div class="">
												<div class="row row-sm">
													<div class="col-lg-6 form-group">
														<label class="form-label">Firstname: <span class="tx-danger">*</span></label>
														<input class="form-control" name="firstname" placeholder="Enter firstname" required="" type="text">
													</div>
													<div class="col-lg-6 form-group">
														<label class="form-label">Lastname: <span class="tx-danger">*</span></label>
														<input class="form-control" name="lastname" placeholder="Enter lastname" required="" type="text">
													</div>
												</div>
												<button class="btn ripple btn-main-primary btn-block" type="submit">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Checkbox Validation</h6>
											<p class="text-muted card-sub-title">A demo of checkboxes that must be selected at least two fom any given list.</p>
										</div>
										<form action="<?php echo base_url('pages/form-validation');?>" data-parsley-validate="">
											<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
											<div class="parsley-checkbox row" id="cbWrapper">
												<div class="col-xl-3">
													<label class="ckbox mg-b-5-f">
													<input data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox mg-b-5-f"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox mg-b-5-f"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label>
												</div>
												<div class="col-xl-3">
													<label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
												</div>
											</div>
											<div id="cbErrorContainer"></div>
											<div class="mg-t-20">
												<button class="btn ripple btn-primary pd-x-20" type="submit" value="5">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Style Invalid Messages</h6>
											<p class="text-muted card-sub-title">A demo for using custom styled messages for error container.</p>
										</div>
										<form action="<?php echo base_url('pages/form-validation');?>" class="parsley-style-1" id="selectForm2" name="selectForm2">
											<div class="">
												<div class="d-md-flex mg-b-20">
													<div class="parsley-input" id="fnWrapper">
														<label>Firstname: <span class="tx-danger">*</span></label>
														<input class="form-control wd-xl-250" data-parsley-class-handler="#fnWrapper" name="firstname" placeholder="Enter firstname" required="" type="text">
													</div>
													<div class="parsley-input mg-md-r-20 mg-t-20 mg-md-t-0" id="lnWrapper">
														<label>Lastname: <span class="tx-danger">*</span></label>
														<input class="form-control wd-xl-250" data-parsley-class-handler="#lnWrapper" name="lastname" placeholder="Enter lastname" required="" type="text">
													</div>
												</div>
											</div>
											<p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
											<div class="parsley-checkbox wd-250 mg-b-0" id="cbWrapper2">
												<label class="ckbox mg-b-5-f"><input data-parsley-class-handler="#cbWrapper2" data-parsley-errors-container="#cbErrorContainer2" data-parsley-mincheck="2" name="browser[]" required="" type="checkbox" value="1"><span>Firefox</span></label> <label class="ckbox mg-b-5-f"><input name="browser[]" type="checkbox" value="2"><span>Chrome</span></label> <label class="ckbox mg-b-5-f"><input name="browser[]" type="checkbox" value="3"><span>Safari</span></label> <label class="ckbox"><input name="browser[]" type="checkbox" value="4"><span>Edge</span></label>
											</div><!-- parsley-checkbox -->
											<div class="" id="cbErrorContainer2"></div>
											<div class="parsley-select  mg-t-30" id="slWrapper2">
												<select class="form-control select2" data-parsley-class-handler="#slWrapper2" data-parsley-errors-container="#slErrorContainer2" data-placeholder="Choose one" required="">
													<option label="Choose one">
													</option>
													<option value="Firefox">
														Firefox
													</option>
													<option value="Chrome">
														Chrome
													</option>
													<option value="Safari">
														Safari
													</option>
													<option value="Opera">
														Opera
													</option>
													<option value="Internet Explorer">
														Internet Explorer
													</option>
												</select>
												<div id="slErrorContainer2"></div>
											</div>
											<div class="mg-t-30">
												<button class="btn ripple btn-primary pd-x-20 btn-block" type="submit">Validate Form</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Select2 Validation</h6>
											<p class="text-muted card-sub-title">A demo of select boxes that must be selected at least one fom any given option.</p>
										</div>
										<form action="<?php echo base_url('pages/form-validation');?>" id="selectForm" name="selectForm">
											<div class="d-sm-flex">
												<div class="parsley-select wd-sm-250" id="slWrapper">
													<select class="form-control select2" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" data-placeholder="Choose one" required="">
														<option label="Choose one">
														</option>
														<option value="Firefox">
															Firefox
														</option>
														<option value="Chrome">
															Chrome
														</option>
														<option value="Safari">
															Safari
														</option>
														<option value="Opera">
															Opera
														</option>
														<option value="Internet Explorer">
															Internet Explorer
														</option>
													</select>
													<div id="slErrorContainer"></div>
												</div>
												<div class="mg-sm-r-10 mg-t-10 mg-sm-t-0">
													<button class="btn ripple btn-primary pd-x-20" type="submit" value="5">Validate Form</button>
												</div>
											</div>
										</form>
									</div>
								</div>
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Email Validation</h6>
											<p class="text-muted card-sub-title">A demo of an email field that is required and must also be a valid email address. It automatically validate an email when the field is in type="email".</p>
										</div>
										<form action="<?php echo base_url('pages/form-validation');?>" data-parsley-validate="">
											<div class="d-sm-flex">
												<div class="form-group mg-b-0">
													<label class="form-label">Email: <span class="tx-danger">*</span></label>
													<input class="form-control wd-sm-250" name="email" placeholder="Enter email" required="" type="email">
												</div>
												<div class="mg-sm-r-10 mg-t-10 mg-sm-t-25">
													<button class="btn ripple btn-primary pd-x-20" type="submit">Validate Email</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row-->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Parsley js-->
		<script src="<?php echo base_url('public/assets/plugins/parsleyjs/parsley.min.js'); ?>"></script>

		<!-- Internal Form-validation js-->
		<script src="<?php echo base_url('public/assets/js/form-validation.js'); ?>"></script>

	</body>
</html>