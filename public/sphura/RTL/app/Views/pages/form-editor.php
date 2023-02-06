<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Internal Quill css-->
		<link href="<?php echo base_url('public/assets/plugins/quill/quill.snow.css'); ?>" rel="stylesheet">
		<link href="<?php echo base_url('public/assets/plugins/quill/quill.bubble.css'); ?>" rel="stylesheet">

		<!-- Internal line-awesome css-->
		<link href="<?php echo base_url('public/assets/plugins/line-awesome/css/line-awesome.min.css'); ?>" rel="stylesheet"/>
		
		<!-- Internal Summernote css-->
		<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/summernote/summernote-bs4.css'); ?>">
	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Form Editor</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Forms</a></li>
									<li class="breadcrumb-item active" aria-current="page">Form Editor</li>
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
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Summernote</h6>
											<p class="text-muted card-sub-title">Adding a Plugin to Summernote is as easy as adding Summernote to the page you want Summernote to appear in.</p>
										</div>
										<div id="summernote"></div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Quill Editor</h6>
											<p class="text-muted card-sub-title">Quill is a modern WYSIWYG editor built for compatibility and extensibility. Replacement icons from default svg icons are made from <a href="https://icons8.com/line-awesome">Line Awesome</a></p>
										</div>
										<div class="ql-wrapper">
											<div id="quillEditor">
												<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
												<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Quill Editor in Modal</h6>
											<p class="text-muted card-sub-title">Quill text editor that wrap inside a modal.</p>
										</div>
										<div class="">
											<a class="btn ripple btn-primary" data-target="#modalQuill" data-toggle="modal" href="">View Live Demo</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="row row-sm">
							<div class="col-lg-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div>
											<h6 class="main-content-label mb-1">Quill Inline-Edit Editor</h6>
											<p class="text-muted card-sub-title">Quill text editor that can inline edit in a page.</p>
										</div>
										<div class="wd-xl-70p ht-350">
											<div class="ql-scrolling-demo" id="scrolling-container">
												<div id="quillInline">
													<h2>Try to select me and edit</h2>
													<p><br></p>
													<p>Pippin looked out from the shelter of <a href="https://www.bootstrapdash.com">Gandalf"s cloak</a>. He wondered if he was awake or still sleeping, still in the swift-moving dream in which he had been wrapped so long since the great ride began. The <a href="http://bootstrapdash.net">dark world</a> was rushing by and the wind sang loudly in his ears. He could see nothing but the wheeling stars, and away to his right vast shadows against the sky where the mountains of the South marched past. Sleepily he tried to reckon the times and stages of their journey, but his memory was drowsy and uncertain.</p>
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

			<!-- Quill Modal -->
			<div class="modal" id="modalQuill">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header pd-20">
							<h6 class="modal-title">Create New Document</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body pd-0">
							<div class="ql-wrapper ql-wrapper-modal ht-250">
								<div class="flex-1" id="quillEditorModal2">
									<p><strong>Quill</strong> is a free, open source <a href="https://github.com/quilljs/quill/">WYSIWYG editor</a> built for the modern web. With its <a href="https://quilljs.com/docs/modules/">modular architecture</a> and expressive API, it is completely customizable to fit any need.</p><br>
									<p>The icons use here as a replacement to default svg icons are from <a href="https://icons8.com/line-awesome">Line Awesome Icons</a>.</p>
								</div>
							</div>
						</div>
						<div class="modal-footer pd-20">
							<button class="btn ripple btn-main-primary" type="button">Save changes</button> <button class="btn ripple btn-light" type="button">Cancel</button>
						</div>
					</div>
				</div>
			</div>
			<!-- End Quill Modal -->

		</div>
		<!-- End Row -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Quill js-->
		<script src="<?php echo base_url('public/assets/plugins/quill/quill.min.js'); ?>"></script>

		<!-- Internal Summernote js-->
		<script src="<?php echo base_url('public/assets/plugins/summernote/summernote-bs4.js'); ?>"></script>

		<!-- Internal Form-editor js-->
		<script src="<?php echo base_url('public/assets/js/form-editor.js'); ?>"></script>

	</body>
</html>