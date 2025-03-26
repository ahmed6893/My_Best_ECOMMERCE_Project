<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OtherImages extends Model
{
    public static $newImages,$newImage,$productImages,$image,$imageName,$imgUrl,$directory,$extension;

    public static function productOtherImages($images,$id)
    {
        foreach ($images as $image)
        {
            self::$imgUrl =self::getImageUrl($image);

            self::$productImages = new OtherImages();
            self::$productImages->product_id = $id;
            self::$productImages->other_image = self::$imgUrl;
            self::$productImages->save();
        }
    }
    public static function getImageUrl($image)
    {
        $extension =$image->extension();
        $imageName =rand(000,999).'.'.$extension;
        $directory ='admin/image/other-image/';
        $imgUrl    =$directory.$imageName;
        $image->move($directory,$imageName);

        return $imgUrl;
    }

    public static function updateOtherImages($images,$id)
    {
        self::$newImages = OtherImages::where('product_id',$id)->get();

        foreach (self::$newImages as self::$newImage)
        {
            if (file_exists(self::$newImage->other_image))
            {
                unlink(self::$newImage->other_image);
            }
            self::$newImage->delete();
        }
        foreach ($images as $image)
        {
            self::$imgUrl = self::getImageUrl($image);

            self::$productImages = new OtherImages();
            self::$productImages->product_id = $id;
            self::$productImages->other_image = self::$imgUrl;
            self::$productImages->save();
        }
    }
}
