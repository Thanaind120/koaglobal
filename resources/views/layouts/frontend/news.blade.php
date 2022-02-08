<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>News</title>
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
                                NEWS
                            </h1>
                            <div class="bg-h1">
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
        <section id="content" class="clearfix">

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
                            NEWS
                        </li>
                    </ul>

                </div>
                <!-- Breadcrumb END
                ============================================= -->

                <div class="row">

                    <!--  left block -->
                    <div class="col-sm-12 col-md-9">
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
                                            <?php foreach ($news as $key=>$val){ ?>
                                            <li>
                                                <?php if ($val->id_news_releases == 1) {?>
                                                <a class="card-news"
                                                    href="{{ ($val->url != '')? $val->url : url('/news000/'.$val->id_news) }}"
                                                    target="_blank">
                                                    <span class="_day">{{ $val->save_date }}</span>
                                                    <span
                                                        class="_category _category-03">{{ $val->news_release_topics_en }}</span>
                                                    <span class="_title">{{ $val->news_name_en }}</span>
                                                </a>
                                                <?php } ?>
                                                <?php if ($val->id_news_releases == 2){ ?>
                                                <?php if($val->image != ''){?>
                                                <a class="card-news" href="{{ url('/news000/'.$val->id_news) }}"
                                                    target="_self">
                                                    <span class="_day">{{ $val->save_date }}</span>
                                                    <span
                                                        class="_category _category-01">{{ $val->news_release_topics_en }}</span>
                                                    <span class="_title">
                                                        <div style="text-align: left;"><span
                                                                style="color: #c00000;"><span
                                                                    style="font-family: tahoma;">{{ $val->news_name_en }}</span><strong><span
                                                                        style="font-family: tahoma;"></span><br>
                                                                </strong></span></div>
                                                        <div id="gtx-trans"
                                                            style="position: absolute; left: -118px; top: -25.0119px;">
                                                            <div class="gtx-trans-icon">&nbsp;</div>
                                                        </div>
                                                    </span>
                                                </a>
                                                <?php }else{ ?>
                                                <a class="card-news" href="{{ url('/news000/'.$val->id_news) }}"
                                                    target="_self">
                                                    <span class="_day">{{ $val->save_date }}</span>
                                                    <span
                                                        class="_category _category-01">{{ $val->news_release_topics_en }}</span>
                                                    <span class="_title">{{ $val->news_name_en }}</span>
                                                </a>
                                                <?php } ?>
                                                <?php } ?>
                                                <?php if ($val->id_news_releases == 3){ ?>
                                                <a class="card-news" href="{{ url('/news000/'.$val->id_news) }}"
                                                    target="_self">
                                                    <span class="_day">{{ $val->save_date }}</span>
                                                    <span
                                                        class="_category _category-04">{{ $val->news_release_topics_en }}</span>
                                                    <span class="_title">{{ $val->news_name_en }}</span>
                                                </a>
                                                <?php } ?>
                                            </li>
                                            <?php } ?>
                                            {{-- <li>
                                                <a class="card-news" href="javascript:void(0)" target="_self">
                                                    <span class="_day">2020.04.28</span>
                                                    <span class="_category _category-01">Notices Events</span>
                                                    <span class="_title">
                                                        <div style="text-align: left;"><span
                                                                style="color: #c00000;"><span
                                                                    style="font-family: tahoma;">Staff Work from Home:
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
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- LATEST NEWS END -->
                    </div>
                    <!-- //left block -->
                    <!--  right block -->
                    <div class="col-sm-12 col-md-3">
                        <aside class="l-sideSecond l-sideNews">
                            <a class="btn-acc link-disable " href="javascript:void(0)">
                                <h2 class="headline-h4">
                                    News Release
                                </h2>
                            </a>
                            <ul class="l-localNav wrap-acc">

                                <?php foreach ($news_release as $key=>$val){ ?>

                                <li><a href="javascript:void(0)" class="">{{ $val->news_release_name_en }}</a></li>

                                <?php } ?>

                                {{-- <li><a href="javascript:void(0)" class="">Event・Information</a></li> --}}

                                {{-- <li><a href="javascript:void(0)" class="">IR News</a></li> --}}

                            </ul>

                            <a class="btn-acc link-disable " href="javascript:void(0)">
                                <h2 class="headline-h4">
                                    Archive
                                </h2>
                            </a>
                            <ul class="l-localNav wrap-acc">

                                <?php foreach ($archive as $key=>$val){ ?>

                                <li><a href="javascript:void(0)">{{ $val->year }}</a></li>

                                <?php } ?>

                                {{-- <li><a href="javascript:void(0)" class="is-active">2020</a></li>

                                <li><a href="javascript:void(0)" class="">2019</a></li>

                                <li><a href="javascript:void(0)" class="">2018</a></li>

                                <li><a href="javascript:void(0)" class="">2017</a></li>

                                <li><a href="javascript:void(0)" class="">2016</a></li>

                                <li><a href="javascript:void(0)" class="">2015</a></li> --}}

                            </ul>


                        </aside>
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

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    @include('layouts.frontend.inc_script');
    <!-- Footer Scripts END -->
</body>

</html>
