<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - #{{ $orderId }}</title>
    <style>
        body { font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; color: #555; }
        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            color: #555;
        }
        .invoice-box table { width: 100%; line-height: inherit; text-align: left; border-collapse: collapse; }
        .invoice-box table td { padding: 5px; vertical-align: top; }
        .invoice-box table tr td:nth-child(2) { text-align: right; }
        .invoice-box table tr.top table td { padding-bottom: 20px; }
        .invoice-box table tr.top table td.title { font-size: 45px; line-height: 45px; color: #333; }
        .invoice-box table tr.information table td { padding-bottom: 40px; }
        .invoice-box table tr.heading td { background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; }
        .invoice-box table tr.details td { padding-bottom: 20px; }
        .invoice-box table tr.item td { border-bottom: 1px solid #eee; }
        .invoice-box table tr.item.last td { border-bottom: none; }
        .invoice-box table tr.total td:nth-child(2) { border-top: 2px solid #eee; font-weight: bold; }
        .text-danger { color: #dc3545; }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td { width: 100%; display: block; text-align: center; }
            .invoice-box table tr.information table td { width: 100%; display: block; text-align: center; }
        }
    </style>
</head>
<body>
    <div class="invoice-box">
        <table>
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <h2 style="margin:0; color:#007bff;">LOGO</h2>
                            </td>
                            <td>
                                Invoice #: {{ $orderId }}<br>
                                Created: {{ \Carbon\Carbon::now()->format('d M, Y') }}<br>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                <strong>Md Hasanujjaman</strong><br>
                                Student ID: {{ Auth::guard('student')->id() }}<br>
                                Email: {{ Auth::guard('student')->user()->email }}
                            </td>
                            <td>
                                <strong>Payment Method:</strong><br>
                                {{ $firstItem->rel_to_order->payment_method_name }}<br>
                                Status: Paid
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>Course Name</td>
                <td>Price</td>
            </tr>
            @foreach ($items as $item)
            <tr class="item">
                <td>{{ $item->rel_to_course->course_title }}</td>
                <td>TK{{ number_format($item->rel_to_course->discount ? $item->rel_to_course->discount_price : $item->rel_to_course->course_price) }}</td>
            </tr>
            @endforeach

            <tr class="total">
                <td></td>
                <td>
                    Sub-total: TK {{ number_format($sub_total) }}
                </td>
            </tr>
            @if($firstItem->rel_to_order->discount > 0)
            <tr>
                <td></td>
                <td class="text-danger">
                  Coupon Discount: - TK {{ number_format($firstItem->rel_to_order->discount) }}
                </td>
            </tr>
            @endif
            <tr class="total">
                <td></td>
                <td style="font-size: 20px;">
                   Total Amount:TK{{ number_format($firstItem->rel_to_order->total) }}
                </td>
            </tr>
        </table>
        <div style="margin-top: 50px; text-align: center; font-size: 12px; color: #999;">
            Thank you for your purchase!
        </div>
    </div>
</body>
</html>
