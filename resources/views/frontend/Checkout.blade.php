@extends('frontend.master')
@section('content')

<section class="py-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bg-light p-4 text-center rounded-3">
					<h1 class="m-0">Checkout</h1>
					<!-- Breadcrumb -->
					<div class="d-flex justify-content-center">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb breadcrumb-dots mb-0">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item"><a href="#">Courses</a></li>
								<li class="breadcrumb-item"><a href="#">Cart</a></li>
								<li class="breadcrumb-item active" aria-current="page">Checkout</li>
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
			<div class="col-xl-8 mb-4 mb-sm-0">

				<!-- Personal info START -->
				<div class="card card-body shadow p-4">
					<!-- Title -->
					<h5 class="mb-0">Personal Details</h5>

					<!-- Form START -->
					<form action="{{ route('confirm.checkout') }}" method="POST" class="row g-3 mt-0">
                        @csrf
						<!-- Name -->
						<div class="col-md-6 bg-light-input">
							<label for="yourName" class="form-label">Your name *</label>
							<input type="text" name="name" class="form-control" id="yourName" placeholder="Name" value="{{ Auth::guard('student')->user()->name }}">
						</div>
						<!-- Email -->
						<div class="col-md-6 bg-light-input">
							<label for="emailInput" class="form-label">Email address *</label>
							<input type="email" name="email" class="form-control" id="emailInput" placeholder="Email" value="{{ Auth::guard('student')->user()->email }}">
						</div>
						<!-- Number -->
						<div class="col-md-6 bg-light-input">
							<label for="mobileNumber" class="form-label">Mobile number *</label>
							<input type="text" name="mobile" class="form-control" id="mobileNumber" placeholder="Mobile number" value="{{ old('mobile') }}">
						</div>
						<!-- Country option -->
						<div class="col-md-6 bg-light-input">
							<label for="mobileNumber" class="form-label">Select country *</label>
							<select name="country_id" class="form-select js-choice country" aria-label=".form-select-lg">
								<option value="">Select country</option>
                                @foreach ($countries as $country)
								<option @selected(old('country_id') == $country->id) value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
							</select>
						</div>
						<!-- State option -->
						<div class="col-md-6 bg-light-input">
							<label for="mobileNumber" class="form-label">Select state *</label>
							<select name="city_id" class="form-select js-choice city" aria-label=".form-select-lg">
								<option value="">Select state</option>
                                 </select>
						</div>
						<!-- Postal code -->
						<div class="col-md-6 bg-light-input">
							<label for="postalCode" class="form-label">Postal code *</label>
							<input type="text" name="postal_code" class="form-control" id="postalCode" placeholder="PIN code" value="{{ old('postal_code') }}">
						</div>
						<!-- Address -->
						<div class="col-md-6 bg-light-input">
							<label for="address" class="form-label">Address *</label>
							<input type="text" class="form-control" id="address" placeholder="Address" name="address"  value="{{ old('address') }}">
						</div>

					<!-- Form END -->
					<!-- Payment method END -->
				</div>
				<!-- Personal info END -->
			</div>
			<!-- Main content END -->

			<!-- Right sidebar START -->
			<div class="col-xl-4">
				<div class="row mb-0">
					<div class="col-md-6 col-xl-12">
						<!-- Order summary START -->
						<div class="card card-body shadow p-4 mb-4">
							<!-- Title -->
							<h4 class="mb-4">Order Summary</h4>

							<!-- Course item START -->
                            @foreach ($carts as $cart)
							<div class="row p-3 g-2 mb-2">
								<!-- Image -->
								<div class="col-sm-4">
									<img class="rounded" src="{{ asset('uploads/course/preview/'. $cart->rel_to_course->preview) }}" style="width: 60px; height: 60px; object-fit: cover;"alt="">
								</div>
								<!-- Info -->
								<div class="col-sm-8">
									<h6 class="mb-0"><a href="#">{{ $cart->rel_to_course->course_title }}</a></h6>
									<!-- Info -->
									<div class="d-flex justify-content-between align-items-center mt-3">
										<!-- Price -->
										<span class="text-success">&#2547;{{ $cart->rel_to_course->course_price }}</span>

										<!-- Remove and edit button -->
										<div class="text-primary-hover">
											<a href="#" class="text-body me-2"><i class="bi bi-trash me-1"></i>Remove</a>
											<a href="#" class="text-body me-2"><i class="bi bi-pencil-square me-1"></i>Edit</a>
										</div>
									</div>
								</div>
							</div>
                               @endforeach
							<!-- Course item END -->

							<hr> <!-- Divider -->
                            		<!-- Payment method START -->
				        <div class=" row g-3 mt-4">
								<div class="form-group">
									<h6>Select Payment Method</h6>
									<ul class="no-ul-list">
										<li>
											<input id="c4" class="radio-custom" name="payment_method" type="radio" value="1">
											<label for="c4" class="radio-custom-label">Pay With SSLCommerz</label>
										</li>
										<li>
											<input id="c5" class="radio-custom" name="payment_method" type="radio"  value="2">
											<label for="c5" class="radio-custom-label">Pay With Stripe</label>
										</li>
									</ul>
								</div>
							</div>

							<hr> <!-- Divider -->

							<!-- Price and detail -->
							<ul class="list-group list-group-borderless mb-2">
                <li class="list-group-item px-0 d-flex justify-content-between">
                  <span class="h6 fw-light mb-0">Original Price</span>
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
                            <input type="hidden" value="{{ $discount_amount }}" name="coupon">
                        <li class="list-group-item px-0 d-flex justify-content-between">
                        <span class="h5 mb-0">Total</span>
                        <span class="h5 mb-0">&#2547;{{ $total }}</span>
                        </li>
                        </ul>
							<!-- Button -->
							<div class="d-grid">
								<button type="submit" class="btn btn-lg btn-success">Place Order</button>

							</div>
							<!-- Content -->
							<p class="small mb-0 mt-2 text-center">By completing your purchase, you agree to these <a href="#"><strong>Terms of Service</strong></a></p>
                    </form>
						</div>
						<!-- Order summary END -->
					</div>
				</div><!-- Row End -->
			</div>
			<!-- Right sidebar END -->

		</div><!-- Row END -->
	</div>
</section>
<!-- =======================
Page content END -->

@endsection
@section('footer_script')

<script>
 const citySelect = new Choices('.city', {
    searchEnabled: true,
    searchPlaceholderValue: 'Search state...',
});
</script>
<script>
   $('.country').change(function(){
    let country_id = $(this).val();
    $.ajax({
        url: '/getCity',
        type: 'POST',
        data: {
            'country_id': country_id,
            '_token': '{{ csrf_token() }}'
        },
        success: function(data){
            citySelect.clearChoices();
            citySelect.setChoices(
                $(data).map(function(){
                    return {
                        value: $(this).val(),
                        label: $(this).text()
                    };
                }).get()
            );
        }
    });
});
</script>

@endsection
