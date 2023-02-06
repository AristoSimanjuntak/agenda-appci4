<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Daterangepicker css-->
		<link href="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.css'); ?>" rel="stylesheet">

		<!-- InternalFileupload css-->
		<link href="<?php echo base_url('public/assets/plugins/fileuploads/css/fileupload.css'); ?>" rel="stylesheet" type="text/css"/>

		<!-- InternalFancy uploader css-->
		<link href="<?php echo base_url('public/assets/plugins/fancyuploder/fancy_fileupload.css'); ?>" rel="stylesheet" />

		<!-- InternalSumoselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/sumoselect/sumoselect-rtl.css'); ?>">

		<!-- Internal TelephoneInput css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/telephoneinput/telephoneinput-rtl.css'); ?>">


	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Advanced Forms</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Advanced Forms</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Telephone Input</h6>
											<p class="text-muted card-sub-title">A JavaScript plugin for entering and validating international telephone numbers. It adds a flag dropdown to any input, detects the user's country, displays a relevant placeholder and provides formatting/validation methods.</p>
										</div>
										<div class="input-group telephone-input">
											<input type="tel" id="mobile-number" placeholder="e.g. +1 702 123 4567">
											<span class="input-group-btn">
												<button class="btn ripple btn-primary" type="button">Submit</button>
											</span>
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
											<h6 class="main-content-label mb-1">Select2</h6>
											<p class="text-muted card-sub-title">Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</p>
										</div>
										<div class="row row-sm mg-b-20">
											<div class="col-lg-4">
												<p class="mg-b-10">Single Select</p>
												<select class="form-control select2-no-search">
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
											</div><!-- col-4 -->
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<p class="mg-b-10">Single Select with Search</p>
												<select class="form-control select2">
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
											</div><!-- col-4 -->
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<p class="mg-b-10">Single Select (Disabled)</p>
												<select class="form-control select2" disabled>
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
											</div><!-- col-4 -->
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<p class="mg-b-10">Multiple Select</p>
												<select class="form-control select2" multiple="multiple">
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
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<p class="mg-b-10">Multiple Select with Pre-Filled Input</p>
												<select class="form-control select2" multiple="multiple">
													<option selected value="Firefox">
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
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<p class="mg-b-10">Multiple Select (Disabled)</p>
												<select class="form-control select2-no-search" disabled multiple="multiple">
													<option selected value="Firefox">
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
											<h6 class="main-content-label mb-1">Date Range Picker</h6>
											<p class="text-muted card-sub-title">Date Range Picker</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-12">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<i class="fe fe-calendar  lh--9 op-6"></i>
														</div>
													</div><input type="text" class="form-control pull-right" id="reservation">
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
											<h6 class="main-content-label mb-1">File Upload</h6>
											<p class="text-muted card-sub-title">Dropify is a jQuery plugin to create a beautiful file uploader that converts a standard <code>input type="file"</code> into a nice drag & drop zone with previews and custom styles.</p>
										</div>
										<div class="row mb-4">
											<div class="col-sm-12 col-md-4">
												<input type="file" class="dropify" data-height="200" />
											</div>
											<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
												<input type="file" class="dropify" data-default-file="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" data-height="200"  />
											</div>
											<div class="col-sm-12 col-md-4 mg-t-10 mg-sm-t-0">
												<input type="file" class="dropify" disabled="disabled"  />
											</div>
										</div>
										<div>
											<input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png, html, zip, css,js" multiple>
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

		<!-- Jquery-Ui js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Internal Daternagepicker js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/moment.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js'); ?>"></script>

		<!-- Internal Fileuploads js-->
		<script src="<?php echo base_url('public/assets/plugins/fileuploads/js/fileupload.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/fileuploads/js/file-upload.js'); ?>"></script>

		<!-- InternalFancy uploader js-->
		<script src="<?php echo base_url('public/assets/plugins/fancyuploder/jquery.ui.widget.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/fancyuploder/jquery.fileupload.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/fancyuploder/jquery.iframe-transport.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/fancyuploder/jquery.fancy-fileupload.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/fancyuploder/fancy-uploader.js'); ?>"></script>

		<!-- Internal Form-elements js-->
		<script src="<?php echo base_url('public/assets/js/advanced-form-elements.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>

		<!-- Internal TelephoneInput js-->
		<script src="<?php echo base_url('public/assets/plugins/telephoneinput/telephoneinput.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/telephoneinput/inttelephoneinput.js'); ?>"></script>

	</body>
</html>