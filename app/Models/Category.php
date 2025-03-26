<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public static $category,$image,$imageName,$directory,$imgUrl,$extension;

    public static function saveCategory($request)
    {
        self::$category = new Category();
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->images      = self::getImageUrl($request);
        self::$category->save();
    }
    public static function getImageUrl($request)
    {
        self::$image = $request->file('images');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName = rand(000,999).'.'.self::$extension;
        self::$directory = 'admin/image/category/';
        self::$imgUrl    =self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);

        return self::$imgUrl;
    }
    public static function statusUpdate($id)
    {
        self::$category = Category::find($id);
            if(self::$category->status == 1)
            {
                self::$category->status = 0;
            }
            else
            {
                self::$category->status = 1;
            }
            self::$category->save();
    }

    public static function updateCategory($request,$id)
    {
        self::$category = Category::find($id);
        if ($request->file('images')) {
            if (file_exists(self::$category->images)) {
                unlink(self::$category->images);
            }
            self::$imgUrl = self::getImageUrl($request);
        }
        else {
            self::$imgUrl =self::$category->images;
        }
        self::$category->name        = $request->name;
        self::$category->description = $request->description;
        self::$category->images      = self::$imgUrl;
        self::$category->save();
    }
    public static function deleteCategory($id)
    {
        self::$category =Category::find($id);

        if (file_exists(self::$category->images))
        {
            unlink(self::$category->images);
        }
        self::$category->delete();
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
