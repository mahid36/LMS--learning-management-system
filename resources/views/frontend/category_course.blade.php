@extends('frontend.master')
@section('content')
<section class="py-4">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 text-center rounded-3">
					<h1 class="m-0">{{ $category->category_name }} Courses</h1>
					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-0">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Course minimal</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- =======================
Page Banner END -->

<!-- =======================
Page content START -->
<section class="pt-0">
	<div class="container">

		<!-- Filter bar START -->
		<form class="bg-light border p-4 rounded-3 my-4 z-index-9 position-relative">
			<div class="row g-3">
				<!-- Input -->
				<div class="col-xl-3">
					<input class="form-control me-1" type="search" placeholder="Enter keyword">
				</div>

				<!-- Select item -->
				<div class="col-xl-8">
					<div class="row g-3">
						<!-- Select items -->
						<div class="col-sm-6 col-md-3 pb-2 pb-md-0">
							<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
								<option value="">Categories</option>
								<option>All</option>
								<option>Development</option>
								<option>Design</option>
								<option>Accounting</option>
								<option>Translation</option>
								<option>Finance</option>
								<option>Legal</option>
								<option>Photography</option>
								<option>Writing</option>
								<option>Marketing</option>
							</select>
						</div>

						<!-- Search item -->
						<div class="col-sm-6 col-md-3 pb-2 pb-md-0">
							<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
								<option value="">Price level</option>
								<option>All</option>
								<option>Free</option>
								<option>Paid</option>
							</select>
						</div>

						<!-- Search item -->
						<div class="col-sm-6 col-md-3 pb-2 pb-md-0">
							<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
								<option value="">Skill level</option>
								<option>All levels</option>
								<option>Beginner</option>
								<option>Intermediate</option>
								<option>Advanced</option>
							</select>
						</div>

						<!-- Search item -->
						<div class="col-sm-6 col-md-3 pb-2 pb-md-0">
							<select class="form-select form-select-sm js-choice" aria-label=".form-select-sm example">
								<option value="">Language</option>
								<option>English</option>
								<option>Francas</option>
								<option>Russian</option>
								<option>Hindi</option>
								<option>Bengali</option>
								<option>Spanish</option>
							</select>
						</div>
					</div> <!-- Row END -->
				</div>
				<!-- Button -->
				<div class="col-xl-1">
					<button type="button" class="btn btn-primary mb-0 rounded z-index-1 w-100"><i class="fas fa-search"></i></button>
				</div>
			</div> <!-- Row END -->
		</form>
		<!-- Filter bar END -->

		<div class="row mt-3">
			<!-- Main content START -->
			<div class="col-12">

				<!-- Course Grid START -->
				<div class="row g-4">

					<!-- Card item START -->
                 @forelse ($courses as $course)
                    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="card shadow h-100">
            <img src="{{ asset('uploads/course/preview/'.$course->preview) }}" class="card-img-top" alt="course image">
            <div class="card-body pb-0">
                <div class="d-flex justify-content-between mb-2">
                    <a href="#" class="badge bg-purple bg-opacity-10 text-purple">{{ $course->rel_to_level->level_name }}</a>
                    <a href="#" class="h6 fw-light mb-0"><i class="far fa-heart"></i></a>
                </div>
                <h5 class="card-title"><a href="{{ route('course.details',$course->slug) }}">{{ $course->course_title }}</a></h5>
                <ul class="list-inline mb-0">
                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0 small"><i class="fas fa-star text-warning"></i></li>
                    <li class="list-inline-item me-0 small"><i class="far fa-star text-warning"></i></li>
                    <li class="list-inline-item ms-2 h6 fw-light mb-0">4.0/5.0</li>
                </ul>
            </div>
            <div class="card-footer pt-0 pb-3">
                <hr>
                <div class="d-flex justify-content-between">
                    <span class="h6 fw-light mb-0"><i class="far fa-clock text-danger me-2"></i>{{ $course->course_time }}</span>
                    <span class="h6 fw-light mb-0"><i class="fas fa-table text-orange me-2"></i>{{ $course->total_lecture }}</span>
                </div>
            </div>
        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <h5 class="text-muted">No courses found in {{ $category->category_name }}!</h5>
                    </div>
                @endforelse
					<!-- Card item END -->

				</div>
				<!-- Course Grid END -->

				<!-- Pagination START -->
				<div class="col-12">
					<nav class="mt-4 d-flex justify-content-center" aria-label="navigation">
						<ul class="pagination pagination-primary-soft d-inline-block d-md-flex rounded mb-0">
							<li class="page-item mb-0"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">1</a></li>
							<li class="page-item mb-0 active"><a class="page-link" href="#">2</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">..</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#">6</a></li>
							<li class="page-item mb-0"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<!-- Pagination END -->
			</div>
			<!-- Main content END -->
		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->
@endsection
