<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
 use Barryvdh\DomPDF\Facade\Pdf;

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
public function invoice($order_id)
{
    $items = OrderProduct::where('order_id', $order_id)->get();
    $firstItem = $items->first();

    if (!$firstItem) {
        return back()->with('error', 'Order not found!');
    }
    $sub_total = 0;
    foreach ($items as $item) {
        $course_price = $item->rel_to_course->discount
                        ? $item->rel_to_course->discount_price
                        : $item->rel_to_course->course_price;

        $sub_total += $course_price;
    }

    $coupon_discount = $firstItem->rel_to_order->discount ?? 0;
    $total = $sub_total - $coupon_discount;

    $pdf = Pdf::loadView('invoice.invoice', [
        'orderId'   => $order_id,
        'items'     => $items,
        'firstItem' => $firstItem,
        'sub_total' => $sub_total,
        'total'     => $total,
    ]);

    return $pdf->download('invoice-' . $order_id . '.pdf');
}
}
