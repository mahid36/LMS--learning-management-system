@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Coupon List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Coupon Name</th>
                        <th>Amount</th>
                        <th>Validity</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($coupons as $index=>$coupon)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $coupon->coupon }}</td>
                        <td>{{ $coupon->amount }}%</td>
                        <td>
                               @if (Carbon\Carbon::now()->diffIndays($coupon->validity)<1)
                    <span class="badge badge-warning">Expired{{round(Carbon\Carbon::now()->diffIndays($coupon->validity))}} days ago</span>
                    @else
                    <span class="badge badge-success">{{round(Carbon\Carbon::now()->diffIndays($coupon->validity))}} days left</span>

                    @endif
                        </td>
                        <td>
                        <a href="{{ route('delete.coupon',$coupon->id)}}">
                         <i class="fa-solid fa-trash" style="font-size: 22px; color: rgb(100, 96, 96); cursor: pointer"></i>
                    </tr>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Coupon</h3>
            </div>
            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <form action="{{ route('add.coupon') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Coupon Name</label>
                        <input type="text" class="form-control" name="coupon">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Amount</label>
                        <input type="text" class="form-control" name="amount">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Validity</label>
                        <input type="date" class="form-control" name="validity">
                    </div>
                    <div class="mb-3">
                      <button type="submit" class="btn btn-dark">Submit Coupon</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
