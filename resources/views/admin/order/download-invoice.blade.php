<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>A simple, clean, and responsive HTML invoice template</title>

    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />

    <!-- Invoice styling -->
    <style>
        body {
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            text-align: center;
            color: #777;
        }

        body h1 {
            font-weight: 300;
            margin-bottom: 0px;
            padding-bottom: 0px;
            color: #000;
        }

        body h3 {
            font-weight: 300;
            margin-top: 10px;
            margin-bottom: 20px;
            font-style: italic;
            color: #555;
        }

        body a {
            color: #06f;
        }

        .invoice-box {
            max-width: 800px;
            margin: auto;
            padding: 30px;
            border: 1px solid #eee;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            font-size: 16px;
            line-height: 24px;
            font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
            color: #555;
        }

        .invoice-box table {
            width: 100%;
            line-height: inherit;
            text-align: left;
            border-collapse: collapse;
        }

        .invoice-box table td {
            padding: 5px;
            vertical-align: top;
        }

        .invoice-box table tr td:nth-child(2) {
            text-align: right;
        }

        .invoice-box table tr.top table td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.top table td.title {
            font-size: 45px;
            line-height: 45px;
            color: #333;
        }

        .invoice-box table tr.information table td {
            padding-bottom: 40px;
        }

        .invoice-box table tr.heading td {
            background: #eee;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
        }

        .invoice-box table tr.details td {
            padding-bottom: 20px;
        }

        .invoice-box table tr.item td {
            border-bottom: 1px solid #eee;
        }

        .invoice-box table tr.item.last td {
            border-bottom: none;
        }

        .invoice-box table tr.total td:nth-child(2) {
            border-top: 2px solid #eee;
            font-weight: bold;
        }

        @media only screen and (max-width: 600px) {
            .invoice-box table tr.top table td {
                width: 100%;
                display: block;
                text-align: center;
            }

            .invoice-box table tr.information table td {
                width: 100%;
                display: block;
                text-align: center;
            }
        }
    </style>

</head>


<body>
<div class="invoice-box">
    <table>
        <tr class="top">
            <td colspan="5">
                <table>
                    <tr>
                        <td class="title">
                            <img src="{{asset('/')}}admin/assets/images/logo/freshcart-logo.svg" alt="Company logo" style="width: 100%; max-width: 300px" />
                        </td>

                        <td>
                            Invoice #:{{$order->id}}<br />
                            Order Date:{{$order->order_date}}<br />
                            Delivery Date: {{date('Y-m-d')}}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="information">
            <td colspan="4">
                <table>
                    <tr>
                        <td>
                            <h4>Shipping info</h4>
                            {{$order->customer->first_name.$order->customer->last_name}}<br />
                            {{$order->customer->email}}<br />
                            {{$order->delivery_address}}
                        </td>

                        <td>
                            Acme Corp.<br />
                            John Doe<br />
                            john@example.com
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr class="heading">
            <td colspan="3">Payment Method</td>

            <td>{{$order->payment_method}}</td>
        </tr>

        <tr class="details">
            <td colspan="3">{{$order->payment_method}}</td>

            <td>{{$order->order_total}}</td>
        </tr>

        <tr class="heading">
            <td>Item</td>
            <td>Unit Price</td>
            <td>Quality</td>
            <td>Price</td>
        </tr>

        <tr class="item">
            @foreach($order->orderDetails as $orderDetail)
                <td>
                    <b>Name:</b>{{$orderDetail->product_name}}<br/>
                    <b>Kilogram:</b>{{$orderDetail->product_kilogram}}<br/>
                </td>
                <td>{{$orderDetail->product_price}}</td>
                <td>{{$orderDetail->product_qty}}</td>
                <td>{{$orderDetail->product_qty * $orderDetail->product_price}}</td>
            @endforeach
        </tr>

        <tr class="item">
            <td colspan="3"></td>

            <td>SubTotal:{{$orderDetail->product_qty * $orderDetail->product_price}}</td>
        </tr>

        <tr class="item last">
            <td colspan="3"></td>
            <td>Tax Total:{{$order->tax_total}}</td>
        </tr>
        <tr class="total">
            <td colspan="3"></td>
            <td>Total:{{$order->order_total}}</td>
        </tr>
    </table>
</div>
</body>
</html>
