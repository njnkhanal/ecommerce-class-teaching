<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = banner::all();
        return view('backend.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
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
        banner::create($data);
        return redirect(route('banner.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($banner)
    {
        $banner = banner::findorfail($banner);
        return view('backend.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $banner)
    {
        $banner = banner::findorfail($banner);
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
        $banner->update($data);
        return redirect(route('banner.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($banner)
    {
        $banner = banner::findorfail($banner);
        $banner->delete();
        return back();
    }
}