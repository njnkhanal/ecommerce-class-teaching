<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategory = subcategory::all();
        return view('backend.subcategory.index', compact('subcategory'));
    }



    // for api
    public function getAll()
    {
        $subcategory = subcategory::all();
        return response()->json([
            'status' => true,
            'data' => $subcategory
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.subcategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required',
            'category_id' => 'required|exists:categories,id',
        ]);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = "image" . now()->format('y-m-d-h-i-s') . "." . $img->getClientOriginalExtension();
            $path = "uplod/";
            $img->move($path, $name);
            $data['image'] = $path . $name;
        }
        subcategory::create($data);
        return redirect(route('subcategory.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit($subcategory)
    {
        $subcategory = subcategory::findorfail($subcategory);
        return view('backend.subcategory.edit', compact('subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $subcategory)
    {
        $subcategory = subcategory::findorfail($subcategory);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = "image" . now()->format('y-m-d-h-i-s') . "." . $img->getClientOriginalExtension();
            $path = "uplod/";
            $img->move($path, $name);
            $data['image'] = $path . $name;
        }
        $subcategory->update($data);
        return redirect(route('subcategory.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($subcategory)
    {
        $subcategory = subcategory::findorfail($subcategory);
        $subcategory->delete();
        return back()->with([
            'success' => 'deleted succesfully',
        ]);
    }
}
