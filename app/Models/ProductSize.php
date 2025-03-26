<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSize extends Model
{
    public static $productSize,$productSizes;

    public static function saveProductSize($sizes,$id)
    {
        foreach ($sizes as $size)
        {
            self::$productSize = new ProductSize();
            self::$productSize->product_id = $id;
            self::$productSize->size_id    = $size;
            self::$productSize->save();
        }
    }
    public static function updateProductSize($size,$id)
    {
        self::$productSizes = ProductSize::where('product_id',$id)->get();
        foreach (self::$productSizes as self::$productSize)
        {
            self::$productSize->delete();
        }
        self::saveProductSize($size,$id);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }
}
