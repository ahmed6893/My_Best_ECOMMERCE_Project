<?php

namespace App\Http\Controllers;

use App\Models\OtherImages;
use App\Models\Product;
use Illuminate\Http\Request;
use function Illuminate\Database\Query\where;

class FreshCartController extends Controller
{
    public function index()
    {
        return view('website.home.index',['products'=>Product::where('status',1)->get()]);
    }
    public function product($id)
    {
        return view('website.product.index',['products'=>Product::where('category_id',$id)->get(),

            ]);
    }
    public function subCategoryProduct($id)
    {
        return view('website.product.index',['products'=>Product::where('sub_category_id',$id)->get()]);


    }
    public function productDetails($id)
    {
        return view('website.product.details',['product'=>Product::where('id',$id)->first(),
            'otherImages'=>OtherImages::where('product_id',$id)->get(),
        ]);
    }
}
