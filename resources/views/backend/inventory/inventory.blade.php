@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Inventory</h3>
            </div>
            <div class="card-body"></div>
        </div>
    </div>
      <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add new inventory</h3>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">fhhj</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <label class="form-label">fhhj</label>
                    <input type="file" class="form-control" name="name">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark">Submit</button>
                </div>
                </form>
            </div>
        </div>
      </div>
</div>


@endsection
