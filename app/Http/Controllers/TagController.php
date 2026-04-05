<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Tag;
use Illuminate\Http\Request;

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
        Language::insert([
            'language_name'=>$request->language_name
        ]);
        return back();
    }
}
