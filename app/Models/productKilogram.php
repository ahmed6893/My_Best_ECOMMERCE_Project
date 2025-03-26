<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class productKilogram extends Model
{
    public static $productKilogram ,$productKilograms;

    public static function saveProductKilogram($kilograms,$id)
    {
        foreach ($kilograms as $kilogram)
        {
            self::$productKilogram = new productKilogram();
            self::$productKilogram->product_id = $id;
            self::$productKilogram->kilogram_id = $kilogram;
            self::$productKilogram->save();
        }
    }

    public static function updateProductKilogram($kilogram,$id)
    {
        self::$productKilograms = Product::where('product_id',$id)->get();

        foreach (self::$productKilograms as self::$productKilogram)
        {
            self::$productKilogram->delete();
        }
        self::saveProductKilogram($kilogram,$id);
    }

    public function kilogram()
    {
       return $this->belongsTo(Kilogram::class);
    }
}
