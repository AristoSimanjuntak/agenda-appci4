<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Account</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Account</li>
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
							<div class="col-xl-3 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<h3 class="main-content-label">My Account</h3>
									</div>
									<div class="card-body text-center item-user">
										<div class="profile-pic">
											<div class="profile-pic-img">
												<span class="bg-success dots" data-toggle="tooltip" data-placement="top" title="online"></span>
												<img src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>" class="rounded-circle" alt="user">
											</div>
											<a href="#" class="text-dark"><h5 class="mt-3 mb-0 font-weight-semibold">Sonia Taylor</h5></a>
										</div>
									</div>
									<ul class="item1-links nav nav-tabs  mb-0">
										<li class="nav-item">
											<a data-target="#orders" class="nav-link active" data-toggle="tab" role="tablist"><i class="ti-user icon1"></i> My orders</a>
										</li>
										<li class="nav-item">
											<a data-target="#myaddres" class="nav-link" data-toggle="tab" role="tablist"><i class="ti-save-alt icon1"></i> My Address</a>
										</li>
										<li class="nav-item">
											<a data-target="#trackorder" class="nav-link" data-toggle="tab" role="tablist"><i class="ti-truck icon1"></i> Track Order</a>
										</li>
										<li class="nav-item">
											<a data-target="#whishlist" class="nav-link" data-toggle="tab" role="tablist"><i class="ti-heart icon1"></i> Wishlist</a>
										</li>
										<li class="nav-item">
											<a data-target="#wallet" class="nav-link" data-toggle="tab" role="tablist"><i class="ti-wallet icon1"></i> Wallet</a>
										</li>
										<li class="nav-item">
											<a data-target="#profile"  class="nav-link" data-toggle="tab" role="tablist"><i class="ti-credit-card icon1"></i> My Profile</a>
										</li>
										<li class="nav-item">
											<a href="<?php echo  base_url('pages/signin'); ?>" class="nav-link"><i class="ti-power-off icon1"></i> Logout</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="tab-content" id="myTabContent">
											<div class="tab-pane fade show active" id="orders" role="tabpanel">
												<div class="d-flex mb-4">
													<label class="main-content-label my-auto">All orders</label>
													<h6 class="mb-0 ml-auto"><button class="btn btn-success  float-right"><i class=""></i>Invoice</button></h6>
												</div>
												<div class="table-responsive">
													<table class="table border text-md-nowrap text-nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Photo</th>
																<th>Product</th>
																<th>Qty</th>
																<th>Price</th>
																<th class="text-right">Total</th>
															</tr>
														</thead>
														<tbody>
															<tr class="border-bottom">
																<th scope="row">#34350</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/17.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Plastic Outdoor Chair</td>
																<td>1</td>
																<td>$200</td>
																<td class="text-right">$200</td>
															</tr>
															<tr class="border-bottom">
																<th scope="row">#34351</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/18.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Black Digital smart watch</td>
																<td>2</td>
																<td>$500</td>
																<td class="text-right">$500</td>
															</tr>
															<tr class="border-bottom">
																<th scope="row">#34352</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/15.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Women Pink Heels Sandal</td>
																<td>2</td>
																<td>$400</td>
																<td class="text-right">$400</td>
															</tr>
															<tr>
																<th scope="row">#34353</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/19.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Apple iPhone(Black, 128 GB)</td>
																<td>2</td>
																<td>$800</td>
																<td class="text-right">$800</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane fade" id="myaddres" role="tabpanel">
												<button type="button" class="btn btn-round btn-success mb-3"><i class="fe fe-plus-circle  mr-2"></i>Add New Address</button>
												<div class="row">
													<div class="col-lg-12 col-xl-6">
														<div class="card custom-card border mb-lg-0">
															<div class="card-header pb-3">
																<h6 class="mb-0"><i class="ti-home mr-2"></i>Default Address</h6>
															</div>
															<div class="card-body">
																<p>+91 08023310451</p>
																<p>3-15/10/403 Newark, Street no 5, Next To Pizza Hut,  Bangalore,  Karnataka, 560003, India.</p>
																<p class="mb-0">soniataylor344@example.com</p>
															</div>
															<div class="card-footer">
																<div class="row">
																	<div class="col-6">
																		<button type="button" class="btn btn-block btn-primary mb-1"><i class="ti ti-pencil"></i></button>
																	</div>
																	<div class="col-6">
																		<button type="button" class="btn btn-block btn-outline-primary mb-1"><i class="ti ti-trash"></i></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-lg-12 col-xl-6">
														<div class="card custom-card border mb-0">
															<div class="card-header pb-3">
																<h6 class="mb-0"><i class="ti-home mr-2"></i>Office Address</h6>
															</div>
															<div class="card-body">
																<p>+91 02228346362</p>
																<p>2-15A-12  , Steriling Chambers, S Radhakrishnana Marg, J B Nagar, Andheri (west), Mumbai , Maharashtra</p>
																<p class="mb-0">john54@gmail.com</p>
															</div>
															<div class="card-footer">
																<div class="row">
																	<div class="col-6">
																		<button type="button" class="btn btn-block btn-primary mb-1"><i class="ti ti-pencil"></i></button>
																	</div>
																	<div class="col-6">
																		<button type="button" class="btn btn-block btn-outline-primary mb-1"><i class="ti ti-trash"></i></button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="trackorder" role="tabpanel">
												<h6 class="mb-4">ORDER ID: <b>OD45345345435</b></h6>
												<div class="card">
													<div class="card-body row">
														<div class="col-sm-12 col-md-3 mb-3 mb-md-0"> <strong>Estimated Delivery time:</strong> <br>29 Dec 2020 </div>
														<div class="col-sm-12 col-md-3 mb-3 mb-md-0"> <strong>Shipping BY:</strong> <br> BLUEDART, | <i class="fa fa-phone"></i> +1598675986 </div>
														<div class="col-sm-12 col-md-3 mb-3 mb-md-"> <strong>Status:</strong> <br> Picked by the courier </div>
														<div class="col-sm-12 col-md-3"> <strong>Tracking #:</strong> <br> BD045903594656 </div>
													</div>
												</div>
												<div class="track mb-5">
													<div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span class="text d-none d-md-block">Order confirmed</span> </div>
													<div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text d-none d-md-block"> Picked by courier</span> </div>
													<div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text d-none d-md-block"> On the way </span> </div>
													<div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text d-none d-md-block">Ready for pickup</span> </div>
												</div>
												<br>
												<div class="row mt-3">
													<div class="col-xl-4">
														<figure class="itemside mb-3">
															<div class="aside"><img src="<?php echo  base_url('public/assets/img/pngs/19.png'); ?>" class="img-sm product-image border" alt="product-img"></div>
															<figcaption class="info align-self-center">
																<p class="title mb-1">Apple iPhone(Black, 128 GB) <br> 8GB RAM</p> <span class="text-muted">$950 </span>
															</figcaption>
														</figure>
													</div>
													<div class="col-xl-4">
														<figure class="itemside mb-3">
															<div class="aside"><img src="<?php echo  base_url('public/assets/img/pngs/16.png'); ?>" class="img-sm product-image border" alt="product-img"></div>
															<figcaption class="info align-self-center">
																<p class="title mb-1">Designer Hand Decorative <br> flower Pot </p><span class="text-muted">$850 </span>
															</figcaption>
														</figure>
													</div>
													<div class="col-xl-4">
														<figure class="itemside mb-3">
															<div class="aside"><img src="<?php echo  base_url('public/assets/img/pngs/14.png'); ?>" class="img-sm product-image border" alt="product-img"></div>
															<figcaption class="info align-self-center">
																<p class="title mb-1">Regular waterproof <br>(24 L) Backpack</p> <span class="text-muted">$650 </span>
															</figcaption>
														</figure>
													</div>
												</div>
											</div>
											<div class="tab-pane fade" id="whishlist" role="tabpanel">
												<div class="d-flex mb-4">
													<label class="main-content-label my-auto">Wishlist</label>
												</div>
												<div class="table-responsive">
													<table class="table border text-nowrap">
														<thead>
															<tr>
																<th>#</th>
																<th>Photo</th>
																<th>Product</th>
																<th>Qty</th>
																<th>Price</th>
																<th>Total</th>
																<th>Action</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<th scope="row">1</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/14.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Regular waterproof (24 L) Backpack</td>
																<td>
																    <div class="handle-counter" id="handleCounter"> 
																		<button class="counter-minus btn btn-light">-</button> 
																		   <input type="text" value="2" class=""> 
																		<button class="counter-plus btn btn-light">+</button> 
																	</div>
																</td>
																<td>$10</td>
																<td>$500</td>
																<td>
																	<button type="button" class="btn btn-primary mb-1 mr-1"><i class="ti-shopping-cart mr-2"></i>Move to cart</button>
																	<button type="button" class="btn btn-danger mb-1"><i class="ti-trash mr-2"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<th scope="row">2</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/16.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Designer Hand Decorative flower Pot</td>
																<td>
																    <div class="handle-counter" id="handleCounter1"> 
																		<button class="counter-minus btn btn-light">-</button> 
																		   <input type="text" value="2" class=""> 
																		<button class="counter-plus btn btn-light">+</button> 
																	</div>
																</td>
																<td>$20</td>
																<td>$200</td>
																<td>
																	<button type="button" class="btn btn-primary mb-1 mr-1"><i class="ti-shopping-cart mr-2"></i>Move to cart</button>
																	<button type="button" class="btn btn-danger mb-1"><i class="ti-trash mr-2"></i>Remove</button>
																</td>
															</tr>
															<tr>
																<th scope="row">3</th>
																<td><img src="<?php echo  base_url('public/assets/img/pngs/19.png'); ?>" class="img-sm product-image border" alt="product-img"></td>
																<td>Apple iPhone(Black, 128 GB)  8GB RAM</td>
																<td>
																    <div class="handle-counter" id="handleCounter2"> 
																		<button class="counter-minus btn btn-light">-</button> 
																		   <input type="text" value="2" class=""> 
																		<button class="counter-plus btn btn-light">+</button> 
																	</div>
																</td>
																<td>$30</td>
																<td>$300</td>
																<td>
																	<button type="button" class="btn btn-primary mb-1 mr-1"><i class="ti-shopping-cart mr-2"></i>Move to cart</button>
																	<button type="button" class="btn btn-danger mb-1"><i class="ti-trash mr-2"></i>Remove</button>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
											<div class="tab-pane fade" id="wallet" role="tabpanel">
												<div class="border p-4 text-center">
													<span class="text-uppercase tx-14 mt-4 text-muted">Available</span>
													<h1 class="my-3">$245465</h1>
													<a href="#" class="btn btn-primary"><i class="fe fe-plus mr-2"></i>Add Money</a>
												</div>
												<ul class="list-group tx-13">
													<li class="list-group-item border-top-0 pd-x-0 d-flex justify-content-between">
														<div class="d-flex">
															<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
															<span class="my-auto font-weight-semibold tx-15">Received</span>
														</div>
														<span class="font-weight-semibold my-auto text-success tx-15">+0.00004564</span>
													</li>
													<li class="list-group-item pd-x-0 d-flex justify-content-between">
														<div class="d-flex">
															<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-up-right text-primary"></i></span>
															<span class="my-auto font-weight-semibold tx-15">Sent</span>
														</div>
														<span class="font-weight-semibold my-auto text-danger tx-15">-0.03445436</span>
													</li>
													<li class="list-group-item pd-x-0 d-flex justify-content-between">
														<div class="d-flex">
															<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
															<span class="my-auto font-weight-semibold tx-15">Received</span>
														</div>
														<span class="font-weight-semibold my-auto text-success tx-15">+4.2543</span>
													</li>
													<li class="list-group-item pd-x-0 d-flex justify-content-between">
														<div class="d-flex">
															<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-up-right text-primary"></i></span>
															<span class="my-auto font-weight-semibold tx-15">Sent</span>
														</div>
														<span class="font-weight-semibold my-auto text-danger tx-15">+0.00255423</span>
													</li>
													<li class="list-group-item pd-x-0 d-flex justify-content-between">
														<div class="d-flex">
															<span class="crypto-icon bg-primary-transparent mr-3"><i class="fe fe-arrow-down-left text-primary"></i></span>
															<span class="my-auto font-weight-semibold tx-15">Received</span>
														</div>
														<span class="font-weight-semibold my-auto text-success tx-15">-0.02434525</span>
													</li>
												</ul>
											</div>
											<div class="tab-pane fade" id="profile" role="tabpanel">
												<div class="d-flex align-items-start pb-3 border-bottom"> <img src="<?php echo  base_url('public/assets/img/users/1.jpg'); ?>" class="img rounded-circle avatar-xl" alt="">
													<div class="pl-sm-4 pl-2" id="img-section"> <b>Profile Photo</b>
														<p class="mb-1">Accepted file type .png. Less than 1MB</p> <button class="btn button border btn-sm"><b>Upload</b></button>
													</div>
												</div>
												<div class="py-2">
													<div class="row py-2">
														<div class="col-md-6"> <label id="firstname">First Name</label> <input type="text" class="form-control" placeholder="Steve"> </div>
														<div class="col-md-6 pt-md-0 pt-3"> <label id="last-name">Last Name</label> <input type="text" class="form-control" placeholder="Smith"> </div>
													</div>
													<div class="row py-2">
														<div class="col-md-6"> <label id="emailid">Email Address</label> <input type="text" class="form-control" placeholder="steve_@email.com"> </div>
														<div class="col-md-6 pt-md-0 pt-3"> <label id="phoneno">Phone Number</label> <input type="tel" class="form-control" placeholder="+1 213-548-6015"> </div>
													</div>
													<div class="row py-2">
														<div class="col-md-6">
															<label for="country">Country</label>
															<select name="country" id="country" class="select2-no-search">
																<option value="india" selected>India</option>
																<option value="usa">USA</option>
																<option value="uk">UK</option>
																<option value="uae">UAE</option>
															</select>
														</div>
														<div class="col-md-6 pt-md-0 pt-3" id="lang"> <label for="language">Language</label>
															<div class="arrow">
																<select name="language" id="language" class="select2-no-search">
																	<option value="english" selected>English</option>
																	<option value="english_us">English (United States)</option>
																	<option value="enguk">English UK</option>
																	<option value="arab">Arabic</option>
																</select>
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

		<!-- Internal HandleCounter js -->
		<script src="<?php echo  base_url('public/assets/js/handleCounter.js'); ?>"></script>

	</body>
</html>