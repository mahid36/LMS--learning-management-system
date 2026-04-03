@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h1>Update Profile -</h1>
            </div>
            <div class="card-body">
                <form action="{{ route('update.profile') }}" method="post" enctype="multipart/form-data">
                    @csrf
                <section class="middle">
				<div class="container">
					<div class="row align-items-start justify-content-between">

						<div class="col-12 col-md-12 col-lg-4 col-xl-4 text-center miliods">
							<div class="d-block border rounded mfliud-bot">
								<div class="dashboard_author px-2 py-5">
									<div class="dash_auth_thumb circle p-1 border d-inline-flex mx-auto mb-2">
                                        @if (Auth::user()->photo == null)
                                        <img src="https://placehold.co/600x400" class="img-fluid circle" width="100" alt="" />
                                        @else
                                        <img src="{{ asset('uploads/users') }}/{{ Auth::user()->photo }}" class="img-fluid circle" width="100 " alt="" />
                                        @endif

									</div>
									<div class="dash_caption">
										<h4 class="fs-md ft-medium mb-0 lh-1">{{ Auth::user()->name }}</h4>
										<span class="text-muted smalls">{{ Auth::user()->country }}</span>
									</div>
								</div>

							</div>
						</div>

						<div class="col-12 col-md-12 col-lg-8 col-xl-8">
							<!-- row -->
							<div class="row align-items-center">

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-label">First Name *</label>
											<input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-label">Email *</label>
											<input type="email" name = "email"class="form-control" value="{{ Auth::user()->email }}" />
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">

											<label class="form-label">Current Password *</label>
											<input type="password" name="password" class="form-control"  />
                                            @error('password')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
                                            @if (session('wrong'))
                                            <strong class="text-danger">{{ (session('wrong')) }}</strong>
                                            @endif
										</div>
									</div>
									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">

											<label class="form-label">New Password *</label>
											<input type="password" name="new_password" class="form-control"  />
                                            @error('new_password')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
										</div>
									</div>

									<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
										<div class="form-group">

											<label class="form-label">Confirm Password *</label>
											<input type="password" name="password_confirmation" class="form-control"  />
                                             @error('password_confirmation')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-label">Country</label>
											<input type="text" name="country"class="form-control"  />
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-label">Address</label>
											<input type="text" name="address" class="form-control"  />
										</div>
									</div>

									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<label class="form-label">Profile Image</label>
											<input type="file" name="photo" class="form-control" />
                                            @error('photo')
                                            <strong class="text-danger">{{ $message }}</strong>
                                            @enderror
										</div>
									</div>
									<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
										<div class="form-group">
											<button type="submit" class="btn btn-dark">Update Profile</button>
										</div>

									</div>

							</div>
							<!-- row -->
						</div>

					</div>
				</div>
			</section>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('footer_script')
@if (session('success'))
        <script>
               Swal.fire({
  title: "{{ (session('success')) }}",
  icon: "success",
  draggable: true
});
        </script>

@endif

@endsection
