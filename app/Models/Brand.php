<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public static $brand,$image,$imageName,$imageUrl,$directory,$extension;

    public static function saveBrand($request)
    {
        self::$brand = new Brand();

        self::$brand->name = $request->name;
        self::$brand->description = $request->description;
        self::$brand->brand_image = self::getImageUrl($request);
        self::$brand->save();
    }

    public static function getImageUrl($request)
    {
        self::$image = $request->file('brand_image');
        self::$extension = self::$image->extension();
        self::$imageName = rand(000,999).'.'.self::$extension;
        self::$directory = 'admin/image/brand/';
        self::$imageUrl  =self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imageUrl;
    }
    public static function brandStatus($id)
    {
        self::$brand = Brand::find($id);

        if (self::$brand->status == 1)
        {
            self::$brand->status = 0;
        }
        else
        {
            self::$brand->status = 1;
        }
        self::$brand->save();
    }
    public static function updateBrand($request ,$id)
    {
        $brand = Brand::find($id);
        if ($request->file('brand_image'))
        {
            if ($brand->brand_image)
            {
                unlink($brand->brand_image);
            }
            $imageUrl =self::getImageUrl($request);
        }
        else{
            $imageUrl=$brand->brand_image;
        }

        $brand->name        = $request->name;
        $brand->description = $request->description;
        $brand->brand_image = $imageUrl;
        $brand->save();
    }

    public static function deleteBrand($id)
    {
        self::$brand =Brand::find($id);

        if (file_exists(self::$brand->brand_image))
        {
            unlink(self::$brand->brand_image);
        }
        self::$brand->delete();
    }
}
