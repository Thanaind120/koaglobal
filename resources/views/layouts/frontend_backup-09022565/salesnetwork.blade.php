<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Sales Network</title>
</head>

<body>
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend/img/header_logo.png') }}" alt="" />
        </div>
    </div>

    <!-- MAIN WRAPPER
        ============================================= -->
    <div id="main-wrapper" class="clearfix">

        <!-- HEADER
                        ============================================= -->
        <header id="header" class="header-style-2 clearfix">
            <div class="site-header">
                @include('layouts.frontend.inc_navbar');
                <!-- Menu -->
                @include('layouts.frontend.inc_menu');
                <!-- Menu End -->
            </div>
        </header>
        <!-- HEADER END -->
        <!-- Headline Title START
        ============================================= -->
        <div class="l-headlineTitle">
            <div class="wrap-h1">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>
                                Sales Network
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/img/img-header/h1_products.png') }}" alt="" width="980" height="110">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Headline Title END
        ============================================= -->

        <!-- CONTENT START
            ============================================= -->
        <main id="content" class="clearfix">

            <div class="container">

                <!-- Breadcrumb START
                 ============================================= -->
                <div class="l-breadNav maleft-15">

                    <ul>
                        <li>
                            <a href="javascript:void(0)">
                                <span>
                                    Home
                                </span>
                            </a>
                        </li>

                        <li>
                            Sales Network
                        </li>
                    </ul>

                </div>
                <!-- Breadcrumb END
                ============================================= -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="features-wrap row">
                            <div class="fxb-news ">
                                <!-- SALES START
                                ============================================= -->
                                <div>
                                    <div class="l-mainSecond">





                                        <div class="fxb-basic">

                                            <div class="col-1">




                                                <p class="image-wrap align-center">
                                                    <img src="{{ asset('frontend/img/salesNetwork_sales_area-map.png') }}" alt="Sales Network">
                                                </p>


                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- SALES END
                                ============================================= -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- CONTENT END -->

        <!-- FOOTER START
            ============================================= -->
        @include('layouts.frontend.inc_footer');
        <!-- FOOTER END -->

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    @include('layouts.frontend.inc_script');
    <!-- Footer Scripts END -->
</body>

</html>
