<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>KOA DENKO </title>
</head>

<body>
    <div id="preloader">
        <div id="status">
            <img src="{{ asset('frontend/img/header_logo.png' ) }}" alt="" />
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

        <!-- SLIDER START
            ============================================= -->
        <section id="slider" class="home-slider clearfix">
            <div class="slider-wrapper">
                <div class="flexslider clearfix">
                    <ul class="slides">
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_01.jpg' ) }}" alt="">
                            <img class="visible-xs" src="{{ asset('frontend/img/slider/SP_uniqueness.jpg' ) }}" alt="">
                        </li>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_02.jpg' ) }}" alt="">
                            <img class="visible-xs" src="{{ asset('frontend/img/slider/SP_corporate.jpg' ) }}" alt="">
                        </li>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_03.jpg' ) }}" alt="">
                            <img class="visible-xs" src="{{ asset('frontend/img/slider/SP_technology.jpg' ) }}" alt="">
                        </li>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_0402.jpg' ) }}"
                                alt="">
                            <img class="visible-xs" src="{{ asset('frontend/img/slider/SP_powerShunts-banner.png' ) }}"
                                alt="">
                        </li>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_0502.jpg' ) }}"
                                alt="">
                            <img class="visible-xs"
                                src="{{ asset('frontend/img/slider/SP_increased-power-ratings.png' ) }}" alt="">
                        </li>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('frontend/img/slider/top_slide_pc_07.jpg' ) }}" alt="">
                            <img class="visible-xs" src="{{ asset('frontend/img/slider/SP_uniqueness.jpg' ) }}" alt="">
                        </li>
                    </ul>
                </div>
            </div>
            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">

                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <a id="frame_0_main_1_pickup_0_HomePickupLink" class="l-pickup" href="javascript:void(0)"
                                target="_blank">
                                <h2>
                                    PICKUP <br>APPLICATIONS<br>
                                </h2>
                                <p class="_image">
                                    <img src="{{ asset('frontend/./img/top_pickup_01.png' ) }}" alt="" style="
                                max-height: 100px;">
                                </p>
                                <p class="_outline">
                                    Products for Industrial Applications
                                    <span class="_text">

                                    </span>
                                    <span class="_link">
                                        Click Here -
                                    </span>
                                </p>
                            </a>
                        </div>
                        <!--  left block -->
                        <div class="col-sm-12 col-md-9">
                            <!-- SERVICES START
                            ============================================= -->
                            <div class="features-wrap row">
                                <div class="fxb-basic">
                                    <div class="col-1">
                                        <h4>PRODUCT CATEGORY</h4>
                                    </div>
                                </div>
                                <div class="fxb-block fxb-margin">
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_01.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Resistors(SMD)</span>
                                            </p>

                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products02v.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Low Resistance/Current Sense Shunt Resistors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products03v.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Resistors(Leaded)</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_04.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Thermistors Thermal Sensors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_05.jpg')}}"
                                                    alt="inductors">
                                            </p>
                                            <p>
                                                <span>Inductors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_06.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Fuses</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_07.jpg')}}"
                                                    alt="varistors">
                                            </p>
                                            <p>
                                                <span>Varistors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_08.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>LTCC Substrates</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="register.html" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_09.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Others</span>
                                            </p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- SERVICES END -->

                            <!-- LATEST NEWS START
                            ============================================= -->
                            <div class="features-wrap row">
                                <div class="fxb-news ">

                                    <h2 class="headline-h4">
                                        NEWS
                                    </h2>
                                    <div>
                                        <div class="l-news">

                                            <ul>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_blank">
                                                        <span class="_day">2021.07.13</span>
                                                        <span class="_category _category-03">Products</span>
                                                        <span class="_title">High heat resistant resistors HSG73P series
                                                            has
                                                            now added Sn plating
                                                            type</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_blank">
                                                        <span class="_day">2021.03.03</span>
                                                        <span class="_category _category-03">Products</span>
                                                        <span class="_title">New Flat Chip Resistors HSG73P series -
                                                            High
                                                            Temperature Resistance up to
                                                            200 deg. C </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_self">
                                                        <span class="_day">2020.10.12</span>
                                                        <span class="_category _category-01">Notices Events</span>
                                                        <span class="_title">
                                                            <div style="text-align: left;">
                                                                <span style="color: #366092;">
                                                                    KOA to Exhibit at [CEATEC 2020 ONLINE] from 20-23
                                                                    Oct
                                                                    2020.<strong><br>
                                                                    </strong>
                                                                </span>
                                                            </div>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="news000.html" target="_self">
                                                        <span class="_day">2020.07.30</span>
                                                        <span class="_category _category-01">Notices Events</span>
                                                        <span class="_title">
                                                            <div style="text-align: left;">
                                                                <p><span
                                                                        style="font-family: tahoma; font-size: 14px; color: #c00000;">Relocation
                                                                        of Koa
                                                                        Denko (S) Pte. Ltd. Thailand Representative
                                                                        Office
                                                                        &amp; Contact Number</span>
                                                                </p>
                                                            </div>
                                                            <div id="gtx-trans"
                                                                style="position: absolute; left: -118px; top: -25.0119px;">
                                                                <div class="gtx-trans-icon">&nbsp;</div>
                                                            </div>
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_blank">
                                                        <span class="_day">2020.07.07</span>
                                                        <span class="_category _category-03">Products</span>
                                                        <span class="_title">New Voltage Divider RK92D series(SIP Type)
                                                            for
                                                            High Voltage Circuit up to
                                                            4kV</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_blank">
                                                        <span class="_day">2020.06.11</span>
                                                        <span class="_category _category-03">Products</span>
                                                        <span class="_title">Small Type Platinum Thin Film Thermal
                                                            Sensor
                                                            SDT101 series offers 1kΩ
                                                        </span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_blank">
                                                        <span class="_day">2020.05.25</span>
                                                        <span class="_category _category-03">Products</span>
                                                        <span class="_title">Current Sense Power Shunt Resistors HS
                                                            Series
                                                            enables 50W(1000A) by
                                                            50μΩ</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="card-news" href="javascript:void(0)" target="_self">
                                                        <span class="_day">2020.04.28</span>
                                                        <span class="_category _category-01">Notices Events</span>
                                                        <span class="_title">
                                                            <div style="text-align: left;"><span
                                                                    style="color: #c00000;"><span
                                                                        style="font-family: tahoma;">Staff Work from
                                                                        Home:
                                                                        COVID-19 (CORONAVIRUS DISEASE
                                                                        2019) Impact</span><strong><span
                                                                            style="font-family: tahoma;"></span><br>
                                                                    </strong></span></div>
                                                            <div id="gtx-trans"
                                                                style="position: absolute; left: -118px; top: -25.0119px;">
                                                                <div class="gtx-trans-icon">&nbsp;</div>
                                                            </div>
                                                        </span>
                                                    </a>
                                                </li>

                                            </ul>

                                            <a href="{{ url('news') }}" class="btn-ghost">
                                                <p>
                                                    - View History -
                                                </p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- LATEST NEWS END -->
                        </div>
                        <!-- //left block -->
                        <!--  right block -->
                        <div class="col-sm-12 col-md-3">
                            <div class="l-search">
                                <h2><strong>SEARCH</strong></h2>
                                <div class="l-searchBox">
                                    <a class="btn" href="javascript:void(0)" target="_blank">
                                        <p><strong>Parametric Search</strong></p>
                                    </a>
                                    <a class="btn" href="javascript:void(0)" target="_blank">
                                        <p><strong>Application Search</strong></p>
                                    </a>
                                </div>
                                <div class="l-searchBox">
                                    <p><strong>Search by Product Series</strong></p>
                                    <div id="searchBoxName">
                                        <input id="SearchWord" name="SearchWord" type="text"
                                            placeholder="Input text here">
                                        <input id="searchBtnName" type="image"
                                            src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
                                    </div>
                                    <!-- <div id="searchBoxName">
                                    <input id="SearchWord" name="SearchWord" type="text" onkeydown="checkEnter(event,&#39;nms&#39;);"
                                        placeholder="Input text here">
                                    <input id="searchBtnName" type="image" src="./img/icon_search.svg" alt="Search"
                                        onclick="moveToSearch(&#39;nms&#39;); return false;">
                                </div> -->
                                </div>
                                <div class="l-searchBox">
                                    <p><strong>Cross Reference (Resistors)</strong></p>
                                    <div id="searchBoxCross">
                                        <input id="select" name="select" type="text" placeholder="Input text here">
                                        <input id="searchBtnCross" type="image"
                                            src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
                                    </div>
                                    <!-- <div id="searchBoxCross">
                                    <input id="select" name="select" type="text" onkeydown="checkEnter(event,&#39;crs&#39;);"
                                        placeholder="Input text here">
                                    <input id="searchBtnCross" type="image" src="./img/icon_search.svg" alt="Search"
                                        onclick="moveToSearch(&#39;crs&#39;); return false;">
                                </div> -->
                                    <p class="text-search">KOA Denko is not responsible for any inaccuracies, errors or
                                        omissions contained in
                                        or relating to this information. Please contact us for further information.</p>
                                </div>
                            </div>

                            <div class="l-bnr" style="display: none;">
                                <div>
                                    <p class="img-bnr">
                                        <img alt="" src="{{ asset('frontend/./img/ID6_Corporation-trust.png') }}" width="250" height="150">
                                    </p>
                                    <p class="img-bnr">
                                        <img alt="" src="{{ asset('frontend/./img/ID6_Corporation-koaNoPhilosophy.png') }}" width="250"
                                            height="150">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!--  //right block -->
                    </div>
                </div>
            </section>
            <!-- CONTENT END -->
            <!-- FOOTER START
            ============================================= -->
            @include('layouts.frontend.inc_footer');
            <!-- FOOTER END -->
        </section>

    </div>
    <!-- MAIN WRAPPER END -->
    <!-- Footer Scripts
        ============================================= -->
    @include('layouts.frontend.inc_script');
    <!-- Footer Scripts END -->
</body>

</html>
