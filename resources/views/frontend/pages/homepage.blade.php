@extends('frontend.layouts.master')
@section('content')
    <!-- Carousel Section -->
    <section class="carousel-main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($banners as $key => $banner)
                    <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"
                        class="{{ $key == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                @foreach ($banners as $key => $banner)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ asset($banner->image) }}" alt="First slide">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>

    <!-- Trending Week Line -->
    <section class="trending-week-line">
        <div class="trending-design">
            <span class="trending-para">Latest This Week</span>
        </div>
    </section>

    <!-- Trending Card Carousel -->
    <section class="trending-card-slider">
        <div id="carouselExampleControls" class="carousel-dark slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        @foreach ($latest_products as $product)
                            <div class="card cards"
                                style="width: calc(100%/5); height: auto !important; margin-right: 10px;">
                                <span>{{ \carbon\Carbon::parse($product->created_at)->diffForHumans() }}</span>
                                <img src="{{ asset($product->image) }}" alt="Card image cap">
                                <div class="card-body" style="height: auto !important; padding: 10px !important;">
                                    <p style="font-size: 16px; margin-bottom: 10px !important;">{{ $product->title }}</p>
                                    <h5>Rs.
                                        {{ number_format($product->price - ($product->price * $product->discount) / 100, 2) }}
                                    </h5>
                                    <div class="rs-off" style="display: flex; align-items: center;">
                                        <del
                                            style="margin-right: 10px; color: rgb(152, 150, 150) !important; font-size: 14px;">Rs.{{ number_format($product->price, 2) }}</del>
                                        <p
                                            style="color: rgb(255, 115, 0); background-color: rgb(239, 236, 236); padding: 0 5px !important; font-size: 14px;">
                                            {{ number_format($product->discount, 2) }}% off</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Best Offers And More Card Section  -->
    <section class="best-offer-card"
        style="margin: 30px 0 30px 0; overflow: hidden; text-align: center; display: flex; padding: 0 50px; overflow: hidden;">
        <div class="card" style="width: calc(100%/4); margin-right: 10px;">

            <div class="card-body card-shadow">
                <i class="fa-2x fa-regular fa-circle-question"></i>
                <h5 style="margin-bottom: 0 !important; margin-top: 10px;">Best Offers</h5>


            </div>
        </div>
        <div class="card" style="width: calc(100%/4); margin-right: 10px;">

            <div class="card-body card-shadow">
                <i class="fa-2x fa-regular fa-circle-question"></i>
                <h5 style="margin-bottom: 0 !important;  margin-top: 10px;">Just Arrived</h5>


            </div>
        </div>
        <div class="card" style="width: calc(100%/4); margin-right: 10px;">

            <div class="card-body card-shadow">
                <i class="fa-2x fa-regular fa-circle-question"></i>
                <h5 style="margin-bottom: 0 !important; margin-top: 10px;">Ready To Ship</h5>


            </div>
        </div>
        <div class="card" style="width: calc(100%/4); margin-right: 10px;">

            <div class="card-body card-shadow">
                <i class="fa-2x fa-regular fa-circle-question"></i>
                <h5 style="margin-bottom: 0 !important; margin-top: 10px;">Best Sellers</h5>


            </div>
        </div>
    </section>

    <!-- More To Explore -->

    <section class="trending-week-line">
        <div class="trending-design">
            <span class="trending-para">Explore in furniture</span>
        </div>
    </section>
    <section class="trending-card-slider">
        <div id="carouselExampleControls" class="carousel-dark slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="cards-wrapper">
                        @foreach ($furniture_products as $product)
                            <div class="card cards"
                                style="width: calc(100%/5); height: auto !important; margin-right: 10px;">
                                <img src="{{ asset($product->image) }}" alt="Card image cap">
                                <div class="card-body" style="height: auto !important; padding: 10px !important;">
                                    <p style="font-size: 16px; margin-bottom: 10px !important;">{{ $product->title }}</p>
                                    <h5>Rs.
                                        {{ number_format($product->price - ($product->price * $product->discount) / 100, 2) }}
                                    </h5>
                                    <div class="rs-off" style="display: flex; align-items: center;">
                                        <del
                                            style="margin-right: 10px; color: rgb(152, 150, 150) !important; font-size: 14px;">Rs.{{ number_format($product->price, 2) }}</del>
                                        <p
                                            style="color: rgb(255, 115, 0); background-color: rgb(239, 236, 236); padding: 0 5px !important; font-size: 14px;">
                                            {{ number_format($product->discount, 2) }}% off</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
