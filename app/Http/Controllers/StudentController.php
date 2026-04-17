<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class StudentController extends Controller
{
    function edit_profile()
    {
        return view('frontend.edit_profile');
    }
    function student_dashboard()
    {
        return view('frontend.student_dashboard');
    }
    function store_signup(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     =>   ['required', 'unique:students'],
            'password'  => ['required', 'confirmed'],
            'password_confirmation' => 'required',
        ]);
        Student::insert([
            'name'      =>  $request->name,
            'email'     =>  $request->email,
            'password'  =>  bcrypt($request->password),
            'created_at' =>  Carbon::now(),
        ]);
        if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        }
        //    return back();
    }

    function log_in(Request $request)
    {
        $request->validate([
            'email'     => 'required',
            'password'  => 'required',
        ]);
        if (Student::where('email', $request->email)->exists()) {
            if (Auth::guard('student')->attempt(['email' => $request->email, 'password' => $request->password])) {
                return redirect()->route('index');
            } else {
                return back()->with('wrong', 'Wrong Password');
            }
        } else {
            return back()->with('nt_exists', 'Email does not exists');
        }
    }
    function my_courses()
    {
        return view('frontend.my_courses');
    }
    function payment_info()
    {
        return view('frontend.payment_info');
    }
    function sign_out()
    {
        Auth::guard('student')->logout();
        return redirect()->route('index');
    }
    function update_profile(Request $request)
    {
        if ($request->password) {
            if ($request->image) {
                //password ache image ache
                if (password_verify($request->current_password, Auth::guard('student')->user()->password)) {

                    $extension = $request->image->extension();
                    $file_name = uniqid() . '.' . $extension;

                    $manager = new ImageManager(new Driver());
                    $image = $manager->read($request->image);
                    $image->save(public_path('uploads/student/' . $file_name));

                    Student::find(Auth::guard('student')->id())->update([
                        'name'  => $request->name,
                        'email' => $request->email,
                        'username'  => $request->username,
                        'phone' => $request->number,
                        'location'  => $request->location,
                        'education' => $request->education,
                        'image'     => $file_name,
                        'password'  => bcrypt($request->password),
                    ]);
                    return back()->with('success', 'Profile Updated');
                } else {
                    return back()->with('wrng_pass', 'Current Password Is Incorrect');
                }
            } else {
                //password ache image nei
                if (password_verify($request->current_password, Auth::guard('student')->user()->password)) {

                    Student::find(Auth::guard('student')->id())->update([
                        'name'  => $request->name,
                        'email' => $request->email,
                        'username'  => $request->username,
                        'phone' => $request->number,
                        'location'  => $request->location,
                        'education' => $request->education,
                        'password'  => bcrypt($request->password),
                    ]);
                    return back()->with('success', 'Profile Updated');
                } else {
                    return back()->with('wrng_pass', 'Current Password Is Incorrect');
                }
            }
        } else {
            if ($request->image) {
                //password nei image ache

                $extension = $request->image->extension();
                $file_name = uniqid() . '.' . $extension;

                $manager = new ImageManager(new Driver());
                $image = $manager->read($request->image);
                $image->save(public_path('uploads/student/' . $file_name));

                Student::find(Auth::guard('student')->id())->update([
                    'name'  => $request->name,
                    'email' => $request->email,
                    'username'  => $request->username,
                    'phone' => $request->number,
                    'location'  => $request->location,
                    'education' => $request->education,
                    'image'     => $file_name,
                ]);
                return back()->with('success', 'Profile Updated');
            } else {
                //password nei image nei
                Student::find(Auth::guard('student')->id())->update([
                    'name'  => $request->name,
                    'email' => $request->email,
                    'username'  => $request->username,
                    'phone' => $request->number,
                    'location'  => $request->location,
                    'education' => $request->education,
                ]);
                return back()->with('success', 'Profile Updated');
            }
        }
    }
}
