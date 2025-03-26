<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Product extends Model
{
    public static $product,$productImages,$productImage,$image,$imageName,$imageUrl,$directory,$extension;
    public static function saveProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id         =$request->category_id;
        self::$product->sub_category_id     =$request->sub_category_id;
        self::$product->brand_id            =$request->brand_id;
        self::$product->unit_id             =$request->unit_id;
        self::$product->name                =$request->name;
        self::$product->slug                =Str::slug($request->name);
        self::$product->code                =$request->code;
        self::$product->regular_price       =$request->regular_price;
        self::$product->selling_price       =$request->selling_price;
        self::$product->stock_amount        =$request->stock_amount;
        self::$product->short_description   =$request->short_description;
        self::$product->long_description    =$request->long_description;
        self::$product->product_image       =self::getImageUrl($request);
        self::$product->save();

        return self::$product->id;
    }
    public static function getImageUrl($request)
    {
        self::$image     =$request->file('product_image');
        self::$extension =self::$image->getClientOriginalExtension();
        self::$imageName =rand(000,999).'.'.self::$extension;
        self::$directory ='admin/image/product/';
        self::$imageUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imageUrl;
    }
    public static function updateProduct($request,$id)
    {
        self::$product =Product::find($id);

        if ($request->file('product_image'))
        {
         if (file_exists(self::$product->product_image))
         {
             unlink(self::$product->product_image);
         }
         self::$imageUrl =self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl =self::$product->product_image;
        }

        self::$product->category_id         = $request->category_id;
        self::$product->sub_category_id     = $request->sub_category_id;
        self::$product->brand_id            = $request->brand_id;
        self::$product->unit_id             = $request->unit_id;
        self::$product->name                = $request->name;
        self::$product->slug                = Str::slug($request->name);
        self::$product->code                =$request->code;
        self::$product->regular_price       =$request->regular_price;
        self::$product->selling_price       =$request->selling_price;
        self::$product->stock_amount        =$request->stock_amount;
        self::$product->short_description   =$request->short_description;
        self::$product->long_description    =$request->long_description;
        self::$product->product_image       =self::$imageUrl;
        self::$product->save();
    }

    public static function updateStatus($id)
    {
        self::$product =Product::find($id);
        if (self::$product->status == 1)
        {
            self::$product->status =0;
        }
        else
        {
            self::$product->status=1;
        }
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product =Product::find($id);

        self::$productImages= OtherImages::where('product_id',$id)->get();
        foreach (self::$productImages as self::$productImage)
        {
            if (file_exists(self::$productImage->other_image))
            {
                unlink(self::$productImage->other_image);
            }
            self::$productImage->delete();
        }

        if (file_exists(self::$product->product_image))
        {
            unlink(self::$product->product_image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function productKilograms()
    {
        return $this->hasMany(productKilogram::class);
    }
    public function otherImages()
    {
        return $this->hasMany(OtherImages::class);
    }

}
