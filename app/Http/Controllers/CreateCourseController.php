<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Level;
use App\Models\Course;
use App\Models\Instructor;
use App\Models\Language;
use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Http\Request;


use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class CreateCourseController extends Controller
{
    function create_course(){
        $categories = Category::all();
        $levels = Level::all();
        $tags = Tag::all();
        $languages = Language::all();
        $instructors = Instructor::all();
        return view('backend.create_course.create_course',[
            'categories'    =>$categories,
            'levels'        =>$levels,
            'tags'          =>$tags,
            'languages'     =>$languages,
            'instructors'   =>$instructors,
        ]);
    }
    function store_course(Request $request){
        $tags_id =implode(',',$request->tag_id);
        $slug    = strtolower(str_replace('','-', $request->course_title));

        $preview    = $request->preview;
        $extension  = $preview->extension();
        $file_name  = uniqid().'.'.$extension;

        $manager    = new ImageManager(new Driver());
        $image      = $manager->read($preview);
        $image->save(public_path('uploads/course/preview/'.$file_name ));
        $image->resize(500, 375);

        Course::insert([
            'category_id'   =>  $request->category_id,
            'level_id'      =>  $request->level_id,
            'tag_id'        =>  $tags_id,
            'slug'          =>  $slug,
            'course_title'  =>  $request->course_title,
            'language_id'   =>  $request->language_id,
            'short_desp'    =>  $request->short_desp,
            'long_desp'     =>  $request->long_desp,
            'course_time'   =>  $request->course_time,
            'total_lecture' =>  $request->total_lecture,
            'course_price'  =>  $request->course_price,
            'discount'      =>  $request->discount,
            'discount_price'=>  $request->discount_price -($request->course_price * $request->discount /100),
            'preview'       =>  $file_name,
            'instructor_id' =>  $request->instructor_id,
            'created_at'    =>  Carbon::now(),

        ]);
        return back()->with('success','Course added successfully');
    }
    function course_list(){
        $courses = Course::all();
        return view('backend.course_list',[
            'courses'=>$courses,
        ]);
    }
    function delete_course($id){
        Course::find($id)->delete();
        return back();
    }
    function inventory(){
        return view('backend.inventory.inventory');
    }
}
