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
}
