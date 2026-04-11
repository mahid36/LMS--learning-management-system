<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class FrontendCOntroller extends Controller
{
    function index(){
        $categories = Category::all();
        return view('frontend.index',[
            'categories' => $categories,
        ]);
    }
}
