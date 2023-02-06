<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Breadcrumbs</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Breadcrumbs</li>
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
							<div class="col-xl-9 col-lg-12">
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Styling</h6>
											<p class="text-muted card-sub-title">The example below is the basic styling of the breadcrumb from Bootstrap.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb mg-b-0">
														<li class="breadcrumb-item">
															<a href="#">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="#">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb1"><pre><code class="language-markup"><script type="html-Spruha/script"><nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#">Library</a>
			</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#breadcrumb1"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="custom">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Styling</h6>
											<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb used by this template.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb breadcrumb-style1 mg-b-0">
														<li class="breadcrumb-item">
															<a href="#">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="#">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb2"><pre><code class="language-markup"><script type="html-Spruha/script"><nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-style1">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#">Library</a>
			</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#breadcrumb2"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="divider">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Custom Divider</h6>
											<p class="text-muted card-sub-title">The example below is the custom styling of the breadcrumb using different divider.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="breadcrumb">
													<ol class="breadcrumb breadcrumb-style2 mb-0">
														<li class="breadcrumb-item">
															<a href="#">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="#">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb3"><pre><code class="language-markup"><script type="html-Spruha/script"><nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-style2">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#">Library</a>
			</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#breadcrumb3"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="center">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Breadcrumbs-Center align</h6>
											<p class="text-muted card-sub-title">The example below is the center aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-3">
													<ol class="breadcrumb breadcrumb-style1 mb-0">
														<li class="breadcrumb-item">
															<a href="#">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="#">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb4"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="breadcrumb-3">
		<ol class="breadcrumb breadcrumb-style1">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#">Library</a>
			</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#breadcrumb4"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="right">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Breadcrumbs-Right align</h6>
											<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-4">
													<ol class="breadcrumb breadcrumb-style1 mb-0">
														<li class="breadcrumb-item">
															<a href="#">Home</a>
														</li>
														<li class="breadcrumb-item">
															<a href="#">Library</a>
														</li>
														<li class="breadcrumb-item active">Data</li>
													</ol>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb5"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="breadcrumb-4">
		<ol class="breadcrumb breadcrumb-style1">
			<li class="breadcrumb-item">
				<a href="#">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="#">Library</a>
			</li>
			<li class="breadcrumb-item active">Data</li>
		</ol>
	</nav></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#breadcrumb5"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="style1">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Breadcrumb style</h6>
											<p class="text-muted card-sub-title">The example below is the Right aligment of the breadcrumb</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav class="breadcrumb-5">
													<div class="breadcrumb flat">
														<a href="#" class="active"><span class="badge badge-light mr-3">1</span><span class="breadcrumbitem">Browse</span></a>
														<a href="#"><span class="badge badge-light mr-3">2</span><span class="breadcrumbitem">Compare</span></a>
														<a href="#"><span class="badge badge-light mr-3">3</span><span class="breadcrumbitem">Order</span></a>
														<a href="#"><span class="badge badge-light mr-3">4</span><span class="breadcrumbitem">Checkout</span></a>
													</div>
												</nav>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="breadcrumb6"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="breadcrumb-5">
		<div class="breadcrumb flat">
			<a href="#" class="active">Browse</a>
			<a href="#">Compare</a>
			<a href="#">Order</a>
			<a href="#">Checkout</a>
		</div>
	</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#breadcrumb6"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic Breadcrumbs</a>
												<a class="nav-link" href="#custom">Custom Breadcrumbs</a>
												<a class="nav-link" href="#divider">Custom Divider</a>
												<a class="nav-link" href="#center">Breadcrumbs-Center align</a>
												<a class="nav-link" href="#right">Breadcrumbs-Right align</a>
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

	</body>
</html>