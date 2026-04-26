@extends('frontend.master')
@section('content')


<section class="py-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 text-center rounded-3">
					<h1 class="m-0">My cart</h1>
					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-0">
								<li class="breadcrumb-item"><a href="#">Home</a></li>

								<li class="breadcrumb-item active" aria-current="page">Cart</li>
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
<section class="pt-5">
	<div class="container">

		<div class="row g-4 g-sm-5">
			<!-- Main content START -->
			<div class="col-lg-8 mb-4 mb-sm-0">
				<div class="card card-body p-4 shadow">
					<div class="table-responsive border-0 rounded-3">
						<!-- Table START -->
						<table class="table align-middle p-4 mb-0">
							<!-- Table head -->
							<!-- Table body START -->
							<tbody class="border-top-0">
								<!-- Table item -->
                                @foreach ($carts as $cart)
								<tr>
									<!-- Course item -->
									<td>
										<div class="d-lg-flex align-items-center">
											<!-- Image -->
											<div class="w-100px w-md-80px mb-2 mb-md-0">
												<img src="{{ asset('uploads/course/preview/'. $cart->rel_to_course->preview) }}" class="rounded" alt="">
											</div>
											<!-- Title -->
											<h6 class="mb-0 ms-lg-3 mt-2 mt-lg-0">
												<a href="#">{{ $cart->rel_to_course->course_title }}</a>
											</h6>
										</div>
									</td>

									<!-- Amount item -->
									<td class="text-center">
                                        @if($cart->rel_to_course->discount)
                                            <h5 class="text-success mb-0">&#2547; {{ $cart->rel_to_course->discount_price }}</h5>
                                        @else
                                             <h5 class="text-success mb-0">&#2547; {{ $cart->rel_to_course->course_price }}</h5>
                                        @endif
                                    </td>
									<!-- Action item -->
									<td>
										<a href="{{ route('remove.cart',$cart->id) }}" class="btn btn-sm btn-success-soft px-2 me-1 mb-1 mb-md-0"><i class="far fa-fw fa-edit"></i></a>
										<a href="{{ route('remove.cart',$cart->id) }}" class="btn btn-sm btn-danger-soft px-2 mb-0"><i class="fas fa-fw fa-times"></i></a>
									</td>
								</tr>
                                    @endforeach
							</tbody>
						</table>
					</div>

					<!-- Coupon input and button -->
					<div class="row g-3 mt-2">
						<div class="col-md-6">
							<div class="input-group">
                                <form action="{{ route('cart') }}" method="GET" class="input-group">
								<input class="form-control form-control " placeholder="COUPON CODE" name="coupon">
								<button type="submit" class="btn btn-primary">Apply coupon</button>
							</div>
                            @if (session('notExists'))
                            <strong class="text-danger">{{ session('notExists') }}</strong>
                            @endif
                        </form>
						</div>
					</div>
				</div>
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-lg-4">
				<!-- Card total START -->
				<div class="card card-body p-4 shadow">
					<!-- Title -->
					<h4 class="mb-3">Cart Total</h4>

					<!-- Price and detail -->
					<ul class="list-group list-group-borderless mb-2">
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h6 fw-light mb-0">Sub Total</span>
							<span class="h6 fw-light mb-0 fw-bold">&#2547;{{ $sub_total }}</span>
						</li>
                        @if ($coupon_discount)
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h6 fw-light mb-0">Coupon Discount</span>
							<span class="text-danger">&#2547;{{$discount_amount}}</span>
						</li>
                            @endif

                            @php
                            $total = $sub_total - $discount_amount;
                            @endphp
						<li class="list-group-item px-0 d-flex justify-content-between">
							<span class="h5 mb-0">Total</span>
							<span class="h5 mb-0">&#2547;{{ $total }}</span>
						</li>
					</ul>

					<!-- Button -->
					<div class="d-grid">
						<a href="checkout.html" class="btn btn-lg btn-success">Proceed to Checkout</a>
					</div>

					<!-- Content -->
					<p class="small mb-0 mt-2 text-center">By completing your purchase, you agree to these <a href="#"><strong>Terms of Service</strong></a></p>

				</div>
				<!-- Card total END -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

</main>
<!-- **************** MAIN CONTENT END **************** -->

@endsection
