<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public static $subCategory,$image,$imageName,$imageUrl,$directory,$extension;

    public static function saveSubCategory($request)
    {
        self::$subCategory = new SubCategory();
        self::$subCategory->name        =$request->name;
        self::$subCategory->category_id  = $request->category_id;
        self::$subCategory->description =$request->description;
        self::$subCategory->sub_images =self::getImageUrl($request);
        self::$subCategory->save();
    }
    public static function getImageUrl($request)
    {
        self::$image =$request->file('sub_images');
        self::$extension =self::$image->extension();
        self::$imageName =rand(000,999).'.'. self::$extension;
        self::$directory ='admin/images/sub-category/';
        self::$imageUrl  =self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imageUrl;
    }
    public static function statusUpdate($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (self::$subCategory->status == 1)
        {
            self::$subCategory->status = 0;
        }
        else
        {
            self::$subCategory->status = 1;
        }
        self::$subCategory->save();
    }
    public static function updateSubCategory($request, $id)
    {
        $subCategory = SubCategory::find($id);

        if ($request->file('sub_images')) {
            if ($subCategory->sub_images) {
                unlink($subCategory->sub_images);
            }
            $imageUrl = self::getImageUrl($request);
        } else {
            $imageUrl = $subCategory->sub_images;
        }

        $subCategory->category_id = $request->category_id;
        $subCategory->name = $request->name;
        $subCategory->description = $request->description;
        $subCategory->sub_images = $imageUrl;
        $subCategory->save();
    }

    public static function deleteSubCategory($id)
    {
        self::$subCategory = SubCategory::find($id);
        if (file_exists(self::$subCategory->sub_images))
        {
            unlink(self::$subCategory->sub_images);
        }
        self::$subCategory->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

}
