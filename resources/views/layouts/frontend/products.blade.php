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
                                @lang('lang.news')
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
                                    @lang('lang.home')
                                </span>
                            </a>
                        </li>

                        <li>
                            @lang('lang.news')
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
                                    @lang('lang.news')
                                </h2>
                                <div>
                                    <div class="l-news">

                                        <ul>
                                            <?php foreach ($news as $key=>$val){ ?>
                                            <?php if ($val->id_news_releases == 1) {?>
                                            <li>

                                                <a class="card-news"
                                                    href="{{ ($val->url != '')? $val->url : url('/news000/'.$val->id_news) }}"
                                                    target="_blank">
                                                    <span class="_day">{{ $val->save_date }}</span>
                                                    <span
                                                        class="_category _category-03">{{ $val["news_release_topics_".Session::get('lang')]}}</span>
                                                    <span
                                                        class="_title">{{ $val["news_name_".Session::get('lang')]}}</span>
                                                </a>

                                            </li>
                                            <?php } ?>
                                            <?php } ?>
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
                                    @lang('lang.news_release')
                                </h2>
                            </a>
                            <ul class="l-localNav wrap-acc">

                                <?php foreach ($news_release as $key=>$val){ ?>
                                <li><a href="{{ url(Session::get('lang').'/products')}}"
                                        class="">{{ $val["news_release_name_".Session::get('lang')]}}</a></li>
                                <?php } ?>

                            </ul>

                            <a class="btn-acc link-disable " href="javascript:void(0)">
                                <h2 class="headline-h4">
                                    @lang('lang.archive')
                                </h2>
                            </a>
                            <ul class="l-localNav wrap-acc">

                                <?php foreach ($archive as $key=>$val){ ?>

                                <li><a href="javascript:void(0)">{{ $val->year }}</a></li>

                                <?php } ?>

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
