<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Tooltip</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Tooltip</li>
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
							<div class="col-xl-9 col-lg-12">
								<div class="card custom-card" id="default">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Default Tooltip</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Static Example
										</div>
										<div class="tooltip-static-demo mg-b-20">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Live Example
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn ripple btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>	
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30  mg-sm-t-0">
														<button class="btn ripple btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-info" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-danger" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tooltip1"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn ripple btn-primary" data-placement="top" data-toggle="tooltip" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3">
		<button class="btn ripple btn-secondary" data-placement="bottom" data-toggle="tooltip" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-info" data-placement="left" data-toggle="tooltip" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-danger" data-placement="right" data-toggle="tooltip" title="Tooltip on right" type="button">Hover me</button>
	</div>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tooltip1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>

								<div class="card custom-card" id="colored">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Tooltip</h6>
											<p class="text-muted card-sub-title">Colored tooltip. Four options are available: top, right, bottom, and left aligned.</p>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Static Example
										</div>
										<div class="tooltip-static-demo mg-b-20">
											<div class="row row-sm">
												<div class="col-sm-6 col-lg-3">
													<div class="tooltip tooltip-primary bs-tooltip-top" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the top
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
													<div class="tooltip tooltip-secondary bs-tooltip-bottom" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the bottom
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-info bs-tooltip-left" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the left
														</div>
													</div>
												</div>
												<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
													<div class="tooltip tooltip-danger bs-tooltip-right" role="tooltip">
														<div class="arrow"></div>
														<div class="tooltip-inner">
															Tooltip on the right
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="main-content-label main-content-label-sm mg-b-10">
											Live Example
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm tx-center">
													<div class="col-sm-6 col-lg-3">
														<button class="btn ripple btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
														<button class="btn ripple btn-secondary" data-placement="bottom" data-toggle="tooltip-secondary" title="Tooltip on bottom" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-info" data-placement="left" data-toggle="tooltip-info" title="Tooltip on left" type="button">Hover me</button>
													</div>
													<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
														<button class="btn ripple btn-danger" data-placement="right" data-toggle="tooltip-danger" title="Tooltip on right" type="button">Hover me</button>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="tooltip2"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm tx-center">
	<div class="col-sm-6 col-lg-3">
		<button class="btn ripple btn-primary" data-placement="top" data-toggle="tooltip-primary" title="Tooltip on top" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
		<button class="btn ripple btn-secondary" data-placement="bottom" data-toggle="tooltip-secondary" title="Tooltip on bottom" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-info" data-placement="left" data-toggle="tooltip-info" title="Tooltip on left" type="button">Hover me</button>
	</div>
	<div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
		<button class="btn ripple btn-danger" data-placement="right" data-toggle="tooltip-danger" title="Tooltip on right" type="button">Hover me</button>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#tooltip2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="card-body component-item">
											<nav class="nav flex-column">
												<a class="nav-link" href="#default">Default Tooltip</a>
												<a class="nav-link" href="#colored">Colored Tooltip</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-primary-transparent rounded-circle text-primary">
												<i class="fe fe-user"></i>
											</div>
											<p class="mb-1 text-muted">Total Users</p>
											<h3 class="mb-0">34,789</h3>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-secondary-transparent rounded-circle text-secondary">
												<i class="fe fe-trending-up"></i>
											</div>
											<p class="mb-1 text-muted">Total Sales</p>
											<h3 class="mb-0">98,674</h3>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body text-center">
											<div class="icon-service bg-info-transparent rounded-circle text-info">
												<i class="fe fe-dollar-sign"></i>
											</div>
											<p class="mb-1 text-muted">Total Profits</p>
											<h3 class="mb-0"><span>$</span>45,078</h3>
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

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

		<!-- Internal Tooltip js-->
		<script src="<?php echo base_url('public/assets/js/tooltip.js'); ?>"></script>

	</body>
</html>