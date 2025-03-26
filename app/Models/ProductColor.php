<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use function Carbon\Traits\get;

class ProductColor extends Model
{
    public static $productColor,$productColors;

    public static function saveProductColor($colors,$id)
    {
        foreach ($colors as $color)
        {
            self::$productColor = new ProductColor();

            self::$productColor->product_id = $id;
            self::$productColor->color_id   = $color;
            self::$productColor->save();
        }
    }
    public static function updateProductColor($color,$id)
    {
        self::$productColors = ProductColor::where('product_id',$id)->get();
        foreach (self::$productColors as self::$productColor)
        {
            self::$productColor->delete();
        }
        self::saveProductColor($color,$id);
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }
}
