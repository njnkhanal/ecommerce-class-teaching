<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = category::all();
        return view('backend.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.create');

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
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = "image" . now()->format('y-m-d-h-i-s') . "." . $img->getClientOriginalExtension();
            $path = "uplod/";
            $img->move($path, $name);
            $data['image'] = $path . $name;
        }
        category::create($data);
        return redirect('category');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category)
    {
        $category = category::findorfail($category);
        return view('backend.category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $category)
    {
        $category = category::findorfail($category);
        $data = $request->all();
        if ($request->hasFile('image')) {
            $img = $request->file('image');
            $name = "image" . now()->format('y-m-d-h-i-s') . "." . $img->getClientOriginalExtension();
            $path = "uplod/";
            $img->move($path, $name);
            $data['image'] = $path . $name;
        }
        $category->update($data);
        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        $category = category::findorfail($category);
        $category->delete();
        return back()->with([
            'success' => 'deleted succesfully',
        ]);
    }
}