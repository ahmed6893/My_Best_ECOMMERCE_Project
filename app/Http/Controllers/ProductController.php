<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\OtherImages;
use App\Models\Product;
use App\Models\productKilogram;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Kilogram;
use App\Models\Unit;
use Illuminate\Http\Request;
use function Carbon\get;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.product.index',['products'=>Product::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create',[
            'categories'=>Category::where('status',1)->get(),
            'subCategories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
            'units'=>Unit::where('status',1)->get(),
            'kilograms' =>Kilogram::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public $productId;
    public function store(Request $request)
    {
        $this->productId = Product::saveProduct($request);
        productKilogram::saveProductKilogram($request->kilogram,$this->productId);
        OtherImages::productOtherImages($request->file('other_image'),$this->productId);
        return back()->with('message','Product Info Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        Product::updateStatus($product->id);
        return back()->with('message','Product Status Is Updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {

        return view('admin.product.edit',[
            'product'=>$product,
            'categories'=>Category::where('status',1)->get(),
            'subCategories'=>SubCategory::where('status',1)->get(),
            'brands'=>Brand::where('status',1)->get(),
            'units'=>Unit::where('status',1)->get(),
            'kilograms'=>kilogram::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        Product::updateProduct($request,$product->id);
        productKilogram::updateProductKilogram($request->kilogram,$product->id);

        if ($request->hasFile('other_image'))
        {
            OtherImages::updateOtherImages($request->file('other_image'),$product->id);
        }
        return back()->with('message','Product Info Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::deleteProduct($product->id);
        return back()->with('delete','Product Info Is Deleted');
    }
}
