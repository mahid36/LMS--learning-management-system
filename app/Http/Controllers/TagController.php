<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Tag;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
class TagController extends Controller
{
    function tags(){
        $tags =Tag::all();
        $languages = Language::all();
        return view('backend.tags.tags',[
            'tags' =>$tags,
            'languages' =>$languages,
        ]);
    }
    function store_tags(Request $request){
        Tag::insert([
            'tag_name' => $request->tag_name,
        ]);
        return back()->with('success','Tag added successfully');
    }
    function delete_tags($id){
        Tag::find($id)->delete();

        return back()->with('delete','Tag deleted successfully');
    }
    function store_language(Request $request){

     $lang_image = $request->language_image;
        $extension =  $lang_image->extension();
        $file_name = uniqid().'.'.$extension;

         $manager = new ImageManager(new Driver());
        $image = $manager->read( $lang_image);
        $image->save(public_path('uploads/language_image/'.$file_name ));

        Language::insert([
            'language_name'=>$request->language_name,
            'language_image'=>$file_name ,
        ]);
        return back();
    }
    function delete_language($id){
        Language::find($id)->delete();
        return back();
    }

}
