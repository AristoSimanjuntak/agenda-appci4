<?= $this->include('layouts/verticalmenu/header'); ?>


	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Invoice</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Pages</a></li>
									<li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
										<div class="d-lg-flex">
											<h2 class="main-content-label mb-1">#INV0678</h2>
											<div class="ml-auto">
												<p class="mb-1"><span class="font-weight-bold">Invoice Date :</span> 01st November 2020</p>
												<p class="mb-0"><span class="font-weight-bold">Due Date :</span> 01 May  2020</p>
											</div>
										</div>
										<hr class="mg-b-40">
										<div class="row row-sm">
											<div class="col-lg-6">
												<p class="h3">Invoice From:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													yourdomain@example.com
												</address>
											</div>
											<div class="col-lg-6 text-right">
												<p class="h3">Invoice To:</p>
												<address>
													Street Address<br>
													State, City<br>
													Region, Postal Code<br>
													ypurdomain@example.com
												</address>
											</div>
										</div>
										<div class="table-responsive mg-t-40">
											<table class="table table-invoice table-bordered">
												<thead>
													<tr>
														<th class="wd-20p">Product</th>
														<th class="wd-40p">Description</th>
														<th class="tx-center">QNTY</th>
														<th class="tx-right">Unit</th>
														<th class="tx-right">Amount</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>Logo Creation</td>
														<td class="tx-12">Logo and business cards design</td>
														<td class="tx-center">2</td>
														<td class="tx-right">$60.00</td>
														<td class="tx-right">$120.00</td>
													</tr>
													<tr>
														<td>Online Store Design & Development</td>
														<td class="tx-12">Design/Development for all popular modern browsers</td>
														<td class="tx-center">3</td>
														<td class="tx-right">$80.00</td>
														<td class="tx-right">$240.00</td>
													</tr>
													<tr>
														<td>App Design</td>
														<td class="tx-12">Promotional mobile application</td>
														<td class="tx-center">1</td>
														<td class="tx-right">$40.00</td>
														<td class="tx-right">$40.00</td>
													</tr>
													<tr>
														<td class="valign-middle" colspan="2" rowspan="4">
															<div class="invoice-notes">
																<label class="main-content-label tx-13">Notes</label>
																<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
															</div><!-- invoice-notes -->
														</td>
														<td class="tx-right">Sub-Total</td>
														<td class="tx-right" colspan="2">$400.00</td>
													</tr>
													<tr>
														<td class="tx-right">Tax</td>
														<td class="tx-right" colspan="2">3%</td>
													</tr>
													<tr>
														<td class="tx-right">Discount</td>
														<td class="tx-right" colspan="2">10%</td>
													</tr>
													<tr>
														<td class="tx-right tx-uppercase tx-bold tx-inverse">Total Due</td>
														<td class="tx-right" colspan="2">
															<h4 class="tx-bold">$450.00</h4>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="card-footer text-right">
										<button type="button" class="btn ripple btn-primary mb-1"><i class="fe fe-credit-card mr-1"></i> Pay Invoice</button>
										<button type="button" class="btn ripple btn-secondary mb-1"><i class="fe fe-send mr-1"></i> Send Invoice</button>
										<button type="button" class="btn ripple btn-info mb-1" onclick="javascript:window.print();"><i class="fe fe-printer mr-1"></i> Print Invoice</button>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->
					

						<?= $this->include('layouts/verticalmenu/footer'); ?>

						<?= $this->include('layouts/verticalmenu/sidebar'); ?>

						<?= $this->include('layouts/verticalmenu/scripts'); ?>

	</body>
</html>