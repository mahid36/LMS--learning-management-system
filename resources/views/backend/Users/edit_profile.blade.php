@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1>Update Profile -</h1>
            </div>
            <div class="card-body">
                <section class="middle">
				<div class="container">
					<div class="row align-items-start justify-content-between">

						<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded mfliud-bot">
								<div class="dashboard_author px-2 py-5">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
										<img src="assets/img/team-1.jpg" class="img-fluid circle" width="100" alt="" />
									</div>
									<div class="dash_caption">
										<h4 class="fs-md ft-medium mb-0 lh-1">{{ Auth::user()->name }}</h4>
										<span class="text-muted smalls">Australia</span>
									</div>
								</div>

							</div>
						</div>

						<div class="col-12 col-md-12 col-lg-8 col-xl-8">
							<!-- row -->
							<div class="row align-items-center">
								<form class="row m-0">

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">First Name *</label>
											<input type="text" class="form-control" value="{{ Auth::user()->name }}" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Email ID *</label>
											<input type="text" class="form-control" value="{{ Auth::user()->email }}" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Current Password *</label>
											<input type="text" class="form-control" placeholder="Current Password" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">New Password *</label>
											<input type="text" class="form-control" placeholder="New Password" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Country</label>
											<input type="text" class="form-control" placeholder="Country" />
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Address</label>
											<input type="text" class="form-control" placeholder="Address" />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="small text-dark ft-medium">Profile Image</label>
											<input type="file" class="form-control" />
										</div>
									</div>



									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="button" class="btn btn-dark">Save Changes</button>
										</div>
									</div>

								</form>
							</div>
							<!-- row -->
						</div>

					</div>
				</div>
			</section>
            </div>
        </div>
    </div>
</div>
@endsection
