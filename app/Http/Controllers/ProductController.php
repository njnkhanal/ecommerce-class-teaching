<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $product = product::all();
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.product.create');
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
            'title' => 'required|string',
            'description' => 'required ',
            'category_id' => 'required|integer',

            'sub_category_id' => 'required|integer',

            'brand_id' => 'required|integer',
            'price' => 'required|integer',

            'discount' => 'required|integer',
            'stock' => 'required|integer',

        ]);
        $data = $request->all();

        product::create($data);
        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($product)
    {
        $product = product::findorfail($product);
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        $product = product::findorfail($product);
        $request->validate([
            'title' => 'required|string',
            'description' => 'required ',
            'category_id' => 'required|integer',

            'sub_category_id' => 'required|integer',

            'brand_id' => 'required',
            'price' => 'required|integer',

            'discount' => 'required|integer',
            'stock' => 'required|integer',

        ]);
        $data = $request->all();

        $product->update($data);
        return redirect(route('product.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        $product = product::findorfail($product);
        $product->delete();
        return back();
    }
}