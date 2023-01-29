<!doctype html>
<html lang="en">

<head>
    <title>Aaviss</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Vanilla Css -->
    <link rel="stylesheet" href="{{ asset('frontend/index.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/product-filter.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/product-view-page.css') }}">
    <!-- FontAwesome Link -->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700;800&family=Poppins:wght@100;200;300;400;600;700;900&family=Roboto:wght@100;300;400;500;700;900&family=Source+Sans+Pro:wght@200;300;400;600;700;900&family=Ubuntu+Mono:wght@400;700&family=Vesper+Libre:wght@400;500;700;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <section class="header">
        <div class="top-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-6">
                        <div class="header-left">
                            <p>Connect With Us:</p>
                            <a href=""><i class="fa-brands fa-facebook header-i"></i></a>
                            <a href=""><i class="fa-brands fa-instagram header-i"></i></a>
                            <a href=""><i class="fa-brands fa-twitter header-i"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin header-i"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="header-middle">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <p class="d-block w-100">Just Arrived</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="d-block w-100">Ready To Ship</p>
                                    </div>
                                    <div class="carousel-item">
                                        <p class="d-block w-100">Best Sellers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12 col-12">
                        <div class="header-last">
                            <ul>
                                <a href="">
                                    <li class="li-style">
                                        <p>Become A Seller</p>
                                    </li>
                                </a>
                                <a href="">
                                    <li class="li-style">
                                        <i class="fa-regular fa-heart li-icon"></i>
                                        <p>Wishlist</p>
                                    </li>
                                </a>
                                <a href="">
                                    <li class="li-style">
                                        <i class="fa-solid fa-headset li-icon"></i>
                                        <p>Customer Care</p>
                                    </li>
                                </a>
                                <a href="">
                                    <li class="li-style">
                                        <p>Track Order</p>
                                    </li>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="nav-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-3 text-center">
                        <div class="logo-holder">
                            <a href="index.html" class="logo"><img
                                    src="https://aaviss.com.np/uploads/logo//logo220907090852GOQIXN.png"
                                    alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-9">
                        <div class="form-holder" style="height: 100%; padding-top: 3px;">
                            <form action="" style="height: 100%;">
                                <div class="row" style="height: 100%;">
                                    <div class="col-10 outline">
                                        <input type="text" class="form-control"
                                            placeholder="Search for products, brands and more">
                                    </div>
                                    <div class="col-2">
                                        <button class="btn btn-dark" type="submit"><i
                                                class="fa-solid fa-magnifying-glass"></i></button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                    <div class="col-lg-3 col-md-9 col-9 text-center">
                        <div class="nav-icon-holder">
                            <a href="" class="nav-icon"><i class="fa-2x fa-solid fa-cart-shopping"></i></a>
                            <div class="dropdown">
                                <span class="dropdown-toggle" type="" id="" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <a href="" class="nav-icon"><i class="fa-2x fa-regular fa-user"></i></a>
                                </span>
                                <div class="dropdown-menu" style="padding: 10px 10px;"
                                    aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item item-1" href="#"
                                        style="background-color: #383e56; color: #fff; border-radius: 5px; margin-bottom: 10px;  margin-top: 20px;">Sign
                                        in</a>
                                    <a class="dropdown-item item-2" href="#"
                                        style="background-color: orange; color: #fff; border-radius: 5px; margin-bottom: 20px;">Register</a>

                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Category Section -->
    <section class="category">
        <ul>
            @php
                $categories = App\Models\category::all();
            @endphp

            @foreach ($categories as $cat)
                <li>
                    <div class="cate-show-title">
                        <a href=""><span class="cate-show-title-design">{{ $cat->title }}</span></a>
                        @if (count($cat->subcategory) > 0)
                            <div class="cate-container"
                                style="position: absolute; display:flex; z-index: 99999; background-color: #fff; padding: 20px 20px;">
                                <div class="cate-head-sub-container">
                                    <ul>
                                        @foreach ($cat->subcategory as $sub_cat)
                                            <li>
                                                <div class="cate-head">
                                                    <a href="{{route('productlist.subu',$sub_cat)}}" class="cate-head-a"
                                                        style="color: #000; font-weight: 500;">{{ $sub_cat->title }}
                                                    </a>
                                                </div>
                                                {{-- <div class="cate-sub">
                                                    <ul
                                                        style="display: inline-block; font-size: 14px; margin-top: 10px;">
                                                        <li>
                                                            <a href="" class="cate-sub-a"
                                                                style="color: #000;"><span>Pants</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-filter.html" class="cate-sub-a"
                                                                style="color: #000;"><span>Formal
                                                                    Shirts</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-filter.html" class="cate-sub-a"
                                                                style="color: #000;"><span>Casual
                                                                    Shirts</span></a>
                                                        </li>
                                                        <li>
                                                            <a href="product-filter.html" class="cate-sub-a"
                                                                style="color: #000;"><span>Coats</span></a>
                                                        </li>
                                                        <div class="img">
                                                            kdkcdk
                                                        </div>
                                                    </ul>
                                                </div> --}}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="for-image" style="width: 250px; height: 200px; background-color: red;">
                                    <img src="{{ $cat->image }}" alt="">
                                </div>



                            </div>
                        @endif

                    </div>
                </li>
            @endforeach
        </ul>

    </section> <!-- Category Section -->



    @yield('content')

    <!-- Footer Section -->
    <section class="footer-sections" style="overflow: hidden;;">
        <div class="footer-section-container" style="background-color: #383e5c;  padding: 10px 50px">
            <div class="row">
                <div class="col-md-2 text-center right-cl">
                    <p style="color: orange; font-size: 16px; text-align: center; margin-bottom: 20px !important;">For
                        better user experience please download App</p>
                    <a href=""><img style="width: 60%; margin-bottom: 20px;"
                            src="https://aaviss.com.np/assets/new_front/imag/gplay.png" alt=""></a>
                    <a href=""><img style="width: 60%;"
                            src="https://aaviss.com.np/assets/new_front/imag/apple.png" alt=""></a>
                </div>
                <div class="col-md-2 right-cls">
                    <h5 style="color: #fff;" class="footer-head">Customer Care</h5>
                    <a href="">Help Center</a>
                    <a href="">Track Order</a>
                    <a href="">Return & Exchange</a>
                    <a href="">Contact Us</a>
                </div>
                <div class="col-md-2 right-cls">
                    <h5 style="color: #fff;" class="footer-head">Information</h5>
                    <a href="">About Us</a>
                    <a href="">FAQ</a>
                    <a href="">Terms Conditions</a>
                    <a href="">Privacy Policy</a>
                </div>
                <div class="col-md-2 right-cls">
                    <h5 style="color: #fff;" class="footer-head">Life With Us</h5>
                    <a href="">Feature your Business</a>
                    <a href="">Become a Seller</a>

                </div>
                <div class="col-md-2 right-cls">
                    <h5 style="color: #fff;" class="footer-head">Follow us on</h5>
                    <a href="">Facebook</a>
                    <a href="">Instagram</a>
                    <a href="">Twitter</a>
                    <a href="">Linkedin</a>
                </div>
                <div class="col-md-2 right-clss">
                    <h5 style="color: #fff;" class="footer-head">We Offer</h5>
                    <p style="color: #fff; font-size: 14px; margin-bottom: 10px !important;">100% Original guarantee
                        for all products at aaviss.com.np</p>
                    <p style="color: #fff; font-size: 14px; margin-bottom: 10px !important;">Return within 7 days of
                        receiving your order</p>
                    <p style="color: #fff; font-size: 14px; margin-bottom: 10px !important;">Get free delivery for
                        every order above Rs. 2000</p>
                </div>

            </div>
        </div>
    </section>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
