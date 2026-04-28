<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Coupon;
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
   function cart(Request $request){
    $coupon          = $request->coupon;
    $coupon_discount = 0;
    $discount_amount = 0;
    $sub_total       = 0;
    $carts = Cart::where('student_id', Auth::guard('student')->id())->get();
    //coupon//
    if($coupon){
        if(Coupon::where('coupon',$coupon)->exists()){
            if(Carbon::now()->format('Y-m-d') <= Coupon::where('coupon',$coupon)->first()->validity){
                $coupon_discount = Coupon::where('coupon',$coupon)->first()->amount;
            } else {
                return back()->with('notExists','Coupon Expired!');
            }
        } else {
            return back()->with('notExists','Invalid Coupon');
        }
    }
    //sub_total//
    foreach($carts as $cart){
    if($cart->rel_to_course->discount){

        $sub_total += $cart->rel_to_course->discount_price;
    }
     else {

        $sub_total += $cart->rel_to_course->course_price;
    }
}
    //discount_amount//
         if($coupon_discount){
            $discount_amount = round($sub_total*$coupon_discount/100);
        }
        else{
            $discount_amount=0;
        }

        session(['coupon_discount' => $coupon_discount]);
        session(['discount_amount' => $discount_amount]);
        session(['sub_total'       => $sub_total]);

    return view('frontend.cart',[
        'carts' => $carts,
        'coupon_discount' => $coupon_discount,
        'sub_total' => $sub_total,
        'discount_amount' => $discount_amount,
    ]);
}
}
