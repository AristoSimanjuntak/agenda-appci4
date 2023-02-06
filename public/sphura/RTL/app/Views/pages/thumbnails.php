<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Thumbnails</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Thumbnails</li>
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
								<div class="card custom-card" id="thumb">
									<div class="card-body ht-100p ">
										<div>
											<h6 class="main-content-label mb-1">Image Thumbnail</h6>
											<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="row row-sm">
													<div class="col-6 col-md-3">
														<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>">
													</div>
													<div class="col-6 col-md-3">
														<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/13.jpg'); ?>">
													</div>
													<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
														<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/14.jpg'); ?>">
													</div>
													<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
														<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/15.jpg'); ?>">
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images2"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm">
	<div class="col-6 col-md-3">
		<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>">
	</div>
	<div class="col-6 col-md-3">
		<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/13.jpg'); ?>">
	</div>
	<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
		<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/14.jpg'); ?>">
	</div>
	<div class="col-6 col-md-3 mg-t-10 mg-sm-t-0">
		<img alt="Responsive image" class="img-thumbnail" src="<?php echo base_url('public/assets/img/media/15.jpg'); ?>">
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="aligning">
								<div class="card-body">
									<div>
										<h6 class="main-content-label mb-1">Aligning Thumbnails</h6>
										<p class="text-muted card-sub-title">Align images with the helper float classes or text alignment classes.</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="clearfix">
											  <img src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" class="float-sm-left wd-100p wd-sm-200" alt="img">
											  <img src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" class="float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" alt="img">
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images3"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="clearfix">
  <img src="<?php echo base_url('public/assets/img/media/10.jpg'); ?>" class="float-sm-left wd-100p wd-sm-200" alt="img">
  <img src="<?php echo base_url('public/assets/img/media/11.jpg'); ?>" class="float-sm-right wd-100p wd-sm-200 mg-t-10 mg-sm-t-0" alt="img">
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="card custom-card" id="contentthumb">
								<div class="card-body ht-100p ">
									<div>
										<h6 class="main-content-label mb-1">Custom content Thumbnails</h6>
										<p class="text-muted card-sub-title">Using the images in custom content thumbnails</p>
									</div>
									<div class="text-wrap">
										<div class="example">
											<div class="row row-sm">
												<div class="col-sm-6">
													<div class="img-thumbnail">
														<a href="#">
															<img src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h5>Thumbnail label</h5>
															<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
															<div class="btn btn-list">
																<a href="#" class="btn ripple btn-primary" role="button">Button</a>
																<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
															</div>
														</div>
													</div>
												</div>
												<div class="col-sm-6">
													<div class="img-thumbnail">
														<a href="#">
															<img src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="thumb1" class="thumbimg">
														</a>
														<div class="caption">
															<h5>Thumbnail label</h5>
															<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
															<div class="btn btn-list">
																<a href="#" class="btn ripple btn-primary" role="button">Button</a>
																<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images5"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="row row-sm">
	<div class="col-xs-12 col-md-6">
		<div class="img-thumbnail">
			<a href="#">
				<img src="<?php echo base_url('public/assets/img/media/9.jpg'); ?>" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h5>Thumbnail label</h5>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn btn-list">
					<a href="#" class="btn ripple btn-primary" role="button">Button</a>
					<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-md-6">
		<div class="img-thumbnail">
			<a href="#">
				<img src="<?php echo base_url('public/assets/img/media/8.jpg'); ?>" alt="thumb1" class="thumbimg">
			</a>
			<div class="caption">
				<h5>Thumbnail label</h5>
				<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				<div class="btn btn-list">
					<a href="#" class="btn ripple btn-primary" role="button">Button</a>
					<a href="#" class="btn ripple btn-secondary" role="button">Button</a>
				</div>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
									</div>
								</div>
							</div>
							<div class="row row-sm">
								<div class="col-lg-6 col-md-12">
									<div class="card custom-card" id="responsive">
										<div class="card-body ht-100p ">
											<div>
												<h6 class="main-content-label mb-1">Responsive Thumbnails</h6>
												<p class="text-muted card-sub-title">Images in Bootstrap are made responsive with .img-fluid. max-width: 100%; and height: auto; are applied to the image so that it scales with the parent element.</p>
											</div>
											<div class="text-wrap">
												<div class="example">
													<div><img alt="Responsive image" class="img-fluid" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>"></div>
												</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images1"><pre><code class="language-markup"><script type="html-Spruha/script"><div><img alt="Responsive image" class="img-fluid" src="<?php echo base_url('public/assets/img/media/7.jpg'); ?>"></div>
</script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12">
									<div class="card custom-card" id="background">
										<div class="card-body ht-100p ">
											<div>
												<h6 class="main-content-label mb-1">Background Image</h6>
												<p class="text-muted card-sub-title">Make image as background to your content using the helper or utilities classes.</p>
											</div>
											<div class="text-wrap">
												<div class="example">
													<figure class="pos-relative mg-b-0">
														<img alt="Responsive image" class="img-fit-cover" src="<?php echo base_url('public/assets/img/media/12.jpg'); ?>">
														<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
															<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
															<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
														</figcaption>
													</figure>
												</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="images4"><pre><code class="language-markup"><script type="html-Spruha/script"><figure class="pos-relative mg-b-0">
	<img alt="Responsive image" class="img-fit-cover" src="<?php echo base_url('public/assets/img/media/12.jpg'); ?>">
	<figcaption class="pos-absolute a-0 pd-25 bg-black-5 tx-white-8">
		<h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
		<p class="mg-b-0">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
	</figcaption>
</figure></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#images4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
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
												<a class="nav-link" href="#responsive">Responsive Image</a>
												<a class="nav-link" href="#thumb">Image Thumbnail</a>
												<a class="nav-link" href="#aligning">Aligning Thumbnails</a>
												<a class="nav-link" href="#contentthumb">Custom content Thumbnails</a>
												<a class="nav-link" href="#background">Background Image</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body user-card text-center">
											<div class="main-img-user avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>">
											</div>
											<div class="mt-2">
												<h5 class="mb-1">Reynante</h5>
												<p class="mb-1 tx-inverse">Web Developer</p>
												<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
											</div>
											<a href="#" class="btn ripple btn-primary btn-sm mt-3">View Profile</a>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-body user-card text-center">
											<div class="main-img-user avatar-lg online text-center">
												<img alt="avatar" class="rounded-circle" src="<?php echo base_url('public/assets/img/users/4.jpg'); ?>">
											</div>
											<div class="mt-2">
												<h5 class="mb-1">Joyce Chua</h5>
												<p class="mb-1 tx-inverse">Team Leader</p>
												<span class="text-muted"><i class="far fa-check-circle text-success ml-1"></i>Verified</span>
											</div>
											<a href="#" class="btn ripple btn-secondary btn-sm mt-3">View Profile</a>
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