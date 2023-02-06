<?= $this->include('layouts/verticalmenu/header'); ?>

		<!-- Fullcalendar css-->
		<link href='<?php echo  base_url('public/assets/plugins/fullcalendar/fullcalendar.css'); ?>' rel='stylesheet' />
		<link href='<?php echo  base_url('public/assets/plugins/fullcalendar/fullcalendar.print.min.css'); ?>' rel='stylesheet' media='print' />

	</head>

	<?= $this->include('layouts/verticalmenu/master'); ?>

						<!-- Page Header -->
						<div class="page-header">
							<div>
								<h2 class="main-content-title tx-24 mg-b-5">Calendar</h2>
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="#">Apps</a></li>
									<li class="breadcrumb-item active" aria-current="page">Calendar</li>
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
							<div class="col-sm-12 col-md-12">
								<div class="card custom-card">
									<div class="card-body">
										<div class="row "id="wrap">
											<div class="col-xl-2" id="external-events">
												<h4>Draggable Events</h4>
												<div id="external-events-list">
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
														<div class="fc-event-main">My Event 1</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
														<div class="fc-event-main">My Event 2</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
														<div class="fc-event-main">My Event 3</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
														<div class="fc-event-main">My Event 4</div>
													</div>
													<div class="fc-event fc-h-event fc-daygrid-event fc-daygrid-block-event">
														<div class="fc-event-main">My Event 5</div>
													</div>
												</div>
												<p>
													<input type="checkbox" id="drop-remove" />
													<label for="drop-remove">remove after drop</label>
												</p>
											</div>
											<div class="col-xl-10" id="calendar-wrap">
												<div id="calendar"></div>
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

			<!-- Modal -->
			<div aria-hidden="true" class="modal main-modal-calendar-schedule" id="modalSetSchedule" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h6 class="modal-title">Create New Event</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="calendar.html" id="mainFormCalendar" method="post" name="mainFormCalendar">
								<div class="form-group">
									<input class="form-control" placeholder="Add title" type="text">
								</div>
								<div class="form-group d-flex align-items-center">
									<label class="rdiobox mg-r-60"><input checked name="etype" type="radio" value="event"> <span>Event</span></label> <label class="rdiobox"><input name="etype" type="radio" value="reminder"> <span>Reminder</span></label>
								</div>
								<div class="form-group mg-t-30">
									<label class="tx-13 mg-b-5 tx-gray-600">Start Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="mainEventStartDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2 form-control main-event-time" data-placeholder="Select time" id="mainEventStartTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="tx-13 mg-b-5 tx-gray-600">End Date</label>
									<div class="row row-xs">
										<div class="col-7">
											<input class="form-control" id="EventEndDate" placeholder="Select date" type="text" value="">
										</div><!-- col-7 -->
										<div class="col-5">
											<select class="select2 form-control main-event-time" data-placeholder="Select time" id="EventEndTime">
												<option label="Select time">
													Select time
												</option>
											</select>
										</div>
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="Write some description (optional)" rows="2"></textarea>
								</div>
								<div class="d-flex mg-t-15 mg-lg-t-30">
									<button class="btn btn-main-primary pd-x-25 mg-r-5" type="submit">Save</button> <a class="btn btn-light" data-dismiss="modal" href="">Discard</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal -->

			<!-- Modal -->
			<div aria-hidden="true" class="modal main-modal-calendar-event" id="modalCalendarEvent" role="dialog">
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<nav class="nav nav-modal-event">
								<a class="nav-link" href="#"><i class="icon ion-md-open"></i></a>
								<a class="nav-link" href="#"><i class="icon ion-md-trash"></i></a>
								<a class="nav-link" data-dismiss="modal" href="#">
								<i class="icon ion-md-close"></i></a>
							</nav>
						</div>
						<div class="modal-body">
							<div class="row row-sm">
								<div class="col-sm-6">
									<label class="tx-13 tx-gray-600 mg-b-2">Start Date</label>
									<p class="event-start-date"></p>
								</div>
								<div class="col-sm-6">
									<label class="tx-13 mg-b-2">End Date</label>
									<p class="event-end-date"></p>
								</div>
							</div>
							<label class="tx-13 tx-gray-600 mg-b-2">Description</label>
							<p class="event-desc tx-gray-900 mg-b-30"></p>
							<a class="btn btn-secondary wd-80" data-dismiss="modal" href="">Close</a>
						</div>
					</div>
				</div>
			</div>
			<!-- /Modal -->

			<?= $this->include('layouts/verticalmenu/sidebar'); ?>

		</div>
		<!-- End Page -->

		<?= $this->include('layouts/verticalmenu/scripts'); ?>

		<!-- Moment js-->
		<script src="<?php echo  base_url('public/assets/plugins/moment/min/moment.min.js'); ?>"></script>

		<!-- Datepicker js-->
		<script src="<?php echo  base_url('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js'); ?>"></script>

		<!-- Full-calendar js-->
		<script src='<?php echo  base_url('public/assets/plugins/fullcalendar/fullcalendar.min.js'); ?>'></script>
		<script src="<?php echo  base_url('public/assets/js/calendar-events.js'); ?>"></script>
		<script src="<?php echo  base_url('public/assets/js/calendar.js'); ?>"></script>

	</body>
</html>