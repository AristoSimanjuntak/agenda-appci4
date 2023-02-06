<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Contacts</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Contacts</li>
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
							<div class="col-sm-12 col-md-5 col-xl-4">
								<div class="card custom-card overflow-hidden">
									<div class="">
										<div class="main-content-app main-content-contacts pt-0">
											<div class="card main-content-left main-content-left-contacts">
												<div class="tab-menu-heading">
													<div class="tabs-menu1 ">
														<!-- Tabs -->
														<ul class="nav panel-tabs main-nav-line main-nav-line-chat d-flex pl-3 ">
															<li><a href="#all-contact" class="nav-link active mr-3" data-toggle="tab">All Contacts</a></li>
															<li><a href="#fav-contact" class="nav-link" data-toggle="tab">Favorites</a></li>
														</ul>
													</div>
												</div>
												<div class="panel-body tabs-menu-body p-0">
													<div class="tab-content">
														<div class="tab-pane active" id="all-contact">
															<div class="main-contacts-list" id="mainContactList">
																<div class="main-contact-label">
																	A
																</div>
																<div class="main-contact-item selected">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/2.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Abigail Johnson</h6><span class="phone">+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Archie Cantones</h6><span>archie@cantones.com</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-avatar online">
																		A
																	</div>
																	<div class="main-contact-body">
																		<h6>Allan Rey Palban</h6><span>allanr@palban.com</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-avatar bg-secondary">
																		A
																	</div>
																	<div class="main-contact-body">
																		<h6>Aileen Mante</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	B
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Brandon Dilao</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Britney Labares</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-avatar bg-danger">
																		B
																	</div>
																	<div class="main-contact-body">
																		<h6>Brateyley Cruz</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	C
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/6.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Camille Audrey</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Christian Lerio</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Christopher Segovia</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	D
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Darius Clayton</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/10.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Dyanne Aceron</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/11.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Divina Gracia</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
															</div>
														</div>
														<div class="tab-pane" id="fav-contact">
															<div class="main-contacts-list" id="mainContactList1">
																<div class="main-contact-label">
																	A
																</div>
																<div class="main-contact-item selected">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Anna Sthesia</h6><span class="phone">+1-534-567-456</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Anna Mull</h6><span>annamul@gmail.com</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/4.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>AlFredo</h6><span>alfredo@gmail.com</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/11.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Aileen Mante</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	B
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/5.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Bernadette</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/9.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Barry Mundy</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-avatar bg-danger">
																		B
																	</div>
																	<div class="main-contact-body">
																		<h6>Barb Akew</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	C
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/12.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Charles</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Christopher</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/3.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Connor</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-label">
																	D
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Deirdre</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/8.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Dorothy</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
																<div class="main-contact-item">
																	<div class="main-img-user online"><img alt="avatar" src="<?php echo  base_url('public/assets/img/users/7.jpg'); ?>"></div>
																	<div class="main-contact-body">
																		<h6>Divina Gracia</h6><span>+1-234-567-890</span>
																	</div>
																	<a class="main-contact-star" href="">
																		<i class="fe fe-star mr-1 text-warning"></i>
																		<i class="fe fe-edit-2 mr-1"></i>
																		<i class="fe fe-more-vertical"></i>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-7 col-xl-8">
								<div class="card custom-card">
									<div class="">
										<div class="main-content-body main-content-body-contacts">
											<div class="main-contact-info-header pt-3">
												<div class="media">
													<div class="main-img-user">
														<img alt="avatar" src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>"> <a href=""><i class="fe fe-camera"></i></a>
													</div>
													<div class="media-body">
														<h4>Sonia Taylor</h4>
														<p>Web Designer</p>
														<nav class="contact-info">
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Call"><i class="fe fe-phone"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Video"><i class="fe fe-video"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="message"><i class="fe fe-message-square"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Add to Group"><i class="fe fe-user-plus"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="Block"><i class="fe fe-slash"></i></a>
														</nav>
													</div>
												</div>
												<div class="main-contact-action btn-list pt-3 pr-3">
													<a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Edit Profile"><i class="fe fe-edit"></i></a>
													<a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="Delete Profile"><i class="fe fe-trash-2"></i></a>
												</div>
											</div>
											<div class="main-contact-info-body">
												<div>
													<h6>Biography</h6>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
												</div>
												<div class="media-list">
													<div class="media">
														<div class="media-body">
															<div>
																<label>Work</label> <span class="tx-medium">+1 (234) 567 8901</span>
															</div>
															<div>
																<label>Personal</label> <span class="tx-medium">+1 (498) 021 0090</span>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="media-body">
															<div>
																<label>Gmail Account</label> <span class="tx-medium">sonia.taylor@gmail.com</span>
															</div>
															<div>
																<label>Other Account</label> <span class="tx-medium">me@bootstrapdash.me</span>
															</div>
														</div>
													</div>
													<div class="media">
														<div class="media-body">
															<div>
																<label>Current Address</label> <span class="tx-medium">012 Dashboard Apartments, San Francisco, California 13245</span>
															</div>
														</div>
													</div>
													<div class="media mb-0">
														<div class="media-body">
															<div>
																<label>Call History</label> <span class="tx-medium">Duration of last call: 2m 32sec</span>
															</div>
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

					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Contact js-->
		<script src="<?php echo  base_url('public/assets/js/contacts.js'); ?>"></script>

	</body>
</html>