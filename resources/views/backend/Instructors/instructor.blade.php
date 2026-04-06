@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Instructor List</h3>
            </div>
            <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($instructors as $index=>$ins )
                        <tr>
                            <td>{{ $index+1 }}</td>
                            <td>
                                <img src="{{ asset('uploads/instructors/') }}/{{ $ins->instructor_image }} "  style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;">
                            </td>
                            <td>{{ $ins->instructor_name }}</td>
                            <td>{{ $ins->rel_to_category->category_name }}</td>
                            <td>
                                <a href="{{ route('delete.instructor',$ins->id) }}">
                                    <i class="fa-solid fa-trash" style="font-size: 22px; color: rgb(100, 96, 96); cursor: pointer"></i>
                            </a>
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
                <h3>Add Instructor</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.instructor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Enter instructor name</label>
                        <input type="text" class="form-control" name="instructor_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Enter image</label>
                        <input type="file" class="form-control" name="instructor_image">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select category</label>
                             <select name="category_id" class="form-control">
                                <option value="">Select category</option>
                             @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                         @endforeach
                         </select>
                    </div>
                        <div class="mb-3">
                        <button type="submit" class="btn btn-dark">submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
