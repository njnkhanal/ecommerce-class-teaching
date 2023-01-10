<?php

namespace App\Http\Controllers;

use App\Models\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brand = brand::all();
        return view('backend.brand.index', compact('brand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.brand.create');
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
        brand::create($data);
        return redirect(route('brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($brand)
    {
        $brand = brand::findorfail($brand);
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brand)
    {
        $brand = brand::findorfail($brand);
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
        $brand->update($data);
        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($brand)
    {
        $brand = brand::findorfail($brand);
        $brand->delete();
        return back();

    }
}