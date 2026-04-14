@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Subcategory List</h3>
            </div>
          <div class="card-body">
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-lg-6">
                    <div class="card">
                    <div class="card-header">
                        <h3>{{ $category->category_name }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>SL</th>
                                <th>Subcategory name</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($category->rel_to_subcategory as $index=>$sub)
                            <tr>
                                <td>{{ $index+1 }}</td>
                                <td>{{ $sub->subcategory_name }}</td>
                                <td>
                                    <a href="{{ route('delete.subcategory',$sub->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>

                            @endforeach
                        </table>
                    </div>
                    </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Subcategory</h3>
            </div>
            @if (session('success'))
                        <div class="alert alert-success">{{  session('success')}}</div>
                        @endif
            <div class="card-body">
                <form action="{{ route('store.subcategory') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Subcategory Name</label>
                        <input type="text" class="form-control" name="sub_name">
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
                       <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
