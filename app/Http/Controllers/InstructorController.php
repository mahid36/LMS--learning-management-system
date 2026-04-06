<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Instructor;
use Carbon\Carbon;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class InstructorController extends Controller
{
     function instructor(){
        $instructors = Instructor::all();
        $categories = Category::all();
        return view('backend.instructors.instructor',[
            'categories'=>$categories,
            'instructors'=>$instructors,
        ]);
    }
    function store_instructor(Request $request){

         $slug = strtolower(str_replace('','-', $request->instructor_name));

        $instructor_image = $request->instructor_image;
        $extension = $instructor_image->extension();
        $file_name = uniqid().'.'.$extension;

         $manager = new ImageManager(new Driver());
        $image = $manager->read($instructor_image);
        $image->save(public_path('uploads/instructors/'.$file_name ));

        Instructor::insert([
            'instructor_name'=>$request->instructor_name,
            'instructor_image'=>$file_name,
            'category_id'=>$request->category_id,
            'slug'=>$slug,
            'created_at'=>Carbon::now(),
        ]);
        return back();
    }
    function delete_instructor($id){
        Instructor::find($id)->delete();
        return back();
    }
}
