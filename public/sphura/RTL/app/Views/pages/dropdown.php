<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">DropDowns</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">DropDowns</li>
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
								<div class="card custom-card" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Example</h6>
											<p class="text-muted card-sub-title">Wrap the dropdown’s toggle (your button or link) and the dropdown menu within .dropdown, or another element that declares position relative. Dropdowns can be triggered from link or button elements to better fit your potential needs.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down mr-1"></i></button>
													<div  class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown1"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" type="button">Dropdown Menu <i class="fas fa-caret-down mr-1"></i></button>
		<div  class="dropdown-menu tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown1"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="up">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropup</h6>
											<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropup class to the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown dropup">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down mr-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown2"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown dropup">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Dropup Menu <i class="fas fa-caret-down mr-1"></i></button>
		<div class="dropdown-menu tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown2"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="right">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropright & Dropleft</h6>
											<p class="text-muted card-sub-title">Trigger dropdown menus above elements by adding dropright & dropleft class to the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-xs">
													<div class="col-sm-6 col-md-3">
														<div class="dropdown dropright">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right mr-1"></i></button>
															<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
															</div>
														</div>
													</div>
													<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
														<div class="dropdown dropleft">
															<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle" data-toggle="dropdown" id="dropleftMenuButton" type="button">Dropletft Menu</button>
															<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
																<a class="dropdown-item" href="#">Action</a>
																<a class="dropdown-item" href="#">Another action</a>
																<a class="dropdown-item" href="#">Something else here</a>
															</div>
														</div>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown3"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-xs">
		<div class="col-sm-6 col-md-3">
			<div class="dropdown dropright">
				<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-toggle="dropdown" id="droprightMenuButton" type="button">Dropright Menu<i class="fas fa-caret-right mr-1"></i></button>
				<div aria-labelledby="droprightMenuButton" class="dropdown-menu tx-13">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-3 mg-t-10 mg-sm-t-0">
			<div class="dropdown dropleft">
				<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-danger dropdown-toggle" data-toggle="dropdown" id="dropleftMenuButton" type="button">Dropright Menu</button>
				<div aria-labelledby="dropleftMenuButton" class="dropdown-menu tx-13">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown3"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="active">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Active Menu Item</h6>
											<p class="text-muted card-sub-title">Add active class to items in the dropdown to style them as active.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item active" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown4"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-warning dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
		<div class="dropdown-menu tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item active" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown4"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="disabled">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Disabled Menu Item</h6>
											<p class="text-muted card-sub-title">Add disabled class to items in the dropdown to style them as disabled.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
													<div class="dropdown-menu tx-13">
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item disabled" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown5"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-primary dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
		<div class="dropdown-menu tx-13">
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item disabled" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown5"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="header">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown Header</h6>
											<p class="text-muted card-sub-title">Add a header to label sections of actions in any dropdown menu.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="#">Action</a>
														<a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown6"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-secondary dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
		<div class="dropdown-menu tx-13">
			<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
			<a class="dropdown-item" href="#">Action</a>
			<a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown6"><i class="fa fa-clipboard"></i></div>
	</figure>
	<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="divider">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown Divider</h6>
											<p class="text-muted card-sub-title">Separate groups of related menu items with a divider.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="dropdown">
													<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
													<div class="dropdown-menu tx-13">
														<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
														<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
														<a class="dropdown-item" href="#">Something else here</a>
														<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
													</div>
												</div>
											</div>
	<!-- Prism Precode -->
	<figure class="highlight clip-widget" id="dropdown7"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="dropdown">
		<button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info dropdown-toggle" data-toggle="dropdown" type="button">Dropdown Menu<i class="fas fa-caret-down mr-1"></i></button>
		<div class="dropdown-menu tx-13">
			<h6 class="dropdown-header tx-uppercase tx-11 tx-bold tx-inverse tx-spacing-1">Dropdown header</h6>
			<a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
			<a class="dropdown-item" href="#">Something else here</a>
			<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated link</a>
		</div>
	</div></script></code></pre>
		<div class="clipboard-icon" data-clipboard-target="#dropdown7"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic DropDown</a>
												<a class="nav-link" href="#up">Dropup</a>
												<a class="nav-link" href="#right">Dropright & Dropleft </a>
												<a class="nav-link" href="#active">Active Menu Item</a>
												<a class="nav-link" href="#disabled">Disabled Menu Item</a>
												<a class="nav-link" href="#header">Dropdown Header</a>
												<a class="nav-link" href="#divider">Dropdown Divider</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="">
											<div class="p-3">
												<h6>HTML Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>35%</span>
													</div>
													<div class="progress">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-35p" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Wordpress Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>50%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-50p bg-secondary" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>Angular Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>40%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-40p bg-info" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>React Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>10%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-10p bg-danger" role="progressbar"></div>
													</div>
												</div>
											</div>
											<div class="p-3 border-top">
												<h6>PHP Project</h6>
												<div class="main-traffic-detail-item">
													<div>
														<span>Project status</span> <span>70%</span>
													</div>
													<div class="progress progress-bar-xs">
														<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-70p bg-success" role="progressbar"></div>
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

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

	</body>
</html>