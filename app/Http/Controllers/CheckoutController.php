<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\City;
use App\Models\Country;
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
      $request->validate([
        'mobile' => 'required',
        'postal_code'=>'required',
        'address'=>'required',
        'country_id'=>'required',
        'city_id'=>'required',
      ]);

    }
}
