<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Application Category</title>
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
                                Application
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/img/img-header/h1_products.png')}}" alt="" width="980"
                                    height="110">
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
                            Application
                        </li>
                    </ul>

                </div>
                <!-- Breadcrumb END
                ============================================= -->

                <div class="row">

                    <!--  left block -->
                    <div class="col-sm-12 col-md-9">
                        <!-- APP START
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
                                                    Application Category
                                                </h2>




                                            </div>

                                        </div>



                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 224px;">


                                                <h3 id="anc_automotive">Automotive</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/pixta_61384463_S.jpg')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="#powerunit_ICE">Power
                                                                    Unit (ICE)</a></li>
                                                            <li><a href="#powerunit_xEV">Power
                                                                    Unit (xEV)</a></li>
                                                            <li><a href="#electric">Electric</a>
                                                            </li>
                                                            <li><a href="#driving_braking">Drive
                                                                    / brake</a></li>
                                                            <li><a href="#self-driving_ADAS">Autonomous
                                                                    Driving /
                                                                    ADAS</a></li>
                                                            <li><a href="#bodyelectronics_security">Body
                                                                    Electronics
                                                                    / Security</a></li>
                                                            <li><a href="#infotaiment">Infotainment</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-2" style="height: 224px;">


                                                <h3 id="anc_industrial">Industrial Equipment</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap05.jpg')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a
                                                                    href="https://www.koaglobal.com/sitecore/service/notfound.aspx?item=web%3a%7b2A3B717E-0BC4-4BBD-A0E3-E255696CD108%7d%40en">
                                                                    Manufacturing Equipment
                                                                </a></li>
                                                            <li><a
                                                                    href="https://www.koaglobal.com/app/industrial/plc">PLC</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>




                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 162px;">


                                                <h3 id="anc_environment">Ecology and Energy Saving</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap04.jpg')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="https://www.koaglobal.com/app/environment/eco">Smartmeter/PowerConditioners/Energy-Saving
                                                                    Home Appliances/LED Light/Battery Chager/Air
                                                                    Conditioning</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-2" style="height: 162px;">


                                                <h3 id="anc_telecom">Telecommunication</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap02.jpg')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="https://www.koaglobal.com/app/telecom/phone">Smartphone/Tablet
                                                                    PC</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/telecom/notepc">Notebook
                                                                    PC</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>




                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 266px;">


                                                <h3 id="anc_ha">AV/Home Appliances</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap03.jpg')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="https://www.koaglobal.com/app/ha/lcd">Flat
                                                                    Panel TV(LCD)</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/stb">Set Top
                                                                    Box(STB)</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/lcdpj">LCD
                                                                    Projector</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/dsc">Digital
                                                                    Still Camera</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/audio">Digital
                                                                    Audio Player</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/dvd">Blue-Ray
                                                                    Disc/DVD Recorder</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/aircon">Air
                                                                    Conditioner</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ha/wm">Washing
                                                                    Machine</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-2" style="height: 266px;">


                                                <h3 id="anc_ps">Power Supply Units</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap07.png')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="https://www.koaglobal.com/app/ps/lpaa">Low
                                                                    Power AC Adaptors</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ps/mpaa">Middle
                                                                    Power AC Adaptors</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ps/pol">POL Step
                                                                    Down/Up DC-DC Converter for Small
                                                                    Current Use</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ps/cmcu">Step
                                                                    Down DC-DC Converter for Middle Current
                                                                    Use</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ps/chcu">Step
                                                                    Down DC-DC Converter for High Current
                                                                    Use</a></li>
                                                            <li><a href="https://www.koaglobal.com/app/ps/sps">AC-DC
                                                                    Switching Power Supply</a></li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>




                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 162px;">


                                                <h3 id="anc_med">Medical equipment</h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt=""
                                                            src="{{ asset('frontend/img/app/top_ap_medical.png')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a href="https://www.koaglobal.com/app/med/xrayct">X Ray
                                                                    CT</a></li>
                                                            <li><a
                                                                    href="https://www.koaglobal.com/app/med/us">Ultrasonography</a>
                                                            </li>
                                                            <li><a href="https://www.koaglobal.com/app/med/aed">AED(Automatic
                                                                    External Defibrillator)</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="col-2" style="height: 162px;">


                                                <h3 id="anc_aerospace">Space/Satellite </h3>
                                                <div class="l-imageLinkText">
                                                    <p class="_image"><img alt="Satellite"
                                                            src="{{ asset('frontend/img/app/top_ap_aerospace.png')}}">
                                                    </p>
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li><a
                                                                    href="https://www.koaglobal.com/app/aerospace">Space/Satellite</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>





                                    </div>
                                </div>
                                <!-- content NEWS END
                                ============================================= -->
                            </div>
                        </div>
                        <!-- APP END -->
                    </div>
                    <!-- //left block -->
                    <!--  right block -->
                    <div class="col-sm-12 col-md-3">
                        <aside class="l-sideSecond ">


                            <ul class="l-localNav">
                                <li class="ttl-localNav">
                                    Application Category
                                </li>

                                <li class="l-side-acc">
                                    <a href="#powerunit_ICE" target="_self">Automotive</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#powerunit_ICE" target="_self">Power
                                                    Unit（ICE）</a>
                                            </li>


                                            <li>
                                                <a href="#powerunit_xEV" target="_self">Power
                                                    Unit（xEV）</a>
                                            </li>


                                            <li>
                                                <a href="#electric" target="_self">Electric</a>
                                            </li>


                                            <li>
                                                <a href="#driving_braking" target="_self">Drive /
                                                    brake</a>
                                            </li>


                                            <li>
                                                <a href="#self-driving_ADAS" target="_self">Autonomous
                                                    Driving / ADAS</a>
                                            </li>


                                            <li>
                                                <a href="#bodyelectronics_security" target="_self">Body
                                                    Electronics / Security</a>
                                            </li>


                                            <li>
                                                <a href="#infotaiment" target="_self">Infotainment</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/industrial/acservoamp"
                                        target="_self">Industrial Equipment</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/industrial/acservoamp"
                                                    target="_self">AC Servo
                                                    Amplifier</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/industrial/plc"
                                                    target="_self">PLC(Programmable Logic
                                                    Controller)</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/environment/eco" target="_self">Ecology and
                                        Energy Saving</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/environment/eco"
                                                    target="_self">Ecology and Energy
                                                    Saving</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/telecom/phone"
                                        target="_self">Telecommunication</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/telecom/phone"
                                                    target="_self">Smartphone/Tablet PCs</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/telecom/notepc"
                                                    target="_self">Notebook PCs</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/ha/lcd" target="_self">AV/Home Appliances</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/lcd" target="_self">Flat Panel
                                                    TV(LCD)</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/stb" target="_self">Set Top
                                                    Box(STB)</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/lcdpj" target="_self">LCD
                                                    Projector</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/dsc" target="_self">Digital
                                                    Still Camera</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/audio" target="_self">Digital
                                                    Audio Player</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/dvd"
                                                    target="_self">Blu-ray/DVD Recorder</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/aircon" target="_self">Air
                                                    Conditioner</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ha/wm" target="_self">Washing
                                                    Machine</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/ps/lpaa" target="_self">Power Supply
                                        Units</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/lpaa" target="_self">Low Power
                                                    AC Adaptors</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/mpaa" target="_self">Middle
                                                    Power AC Adaptors</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/pol" target="_self">POL Step
                                                    Down/Up DC-DC Converter
                                                    for Small Current Use</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/cmcu" target="_self">Step Down
                                                    DC-DC Converter for
                                                    Middle Current Use</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/chcu" target="_self">Step Down
                                                    DC-DC Converter for
                                                    High Current Use</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/ps/sps" target="_self">AC-DC
                                                    Switching Power Supply</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/med/xrayct" target="_self">Medical
                                        equipment</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/med/xrayct" target="_self">X Ray
                                                    CT</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/med/us"
                                                    target="_self">Ultrasonography</a>
                                            </li>


                                            <li>
                                                <a href="https://www.koaglobal.com/app/med/aed"
                                                    target="_self">AED(Automatic External
                                                    Defibrillator)</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="https://www.koaglobal.com/app/aerospace/aerospace"
                                        target="_self">Space/Satellite </a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="https://www.koaglobal.com/app/aerospace/aerospace"
                                                    target="_self">Space/Satelite</a>
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
