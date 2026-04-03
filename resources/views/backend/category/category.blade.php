@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Category List</h3>
            </div>
            <div class="carde-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Category name</th>
                        <th>Image</th>
                        <th>Delete</th>
                    </tr>
                    @foreach ($categories as $index=>$cat)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>{{ $cat->category_name }}</td>
                        <td>
                            <img src="{{ asset('uploads/category') }}/{{ $cat->category_image }}" alt="">
                        </td>
                        <td>
                            <a href="{{ route('delete.category',$cat->id)}}">
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
                <h3>Add new category</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Category name -</label>
                        <input type="text" name="category_name" class="form-control">
                        @error('category_name')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category Image -</label>
                        <input type="file" name="category_image" class="form-control">
                         @error('category_image')
                        <strong class="text-danger">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Submit category</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer_script')


@if (session('success'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "bottom-end",
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
        });
        Toast.fire({
        icon: "success",
        title: '{{ session('success') }}'
        });
    </script>
@endif
@endsection
