@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h3>Course List</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>Sl</th>
                        <th>Course Preview</th>
                        <th>Course titile</th>
                        <th>Instructor</th>
                        <th>Level</th>
                        <th>price</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($courses as $index=>$course)
                    <tr>
                        <td>{{ $index+1 }}</td>
                        <td>
                            <img src="{{ asset('uploads/course/preview/') }}/{{ $course->preview }}" alt="">
                        </td>
                        <td>{{ $course->course_title }}</td>
                        <td>
                            <div style="display: flex; align-items: center;">
                        <img src="{{ asset('uploads/instructors/' . $course->rel_to_instructor->instructor_image) }}"
                        style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;">
                        <span>{{ $course->rel_to_instructor->instructor_name }}</span>
                    </div>
                        </td>
                        <td>{{ $course->rel_to_level->level_name }}</td>
                        <td>&#2547;{{ $course->course_price }}</td>
                        <td>
                           <a href="" class="btn btn-primary">Inventory</a>
                           <a href="" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
