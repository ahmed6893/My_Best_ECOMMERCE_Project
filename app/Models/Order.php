<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Session;
use Cart;

class Order extends Model
{
    public static $order,$orderDetail;

    public static function newOrder($request)
    {
        self::$order = new Order();
        self::$order->customer_id      = Session::get('customerId');
        self::$order->order_total      = Session::get('order_total');
        self::$order->tax_total        = Session::get('tax_total');
        self::$order->shipping_total   = Session::get('shipping_total');
        self::$order->order_date       = date('Y-m-d');
        self::$order->order_timestamp  = strtotime(date('Y-m-d'));
        self::$order->delivery_address = $request->delivery_address;
        self::$order->payment_method   = $request->payment_method;
        self::$order->save();

        foreach (Cart::content() as $item)
        {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id         = self::$order->id;
            $orderDetail->product_id       = $item->id;
            $orderDetail->product_name     = $item->name;
            $orderDetail->product_price    = $item->price;
            $orderDetail->product_code     = $item->options->code;
            $orderDetail->product_qty      = $item->qty;
            $orderDetail->product_kilogram = $item->options->kilogram;
            $orderDetail->product_image    = $item->options->image;
            $orderDetail->save();
        }
        Cart::destroy();
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
