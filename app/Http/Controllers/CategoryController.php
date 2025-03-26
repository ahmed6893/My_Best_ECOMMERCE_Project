<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.category.index',['categories'=>Category::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Category::saveCategory($request);
        return back()->with('message','Category Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        Category::statusUpdate($id);
        return redirect('/category')->with('message','status Updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.category.edit',['category'=>Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Category::updateCategory($request,$id);
        return back()->with('message','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Category::deleteCategory($id);
        return back()->with('message','Category Deleted');
    }
}
