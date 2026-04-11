<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function sign_up(){
        return view('frontend.sign_up');
    }
    function sign_in(){
        return view('frontend.sign_in');
    }
}
