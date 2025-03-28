<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function kilogram()
    {
        return $this->belongsTo(Kilogram::class, 'product_kilogram', 'id');
    }
}
