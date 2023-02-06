<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Flex</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Utilities</a></li>
									<li class="breadcrumb-item active" aria-current="page">Flex</li>
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
							<div class="col-xl-9 col-lg-12 col-md-12">
								<div class="card custom-card" id="enable">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Enable Flex</h6>
											<p class="text-muted  card-sub-title">Apply display utilities to create a flexbox container and transform direct children elements into flex items.</p>
										</div>
										<div class="d-flex pd-10 bg-light">
											I'm a flexbox container!
										</div>
									</div>
								</div>
								<div class="card custom-card" id="direc">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Direction</h6>
											<p class="text-muted  card-sub-title">Set the direction of flex items in a flex container with direction utilities.</p>
										</div>
										<div>
											<div class="d-flex flex-row bg-light mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row-reverse bg-light">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="justcont">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Justify Content</h6>
											<p class="text-muted  card-sub-title">Use justify-content utilities on flexbox containers to change the alignment of flex items on the main axis.</p>
										</div>
										<div>
											<div class="d-flex flex-row justify-content-start bg-light mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-end bg-light mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-center bg-light mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-between bg-light mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row justify-content-around bg-light">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="alignitems">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Align Items</h6>
											<p class="text-muted  card-sub-title">Use align-items utilities on flexbox containers to change the alignment of flex items on the cross axis.</p>
										</div>
										<div>
											<div class="d-flex flex-row align-items-start bg-light ht-100 mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-center bg-light ht-100 mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-end bg-light ht-100 mg-b-20">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
											<div class="d-flex flex-row align-items-stretch bg-light ht-100">
												<div class="pd-10 bg-gray-100">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400">
													Flex item 3
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="alignself">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Align Self</h6>
											<p class="text-muted  card-sub-title">Use align-self utilities on flexbox items to individually change their alignment on the cross axis.</p>
										</div>
										<div>
											<div class="d-flex flex-row bg-light ht-100 mg-b-20">
												<div class="pd-10 bg-gray-100 align-self-start">
													Flex item 1
												</div>
												<div class="pd-10 bg-gray-300 align-self-center">
													Flex item 2
												</div>
												<div class="pd-10 bg-gray-400 align-self-end">
													Flex item 3
												</div>
												<div class="pd-10 bg-gray-500 align-self-stretch">
													Flex item 4
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="fill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Fill</h6>
											<p class="text-muted  card-sub-title">Use the <code>.flex-fill</code> class on a series of sibling elements to force them into widths equal to their content.</p>
										</div>
										<div>
											<div class="d-flex bg-light">
												<div class="pd-10 bg-gray-100 flex-fill">
													Flex item with a lot of content
												</div>
												<div class="pd-10 bg-gray-300 flex-fill">
													Flex item
												</div>
												<div class="pd-10 bg-gray-400 flex-fill">
													Flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="grow">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Grow and Shrink</h6>
											<p class="text-muted  card-sub-title">Use <code>.flex-grow</code> utilities to toggle a flex item’s ability to grow to fill available space.</p>
										</div>
										<div>
											<div class="d-flex bg-light">
												<div class="pd-10 bg-gray-100 flex-grow-1">
													Flex item
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item
												</div>
												<div class="pd-10 bg-gray-400">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="automargin">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Auto Margins</h6>
											<p class="text-muted  card-sub-title">Flexbox can do some pretty awesome things when you mix flex alignments with auto margins.</p>
										</div>
										<div>
											<div class="d-flex bg-light">
												<div class="pd-10 bg-gray-100">
													Flex item
												</div>
												<div class="pd-10 bg-gray-300">
													Flex item
												</div>
												<div class="pd-10 bg-gray-400 mg-l-auto">
													Third flex item
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="card custom-card" id="order">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Order</h6>
											<p class="text-muted  card-sub-title">Change the visual order of specific flex items with a handful of order utilities.</p>
										</div>
										<div>
											<div class="d-flex bg-light">
												<div class="pd-10 bg-gray-100 order-3">
													First Item
												</div>
												<div class="pd-10 bg-gray-300 order-2">
													Second Item
												</div>
												<div class="pd-10 bg-gray-400 order-1">
													Third Item
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="card-body component-item">
											<nav class="nav flex-column">
												<a class="nav-link" href="#enable">Enable Flex</a>
												<a class="nav-link" href="#direc">Direction</a>
												<a class="nav-link" href="#justcont">Justify Content</a>
												<a class="nav-link" href="#alignitems">Align Items</a>
												<a class="nav-link" href="#alignself">Align Self</a>
												<a class="nav-link" href="#fill">Fill</a>
												<a class="nav-link" href="#grow">Grow and Shrink</a>
												<a class="nav-link" href="#automargin">Auto Margins</a>
												<a class="nav-link" href="#order">Order</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header custom-card-header">
											<h6 class="main-content-label mb-0">Project Status</h6>
										</div>
										<div class="">
											<div class="list d-flex align-items-center p-3">
												<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
												<div class="wrappe ml-3">
													<h6 class="mb-1">Project Planning</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center p-3 border-top">
												<span class="peity-donut" data-peity='{ "fill": ["#38d250", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1</span>
												<div class="wrappe ml-3">
													<h6 class="mb-1">Project Desiging</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-check-circle mr-2"></i>100% Completed</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center p-3 border-top">
												<span class="peity-donut" data-peity='{ "fill": ["#53caed", "#77778e33"], "innerRadius": 14, "radius": 20 }'>4/6</span>
												<div class="wrappe ml-3">
													<h6 class="mb-1">Project Development</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-spinner mr-2"></i>76% Progress</span>
														</div>
													</div>
												</div>
											</div>
											<div class="list d-flex align-items-center  p-3 border-top">
												<span class="peity-donut" data-peity='{ "fill": ["#f16d75", "#77778e33"], "innerRadius": 14, "radius": 20 }'>1/5</span>
												<div class="wrappe ml-3">
													<h6 class="mb-1">Project Testing</h6>
													<div class="d-flex justify-content-between align-items-center">
														<div class="d-flex align-items-center">
															<span class="mb-0 text-muted"><i class="fas fa-info-circle mr-2"></i>Waiting</span>
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

		<!-- Internal Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/widgets.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

	</body>
</html>