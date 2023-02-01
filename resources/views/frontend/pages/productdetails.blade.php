@extends('frontend.layouts.master')
@section('content')
    <!-- Product View Section -->
    <section class="product-view-section" style="height: auto;">
        <div class="containers" style="margin: 0 50px;">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="pvs-img-container " style="text-align: left; ">
                        <img src="{{ asset($productdetail->image) }} " alt=" " width="400px" height="500px">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pvs-detail-container " style="padding-top: 10px; ">
                        <span>Men's cotton pant</span>
                        <div class="pvs-detail-container-rating-container ">
                            <ul>
                                <li>
                                    <i class="fa-regular fa-star "></i>
                                </li>
                                <li>
                                    <i class="fa-regular fa-star "></i>
                                </li>
                                <li>
                                    <i class="fa-regular fa-star "></i>
                                </li>
                                <li>
                                    <i class="fa-regular fa-star "></i>
                                </li>
                                <li>
                                    <i class="fa-regular fa-star "></i>
                                </li>
                                <span>(0)</span>
                            </ul>
                        </div>

                        <h1 style="font-weight: 400; ">{{ $productdetail->title }}e</h1>
                        <div class="pvs-detail-container-hr " style="margin-top: 50px; margin-bottom: 20px ">

                        </div>
                        <h2 style="font-weight: 400; margin-bottom: 0; ">Rs.{{ $productdetail->price }}.00</h2>
                        <div class="pvs-detail-container-hr " style="margin-top: 20px; margin-bottom: 20px; ">

                        </div>
                        <span>
                            Size
                        </span>
                        <select class="custom-select " name=" " id=" "
                            style="margin-top: 10px; margin-bottom: 10px; ">
                            <option value=" " selected>29</option>
                            <option value=" ">30</option>
                            <option value=" ">31</option>
                            <option value=" ">32</option>
                            <option value=" ">33</option>
                            <option value=" ">34</option>
                            <option value=" ">35</option>
                            <option value=" ">36</option>
                        </select>
                        <span>
                            Quantity
                        </span>
                        <input class="form-control " type="number " value="1 "
                            style="margin-top: 10px; margin-bottom: 10px; ">
                        <span>(Only 5 items left)</span>
                        <div class="wishlist-addtocart-btn-container "
                            style="display: flex; align-items: center; justify-content:space-between; margin-top: 20px; ">
                            <button
                                style="border: none; background-color:#383e56; color: #fff; padding: 5px 50px; border-radius: 5px; ">
                                <i class="fa-regular fa-heart "></i>
                                <span>Wishlist</span>
                            </button>
                            <a href={{ route('cart.store', $productdetail->slug) }}> <button
                                    style="border: none; background-color:#383e56; color: #fff; padding: 5px 50px; border-radius: 5px; ">
                                    <i class="fa-solid fa-cart-plus "></i>
                                    <span>Add to cart</span>
                                </button></a>
                        </div>
                        <div class="buynow " style="float: right; margin-top: 10px; ">
                            <button
                                style="background-color: #2596be; border: none; color: #fff; padding: 5px 50px; border-radius: 5px; ">
                                Buy Now
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pvs-delivery-opt-container"
                        style="background-color: #eeeeee; border-radius: 5px; padding: 20px 20px;box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px; height: 100%; padding-bottom: 20px;">
                        <span style="font-size: 24px;">Delivery Options</span>
                        <div class="pvs-detail-container-hr " style="margin-top: 30px; margin-bottom: 20px ">

                        </div>
                        <div class="koc-container">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="ktm" style="margin-bottom: 10px;">
                                        <i class="fa-solid fa-house-chimney-crack"></i>
                                        <span
                                            style="color: rgb(78, 76, 76); margin-left: 10px; font-size: 15px;">Kathmandu</span>
                                    </div>
                                    <div class="out-of-ktm" style="margin-bottom: 10px;">
                                        <i class="fa-solid fa-house-chimney-crack"></i>
                                        <span style="color: rgb(78, 76, 76); margin-left: 10px; font-size: 15px;">Out of
                                            Kathmandu-Not Available</span>
                                    </div>
                                    <div class="cod" style="padding: 0 5px;">
                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                        <span
                                            style="color: rgb(78, 76, 76); margin-left: 10px; padding-left: 4px; font-size: 15px;">Cash
                                            on Delivery Available</span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="ktm" style="margin-bottom: 10px;">
                                        <span style="color: rgb(78, 76, 76); font-size: 15px;">Rs. 100.00</span>
                                    </div>
                                    <div class="out-of-ktm" style="margin-bottom: 10px;">

                                        <span style="color: rgb(78, 76, 76); font-size: 15px;">Rs. 0.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="pvs-detail-container-hr " style="margin-top: 20px; margin-bottom: 20px ">

                            </div>
                            <span style="font-size: 24px;">Return</span>
                            <div class="return-abt" style="display: flex; align-items:center; margin-left: 20px;">
                                <span style="color: orange;"><i class="fa-solid fa-circle-down"></i></span>
                                <span style="color: rgb(78, 76, 76); font-size: 15px; margin-left: 10px;">7 Days Returns
                                    <span style="font-size: 12px;">( Change of mind is not applicable)</span></span>
                            </div>
                            <span style="color: rgb(78, 76, 76); font-size: 15px; margin-left: 10px;">ID:
                                <span>means-cotton-pant</span></span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Product View More Details -->
    <section class="product-view-more-details"
        style="background-color: #eeeeee; margin: 10px 50px; display: flex; align-items: center; padding: 40px 40px; box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;">
        <div class="product-view-more-details-container">
            <span style="font-size: 25px;">More Details</span>
            <div class="des-rating-review" style="margin-bottom: 20px;">
                <span><button id="md-details"
                        style="background-color: orange; color: #fff; border: none; border-radius: 5px; padding:5px 20px;">Description</button></span>
                <span><button id="md-rating"
                        style="background-color: #383e56; color: #fff; border: none; border-radius: 5px; padding:5px 20px;">Rating
                        & Reviews</button></span>
            </div>
            <span id="md-details-show" style="font-size: 30px;">Stretchable Cotton Chinos Pant for Men Brown</span>
            <div class="review-login" id="rl-show">
                <p style="font-size: 30px;">Product Reviews
                </p>
                <div class="pvs-detail-container-hr " style="margin-top: 10px; margin-bottom: 10px; ">

                </div>
                <p style="font-size: 30px;">Please login to leave review.
                </p>
            </div>
        </div>
    </section>
    <!-- Product Grid List -->
    <section class="product-grid-list" style="margin: 50px 50px;">
        <span
            style="background-color: #383e56; color: #fff; padding: 10px 20px 10px 20px; border-top-right-radius: 20px; border-bottom-right-radius: 20px; margin-bottom: 50px;">Related
            Product</span>
        <div class="related-product-section-pvp">
            <div class="product-show-section-product" style="overflow: hidden;">
                <div class="cards-wrapper " style="margin-top: 20px; margin-bottom: 20px;">

                    @foreach ($product_related as $rel)
                        <div class="card cards" style="width: calc(100%/5); height: auto !important; margin-right: 10px;">
                            <img src="{{ asset($rel->image) }}" alt="Card image cap">
                            <div class="card-body" style="height: auto !important; padding: 10px !important;">
                                <p style="font-size: 16px; margin-bottom: 10px !important;">{{ $rel->title }}</p>
                                <h5>Rs. {{ number_format($rel->price - ($rel->price * $rel->discount) / 100, 2) }}.00</h5>
                                <div class="rs-off" style="display: flex; align-items: center;">
                                    <del
                                        style="margin-right: 10px; color: rgb(152, 150, 150) !important; font-size: 14px;">Rs.{{ $rel->price }}.00</del>
                                    <p
                                        style="color: rgb(255, 115, 0); background-color: rgb(239, 236, 236); padding: 0 5px !important; font-size: 14px;">
                                        {{ $rel->discount }}% off</p>
                                </div>
                            </div>
                        </div>
                    @endforeach







                </div>




            </div>
        </div>
    </section>
@endsection
