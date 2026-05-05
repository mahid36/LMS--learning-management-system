@extends('frontend.master')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center">

            <div class="card shadow-lg border-0 p-5 rounded-4">

                <!-- Success Icon -->
                <div class="mb-4">
                    <i class="bi bi-check-circle-fill text-success" style="font-size: 70px;"></i>
                </div>

                <!-- Title -->
                <h2 class="fw-bold text-success">Order Successful!</h2>

                <!-- Message -->
                <p class="mt-3 text-muted">
                    Your course has been successfully purchased 🎉 <br>
                    You can now access it from your dashboard.
                </p>

                <!-- Order Info -->
                <div class="bg-light p-3 rounded-3 mt-4 text-start">
                    <p class="mb-1"><strong>Order ID:</strong># {{ $order_id }}</p>
                    <p class="mb-1"><strong>Amount:&#2547;{{$total}}</strong> </p>
                </div>

                <!-- Buttons -->
                <div class="mt-4 d-grid gap-2">
                    <a href="{{ route('my.courses') }}" class="btn btn-primary">
                        Go to My Courses
                    </a>

                    <a href="{{ route('index') }}" class="btn btn-outline-secondary">
                        Back to Home
                    </a>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection
