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
		<link href="<?php echo base_url('public/assets/css/boxed.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/css/dark-boxed.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('public/assets/css/skins.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/css/dark-style.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/css/colors/default.css'); ?>" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('public/assets/css/colors/color.css'); ?>">

		<!-- Select2 css-->
		<link href="<?php echo base_url('public/assets/plugins/select2/css/select2.min.css'); ?>" rel="stylesheet">

		<!-- Mutipleselect css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/multipleselect/multiple-select.css'); ?>">

		<!-- Sidemenu css-->
		<link href="<?php echo base_url('public/assets/css/sidemenu/sidemenu.css'); ?>" rel="stylesheet">

	</head>

	<body class="main-body leftmenu">

		<!-- Loader -->
		<div id="global-loader">
			<img src="<?php echo base_url('public/assets/img/loader.svg'); ?>" class="loader-img" alt="Loader">
		</div>
		<!-- End Loader -->

        <!-- Page -->
	    <div class="page">

			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="<?php echo base_url('pages/index'); ?>">
						<img src="<?php echo base_url('public/assets/img/brand/logo-light.png'); ?>" class="header-brand-img desktop-logo" alt="logo">
						<img src="<?php echo base_url('public/assets/img/brand/icon-light.png'); ?>" class="header-brand-img icon-logo" alt="logo">
						<img src="<?php echo base_url('public/assets/img/brand/logo.png'); ?>" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="<?php echo base_url('public/assets/img/brand/icon.png'); ?>" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-header"><span class="nav-label">Dashboard</span></li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('pages/index'); ?>"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Dashboard</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-layout sidemenu-icon"></i><span class="sidemenu-label">Layouts</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Horizontal</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontallight'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontaldark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-light-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Horizontal-Centerlogo</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-light-centerlogo'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-dark-centerlogo'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-light-center-logo-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/horizontal-dark-center-logo-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Sidemenu-Icon</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Sidemenu-Closed</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-closed'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-dark-closed'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-closed-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-dark-closed-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Sidemenu-Toggle</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-toggle-light-sidebar-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Sidemenu-Icontext</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-icontext'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-icontext-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-icontext-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-icontext-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Sidemenu-Iconoverlay</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-icon-overlay'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-light-icon-overlay-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Menu-hoversubmenu</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Menu-hoversubmenu-1</span><i class="angle fe fe-chevron-right"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1'); ?>">Light</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-dark'); ?>">Dark</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-boxed'); ?>">Light-Boxed</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="<?php echo base_url('pages/sidemenu-hoversubmenu-style-1-dark-boxed'); ?>">Dark-Boxed</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-wallet sidemenu-icon"></i><span class="sidemenu-label">Crypto Currencies</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-dashbaord'); ?>">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-market'); ?>">Marketcap</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-currency-exchange'); ?>">Currency exchange</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-buy-sell'); ?>">Buy & Sell</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-wallet'); ?>">Wallet</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/crypto-transcations'); ?>">Transcations</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shopping-cart-full sidemenu-icon"></i><span class="sidemenu-label">E-Commerce</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-dashboard'); ?>">Dashboard</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-products'); ?>">Products</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-product-details'); ?>">Product Details</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-cart'); ?>">Cart</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-checkout'); ?>">Checkout</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-orders'); ?>">Orders</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/ecommerce-account'); ?>">Account</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Applications</span></li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('pages/widgets'); ?>"><span class="shape1"></span><span class="shape2"></span><i class="ti-server sidemenu-icon"></i><span class="sidemenu-label">Widgets</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon"></i><span class="sidemenu-label">Mail</span><span class="badge badge-warning side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/mail-inbox'); ?>">Mail-Inbox</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/viewmail'); ?>">View-Mail</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-write sidemenu-icon"></i><span class="sidemenu-label">Apps</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chat'); ?>">Chat</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/cards'); ?>">Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/calendar'); ?>">Calendar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/contacts'); ?>">Contacts</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-face-smile sidemenu-icon"></i><span class="sidemenu-label">Icons</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons1'); ?>">Font Awesome</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons2'); ?>">Material Design Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons3'); ?>">Simple Line Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons4'); ?>">Feather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons5'); ?>">Ionic Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons6'); ?>">Flag Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons7'); ?>">Pe7 Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons8'); ?>">Themify Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons9'); ?>">Typicons Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons10'); ?>">Weather Icons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/icons11'); ?>">Material Icons</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-map-alt sidemenu-icon"></i><span class="sidemenu-label">Maps</span><span class="badge badge-secondary side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/map-mapel'); ?>">Mapel Maps</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/map-vector'); ?>">Vector Maps</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-agenda sidemenu-icon"></i><span class="sidemenu-label">Tables</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/table-basic'); ?>">Basic Tables</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/table-data'); ?>">Data Tables</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Components</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-package sidemenu-icon"></i><span class="sidemenu-label">Elements</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/alerts'); ?>">Alerts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/avatar'); ?>">Avatar</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/breadcrumbs'); ?>">Breadcrumbs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/buttons'); ?>">Buttons</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/badge'); ?>">Badge</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/dropdown'); ?>">Dropdown</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/thumbnails'); ?>">Thumbnails</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/list-group'); ?>">List Group</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/navigation'); ?>">Navigation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/pagination'); ?>">Pagination</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/popover'); ?>">Popover</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/progress'); ?>">Progress</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/spinners'); ?>">Spinners</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/media-object'); ?>">Media Object</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/typography'); ?>">Typography</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/tooltip'); ?>">Tooltip</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/toast'); ?>">Toast</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/tags'); ?>">Tags</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-briefcase sidemenu-icon"></i><span class="sidemenu-label">Advanced UI</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/accordion'); ?>">Accordion</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/carousel'); ?>">Carousel</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/collapse'); ?>">Collapse</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/modals'); ?>">Modals</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/timeline'); ?>">Timeline</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/draggablecard'); ?>">Draggable-Cards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/sweet-alert'); ?>">Sweet Alert</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/rating'); ?>">Ratings</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/search'); ?>">Search</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/userlist'); ?>">Userlist</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/blog'); ?>">Blog</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Forms &amp; Charts</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-receipt sidemenu-icon"></i><span class="sidemenu-label">Forms</span><span class="badge badge-info side-badge">6</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-elements'); ?>">Form Elements</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-advanced'); ?>">Advanced Forms</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-layouts'); ?>">Form Layouts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-validation'); ?>">Form Validation</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-wizards'); ?>">Form Wizards</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/form-editor'); ?>">WYSIWYG Editor</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-bar-chart-alt sidemenu-icon"></i><span class="sidemenu-label">Charts</span><span class="badge badge-danger side-badge">5</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chart-morris'); ?>">Morris Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chart-flot'); ?>">Flot Charts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chart-chartjs'); ?>">ChartJS</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chart-spark-peity'); ?>">Sparkline &amp; Peity</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/chart-echart'); ?>">Echart</a>
								</li>
							</ul>
						</li>
						<li class="nav-header"><span class="nav-label">Other Pages</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-palette sidemenu-icon"></i><span class="sidemenu-label ">Pages</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/profile'); ?>">Profile</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/invoice'); ?>">Invoice</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/pricing'); ?>">Pricing</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/gallery'); ?>">Gallery</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/faq'); ?>">Faqs</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/success-message'); ?>">Success Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/danger-message'); ?>">Danger Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/warning-message'); ?>">Warning Message</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/empty'); ?>">Empty Page</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-shield sidemenu-icon"></i><span class="sidemenu-label">Utilities</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/background'); ?>">Background</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/border'); ?>">Border</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/display'); ?>">Display</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/flex'); ?>">Flex</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/height'); ?>">Height</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/margin'); ?>">Margin</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/padding'); ?>">Padding</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/position'); ?>">Position</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/width'); ?>">Width</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/extras'); ?>">Extras</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-lock sidemenu-icon"></i><span class="sidemenu-label">Custom Pages</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/signin'); ?>">Sign In</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/signup'); ?>">Sign Up</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/forgot'); ?>">Forgot Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/reset'); ?>">Reset Password</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/lockscreen'); ?>">Lockscreen</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/underconstruction'); ?>">UnderConstruction</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/error-404'); ?>">404 Error</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="<?php echo base_url('pages/error-500'); ?>">500 Error</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-menu sidemenu-icon"></i><span class="sidemenu-label">Submenu</span><i class="angle fe fe-chevron-left"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="#">Submenu-01</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">Submenu-02</span><i class="angle fe fe-chevron-left"></i></a>
									<ul class="nav-sub">
										<li class="nav-sub-item">
											<a class="nav-sub-link" href="#">Level-01</a>
										</li>
										<li class="nav-sub-item">
											<a class="nav-sub-link with-sub" href="#"></span><span class="sidemenu-label">level-02</span><i class="angle fe fe-chevron-left"></i></a>
											<ul class="nav-sub">
												<li class="nav-sub-item">
													<a class="nav-sub-link" href="#">Submenu-01</a>
												</li>
												<li class="nav-sub-item">
													<a class="nav-sub-link" href="#">Submenu-02</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->
                    
            <!-- Main Header-->
			<div class="main-header side-header sticky">
				<div class="container-fluid">
					<div class="main-header-right">
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
								<i class="fe fe-align-left header-icons"></i>
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

		<!-- Bootstrap js-->
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/popper.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js'); ?>"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="<?php echo base_url('public/assets/plugins/chart.js/Chart.bundle.min.js'); ?>"></script>

		<!-- Peity js-->
		<script src="<?php echo base_url('public/assets/plugins/peity/jquery.peity.min.js'); ?>"></script>

		<!-- Select2 js-->
		<script src="<?php echo base_url('public/assets/plugins/select2/js/select2.min.js'); ?>"></script>

		<!-- Perfect-scrollbar js -->
		<script src="<?php echo base_url('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js'); ?>"></script>

		<!-- Sidemenu js -->
		<script src="<?php echo base_url('public/assets/plugins/sidemenu/sidemenu1.js'); ?>"></script>

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

    