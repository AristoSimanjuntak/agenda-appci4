<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Owl-carousel css-->
		<link href="<?php echo base_url('public/assets/plugins/owl-carousel/owl.carousel.css'); ?>" rel="stylesheet" />

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

		<!-- Internal DataTables css-->
		<link href="<?php echo base_url('public/assets/plugins/datatable/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/datatable/responsivebootstrap4.min.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/plugins/datatable/fileexport/buttons.bootstrap4.min.css'); ?>" rel="stylesheet" />

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order ">
											<label class="main-content-label mb-3 pt-1">New Users</label>
											<h2 class="text-left card-item-icon card-icon">
											<i class="mdi mdi-account-multiple icon-size float-right text-primary"></i><span class="font-weight-bold">3,672</span></h2>
											<p class="mb-0 mt-4 text-muted">Monthly users<span class="float-left">50%</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Total tax</label>
											<h2 class="text-left"><i class="mdi mdi-cube icon-size float-right text-primary"></i><span class="font-weight-bold">$89,265</span></h2>
											<p class="mb-0 mt-4 text-muted">Monthly Income<span class="float-left">$7,893</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Total Profit</label>
											<h2 class="text-left"><i class="icon-size mdi mdi-poll-box   float-right text-primary"></i><span class="font-weight-bold">$23,987</span></h2>
											<p class="mb-0 mt-4 text-muted">Monthly Profit<span class="float-left">$4,678</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
								<div class="card custom-card">
									<div class="card-body">
										<div class="card-order">
											<label class="main-content-label mb-3 pt-1">Total Sales</label>
											<h2 class="text-left"><i class="mdi mdi-cart icon-size float-right text-primary"></i><span class="font-weight-bold">46,486</span></h2>
											<p class="mb-0 mt-4 text-muted">Monthly Sales<span class="float-left">3,756</span></p>
										</div>
									</div>
								</div>
							</div>
							<!-- COL END -->
						</div>
						<!-- End Row -->

						<!-- row opened -->
						<div class="row row-sm">
							<div class="col-xxl-6 col-xl-12 col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label my-auto pt-2">Revenue Overview</label>
										<span class="d-block tx-12 mb-0 mt-1 text-muted">An Overview. Revenue is the total amount of income generated by the sale of goods or services related to the company's primary operations.</span>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
										   <canvas id="revenuechart" class=""></canvas>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-0">
										<label class="main-content-label mb-2 pt-1">Recent Orders</label>
										<p class="tx-12 mb-0 text-muted">An order is an investor's instructions to a broker or brokerage firm to purchase or sell</p>
									</div>
									<div class="card-body sales-product-info ot-0 pt-0 pb-0">
										<div id="recentorders" class="ht-150"></div>
										<div class="row sales-product-infomation pb-0 mb-0 mx-auto wd-100p">
											<div class="col-md-6 col justify-content-center text-center">
												<p class="mb-0 d-flex justify-content-center "><span class="legend bg-primary brround"></span>Delivered</p>
												<h3 class="mb-1 font-weight-bold">5238</h3>
												<div class="d-flex justify-content-center ">
													<p class="text-muted ">Last 6 months</p>
												</div>
											</div>
											<div class="col-md-6 col text-center float-right">
												<p class="mb-0 d-flex justify-content-center "><span class="legend bg-light brround"></span>Cancelled</p>
													<h3 class="mb-1 font-weight-bold">3467</h3>
												<div class="d-flex justify-content-center ">
													<p class="text-muted">Last 6 months</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-md-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header pb-0 border-bottom-0">
										<label class="main-content-label mb-2 pt-1">Tickets</label>
										<p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve</p>
									</div>
									<div class="card-body">
										<ul class="visitor mb-0 d-block users-images list-unstyled list-unstyled-border">
											<li class="media d-flex mb-3 mt-0 pt-0">
												<img class="ml-3 rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>" alt="avatar">
												<div class="media-body mb-1">
													<div class="float-left"><small>10-9-2018</small></div>
													<h5 class="media-title tx-15 mb-0">Vanessa</h5>
													<span class="text-muted">sed do eiusmod </span>
												</div>
											</li>
											<li class="media d-flex mb-3">
												<img class="ml-3 rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>" alt="avatar">
												<div class="media-body mb-1">
													<div class="float-left"><small>15-9-2018</small></div>
													<h5 class="media-title tx-15 mb-0"> Rutherford</h5>
													<small class="text-muted">sed do eiusmod </small>
												</div>
											</li>
											<li class="media d-flex mb-3">
												<img class="ml-3 rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/img/users/7.jpg'); ?>" alt="avatar">
												<div class="media-body mb-1">
													<div class="float-left"><small>17-9-2018</small></div>
													<h5 class="media-title tx-15 mb-0">Elizabeth </h5>
													<small class="text-muted">sed do eiusmod </small>
												</div>
											</li>
											<li class="media d-flex mb-3">
												<img class="ml-3 rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>" alt="avatar">
												<div class="media-body mb-1">
													<div class="float-left"><small>19-9-2018</small></div>
													<h5 class="media-title tx-15 mb-0">Anthony</h5>
													<small class="text-muted">sed do eiusmod </small>
												</div>
											</li>
											<li class="media d-flex mb-0">
												<img class="ml-3 rounded-circle avatar avatar-md" src="<?php echo base_url('public/assets/img/users/9.jpg'); ?>" alt="avatar">
												<div class="media-body mb-1">
													<div class="float-left"><small>19-9-2018</small></div>
													<h5 class="media-title tx-15 mb-0">Anthony</h5>
													<small class="text-muted">sed do eiusmod </small>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- row closed -->

						<!-- row opened -->
						<div class="row row-sm">
							<div class="col-xxl-3 col-xl-6 col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-1">
										<label class="main-content-label mb-2 pt-1">Sales Activity</label>
										<p class="tx-12 mb-0 text-muted">Sales activities are the tactics that salespeople use to achieve their goals and objective</p>
									</div>
									<div class="product-timeline card-body pt-3 mt-1">
										<ul class="timeline-1 mb-0">
											<li class="mt-0"> <i class="ti-pie-chart product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Products</span> <a href="#" class="float-left tx-11 text-muted">3 days ago</a>
												<p class="mb-0 text-muted tx-12">1.3k New Products</p>
											</li>
											<li class="mt-0"> <i class="mdi mdi-cart-outline product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Total Sales</span> <a href="#" class="float-left tx-11 text-muted">35 mins ago</a>
												<p class="mb-0 text-muted tx-12">1k New Sales</p>
											</li>
											<li class="mt-0"> <i class="ti-bar-chart-alt product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Revenue</span> <a href="#" class="float-left tx-11 text-muted">50 mins ago</a>
												<p class="mb-0 text-muted tx-12">23.5K New Revenue</p>
											</li>
											<li class="mt-0"> <i class="ti-wallet product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Toatal Profit</span> <a href="#" class="float-left tx-11 text-muted">1 hour ago</a>
												<p class="mb-0 text-muted tx-12">3k New profit</p>
											</li>
											<li class="mt-0 mb-0"><i class="si si-eye product-icon"></i> <span class="font-weight-semibold mb-4 tx-14 ">Customer Visits</span> <a href="#" class="float-left tx-11 text-muted">1 day ago</a>
												<p class="mb-0 text-muted tx-12">15% increased</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xxl-3 col-xl-6 col-md-12 col-lg-6">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 pb-1">
										<label class="main-content-label mb-2 pt-1">Top products</label>
										<p class="tx-12 mb-0 text-muted">Top Trending Products to Sell Online At Your Ecommerce & Dropshipping Store.</p>
									</div>
									<div class="card-body pt-0">
										<ul class="top-selling-products pb-0 mb-0 pr-0">
											<li class="product-item">
												<div class="product-img"><img src="<?php echo base_url('public/assets/img/pngs/14.png'); ?>" alt=""></div>
												<div class="product-info">
													<div class="product-name">College Bag</div>
													<div class="price">Fashion</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$990.00</div>
													<div class="items-sold">10 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="<?php echo base_url('public/assets/img/pngs/18.png'); ?>" alt=""></div>
												<div class="product-info">
													<div class="product-name">Smartwatch</div>
													<div class="price">Electronics</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$990.00</div>
													<div class="items-sold">10 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="<?php echo base_url('public/assets/img/pngs/17.png'); ?>" alt=""></div>
												<div class="product-info">
													<div class="product-name">Chair</div>
													<div class="price">Furniture</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$990.00</div>
													<div class="items-sold">10 Sold</div>
												</div>
											</li>
											<li class="product-item">
												<div class="product-img"><img src="<?php echo base_url('public/assets/img/pngs/16.png'); ?>" alt=""></div>
												<div class="product-info">
													<div class="product-name">Flowers Pot</div>
													<div class="price">Gardening</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$990.00</div>
													<div class="items-sold">10 Sold</div>
												</div>
											</li>
											<li class="product-item pb-0">
												<div class="product-img"><img src="<?php echo base_url('public/assets/img/pngs/19.png'); ?>" alt=""></div>
												<div class="product-info">
													<div class="product-name">iPhone Mobile</div>
													<div class="price">Electronics</div>
												</div>
												<div class="product-amount">
													<div class="product-price">$990.00</div>
													<div class="items-sold">10 Sold</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-xxl-6 col-xl-12 col-md-12 col-lg-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<label class="main-content-label mb-2 pt-1">Country Wise Sales</label>
										<p class="tx-12 mb-0 text-muted">​The global ecommerce sales in 2020 is expected to reach $4.453 trillion this marks an increase of <b>22.5 %</b> percent from the previous year as the global ecommerce market.</p>

									</div>
									<div class="card-body pt-0 pb-3 row">
										<div class="col-xl-8">
											<div id="world-map-markers" class="ht-300"></div>
										</div>
										<div class="col-xl-4 col-md-12 mt-xl-4">
											<div class="mb-4 pt-2">
												<h5 class="mb-2 d-block">
													<span class="fs-14">Brazil</span>
													<span class="float-left fs-14">80%</span>
												</h5>
												<div class="progress ht-4 progress-md h-2">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-primary ht-4 wd-80p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block">
													<span class="fs-14">Russia</span>
													<span class="float-left fs-14">72%</span>
												</h5>
												<div class="progress ht-4 progress-md">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-primary ht-4 wd-70p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block">
													<span class="fs-14">Poland</span>
													<span class="float-left fs-14">67%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-primary ht-4 wd-60p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block">
													<span class="fs-14">Canada</span>
													<span class="float-left fs-14">53%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated progress-bar-striped bg-primary ht-4 wd-50p"></div>
												</div>
											</div>
											<div class="mb-4">
												<h5 class="mb-2 d-block">
													<span class="fs-14">India</span>
													<span class="float-left fs-14">75%</span>
												</h5>
												<div class="progress progress-md  ht-4">
													<div class="progress-bar progress-bar-animated  progress-bar-striped bg-primary ht-4 wd-40p"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xl-8">
								<div class="card custom-card">
									<div class="card-header border-bottom-0 d-flex">
										<div>
											<label class="main-content-label mb-2 pt-1">Products Details</label>
											<p class="tx-12 mb-3 text-muted">The details displayed often include size, color, price, shipping information, reviews, and other relevant information customers may want to know before making a purchase</p>
										</div>
										<div class="card-options float-right">
											<a href="" class="mr-0 text-default" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="fe fe-more-vertical tx-17 float-right"></span> </a>
											<ul class="dropdown-menu dropdown-menu-right" role="menu">
												<li><a href="#"><i class="fe fe-eye mr-2"></i>View</a></li>
												<li><a href="#"><i class="fe fe-plus-circle mr-2"></i>Add</a></li>
												<li><a href="#"><i class="fe fe-trash-2 mr-2"></i>Remove</a></li>
												<li><a href="#"><i class="fe fe-download-cloud mr-2"></i>Download</a></li>
												<li><a href="#"><i class="fe fe-settings mr-2"></i>More</a></li>
											</ul>
										</div>
									</div>
									<div class="card-body pt-0">
										<div class="table-responsive">
											<table class="table table-1 table-vcenter border mb-0 text-nowrap">
												<thead>
													<tr>
														<th>Product ID</th>
														<th>Product</th>
														<th>Product Cost</th>
														<th>Total</th>
														<th>Status</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>#C234</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/14.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Regular waterproof (24 L) Backpack</span></td>
														<td><b>$14,500</b></td>
														<td>2,977</td>
														<td><span class="badge badge-primary">Available</span></td>
													</tr>
													<tr>
														<td>#C389</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/15.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Women Pink Heels Sandal</span></td>
														<td><b>$30,000</b></td>
														<td>678</td>
														<td><span class="badge badge-primary">Limited</span></td>
													</tr>
													<tr>
														<td>#C936</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/16.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Designer Hand Decorative flower Pot</span></td>
														<td><b>$13,200</b></td>
														<td>4,922</td>
														<td><span class="badge badge-primary">Avilable</span></td>
													</tr>
													<tr>
														<td>#C493</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/17.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Plastic Outdoor Chair</span></td>
														<td><b>$15,100</b></td>
														<td>1,234</td>
														<td><span class="badge badge-primary">Limited</span></td>
													</tr>
													<tr>
														<td>#C729</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/18.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Blck Digital smart watch</span></td>
														<td><b>$5,987</b></td>
														<td>4,789</td>
														<td><span class="badge badge-primary op-5">No Stock</span></td>
													</tr>
													<tr>
														<td>#C529</td>
														<td class="d-flex my-auto"><img src="<?php echo base_url('public/assets/img/pngs/19.png'); ?>" alt="" class="ht-40 wd-40 ml-3"><span class="my-auto">Apple iPhone(Black, 128 GB)</span></td>
														<td><b>$11,987</b></td>
														<td>938</td>
														<td><span class="badge badge-primary">Limited</span></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-12 col-sm-12">
								<div class="card custom-card">
									<div class="card-header border-bottom-0">
										<div>
											<label class="main-content-label mb-2 pt-1">Order Activity</label>
											<p class="tx-12 mb-3 text-muted">Ordering Activity. means an activity that is authorized to place orders, or establish blanket purchase agreements.</p>
										</div>
									</div>
									<div class="card-body pt-1">
										<div class="border">
											<div class="list-group projects-list pt-0 pb-0 pl-0 pr-0">
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-0">
													<div class="d-flex w-100 justify-content-between">
														<h6 class="mb-1 font-weight-semibold">Order Picking</h6>
														<h6 class="mb-0 font-weight-bold tx-15">3,876</h6> </div>
													<div class="d-flex w-100 justify-content-between"> <span class="text-muted"><i class="fe fe-arrow-down text-success "></i> 03% last month</span> <span class="text-muted tx-11">5 days ago</span> </div>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
													<div class="d-flex w-100 justify-content-between">
														<h6 class="mb-1 font-weight-semibold">Storage</h6>
														<h6 class="mb-0 font-weight-bold tx-15">2,178</h6> </div>
													<div class="d-flex w-100 justify-content-between"> <span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 16% last month</span> <span class="text-muted tx-11">2 days ago</span> </div>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
													<div class="d-flex w-100 justify-content-between">
														<h6 class="mb-1 font-weight-semibold ">Shipping</h6>
														<h6 class="mb-0 font-weight-bold tx-15">1,367</h6> </div>
													<div class="d-flex w-100 justify-content-between"> <span class="text-muted"><i class="fe fe-arrow-up text-success"></i> 06% last month</span> <span class="text-muted tx-11">1 days ago</span> </div>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-bottom-0  border-left-0 border-right-0 border-top">
													<div class="d-flex w-100 justify-content-between">
														<h6 class="mb-1 font-weight-semibold ">Receiving</h6>
														<h6 class="mb-0 font-weight-bold tx-15">678</h6> </div>
													<div class="d-flex w-100 justify-content-between"> <span class="text-muted"><i class="fe fe-arrow-down text-danger "></i> 25% last month</span> <span class="text-muted tx-11">10 days ago</span> </div>
												</a>
												<a href="#" class="list-group-item list-group-item-action flex-column align-items-start border-left-0 border-right-0 border-top">
													<div class="d-flex w-100 justify-content-between">
														<h6 class="mb-1 font-weight-semibold">Other</h6>
														<h6 class="mb-0 font-weight-bold tx-15">5,678</h6> </div>
													<div class="d-flex w-100 justify-content-between"> <span class="text-muted"><i class="fe fe-arrow-up text-success "></i> 16% last month</span> <span class="text-muted tx-11">5 days ago</span> </div>
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
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>
			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Internal Apexchart js-->
		<script src="<?php echo base_url('public/assets/js/apexcharts.js'); ?>"></script>

		<!-- Internal Polyfills js-->
		<script src="<?php echo base_url('public/assets/plugins/polyfill/polyfill.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/polyfill/classList.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/polyfill/polyfill_mdn.js'); ?>"></script>

		<!-- Internal Dashboard js-->
		<script src="<?php echo base_url('public/assets/js/ecommerce-dashboard.js'); ?>"></script>

		<!-- Internal Jvectormap js-->
		<script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/jvectormap/gdp-data.js'); ?>"></script>

	</body>
</html>