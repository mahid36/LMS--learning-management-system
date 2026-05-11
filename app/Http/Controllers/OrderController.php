<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function orders(){
        $order = Order::all();
        return view('backend.orders',[
            'order'=>$order,
        ]);
    }
    function order_status(Request $request, $id){
        Order::where('order_id', $id)->update([
            'status'=>$request->status,
        ]);
        return back();
    }
}
