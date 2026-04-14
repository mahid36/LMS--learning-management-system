@extends('frontend.master')
@section('content')


<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4">
			<div class="col-lg-8 mx-auto text-center">
				<h2>Choose a Categories</h2>
				<p class="mb-0">Perceived end knowledge certainly day sweetness why cordially</p>
			</div>
		</div>

		<div class="row g-4">
			<!-- Item -->
			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-body bg-success bg-opacity-10 text-center position-relative btn-transition p-4">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="{{asset('frontend_asset')}}/images/element/data-science.svg" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-2"><a href="#" class="stretched-link">Data Science</a></h5>
					<h6 class="mb-0">15 Courses</h6>
				</div>
			</div>

			<!-- Item -->
            @foreach ($categories as $cat)

			<div class="col-sm-6 col-md-4 col-xl-3">
				<div class="card card-body bg-orange bg-opacity-10 text-center position-relative btn-transition p-4">
					<!-- Image -->
					<div class="icon-xl bg-body mx-auto rounded-circle mb-3">
						<img src="{{asset('uploads/category/'.$cat->category_image)}}" alt="">
					</div>
					<!-- Title -->
					<h5 class="mb-2"><a href="#" class="stretched-link">{{ $cat->category_name }}</a></h5>
					<h6 class="mb-0">{{ $cat->rel_to_course->sum('total_lecture') }} Lectures</h6>
				</div>
			</div>

             @endforeach


		</div>
	</div>
</section>
<!-- =======================
Categories END -->

<!-- =======================
Language START -->
<section>
	<div class="container">
		<!-- Title -->
		<div class="row mb-4 mx-auto text-center">
			<div class="col-12">
				<h2 class="mb-0">Choose Languages</h2>
			</div>
		</div>

		<div class="row g-4">
			<!-- Language item -->
            @foreach ( $languages  as $lang)
			<div class="col-sm-6 col-md-4 col-lg-3">
				<div class="bg-light rounded-2 p-3 d-flex align-items-center position-relative justify-content-center">
					<img src="{{asset('uploads/language_image/'.$lang->language_image)}}" class="me-3 h-40px" alt="">
					<h5 class="mb-0"><a href="#" class="stretched-link text-primary-hover"></a>{{ $lang->language_name }}</h5>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
<!-- =======================
Language END -->

<!-- =======================
Action box START -->
<section>
	<div class="container">
		<div class="row g-4">
			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-primary bg-opacity-10 rounded-3 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="{{asset('frontend_asset')}}/images/element/08.svg" class="h-100px h-sm-200px" alt="">
					</div>
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h3 class="mb-1">Earn a Certificate</h3>
							<p class="mb-3 h5 fw-light lead">Get the right professional certificate program for you.</p>
							<a href="#" class="btn btn-primary mb-0">View Programs</a>
						</div>
					</div>
				</div>
			</div>

			<!-- Action box item -->
			<div class="col-lg-6 position-relative overflow-hidden">
				<div class="bg-secondary rounded-3 bg-opacity-10 p-5 h-100">
					<!-- Image -->
					<div class="position-absolute bottom-0 end-0 me-3">
						<img src="{{asset('frontend_asset')}}/images/element/15.svg" class="h-100px h-sm-200px" alt="">
					</div>
					<!-- Content -->
					<div class="row">
						<div class="col-sm-8 position-relative">
							<h3 class="mb-1">Best Rated Courses</h3>
							<p class="mb-3 h5 fw-light lead">Enroll now in the most popular and best rated courses.</p>
							<a href="#" class="btn btn-warning mb-0">View Courses</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Action box END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
