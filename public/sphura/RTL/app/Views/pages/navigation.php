<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Lightslider css-->
		<link href="<?php echo base_url('public/assets/plugins/lightslider/css/lightslider.min-rtl.css'); ?>" rel="stylesheet">

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Navigation</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Navigation</li>
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
											<h6 class="main-content-label mb-1">Basic Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic navigation</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light">
													<nav class="nav main-nav flex-column flex-md-row">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav1"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="nav main-nav flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="vertical">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a basic navigation in a vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light">
													<nav class="nav main-nav-column">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav2"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="nav main-nav-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="pill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Pills Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light">
													<nav class="nav nav-pills flex-column flex-md-row">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav3"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="nav nav-pills flex-column flex-md-row">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="verticallpill">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Vertical Pills Navigation</h6>
											<p class="text-muted card-sub-title">Below is an example of a pill navigation in vertical mode</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light">
													<nav class="nav nav-pills flex-column">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav4"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="nav nav-pills flex-column">
	<a class="nav-link active" href="#">Home</a>
	<a class="nav-link" href="#">About</a>
	<a class="nav-link" href="#">Pages</a>
	<a class="nav-link" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="hori">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Horizontal Alignment</h6>
											<p class="text-muted card-sub-title">A navigation with center and right in which left is the default.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light mb-3">
													<nav class="nav main-nav flex-column flex-md-row justify-content-center">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-light">
													<nav class="nav main-nav flex-column flex-md-row justify-content-end">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav5"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="p-3 bg-light mb-3">
	<nav class="nav main-nav flex-column flex-md-row justify-content-center">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-light">
	<nav class="nav main-nav flex-column flex-md-row justify-content-end">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="colored">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Colored Nav Variations</h6>
											<p class="text-muted card-sub-title">A navigation with colored nav that wrapped the navigation.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-primary mb-3">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
												<div class="p-3 bg-secondary">
													<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
														<a class="nav-link active" href="#">Home</a>
														<a class="nav-link" href="#">About</a>
														<a class="nav-link" href="#">Pages</a>
														<a class="nav-link" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav6"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="p-3 bg-primary mb-3">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div>
<div class="p-3 bg-secondary">
	<nav class="nav main-nav main-nav-colored-bg main-nav-dark flex-column flex-md-row">
		<a class="nav-link active" href="#">Home</a>
		<a class="nav-link" href="#">About</a>
		<a class="nav-link" href="#">Pages</a>
		<a class="nav-link" href="#">Custom</a>
	</nav>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="underline">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Underline Navigation</h6>
											<p class="text-muted card-sub-title">Below is a type of navigation that have a line at the bottom of active link.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="p-3 bg-light">
													<nav class="nav main-nav-line flex-column flex-md-row">
														<a class="nav-link active" data-toggle="tab" href="#">Home</a>
														<a class="nav-link" data-toggle="tab" href="#">About</a>
														<a class="nav-link" data-toggle="tab" href="#">Pages</a>
														<a class="nav-link" data-toggle="tab" href="#">Custom</a>
													</nav>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav7"><pre><code class="language-markup"><script type="html-Spruha/script"><nav class="nav main-nav-line flex-column flex-md-row">
	<a class="nav-link active" data-toggle="tab" href="#">Home</a>
	<a class="nav-link" data-toggle="tab" href="#">About</a>
	<a class="nav-link" data-toggle="tab" href="#">Pages</a>
	<a class="nav-link" data-toggle="tab" href="#">Custom</a>
</nav></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav7"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="tab">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Simple Tab Navigation</h6>
											<p class="text-muted card-sub-title">Below is a tab navigation that have only few links.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="border">
													<div class="bg-gray-300 nav-bg">
														<nav class="nav nav-tabs">
															<a class="nav-link active" data-toggle="tab" href="#tabCont1">Home</a>
															<a class="nav-link" data-toggle="tab" href="#tabCont2">About</a>
															<a class="nav-link" data-toggle="tab" href="#tabCont3">Contact</a>
														</nav>
													</div>
													<div class="card-body tab-content">
														<div class="tab-pane active show" id="tabCont1">
															Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
														</div>
														<div class="tab-pane" id="tabCont2">
															At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
														</div>
														<div class="tab-pane" id="tabCont3">
															 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav8"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="tab-content">
	<div class="tab-pane active show" id="tabCont1">
		Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
	</div>
	<div class="tab-pane" id="tabCont2">
		At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
	</div>
	<div class="tab-pane" id="tabCont3">
		 Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="complex">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Complex Tab Navigation</h6>
											<p class="text-muted card-sub-title">Below is a tab navigation that have many links using lightslider.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="border">
													<div class="card-header-tab">
														<div class="main-nav-tabs p-0">
															<div id="navComplex">
																<div class="tab-item">
																	<a class="tab-link active" href="#mainTab1">Dashboard</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab2">Apps</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab3">Maps</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab4">Tables</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab5">UI Elements</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab6">Forms</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab7">Charts</a>
																</div>
																<div class="tab-item">
																	<a class="tab-link" href="#mainTab8">Pages</a>
																</div>
															</div>
														</div>
													</div>
													<div class="card-body tab-content">
														<div class="main-tab-content">
															<div class="main-tab-pane active" id="mainTab1">
																<h6 class="tx-gray-900">Dashboard</h6>
																<span>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</span>
															</div>
															<div class="main-tab-pane" id="mainTab2">
																<h6 class="tx-gray-900">Apps</h6>
																<span>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best</span>
															</div>
															<div class="main-tab-pane" id="mainTab3">
																<h6 class="tx-gray-900">Maps</h6>
																<span>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</span>
															</div>
															<div class="main-tab-pane" id="mainTab4">
																<h6 class="tx-gray-900">Tables</h6>
																<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem..</span>
															</div>
															<div class="main-tab-pane" id="mainTab5">
																<h6 class="tx-gray-900">UI Elements</h6>
																<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </span>
															</div>
															<div class="main-tab-pane" id="mainTab6">
																<h6 class="tx-gray-900">Forms</h6>
																<span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain..</span>
															</div>
															<div class="main-tab-pane" id="mainTab7">
																<h6 class="tx-gray-900">Charts</h6>
																<span> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
															</div>
															<div class="main-tab-pane" id="mainTab8">
																<h6 class="tx-gray-900">Pages</h6>
																<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
															</div>
														</div>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="nav9"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="border">
	<div class="card-header-tab">
		<div class="main-nav-tabs">
			<div id="navComplex">
				<div class="tab-item">
					<a class="tab-link active" href="#mainTab1">Dashboard</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab2">Apps</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab3">Maps</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab4">Tables</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab5">UI Elements</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab6">Forms</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab7">Charts</a>
				</div>
				<div class="tab-item">
					<a class="tab-link" href="#mainTab8">Pages</a>
				</div>
			</div>
		</div>
	</div>
	<div class="card-body tab-content">
		<div class="main-tab-content">
			<div class="main-tab-pane active" id="mainTab1">
				<h6 class="tx-gray-900">Dashboard</h6>
				<span>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est</span>
			</div>
			<div class="main-tab-pane" id="mainTab2">
				<h6 class="tx-gray-900">Apps</h6>
				<span>These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best</span>
			</div>
			<div class="main-tab-pane" id="mainTab3">
				<h6 class="tx-gray-900">Maps</h6>
				<span>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</span>
			</div>
			<div class="main-tab-pane" id="mainTab4">
				<h6 class="tx-gray-900">Tables</h6>
				<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem..</span>
			</div>
			<div class="main-tab-pane" id="mainTab5">
				<h6 class="tx-gray-900">UI Elements</h6>
				<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </span>
			</div>
			<div class="main-tab-pane" id="mainTab6">
				<h6 class="tx-gray-900">Forms</h6>
				<span>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain..</span>
			</div>
			<div class="main-tab-pane" id="mainTab7">
				<h6 class="tx-gray-900">Charts</h6>
				<span> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			</div>
			<div class="main-tab-pane" id="mainTab8">
				<h6 class="tx-gray-900">Pages</h6>
				<span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</span>
			</div>
		</div>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#nav9"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#basic">Basic Navigation</a>
												<a class="nav-link" href="#vertical">Vertical Navigation</a>
												<a class="nav-link" href="#pill">Pills Navigation</a>
												<a class="nav-link" href="#verticallpill">Vertical Pills Navigation</a>
												<a class="nav-link" href="#hori">Horizontal Alignment</a>
												<a class="nav-link" href="#colored">Colored Nav Variations</a>
												<a class="nav-link" href="#underline">Underline Navigation</a>
												<a class="nav-link" href="#tab">Simple Tab Navigation</a>
												<a class="nav-link" href="#complex">Complex Tab Navigation</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header custom-card-header border-bottom-0">
											<h6 class="main-content-label mb-0">Sales Summary</h6>
										</div>
										<div class="card-body">
											<div class="border">
												<div class="main-list-item p-3">
													<div>
														<h6>Total Revenue</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$15,300</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Tax</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$1,625</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Income</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>$55,897</h5>
													</div>
												</div>
												<div class="main-list-item p-3 border-top">
													<div>
														<h6>Total Loss</h6><span>weekly profit</span>
													</div>
													<div>
														<h5>20%</h5>
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
			<!-- End Sidebar -->

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal lightslider js-->
		<script src="<?php echo base_url('public/assets/plugins/lightslider/js/lightslider.min.js'); ?>"></script>

		<!-- Internal navigation js-->
		<script src="<?php echo base_url('public/assets/js/navigation-rtl.js'); ?>"></script>

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

	</body>
</html>