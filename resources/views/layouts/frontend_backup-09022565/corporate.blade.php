<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Corporate</title>
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
                                Corporate
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/img/img-header/h1_products.png')}}" alt="" width="980" height="110">
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
                            Corporate
                        </li>
                    </ul>

                </div>
                <!-- Breadcrumb END
                ============================================= -->

                <div class="row">

                    <!--  left block -->
                    <div class="col-sm-12 col-md-9">
                        <!-- CORPORATE START
                            ============================================= -->
                        <div class="features-wrap row">
                            <div class="fxb-news ">
                                <!-- content NEWS START
                                ============================================= -->
                                <div>
                                    <div class="l-mainSecond">





                                        <div class="fxb-basic">

                                            <div class="col-1">
                                                <h2>
                                                    Company Profile
                                                </h2>




                                            </div>

                                        </div>





                                        <div class="fxb-basic  fxb-margin">

                                            <div class="col-3 col-card" style="height: 258px;">
                                                <a class="fxb-cardA" href="#profile" target="_self"
                                                    style="height: 254px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_a_01.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        Profile
                                                    </p>
                                                    <p class="_outline">
                                                        You can see our basic information.
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-card" style="height: 258px;">
                                                <a class="fxb-cardA" href="#corporate" target="_self"
                                                    style="height: 254px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_a_02.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        organization
                                                    </p>
                                                    <p class="_outline">
                                                        You can see our organization chart.
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-card" style="height: 258px;">
                                                <a class="fxb-cardA" href="#history/history1" target="_self"
                                                    style="height: 254px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_a_03.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        history1
                                                    </p>
                                                    <p class="_outline">
                                                        You can see the corporate history of up to the present from our
                                                        establishment.
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-card" style="height: 258px;">
                                                <a class="fxb-cardA" href="#offices" target="_self"
                                                    style="height: 254px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_a_04.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        offices
                                                    </p>
                                                    <p class="_outline">
                                                        We'll introduce our base and affiliated company.
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-card" style="height: 258px;">
                                                <a class="fxb-cardA" href="#corporate" target="_self"
                                                    style="height: 254px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_a_06.jpg')}}" alt=""
                                                            style="height: 116px;">
                                                    </p>
                                                    <p class="_title link">
                                                        officer
                                                    </p>
                                                    <p class="_outline">
                                                        We'll introduce our officer.
                                                    </p>

                                                </a>
                                            </div>

                                        </div>







                                        <div class="fxb-basic">

                                            <div class="col-1">
                                                <h2>
                                                    Business Policy
                                                </h2>




                                            </div>

                                        </div>





                                        <div class="fxb-basic  fxb-margin">

                                            <div class="col-3 col-card" style="height: 237px;">
                                                <a class="fxb-cardA" href="#principle/message" target="_self"
                                                    style="height: 233px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_b_01.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        message
                                                    </p>
                                                    <p class="_outline">
                                                        You can see a message from KOA.
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-card" style="height: 237px;">
                                                <a class="fxb-cardA" href="#principle/mind" target="_self"
                                                    style="height: 233px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_b_02.jpg')}}" alt=""
                                                            style="height: 114px;">
                                                    </p>
                                                    <p class="_title link">
                                                        KOA MIND
                                                    </p>
                                                    <p class="_outline">
                                                        We introduce KOA's mind (code of conduct, action guidelines).
                                                    </p>

                                                </a>
                                            </div>

                                        </div>







                                        <div class="fxb-basic">

                                            <div class="col-1">
                                                <h2>
                                                    KOA’s Uniqueness Report
                                                </h2>




                                            </div>

                                        </div>





                                        <div class="fxb-basic  fxb-margin">

                                            <div class="col-3 col-card" style="height: 217px;">
                                                <a class="fxb-cardA" href="#csr/rashisa" target="_self"
                                                    style="height: 213px;">
                                                    <p class="_image">
                                                        <img src="{{ asset('frontend/img/corporate/corporate_top_c_01.jpg')}}" alt=""
                                                            style="height: 150px;">
                                                    </p>
                                                    <p class="_title link">
                                                        KOA's Uniqueness Report
                                                    </p>


                                                </a>
                                            </div>

                                        </div>








                                    </div>
                                </div>
                                <!-- content NEWS END
                                ============================================= -->
                            </div>
                        </div>
                        <!-- CORPORATE END -->
                    </div>
                    <!-- //left block -->
                    <!--  right block -->
                    <div class="col-sm-12 col-md-3">
                        <aside class="l-sideSecond ">


                            <ul class="l-localNav">
                                <li class="ttl-localNav">
                                    Corporate
                                </li>

                                <li>
                                    <a href="#profile" target="_self">Corporate Profile</a>


                                </li>

                                <li class="l-side-acc">
                                    <a href="#history/history1" target="_self">Corporate History</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#history/history1" target="_self">Corporate
                                                    History(1940-1959)</a>
                                            </li>


                                            <li>
                                                <a href="#history/history2" target="_self">Corporate
                                                    History(1960-1979)</a>
                                            </li>


                                            <li>
                                                <a href="#history/history3" target="_self">Corporate
                                                    History(1980-1999)</a>
                                            </li>


                                            <li>
                                                <a href="#history/history4" target="_self">Corporate
                                                    History(2000-)</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="#principle/message" target="_self">Corporate Philosophy</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#principle/message" target="_self">KOA’s
                                                    Philosophy</a>
                                            </li>


                                            <li>
                                                <a href="#principle/mind" target="_self">KOA MIND</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li>
                                    <a href="#offices" target="_self">Offices</a>


                                </li>

                                <li>
                                    <a href="#iso"
                                        target="_self">ISO9001&amp;IATF16949Registration，ISO14001，ISO/IEC17025Registration</a>


                                </li>

                                <li class="l-side-acc">
                                    <a href="#csr/basic/compliance" target="_self">CSR</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#csr/basic/compliance" target="_self">Corporate
                                                    Policy</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#csr/basic/compliance" target="_self">Compliance Basic
                                                            Policy</a>
                                                    </li>

                                                    <li>
                                                        <a href="#csr/basic/quality" target="_self">Quality
                                                            Policy</a>
                                                    </li>

                                                    <li>
                                                        <a href="#csr/basic/procurement" target="_self">Procurement
                                                            Policy - To build trustful relations with business
                                                            partners -</a>
                                                    </li>

                                                    <li>
                                                        <a href="#csr/basic/safety" target="_self">Health and
                                                            Safety Policy</a>
                                                    </li>

                                                    <li>
                                                        <a href="#csr/basic/humanrights" target="_self">Human
                                                            Rights and Labor Policy</a>
                                                    </li>

                                                    <li>
                                                        <a href="#csr/basic/environment" target="_self">Environmental
                                                            Policy</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#csr/UKModernSlaveryAct" target="_self">Statement on
                                                    UK Modern Slavery Act</a>
                                            </li>


                                            <li>
                                                <a href="#csr/rashisa" target="_self">KOA's Uniqueness
                                                    Report</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                            </ul>



                        </aside>
                    </div>
                    <!--  //right block -->
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
