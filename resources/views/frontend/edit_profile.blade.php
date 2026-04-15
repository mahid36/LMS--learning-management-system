
@extends('frontend.student_profile_master')
@section('dashboard_content')

	<!-- Main content START -->
			<div class="col-xl-9">
				<!-- Edit profile START -->
				<div class="card bg-transparent border rounded-3">
					<!-- Card header -->
					<div class="card-header bg-transparent border-bottom">
						<h3 class="card-header-title mb-0">Edit Profile</h3>
					</div>
					<!-- Card body START -->
					<div class="card-body">
						<!-- Form -->
						<form class="row g-4" method="POST" action="" enctype="multipart/form-data">
                            @csrf
							<!-- Profile picture -->
							<div class="col-12 justify-content-center align-items-center">
								<label class="form-label">Profile picture</label>
								<div class="d-flex align-items-center">
									<label class="position-relative me-4" for="uploadfile-1" title="Replace this pic">
										<!-- Avatar place holder -->
										<span class="avatar avatar-xl">
											<img id="uploadfile-1-preview" class="avatar-img rounded-circle border border-white border-3 shadow" src="assets/images/avatar/07.jpg" alt="">
										</span>
										<!-- Remove btn -->
										<button type="button" class="uploadremove"><i class="bi bi-x text-white"></i></button>
									</label>
									<!-- Upload button -->
									<label class="btn btn-primary-soft mb-0" for="uploadfile-1">Change</label>
									<input id="uploadfile-1" class="form-control d-none" type="file">
								</div>
							</div>

							<!-- Full name -->
							<div class="col-12">
								<label class="form-label">Full name</label>
									<input type="text" class="form-control" name="name">
							</div>

							<!-- Username -->
							<div class="col-md-6">
								<label class="form-label">Username</label>
									<input type="text" class="form-control" name="username">
							</div>

							<!-- Email id -->
							<div class="col-md-6">
								<label class="form-label">Email id</label>
								<input class="form-control" name="email"type="text">
							</div>

                            <div class="col-lg-6">
                                <div class="mb-3">
									<label class="form-label">Current password</label>
									<input class="form-control" type="password" placeholder="Enter current password">
								</div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
									<label class="form-label">new password</label>
									<input class="form-control" type="password" name="new password">
								</div>
                            </div>

							<!-- Phone number -->
							<div class="col-md-6">
								<label class="form-label">Phone number</label>
								<input type="text" class="form-control"  name="number">
							</div>

							<!-- Location -->
							<div class="col-md-6">
								<label class="form-label">Location</label>
								<input class="form-control" type="text" name="location">
							</div>

							<!-- Education -->
							<div class="col-12">
								<label class="form-label">Education</label>
								<input class="form-control mb-2" type="text" name="education" >
								<button class="btn btn-sm btn-light mb-0"><i class="bi bi-plus me-1"></i>Add more</button>
							</div>

							<!-- Save button -->
							<div class="d-sm-flex justify-content-end">
								<button type="submit" class="btn btn-primary mb-0">Save changes</button>
							</div>
						</form>
					</div>
					<!-- Card body END -->
				</div>
			</div>	<!-- Edit profile END -->

@endsection

