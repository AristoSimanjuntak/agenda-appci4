<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Progress</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Progress</li>
								</ol>
							</div>
							<div class="d-flex">
								<div class="justify-content-center">
									<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
									   Import<i class="fe fe-download ml-2"></i>
									</button>
									<button type="button" class="btn btn-white btn-icon-text my-2 ml-2">
									  <i class="fe fg-filter mr-2"></i> Filter
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
											<h6 class="main-content-label mb-1">Basic Progress</h6>
											<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary wd-35p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info wd-50p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar bg-danger wd-65p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar bg-success wd-75p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress1"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary wd-35p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info wd-50p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar bg-danger wd-65p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar bg-success wd-75p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="striped">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Striped Progress</h6>
											<p class="text-muted card-sub-title">A basic progress in all different colors.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-striped wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar progress-bar-striped bg-secondary wd-35p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped bg-info wd-50p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-20">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped bg-success wd-75p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress2"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-striped wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar progress-bar-striped bg-secondary wd-35p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped bg-info wd-50p" role="progressbar"></div>
</div>
<div class="progress mg-b-20">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65" class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class="progress-bar progress-bar-striped bg-success wd-75p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="sizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Progress Sizes</h6>
											<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
										</div>
										<span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress ht-2 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar ht-2 wd-25p" role="progressbar"></div>
												</div>
												<div class="progress ht-2 mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary ht-2 wd-35p" role="progressbar"></div>
												</div>
												<div class="progress ht-2">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info ht-2 wd-50p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress3"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar ht-2 wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary ht-2 wd-35p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info ht-2 wd-50p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-xs wd-35p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-xs wd-50p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress4"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-xs wd-35p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-xs wd-50p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-sm wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-sm wd-35p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-sm wd-50p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress5"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-sm wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-sm wd-35p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-sm wd-50p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary wd-35p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info wd-50p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress6"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary wd-35p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info wd-50p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
										<span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-lg wd-25p" role="progressbar"></div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-lg wd-35p" role="progressbar"></div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-lg wd-50p" role="progressbar"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress7"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-lg wd-25p" role="progressbar"></div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="35" class="progress-bar bg-secondary progress-bar-lg wd-35p" role="progressbar"></div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar bg-info progress-bar-lg wd-50p" role="progressbar"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="label">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Progress Label</h6>
											<p class="text-muted card-sub-title">A basic progress in different sizes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-lg wd-50p" role="progressbar">
														50%
													</div>
												</div>
												<div class="progress mg-b-10">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-secondary wd-60p" role="progressbar">
														60%
													</div>
												</div>
												<div class="progress">
													<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" class="progress-bar progress-bar-lg bg-info wd-95p" role="progressbar">
														95%
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress8"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-lg wd-50p" role="progressbar">
		50%
	</div>
</div>
<div class="progress mg-b-10">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" class="progress-bar progress-bar-lg bg-secondary wd-60p" role="progressbar">
		60%
	</div>
</div>
<div class="progress">
	<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" class="progress-bar progress-bar-lg bg-info wd-95p" role="progressbar">
		95%
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>

								<div class="card custom-card" id="animate">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Animated Bars</h6>
											<p class="text-muted card-sub-title">The striped gradient can also be animated. Add <code>.progress-bar-animated</code> to <code>.progress-bar</code> to animate the stripes right to left via CSS3 animations.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
												  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
												</div>
												<div class="progress mg-b-10">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
												</div>
												<div class="progress mg-b-10">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
												</div>
												<div class="progress mg-b-10">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
												</div>
												<div class="progress mg-b-10">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
												</div>
												<div class="progress">
												  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress10"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
</div>
<div class="progress mg-b-10">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
</div>
<div class="progress mg-b-10">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 55%"></div>
</div>
<div class="progress mg-b-10">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
</div>
<div class="progress mg-b-10">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 85%"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress10"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="multiple">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Multiple Bars</h6>
											<p class="text-muted card-sub-title">Include multiple progress bars in a progress component if you need.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="progress mg-b-10">
												  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												  <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress mg-b-10">
												  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<div class="progress">
												  <div class="progress-bar bg-teal" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
												  <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="progress9"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="progress mg-b-10">
  <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-secondary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress mg-b-10">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
</div>
<div class="progress">
  <div class="progress-bar bg-teal" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-dark" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#progress9"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic Progress</a>
												<a class="nav-link" href="#striped">Striped Progress</a>
												<a class="nav-link" href="#sizes">Progress Sizes</a>
												<a class="nav-link" href="#label">Progress Label</a>
												<a class="nav-link" href="#multiple">Multiple Bars</a>
												<a class="nav-link" href="#animate">Animated Bars</a>
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