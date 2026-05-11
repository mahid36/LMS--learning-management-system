@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Orders List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Order ID</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($order as $index=>$or)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $or->order_id }}</td>
                        <td>&#2547;{{ $or->total }}</td>
                        <td></td>
                        <td>
                            <a href="">
                         <i class="fa-solid fa-trash" style="font-size: 22px; color: rgb(100, 96, 96); cursor: pointer"></i>
                        </td>
                    </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
