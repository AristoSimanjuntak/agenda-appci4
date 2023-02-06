<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Cart</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Ecommerce</a></li>
									<li class="breadcrumb-item active" aria-current="page">Cart</li>
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
							<div class="col-lg-12 col-xl-9 col-md-12">
								<div class="card custom-card">
									<div class="card-header">
										<h5 class="mb-3 font-weight-bold tx-14">Shopping cart</h5>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table border table-hover text-nowrap table-shopping-cart mb-0">
												<thead class="text-muted">
													<tr class="small text-uppercase">
														<th scope="col">Product</th>
														<th scope="col"></th>
														<th scope="col" class="wd-120">Quantity</th>
														<th scope="col" class="wd-120">Price</th>
														<th scope="col" class="text-center " >Action</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/14.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">College Bag</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger small mb-0 mt-1 tx-12">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"> <span class="price font-weight-bold tx-16">$26.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/15.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Party Wear Shoes</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Pink</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success small mb-0 mt-1 tx-12">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter1">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price font-weight-bold tx-16">$23.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/19.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Samsung A2</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger small mb-0 mt-1 tx-12">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter2">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="3" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"> <span class="price font-weight-bold tx-16">$38.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/16.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Flower pot</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Green and Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success small mb-0 mt-1 tx-12">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter3">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="3" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price font-weight-bold tx-16">$56.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/17.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Chair</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Green and Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-success small mb-0 mt-1 tx-12">In stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter4">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="4" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price font-weight-bold tx-16">$24.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
													<tr>
														<td>
															<div class="media">
																<div class="card-aside-img">
																	<img src="<?php echo base_url('public/assets/img/pngs/18.png'); ?>" alt="img" class="img-sm">
																</div>
																<div class="media-body my-auto">
																	<div class="card-item-desc mt-0">
																		<h6 class="font-weight-semibold mt-0 text-uppercase">Watch</h6>
																		<dl class="card-item-desc-1">
																		  <dt>Color: </dt>
																		  <dd>Green and Black color</dd>
																		</dl>
																	</div>
																</div>
															</div>
														</td>
														<td>
															<p class="text-danger small mb-0 mt-1 tx-12">Out of stock</p>
														</td>
														<td>
															<div class="handle-counter" id="handleCounter5">
																<button class="counter-minus btn btn-light">-</button>
																<input type="text" value="2" class="">
																<button class="counter-plus btn btn-light">+</button>
															</div>
														</td>
														<td>
															<div class="price-wrap"><span class="price font-weight-bold tx-16">$34.00</span></div>
														</td>
														<td class="text-center">
															<a href="" class="remove-list text-danger tx-20 remove-button" data-abc="true"><i class="fa fa-trash"></i></a>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 col-xl-3 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<form>
											<div class="form-group mb-0"> <label>Have coupon?</label>
												<div class="input-group"> <input type="text" class="form-control coupon" placeholder="Coupon code"> <span class="input-group-append"> <button class="btn btn-primary btn-apply coupon">Apply</button> </span> </div>
											</div>
										</form>
									</div>
								</div>
								<div class="card custom-card cart-details">
									<div class="card-body">
										<h5 class="mb-3 font-weight-bold tx-14">PRICE DETAIL</h5>
										<dl class="dlist-align">
											<dt class="">ITEMS 3</dt>
											<dd class="text-right mr-auto">$ 262.00</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Discount:</dt>
											<dd class="text-right text-danger mr-auto">- $20.00</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Total price:</dt>
											<dd class="text-right mr-auto">$252.97</dd>
										</dl>
										<dl class="dlist-align">
											<dt>Delivery:</dt>
											<dd class="text-right text-success mr-auto">Free</dd>
										</dl>
										<hr>
										<dl class="dlist-align">
											<dt>Total:</dt>
											<dd class="text-right  mr-auto"><strong>$252.97</strong></dd>
										</dl>
										<div class="step-footer">
											<button data-direction="next" class="step-btn btn btn-success btn-block">Continue shopping</button>
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

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Check-all-mail js-->
		<script src="<?php echo base_url('public/assets/js/check-all-mail.js'); ?>"></script>

		<!-- Internal HandleCounter js -->
		<script src="<?php echo base_url('public/assets/js/handleCounter.js'); ?>"></script>

	</body>
</html>