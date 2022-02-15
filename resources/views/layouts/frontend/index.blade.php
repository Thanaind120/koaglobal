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
                            <img class="hidden-xs" src="{{ asset('backend/assets/images/banner/'.$val->image_banner) }}"
                                alt="">
                            <img class="visible-xs"
                                src="{{ asset('backend/assets/images/banner/'.$val->image_banner2) }}" alt="">
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
                        <div class="col-sm-12"  style="padding: 0;">
                            <a id="frame_0_main_1_pickup_0_HomePickupLink" class="l-pickup" href="https://www.koaglobal.com/app?sc_lang=en"
                                target="_blank">
                                <h2>
                                    @lang('lang.pickup') <br>@lang('lang.applications')<br>
                                </h2>
                                <p class="_image">
                                    <img src="{{ asset('frontend/./img/Applications01.png' ) }}" alt="" style="
                                max-height: 100px;">
                                </p>
                                <p class="_outline">
                                    @lang('lang.productforindustrialapplication')
                                    <span class="_text">

                                    </span>
                                    <span class="_link">
                                        @lang('lang.clickhere') -
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
                                        <h4>@lang('lang.productcategory')</h4>
                                    </div>
                                </div>
                                <div class="fxb-block fxb-margin">
                                    <?php foreach ($product_category as $key=>$val){ ?>
                                    <div class="col-3 col-xs-12">
                                        <a class="block" href="{{ url(Session::get('lang').'/register')}}" target="_blank">
                                            <p class="image-wrap">
                                                <img src="{{ ($val->product_image != '')? asset('backend/assets/images/product_category/'.$val->product_image) : asset('backend/assets/images/product_category/nopic.jpg') }}" alt="">
                                            </p>
                                            <p>
                                                <span>{{ $val["product_category_".Session::get('lang')]}}</span>
                                            </p>

                                        </a>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- SERVICES END -->

                            <!-- LATEST NEWS START
                            ============================================= -->
                            <div class="features-wrap row">
                                <div class="fxb-news ">

                                    <h2 class="headline-h4">
                                        @lang('lang.news')
                                    </h2>
                                    <div>
                                        <div class="l-news">
                                            <ul>
                                                <?php foreach ($news as $key=>$val){ ?>
                                                <li>
                                                    <?php if ($val->id_news_releases == 1) {?>
                                                    <a class="card-news"
                                                        href="{{ ($val->url != '')? $val->url : url(Session::get('lang').'/news000/'.$val->id_news) }}"
                                                        target="_blank">
                                                        <span class="_day">{{ $val->save_date }}</span>
                                                        <span
                                                            class="_category _category-03">{{ $val["news_release_topics_".Session::get('lang')]}}</span>
                                                        <span class="_title">{{ $val["news_name_".Session::get('lang')]}}</span>
                                                        <?php } ?>
                                                        <?php if ($val->id_news_releases == 2) {?>
                                                        <?php if($val->image != ''){?>
                                                        <a class="card-news" href="{{ url(Session::get('lang').'/news000/'.$val->id_news) }}"
                                                            target="_self">
                                                            <span class="_day">{{ $val->save_date }}</span>
                                                            <span
                                                                class="_category _category-01">{{ $val["news_release_topics_".Session::get('lang')]}}</span>
                                                            <span class="_title">
                                                                <div style="text-align: left;"><span
                                                                        style="color: #c00000;"><span
                                                                            style="font-family: tahoma;">{{ $val["news_name_".Session::get('lang')]}}</span><strong><span
                                                                                style="font-family: tahoma;"></span><br>
                                                                        </strong></span></div>
                                                                <div id="gtx-trans"
                                                                    style="position: absolute; left: -118px; top: -25.0119px;">
                                                                    <div class="gtx-trans-icon">&nbsp;</div>
                                                                </div>
                                                            </span>
                                                        </a>
                                                        <?php }else{ ?>
                                                        <a class="card-news" href="{{ url(Session::get('lang').'/news000/'.$val->id_news) }}"
                                                            target="_self">
                                                            <span class="_day">{{ $val->save_date }}</span>
                                                            <span
                                                                class="_category _category-01">{{ $val["news_release_topics_".Session::get('lang')]}}</span>
                                                            <span class="_title">{{ $val["news_name_".Session::get('lang')]}}</span>
                                                        </a>
                                                        <?php } ?>
                                                        <?php } ?>
                                                        <?php if ($val->id_news_releases == 3) {?>
                                                        <a class="card-news" href="{{ url(Session::get('lang').'/news000/'.$val->id_news) }}"
                                                            target="_self">
                                                            <span class="_day">{{ $val->save_date }}</span>
                                                            <span
                                                                class="_category _category-04">{{ $val["news_release_topics_".Session::get('lang')]}}</span>
                                                            <span class="_title">{{ $val["news_name_".Session::get('lang')]}}</span>
                                                        </a>
                                                        <?php } ?>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                {{-- <li>
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
                                                </li> --}}
                                            </ul>

                                            <a href="{{ Session::get('lang')}}/news" class="btn-ghost">
                                                <p>
                                                    - @lang('lang.viewhistory') -
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
                                <h2><strong>@lang('lang.search')</strong></h2>
                                <div class="l-searchBox">
                                    <a class="btn" href="https://www.koaglobal.com/Parametric/public/ParametricSearch.aspx?sc_lang=en" target="_blank">
                                        <p><strong>@lang('lang.parametricsearch')</strong></p>
                                    </a>
                                    <a class="btn" href="https://www.koaglobal.com/app?sc_lang=en" target="_blank">
                                        <p><strong>@lang('lang.appsearch')</strong></p>
                                    </a>
                                </div>
                                <div class="l-searchBox">
                                    <p><strong>@lang('lang.searchby')</strong></p>
                                    <div id="searchBoxName">
                                        <input type="text" id="SearchWord" name="SearchWord"
                                            placeholder="Input text here">
                                        <input type="image" id="searchBtnName" name="searchBtnName"
                                            src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
                                    </div>
                                   
                                </div>
                                <div class="l-searchBox">
                                    <p><strong>@lang('lang.cross')</strong></p>
                                    <div id="searchBoxCross">
                                        <input type="text" id="select" name="select" placeholder="Input text here">
                                        <input type="image" id="searchBtnCross" name="searchBtnCross"
                                            src="{{ asset('frontend/./img/icon_search.svg')}}" alt="Search">
                                    </div>
                                    
                                    <p class="text-search">@lang('lang.koadetail')</p>
                                </div>
                            </div>

                            <div class="l-bnr" style="display: none;">
                                <div>
                                    <p class="img-bnr">
                                        <img alt="" src="{{ asset('frontend/./img/ID6_Corporation-trust.png') }}"
                                            width="250" height="150">
                                    </p>
                                    <p class="img-bnr">
                                        <img alt=""
                                            src="{{ asset('frontend/./img/ID6_Corporation-koaNoPhilosophy.png') }}"
                                            width="250" height="150">
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
        $('#searchBtnName').click(function () {
            $keyword = $('#SearchWord').val();
            $url =
                "https://www.koaglobal.com/Parametric/public/ParametricSearch.aspx?sc_lang=en&amp;SearchWord=" +
                $keyword;
            window.open($url, "_blank");


        });

    </script>
    <script type="text/javascript">
        $('#searchBtnCross').click(function () {
            $keyword = $('#select').val();
            $url = "https://www.koaglobal.com/CrossReference/crs.aspx?sc_lang=en&amp;condition=" + $keyword;
            window.open($url, "_blank");
        });

    </script>
    <!-- Footer Scripts END -->
</body>


</html>
