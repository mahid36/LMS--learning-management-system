<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    function edit_profile(){
        return view('frontend.edit_profile');
    }
    function student_dashboard(){
        return view('frontend.student_dashboard');
    }
    function store_signup(Request $request){
        $request->validate([
            'name'      => 'required',
            'email'     =>   ['required','unique:students'],
            'password'  =>['required','confirmed'],
            'password_confirmation' =>'required',
        ]);
       Student::insert([
        'name'      =>  $request->name,
        'email'     =>  $request->email,
        'password'  =>  bcrypt($request->password),
        'created_at'=>  Carbon::now(),
       ]);
       return back();
    }
    function log_in(Request $request){
        $request->validate([
            'email'     =>'required',
            'password'  =>'required',
        ]);
        if(Student::where('email',$request->email)->exists()){
            if(Auth::guard('student')->attempt(['email'=>$request->email,'password'=>$request->password])){
                return redirect()->route('index');
            }
            else{
                 return back()->with('wrong','Wrong Password');
            }
        }
        else{
            return back()->with('nt_exists','Email does not exists');
        }
    }
    function my_courses(){
        return view('frontend.my_courses');
    }
    function payment_info(){
        return view('frontend.payment_info');
    }
}
