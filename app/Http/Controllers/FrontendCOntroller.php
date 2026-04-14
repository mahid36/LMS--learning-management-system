<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\Language;

class FrontendCOntroller extends Controller
{
    function index(){
        $courses    = Course::all();
        $categories = Category:: with('rel_to_course')->get();

        return view('frontend.index',[
            'categories' => $categories,
            'courses' => $courses,

        ]);
    }
    function course(){
         $languages      = Language::all();
        return view('frontend.course',[
             'languages' =>  $languages ,
        ]);
    }
}
