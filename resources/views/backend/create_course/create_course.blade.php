@extends('layouts.admin')
@section('content')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-header">
                <h3>Create New Course</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('store.course') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Course title</label>
                                <input type="text" class="form-control" name="course_title">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select category</label>
                                <select name="category_id" class="form-control">
                                    <option value="">Select category</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select level</label>
                                <select name="level_id" class="form-control">
                                    <option value="">Select level</option>
                                    @foreach ($levels as $level)
                                    <option value="{{ $level->id }}">{{ $level->level_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select level</label>
                                <select id="select-gear" name="tag_id[]" class="demo-default" multiple placeholder="Select tag...">
                                    <option value="">Select tag..</option>
                                <optgroup label="Climbing">
                                    @foreach ($tags as $tag)
                                          <option value="{{ $tag->id }}">{{ $tag->tag_name }}</option>
                                    @endforeach
                                </optgroup>
                                </select>
                            </div>
                        </div>
                         <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Select language</label>
                                <select name="language_id" class="form-control">
                                    <option value="">Select language</option>
                                    @foreach ($languages as $lang)
                                      <option value="{{ $lang->id }}">{{ $lang->language_name }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Short description</label>
                                <textarea rows="3" class="form-control" name="short_desp"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Course time</label>
                               <input type="text" class="form-control" name="course_time">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Total lecture</label>
                               <input type="text" class="form-control" name="total_lecture">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Course price</label>
                               <input type="text" class="form-control" name="course_price">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Discount price</label>
                               <input type="text" class="form-control" name="discount_price">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="mb-3">
                                <label class="form-label">Preview image</label>
                               <input type="file" class="form-control" name="preview">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Long description</label>
                               <textarea cols="30"rows="10" class="form-control" name="long_desp" id="summernote"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3 d-flex justify-content-end">
                               <button type="submit" class="btn btn-dark ">Submit Course</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
@section('footer_script')
<script>
    $('#select-gear').selectize({ sortField: 'text' })
    $(document).ready(function() {
  $('#summernote').summernote();
});
</script>
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
