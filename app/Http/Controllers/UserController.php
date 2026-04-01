<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function edit_profile(){
        return view('backend.users.edit_profile');
   }
}
