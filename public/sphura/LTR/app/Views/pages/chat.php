<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Lightslider css-->
		<link href="<?php echo  base_url('public/assets/plugins/lightslider/css/lightslider.min.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Chat</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Chat</li>
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
							<div class="col-sm-12 col-md-12 col-lg-5 col-xl-4">
								<div class="card custom-card">
									<div class="main-content-app pt-0">
										<div class="main-content-left main-content-left-chat">

											<div class="card-body">
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Search ...">
													<span class="input-group-append">
														<button class="btn ripple btn-primary" type="button">Search</button>
													</span>
												</div>
											</div>
											<nav class="nav main-nav-line main-nav-line-chat card-body">
												<a class="nav-link active" data-toggle="tab" href="#ChatList">Recent Chat</a>
												<a class="nav-link" data-toggle="tab" href="#ChatCalls">Calls</a>
												<a class="nav-link" data-toggle="tab" href="#ChatContacts">Contacts</a>
											</nav>
											<div class="tab-content main-chat-list">
												<div class="tab-pane active" id="ChatList">
													<div class="main-chat-list tab-pane">
														<a class="media new" href="#">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"> <span>2</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Socrates Itumay</span> <span>2 hours</span>
																</div>
																<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/6.jpg'); ?>"> <span>1</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Dexter dela Cruz</span> <span>3 hours</span>
																</div>
																<p>Maec enas tempus, tellus eget con dime ntum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media selected" href="#">
															<div class="main-img-user online"><img alt="" src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Reynante Labares</span> <span>10 hours</span>
																</div>
																<p>Nam quam nunc, bl ndit vel aecenas et ante tincid</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/11.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Joyce Chua</span> <span>2 days</span>
																</div>
																<p>Ma ecenas tempus, tellus eget con dimen tum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Rolando Paloso</span> <span>2 days</span>
																</div>
																<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"> <span>1</span>
															</div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Ariana Monino</span> <span>3 days</span>
																</div>
																<p>Maece nas tempus, tellus eget cond imentum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Maricel Villalon</span> <span>4 days</span>
																</div>
																<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/12.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Maryjane Pechon</span> <span>5 days</span>
																</div>
																<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Lovely Dela Cruz</span> <span>5 days</span>
																</div>
																<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/10.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Daniel Padilla</span> <span>5 days</span>
																</div>
																<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>John Pratts</span> <span>6 days</span>
																</div>
																<p>Mae cenas tempus, tellus eget co ndimen tum rhoncus, sem quam</p>
															</div>
														</a>
														<a class="media new" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Raymart Santiago</span> <span>6 days</span>
																</div>
																<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
															</div>
														</a>
														<a class="media border-bottom-0" href="#">
															<div class="main-img-user"><img alt="" src="<?php echo  base_url('public/assets/img/users/6.jpg'); ?>"></div>
															<div class="media-body">
																<div class="media-contact-name">
																	<span>Samuel Lerin</span> <span>7 days</span>
																</div>
																<p>Nam quam nunc, blandit vel aecenas et ante tincid</p>
															</div>
														</a>
													</div><!-- main-chat-list -->
												</div><!-- main-chat-list -->
												<div class="tab-pane" id="ChatCalls">
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Amelia Taylor</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">Today, 05:30 AM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Grace Russell</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">Today, 12:15 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Joanne Miller</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">Yesterday, 02:15 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-incoming"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/12.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Kimberly Nolan</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-down-left text-danger mr-2"></i>
																	<p class="text-muted tx-13">Yesterday, 05:39 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/6.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Andrea Mackay</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-down-left text-danger mr-2"></i>
																	<p class="text-muted tx-13">29 june 2020, 03:21 AM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-danger fe fe-phone-call"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Samantha Lewis</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">1 july 2020, 10:23 AM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-incoming"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Victoria Kerr</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-down-left text-danger mr-2"></i>
																	<p class="text-muted tx-13">1 july 2020, 4:45 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-danger fe fe-phone-call"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Socrates Itumay</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">2 july 2020, 11:14 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Rebecca Johnston</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-down-left text-danger mr-2"></i>
																	<p class="text-muted tx-13">3 july 2020, 06:14 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-danger fe fe-phone-incoming"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Madeleine James</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Socrates Itumay</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Raymart Santiago</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<i class="fe fe-arrow-up-right text-success mr-2"></i>
																	<p class="text-muted tx-13">4 july 2020, 5:12 PM</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-success fe fe-phone-outgoing"></i>
														</div>
													</a>
												</div>
												<div class="tab-pane" id="ChatContacts">
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Lillian Ross</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Home</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Socrates Itumay</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Mobile</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Elizabeth Scott</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Office</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Cameron Watson</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Home</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Christopher Arnold</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Mobile</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Justin Bailey</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Office</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Richard Berry</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Home</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Abraham Clark</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Mobile</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Anderson</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Office</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Clarkson Gray</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Home</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/12.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Henderson Dyer</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Mobile</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
													<a href="#" class="d-flex align-items-center media">
														<div class="mb-0 mr-2">
															<div class="main-img-user online">
																<img alt="" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"> <span>2</span>
															</div>
														</div>
													   <div class="align-items-center justify-content-between">
															<div class="media-body ml-2">
																<div class="media-contact-name">
																	 <span>Marshall Fisher</span>
																	 <span></span>
																</div>
																<div class="d-flex align-items-center">
																	<p class="text-muted tx-13">Office</p>
																</div>
															</div>
														</div>
														<div class="ml-auto">
															<i class="contact-status text-primary fe fe-message-square  mr-2"></i>
															<i class="contact-status text-success fe fe-phone-call mr-2"></i>
															<i class="contact-status text-danger fe fe-video"></i>
														</div>
													</a>
												</div>
											</div>
											<!-- main-chat-list -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-7 col-xl-8">
								<div class="card custom-card">
									<div class="main-content-app pt-0">
										<div class="main-content-body main-content-body-chat">
											<div class="main-chat-header pt-3">
												<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"></div>
												<div class="main-chat-msg-name">
													<h6>Sonia Taylor</h6>
													<span class="dot-label bg-success"></span><small class="mr-3">online</small>
												</div>
												<nav class="nav">
													<a class="nav-link" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i>
													</a>
													<div class="dropdown-menu  border dropdown-menu-right shadow">
														<a class="dropdown-item" href="#"><i class="fe fe-phone-call mr-1"></i> Phone Call</a>
														<a class="dropdown-item" href="#"><i class="fe fe-video mr-1"></i> Video Call</a>
														<a class="dropdown-item" href="#"><i class="fe fe-user-plus mr-1"></i> Add Contact</a>
														<a class="dropdown-item" href="#"><i class="fe fe-trash-2 mr-1"></i> Delete</a>
													</div>
													<a class="nav-link" data-toggle="tooltip" href="" title="Phone Call"><i class="fe fe-phone-call"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Video Call"><i class="fe fe-video"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Add Contact"><i class="fe fe-user-plus"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Delete"><i class="fe fe-trash-2"></i></a>
												</nav>
											</div><!-- main-chat-header -->
											<div class="main-chat-body" id="ChatBody">
												<div class="content-inner">
													<label class="main-chat-time"><span>3 days ago</span></label>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nulla consequat massa quis enim. Donec pede justo, fringilla vel...
															</div>
															<div class="main-msg-wrapper">
																rhoncus ut, imperdiet a, venenatis vitae, justo...
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Nullam dictum felis eu pede mollis pretium
															</div>
															<div>
																<span>11:22 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div><label class="main-chat-time"><span>Yesterday</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
															</div>
															<div>
																<span>9:32 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
															</div>
															<div class="main-msg-wrapper">
																Nullam dictum felis eu pede mollis pretium
															</div>
															<div>
																<span>9:48 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div><label class="main-chat-time"><span>Today</span></label>
													<div class="media">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Maecenas tempus, tellus eget condimentum rhoncus
															</div>
															<div class="pd-0">
																<img alt="avatar" class="wd-150 mb-1" src="<?php echo  base_url('public/assets/img/media/3.jpg'); ?>">
																<img alt="avatar" class="wd-150 mb-1" src="<?php echo  base_url('public/assets/img/media/4.jpg'); ?>">
																<img alt="avatar" class="wd-150 mb-1" src="<?php echo  base_url('public/assets/img/media/5.jpg'); ?>">
															</div>
															<div>
																<span>10:12 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
													<div class="media flex-row-reverse">
														<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"></div>
														<div class="media-body">
															<div class="main-msg-wrapper">
																Maecenas tempus, tellus eget condimentum rhoncus
															</div>
															<div class="main-msg-wrapper">
																Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus.
															</div>
															<div>
																<span>09:40 am</span> <a href=""><i class="icon ion-android-more-horizontal"></i></a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="main-chat-footer">
												<nav class="nav">
													<a class="nav-link" data-toggle="tooltip" href="" title="Add Photo"><i class="fe fe-image"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Attach a File"><i class="fe fe-paperclip"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Emoji"><i class="far fa-smile"></i></a>
													<a class="nav-link" data-toggle="tooltip" href="" title="Record Voice"><i class="fe fe-mic"></i></a>
												</nav>
												<input class="form-control" placeholder="Type your message here..." type="text">
												<a class="main-msg-send" href=""><i class="far fa-paper-plane"></i></a>
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

		<!-- Internal Check-all-mail js-->
		<script src="<?php echo  base_url('public/assets/js/check-all-mail.js'); ?>"></script>

		<!-- Internal Lightslider js-->
		<script src="<?php echo  base_url('public/assets/plugins/lightslider/js/lightslider.min.js'); ?>"></script>

		<!-- Internal Chat js-->
		<script src="<?php echo  base_url('public/assets/js/chat.js'); ?>"></script>

	</body>
</html>