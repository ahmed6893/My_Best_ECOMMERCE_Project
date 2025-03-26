<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courier extends Model
{
    public static $courier,$image,$imageName,$imgUrl,$directory,$extension;

    public static function saveCourier($request)
    {
        self::$courier = new Courier();

        self::$courier->name =$request->name;
        self::$courier->description =$request->description;
        self::$courier->courier_image =self::getImageUrl($request);
        self::$courier->save();
    }

    public static function getImageUrl($request)
    {
        self::$image =$request->file('courier_image');
        self::$extension =self::$image->extension();
        self::$imageName =rand(000,999).'.'.self::$extension;
        self::$directory ='admin/image/courier/';
        self::$imgUrl    =self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imgUrl;
    }

    public static function statusUpdate($id)
    {
        self::$courier = Courier::find($id);

        if (self::$courier->status == 1)
        {
            self::$courier->status =0;
        }
        else
        {
            self::$courier->status =1;
        }
        self::$courier->save();
    }

    public static function updateCourier($request,$id)
    {
        self::$courier =Courier::find($id);

        if ($request->file('courier_image'))
        {
            if (file_exists(self::$courier->courier_image))
            {
                unlink(self::$courier->courier_image);
            }
            self::$imgUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imgUrl =self::$courier->courier_image;
        }

        self::$courier->name =$request->name;
        self::$courier->description =$request->description;
        self::$courier->courier_image = self::$imgUrl;
        self::$courier->save();
    }

    public static function deleteCourier($id)
    {
        self::$courier =Courier::find($id);
        if (file_exists(self::$courier->courier_image))
        {
            unlink(self::$courier->courier_image);
        }
        self::$courier->delete();
    }
}
