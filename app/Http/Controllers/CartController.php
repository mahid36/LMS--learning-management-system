<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class CartController extends Controller
{
    function add_cart(Request $request){

    $already = Cart::where('student_id', Auth::guard('student')->id())
                   ->where('course_id', $request->course_id)
                   ->exists();

    if($already){
        return back()->with('already', 'Already added to cart!');
    }

        Cart::insert([
            'student_id'  =>Auth::guard('student')->id(),
            'course_id'   =>$request->course_id,
            'created_at'  =>Carbon::now(),
        ]);
           return back()->with('success', 'Cart Added Successfully');
    }
    function remove_cart($id){
        Cart::find($id)->delete();
        return back();
    }
}
