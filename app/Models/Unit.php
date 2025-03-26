<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public static $unit;

    public static function saveUnit($request)
    {
        self::$unit = new Unit();

        self::$unit->name = $request->name;
        self::$unit->code = $request->code;
        self::$unit->description = $request->description;
        self::$unit->save();
    }
    public static function statusUnit($id)
    {
        self::$unit = Unit::find($id);

        if (self::$unit->status == 1)
        {
            self::$unit->status = 0;
        }
        else
        {
            self::$unit->status = 1;
        }
        self::$unit->save();
    }
    public static function updateUnit($request ,$id)
    {
        $unit = Unit::find($id);

        $unit->name        = $request->name;
        $unit->code        = $request->code;
        $unit->description = $request->description;
        $unit->save();
    }

    public static function deleteUnit($id)
    {
        self::$unit =Unit::find($id);

        self::$unit->delete();
    }
}
