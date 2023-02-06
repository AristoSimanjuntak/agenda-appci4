<?= $this->include('layouts/verticalmenu/header'); ?>

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Mail-Inbox</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Mail</a></li>
									<li class="breadcrumb-item active" aria-current="page">Mail-Inbox</li>
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

						<!-- row -->
						<div class="row row-sm">
							<div class="col-xl-3 col-lg-4">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="">
										<div class="p-4 border-bottom">
											<a class="btn btn-main-primary btn-block btn-compose" href="" id="btnCompose">Compose</a>
										</div>
										<div class="card-body tab-list-items">
											<div class="main-content-left main-content-left-mail">
												<div class="main-mail-menu">
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link active" href="">
															<i class="fe fe-mail"></i> Inbox <span>20</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-star"></i> Starred <span>3</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-bookmark"></i> Important <span>10</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-send"></i> Sent Mail <span>8</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-edit"></i> Drafts <span>15</span></a>
														<a class="nav-link" href="">
															<i class="fe fe-disc"></i> Spam <span>128</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-trash"></i> Trash <span>6</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Label</label>
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Social <span>10</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Work <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Personal <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Promotions <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder-plus"></i> Updates <span>17</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Tags</label>
													<nav class="nav main-nav-column">
														<a class="nav-link" href="#">
															<i class="fe fe-twitter"></i> Twitter <span>2</span></a>
														<a class="nav-link" href="#">
															<i class="fe fe-github"></i> Github <span>32</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-gitlab"></i> Gitlab <span>23</span>
														</a>
													</nav>
												</div><!-- main-mail-menu -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8  main-content-body-mail1">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="inbox-body p-4">
										<div class="mail-option">
											<div class="chk-all border-0">
												<div class="btn-group">
													<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
														All
														<i class="fe fe-chevron-down"></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"> None</a></li>
														<li><a href="#"> Read</a></li>
														<li><a href="#"> Unread</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
													<i class="fe fe-refresh-cw"></i>
												</a>
											</div>
											<div class="btn-group hidden-phone">
												<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
													More
													<i class="fe fe-chevron-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="#"><i class="fe fe-edit mr-2"></i> Mark as Read</a></li>
													<li><a href="#"><i class="fe fe fe-slash mr-2"></i> Spam</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="fe fe-trash mr-2"></i> Delete</a></li>
												</ul>
											</div>
											<ul class="unstyled inbox-pagination">
												<li><span>1-50 of 234</span></li>

												<li>
													<a class="btn np-btn" href="#"><i class="fe fe-chevron-right pagination-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="table-responsive">
											<table class="table table-inbox text-md-nowrap table-hover text-nowrap">
												<tbody>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Tim Reid, S P N</td>
														<td class="view-message">Boost Your Website Traffic</td>
														<td class="view-message text-right font-weight-semibold">April 01</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Freelancer.com </td>
														<td class="view-message">Stop wasting your visitors </td>
														<td class="view-message text-right font-weight-semibold">May 23</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message  dont-show">PHPClass</td>
														<td class="view-message ">Added a new class: Login Class Fast Site</td>
														<td class="view-message  text-right">9:27 AM</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Somebody requested a new password </td>
														<td class="view-message text-right font-weight-semibold">June 13</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Skype</td>
														<td class="view-message view-message">Password successfully changed</td>
														<td class="view-message text-right font-weight-semibold">March 24</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Google+</td>
														<td class="view-message">alireza, do you know</td>
														<td class="view-message text-right font-weight-semibold">March 09</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">WOW Slider </td>
														<td class="view-message">New WOW Slider v7.8 - 67% off</td>
														<td class="view-message text-right font-weight-semibold">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">LinkedIn Pulse</td>
														<td class="view-message">The One Sign Your Co-Worker Will Stab</td>
														<td class="view-message text-right font-weight-semibold">Feb 19</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Google Webmaster </td>
														<td class="view-message">Improve the search presence of WebSite</td>
														<td class="view-message text-right font-weight-semibold">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">JW Player</td>
														<td class="view-message">Last Chance: Upgrade to Pro for </td>
														<td class="view-message text-right font-weight-semibold">March 15</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Drupal Community</td>
														<td class="view-message view-message">Welcome to the Drupal Community</td>
														<td class="view-message text-right font-weight-semibold">March 04</td>
													</tr>

													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started text-warning"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show font-weight-semibold">Zoosk </td>
														<td class="view-message">7 new singles we think you'll like</td>
														<td class="view-message text-right font-weight-semibold">May 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">LinkedIn </td>
														<td class="view-message">Alireza: Nokia Networks, System Group and </td>
														<td class="view-message text-right font-weight-semibold">February 25</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Your account was recently logged into</td>
														<td class="view-message text-right font-weight-semibold">March 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Twitter</td>
														<td class="view-message">Your Twitter password has been changed</td>
														<td class="view-message text-right font-weight-semibold">April 07</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">InternetSeer</td>
														<td class="view-message">Performance Report</td>
														<td class="view-message text-right font-weight-semibold">July 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">Bertina </td>
														<td class="view-message">IMPORTANT: Don't lose your domains!</td>
														<td class="view-message text-right font-weight-semibold">June 16</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message dont-show font-weight-semibold">Laura Gaffin, S P N </td>
														<td class="view-message">Your Website On Google (Higher Rankings Are Better)</td>
														<td class="view-message text-right font-weight-semibold">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Facebook</td>
														<td class="view-message view-message">Alireza Zare Login faild</td>
														<td class="view-message text-right font-weight-semibold">feb 14</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">AddMe.com</td>
														<td class="view-message">Submit Your Website to the AddMe Business Directory</td>
														<td class="view-message text-right font-weight-semibold">August 10</td>
													</tr>
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold">Terri Rexer, S P N</td>
														<td class="view-message view-message">Forget Google AdWords: Un-Limited Clicks fo</td>
														<td class="view-message text-right font-weight-semibold">April 14</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<!-- mail-content -->
								</div>
							</div>
						</div>
						<!-- /row -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<?= $this->include('layouts/verticalmenu/footer'); ?>

			<!-- mail-compose modal -->
			<div class="main-mail-compose">
				<div>
					<div class="container">
						<div class="main-mail-compose-box">
							<div class="main-mail-compose-header">
								<span>New Message</span>
								<nav class="nav">
									<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
								</nav>
							</div>
							<div class="main-mail-compose-body">
								<div class="form-group mb-0">
									<label class="form-label">To</label>
									<div>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="form-group mb-0">
									<label class="form-label">Subject</label>
									<div>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="" rows="12"></textarea>
								</div>
								<div class="form-group mg-b-0">
									<nav class="nav">
										<a class="nav-link" data-toggle="tooltip" href="" title="Formatting"><i class="fas fa-font"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add attachment"><i class="fas fa-paperclip"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add photo"><i class="far fa-image"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Add link"><i class="fas fa-link"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Emoticons"><i class="far fa-smile"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Insert files into Drive"><i class="fab fa-google-drive"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Delete"><i class="far fa-trash-alt"></i></a>
									</nav>
									<button class="btn ripple btn-primary">Send</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End mail-compose modal-->

			<?= $this->include('layouts/verticalmenu/sidebar'); ?>
			</div>
		<!-- End Page -->
			<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Internal Check-all-mail js-->
		<script src="<?php echo  base_url('public/assets/js/check-all-mail.js'); ?>"></script>

	</body>
</html>