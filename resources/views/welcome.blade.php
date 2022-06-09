<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('fontend/assets/fonts/font-awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('fontend/assets/css/style.css')}}">
</head>
<body>

    <!-- ================== HEADER TOP START ================ -->
    <header>
        <div class="header-top-left">
            <p>Free Shipping on Orders $50+</p>
        </div>
        <div class="header-top-right">
            <ul>
                <li><a href="#"><i class="a fa-solid fa-location-dot"></i>Store location</a></li>
                <li><a href="#"><i class="a fa-solid fa-truck-moving"></i>Track your Order</a></li>
                <li><a href="#">USD - US Dollar<i class="a fa-solid fa-angle-down"></i></a></li>
                <li><a href="#">English 2<i class="a fa-solid fa-angle-down"></i></a></li>
            </ul>
        </div>
    </header>
    <!-- ================== HEADER TOP END ================ -->

    <!-- ================== HEADER MID START ================ -->
    <section>
        <div class="mid-section">
            <!-- --------- -->
            <div class="logo">
                <img src="fontend/assets/image/logo.png" alt="logo">
            </div>
            <!-- ------- -->
            <div class="search_bar">
                    <i id="bar" class="bar fa-solid fa-bars"></i>
                        <div id="bars_options">
                            <ul>
                                <li><a href="#">Laplop & Computers</a></li>
                                <li><a href="#">Smart Phone</a></li>
                                <li><a href="#">Cameras & Photos</a></li>
                                <li><a href="#">Gaming</a></li>
                                <li><a href="#">TVs & Audios</a></li>
                                <li><a href="#">Headphones</a></li>
                                <li><a href="#">Printers & Inks</a></li>
                                <li><a href="#">Speakers</a></li>
                                <li><a href="#">Accessories</a></li>
                            </ul>
                        </div>
                <form action="#">
                    <div class="form_input">
                        <input class="form-controll" type="text" placeholder="Search entire store here...">       
                    </div>
                    <div class="m-src_btn">
                        <a href="#">Search</a>
                    </div>
                </form>
            </div>
            <!-- ------- -->
            <div class="connect_us">
                <div class="c_left">
                    <i class="call_i fa-solid fa-phone-volume"></i>
                    <div class="call">
                        <p>Call us 24/7</p>
                        <p>(+880)172-600-9964</p>
                    </div>
                </div>
                <div class="c_mid">
                    <i class="shopping_i fa-solid fa-bag-shopping"></i>
                    <div>
                        <span>1</span>
                        <p>Cart</p>
                    </div>
                </div>
                <div class="c_right">
                    <i class="heart_i fa-solid fa-heart"></i>
                    <div>
                        <span>0</span>
                    </div>
                </div>
                <div class="sign">
                    <i class="user_i fa-solid fa-user"></i>
                    <div>
                        <a href="{{route('login')}}">Sign In</a>
                        <a href="{{route('register')}}">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== HEADER MID END ================ -->

    <!-- ================== NAVIGATION START ================ -->
    <nav>
        <ul>
            <li><a href="#"><i class="b fa-solid fa-laptop"></i>Laptops & Computers<i class="bb fa-solid fa-angle-down"></i></a></li>
            <li><a href="#"><i class="b fa-solid fa-camera"></i>Cameras & Photos<i class="bb fa-solid fa-angle-down"></i></a></li>
            <li><a href="#"><i class="b fa-solid fa-mobile-screen"></i>Smart Phones</a></li>
            <li><a href="#"><i class="b fa-solid fa-tv"></i>TVs & Audios</a></li>
            <li><a href="#"><i class="b fa-solid fa-headphones-simple"></i>Headphones</a></li>
            <li><a href="#"><i class="b fa-solid fa-print"></i>Printers & Inks</a></li>
            <li><a href="#"><i class="b fa-solid fa-sim-card"></i>Speakers</a></li>
        </ul>
    </nav>
    <!-- ================== NAVIGATION END ================ -->


    <!-- ================== BANNER START HERE ================ -->
    <section class="padd-25">
        <div class="banner">
            <div class="slider">
                <div class="row">
                    <div class="slider owl-carousel">
                        <div class="ban">
                            <img src="fontend/assets/image/banner-1.jpg" alt="banner-1">
                            <div class="ban-text">
                                <h4>Best Deals Online</h4>
                                <h2>BEAT SOLO GOLD <br> HEADPHONE WIRENESS <br> ONLY PRICE $79 </h2>
                                <a href="#">Shop Now</a>
                            </div>
                        </div>
                        <div class="ban">
                            <img src="fontend/assets/image/banner-2.jpg" alt="banner-2">
                        </div>
                        <div class="ban">
                            <img src="fontend/assets/image/banner-3.jpg" alt="banner-3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== BANNER ENDS HERE ================ -->



    <!-- ================== CUSTOMERS SUGGESTIONS START ================ -->
    <section class="padd-25">
        <div class="options">
            <div class="op-items">
                <div class="op-icon">
                    <i class="c big-icons fa-solid fa-truck-moving"></i>
                </div>
                <div class="op-text">
                    <h6>Free Delivery</h6>
                    <p>from $50</p>
                </div>
            </div>
            <!-- op-2 -->
            <div class="op-items">
                <div class="op-icon">
                    <i class="c fa-solid fa-comments"></i>
                </div>
                <div class="op-text">
                    <h6>99 % Customer</h6>
                    <p>Feedbacks</p>
                </div>
            </div>
            <!-- op-3  -->
            <div class="op-items">
                <div class="op-icon">
                    <i class="c fa-solid fa-arrow-rotate-left"></i>
                </div>
                <div class="op-text">
                    <h6>365 Days</h6>
                    <p>for free return</p>
                </div>
            </div>
            <!-- op-4 -->
            <div class="op-items">
                <div class="op-icon">
                    <i class="c fa-solid fa-money-check-dollar"></i>
                </div>
                <div class="op-text">
                    <h6>Payment</h6>
                    <p>Secure System</p>
                </div>
            </div>
            <!-- op-5 -->
            <div class="op-items">
                <div class="op-icon">
                    <i class="c fa-solid fa-tags"></i>
                </div>
                <div class="op-text">
                    <h6>Only Best</h6>
                    <p>Brands</p>
                </div>
            </div>
            <!-- op-6 -->
            <div class="op-items">
                <div class="op-icon">
                    <i class="c fa-solid fa-headset"></i>
                </div>
                <div class="op-text">
                    <h6>24/7</h6>
                    <p>free Support</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== CUSTOMERS SUGGESTIONS END ================ -->


    <!-- ================== NEW SEASON BANNER START ================ -->
    <section class="padd-25">
        <div class="min-div">
            <div class="min-banner">
                <div class="layout"></div>
                <div class="layout-border"></div>
                <div class="min-banner-text">
                    <h3>NEW SEASONS</h3>
                    <p>SMARTPHONES</p>
                </div>
                <img src="fontend/assets/image/banner-min1.jpg" alt="banner-min1">
            </div>
            <div class="min-banner">
                <div class="layout"></div>
                <div class="layout-border"></div>
                <img src="fontend/assets/image/banner-min2.jpg" alt="banner-min2">
            </div>
            <div class="min-banner">
                <div class="layout"></div>
                <div class="layout-border"></div>
                <div class="min-banner-text" style="color: black;">
                    <h3>NIKON RX-10</h3>
                    <p>32GB UNLOACKED</p>
                    <p style="font-size: 1.4rem">4GB RAM | 64GB ROM | 20MP</p>
                </div>
                <img src="fontend/assets/image/banner-min3.jpg" alt="banner-min3">
            </div>
        </div>
    </section>
    <!-- ================== NEW SEASON BANNER END ================ -->



    <!-- ================== TODAY FLASH SALE START ================ -->
    <section class="padd-25 padding-top">
        <div class="flash-sale-header">
            <h4>Today Flash Sale</h4>
            <p>End in: <span>58 d : 00 h : 39 m : 27 s</span></p>
        </div>

        <div class="flash-sale-main">
            <!-- product-1 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flasg-sale-1.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
            <!-- product-2 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flsah-sale-2.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
            <!-- product-3 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flash-sale-3.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
            <!-- product-4 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flash-sale-4.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
            <!-- product-5 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flash-sale-5.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
            <!-- product-6 -->
            <div class="flash_sale_products">
                <div>
                    <img src="fontend/assets/image/flash-sale-6.jpg" alt="flash-sale-1">
                </div>
                <div class="fs-text">
                    <a href="#">HD PRo Webcam c910 Voip Equipment</a>
                    <span>$180.00</span>
                    <div class="reviews">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="line">
                        <div class="filed"></div>
                    </div>
                    <p>Sold: <strong>34/100</strong></p>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== TODAY FLASH SALE END ================ -->




    <!-- ================== POPULAR CATEGORIES THIS WEEK START ================ -->
    <section class="padd-25 padding-top">
        <div class="p_C_heading">
            <h4>Popular Categories This Week</h4>
        </div>
        <div class="p_cate">
            <div class="categories_slider">
                <img src="fontend/assets/image/cate1-min.jpg" alt="slider-img">
            </div>
    
            <!-- popular cate products start -->
            <div class="categories_products_div">
                <!-- column-1 -->
                <div class="cat-column col-text">
                    <a class="sp" href="#">laptop & Computers</a>
                    <a href="#">Cameras & Photos</a>
                    <a href="#">Smart Phones & Tablets</a>
                    <a href="#">TVs & Audios</a>
                    <a href="#">Accessories</a>
                </div>
                <!-- column-2 -->
                <div class="cat-column">
                    <div class="row-border hover-img">
                        <img src="fontend/assets/image/p-c-1.jpg" alt="Popular_categories-1">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ======== -->
                    <div class="hover-img">
                        <img src="fontend/assets/image/p-c-5.jpg" alt="Popular_categories-5">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column-3 -->
                <div class="cat-column">
                    <div class="row-border hover-img">
                        <img src="fontend/assets/image/p-c-2.jpg" alt="Popular_categories-1">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ======== -->
                    <div class="hover-img">
                        <img src="fontend/assets/image/p-c-6.jpg" alt="Popular_categories-5">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column-4 -->
                <div class="cat-column">
                    <div class="row-border hover-img">
                        <img src="fontend/assets/image/p-c-3.jpg" alt="Popular_categories-1">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ======== -->
                    <div class="hover-img">
                        <img src="fontend/assets/image/p-c-7.jpg" alt="Popular_categories-5">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- column-5 -->
                <div class="cat-column">
                    <div class="row-border hover-img">
                        <img src="fontend/assets/image/p-c-4.jpg" alt="Popular_categories-1">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- ======== -->
                    <div class="hover-img">
                        <img src="fontend/assets/image/p-c-8.jpg" alt="Popular_categories-5">
                        <div class="ss">
                            <a href="#">XONE Wireless Controller series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- popular cate products ends -->

        </div>

    </section>
    <!-- ================== POPULAR CATEGORIES THIS WEEK END ================ -->


    <!-- ================== MID BANNER START ================ -->
    <section class="padd-25 padding-top">
        <div class="mid-banner">
            <div class="mid-banner-left">
                <div class="border_mid"></div>
                <img src="fontend/assets/image/mid-ban-1.jpg" alt="">
            </div>
            <div class="mid-banner-right">
                <div class="border_mid"></div>
                <img src="fontend/assets/image/mid-ban-2.jpg" alt="">
            </div>
        </div>
    </section>
    <!-- ================== MID BANNER START END ================ -->


    <!-- ================== DAILY BEST SELLING START ================ -->
    <section id="daily" class="padd-25 padding-top">
        <div class="container">
            <div class="daily_selling_heading">
                <div class="daily_s_title">
                    <h4>Daily Best Selling</h4>
                </div>
                <div class="daily_selling_buttons" >
                    <a data-filter=".smartphone" href="#daily">Smart Phone</a>
                    <a data-filter=".laptop" href="#daily">Laptops</a>
                    <a data-filter=".headphone" href="#daily">Headphones</a>
                    <a data-filter=".camera" href="#daily">Camera</a>
                </div>
            </div>
            <div class="daily_selling_products">
                <div class="daily_products">
                    <!-- smartphone -->
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-1.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-2.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-3.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-4.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-5.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-6.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-7.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix smartphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-8.jpg" alt="smartphone">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- Laptops -->
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-5.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-1.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-2.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-2.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/p-c-11.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/p-c-3.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-4.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix laptop">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-8.jpg" alt="Laptops">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- headphones  -->
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-1.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-3.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-5.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-2.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/p-c-10.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-5.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-4.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix headphone">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-1.jpg" alt="headphones">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <!-- camera  -->
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-2.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-1.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-3.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-8.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/p-c-11.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-4.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-7.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <div class="product_img mix camera">
                        <div class="p-img">
                            <img src="fontend/assets/image/daily-product-8.jpg" alt="camera">
                        </div>
                        <div class="pd-text">
                            <a href="#">XONE Wireless Controller Series 2</a>
                            <span>$110.00</span>
                            <div class="reviews">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== DAILY BEST SELLING END ================ -->


    <!-- ================== OFFER BANNER SECTION START ================ -->
    <section class="padd-25">
        <div class="offer-banner">
            <img src="fontend/assets/image/offer-banner-1.jpg" alt="full-width-banner-offer">
            <div class="offer_ban_text">
                <h3>Xbox One S 750GB</h3>
                <h4>512 GB of Storage Xbox One S All</h4>
            </div>
        </div>
        <div class="devide_banner">
            <div class="d-left">
                <img src="fontend/assets/image/offer-banner-2.jpg" alt="banner-offer-2">
                <div class="devided_ban_text">
                    <h4>Asus Vivobook Express Yourself</h4>
                    <p>and the fastest Intel Core i7 processor ever</p>
                    <p>now at <span style="font-weight: bold;">$</span><span style="font-weight: bold; font-size: 4rem">749</span></p>
                </div>
            </div>
            <div class="d-right">
                <img src="fontend/assets/image/offer-banner-3.jpg" alt="banner-offer-3">
                <div class="d_right_text">
                    <h4>iPhone X 128GB</h4>
                    <h3>Retina Display</h3>
                    <p>discount <span>25% off</span></p>
                    <a href="#">Shop Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- ================== OFFER BANNER SECTION END ================ -->



    <!-- ================== BLOG SECTION START ================ -->
    <div class="blog_section">
        <div class="blog_title">
            <h3>Most Popular blog Posts</h3>
        </div>
        <div class="blog_div">
            <!-- blog-1 -->
            <div class="blog">
                <div class="blog_img">
                    <img src="fontend/assets/image/blog-1.jpg" alt="blog-1">
                </div>
                <div class="blog_body">
                    <p>Life & Style, Electronics, Computer</p>
                    <h4>EXterior Ideas: 10 Colored Fiber Garden Seats</h4>
                    <small>By'Do''Toan'<i class="fa-solid fa-clock"></i> November 11,2022</small>
                </div>
            </div>
            <!-- blog-1 -->
            <div class="blog">
                <div class="blog_img">
                    <img src="fontend/assets/image/blog-2.jpg" alt="blog-1">
                </div>
                <div class="blog_body">
                    <p>Life & Style, Electronics, Computer</p>
                    <h4>EXterior Ideas: 10 Colored Fiber Garden Seats</h4>
                    <small>By'Do''Toan'<i class="fa-solid fa-clock"></i> November 11,2022</small>
                </div>
            </div>
            <!-- blog-1 -->
            <div class="blog">
                <div class="blog_img">
                    <img src="fontend/assets/image/blog-3.jpg" alt="blog-1">
                </div>
                <div class="blog_body">
                    <p>Life & Style, Electronics, Computer</p>
                    <h4>EXterior Ideas: 10 Colored Fiber Garden Seats</h4>
                    <small>By'Do''Toan'<i class="fa-solid fa-clock"></i> November 11,2022</small>
                </div>
            </div>
            <!-- blog-1 -->
            <div class="blog">
                <div class="blog_img">
                    <img src="fontend/assets/image/blog-4.jpg" alt="blog-1">
                </div>
                <div class="blog_body">
                    <p>Life & Style, Electronics, Computer</p>
                    <h4>EXterior Ideas: 10 Colored Fiber Garden Seats</h4>
                    <small>By'Do''Toan'<i class="fa-solid fa-clock"></i> November 11,2022</small>
                </div>
            </div>
        </div>
    </div>
    <!-- ================== BLOG SECTION END ================ -->





    <!-- ================== BRANDS LOGOS START ================ -->
    <section>
        <div class="brands">
            <img src="fontend/assets/image/brand1.jpg" alt="brand1">
            <img src="fontend/assets/image/brand2.jpg" alt="brand2">
            <img src="fontend/assets/image/brand3.jpg" alt="brand3">
            <img src="fontend/assets/image/brand4.jpg" alt="brand4">
            <img src="fontend/assets/image/brand5.jpg" alt="brand5">
            <img src="fontend/assets/image/brand6.jpg" alt="brand6">
            <img src="fontend/assets/image/brand7.jpg" alt="brand7">
        </div>
    </section>
    <!-- ================== BRANDS LOGOS ENDS ================ -->



    <!-- ================== SIGN UP TO NEWSLETTER START ================ -->
    <div class="newsletter">
        <div class="newsletter_main">
            <div class="newsletter_left">
                <h4><i class="fa-solid fa-paper-plane"></i> Sign Up to Newsletter</h4>
                <p>...and receieve <strong>$20 coupon for first shopping and free delivery</strong></p>
            </div>
            <div class="newsletter_right">
                <form action="#">
                    <div class="form-style">
                        <input class="form-control" type="text" placeholder="Enter your email">
                    </div>
                    <div class="btn-sub">
                        <a href="#">Subuscribe</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ================== SIGN UP TO NEWSLETTER START END ================ -->



    <!-- ================== FOOTER START HERE ================ -->
    <footer>
        <div class="footer-links">
            <div class="company_info footer_all">
                <h5>Company Info</h5>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Social Responsibility</a></li>
                    <li><a href="#">Affiliate Program</a></li>
                    <li><a href="#">Business With Us</a></li>
                    <li><a href="#">Find a Store</a></li>
                    <li><a href="#">Press & Talent</a></li>
                </ul>
            </div>
            <div class="help footer_all">
                <h5>Company Info</h5>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shipping Info</a></li>
                    <li><a href="#">Returns & Exchanges</a></li>
                    <li><a href="#">Size Guide</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
            <div class="Hot_Categories footer_all">
                <h5>Hot Categories</h5>
                <ul>
                    <li><a href="#">Electronics</a></li>
                    <li><a href="#">Digital</a></li>
                    <li><a href="#">Fashions</a></li>
                    <li><a href="#">Furniture</a></li>
                    <li><a href="#">Bags & Shoes</a></li>
                    <li><a href="#">Accessories</a></li>
                    <li><a href="#">Mobiles & Tablets</a></li>
                </ul>
            </div>
            <div class="Download_App footer_all">
                <h5>Download App</h5>
                <p>Save $3 with App & New User Only</p>
                <div class="footer_img">
                    <div class="footer-img-left">
                        <img src="fontend/assets/image/footer-img-01.png" alt="">
                    </div>
                    <div class="footer-img-right">
                        <div>
                            <img src="fontend/assets/image/footer-img-02.png" alt="">
                        </div>
                        <div>
                            <img src="fontend/assets/image/footer-img-03.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="Contact_Us footer_all">
                <h5>Contact Us</h5>
                <p>Call us 24/7</p>
                <p class="number">(+880) 172-600-9964</p>
                <p>Walls Street 68, Mahattan, New York, USA</p>
                <p>contact@shopbuy.com</p>
                <div class="social_links">
                    <i class="f fa-brands fa-facebook-f"></i>
                    <i class="f fa-brands fa-twitter"></i>
                    <i class="f fa-solid fa-rss"></i>
                    <i class="f fa-brands fa-flickr"></i>
                    <i class="f fa-brands fa-google-plus-g"></i>
                    <i class="f fa-brands fa-dribbble"></i>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="footer_bottom_text">
                <div class="copy_right">
                    <span>© 2021 shopbuy. All Rights Reserved.</span>
                </div>
                <div class="footer_bottom_right">
                    <p>We Using Safe Payment For</p>
                    <img src="fontend/assets/image/footer-img-04.png" alt="">
                </div>
            </div>
        </div>
    </footer>
    <!-- ================== FOOTER ENDS HERE ================ -->



    <script src="{{asset('fontend/assets/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('fontend/assets/fonts/font-awesome/js/all.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/mixitup.min.js')}}"></script>
    <script src="{{asset('fontend/assets/js/custom.js')}}"></script>
   
    <script>
        let mixer = mixitup('.container');

        
    </script>

</body>
</html>