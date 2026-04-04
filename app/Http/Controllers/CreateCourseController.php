<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    function create_course(){
        return view('backend.create_course.create_course');
    }
}
