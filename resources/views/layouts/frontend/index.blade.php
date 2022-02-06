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
                        <?php foreach ($banner as $key=>$val){ ?>
                        <li class="slide-item clearfix">
                            <img class="hidden-xs" src="{{ asset('backend/assets/images/banner/'.$val->image_banner) }}" alt="">
                            <img class="visible-xs" src="{{ asset('backend/assets/images/banner/'.$val->image_banner2) }}" alt="">
                        </li>
                        <?php } ?>
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
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_01.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Resistors(SMD)</span>
                                            </p>

                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products02v.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Low Resistance/Current Sense Shunt Resistors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products03v.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Resistors(Leaded)</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_04.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Thermistors Thermal Sensors</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
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
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_06.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>Fuses</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
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
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ asset('frontend/./img/top_products_08.jpg')}}" alt="">
                                            </p>
                                            <p>
                                                <span>LTCC Substrates</span>
                                            </p>
                                        </a>
                                    </div>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url('/register')}}" target="_blank">
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
                                                <?php foreach ($News as $key=>$val){ ?>
                                                <li>
                                                    <a class="card-news" href="{{ ($val->url != '')? $val->url : url('/news000') }}" target="_blank">
                                                        <span class="_day">{{ $val->save_date }}</span>
                                                        <span class="_category _category-03">{{ $val->news_release_topics_en }}</span>
                                                        <span class="_title">{{ $val->news_name_en }}</span>
                                                    </a>
                                                </li>
                                                <?php } ?>
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
                                        <input type="text" id="SearchWord" name="SearchWord" placeholder="Input text here">
                                        <input type="image" id="searchBtnName" name="searchBtnName" src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
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
                                        <input type="text" id="select" name="select" placeholder="Input text here">
                                        <input type="image" id="searchBtnCross" name="searchBtnCross" src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
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
    <script type="text/javascript">    
        $('#searchBtnName').click(function(){
            $keyword =  $('#SearchWord').val();
            $url = "https://www.koaglobal.com/Parametric/public/ParametricSearch.aspx?sc_lang=en&amp;SearchWord=" + $keyword;
            window.open($url, "_blank");
            
           
        });
    </script>
    <script type="text/javascript">
        $('#searchBtnCross').click(function(){
                $keyword = $('#select').val();
                $url = "https://www.koaglobal.com/CrossReference/crs.aspx?sc_lang=en&amp;condition=" + $keyword;
                window.open($url, "_blank");
        });
    </script>
    <!-- Footer Scripts END -->
</body>


</html>
