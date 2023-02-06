<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Gallery css-->
		<link href="<?php echo base_url('public/assets/plugins/gallery/gallery.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Profile</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Profile</li>
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

						<div class="row square">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="panel profile-cover">
											<div class="profile-cover__img">
												<img src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>" alt="img" />
												<h3 class="h3">Sonia Taylor</h3>
											</div>
											<div class="btn-profile">
												<button class="btn btn-rounded btn-danger">
													<i class="fa fa-plus"></i>
													<span>Follow</span>
												</button>
												<button class="btn btn-rounded btn-success">
													<i class="fa fa-comment"></i>
													<span>Message</span>
												</button>
											</div>
											<div class="profile-cover__action bg-img"></div>
											<div class="profile-cover__info">
												<ul class="nav">
													<li><strong>26</strong>Projects</li>
													<li><strong>33</strong>Followers</li>
													<li><strong>136</strong>Following</li>
												</ul>
											</div>
                                        </div>
										<div class="profile-tab tab-menu-heading">
											<nav class="nav main-nav-line p-3 tabs-menu profile-nav-line bg-gray-100">
												<a class="nav-link  active" data-toggle="tab" href="#about">About</a>
												<a class="nav-link" data-toggle="tab" href="#edit">Edit Profile</a>
												<a class="nav-link" data-toggle="tab" href="#timeline">Timeline</a>
												<a class="nav-link" data-toggle="tab" href="#gallery">Gallery</a>
												<a class="nav-link" data-toggle="tab" href="#friends">Friends</a>
												<a class="nav-link" data-toggle="tab" href="#settings">Account Settings</a>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card main-content-body-profile">
									<div class="tab-content">
										<div class="main-content-body tab-pane p-4 border-top-0 active" id="about">
											<div class="card-body p-0 border p-0 rounded-10">
												<div class="p-4">
													<h4 class="tx-15 text-uppercase mb-3">BIOdata</h4>
													<p class="m-b-5">Hi I'm Petey Cruiser,has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
													<div class="m-t-30">
														<h4 class="tx-15 text-uppercase mt-3">Experience</h4>
														<div class=" p-t-10">
															<h5 class="text-primary m-b-5 tx-14">Lead designer / Developer</h5>
															<p class="">websitename.com</p>
															<p><b>2010-2015</b></p>
															<p class="text-muted tx-13 m-b-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
														</div>

														<div class="">
															<h5 class="text-primary m-b-5 tx-14">Senior Graphic Designer</h5>
															<p class="">coderthemes.com</p>
															<p><b>2007-2009</b></p>
															<p class="text-muted tx-13 mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
														</div>
													</div>
												</div>
												<div class="border-top"></div>
												<div class="p-4">
													<label class="main-content-label tx-13 mg-b-20">Contact</label>
													<div class="d-sm-flex">
														<div class="mg-sm-r-20 mg-b-10">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-md-phone-portrait"></i> </div>
																	<div class="media-body"> <span>Mobile</span>
																		<div> +245 354 654 </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="mg-sm-r-20 mg-b-10">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-success-transparent text-success"> <i class="icon ion-logo-slack"></i> </div>
																	<div class="media-body"> <span>Slack</span>
																		<div> @spruko.w </div>
																	</div>
																</div>
															</div>
														</div>
														<div class="">
															<div class="main-profile-contact-list">
																<div class="media">
																	<div class="media-icon bg-info-transparent text-info"> <i class="icon ion-md-locate"></i> </div>
																	<div class="media-body"> <span>Current Address</span>
																		<div> San Francisco, CA </div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="border-top"></div>
												<div class="p-4">
													<label class="main-content-label tx-13 mg-b-20">Social</label>
													<div class="d-md-flex">
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-primary-transparent text-primary"> <i class="icon ion-logo-github"></i> </div>
																	<div class="media-body"> <span>Github</span> <a href="">github.com/spruko</a> </div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-success-transparent text-success"> <i class="icon ion-logo-twitter"></i> </div>
																	<div class="media-body"> <span>Twitter</span> <a href="">twitter.com/spruko.me</a> </div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-info-transparent text-info"> <i class="icon ion-logo-linkedin"></i> </div>
																	<div class="media-body"> <span>Linkedin</span> <a href="">linkedin.com/in/spruko</a> </div>
																</div>
															</div>
														</div>
														<div class="mg-md-r-20 mg-b-10">
															<div class="main-profile-social-list">
																<div class="media">
																	<div class="media-icon bg-danger-transparent text-danger"> <i class="icon ion-md-link"></i> </div>
																	<div class="media-body"> <span>My Portfolio</span> <a href="">spruko.com/</a> </div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-body tab-pane p-4 border-top-0" id="edit">
											<div class="card-body border">
												<div class="mb-4 main-content-label">Personal Information</div>
												<form class="form-horizontal">
													<div class="mb-4 main-content-label">Name</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">User Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="User Name" value="Mack Adamia">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">First Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="First Name" value="Mack Adamia">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">last Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Last Name" value="Mack Adamia">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Nick Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Nick Name" value="Spruha">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Designation</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Designation" value="Web Designer">
															</div>
														</div>
													</div>
													<div class="mb-4 main-content-label">Contact Info</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Email<i>(required)</i></label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Email" value="info@Spruha.in">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Website</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Website" value="@spruko.w">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Phone</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="phone number" value="+245 354 654">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Address</label>
															</div>
															<div class="col-md-9">
																<textarea class="form-control" name="example-textarea-input" rows="2" placeholder="Address">San Francisco, CA</textarea>
															</div>
														</div>
													</div>
													<div class="mb-4 main-content-label">Social Info</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Twitter</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="twitter" value="twitter.com/spruko.me">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Facebook</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="facebook" value="https://www.facebook.com/Spruha">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Google+</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="google" value="spruko.com">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Linked in</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="linkedin" value="linkedin.com/in/spruko">
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Github</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="github" value="github.com/sprukos">
															</div>
														</div>
													</div>
													<div class="mb-4 main-content-label">About Yourself</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Biographical Info</label>
															</div>
															<div class="col-md-9">
																<textarea class="form-control" name="example-textarea-input" rows="4" placeholder="">pleasure rationally encounter but because pursue consequences that are extremely painful.occur in which toil and pain can procure him some great pleasure..</textarea>
															</div>
														</div>
													</div>
													<div class="mb-4 main-content-label">Email Preferences</div>
													<div class="form-group mb-0">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Verified User</label>
															</div>
															<div class="col-md-9">
																<div class="custom-controls-stacked">
																	<label class="ckbox mg-b-10-f"><input checked="" type="checkbox"><span> Accept to receive post or page notification emails</span></label>
																	<label class="ckbox"><input checked="" type="checkbox"><span> Accept to receive email sent to multiple recipients</span></label>
																</div>
															</div>
														</div>
													</div>
												</form>
											</div>
										</div>
										<div class="main-content-body  tab-pane border-top-0" id="timeline">
											<div class="border p-4">
												<div class="main-content-body main-content-body-profile">
													<div class="main-profile-body p-0">
														<div class="row row-sm">
															<div class="col-12">
																<div class="card mg-b-20 border">
																	<div class="card-header p-4">
																		<div class="media">
																			<div class="media-user mr-2">
																				<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 mg-t-2 ml-2">Mintrona Pechon Pechon</h6><span class="text-primary ml-2">just now</span> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																					<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card-body">
																		<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																		<div class="row row-sm">
																			<div class="col"> <img alt="img" class="wd-200 mr-4" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>"> <img alt="img" class="wd-200" src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>"> </div>
																		</div>
																		<div class="media mg-t-15 profile-footer">
																			<div class="media-user mr-2">
																				<div class="demo-avatar-group">
																					<div class="demo-avatar-group main-avatar-list-stacked">
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
																						<div class="main-avatar"> +23 </div>
																					</div>
																					<!-- demo-avatar-group -->
																				</div>
																				<!-- demo-avatar-group -->
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 mg-t-10">28 people like your photo</h6> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="card mg-b-20 border">
																	<div class="card-header p-4">
																		<div class="media">
																			<div class="media-user mr-2">
																				<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 ml-2 mg-t-3">Mintrona Pechon Pechon</h6><span class="text-muted ml-2">Sep 26 2019, 10:14am</span> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																					<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card-body h-100">
																		<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																		<div class="row row-sm">
																			<div class="col"> <img alt="img" class="wd-200 mr-4" src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>"> <img alt="img" class="wd-200" src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>"> </div>
																		</div>
																		<div class="media mg-t-15 profile-footer">
																			<div class="media-user mr-2">
																				<div class="demo-avatar-group">
																					<div class="demo-avatar-group main-avatar-list-stacked">
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>"></div>
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"></div>
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
																						<div class="main-avatar"> +23 </div>
																					</div>
																					<!-- demo-avatar-group -->
																				</div>
																				<!-- demo-avatar-group -->
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 mg-t-10">28 people like your photo</h6> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="card mg-b-20 border">
																	<div class="card-header p-4">
																		<div class="media">
																			<div class="media-user mr-2">
																				<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>"></div>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 ml-2 mg-t-3">Mintrona Pechon Pechon</h6><span class="text-muted ml-2">Sep 26 2019, 10:14am</span> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																					<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card-body h-100">
																		<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																		<div class="media mg-t-15 profile-footer">
																			<div class="media-user mr-2">
																				<div class="demo-avatar-group">
																					<div class="demo-avatar-group main-avatar-list-stacked">
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/9.jpg'); ?>"></div>
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/10.jpg'); ?>"></div>
																						<div class="main-avatar"> +23 </div>
																					</div>
																					<!-- demo-avatar-group -->
																				</div>
																				<!-- demo-avatar-group -->
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 mg-t-10">28 people like your photo</h6> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="card border">
																	<div class="card-header p-4">
																		<div class="media">
																			<div class="media-user mr-2">
																				<div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"></div>
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 ml-2 mg-t-3">Mintrona Pechon Pechon</h6><span class="text-muted ml-2">Sep 26 2019, 10:14am</span> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);"><i class="fas fa-ellipsis-v"></i></a>
																					<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#">Edit Post</a> <a class="dropdown-item" href="#">Delete Post</a> <a class="dropdown-item" href="#">Personal Settings</a> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="card-body h-100">
																		<p class="mg-t-0">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
																		<div class="row row-sm">
																			<div class="col"> <img alt="img" class="wd-200 mr-3" src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>"> <img alt="img" class="wd-200" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>"> </div>
																		</div>
																		<div class="media mg-t-15 profile-footer">
																			<div class="media-user mr-2">
																				<div class="demo-avatar-group">
																					<div class="demo-avatar-group main-avatar-list-stacked">
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/11.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/12.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
																						<div class="main-img-user"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>"></div>
																						<div class="main-img-user online"><img alt="" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
																						<div class="main-avatar"> +23 </div>
																					</div>
																					<!-- demo-avatar-group -->
																				</div>
																				<!-- demo-avatar-group -->
																			</div>
																			<div class="media-body">
																				<h6 class="mb-0 mg-t-10">28 people like your photo</h6> </div>
																			<div class="ml-auto">
																				<div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<!-- main-profile-body -->
												</div>
											</div>
										</div>
										<div class="main-content-body p-4 border tab-pane border-top-0" id="gallery">
											<div class="card-body border">
												<div class="demo-gallery">
													<ul id="lightgallery" class="list-unstyled row row-sm">
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" data-sub-html="<h4>Gallery Image 1</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4 wd-100p" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" data-sub-html="<h4>Gallery Image 2</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4" src="<?php echo base_url('public/assets/img/media/2.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" data-sub-html="<h4>Gallery Image 3</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4" src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" data-sub-html="<h4>Gallery Image 4</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4" src="<?php echo base_url('public/assets/img/media/4.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" data-sub-html="<h4>Gallery Image 5</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4" src="<?php echo base_url('public/assets/img/media/5.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" data-sub-html="<h4>Gallery Image 6</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4" src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" data-sub-html="<h4>Gallery Image 7</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4 mb-lg-0" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" data-sub-html="<h4>Gallery Image 8</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4 mb-lg-0" src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
														<li class="col-sm-6 col-lg-4" data-responsive="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" data-src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" data-sub-html="<h4>Gallery Image 9</h4>">
															<a href="" class="wd-100p"><img class="img-responsive mb-4 mb-lg-0" src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" alt="Thumb-1"> </a>
														</li>
													</ul>
													<!-- /Gallery -->
												</div>
											</div>
										</div>
										<div class="main-content-body tab-pane border-top-0" id="friends">
											<div class="card-body border pd-b-10">
												<!-- row -->
												<div class="row row-sm">
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"> </div>
																<h5 class=" mb-1 mt-3 main-content-label">Socrates Itumay</h5>
																<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3  main-content-label">Reynante Labares</h5>
																<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3 main-content-label">Owen Bongcaras</h5>
																<p class="mb-2 mt-1 tx-inverse">App Developer</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/8.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3 main-content-label">Stephen Metcalfe</h5>
																<p class="mb-2 mt-1 tx-inverse">Administrator</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"> </div>
																<h5 class=" mb-1 mt-3 main-content-label">Socrates Itumay</h5>
																<p class="mb-2 mt-1 tx-inverse">Project Manager</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3  main-content-label">Reynante Labares</h5>
																<p class="mb-2 mt-1 tx-inverse">Web Designer</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3 main-content-label">Owen Bongcaras</h5>
																<p class="mb-2 mt-1 tx-inverse">App Developer</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
													<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
														<div class="card custom-card border">
															<div class="card-body text-center">
																<div class="user-lock text-center">
																	<div class="dropdown text-right">
																		<a href="#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <i class="fe fe-more-vertical"></i> </a>
																		<div class="dropdown-menu dropdown-menu-right border shadow"> <a class="dropdown-item" href="#"><i class="fe fe-message-square mr-2"></i> Message</a> <a class="dropdown-item" href="#"><i class="fe fe-edit-2 mr-2"></i> Edit</a> <a class="dropdown-item" href="#"><i class="fe fe-eye mr-2"></i> View</a> <a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-2"></i> Delete</a> </div>
																	</div> <img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/8.jpg'); ?>"> </div>
																<h5 class="mb-1 mt-3 main-content-label">Stephen Metcalfe</h5>
																<p class="mb-2 mt-1 tx-inverse">Administrator</p>
																<p class="text-muted text-center mt-1">Lorem Ipsum is not simply popular belief Contrary.</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-body tab-pane p-4 border-top-0" id="settings">
											<div class="card-body border" data-select2-id="12">
												<form class="form-horizontal" data-select2-id="11">
													<div class="mb-4 main-content-label">Account</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">User Name</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="User Name" value="Sonia Taylor"> </div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Email</label>
															</div>
															<div class="col-md-9">
																<input type="text" class="form-control" placeholder="Email" value="info@SoniaTaylor.in"> </div>
														</div>
													</div>
													<div class="form-group " data-select2-id="108">
														<div class="row" data-select2-id="107">
															<div class="col-md-3">
																<label class="form-label">Language</label>
															</div>
															<div class="col-md-9" data-select2-id="106">
																<select class="form-control select2" data-select2-id="1" tabindex="-1" aria-hidden="true">
																	<option data-select2-id="3">Us English</option>
																	<option data-select2-id="109">Arabic</option>
																	<option data-select2-id="110">Korean</option>
																</select>
															</div>
														</div>
													</div>
													<div class="form-group " data-select2-id="10">
														<div class="row" data-select2-id="9">
															<div class="col-md-3">
																<label class="form-label">Timezone</label>
															</div>
															<div class="col-md-9" data-select2-id="8">
																<select class="form-control select2" data-select2-id="4" tabindex="-1" aria-hidden="true">
																	<option value="Pacific/Midway" data-select2-id="6">(GMT-11:00) Midway Island, Samoa</option>
																	<option value="America/Adak" data-select2-id="16">(GMT-10:00) Hawaii-Aleutian</option>
																	<option value="Etc/GMT+10" data-select2-id="17">(GMT-10:00) Hawaii</option>
																	<option value="Pacific/Marquesas" data-select2-id="18">(GMT-09:30) Marquesas Islands</option>
																	<option value="Pacific/Gambier" data-select2-id="19">(GMT-09:00) Gambier Islands</option>
																	<option value="America/Anchorage" data-select2-id="20">(GMT-09:00) Alaska</option>
																	<option value="America/Ensenada" data-select2-id="21">(GMT-08:00) Tijuana, Baja California</option>
																	<option value="Etc/GMT+8" data-select2-id="22">(GMT-08:00) Pitcairn Islands</option>
																	<option value="America/Los_Angeles" data-select2-id="23">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
																	<option value="America/Denver" data-select2-id="24">(GMT-07:00) Mountain Time (US &amp; Canada)</option>
																	<option value="America/Chihuahua" data-select2-id="25">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
																	<option value="America/Dawson_Creek" data-select2-id="26">(GMT-07:00) Arizona</option>
																	<option value="America/Belize" data-select2-id="27">(GMT-06:00) Saskatchewan, Central America</option>
																	<option value="America/Cancun" data-select2-id="28">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
																	<option value="Chile/EasterIsland" data-select2-id="29">(GMT-06:00) Easter Island</option>
																	<option value="America/Chicago" data-select2-id="30">(GMT-06:00) Central Time (US &amp; Canada)</option>
																	<option value="America/New_York" data-select2-id="31">(GMT-05:00) Eastern Time (US &amp; Canada)</option>
																	<option value="America/Havana" data-select2-id="32">(GMT-05:00) Cuba</option>
																	<option value="America/Bogota" data-select2-id="33">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
																	<option value="America/Caracas" data-select2-id="34">(GMT-04:30) Caracas</option>
																	<option value="America/Santiago" data-select2-id="35">(GMT-04:00) Santiago</option>
																	<option value="America/La_Paz" data-select2-id="36">(GMT-04:00) La Paz</option>
																	<option value="Atlantic/Stanley" data-select2-id="37">(GMT-04:00) Faukland Islands</option>
																	<option value="America/Campo_Grande" data-select2-id="38">(GMT-04:00) Brazil</option>
																	<option value="America/Goose_Bay" data-select2-id="39">(GMT-04:00) Atlantic Time (Goose Bay)</option>
																	<option value="America/Glace_Bay" data-select2-id="40">(GMT-04:00) Atlantic Time (Canada)</option>
																	<option value="America/St_Johns" data-select2-id="41">(GMT-03:30) Newfoundland</option>
																	<option value="America/Araguaina" data-select2-id="42">(GMT-03:00) UTC-3</option>
																	<option value="America/Montevideo" data-select2-id="43">(GMT-03:00) Montevideo</option>
																	<option value="America/Miquelon" data-select2-id="44">(GMT-03:00) Miquelon, St. Pierre</option>
																	<option value="America/Godthab" data-select2-id="45">(GMT-03:00) Greenland</option>
																	<option value="America/Argentina/Buenos_Aires" data-select2-id="46">(GMT-03:00) Buenos Aires</option>
																	<option value="America/Sao_Paulo" data-select2-id="47">(GMT-03:00) Brasilia</option>
																	<option value="America/Noronha" data-select2-id="48">(GMT-02:00) Mid-Atlantic</option>
																	<option value="Atlantic/Cape_Verde" data-select2-id="49">(GMT-01:00) Cape Verde Is.</option>
																	<option value="Atlantic/Azores" data-select2-id="50">(GMT-01:00) Azores</option>
																	<option value="Europe/Belfast" data-select2-id="51">(GMT) Greenwich Mean Time : Belfast</option>
																	<option value="Europe/Dublin" data-select2-id="52">(GMT) Greenwich Mean Time : Dublin</option>
																	<option value="Europe/Lisbon" data-select2-id="53">(GMT) Greenwich Mean Time : Lisbon</option>
																	<option value="Europe/London" data-select2-id="54">(GMT) Greenwich Mean Time : London</option>
																	<option value="Africa/Abidjan" data-select2-id="55">(GMT) Monrovia, Reykjavik</option>
																	<option value="Europe/Amsterdam" data-select2-id="56">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
																	<option value="Europe/Belgrade" data-select2-id="57">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
																	<option value="Europe/Brussels" data-select2-id="58">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
																	<option value="Africa/Algiers" data-select2-id="59">(GMT+01:00) West Central Africa</option>
																	<option value="Africa/Windhoek" data-select2-id="60">(GMT+01:00) Windhoek</option>
																	<option value="Asia/Beirut" data-select2-id="61">(GMT+02:00) Beirut</option>
																	<option value="Africa/Cairo" data-select2-id="62">(GMT+02:00) Cairo</option>
																	<option value="Asia/Gaza" data-select2-id="63">(GMT+02:00) Gaza</option>
																	<option value="Africa/Blantyre" data-select2-id="64">(GMT+02:00) Harare, Pretoria</option>
																	<option value="Asia/Jerusalem" data-select2-id="65">(GMT+02:00) Jerusalem</option>
																	<option value="Europe/Minsk" data-select2-id="66">(GMT+02:00) Minsk</option>
																	<option value="Asia/Damascus" data-select2-id="67">(GMT+02:00) Syria</option>
																	<option value="Europe/Moscow" data-select2-id="68">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
																	<option value="Africa/Addis_Ababa" data-select2-id="69">(GMT+03:00) Nairobi</option>
																	<option value="Asia/Tehran" data-select2-id="70">(GMT+03:30) Tehran</option>
																	<option value="Asia/Dubai" data-select2-id="71">(GMT+04:00) Abu Dhabi, Muscat</option>
																	<option value="Asia/Yerevan" data-select2-id="72">(GMT+04:00) Yerevan</option>
																	<option value="Asia/Kabul" data-select2-id="73">(GMT+04:30) Kabul</option>
																	<option value="Asia/Yekaterinburg" data-select2-id="74">(GMT+05:00) Ekaterinburg</option>
																	<option value="Asia/Tashkent" data-select2-id="75">(GMT+05:00) Tashkent</option>
																	<option value="Asia/Kolkata" data-select2-id="76">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
																	<option value="Asia/Katmandu" data-select2-id="77">(GMT+05:45) Kathmandu</option>
																	<option value="Asia/Dhaka" data-select2-id="78">(GMT+06:00) Astana, Dhaka</option>
																	<option value="Asia/Novosibirsk" data-select2-id="79">(GMT+06:00) Novosibirsk</option>
																	<option value="Asia/Rangoon" data-select2-id="80">(GMT+06:30) Yangon (Rangoon)</option>
																	<option value="Asia/Bangkok" data-select2-id="81">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
																	<option value="Asia/Krasnoyarsk" data-select2-id="82">(GMT+07:00) Krasnoyarsk</option>
																	<option value="Asia/Hong_Kong" data-select2-id="83">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
																	<option value="Asia/Irkutsk" data-select2-id="84">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
																	<option value="Australia/Perth" data-select2-id="85">(GMT+08:00) Perth</option>
																	<option value="Australia/Eucla" data-select2-id="86">(GMT+08:45) Eucla</option>
																	<option value="Asia/Tokyo" data-select2-id="87">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
																	<option value="Asia/Seoul" data-select2-id="88">(GMT+09:00) Seoul</option>
																	<option value="Asia/Yakutsk" data-select2-id="89">(GMT+09:00) Yakutsk</option>
																	<option value="Australia/Adelaide" data-select2-id="90">(GMT+09:30) Adelaide</option>
																	<option value="Australia/Darwin" data-select2-id="91">(GMT+09:30) Darwin</option>
																	<option value="Australia/Brisbane" data-select2-id="92">(GMT+10:00) Brisbane</option>
																	<option value="Australia/Hobart" data-select2-id="93">(GMT+10:00) Hobart</option>
																	<option value="Asia/Vladivostok" data-select2-id="94">(GMT+10:00) Vladivostok</option>
																	<option value="Australia/Lord_Howe" data-select2-id="95">(GMT+10:30) Lord Howe Island</option>
																	<option value="Etc/GMT-11" data-select2-id="96">(GMT+11:00) Solomon Is., New Caledonia</option>
																	<option value="Asia/Magadan" data-select2-id="97">(GMT+11:00) Magadan</option>
																	<option value="Pacific/Norfolk" data-select2-id="98">(GMT+11:30) Norfolk Island</option>
																	<option value="Asia/Anadyr" data-select2-id="99">(GMT+12:00) Anadyr, Kamchatka</option>
																	<option value="Pacific/Auckland" data-select2-id="100">(GMT+12:00) Auckland, Wellington</option>
																	<option value="Etc/GMT-12" data-select2-id="101">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
																	<option value="Pacific/Chatham" data-select2-id="102">(GMT+12:45) Chatham Islands</option>
																	<option value="Pacific/Tongatapu" data-select2-id="103">(GMT+13:00) Nuku'alofa</option>
																	<option value="Pacific/Kiritimati" data-select2-id="104">(GMT+14:00) Kiritimati</option>
																</select>
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3 col">
																<label class="form-label">Verification</label>
															</div>
															<div class="col-md-9 col">
																<label class="ckbox mg-b-10-f">
																	<input type="checkbox"><span>Email</span></label>
																<label class="ckbox mg-b-10-f">
																	<input checked="" type="checkbox"><span>SMS</span></label>
																<label class="ckbox mg-b-10-f">
																	<input type="checkbox"><span>Phone</span></label>
															</div>
														</div>
													</div>
													<div class="mb-4 main-content-label">Secuirity Settings</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Login Verification</label>
															</div>
															<div class="col-md-9"> <a class="" href="#">Settup Verification</a> </div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3">
																<label class="form-label">Password Verification</label>
															</div>
															<div class="col-md-9">
																<label class="ckbox mg-b-10-f">
																	<input type="checkbox"><span>Require Personal Details</span></label>
															</div>
														</div>
													</div>
													<div class="form-group ">
														<div class="row row-sm">
															<div class="col-md-3"> </div>
															<div class="col-md-9"> <a class="mg-r-20" href="#">Deactivate Account</a> <a class="" href="#">Change Password</a> </div>
														</div>
													</div>
												</form>
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

		<!-- Internal Gallery js-->
		<script src="<?php echo base_url('public/assets/plugins/gallery/picturefill.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lightgallery.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/gallery/lightgallery-1.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-pager.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-autoplay.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-fullscreen.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-zoom.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-hash.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/gallery/lg-share.js'); ?>"></script>

	</body>
</html>