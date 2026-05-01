@extends('frontend.master')
@section('content')

<section class="bg-light py-0 py-sm-5">
	<div class="container">
		<div class="row py-5">
			<div class="col-lg-8">

				<!-- Badge -->
				<h6 class="mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block">{{ $course_info->rel_to_category->category_name }}</h6>
				<!-- Title -->
				<h1>{{$course_info->course_title}}</p>
				<!-- Content -->
				<ul class="list-inline mb-0">
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-star text-warning me-2"></i>4.5/5.0</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-user-graduate text-orange me-2"></i>12k Enrolled</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="fas fa-signal text-success me-2"></i>{{ $course_info->rel_to_level->level_name }}</li>
					<li class="list-inline-item h6 me-3 mb-1 mb-sm-0"><i class="bi bi-patch-exclamation-fill text-danger me-2"></i>Last updated -{{ $course_info->created_at->format('m/Y') }}</li>
					<li class="list-inline-item h6 mb-0"><i class="fas fa-globe text-info me-2"></i>{{  $course_info->rel_to_language->language_name}}</li>

				</ul>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page intro END -->

<!-- =======================
Page content START -->
<section class="pb-0 py-lg-5">
	<div class="container">
		<div class="row">
			<!-- Main content START -->
			<div class="col-lg-8">
				<div class="card shadow rounded-2 p-0">
					<!-- Tabs START -->
					<div class="card-header border-bottom px-4 py-3">
						<ul class="nav nav-pills nav-tabs-line py-0" id="course-pills-tab" role="tablist">
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0 active" id="course-pills-tab-1" data-bs-toggle="pill" data-bs-target="#course-pills-1" type="button" role="tab" aria-controls="course-pills-1" aria-selected="true">Overview</button>
							</li>

							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-3" data-bs-toggle="pill" data-bs-target="#course-pills-3" type="button" role="tab" aria-controls="course-pills-3" aria-selected="false">Instructor</button>
							</li>
							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-4" data-bs-toggle="pill" data-bs-target="#course-pills-4" type="button" role="tab" aria-controls="course-pills-4" aria-selected="false">Reviews</button>
							</li>

							<!-- Tab item -->
							<li class="nav-item me-2 me-sm-4" role="presentation">
								<button class="nav-link mb-2 mb-md-0" id="course-pills-tab-6" data-bs-toggle="pill" data-bs-target="#course-pills-6" type="button" role="tab" aria-controls="course-pills-6" aria-selected="false">Comment</button>
							</li>
						</ul>
					</div>
					<!-- Tabs END -->

					<!-- Tab contents START -->
					<div class="card-body p-4">
						<div class="tab-content pt-2" id="course-pills-tabContent">
							<!-- Content START -->
							<div class="tab-pane fade show active" id="course-pills-1" role="tabpanel" aria-labelledby="course-pills-tab-1">
								<!-- Course detail START -->
								<h5 class="mb-3">Course Description</h5>
								<p class="mb-0">{!! $course_info->long_desp !!}</p>

								<!-- Course detail END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-3" role="tabpanel" aria-labelledby="course-pills-tab-3">
								<!-- Card START -->
								<div class="card mb-0 mb-md-4">
									<div class="row g-0 align-items-center">
										<div class="col-md-5">
											<!-- Image -->
											<img src="{{ asset('uploads/instructors/'. $course_info->rel_to_instructor->instructor_image) }}" class="img-fluid rounded-circle" alt="instructor-image">
										</div>
										<div class="col-md-7">
											<!-- Card body -->
											<div class="card-body">
												<!-- Title -->
												<h3 class="card-title mb-0">{{ $course_info->rel_to_instructor->instructor_name }}</h3>
												<p class="mb-2">Instructor of {{ $course_info->rel_to_category->category_name }}</p>
												<!-- Social button -->
												<ul class="list-inline mb-3">
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-twitter"><i class="fab fa-twitter-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-instagram"><i class="fab fa-instagram-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-facebook"><i class="fab fa-facebook-square"></i></a>
													</li>
													<li class="list-inline-item me-3">
														<a href="#" class="fs-5 text-linkedin"><i class="fab fa-linkedin"></i></a>
													</li>
													<li class="list-inline-item">
														<a href="#" class="fs-5 text-youtube"><i class="fab fa-youtube-square"></i></a>
													</li>
												</ul>

												<!-- Info -->
												<ul class="list-inline">
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></span>
															<span class="h6 fw-light mb-0 ms-2">9.1k</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></span>
															<span class="h6 fw-light mb-0 ms-2">4.5</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-danger bg-opacity-10 text-danger rounded-circle"><i class="fas fa-play"></i></span>
															<span class="h6 fw-light mb-0 ms-2">29 Courses</span>
														</div>
													</li>
													<li class="list-inline-item">
														<div class="d-flex align-items-center me-3 mb-2">
															<span class="icon-md bg-info bg-opacity-10 text-info rounded-circle"><i class="fas fa-comment-dots"></i></span>
															<span class="h6 fw-light mb-0 ms-2">205</span>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Card END -->

								<!-- Instructor info -->
								<h5 class="mb-3">About Instructor</h5>
								<p class="mb-3">Fulfilled direction use continual set him propriety continued. Saw met applauded favorite deficient engrossed concealed and her. Concluded boy perpetual old supposing. Farther related bed and passage comfort civilly. Dashboard see frankness objection abilities. As hastened oh produced prospect formerly up am. Placing forming nay looking old married few has. Margaret disposed of add screened rendered six say his striking confined. </p>
								<p class="mb-3">As it so contrasted oh estimating instrument. Size like body someone had. Are conduct viewing boy minutes warrant the expense? Tolerably behavior may admit daughters offending her ask own. Praise effect wishes change way and any wanted.</p>
								<!-- Email address -->
								<div class="col-12">
									<ul class="list-group list-group-borderless mb-0">
										<li class="list-group-item pb-0">Mail ID:<a href="#" class="ms-2">{{ $course_info->rel_to_instructor->email }}</a></li>
										<li class="list-group-item pb-0">Web:<a href="#" class="ms-2">https://eduport.com</a></li>
									</ul>
								</div>
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-4" role="tabpanel" aria-labelledby="course-pills-tab-4">
								<!-- Review START -->
								<div class="row mb-4">
									<h5 class="mb-4">Our Student Reviews</h5>

									<!-- Rating info -->
									<div class="col-md-4 mb-3 mb-md-0">
										<div class="text-center">
											<!-- Info -->
											<h2 class="mb-0">4.5</h2>
											<!-- Star -->
											<ul class="list-inline mb-0">
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
												<li class="list-inline-item me-0"><i class="fas fa-star-half-alt text-warning"></i></li>
											</ul>
											<p class="mb-0">(Based on todays review)</p>
										</div>
									</div>

									<!-- Progress-bar and star -->
									<div class="col-md-8">
										<div class="row align-items-center">
											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>

											<!-- Progress bar and Rating -->
											<div class="col-6 col-sm-8">
												<!-- Progress item -->
												<div class="progress progress-sm bg-warning bg-opacity-15">
													<div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>

											<div class="col-6 col-sm-4">
												<!-- Star item -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
													<li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- Review END -->

								<!-- Student review START -->
								<div class="row">
									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0">Jacqueline Miller</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 days ago</p>
											<p class="mb-2">Perceived end knowledge certainly day sweetness why cordially. Ask a quick six seven offer see among. Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio1">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio1"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio2">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio2"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>
									</div>

									<!-- Comment children level 1 -->
									<div class="d-md-flex mb-4 ps-4 ps-md-5">
										<!-- Avatar -->
										<div class="avatar avatar-lg me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0">Louis Ferguson</h5>
											</div>
											<!-- Info -->
											<p class="small mb-2">1 days ago</p>
											<p class="mb-2">Water timed folly right aware if oh truth. Imprudence attachment him for sympathize. Large above be to means. Dashwood does provide stronger is. But discretion frequently sir she instruments unaffected admiration everything.</p>
										</div>
									</div>

									<!-- Divider -->
									<hr>
									<!-- Review item END -->

									<!-- Review item START -->
									<div class="d-md-flex my-4">
										<!-- Avatar -->
										<div class="avatar avatar-xl me-4 flex-shrink-0">
											<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
										</div>
										<!-- Text -->
										<div>
											<div class="d-sm-flex mt-1 mt-md-0 align-items-center">
												<h5 class="me-3 mb-0">Dennis Barrett</h5>
												<!-- Review star -->
												<ul class="list-inline mb-0">
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="fas fa-star text-warning"></i></li>
													<li class="list-inline-item me-0"><i class="far fa-star text-warning"></i></li>
												</ul>
											</div>
											<!-- Info -->
											<p class="small mb-2">2 days ago</p>
											<p class="mb-2">Handsome met debating sir dwelling age material. As style lived he worse dried. Offered related so visitors we private removed. Moderate do subjects to distance. </p>
											<!-- Like and dislike button -->
											<div class="btn-group" role="group" aria-label="Basic radio toggle button group">
												<!-- Like button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio3">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio3"><i class="far fa-thumbs-up me-1"></i>25</label>
												<!-- Dislike button -->
												<input type="radio" class="btn-check" name="btnradio" id="btnradio4">
												<label class="btn btn-outline-light btn-sm mb-0" for="btnradio4"> <i class="far fa-thumbs-down me-1"></i>2</label>
											</div>
										</div>
									</div>
									<!-- Review item END -->
									<!-- Divider -->
									<hr>
								</div>
								<!-- Student review END -->

								<!-- Leave Review START -->
								<div class="mt-2">
									<h5 class="mb-4">Leave a Review</h5>
									<form class="row g-3">
										<!-- Name -->
										<div class="col-md-6 bg-light-input">
											<input type="text" class="form-control" id="inputtext" placeholder="Name" aria-label="First name">
										</div>
										<!-- Email -->
										<div class="col-md-6 bg-light-input">
											<input type="email" class="form-control" placeholder="Email" id="inputEmail4">
										</div>
										<!-- Rating -->
										<div class="col-12 bg-light-input">
											<select id="inputState2" class="form-select js-choice">
												<option selected="">★★★★★ (5/5)</option>
												<option>★★★★☆ (4/5)</option>
												<option>★★★☆☆ (3/5)</option>
												<option>★★☆☆☆ (2/5)</option>
												<option>★☆☆☆☆ (1/5)</option>
											</select>
										</div>
										<!-- Message -->
										<div class="col-12 bg-light-input">
											<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Your review" rows="3"></textarea>
										</div>
										<!-- Button -->
										<div class="col-12">
											<button type="submit" class="btn btn-primary mb-0">Post Review</button>
										</div>
									</form>
								</div>
								<!-- Leave Review END -->

							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-5" role="tabpanel" aria-labelledby="course-pills-tab-5">
								<!-- Title -->
								<h5 class="mb-3">Frequently Asked Questions</h5>
								<!-- Accordion START -->
								<div class="accordion accordion-flush" id="accordionExample">
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												<span class="text-secondary fw-bold me-3">01</span>
												<span class="h6 mb-0">How Digital Marketing Work?</span>
											</button>
										</h2>
										<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper up its enjoyment agreeable depending. Timed voice share led him to widen noisy young. At weddings believed laughing although the material does the exercise of. Up attempt offered ye civilly so sitting to. She new course gets living within Elinor joy. She rapturous suffering concealed.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingTwo">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												<span class="text-secondary fw-bold me-3">02</span>
												<span class="h6 mb-0">What is SEO?</span>
											</button>
										</h2>
										<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												Pleasure and so read the was hope entire first decided the so must have as on was want up of I will rival in came this touched got a physics to travelling so all especially refinement monstrous desk they was arrange the overall helplessly out of particularly ill are purer.
												<p class="mt-2">Person she control of to beginnings view looked eyes Than continues its and because and given and shown creating curiously to more in are man were smaller by we instead the these sighed Avoid in the sufficient me real man longer of his how her for countries to brains warned notch important Finds be to the of on the increased explain noise of power deep asking contribution this live of suppliers goals bit separated poured sort several the was organization the if relations go work after mechanic But we've area wasn't everything needs of and doctor where would.</p>
												Go he prisoners And mountains in just switching city steps Might rung line what Mr Bulk; Was or between towards the have phase were its world my samples are the was royal he luxury the about trying And on he to my enough is was the remember a although lead in were through serving their assistant fame day have for its after would cheek dull have what in go feedback assignment Her of a any help if the a of semantics is rational overhauls following in from our hazardous and used more he themselves the parents up just regulatory.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingThree">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<span class="text-secondary fw-bold me-3">03</span>
												<span class="h6 mb-0">Who should join this course?</span>
											</button>
										</h2>
										<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												Post no so what deal evil rent by real in. But her ready least set lived spite solid. September how men saw tolerably two behavior arranging. She offices for highest and replied one venture pasture. Applauded no discovery in newspaper allowance am northward. Frequently partiality possession resolution at or appearance unaffected me. Engaged its was the evident pleased husband. Ye goodness felicity do disposal dwelling no. First am plate jokes to began to cause a scale. <strong>Subjects he prospect elegance followed no overcame</strong> possible it on.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFour">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
												<span class="text-secondary fw-bold me-3">04</span>
												<span class="h6 mb-0">What are the T&C for this program?</span>
											</button>
										</h2>
										<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												Night signs creeping yielding green Seasons together man green fruitful make fish behold earth unto you'll lights living moving sea open for fish day multiply tree good female god had fruitful of creature fill shall don't day fourth lesser he the isn't let multiply may Creeping earth under was You're without which image stars in Own creeping night of wherein Heaven years their he over doesn't whose won't kind seasons light Won't that fish him whose won't also it dominion heaven fruitful Whales created And likeness doesn't that Years without divided saying morning creeping hath you'll seas cattle in multiply under together in us said above dry tree herb saw living darkness without have won't for i behold meat brought winged Moving living second beast Over fish place beast image very him evening Thing they're fruit together forth day Seed lights Land creature together Multiply waters form brought.
											</div>
										</div>
									</div>
									<!-- Item -->
									<div class="accordion-item">
										<h2 class="accordion-header" id="headingFive">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
												<span class="text-secondary fw-bold me-3">05</span>
												<span class="h6 mb-0">What certificates will I be received for this program?</span>
											</button>
										</h2>
										<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
											<div class="accordion-body pt-0">
												Smile spoke total few great had never their too Amongst moments do in arrived at my replied Fat weddings servants but man believed prospect Companions understood is as especially pianoforte connection introduced Nay newspaper can sportsman are admitting gentleman belonging his Is oppose no he summer lovers twenty in Not his difficulty boisterous surrounded bed Seems folly if in given scale Sex contented dependent conveying advantage.
											</div>
										</div>
									</div>
								</div>
								<!-- Accordion END -->
							</div>
							<!-- Content END -->

							<!-- Content START -->
							<div class="tab-pane fade" id="course-pills-6" role="tabpanel" aria-labelledby="course-pills-tab-6">
								<!-- Review START -->
								<div class="row">
									<div class="col-12">
										<h5 class="mb-4">Ask Your Question</h5>

										<!-- Comment box -->
										<div class="d-flex mb-4">
											<!-- Avatar -->
											<div class="avatar avatar-sm flex-shrink-0 me-2">
												<a href="#"> <img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt=""> </a>
											</div>

											<form class="w-100 d-flex">
												<textarea class="one form-control pe-4 bg-light" id="autoheighttextarea" rows="1" placeholder="Add a comment..."></textarea>
												<button class="btn btn-primary ms-2 mb-0" type="button">Post</button>
											</form>
										</div>

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3 mb-4">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex mb-3">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 lead fw-bold"> <a href="#!"> Frances Guerrero </a></h6>
																		<p class="h6 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection?</p>
																	</div>
																	<small>5hr</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> Like (3)</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> Reply</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> View 5 replies</a> </li>
															</ul>
														</div>
													</div>

													<!-- Comment item nested START -->
													<ul class="list-unstyled ms-4">
														<!-- Comment item START -->
														<li class="comment-item">
															<div class="d-flex">
																<!-- Avatar -->
																<div class="avatar avatar-xs flex-shrink-0">
																	<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/06.jpg" alt=""></a>
																</div>
																<!-- Comment by -->
																<div class="ms-2">
																	<div class="bg-light p-3 rounded">
																		<div class="d-flex justify-content-center">
																			<div class="me-2">
																				<h6 class="mb-1  lead fw-bold"> <a href="#"> Lori Stevens </a> </h6>
																				<p class=" mb-0">See resolved goodness felicity shy civility domestic had but Drawings offended yet answered Jennings perceive. Domestic had but Drawings offended yet answered Jennings perceive.</p>
																			</div>
																			<small>2hr</small>
																		</div>
																	</div>
																	<!-- Comment react -->
																	<ul class="nav nav-divider py-2 small">
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> Like (5)</a></li>
																		<li class="nav-item"><a class="text-primary-hover" href="#!"> Reply</a>	</li>
																	</ul>
																</div>
															</div>
														</li>
														<!-- Comment item END -->
													</ul>
													<!-- Comment item nested END -->
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

										<!-- Comment item START -->
										<div class="border p-2 p-sm-4 rounded-3">
											<ul class="list-unstyled mb-0">
												<li class="comment-item">
													<div class="d-flex">
														<!-- Avatar -->
														<div class="avatar avatar-sm flex-shrink-0">
															<a href="#"><img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt=""></a>
														</div>
														<div class="ms-2">
															<!-- Comment by -->
															<div class="bg-light p-3 rounded">
																<div class="d-flex justify-content-center">
																	<div class="me-2">
																		<h6 class="mb-1 lead fw-bold"> <a href="#!"> Louis Ferguson </a></h6>
																		<p class="h6 mb-0">Removed demands expense account in outward tedious do. Particular way thoroughly unaffected projection?</p>
																	</div>
																	<small>5hr</small>
																</div>
															</div>
															<!-- Comment react -->
															<ul class="nav nav-divider py-2 small">
																<li class="nav-item"> <a class="text-primary-hover" href="#"> Like</a> </li>
																<li class="nav-item"> <a class="text-primary-hover" href="#"> Reply</a> </li>
															</ul>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<!-- Comment item END -->

									</div>

								</div>
							</div>
							<!-- Content END -->

						</div>
					</div>
					<!-- Tab contents END -->
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4 pt-5 pt-lg-0">
				<div class="row mb-5 mb-lg-0">
					<div class="col-md-6 col-lg-12">
						<!-- Video START -->
						<div class="card shadow p-2 mb-4 z-index-9">
					<div class="card shadow p-2 mb-4 z-index-9">
                 <div class="overflow-hidden rounded-3 position-relative">

                        <!-- Main Image -->
                     <img src="{{ asset('uploads/course/preview/' . $course_info->preview) }}"
                        class="card-img"alt="course image">

             <!-- Overlay (optional) -->
                <div class="position-absolute top-50 start-50 translate-middle">
                </div>
                    </div>
                </div>
							<!-- Card body -->
							<div class="card-body px-3">
								<!-- Info -->
								<div class="d-flex justify-content-between align-items-center">
									<!-- Price and time -->
									<div>
										<div class="d-flex align-items-center">
                                            @if ($course_info->discount)
											<h3 class="fw-bold mb-0 me-2">&#2547; {{ $course_info->discount_price }}</h3>
											<span class="text-decoration-line-through mb-0 me-2">{{ $course_info->course_price }}</span>
											<span class="badge text-bg-orange mb-0">{{ $course_info->discount }}% off</span>
                                            @else
                                                <h3 class="fw-bold mb-0 me-2">&#2547; {{ $course_info->course_price }}</h3>
                                              @endif
										</div>
									</div>

									<!-- Share button with dropdown -->
									<div class="dropdown">
										<!-- Share button -->
										<a href="#" class="btn btn-sm btn-light rounded small" role="button" id="dropdownShare" data-bs-toggle="dropdown" aria-expanded="false">
											<i class="fas fa-fw fa-share-alt"></i>
										</a>
										<!-- dropdown button -->
										<ul class="dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded" aria-labelledby="dropdownShare">
											<li><a class="dropdown-item" href="#"><i class="fab fa-twitter-square me-2"></i>Twitter</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-facebook-square me-2"></i>Facebook</a></li>
											<li><a class="dropdown-item" href="#"><i class="fab fa-linkedin me-2"></i>LinkedIn</a></li>
											<li><a class="dropdown-item" href="#"><i class="fas fa-copy me-2"></i>Copy link</a></li>
										</ul>
									</div>
								</div>

								<!-- Buttons -->
								<div class="mt-3 d-sm-flex justify-content-sm-between">
									<a href="#" class="btn btn-outline-primary mb-0">Free trial</a>
                                    <form action="{{ route('add.cart') }}" method="POST">
                                        @csrf
                                    <input type="hidden" name="course_id" value="{{ $course_info->id }}">
									<button type="submit" class="btn btn-success mb-0">Add to cart</button>
                                </form>
								</div>

							</div>
						</div>
						<!-- Video END -->

						<!-- Course info START -->
						<div class="card card-body shadow p-4 mb-4">
							<!-- Title -->
							<h4 class="mb-3">This course includes</h4>
							<ul class="list-group list-group-borderless">
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-book-open text-primary"></i>Lectures</span>
									<span>{{ $course_info->total_lecture }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-clock text-primary"></i>Duration</span>
									<span>{{ $course_info->course_time }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-signal text-primary"></i>Skills</span>
									<span>{{ $course_info->rel_to_level->level_name }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-globe text-primary"></i>Language</span>
									<span>{{ $course_info->rel_to_language->language_name }}</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-user-clock text-primary"></i>Deadline</span>
									<span>Nov 30 2021</span>
								</li>
								<li class="list-group-item d-flex justify-content-between align-items-center">
									<span class="h6 fw-light mb-0"><i class="fas fa-fw fa-medal text-primary"></i>Certificate</span>
									<span>Yes</span>
								</li>
							</ul>
						</div>
						<!-- Course info END -->
					</div>

					<div class="col-md-6 col-lg-12">
						<!-- Recently Viewed START -->
						<div class="card card-body shadow p-4 mb-4">
							<!-- Title -->
							<h4 class="mb-3">Recently Viewed</h4>
							<!-- Course item START -->
							<div class="row gx-3 mb-3">
								<!-- Image -->
								<div class="col-4">
									<img class="rounded" src="assets/images/courses/4by3/21.jpg" alt="">
								</div>
								<!-- Info -->
								<div class="col-8">
									<h6 class="mb-0"><a href="#">Fundamentals of Business Analysis</a></h6>
									<ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="text-success">$130</span>
											<span class="h6 fw-light">4.5<i class="fas fa-star text-warning ms-1"></i></span>
										</li>
									</ul>
								</div>
							</div>
							<!-- Course item END -->

							<!-- Course item START -->
							<div class="row gx-3">
								<!-- Image -->
								<div class="col-4">
									<img class="rounded" src="assets/images/courses/4by3/18.jpg" alt="">
								</div>
								<!-- Info -->
								<div class="col-8">
									<h6 class="mb-0"><a href="#">The Complete Video Production Bootcamp</a></h6>
									<ul class="list-group list-group-borderless mt-1 d-flex justify-content-between">
										<li class="list-group-item px-0 d-flex justify-content-between">
											<span class="text-success">$150</span>
											<span class="h6 fw-light">4.0<i class="fas fa-star text-warning ms-1"></i></span>
										</li>
									</ul>
								</div>
							</div>
							<!-- Course item END -->
						</div>
						<!-- Recently Viewed END -->

						<!-- Tags START -->
						<div class="card card-body shadow p-4">
							<h4 class="mb-3">Popular Tags</h4>
							<ul class="list-inline mb-0">
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">blog</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">business</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">theme</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">bootstrap</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">data science</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">web development</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">tips</a> </li>
								<li class="list-inline-item"> <a class="btn btn-outline-light btn-sm" href="#">machine learning</a> </li>
							</ul>
						</div>
						<!-- Tags END -->
					</div>
				</div><!-- Row End -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

<!-- =======================
Listed courses START -->
<section class="pt-0">
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<h2 class="mb-0">Top Listed Courses</h2>
		</div>

		<div class="row">
			<!-- Slider START -->
			<div class="tiny-slider arrow-round arrow-blur arrow-hover">
				<div class="tiny-slider-inner" data-autoplay="false" data-arrow="true" data-edge="2" data-dots="false" data-items="3" data-items-lg="2" data-items-sm="1">

					<!-- Card Item START -->
					<div class="pb-4">
						<div class="card p-2 border">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<img src="assets/images/courses/4by3/17.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle text-center">
											<i class="fas fa-shopping-cart text-danger"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light ms-2 mb-0">9.1k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light ms-2 mb-0">4.5</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/09.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h5 class="card-title"><a href="#">The Complete Digital Marketing Course - 12 Courses in 1</a></h5>
								<!-- Badge and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Personal Development</a>
									<!-- Price -->
									<h3 class="text-success mb-0">$140</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Item END -->

					<!-- Card Item START -->
					<div class="pb-4">
						<div class="card p-2 border">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<img src="assets/images/courses/4by3/18.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle text-center">
											<i class="fas fa-shopping-cart text-danger"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light ms-2 mb-0">2.5k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light ms-2 mb-0">3.6</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/07.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h5 class="card-title"><a href="#">Fundamentals of Business Analysis</a></h5>
								<!-- Badge and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Business Development</a>
									<!-- Price -->
									<h3 class="text-success mb-0">$160</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Item END -->

					<!-- Card Item START -->
					<div class="pb-4">
						<div class="card p-2 border">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<img src="assets/images/courses/4by3/21.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle text-center">
											<i class="fas fa-shopping-cart text-danger"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light ms-2 mb-0">6k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light ms-2 mb-0">3.8</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/05.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h5 class="card-title"><a href="#">Google Ads Training: Become a PPC Expert</a></h5>
								<!-- Badge and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i> SEO</a>
									<!-- Price -->
									<h3 class="text-success mb-0">$226</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Item END -->

					<!-- Card Item START -->
					<div class="pb-4">
						<div class="card p-2 border">
							<div class="rounded-top overflow-hidden">
								<div class="card-overlay-hover">
									<img src="assets/images/courses/4by3/20.jpg" class="card-img-top" alt="course image">
								</div>
								<!-- Hover element -->
								<div class="card-img-overlay">
									<div class="card-element-hover d-flex justify-content-end">
										<a href="#" class="icon-md bg-white rounded-circle text-center">
											<i class="fas fa-shopping-cart text-danger"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<!-- Badge and icon -->
								<div class="d-flex justify-content-between">
									<!-- Rating and info -->
									<ul class="list-inline hstack gap-2 mb-0">
										<!-- Info -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-orange bg-opacity-10 text-orange rounded-circle"><i class="fas fa-user-graduate"></i></div>
											<span class="h6 fw-light ms-2 mb-0">15k</span>
										</li>
										<!-- Rating -->
										<li class="list-inline-item d-flex justify-content-center align-items-center">
											<div class="icon-md bg-warning bg-opacity-15 text-warning rounded-circle"><i class="fas fa-star"></i></div>
											<span class="h6 fw-light ms-2 mb-0">4.8</span>
										</li>
									</ul>
									<!-- Avatar -->
									<div class="avatar avatar-sm">
										<img class="avatar-img rounded-circle" src="assets/images/avatar/02.jpg" alt="avatar">
									</div>
								</div>
								<!-- Divider -->
								<hr>
								<!-- Title -->
								<h5 class="card-title"><a href="#">Behavior, Psychology and Care Training</a></h5>
								<!-- Badge and Price -->
								<div class="d-flex justify-content-between align-items-center">
									<a href="#" class="badge bg-info bg-opacity-10 text-info"><i class="fas fa-circle small fw-bold me-2"></i>Lifestyle</a>
									<!-- Price -->
									<h3 class="text-success mb-0">$342</h3>
								</div>
							</div>
						</div>
					</div>
					<!-- Card Item END -->
				</div>
			</div>
			<!-- Slider END -->
		</div>
	</div>
</section>
<!-- =======================
Listed courses END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->
@endsection
@section('footer_script')


@if (session('success'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: '{{ session('success') }}'
        });
    </script>
    @endif

    @if (session('already'))
<script>
const Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 2000,
    timerProgressBar: true
});

Toast.fire({
    icon: "warning",
    title: '{{ session('already') }}'
});
</script>
@endif
@endsection
