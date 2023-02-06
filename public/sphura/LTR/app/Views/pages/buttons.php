<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>


						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Buttons</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Elements</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buttons</li>
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
								<div class="card custom-card" id="theme">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Theme Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-main-primary">Primary</button>
													<button class="btn ripple btn-secondary">Secondary</button>
													<button class="btn ripple btn-light">Light</button>
													<button class="btn ripple btn-dark">Dark</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons1"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-main-primary">Primary</button>
	<button class="btn ripple btn-secondary">Secondary</button>
	<button class="btn ripple btn-light">Light</button>
	<button class="btn ripple btn-dark">Dark</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons1"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="btn ripple btn-main-[value]"</code></td>
													<td>primary | secondary | light | dark</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="bootstrap">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bootstrap Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-primary">Primary</button>
													<button class="btn ripple btn-secondary">Secondary</button>
													<button class="btn ripple btn-success">Success</button>
													<button class="btn ripple btn-warning">Warning</button>
													<button class="btn ripple btn-danger">Danger</button>
													<button class="btn ripple btn-info">Info</button>
													<button class="btn ripple btn-light">Light</button>
													<button class="btn ripple btn-dark">Dark</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons2"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary">Primary</button>
	<button class="btn ripple btn-secondary">Secondary</button>
	<button class="btn ripple btn-success">Success</button>
	<button class="btn ripple btn-warning">Warning</button>
	<button class="btn ripple btn-danger">Danger</button>
	<button class="btn ripple btn-info">Info</button>
	<button class="btn ripple btn-light">Light</button>
	<button class="btn ripple btn-dark">Dark</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons2"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="btn ripple btn-[value]"</code></td>
													<td>primary | secondary | success | warning | danger | info | light | dark</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="disabledbootstrap">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Bootstrap Disabled Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-primary  disabled">Primary</button>
													<button class="btn ripple btn-secondary disabled">Secondary</button>
													<button class="btn ripple btn-success disabled">Success</button>
													<button class="btn ripple btn-warning disabled">Warning</button>
													<button class="btn ripple btn-danger disabled">Danger</button>
													<button class="btn ripple btn-infodisabled">Info</button>
													<button class="btn ripple btn-light  disabled">Light</button>
													<button class="btn ripple btn-dark  disabled">Dark</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons10"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary  disabled">Primary</button>
	<button class="btn ripple btn-secondary disabled">Secondary</button>
	<button class="btn ripple btn-success disabled">Success</button>
	<button class="btn ripple btn-warning disabled">Warning</button>
	<button class="btn ripple btn-danger disabled">Danger</button>
	<button class="btn ripple btn-infodisabled">Info</button>
	<button class="btn ripple btn-light  disabled">Light</button>
	<button class="btn ripple btn-dark  disabled">Dark</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons10"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="outline">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Outline Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-outline-primary">Primary</button>
													<button class="btn ripple btn-outline-secondary">Secondary</button>
													<button class="btn ripple btn-outline-light">Light</button>
													<button class="btn ripple btn-outline-dark">Dark</button>
													<button class="btn ripple btn-outline-success">Success</button>
													<button class="btn ripple btn-outline-danger">Danger</button>
													<button class="btn ripple btn-outline-info">Info</button>
													<button class="btn ripple btn-outline-warning">warning</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons3"><pre><code class="language-markup"><script type="html-Spruha/script"><button class="btn ripple btn-outline-primary">Primary</button>
	<button class="btn ripple btn-outline-secondary">Secondary</button>
	<button class="btn ripple btn-outline-light">Light</button>
	<button class="btn ripple btn-outline-dark">Dark</button>
	<button class="btn ripple btn-outline-success">Success</button>
	<button class="btn ripple btn-outline-danger">Danger</button>
	<button class="btn ripple btn-outline-info">Info</button>
	<button class="btn ripple btn-outline-warning">warning</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons3"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
									<div class="card-footer">
										<table class="table main-table-reference mt-0 mb-0">
											<thead>
												<tr>
													<th class="wd-40p">Class Reference</th>
													<th class="wd-60p">Values</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td><code class="pd-0 bg-transparent">class="btn ripple btn-outline-[value]"</code></td>
													<td>indigo | primary | secondary | success | warning | danger | info | light | dark</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
								<div class="card custom-card" id="round">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Rounded Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-primary btn-rounded">Primary</button>
													<button class="btn ripple btn-secondary btn-rounded">Secondary</button>
													<button class="btn ripple btn-success btn-rounded">Success</button>
													<button class="btn ripple btn-danger btn-rounded">Danger</button>
													<button class="btn ripple btn-info btn-rounded">Info</button>
													<button class="btn ripple btn-warning btn-rounded">Warning</button>
													<button class="btn ripple btn-light btn-rounded">Light</button>
													<button class="btn ripple btn-dark btn-rounded">Dark</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons4"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary btn-rounded">Primary</button>
	<button class="btn ripple btn-secondary btn-rounded">Secondary</button>
	<button class="btn ripple btn-success btn-rounded">Success</button>
	<button class="btn ripple btn-danger btn-rounded">Danger</button>
	<button class="btn ripple btn-info btn-rounded">Info</button>
	<button class="btn ripple btn-warning btn-rounded">Warning</button>
	<button class="btn ripple btn-light btn-rounded">Light</button>
	<button class="btn ripple btn-dark btn-rounded">Dark</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons4"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="round-outline">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Rounded Outline Buttons</h6>
											<p class="text-muted card-sub-title">Predefined button styles, each serving its own semantic purpose.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-outline-primary btn-rounded">Primary</button>
													<button class="btn ripple btn-outline-secondary btn-rounded">Secondary</button>
													<button class="btn ripple btn-outline-success btn-rounded">Success</button>
													<button class="btn ripple btn-outline-danger btn-rounded">Danger</button>
													<button class="btn ripple btn-outline-info btn-rounded">Info</button>
													<button class="btn ripple btn-outline-warning btn-rounded">Warning</button>
													<button class="btn ripple btn-outline-light btn-rounded">Light</button>
													<button class="btn ripple btn-outline-dark btn-rounded">Dark</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons11"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-outline-primary btn-rounded">Primary</button>
	<button class="btn ripple btn-outline-secondary btn-rounded">Secondary</button>
	<button class="btn ripple btn-outline-success btn-rounded">Success</button>
	<button class="btn ripple btn-outline-danger btn-rounded">Danger</button>
	<button class="btn ripple btn-outline-info btn-rounded">Info</button>
	<button class="btn ripple btn-outline-warning btn-rounded">Warning</button>
	<button class="btn ripple btn-outline-light btn-rounded">Light</button>
	<button class="btn ripple btn-outline-dark btn-rounded">Dark</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons11"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="sizes">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Button Sizes</h6>
											<p class="text-muted card-sub-title">Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> and <code>.btn-block</code>for additional sizes.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button type="button" class="btn ripple btn-primary btn-lg">Large button</button>
													<button type="button" class="btn ripple btn-secondary btn-lg">Large button</button>
													<button type="button" class="btn ripple btn-primary btn-sm">Small button</button>
													<button type="button" class="btn ripple btn-secondary btn-sm">Small button</button>
													<button type="button" class="btn ripple btn-primary btn-lg btn-block">Block level button</button>
													<button type="button" class="btn ripple btn-secondary btn-lg btn-block">Block level button</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons5"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button type="button" class="btn ripple btn-primary btn-lg">Large button</button>
	<button type="button" class="btn ripple btn-secondary btn-lg">Large button</button>
	<button type="button" class="btn ripple btn-primary btn-sm">Small button</button>
	<button type="button" class="btn ripple btn-secondary btn-sm">Small button</button>
	<button type="button" class="btn ripple btn-primary btn-lg btn-block">Block level button</button>
	<button type="button" class="btn ripple btn-secondary btn-lg btn-block">Block level button</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons5"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="icon">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Button with Icons</h6>
											<p class="text-muted card-sub-title">A basic button with added icons.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-primary"><i class="fe fe-airplay"></i> Folder</button>
													<button class="btn ripple btn-secondary"><i class="fe fe-briefcase"></i> Mail</button>
													<button class="btn ripple btn-success"><i class="fe fe-folder"></i> Edit</button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons6"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary btn-with-icon"><i class="fe fe-airplay"></i> Folder</button>
	<button class="btn ripple btn-secondary btn-with-icon"><i class="fe fe-briefcase"></i> Mail</button>
	<button class="btn ripple btn-success btn-with-icon"><i class="fe fe-folder"></i> Edit</button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons6"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="group">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Button Groups</h6>
											<p class="text-muted card-sub-title">Group a series of buttons together on a single line with the button group.</p>
										</div>
										<div class="text-wrap">
											<div class="example  overflow-hidden">
												<div class="btn btn-list">
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-secondary pd-x-25 active" type="button">Left</button>
														<button class="btn ripple btn-secondary pd-x-25" type="button">Center</button>
														<button class="btn ripple btn-secondary pd-x-25" type="button">Right</button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button>
														<button class="btn ripple btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button>
														<button class="btn ripple btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
													</div>
													<div aria-label="Basic example" class="btn btn-group" role="group">
														<button class="btn ripple btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button>
														<button class="btn ripple btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button>
														<button class="btn ripple btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons9"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<div aria-label="Basic example" class="btn btn-group" role="group">
		<button class="btn ripple btn-secondary pd-x-25 active" type="button">Left</button>
		<button class="btn ripple btn-secondary pd-x-25" type="button">Center</button>
		<button class="btn ripple btn-secondary pd-x-25" type="button">Right</button>
	</div>
	<div aria-label="Basic example" class="btn btn-group" role="group">
		<button class="btn ripple btn-secondary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button>
		<button class="btn ripple btn-secondary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button>
		<button class="btn ripple btn-secondary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
	</div>
	<div aria-label="Basic example" class="btn btn-group" role="group">
		<button class="btn ripple btn-primary btn-icon active" type="button"><i class="typcn typcn-media-play-outline"></i></button>
		<button class="btn ripple btn-primary btn-icon" type="button"><i class="typcn typcn-media-pause-outline"></i></button>
		<button class="btn ripple btn-primary btn-icon" type="button"><i class="typcn typcn-media-stop-outline"></i></button>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons9"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="dropdown">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Dropdown Buttons</h6>
											<p class="text-muted card-sub-title">A button variant for using only icons.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn btn-list">
													<button class="btn ripple btn-primary" data-toggle="dropdown">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="">Profile</a>
														<a class="dropdown-item" href="">Activity Logs</a>
														<a class="dropdown-item" href="">Account Settings</a>
														<a class="dropdown-item" href="">Logout</a>
													</div>
													<button class="btn ripple btn-secondary" data-toggle="dropdown">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
													<div class="dropdown-menu">
														<a class="dropdown-item" href="">Profile</a>
														<a class="dropdown-item" href="">Activity Logs</a>
														<a class="dropdown-item" href="">Account Settings</a>
														<a class="dropdown-item" href="">Logout</a>
													</div>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons8"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn btn-list">
	<button class="btn ripple btn-primary" data-toggle="dropdown">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="">Profile</a>
		<a class="dropdown-item" href="">Activity Logs</a>
		<a class="dropdown-item" href="">Account Settings</a>
		<a class="dropdown-item" href="">Logout</a>
	</div>
	<button class="btn ripple btn-secondary" data-toggle="dropdown">Dropdown <i class="icon ion-ios-arrow-down tx-11 mg-l-3"></i></button>
	<div class="dropdown-menu">
		<a class="dropdown-item" href="">Profile</a>
		<a class="dropdown-item" href="">Activity Logs</a>
		<a class="dropdown-item" href="">Account Settings</a>
		<a class="dropdown-item" href="">Logout</a>
	</div>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons8"><i class="fa fa-clipboard"></i></div>
</figure>
<!-- End Prism Precode -->
										</div>
									</div>
								</div>
								<div class="card custom-card" id="icon1">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Icon Buttons</h6>
											<p class="text-muted card-sub-title">A button variant for using only icons.</p>
										</div>
										<div class="text-wrap">
											<div class="example">
												<div class="btn-icon-list">
													<button class="btn ripple btn-primary btn-icon"><i class="fe fe-airplay"></i></button>
													<button class="btn ripple btn-secondary btn-icon"><i class="fe fe-briefcase"></i></button>
													<button class="btn ripple btn-success btn-icon"><i class="fe fe-folder"></i></button>
													<button class="btn ripple btn-info btn-icon"><i class="fe fe-link"></i></button>
												</div>
											</div>
<!-- Prism Precode -->
<figure class="highlight clip-widget" id="buttons7"><pre><code class="language-markup"><script type="html-Spruha/script"><div class="btn-icon-list">
	<button class="btn ripple btn-primary btn-icon"><i class="fe fe-airplay"></i></button>
	<button class="btn ripple btn-secondary btn-icon"><i class="fe fe-briefcase"></i></button>
	<button class="btn ripple btn-success btn-icon"><i class="fe fe-folder"></i></button>
	<button class="btn ripple btn-info btn-icon"><i class="fe fe-link"></i></button>
</div></script></code></pre>
	<div class="clipboard-icon" data-clipboard-target="#buttons7"><i class="fa fa-clipboard"></i></div>
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
												<a class="nav-link" href="#theme">Theme Buttons</a>
												<a class="nav-link" href="#bootstrap">Bootstrap Buttons</a>
												<a class="nav-link" href="#disabledbootstrap">Bootstrap Disabled Buttons</a>
												<a class="nav-link" href="#outline">Outline Buttons</a>
												<a class="nav-link" href="#round">Rounded Buttons</a>
												<a class="nav-link" href="#round-outline">Rounded Outline Buttons</a>
												<a class="nav-link" href="#sizes">Button Sizes</a>
												<a class="nav-link" href="#icon">Button With Icon</a>
												<a class="nav-link" href="#icon1">Icon Buttons</a>
												<a class="nav-link" href="#dropdown">DropDown Buttons</a>
												<a class="nav-link" href="#group">Button Groups</a>
											</nav>
										</div>
									</div>
									<div class="card custom-card">
										<div class="card-header border-bottom-0 custom-card-header">
											<h6 class="main-content-label mb-3">Project Status</h6>
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
											<div class="list d-flex align-items-center p-3">
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
											<div class="list d-flex align-items-center p-3">
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
											<div class="list d-flex align-items-center  p-3">
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
										<div class="card-footer">
											<a href="#" class="btn ripple btn-primary btn-block">View More</a>
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

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/widgets.js'); ?>"></script>


	</body>
</html>