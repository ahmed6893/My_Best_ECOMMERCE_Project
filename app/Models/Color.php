<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public static $color ;
    public static function saveColor($request)
    {
        self::$color = new Color();
        self::$color->name = $request->name;
        self::$color->code = $request->code;
        self::$color->save();
    }

    public static function updateColor($request , $id)
    {
        self::$color = Color::find($id);

        self::$color->name = $request->name;
        self::$color->code = $request->code;
        self::$color->save();
    }

    public static function deleteColor($id)
    {
        self::$color = Color::find($id);
        self::$color->delete();
    }


}
