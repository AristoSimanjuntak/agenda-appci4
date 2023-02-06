<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Prism css-->
		<link href="<?php echo base_url('public/assets/plugins/prism/prism.css'); ?>" rel="stylesheet">

		<!-- Internal Darggable css-->
		<link href="<?php echo base_url('public/assets/plugins/darggable/jquery-ui-darggable.css'); ?>" rel="stylesheet">

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Draggable Cards</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Advanced UI</a></li>
									<li class="breadcrumb-item active" aria-current="page">Draggable Cards</li>
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
						<div class="sortable">
							<div class="row row-sm">
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="img-fluid draggable-img draggable-img" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
										<div class="card-footer">
											January, 20, 2017 4:30am
										</div>
									</div>
									<div class="card custom-card  bg-primary tx-white card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-white tx-medium mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15 tx-white-8">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link tx-white-7 hover-white" href="#">Card link</a> <a class="card-link tx-white-7 hover-white" href="#">Another link</a>
										</div>
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-secondary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<h5 class="main-content-label tx-dark tx-medium mg-b-10">The Card Title</h5>
											<p class="card-subtitle mg-b-15">This is the card subtitle</p>
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p><a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another link</a>
										</div>
									</div>
									<div class="card custom-card card-body tx-white-8 bg-gray-800 card-draggable">
										Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
										</div>
										<img alt="Image" class="img-fluid draggable-img " src="<?php echo base_url('public/assets/img/media/3.jpg'); ?>">
									</div>
								</div>
								<div class="col-lg-4 col-sm-12">
									<div class="card custom-card card-body card-draggable bg-primary tx-white">
										<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="card-img img-fluid draggable-img" src="<?php echo base_url('public/assets/img/media/6.jpg'); ?>">
										<div class="card-img-overlay pd-30 bg-black-4 d-flex flex-column justify-content-center">
											<p class="tx-white tx-medium mg-b-15">The Ghost Town</p>
											<p class="tx-white-7 tx-13">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
											<p class="tx-13 mg-b-0"><a class="tx-white" href="">Read more</a></p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<div class="card-header tx-medium">
											Description
										</div>
										<div class="card-body">
											<p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
										</div>
									</div>
									<div class="card custom-card card-draggable">
										<img alt="Image" class="img-fluid draggable-img draggable-img" src="<?php echo base_url('public/assets/img/media/1.jpg'); ?>">
										<div class="card-body">
											<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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

		<!-- Internal Darggable js-->
		<script src="<?php echo base_url('public/assets/plugins/darggable/jquery-ui-darggable.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/darggable/darggable.js'); ?>"></script>

		<!-- Internal Clipboard js-->
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.min.js'); ?>"></script>
		<script src="<?php echo base_url('public/assets/plugins/clipboard/clipboard.js'); ?>"></script>

		<!-- Internal Prism js-->
		<script src="<?php echo base_url('public/assets/plugins/prism/prism.js'); ?>"></script>

	</body>
</html>