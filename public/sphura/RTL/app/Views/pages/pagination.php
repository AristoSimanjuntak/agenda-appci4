<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Pagination</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Pagination</li>
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
								<div class="card custom-card overflow-hidden" id="basic">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Basic Pagination</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item"><a class="page-link" href="#">Previous</a></li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">Next</a></li>
													</ul>
												</nav>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination1"><pre><code class="language-markup"><script type="html-Spruha/script"><nav>
	<ul class="pagination">
		<li class="page-item"><a class="page-link" href="#">Previous</a></li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">Next</a></li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="icon">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pagination with Icons</h6>
											<p class="text-muted card-sub-title">Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item">
															<a class="page-link" href="#" aria-label="Previous">
																<span aria-hidden="true">&laquo;</span>
															</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#" aria-label="Next">
																<span aria-hidden="true">&raquo;</span>
															</a>
														</li>
													</ul>
												</nav>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination2"><pre><code class="language-markup"><script type="html-Spruha/script"><nav>
	<ul class="pagination">
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="disactive">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Disabled and active Pagination</h6>
											<p class="text-muted card-sub-title">Pagination links are customizable for different circumstances.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav>
													<ul class="pagination mb-0">
														<li class="page-item disabled">
														  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item active" aria-current="page">
														  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
														</li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
														  <a class="page-link" href="#">Next</a>
														</li>
													</ul>
												</nav>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination3"><pre><code class="language-markup"><script type="html-Spruha/script"><nav>
	<ul class="pagination">
		<li class="page-item disabled">
		  <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item active" aria-current="page">
		  <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
		</li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
		  <a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="sizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pagination Sizes</h6>
											<p class="text-muted card-sub-title">Fancy larger or smaller pagination Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes..</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-sm-6 col-md-6">
														<nav>
															<ul class="pagination pagination-lg mb-0">
																<li class="page-item active" aria-current="page">
																	<span class="page-link">1</span>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a></li>
																<li class="page-item"><a class="page-link" href="#">3</a></li>
															</ul>
														</nav>
													</div>
													<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
														<nav>
															<ul class="pagination pagination-sm mb-0">
																<li class="page-item active" aria-current="page">
																  <span class="page-link">1</span>
																</li>
																<li class="page-item"><a class="page-link" href="#">2</a></li>
																<li class="page-item"><a class="page-link" href="#">3</a></li>
															</ul>
														</nav>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination4"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm">
	<div class="col-sm-6 col-md-6">
		<nav>
			<ul class="pagination pagination-lg">
				<li class="page-item active" aria-current="page">
					<span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
	</div>
	<div class="col-sm-6 col-md-6 mg-t-10 mg-sm-t-0">
		<nav>
			<ul class="pagination pagination-sm">
				<li class="page-item active" aria-current="page">
				  <span class="page-link">1</span>
				</li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
			</ul>
		</nav>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="align">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Alignment Pagination</h6>
											<p class="text-muted card-sub-title">Change the alignment of pagination components.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<nav aria-label="Page navigation example">
													<ul class="pagination">
														<li class="page-item disabled">
															<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#">Next</a>
														</li>
													</ul>
												</nav>
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-center">
														<li class="page-item disabled">
															<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#">Next</a>
														</li>
													</ul>
												</nav>
												<nav aria-label="Page navigation example">
													<ul class="pagination justify-content-end mb-0">
														<li class="page-item disabled">
															<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
															<a class="page-link" href="#">Next</a>
														</li>
													</ul>
												</nav>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination5"><pre><code class="language-markup"><script type="html-Spruha/script"><nav aria-label="Page navigation example">
	<ul class="pagination">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-center">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav>
<nav aria-label="Page navigation example">
	<ul class="pagination justify-content-end">
		<li class="page-item disabled">
			<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
		</li>
		<li class="page-item"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item">
			<a class="page-link" href="#">Next</a>
		</li>
	</ul>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="circled">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Circled Pagination</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<ul class="pagination pagination-circled mb-0">
													<li class="page-item">
														<a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a>
													</li>
													<li class="page-item active">
														<a class="page-link" href="#">1</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">2</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#">3</a>
													</li>
													<li class="page-item">
														<a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a>
													</li>
												</ul>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination6"><pre><code class="language-markup"><script type="html-Spruha/script"><ul class="pagination pagination-circled">
	<li class="page-item">
		<a class="page-link" href="#"><i class="icon ion-ios-arrow-back"></i></a>
	</li>
	<li class="page-item active">
		<a class="page-link" href="#">1</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#">2</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#">3</a>
	</li>
	<li class="page-item">
		<a class="page-link" href="#"><i class="icon ion-ios-arrow-forward"></i></a>
	</li>
</ul></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#pagination6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="circled2">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Circled Pagination Style2</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation in circle.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<ul class="pagination pagination-circle mb-0 mr-lg-3">
														<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">4</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
													</ul>
												</div>
											</div>
	<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination7"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm">
	<ul class="pagination pagination-circle mb-0 ml-xl-3">
		<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
	</ul>
</div></script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card overflow-hidden" id="radius-pagination">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Radius Pagination</h6>
											<p class="text-muted card-sub-title">Below are basic pagination navigation in border-radius.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<ul class="pagination pagination-radius mb-0 mr-lg-3">
														<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
														<li class="page-item active"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item"><a class="page-link" href="#">4</a></li>
														<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
													</ul>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="pagination8"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm">
	<ul class="pagination pagination-radius mb-0 mr-lg-3">
		<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
		<li class="page-item active"><a class="page-link" href="#">1</a></li>
		<li class="page-item"><a class="page-link" href="#">2</a></li>
		<li class="page-item"><a class="page-link" href="#">3</a></li>
		<li class="page-item"><a class="page-link" href="#">4</a></li>
		<li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
	</ul>
</div>
</script></code></pre>
<div class="clipboard-icon" data-clipboard-target="#pagination8"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic Pagination</a>
												<a class="nav-link" href="#icon">Pagination with Icons</a>
												<a class="nav-link" href="#disactive">Disabled and active Pagination</a>
												<a class="nav-link" href="#sizes">Pagination Sizes</a>
												<a class="nav-link" href="#align">Alignment Pagination</a>
												<a class="nav-link" href="#circled">Circled Pagination</a>
												<a class="nav-link" href="#circled2">Circled Pagination2</a>
												<a class="nav-link" href="#radius-pagination">Radius Pagination</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card our-team">
										<div class="card-body">
											<div class="picture avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/6.jpg'); ?>">
											</div>
											<div class="text-center mt-3">
												<h5 class="pro-user-username text-dark mt-2 mb-0">Joyce Chua</h5>
												<p class="pro-user-desc text-muted mb-1">App Developer</p>
												<p class="user-info-rating">
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="fa fa-star text-warning"> </i></a>
													<a href="#"><i class="far fa-star text-warning"> </i></a>
												</p>
											</div>
											<div class="contact-info mb-0 text-center">
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-facebook-f"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-twitter"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-google"></i></a>
												<a href="#" class="contact-icon border text-primary"><i class="fab fa-dribbble"></i></a>
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

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js'); ?>"></script>

	</body>
</html>