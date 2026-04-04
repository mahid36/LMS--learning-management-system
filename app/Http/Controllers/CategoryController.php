<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use App\Models\Category;
use App\Models\Level;



class CategoryController extends Controller
{
    function add_category(){
        $categories = Category::all();
        $levels = Level::all();
        return view('backend.category.category',compact('categories','levels'));
    }
    function store_category(Request $request){
        $request->validate([
            'category_name'=>['required','unique:categories'],
            'category_image'=> 'required',
        ]);

        $slug = strtolower(str_replace('','-', $request->category_name));
        $cat_img = $request->category_image;
        $extension = $cat_img->extension();
        $file_name = uniqid().'.'.$extension;

         $manager = new ImageManager(new Driver());
        $image = $manager->read($cat_img);
        $image->save(public_path('uploads/category/'.$file_name ));

        Category::insert([
            'category_name'=>$request->category_name,
            'category_image'=>$file_name,
            'category_slug'=> $slug,
        ]);
        return back()->with('success','Category Added Successfully');

    }
    function delete_category( $id){
        $category_img = Category::find($id)->category_image;
        $delete_from = public_path('uploads/category/'.$category_img);
        unlink($delete_from);
        Category::find($id)->delete();
        return back();
    }
    function store_level(Request $request){

        Level::insert([
            'level_name'=>$request->level,

        ]);
        return back();
    }
    function delete_level($id){
        Level::find($id)->delete();
        return back();
    }
}
