<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sub-category.index',['subCategories'=>SubCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sub-category.create',['categories'=>Category::all()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SubCategory::saveSubCategory($request);
        return back()->with('message','Sub Category Info Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(SubCategory $subCategory)
    {
        SubCategory::statusUpdate($subCategory);
        return redirect('/sub-category')->with('message','Status Updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $subCategory)
    {
        return view('admin.sub-category.edit',['categories'=>Category::all()
                                                    ,'subCategory'=>$subCategory]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        SubCategory::updateSubCategory($request,$subCategory->id);
        return back()->with('message','Sub-Category Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $subCategory)
    {
        SubCategory::deleteSubCategory($subCategory->id);
        return back()->with('delete','Sub-Category Deleted');
    }
}
