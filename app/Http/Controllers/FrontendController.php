<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $banners = banner::all();
        $latest_products = product::latest()->limit(5)->get();
        $furniture_products = product::where('category_id', 1)->latest()->limit(5)->get();
        return view('frontend.pages.homepage', compact('banners', 'latest_products', 'furniture_products'));
    }
}
