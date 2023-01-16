<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homepage()
    {
        $banners = banner::all();
        return view('frontend.pages.homepage', compact('banners'));
    }
}
