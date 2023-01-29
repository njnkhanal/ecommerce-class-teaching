@extends('frontend.layouts.master')
@section('content')
    <!-- Product Filter Section -->
    <div class="prt-filter-container">
        <div class="row">
            <div class="col-md-3" style="height: 100vh; overflow-y: scroll;">
                <div class="price-size-brands-cont">
                    <div class="price-range"
                        style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                        <div class="price-range-top prt-all" id="prt-toggle"
                            style="cursor: pointer; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                            <span class="prt-title-color">Price Range</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="price-range-sub" id="prt-sub-toggle" style="overflow: hidden;">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="min-container" style="overflow: hidden;">
                                        <span>Min</span>
                                        <input class="form-control" type="text" placeholder="0">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="max-container" style="overflow: hidden;">
                                        <span>Max</span>
                                        <input class="form-control" type="text" placeholder="45000">
                                    </div>
                                </div>
                                <div class="col-md-2" style="display: flex;">
                                    <div class="next-container"
                                        style="display: flex; align-items:center; justify-content:center;">
                                        <span class="sq-caret-down"><i
                                                class="fa-2x fa-solid fa-square-caret-down"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="size"
                        style="box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                        <div class="price-range-top prt-all"
                            style="cursor: pointer; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"
                            id="size-toggle">
                            <span class="prt-title-color">Size</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="price-range-sub" id="size-sub-toggle" style="overflow: hidden;">
                            <div class="min-container" style="overflow: hidden;">
                                <span>Size</span>
                                <input class="form-control" type="text" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="brands"
                        style="margin-bottom: 20px; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;">
                        <div class="price-range-top prt-all"
                            style="cursor: pointer; box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;"
                            id="brands-toggle">
                            <span class="prt-title-color">Brands</span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </div>
                        <div class="price-range-sub" id="brands-sub-toggle" style="overflow: hidden;">
                            <div class="min-container" style="overflow: hidden;">
                                <ul>
                                    <li style="margin-top: 10px; margin-bottom: 20px;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Adidas</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Arrow</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Baltra</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Caliber</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Denim</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Denim & Devils</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Gold Star</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">KTM-Jeans</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Levis</span>
                                    </li>
                                    <li style="margin: 20px 0;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Tommy Hilfiger</span>
                                    </li>
                                    <li style="margin-top: 20px;">
                                        <input class="" type="checkbox" placeholder="0">
                                        <span style="margin-left: 20px;">Vintage Denim</span>
                                    </li>

                                </ul>


                            </div>
                        </div>
                    </div>
                    <div class="collection">

                    </div>
                    <div class="color">

                    </div>
                </div>
            </div>
            <div class="col-md-9" style="height: 100vh; overflow-y: scroll;">
                <div class="row" style="display: flex; align-items:center;">
                    <div class="col-md-9">
                        <div class="product-show-section-top-left" style=" padding: 10px;">
                            <span>Products</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="product-show-section-top-right"
                            style="display: flex; justify-content:space-between; align-items:center;">
                            <select class="custom-select" name="" id="">
                                <option selected value="">Name</option>
                                <option value="">Price</option>
                                <option value="">Category</option>
                            </select>
                            <div class="menu-line"
                                style="padding: 5px; border-radius: 3px; color: #fff; text-align: center; width: 50px; margin: 0 10px; background-color: #c9135e;">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="menu-dot"
                                style="padding: 5px; border-radius: 3px; color: #fff; text-align: center; width: 50px; background-color: #c9135e;">
                                <i class="fa-solid fa-bars-progress"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-show-section-hr"
                    style="height: 2px; width: 100%; background-color: rgb(228, 223, 223);">
                </div>
                <div class="product-show-section-product" style="overflow: hidden;">
                    <div class="cards-wrapper" style="margin-top: 20px;">

                        @foreach ($product as $cat)
                            <div class="card cards"
                                style="width: calc(100%/4); height: auto !important; margin-right: 10px;">
                                <img src="{{ asset($cat->image) }}" alt="Card image cap">
                                <div class="card-body" style="height: auto !important; padding: 10px !important;">
                                    <a href="{{ route('productdetails.subu1', $cat->slug) }}">
                                        <p class="textlimit" style="font-size: 16px; margin-bottom: 10px !important;">
                                            {{ $cat->title }}</p>
                                    </a>
                                    <h5>Rs.{{ number_format($cat->price - ($cat->price * $cat->discount) / 100, 2) }}</h5>

                                    <div class="rs-off" style="display: flex; align-items: center;">
                                        <del
                                            style="margin-right: 10px; color: rgb(152, 150, 150) !important; font-size: 14px;">{{ $cat->price }}</del>
                                        <p
                                            style="color: rgb(255, 115, 0); background-color: rgb(239, 236, 236); padding: 0 5px !important; font-size: 14px;">
                                            {{ $cat->discount }}% off</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card cards"
                                style="width: calc(100%/4); height: auto !important; margin-right: 10px;">
                                <img src="{{ asset($cat->image) }}" alt="Card image cap">
                                <div class="card-body" style="height: auto !important; padding: 10px !important;">
                                    <a href="{{ route('productdetails.subu1', $cat) }}">
                                        <p style="font-size: 16px; margin-bottom: 10px !important;">{{ $cat->title }}</p>
                                    </a>
                                    <h5>Rs.{{ number_format($cat->price - ($cat->price * $cat->discount) / 100, 2) }}</h5>

                                    <div class="rs-off" style="display: flex; align-items: center;">
                                        <del
                                            style="margin-right: 10px; color: rgb(152, 150, 150) !important; font-size: 14px;">{{ $cat->price }}</del>
                                        <p
                                            style="color: rgb(255, 115, 0); background-color: rgb(239, 236, 236); padding: 0 5px !important; font-size: 14px;">
                                            {{ $cat->discount }}% off</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
