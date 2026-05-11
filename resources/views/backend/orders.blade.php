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
                        @foreach ($order as $index => $or)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $or->order_id }}</td>
                                <td>&#2547;{{ $or->total }}</td>
                                <td>
                                    @if ($or->status == 0)
                                        <span class="badge badge-success">Paid</span>
                                    @elseif ($or->status == 1)
                                        <span class="badge badge-info">Pending</span>
                                    @elseif ($or->status == 2)
                                        <span class="badge badge-danger">Cancel</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('order.status',$or->order_id) }}" method="POST">
                                        @csrf
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                Dropdown button
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <button name="status" class="dropdown-item {{ $or->status == 0 ?'bg-primary text-white':'' }}" type="submit" value="0">Paid</button>
                                                <button name="status" class="dropdown-item {{ $or->status == 1 ?'bg-primary text-white':'' }}" type="submit" value="1">Pending</button>
                                                <button name="status" class="dropdown-item {{ $or->status == 2 ?'bg-primary text-white':'' }}" type="submit" value="2">Cancel</button>

                                            </div>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
