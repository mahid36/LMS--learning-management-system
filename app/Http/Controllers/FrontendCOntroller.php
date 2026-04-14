<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;

class FrontendCOntroller extends Controller
{
    function index(){
        $courses    = Course::all();
        $categories = Category::all();
        return view('frontend.index',[
            'categories' => $categories,
            'courses' => $courses,
        ]);
    }
}
