<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class frontendcontroller extends Controller
{
    public function homepage()
    {

        $banners = banner::all();
        $latest_products = product::latest()->limit(5)->get();
        $furniture_products = product::where('category_id', 1)->latest()->limit(5)->get();
        return view('frontend.pages.homepage', compact('banners', 'latest_products', 'furniture_products'));
    }
    public function subu($category)
    {
        $product = product::where('sub_category_id', $category)->get();
        return view('frontend.pages.productlist', compact('product'));
    }
    public function subu1($details)
    {
        $productdetail = product::where('slug', $details)->first();
        $product_related = product::where('category_id', $productdetail->category_id)->latest()->limit(10)->get();

        return view('frontend.pages.productdetails', compact('productdetail', 'product_related'));
    }
    public function laptop()
    {
        return view('frontend.pages.cartdetail');
    }
    public function cartPage()
    {
        $cart_items = Auth::user()->carts;
        return view('frontend.pages.cart', compact('cart_items'));
    }
}
