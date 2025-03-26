<?php

namespace App\Http\Controllers;

use App\Models\Kilogram;
use Illuminate\Http\Request;

class KilogramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kilogram.index',['kilograms'=>Kilogram::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kilogram.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kilogram::saveKilogram($request);
        return back()->with('message','Kilogram Created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kilogram $kilogram)
    {
        Kilogram::updateStatus($kilogram->id);
        return redirect('/kilogram')->with('message','Status Updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kilogram $kilogram)
    {
        return view('admin.kilogram.edit',['kilogram'=>$kilogram]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kilogram $kilogram)
    {
        Kilogram::updateKilogram($request,$kilogram->id);
        return back('')->with('message','Weight Updated ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kilogram $kilogram)
    {
        Kilogram::deleteKilogram($kilogram->id);
        return back()->with('delete','Weight Deleted');
    }
}
