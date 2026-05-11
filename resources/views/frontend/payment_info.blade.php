@extends('frontend.student_profile_master')
@section('dashboard_content')
    <div class="col-lg-9">
        <div class="card bg-transparent border rounded-3">
            <div class="card-header bg-transparent border-bottom">
                <h3 class="mb-0">Billing history</h3>
            </div>
            <div class="card-body">
                @foreach ($myorders->groupBy('order_id') as $orderId => $items)
                @php
                    $firstItem = $items->first();
                @endphp

                <div class="card border mb-4">
                    <div class="card-header bg-light py-3">
                        <div class="row align-items-center">
                            <div class="col-md-3">
                                <span class="text-secondary small fw-bold text-uppercase">Order ID</span>
                                <h6 class="mb-0 text-primary">#{{ $orderId }}</h6>
                            </div>

                            <div class="col-md-3 text-md-center">
                                <span class="text-secondary small fw-bold text-uppercase">Payment Method</span>
                                <div class="d-flex align-items-center justify-content-md-center mt-1">
                                    <img src="{{ asset('frontend_asset') }}/images/client/mastercard.svg" class="h-20px me-2" alt="">
                                    <span class="fw-bold small">{{ $firstItem->rel_to_order->payment_method_name  }}</span>
                                </div>
                            </div>

                            <div class="col-md-3 text-md-center">
                                <span class="text-secondary small fw-bold text-uppercase d-block">Status</span>
                             @if ($firstItem->rel_to_order->status == 0)
                                    <span class="badge bg-success text-white mt-1">Paid</span>
                                @elseif ($firstItem->rel_to_order->status == 1)
                                    <span class="badge bg-info text-white mt-1">Pending</span>
                                @else
                                    <span class="badge bg-danger text-white mt-1">Cancel</span>
                                @endif
                            </div>

                            <div class="col-md-3 text-md-end">
                                <a href="{{ route('invoice',$firstItem->order_id) }}" class="btn btn-sm btn-primary-soft mb-0"><i class="bi bi-download me-1"></i>Invoice</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th class="ps-4">Course Name</th>
                                        <th class="text-end pe-4">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                    <tr>
                                        <td class="ps-4">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-sm bg-primary bg-opacity-10 text-primary rounded-2 me-2"><i class="bi bi-play-circle-fill"></i></div>
                                                <h6 class="mb-0 fw-normal">{{ $item->rel_to_course->course_title }}</h6>
                                            </div>
                                        </td>
                                        <td class="text-end pe-4 text-secondary">&#2547;{{ number_format($item->rel_to_course->discount ? $item->rel_to_course->discount_price : $item->rel_to_course->course_price) }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                             <tfoot class="border-top-0">
                             @if($firstItem->rel_to_order->discount > 0)
                                <tr>
                                    <td class="text-end fw-bold pt-1" style="border: none;">Coupon Discount:</td>
                                        <td class="text-end pe-4 fw-bold text-danger pb-0" style="border: none;">
                                         - &#2547;{{ number_format($firstItem->rel_to_order->discount) }}
                                    </td>
                                </tr>
                            @endif
                         <tr>
                              <td class="text-end fw-bold pt-1" style="border: none;">Total Amount:</td>
                                <td class="text-end pe-4 fw-bold text-dark h6 pt-1" style="border: none;">
                                     &#2547;{{ number_format($firstItem->rel_to_order->total) }}
                                </td>
                        </tr>
                        </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
