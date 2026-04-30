<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Order;
use App\Models\City;
use App\Models\Country;
use App\Models\OrderProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
 function checkout(){
     $carts = Cart::where('student_id', Auth::guard('student')->id())->get();
     $coupon_discount = session('coupon_discount', 0);
      $discount_amount = session('discount_amount', 0);
      $sub_total = session('sub_total',0);
      $countries = Country::all();

        return view('frontend.checkout',[
            'carts'             =>  $carts,
            'coupon_discount'   => $coupon_discount,
            'discount_amount'   =>$discount_amount,
            'sub_total'         =>$sub_total,
            'countries'         =>$countries,
        ]);
    }
    function getCity(Request $request){
        $cities = City::where('country_id',$request->country_id)->get();
        $str = '<option value="">Select state</option>';
            foreach($cities as $city){
                $str .='<option value="'.$city->id.'">'.$city->name.'</option>';
            }
            return $str;
    }
    function confirm_checkout(Request $request){
        $sub_total       = session('sub_total', 0);
        $discount_amount = session('discount_amount', 0);
        $total           = $sub_total - $discount_amount;

      $request->validate([
        'mobile' => 'required',
        'postal_code'=>'required',
        'address'=>'required',
        'country_id'=>'required',
        'city_id'=>'required',
      ]);

       $order_id = uniqid();

      Order::insert([
        'order_id'  =>$order_id,
        'student_id'=>Auth::guard('student')->id(),
        'total'     =>$total,
        'discount'  =>$discount_amount,
        'payment_method'=>$request->payment_method,
        'name'  =>$request->name,
        'email' =>$request->email,
        'mobile'=>$request->mobile,
        'country'=>$request->country_id,
        'city'=>$request->city_id,
        'postal_code'=>$request->postal_code,
        'address'=>$request->address,
        'created_at'=>Carbon::now(),
      ]);
          $carts = Cart::where('student_id', Auth::guard('student')->id())->get();
          foreach($carts as $cart){

            OrderProduct::insert([
                'order_id'=>$order_id,
                'student_id'=>Auth::guard('student')->id(),
                'course_id'=>$cart->course_id,
                'price'=>$cart->rel_to_course->course_price,
                'created_at'=>Carbon::now(),
            ]);

          }
            return back();
    }
}
