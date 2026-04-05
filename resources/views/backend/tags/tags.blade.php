@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Tag List</h3>
            </div>
            <div class="card-body">
                @if (session('delete'))
                <div class="alert alert-danger">{{ session('delete') }}</div>
                @endif
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Tag name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($tags as $index=>$tag )
                    <td>{{ $index+1 }}</td>
                    <td>{{ $tag->tag_name }}</td>
                    <td>
                     <a href="{{ route('delete.tags',$tag->id)}}">
                         <i class="fa-solid fa-trash" style="font-size: 22px; color: rgb(100, 96, 96); cursor: pointer"></i>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add Tags</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.tags') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        @if (session('success'))
                        <div class="alert alert-success">{{  session('success')}}</div>

                        @endif
                        <label class="form-label">Add new tag</label>
                        <input type="text" class="form-control" name="tag_name">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Submit Tags</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="row mt-5">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h3>Language List</h3>
            </div>
            <div class="card-body">

                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Language name</th>
                        <th>Action</th>
                    </tr>
                    @foreach ( $languages as $index=>$lang )
                    <td>{{ $index+1 }}</td>
                    <td>{{ $lang->language_name }}</td>
                    <td>
                     <a href="">
                         <i class="fa-solid fa-trash" style="font-size: 22px; color: rgb(100, 96, 96); cursor: pointer"></i>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="card-header">
                <h3>Add language</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.language') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        @if (session('success'))
                        <div class="alert alert-success">{{  session('success')}}</div>

                        @endif
                        <label class="form-label">Add language</label>
                        <input type="text" class="form-control" name="language_name">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark">Submit language</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
