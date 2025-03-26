<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kilogram extends Model
{
    public static $kilogram;

    public static function saveKilogram($request)
    {
        self::$kilogram = new Kilogram();
        self::$kilogram->name = $request->name;
        self::$kilogram->description =$request->description;
        self::$kilogram->save();
    }

    public static function updateStatus($id)
    {
        self::$kilogram = Kilogram::find($id);
        if (self::$kilogram->status == 1)
        {
            self::$kilogram->status = 0;
        }
        else{
            self::$kilogram->status = 1;
        }
        self::$kilogram->save();
    }

    public static function updateKilogram($request,$id)
    {
        self::$kilogram = Kilogram::find($id);
        self::$kilogram->name = $request->name;
        self::$kilogram->description = $request->description;
        self::$kilogram->save();
    }
    public static function deleteKilogram($id)
    {
        self::$kilogram = Kilogram::find($id);
        self::$kilogram->delete();
    }
}
