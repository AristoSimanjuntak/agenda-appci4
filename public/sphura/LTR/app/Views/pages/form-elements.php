<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Specturm-color picker css-->
		<link href="<?php echo base_url('public/assets/plugins/spectrum-colorpicker/spectrum.css'); ?>" rel="stylesheet">

<!--Bootstrap-datepicker css-->
<link href="<?php echo base_url('public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css'); ?>" rel="stylesheet">

<!-- Internal Datetimepicker-slider css -->
<link href="<?php echo base_url('public/assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css'); ?>" rel="stylesheet">

		<!-- Internal Ion.rangeslider css-->
		<link href="<?php echo base_url('public/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Elements</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Elements</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Form Input &amp; Textarea</h6>
											<p class="text-muted card-sub-title">A basic form control input and textarea with disabled and readonly mode.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg">
												<input class="form-control" placeholder="Input box" type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control" placeholder="Input box (readonly)" readonly type="text">
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<input class="form-control" disabled placeholder="Input box (disabled)" type="text">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<textarea class="form-control" placeholder="Textarea" rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<textarea class="form-control" placeholder="Textarea (readonly)" readonly rows="3"></textarea>
											</div>
											<div class="col-lg mg-t-10 mg-lg-t-0">
												<textarea class="form-control" disabled placeholder="Texarea (disabled)" rows="3"></textarea>
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
											<h6 class="main-content-label mb-1">Valid State Input</h6>
											<p class="text-muted card-sub-title">A form control with success, warning and error state.</p>
										</div>
										<form class="needs-validation was-validated">
											<div class="row row-sm">
												<div class="col-lg-6">
													<div class="form-group has-success mg-b-0">
														<input class="form-control" placeholder="Input box (success state)" required="" type="text" value="This is input">
														<textarea class="form-control mg-t-20" placeholder="Textarea (success state)" required="" rows="3">This is textarea</textarea>
													</div>
												</div>
												<div class="col-lg-6 mg-t-20 mg-lg-t-0">
													<div class="form-group has-danger mg-b-0">
														<input class="form-control" placeholder="Input box (invalid state)" required="" type="text">
														<textarea class="form-control mg-t-20" placeholder="Textarea (invalid state)" required="" rows="3"></textarea>
													</div>
												</div>
											</div>
										</form>
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
											<h6 class="main-content-label mb-1">Default Form Input Fields with labels</h6>
											<p class="text-muted card-sub-title">A form control with labels state.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Name</p>
													<input type="text" class="form-control" name="example-text-input" placeholder="Name">
												</div>
												<div class="form-group">
													<p class="mg-b-10">Disabled</p>
													<input type="text" class="form-control" name="example-disabled-input" placeholder="Disabled text area.." value="" disabled="">
												</div>
												<div class="form-group">
													<p class="mg-b-10">Readonly</p>
													<input type="text" class="form-control" name="example-disabled-input" placeholder="Read Only Text area."  readonly="">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<p class="mg-b-10">Valid Email</p>
													<input type="text" class="form-control is-valid state-valid" name="example-text-input-valid" placeholder="Valid Email..">
												</div>
												<div class="form-group m-0">
													<p class="mg-b-10">Invalid Number</p>
													<input type="text" class="form-control is-invalid state-invalid" name="example-text-input-invalid" placeholder="Invalid Number..">
													<div class="invalid-feedback">Invalid feedback</div>
												</div>
												<div class="form-group">
													<p class="mg-b-10">Password</p>
													<input type="password" class="form-control" name="example-password-input" placeholder="Password..">
												</div>
											</div>
											<div class="col-md-12 ">
												<div class="form-group mb-0">
													<p class="mg-b-10">Message</p>
													<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="text here.."></textarea>
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
											<h6 class="main-content-label mb-1">Input Sizes</h6>
											<p class="text-muted card-sub-title">A form control sizes in large,small Fields.</p>
										</div>
										<div class="form-group">
											<input type="text" class="form-control input-lg" name="example-text-input" placeholder="Large Input">
										</div>
										<div class="form-group">
											<input type="text" class="form-control" name="example-text-input" placeholder="Default Input">
										</div>
										<div class="form-group mb-0">
											<input type="text" class="form-control input-sm" name="example-text-input" placeholder="Small Input">
										</div>
									</div>
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Select Input Sizes</h6>
											<p class="text-muted card-sub-title">A Select input sizes in large,small Fields.</p>
										</div>
										<div class="form-group">
											<select name="country" class="form-control select-lg select2">
												<option value="">Large Select</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl">Poland</option>
											</select>
										</div>
										<div class="form-group">
											<select name="country" class="form-control select2">
												<option value="">Default Select</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl">Poland</option>
											</select>
										</div>
										<div class="form-group mb-0">
											<select name="country" class="form-control select-sm select2">
												<option value="">Small Select</option>
												<option value="cz">Czech Republic</option>
												<option value="de">Germany</option>
												<option value="pl">Poland</option>
											</select>
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
											<h6 class="main-content-label mb-1">Switch & Colors </h6>
											<p class="text-muted card-sub-title">A form control sizes in large,small Fields.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<div class="form-group">
													<p class="mb-2">Toggle switch single</p>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
													<p class="mt-4 mb-2">Toggle switch single Checked</p>
													<label class="custom-switch">
														<input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
														<span class="custom-switch-indicator"></span>
														<span class="custom-switch-description">I agree with terms and conditions</span>
													</label>
												</div>
											</div>
											<div class="col-lg-8">
												<div class="form-group ">
													<p class="mb-2">Your skills</p>
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item ">
															<input type="checkbox" name="value" value="HTML" class="selectgroup-input" checked="">
															<span class="selectgroup-button">HTML</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="CSS" class="selectgroup-input">
															<span class="selectgroup-button">CSS</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="PHP" class="selectgroup-input">
															<span class="selectgroup-button">PHP</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="JavaScript" class="selectgroup-input">
															<span class="selectgroup-button">JavaScript</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Angular" class="selectgroup-input">
															<span class="selectgroup-button">Angular</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="Java" class="selectgroup-input">
															<span class="selectgroup-button">Java</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="value" value="C++" class="selectgroup-input">
															<span class="selectgroup-button">C++</span>
														</label>
													</div>
												</div>
												<div class="form-group m-0">
													<p class="mb-2">Select Color</p>
													<div class="d-flex">
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="azure" class="colorinput-input" checked />
																<span class="colorinput-color bg-primary"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="indigo" class="colorinput-input"  />
																<span class="colorinput-color bg-indigo"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="purple" class="colorinput-input" />
																<span class="colorinput-color bg-purple"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="pink" class="colorinput-input" />
																<span class="colorinput-color bg-pink"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="red" class="colorinput-input" />
																<span class="colorinput-color bg-danger"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="orange" class="colorinput-input" />
																<span class="colorinput-color bg-orange"></span>
															</label>
														</div>
														<div class="">
															<label class="colorinput">
																<input name="color" type="checkbox" value="yellow" class="colorinput-input" />
																<span class="colorinput-color bg-warning"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="lime" class="colorinput-input" />
																<span class="colorinput-color bg-info"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="green" class="colorinput-input" />
																<span class="colorinput-color bg-success"></span>
															</label>
														</div>
														<div class="d-none d-sm-block">
															<label class="colorinput">
																<input name="color" type="checkbox" value="teal" class="colorinput-input" />
																<span class="colorinput-color bg-teal"></span>
															</label>
														</div>
													</div>
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
											<h6 class="main-content-label mb-1">Custom Checkboxes &amp; Radios</h6>
											<p class="text-muted card-sub-title">A custom styled checkboxes and radios.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-3">
												<label class="ckbox"><input type="checkbox"><span>Checkbox Unchecked</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="ckbox"><input checked type="checkbox"><span>Checkbox Checked</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="ckbox"><input disabled type="checkbox"><span>Checkbox Disabled</span></label>
											</div>
										</div>
										<div class="row mg-t-10">
											<div class="col-lg-3">
												<label class="rdiobox"><input name="rdio" type="radio"> <span>Radio Unchecked</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="rdiobox"><input checked name="rdio" type="radio"> <span>Radio Checked</span></label>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<label class="rdiobox"><input disabled name="rdio" type="radio"> <span>Radio Disabled</span></label>
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
										<div class="main-content-label mg-b-5">
											File Browser
										</div>
										<p class="mg-b-20">It is Very Easy to Customize and it uses in your website apllication.</p>
										<div class="row row-sm">
											<div class="col-sm-12 col-md-12 col-lg-12">
												<div class="input-group file-browser">
													<input type="text" class="form-control border-right-0 browse-file" placeholder="choose" readonly>
													<label class="input-group-btn">
														<span class="btn btn-primary">
															Browse <input type="file" style="display: none;" multiple>
														</span>
													</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Toggle Switches</h6>
											<p class="text-muted card-sub-title">A custom made toggles with jquery support.</p>
										</div>
										<div class="main-toggle-group-demo">
											<div class="main-toggle">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-secondary">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-success">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-dark">
												<span></span>
											</div>
										</div>
										<div class="main-toggle-group-demo mg-t-10">
											<div class="main-toggle on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-secondary on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-success on">
												<span></span>
											</div>
											<div class="main-toggle main-toggle-dark on">
												<span></span>
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
											<h6 class="main-content-label mb-1">Input Groups</h6>
											<p class="text-muted card-sub-title">Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text" id="basic-addon1">@</span>
													</div><input aria-describedby="basic-addon1" aria-label="Username" class="form-control" placeholder="Username" type="text">
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<input aria-describedby="basic-addon2" aria-label="Recipient's username" class="form-control" placeholder="Recipient's username" type="text">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">@example.com</span>
													</div>
												</div>
											</div>
											<div class="col-lg-4">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<span class="input-group-text">$</span>
													</div><input aria-label="Amount (to the nearest dollar)" class="form-control" type="text">
													<div class="input-group-append">
														<span class="input-group-text">.00</span>
													</div>
												</div>
											</div>
										</div>
										<div class="row row-sm">
											<div class="col-lg-4">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<label class="ckbox wd-16 mg-b-0"><input class="mg-0" type="checkbox"><span></span></label>
														</div>
													</div><input class="form-control" placeholder="Text input with checkbox" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															<label class="rdiobox wd-16 mg-b-0"><input type="radio"><span></span></label>
														</div>
													</div><input class="form-control" placeholder="Text input with radiobox" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<input class="form-control" placeholder="Search for..." type="text">
													<span class="input-group-btn"><button class="btn ripple btn-primary" type="button">
													<span class="input-group-btn"><i class="fa fa-search"></i></span></button></span>
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
											<h6 class="main-content-label mb-1">Input Mask</h6>
											<p class="text-muted card-sub-title">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-3">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															Date:
														</div>
													</div><input class="form-control" id="dateMask" placeholder="MM/DD/YYYY" type="text">
												</div>
											</div>
											<div class="col-lg-3 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															Phone:
														</div>
													</div>
													<input class="form-control" id="phoneMask" placeholder="(000) 000-0000" type="text">
												</div>
											</div>
											<div class="col-lg-4 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															Phone + Ext.:
														</div>
													</div>
													<input class="form-control" id="phoneExtMask" placeholder="(000) 000-0000 ext 0000" type="text">
												</div>
											</div>
											<div class="col-lg-2 mg-t-20 mg-lg-t-0">
												<div class="input-group">
													<div class="input-group-prepend">
														<div class="input-group-text">
															SSN:
														</div>
													</div>
													<input class="form-control" id="ssnMask" placeholder="000-00-0000" type="text">
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
											<h6 class="main-content-label mb-1">Color Picker</h6>
											<p class="text-muted card-sub-title">Input masks allows a user to more easily enter fixed width input where you would like them to enter the data in a certain format (dates,phones, etc).</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-6">
												<p class="mg-b-10">You can allow alpha transparency selection. Check out these example.</p>
												<div>
													<input id="showAlpha" type="text">
												</div>
											</div>
											<div class="col-md-6">
												<p class="mg-b-10">Show pallete only. If you'd like, spectrum can show the palettes you specify.</p>
												<div>
													<input id="showPaletteOnly" type="text">
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1"> Date and time Picker</h6>
											<p class="text-muted card-sub-title">The date and  time picker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
										</div>
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control" id="datetimepicker" placeholder="MM/DD/YYYY HH/MM/SS" type="text">
													</div>
												</div>
											</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">JQuery UI Date Picker</h6>
											<p class="text-muted card-sub-title">The datepicker is tied to a standard form input field. Click on the input to open an interactive calendar in a small overlay. If a date is chosen, feedback is shown as the input's value.Set the numberOfMonths option to an integer of 2 or more to show multiple months in a single datepicker.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
													</div>
												</div>
											</div>
											<div class="col-lg-6">
												<div class="mg-b-20">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
													</div>
												</div>
											</div>
											<div class="col-lg-12">
												<p>Display the datepicker embedded in the page instead of in an overlay.</p>
												<div class="wd-276">
													<div class="fc-datepicker"></div>
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
											<h6 class="main-content-label mb-1">Date, Month, Year Range Picker</h6>
											<p class="text-muted card-sub-title">Display the datepicker embedded in the page instead of in an overlay.</p>
										</div>
										<div class="row row-sm">
											<div class="col-md-4">
												<div class=" mg-b-30">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control" placeholder="Date Range" type="text" id="datepicker-date">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class="mg-b-30">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control" placeholder="Month Range" type="text" id="datepicker-month">
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<div class=" mg-b-30">
													<div class="input-group">
														<div class="input-group-prepend">
															<div class="input-group-text">
																<i class="fe fe-calendar lh--9 op-6"></i>
															</div>
														</div><input class="form-control" placeholder="Year Range" type="text" id="datepicker-year">
													</div>
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
											<h6 class="main-content-label mb-1">Range Slider</h6>
											<p class="text-muted card-sub-title">Easy, flexible and responsive range slider with skin support.</p>
										</div>
										<div class="row row-sm">
											<div class="col-lg-6">
												<input class="rangeslider1" name="example_name" type="text" value="">
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<input class="rangeslider2" name="example_name" type="text" value="">
											</div>
										</div>
										<div class="row row-sm mg-t-40">
											<div class="col-lg-6">
												<input class="rangeslider3" name="example_name" type="text" value="">
											</div>
											<div class="col-lg-6 mg-t-20 mg-lg-t-0">
												<input class="rangeslider4" name="example_name" type="text" value="">
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

		<!-- Internal Jquery-Ui js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Internal Jquery.maskedinput js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery.maskedinput/jquery.maskedinput.js'); ?>"></script>

		<!-- Internal Specturm-colorpicker js-->
		<script src="<?php echo base_url('public/assets/plugins/spectrum-colorpicker/spectrum.js'); ?>"></script>

		<!-- Internal Ion-rangeslider js-->
		<script src="<?php echo base_url('public/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js'); ?>"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url('public/assets/js/select2.js'); ?>"></script>
		
		<!--Bootstrap-datepicker js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js'); ?>"></script>
		
		<!-- Internal jquery-simple-datetimepicker js -->
		<script src="<?php echo base_url('public/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js'); ?>"></script>

		<!-- Internal Form-elements js-->
		<script src="<?php echo base_url('public/assets/js/form-elements.js'); ?>"></script>

	</body>
</html>