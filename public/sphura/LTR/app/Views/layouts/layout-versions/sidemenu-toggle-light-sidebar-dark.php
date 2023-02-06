<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="Spruha - Codeigniter Admin & Dashboard Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin template, admin dashboard, bootstrap dashboard template, bootstrap 4 admin template, codeigniter 4 admin panel, template codeigniter bootstrap, php, codeigniter, php framework, web template, html5 template, php code, php html, codeigniter 4, codeigniter mvc">
        
        <!-- Favicon -->
		<link rel="icon" href="https://codeigniter.spruko.com/spruha/spruha-ltr/public/assets/img/brand/favicon.ico" type="image/x-icon"/> 

		<!-- Title -->
		<title>Spruha - Codeigniter Admin & Dashboard Template</title>

		<!-- Bootstrap css-->
		<link href="<?php echo base_url('public/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/icons.css'); ?>" rel="stylesheet"/>
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/web-fonts/plugin.css'); ?>" rel="stylesheet"/>

		<!-- Style css-->
		<link href="<?php echo base_url('public/assets/css/style.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/css/skins.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/css/dark-style.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/css/colors/default.css'); ?>" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('public/assets/css/colors/color.css'); ?>">

		<!-- Select2 css-->
		<link href="<?php echo base_url('public/assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

		<!-- Sidemenu-responsive-tabs  css -->
		<link href="<?php echo base_url('public/assets/css/sidemenu-responsive-tabs.css'); ?>" rel="stylesheet">

		<!---Sidemenu css-->
		<link href="<?php echo base_url('public/assets/css/sidemenu-responsive.css'); ?>" rel="stylesheet">

	</head>

	<body class="main-body leftmenu dark-theme">

        <!-- Page -->
	    <div class="page">

			<!-- Sidebar menu open-->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
			<div class="app-sidebar toggle-sidemenu">
				<div class="side-tab-body p-0 border-0" id="sidemenu-Tab">
					<nav class="first-sidemenu">
						<ul class="resp-tabs-list hor_1">
							<li class="dashboard-spruha" data-toggle="tooltip" data-placement="right" title="Dashboard">
								<i class="ti-home sidemenu-icon"></i>
							</li>
							<li class="layout-spruha" data-toggle="tooltip" data-placement="right" title="Layouts">
								<i class="ti-layout sidemenu-icon"></i>
							</li>
							<li class="crypto-spruha" data-toggle="tooltip" data-placement="right" title="Crypto Currencies">
								<i class="ti-wallet sidemenu-icon"></i>
							</li>
							<li class="ecommerce-spruha" data-toggle="tooltip" data-placement="right" title="E-Commerce">
								<i class="ti-shopping-cart-full sidemenu-icon"></i>
							</li>
							<li class="widgets-spruha" data-toggle="tooltip" data-placement="right" title="Widgets">
								<i class="ti-server sidemenu-icon"></i>
							</li>
							<li class="mail-spruha" data-toggle="tooltip" data-placement="right" title="Mail">
								<i class="ti-email sidemenu-icon"></i>
							</li>
							<li class="apps-spruha" data-toggle="tooltip" data-placement="right" title="Apps">
								<i class="ti-write sidemenu-icon"></i>
							</li>
							<li class="icons-spruha" data-toggle="tooltip" data-placement="right" title="Icons">
								<i class="ti-face-smile sidemenu-icon"></i>
							</li>
							<li class="maps-spruha" data-toggle="tooltip" data-placement="right" title="Maps">
								<i class="ti-map-alt sidemenu-icon"></i>
							</li>
							<li class="tables-spruha" data-toggle="tooltip" data-placement="right" title="Tables">
								<i class="ti-agenda sidemenu-icon"></i>
							</li>
							<li class="element-spruha" data-toggle="tooltip" data-placement="right" title="Elements">
								<i class="ti-package sidemenu-icon"></i>
							</li>
							<li class="advanced-spruha" data-toggle="tooltip" data-placement="right" title="Advanced UI">
								<i class="ti-briefcase sidemenu-icon"></i>
							</li>
							<li class="forms-spruha" data-toggle="tooltip" data-placement="right" title="Forms">
								<i class="ti-receipt sidemenu-icon"></i>
							</li>
							<li class="chart-spruha" data-toggle="tooltip" data-placement="right" title="Charts">
								<i class="ti-bar-chart-alt sidemenu-icon"></i>
							</li>
							<li class="pages-spruha" data-toggle="tooltip" data-placement="right" title="Pages">
								<i class="ti-palette sidemenu-icon"></i>
							</li>
							<li class="utilities-spruha" data-toggle="tooltip" data-placement="right" title="Utilities">
								<i class="ti-shield sidemenu-icon"></i>
							</li>
							<li class="custom-spruha" data-toggle="tooltip" data-placement="right" title="Custom Pages">
								<i class="ti-lock sidemenu-icon"></i>
							</li>

						</ul>
					</nav>
					<nav class="second-sidemenu">
						<ul class="resp-tabs-container hor_1">
							<li class="dashboard-spruha">
								<h5>Dashboard</h5>
								<a class="slide-item" href="<?php echo base_url('pages/index'); ?>">Dashboard 01</a>
								<div class="side-menu p-0">
									<div class="slide submenu">
										<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Level1</span><i class="angle fa fa-angle-down"></i></a>
										<ul class="slide-menu submenu-list">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Level0.1</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li>
														<a href="#" class="slide-item">Level1.1</a>
													</li>
													<li>
														<a href="#" class="slide-item">Level1.2</a>
													</li>
												</ul>
											</div>
											<li>
												<a href="#" class="slide-item">Level0.2</a>
											</li>
										</ul>
										<a class="side-menu__item" href="#"><span class="side-menu__label">Level2</span></i></a>
										<a class="side-menu__item" href="#"><span class="side-menu__label">Level3</span></i></a>
									</div>
								</div>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
										<div class="forth circle circles">
											<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
										</div>
										<div class="table-responsive border-0">
										<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
											<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
												<tbody>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="row">
										<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
											<div class="col-md-12 col-12 text-right   mt-3">
												<div class="border   p-3">
													<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
													<h2 class="text-right card-item-icon card-icon mb-0">
													<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

												</div>
											</div>
											<div class="col-md-12 col-12 text-right mt-3">
												<div class="border   p-3">
													<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
													<h2 class="text-right card-item-icon card-icon mb-0">
													<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>

												</div>
											</div>
									</div>
							</li>
							<li class="layout-spruha">
								<h5>Layouts</h5>
									<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Horizontal</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontallight'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontaldark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Horizontal-Centerlogo</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-light-centerlogo'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-dark-centerlogo'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-light-center-logo-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/horizontal-dark-center-logo-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Sidemenu-Icon</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Sidemenu-Closed</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-closed'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-dark-closed'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-closed-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-dark-closed-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item active" data-toggle="slide" href="#"><span class="side-menu__label">Sidemenu-Toggle</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Sidemenu-Icontext</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-icontext'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-icontext-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-icontext-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-icontext-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Sidemenu-Iconoverlay</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-icon-overlay'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Menu-hoversubmenu</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="side-menu p-0">
											<div class="slide submenu">
												<a class="side-menu__item" data-toggle="slide" href="#"><span class="side-menu__label">Menu-hoversubmenu-1</span><i class="angle fa fa-angle-down"></i></a>
												<ul class="slide-menu submenu-list">
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1'); ?>"><span>Light</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-dark'); ?>"><span>Dark</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-boxed'); ?>"><span>Light-Boxed</span></a></li>
													<li><a class="slide-item" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-dark-boxed'); ?>"><span>Dark-Boxed</span></a></li>
												</ul>
											</div>
										</div>
										<div class="table-responsive border-0">
											<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
											<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
												<tbody>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
													<tr>
														<td class="d-flex">
														<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
															<div class="media-body ml-2">
																<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
																<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="row">
										<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
											<div class="col-md-12 col-12 text-right   mt-3">
												<div class="border   p-3">
													<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
													<h2 class="text-right card-item-icon card-icon mb-0">
													<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

												</div>
											</div>
											<div class="col-md-12 col-12 text-right mt-3">
												<div class="border   p-3">
													<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
													<h2 class="text-right card-item-icon card-icon mb-0">
													<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>

												</div>
											</div>
										</div>
								</li>
							<li class="crypto-spruha">
								<h5>Crypto Currencies</h5>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-dashbaord'); ?>">Dashboard</a>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-market'); ?>">Marketcap</a>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-currency-exchange'); ?>">Currency exchange</a>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-buy-sell'); ?>">Buy & Sell</a>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-wallet'); ?>">Wallet</a>
								<a class="slide-item" href="<?php echo base_url('pages/crypto-transcations'); ?>">Transcations</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
									<div class="forth circle circles">
										<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
									</div>
									<div class="table-responsive border-0">
									<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
										<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
											<tbody>
												<tr>
													<td class="d-flex">
													<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
														<div class="media-body ml-2">
															<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
														</div>
													</td>
												</tr>
												<tr>
													<td class="d-flex">
													<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
														<div class="media-body ml-2">
															<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
														</div>
													</td>
												</tr>
												<tr>
													<td class="d-flex">
													<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
														<div class="media-body ml-2">
															<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
															<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="row">
									<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
										<div class="col-md-12 col-12 text-right   mt-3">
											<div class="border   p-3">
												<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
												<h2 class="text-right card-item-icon card-icon mb-0">
												<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

											</div>
										</div>
										<div class="col-md-12 col-12 text-right mt-3">
											<div class="border   p-3">
												<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
												<h2 class="text-right card-item-icon card-icon mb-0">
												<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>

											</div>
										</div>
								</div>
							</li>
							<li class="ecommerce-spruha">
								<h5>E-Commerce</h5>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-dashboard'); ?>">Dashboard</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-products'); ?>">Products</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-product-details'); ?>">Product Details</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-cart'); ?>">Cart</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-checkout'); ?>">Checkout</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-orders'); ?>">Orders</a>
								<a class="slide-item" href="<?php echo base_url('pages/ecommerce-account'); ?>">Account</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="widgets-spruha">
								<h5>Widgets</h5>
								<a class="slide-item" href="<?php echo base_url('pages/widgets'); ?>">Widgets</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="mail-spruha">
								<h5>Mail</h5>
								<a class="slide-item" href="<?php echo base_url('pages/mail-inbox'); ?>"> Mail-Inbox</a>
								<a class="slide-item" href="<?php echo base_url('pages/viewmail'); ?>"> View-Mail</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
						</li>
							<li class="app-spruha">
								<h5>Apps</h5>
								<a class="slide-item" href="<?php echo base_url('pages/chat'); ?>">Chat</a>
								<a class="slide-item" href="<?php echo base_url('pages/cards'); ?>">Cards</a>
								<a class="slide-item" href="<?php echo base_url('pages/calendar'); ?>">Calendar</a>
								<a class="slide-item" href="<?php echo base_url('pages/contacts'); ?>"> Contacts</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="icons-spruha">
								<h5>Icons</h5>
								<a class="slide-item" href="<?php echo base_url('pages/icons1'); ?>">Font Awesome</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons2'); ?>">Material Design Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons3'); ?>">Simple Line Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons4'); ?>">Feather Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons5'); ?>">Ionic Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons6'); ?>">Flag Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons7'); ?>">Pe7 Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons8'); ?>">Themify Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons9'); ?>">Typicons Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons10'); ?>">Weather Icons</a>
								<a class="slide-item" href="<?php echo base_url('pages/icons11'); ?>">Material Icons</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="maps-spruha">
								<h5>Maps</h5>
								<a class="slide-item" href="<?php echo base_url('pages/map-mapel'); ?>">Mapel Maps</a>
								<a class="slide-item" href="<?php echo base_url('pages/map-vector'); ?>">Vector Maps</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="tables-spruha">
								<h5>Tables</h5>
								<a class="slide-item"  href="<?php echo base_url('pages/table-basic'); ?>">Basic Tables</a>
								<a class="slide-item" href="<?php echo base_url('pages/table-data'); ?>">Data Tables</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-5 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="element-spruha">
								<h5>Elements</h5>
								<a class="slide-item" href="<?php echo base_url('pages/alerts'); ?>">Alerts</a>
								<a class="slide-item" href="<?php echo base_url('pages/avatar'); ?>">Avatar</a>
								<a class="slide-item" href="<?php echo base_url('pages/breadcrumbs'); ?>">Breadcrumbs</a>
								<a class="slide-item" href="<?php echo base_url('pages/buttons'); ?>">Buttons</a>
								<a class="slide-item" href="<?php echo base_url('pages/badge'); ?>">Badge</a>
								<a class="slide-item" href="<?php echo base_url('pages/dropdown'); ?>">Dropdown</a>
								<a class="slide-item" href="<?php echo base_url('pages/thumbnails'); ?>">Thumbnails</a>
								<a class="slide-item" href="<?php echo base_url('pages/list-group'); ?>">List Group</a>
								<a class="slide-item" href="<?php echo base_url('pages/navigation'); ?>">Navigation</a>
								<a class="slide-item" href="<?php echo base_url('pages/pagination'); ?>">Pagination</a>
								<a class="slide-item" href="<?php echo base_url('pages/popover'); ?>">Popover</a>
								<a class="slide-item" href="<?php echo base_url('pages/progress'); ?>">Progress</a>
								<a class="slide-item" href="<?php echo base_url('pages/spinners'); ?>">Spinners</a>
								<a class="slide-item" href="<?php echo base_url('pages/media-object'); ?>"> Media Obejct</a>
								<a class="slide-item" href="<?php echo base_url('pages/typography'); ?>">Typography</a>
								<a class="slide-item" href="<?php echo base_url('pages/tooltip'); ?>">Tooltip</a>
								<a class="slide-item" href="<?php echo base_url('pages/toast'); ?>">Toast</a>
								<a class="slide-item" href="<?php echo base_url('pages/tags'); ?>"> Tags</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="advanced-spruha">
								<h5>Advanced UI</h5>
								<a class="slide-item" href="<?php echo base_url('pages/accordion'); ?>">Accordion</a>
								<a class="slide-item" href="<?php echo base_url('pages/carousel'); ?>">Carousel</a>
								<a class="slide-item" href="<?php echo base_url('pages/collapse'); ?>">Collapse</a>
								<a class="slide-item" href="<?php echo base_url('pages/modals'); ?>">Modals</a>
								<a class="slide-item" href="<?php echo base_url('pages/timeline'); ?>">Timeline</a>
								<a class="slide-item"  href="<?php echo base_url('pages/draggablecard'); ?>">Draggable Cards</a>
								<a class="slide-item" href="<?php echo base_url('pages/sweet-alert'); ?>">Sweet Alert</a>
								<a class="slide-item" href="<?php echo base_url('pages/rating'); ?>">Ratings</a>
								<a class="slide-item" href="<?php echo base_url('pages/search'); ?>"> Search</a>
								<a class="slide-item" href="<?php echo base_url('pages/userlist'); ?>">Userlist</a>
								<a class="slide-item" href="<?php echo base_url('pages/blog'); ?>">Blog</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="forms-spruha">
								<h5>Forms</h5>
								<a class="slide-item" href="<?php echo base_url('pages/form-elements'); ?>">Form Elements</a>
								<a class="slide-item" href="<?php echo base_url('pages/form-advanced'); ?>">Advanced Forms</a>
								<a class="slide-item" href="<?php echo base_url('pages/form-layouts'); ?>">Form Layouts</a>
								<a class="slide-item" href="<?php echo base_url('pages/form-validation'); ?>">Form Validation</a>
								<a class="slide-item" href="<?php echo base_url('pages/form-wizards'); ?>">Form Wizards </a>
								<a class="slide-item" href="<?php echo base_url('pages/form-editor'); ?>">WYSIWYG Editor</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="chart-spruha">
								<h5>Charts</h5>
								<a class="slide-item" href="<?php echo base_url('pages/chart-morris'); ?>">Morris Charts</a>
								<a class="slide-item" href="<?php echo base_url('pages/chart-flot'); ?>">Flot Charts</a>
								<a class="slide-item" href="<?php echo base_url('pages/chart-chartjs'); ?>">ChartJS </a>
								<a class="slide-item" href="<?php echo base_url('pages/chart-spark-peity'); ?>"> Sparkline &amp; Peity</a>
								<a class="slide-item" href="<?php echo base_url('pages/chart-echart'); ?>">Echart</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="pages-spruha">
								<h5>Pages</h5>
								<a class="slide-item" href="<?php echo base_url('pages/profile'); ?>">Profile</a>
								<a class="slide-item" href="<?php echo base_url('pages/invoice'); ?>">Invoice</a>
								<a class="slide-item" href="<?php echo base_url('pages/pricing'); ?>">Pricing</a>
								<a class="slide-item" href="<?php echo base_url('pages/gallery'); ?>">Gallery</a>
								<a class="slide-item" href="<?php echo base_url('pages/faq'); ?>">Faqs</a>
								<a class="slide-item" href="<?php echo base_url('pages/success-message'); ?>">Success Message</a>
								<a class="slide-item" href="<?php echo base_url('pages/danger-message'); ?>">Danger Message</a>
								<a class="slide-item" href="<?php echo base_url('pages/warning-message'); ?>">Warning Message</a>
								<a class="slide-item" href="<?php echo base_url('pages/empty'); ?>">Empty Page</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="utilities-spruha">
								<h5>Utilities</h5>
								<a class="slide-item" href="<?php echo base_url('pages/background'); ?>">Background</a>
								<a class="slide-item" href="<?php echo base_url('pages/border'); ?>">Border</a>
								<a class="slide-item" href="<?php echo base_url('pages/display'); ?>">Display</a>
								<a class="slide-item" href="<?php echo base_url('pages/flex'); ?>">Flex</a>
								<a class="slide-item" href="<?php echo base_url('pages/height'); ?>">Height</a>
								<a class="slide-item" href="<?php echo base_url('pages/margin'); ?>">Margin</a>
								<a class="slide-item" href="<?php echo base_url('pages/padding'); ?>">Padding</a>
								<a class="slide-item" href="<?php echo base_url('pages/position'); ?>">Position</a>
								<a class="slide-item" href="<?php echo base_url('pages/width'); ?>">Width</a>
								<a class="slide-item" href="<?php echo base_url('pages/extras'); ?>">Extras</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
							<li class="account-spruha">
								<h5>Custom Pages</h5>
								<a class="slide-item" href="<?php echo base_url('pages/signin'); ?>">Sign In</a>
								<a class="slide-item" href="<?php echo base_url('pages/signup'); ?>">Sign Up</a>
								<a class="slide-item" href="<?php echo base_url('pages/forgot'); ?>">Forgot Password</a>
								<a class="slide-item" href="<?php echo base_url('pages/reset'); ?>">Reset Password</a>
								<a class="slide-item" href="<?php echo base_url('pages/lockscreen'); ?>">Lockscreen</a>
								<a class="slide-item" href="<?php echo base_url('pages/underconstruction'); ?>">UnderConstruction</a>
								<a class="slide-item" href="<?php echo base_url('pages/error-404'); ?>">404 Error</a>
								<a class="slide-item" href="<?php echo base_url('pages/error-500'); ?>">500 Error</a>
								<h5 class="fs-15 font-weight-semibold mt-4 mb-4">Assets Allocation</h5>
								<div class="forth circle circles">
									<div class="chart-circle-value circle-style"><div class="tx-16 font-weight-bold">75%</div></div>
								</div>
								<div class="table-responsive border-0">
								<h5 class="fs-15 font-weight-semibold mt-5 mb-2">Today Tasks</h5>
									<table class="table border-0 mg-b-0 text-nowrap text-md-nowrap">
										<tbody>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-btc"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Bitcoin</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-eth"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Ethereum</p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
											<tr>
												<td class="d-flex">
												<div class="media-icon bg-primary my-auto mr-2"> <i class="cf cf-xrp"></i> </div>
													<div class="media-body ml-2">
														<p class="mb-1 text-muted font-weight-normal tx-15">Dash </p>
														<span class="tx-15 font-weight-semibold my-auto">$10,245</span>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="row">
								<h5 class="fs-15 font-weight-semibold mt-4 ml-3">Widgets</h5>
									<div class="col-md-12 col-12 text-right   mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">New  users</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">9,456</span></h2>

										</div>
									</div>
									<div class="col-md-12 col-12 text-right mt-3">
										<div class="border   p-3">
											<label class="font-weight-semibold  mb-0 pt-0">Total tax</label>
											<h2 class="text-right card-item-icon card-icon mb-0">
											<i class="mdi mdi-cube icon-size float-left text-primary ml-0"></i><span class="font-weight-bold mr-0 fs-20">7,893</span></h2>
										</div>
									</div>
							</div>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- Sidebar menu End-->
                    
            <!-- Main Header-->
        	<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-sidebar main-sidebar-sticky side-menu">
						<div class="sidemenu-logo">
							<a class="main-logo" href="<?php echo base_url('pages/index'); ?>">
								<img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="header-brand-img desktop-logo" alt="logo">
								<img src="<?php echo base_url('public/assets/img/brand/icon-light.png'); ?>" class="header-brand-img icon-logo" alt="logo">
								<img src="<?php echo base_url('public/assets/img/brand/logo.png'); ?>" class="header-brand-img desktop-logo theme-logo" alt="logo">
								<img src="<?php echo base_url('public/assets/img/brand/icon.png'); ?>" class="header-brand-img icon-logo theme-logo" alt="logo">
							</a>
						</div>
				    </div>
					<div class="main-header-left">
						<a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="<?php echo base_url('pages/index'); ?>"><img src="<?php echo base_url('public/assets/img/brand/logo.png'); ?>" class="mobile-logo" alt="logo"></a>
							<a href="<?php echo base_url('pages/index'); ?>"><img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="mobile-logo-dark" alt="logo"></a>
						</div>
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<select class="form-control select2-no-search">
									<option label="All categories">
									</option>
									<option value="IT Projects">
										IT Projects
									</option>
									<option value="Business Case">
										Business Case
									</option>
									<option value="Microsoft Project">
										Microsoft Project
									</option>
									<option value="Risk Management">
										Risk Management
									</option>
									<option value="Team Building">
										Team Building
									</option>
								</select>
							</div>
							<input type="search" class="form-control rounded-0" placeholder="Search for anything...">
							<button class="btn search-btn"><i class="fe fe-search"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search header-icons"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<select class="form-control select2-no-search">
												<option label="All categories">
												</option>
												<option value="IT Projects">
													IT Projects
												</option>
												<option value="Business Case">
													Business Case
												</option>
												<option value="Microsoft Project">
													Microsoft Project
												</option>
												<option value="Risk Management">
													Risk Management
												</option>
												<option value="Team Building">
													Team Building
												</option>
											</select>
										</div>
										<input type="search" class="form-control" placeholder="Search for anything...">
										<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/french_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">French</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/germany_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Germany</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/italy_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Italy</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar mr-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/russia_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Russia</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/spain_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">spain</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div> 
							<div class="dropdown main-header-notification">
								<a class="nav-link icon" href="">
									<i class="fe fe-message-square header-icons"></i>
									<span class="badge badge-success nav-link-badge">3</span>
								</a>
							<div class="dropdown-menu">
							<div class="header-navheading">
								<p class="main-notification-text tx-medium text-left"> 3 New messages </p>
							</div>
							<div class="main-notification-list">
							   <div class="media new">
							   <div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/10.jpg'); ?>"></div>
							       <div class="media-body">
								       <p>Paul Molive <span>I'm sorry but i'm not sure how...</span>
							       </div>
							  	 </div>
							    <div class="media">
								<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/8.jpg'); ?>"></div>
							         <div class="media-body">
							            <p>Sahar DaryAll<span> set ! Now, time to get to you now......</span>
							        </div>
							     </div>
								<div class="media">
								<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/11.jpg'); ?>"></div>
									<div class="media-body">
										<p>Barney Cull</p><span>Here are some products ...</span>
									</div>
								</div>
							</div>
							<div class="dropdown-footer">
								<a href="#">View All</a>
							</div>
						</div>
					</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-settings"></i> Account Settings
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/signin'); ?>">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fe fe-align-right header-icons"></i>
							</a>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-more-vertical header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->

            <!-- Mobile-header -->
			<div class="mobile-main-header">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 mr-auto">
							<div class="dropdown header-search">
								<a class="nav-link icon header-search">
									<i class="fe fe-search header-icons"></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<select class="form-control select2-no-search">
													<option label="All categories">
													</option>
													<option value="IT Projects">
														IT Projects
													</option>
													<option value="Business Case">
														Business Case
													</option>
													<option value="Microsoft Project">
														Microsoft Project
													</option>
													<option value="Risk Management">
														Risk Management
													</option>
													<option value="Team Building">
														Team Building
													</option>
												</select>
											</div>
											<input type="search" class="form-control" placeholder="Search for anything...">
											<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><circle cx="256" cy="256" r="256" fill="#f0f0f0"/><g fill="#0052b4"><path d="M52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178L52.92 100.142zM503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076h133.176zM8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075H8.819zM411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177l89.076-89.075zM100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102V370.005l-89.076 89.074zM189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075V8.819zM322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075v133.176zM370.005 322.784l89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076H370.005z"/></g><g fill="#d80027"><path d="M509.833 222.609H289.392V2.167A258.556 258.556 0 00256 0c-11.319 0-22.461.744-33.391 2.167v220.441H2.167A258.556 258.556 0 000 256c0 11.319.744 22.461 2.167 33.391h220.441v220.442a258.35 258.35 0 0066.783 0V289.392h220.442A258.533 258.533 0 00512 256c0-11.317-.744-22.461-2.167-33.391z"/><path d="M322.783 322.784L437.019 437.02a256.636 256.636 0 0015.048-16.435l-97.802-97.802h-31.482v.001zM189.217 322.784h-.002L74.98 437.019a256.636 256.636 0 0016.435 15.048l97.802-97.804v-31.479zM189.217 189.219v-.002L74.981 74.98a256.636 256.636 0 00-15.048 16.435l97.803 97.803h31.481zM322.783 189.219L437.02 74.981a256.328 256.328 0 00-16.435-15.047l-97.802 97.803v31.482z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/french_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">French</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/germany_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Germany</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar ml-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/italy_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Italy</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar ml-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/russia_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Russia</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  ml-3 align-self-center bg-transparent"><img src="<?php echo base_url('public/assets/img/flags/spain_flag.jpg'); ?>" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">spain</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown ">
							<a class="nav-link icon full-screen-link">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary mr-3">View all</span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/5.jpg'); ?>"></div>
										<div class="media-body">
											<p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/2.jpg'); ?>"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/3.jpg'); ?>"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">View All Notifications</a>
								</div>
							</div>
						</div> 
							<div class="dropdown main-header-notification">
								<a class="nav-link icon" href="">
									<i class="fe fe-message-square header-icons"></i>
									<span class="badge badge-success nav-link-badge">3</span>
								</a>
							<div class="dropdown-menu">
							<div class="header-navheading">
								<p class="main-notification-text tx-medium text-left"> 3 New messages </p>
							</div>
							<div class="main-notification-list">
							   <div class="media new">
							   <div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/10.jpg'); ?>"></div>
							       <div class="media-body">
								       <p>Paul Molive <span>I'm sorry but i'm not sure how...</span>
							       </div>
							  	 </div>
							    <div class="media">
								<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/8.jpg'); ?>"></div>
							         <div class="media-body">
							            <p>Sahar DaryAll<span> set ! Now, time to get to you now......</span>
							        </div>
							     </div>
								<div class="media">
								<div class="main-img-user online"><img alt="avatar" src="<?php echo base_url('public/assets/img/users/11.jpg'); ?>"></div>
									<div class="media-body">
										<p>Barney Cull</p><span>Here are some products ...</span>
									</div>
								</div>
							</div>
							<div class="dropdown-footer">
								<a href="#">View All</a>
							</div>
						</div>
					</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="<?php echo base_url('public/assets/img/users/1.jpg'); ?>"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Sonia Taylor</h6>
									<p class="main-notification-text">Web Designer</p>
								</div>
								<a class="dropdown-item border-top" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-user"></i> My Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-edit"></i> Edit Profile
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-settings"></i> Account Settings
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-settings"></i> Support
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/profile'); ?>">
									<i class="fe fe-compass"></i> Activity
								</a>
								<a class="dropdown-item" href="<?php echo base_url('pages/signin'); ?>">
									<i class="fe fe-power"></i> Sign Out
								</a>
							</div>
						</div>
						<div class="dropdown  header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fe fe-align-left header-icons"></i>
							</a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed --> 
        
			<!-- Main Content-->
			<div class="main-content side-content pt-0">

				<div class="container-fluid">
					<div class="inner-body">

					<?= $this->renderSection('content'); ?>	

					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Main Footer-->
			<div class="main-footer text-center">
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2021 <a href="#">Spruha</a>. Designed by <a href="https://www.spruko.com/">Spruko</a> All rights reserved.</span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->

			<!-- Sidebar -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-right float-left text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>Todo</h5>
					<div class="d-flex p-3">
						<label class="ckbox"><input checked  type="checkbox"><span>Hangout With friends</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Prepare for presentation</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input checked type="checkbox"><span>System Updated</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input type="checkbox"><span>Do something more</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>System Updated</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top">
						<label class="ckbox"><input  type="checkbox"><span>Find an Idea</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<div class="d-flex p-3 border-top mb-0">
						<label class="ckbox"><input  type="checkbox"><span>Project review</span></label>
						<span class="mr-auto">
							<i class="fe fe-edit-2 text-primary mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Edit"></i>
							<i class="fe fe-trash-2 text-danger mr-2" data-toggle="tooltip" title="" data-placement="top" data-original-title="Delete"></i>
						</span>
					</div>
					<h5>Overview</h5>
					<div class="p-4">
						<div class="main-traffic-detail-item">
							<div>
								<span>Founder &amp; CEO</span> <span>24</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class="progress-bar progress-bar-xs wd-20p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>UX Designer</span> <span>1</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar progress-bar-xs bg-secondary wd-15p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Recruitment</span> <span>87</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" class="progress-bar progress-bar-xs bg-success wd-45p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Software Engineer</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-info wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
						<div class="main-traffic-detail-item">
							<div>
								<span>Project Manager</span> <span>32</span>
							</div>
							<div class="progress">
								<div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar progress-bar-xs bg-danger wd-25p" role="progressbar"></div>
							</div><!-- progress -->
						</div>
					</div>
				</div>
			</div>
			<!-- End Sidebar -->
			
		</div>

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="<?php echo base_url('public/assets/plugins/jquery/jquery.min.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

		<!-- Bootstrap js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url('public/assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!-- Sidemenu js-->
		<script src="<?php echo base_url('public/assets/plugins/sidemenu-responsive-tabs/js/sidemenu.js'); ?>"></script>

		<!-- Sidemenu-responsive-tabs  js -->
		<script src="<?php echo base_url('public/assets/plugins/sidemenu-responsive-tabs/js/sidemenu-responsive-tabs.js'); ?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/sidemenu-responsive-tabs/js/left-menu.js'); ?>"></script>


		<!-- leftmenu js-->
		<script src="<?php echo base_url('public/assets/plugins/sidemenu/left-menu.js'); ?>"></script>
		

		<!-- Sidebar js -->
		<script src="<?php echo base_url('public/assets/plugins/sidebar/sidebar.js'); ?>"></script>

		<!-- Internal Morris js -->
		<script src="<?php echo base_url('public/assets/plugins/raphael/raphael.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/morris.js/morris.min.js'); ?>"></script>

		<!-- Circle Progress js-->
		<script src="<?php echo base_url('public/assets/js/circle-progress.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/js/chart-circle.js'); ?>"></script>

		<!-- Internal Dashboard js-->
		<script src="<?php echo base_url('public/assets/js/index.js'); ?>"></script>

		<!-- Sticky js -->
		<script src="<?php echo base_url('public/assets/js/sticky.js'); ?>"></script>

		<!-- Custom js -->
		<script src="<?php echo base_url('public/assets/js/custom.js'); ?>"></script>


	</body>
</html>

    