<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->
<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Products</title>
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
                                Products
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/img/img-header/h1_products.png') }}" alt="" width="980"
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
                            Products
                        </li>
                    </ul>
                </div>
                <!-- Breadcrumb END
                ============================================= -->

                <div class="row">

                    <!--  left block -->
                    <div class="col-sm-12 col-md-9">
                        <!-- PRODUCT START
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
                                                    Products
                                                </h2>

                                            </div>

                                        </div>

                                        <div class="fxb-block fxb-margin">


                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-1">
                                                <h2>
                                                    Product Category
                                                </h2>



                                            </div>

                                        </div>

                                        <div class="fxb-block fxb-margin">

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/smd_resistor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat01.jpg') }}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Resistors(SMD) </span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/lowresistance_powershunt" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat02v.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Low Resistance/Current Sense Shunt Resistors</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/lead_resistor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat03v.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Resistors(Leaded)</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/th_sensor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat04.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Thermistors,Thermal Sensors</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/inductor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat05.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Inductors</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/fuse" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat06.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Fuses</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/varistor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat07.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Varistors</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/ltcc" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat08.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>LTCC substrate, Hybrid IC</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/others" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat09.jpg')}}"
                                                            alt="">
                                                    </p>
                                                    <p>
                                                        <span>Check Terminal</span>
                                                    </p>

                                                </a>
                                            </div>

                                            <div class="col-3 col-xs-12">
                                                <a class="block" href="#/category/aerospace_resistor" target="">
                                                    <p class="image-wrap">
                                                        <img src="{{ asset('frontend/img/product/top_cat10.gif')}}"
                                                            alt="High Reliability Resistors for Space Use/KOA">
                                                    </p>
                                                    <p>
                                                        <span>High Reliability Resistors for Space Use</span>
                                                    </p>

                                                </a>
                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-1">
                                                <h2>
                                                    Purpose
                                                </h2>



                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 253px;">

                                                <h2><a href="#/purpose/g_purpose" style="color:#FFF;">General purpose
                                                        (Resistors)</a></h2>
                                                <div class="l-imageLinkText">
                                                    <!--p class="_image"><img alt="" height="80" width="80" src="/-/media/Images/KOA_Global/product/library/134_01.jpg?la=en&hash=9D9DF311A25494D6850D797E75AD2002" /></p-->
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Current limiting resistor</li>
                                                            <li>Pull-up / Pull-down Resistor</li>
                                                            <li>Damping resistor</li>
                                                            <li>Current-voltage conversion</li>
                                                            <li>Filtering circuit</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 253px;">

                                                <h2><a href="#/purpose/c_detection" style="color:#FFF;">Current
                                                        sensing       </a></h2>
                                                <div class="l-imageLinkText">
                                                    <!--p class="_image"><img alt="" height="80" width="80" src="/-/media/Images/KOA_Global/product/library/134_02.jpg?la=en&hash=48C5A52E8C5FC80C1D6C02931E71C7F3" /></p-->
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Principle of current sensing
                                                            </li>
                                                            <li>Purposes of current sense resistors
                                                            </li>
                                                            <li>Categories of current sense resistors
                                                            </li>
                                                            <li>Precautions for sense large current
                                                            </li>
                                                            <li>4-terminal type current sense resistors
                                                            </li>
                                                            <li>Overcurrent detection (e.g.)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>


                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 190px;">

                                                <h2><a href="#/purpose/h_acc_rel" style="color:#FFF;">High precision and
                                                        reliability (resistor)           
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Higher precision amplifier circuit
                                                            </li>
                                                            <li>Low current noise
                                                            </li>
                                                            <li>Long-term stability
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 190px;">

                                                <h2><a href="#/purpose/hpl" style="color:#FFF;">High power
                                                        load       </a>
                                                </h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Current limiting resistor (Inrush current limiting)
                                                            </li>
                                                            <li>Power load resistor
                                                            </li>
                                                            <li>Discharge resistors<br>(for safety standard)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 148px;">

                                                <h2><a href="#/purpose/e_resi" style="color:#FFF;">Environmental
                                                        resistance  
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>sulfuration prevention
                                                            </li>
                                                            <li>Electrolytic corrosion resistance of resistors
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 148px;">

                                                <h2><a href="#/purpose/hva" style="color:#FFF;">High voltage
                                                        application   
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <!--p class="_image"><img alt="" height="80" width="80" src="/-/media/Images/KOA_Global/product/library/134_06.jpg?la=en&hash=D056AA6D6F64D801FED6AE9E3DB8F91E" /></p-->
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>High voltage resistant resistors
                                                            </li>
                                                            <li>Voltage dividers for high voltage sensing
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 200px;">


                                                <h2><a href="#/purpose/ap-as" style="color:#FFF;">Pulse resistant /
                                                        Surge
                                                        resistant           
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Definition of pulse and surge
                                                            </li>
                                                            <li>What are high pulse-resistant and surge-resistant
                                                                resistors?
                                                            </li>
                                                            <li>Snubber circuits
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 200px;">

                                                <h2><a href="#/purpose/hcr" style="color:#FFF;">Heat cycle
                                                        resistant     
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>What are solder cracks caused by heat cycle?
                                                            </li>
                                                            <li>Advantages of wide terminal type
                                                            </li>
                                                            <li>Advantages of metal plate terminal
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 211px;">

                                                <h2><a href="#/purpose/temp_m" style="color:#FFF;">Temperature
                                                        measurement 
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>High precision temperature measurement
                                                            </li>
                                                            <li>Wide temperature range measurement
                                                            </li>
                                                            <li>Temperature measurement (example)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 211px;">

                                                <h2><a href="#/purpose/temp_c" style="color:#FFF;">Temperature
                                                        compensation 
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <!--p class="_image"><img alt="" height="80" width="80" src="/-/media/Images/KOA_Global/product/library/134_08.jpg?la=en&hash=026B413FBA624086B86AD60BD5C15EE6" /></p-->
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Temperature characteristics of main temperature sensors
                                                            </li>
                                                            <li>Example of temperature compensation circuit
                                                            </li>
                                                            <li>Temperature sensor for temperature compensation
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 253px;">

                                                <h2><a href="#/purpose/sub_int" style="color:#FFF;">Ceramic
                                                        substrate/package 
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Performance required for ceramic substrates and packages
                                                            </li>
                                                            <li>Applications of LTCC substrates
                                                            </li>
                                                            <li>Features of KLC series (LTCC substrate)
                                                            </li>
                                                            <li>Various packages
                                                            </li>
                                                            <li>Custom shape package (example)
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 253px;">

                                                <h2><a href="#/purpose/cus_module" style="color:#FFF;">Modularization
                                                        (Hybrid IC)  
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Features of custom function modules
                                                            </li>
                                                            <li>Structures
                                                            </li>
                                                            <li>Process flow (image)
                                                            </li>
                                                            <li>External shape, external terminal (example)
                                                            </li>
                                                            <li>Applications
                                                            </li>
                                                            <li>Development flow
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 200px;">

                                                <h2><a href="#/purpose/aec" style="color:#FFF;">Electronic components
                                                        for
                                                        aerospace applications   
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>Resistors for aerospace applications
                                                            </li>
                                                            <li>Features of resistors for aerospace applications
                                                            </li>
                                                            <li>LTCC substrate for aerospace
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 200px;">

                                                <h2><a href="#/purpose/circuit_jumper"
                                                        style="color:#FFF;">Jumper          
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>What is a jumper?</li>
                                                            <li>Jumpers have more than 0 Ω</li>
                                                            <li>Jumper usage example</li>
                                                            <li>High current jumper</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="fxb-basic">

                                            <div class="col-2" style="height: 179px;">

                                                <h2><a href="#/purpose/circuit_check" style="color:#FFF;">Circuit check
                                                        (check terminal)          
                                                    </a></h2>
                                                <div class="l-imageLinkText">
                                                    <div class="_content">
                                                        <ul class="list-link">
                                                            <li>What is a check terminal (checker-chip)?</li>
                                                            <li>Features of checker chips</li>
                                                        </ul>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-2" style="height: 179px;">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <!-- content NEWS END
                                ============================================= -->
                            </div>
                        </div>
                        <!-- PRODUCT END -->
                    </div>
                    <!-- //left block -->
                    <!--  right block -->
                    <div class="col-sm-12 col-md-3">
                        <aside class="l-sideSecond ">
                            <p class="_btn"><a href="javascript:void(0)"><img height="90" alt="inquiry_banner"
                                        width="208"
                                        src="{{ asset('frontend/img/product/859368A475C84C599C6EB8FFADE3C1AB.png') }}"></a>
                            </p>


                            <ul class="l-localNav">
                                <li class="ttl-localNav">
                                    Products
                                </li>

                                <li>
                                    <a href="#/pickup" target="_self">Pickup</a>


                                </li>

                                <li class="l-side-acc">
                                    <a href="#/category" target="_self">Product Category</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#/category/smd_resistor" target="_self">Resistors(SMD)
                                                </a>
                                            </li>


                                            <li>
                                                <a href="#/category/lowresistance_powershunt" target="_self">Low
                                                    Resistance/Current Sense Shunt Resistors</a>
                                            </li>


                                            <li>
                                                <a href="#/category/lead_resistor" target="_self">Resistors(Leaded)</a>
                                            </li>


                                            <li>
                                                <a href="#/category/th_sensor" target="_self">Thermistors,Thermal
                                                    Sensors</a>
                                            </li>


                                            <li>
                                                <a href="#/category/inductor" target="_self">Inductors</a>
                                            </li>


                                            <li>
                                                <a href="#/category/fuse" target="_self">Fuses</a>
                                            </li>


                                            <li>
                                                <a href="#/category/varistor" target="_self">Varistors</a>
                                            </li>


                                            <li>
                                                <a href="#/category/ltcc" target="_self">LTCC substrate, Hybrid
                                                    IC</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/category/ltcc/basic" target="_self">LTCC
                                                            Multilayer Substrate/LTCC Package</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#/category/others" target="_self">Check Terminal</a>
                                            </li>


                                            <li>
                                                <a href="#/category/aerospace_resistor" target="_self">High
                                                    Reliability Resistors for Space Use</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="#/purpose" target="_self">Purpose</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#/purpose/g_purpose" target="_self">General purpose
                                                    (Resistors)</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/c_detection" target="_self">Current
                                                    sensing</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/h_acc_rel" target="_self">High precision and
                                                    reliability (resistor)</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/hpl" target="_self">High power load</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/e_resi" target="_self">Environmental
                                                    resistance</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/hva" target="_self">High voltage
                                                    application</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/ap-as" target="_self">Pulse resistant / Surge
                                                    resistant</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/hcr" target="_self">Heat cycle resistant</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/temp_m" target="_self">Temperature
                                                    measurement</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/temp_c" target="_self">Temperature
                                                    compensation</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/sub_int" target="_self">Ceramic
                                                    substrate/package</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/cus_module" target="_self">Modularization
                                                    (Hybrid IC)</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/aec" target="_self">Electronic components for
                                                    aerospace applications</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/circuit_jumper" target="_self">Jumper</a>
                                            </li>


                                            <li>
                                                <a href="#/purpose/circuit_check" target="_self">Circuit check
                                                    (check terminal)</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="#/library" target="_self">Basic Knowledge of Electronic
                                        Components</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#/library/resistor/basic" target="_self">Basic
                                                    Knowledge of Resistor</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/library/resistor/basic" target="_self">Basics
                                                            of resistor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/category"
                                                            target="_self">Classification by structure</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/term" target="_self">Terms
                                                            and Definitions</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/marking" target="_self">Markings on
                                                            resistor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/characteristics"
                                                            target="_self">Points to note on resistor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/trend" target="_self">Technical
                                                            trends of resistor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/resistor/refresh2" target="_self">Trivia of
                                                            resistor</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#/library/sensor/basic" target="_self">Basic Knowledge
                                                    of Thermal Sensor</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/library/sensor/basic" target="_self">Basics
                                                            of thermal sensor </a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/sensor/ptr_2" target="_self">Description of
                                                            platinum thin-film thermal sensors</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/sensor/th2_1" target="_self">Linearization of
                                                            the thermistor</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#/library/fuse/fuse2" target="_self">Basics of current
                                                    limiting fuses</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/library/fuse/fuse2" target="_self">Basics of
                                                            current limiting fuses</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#/library/inductor/basic" target="_self">Basic
                                                    Knowledge of Inductor</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/library/inductor/basic" target="_self">Basics
                                                            of inductor</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/inductor/category" target="_self">Types and
                                                            characteristics of inductors</a>
                                                    </li>

                                                    <li>
                                                        <a href="#/library/inductor/use" target="_self">How to
                                                            use the inductor</a>
                                                    </li>

                                                </ul>
                                            </li>


                                            <li>
                                                <a href="#/library/ltcc/basic2" target="_self">Basics of LTCC
                                                    substrate</a>
                                            </li>

                                            <li>
                                                <ul class="l-localNav5th">

                                                    <li>
                                                        <a href="#/library/ltcc/basic2" target="_self">Basics of
                                                            LTCC substrate</a>
                                                    </li>

                                                </ul>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="#/common/moq" target="_self">Common Info.</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#/common/moq" target="_self">MOQ/Pad/Taping</a>
                                            </li>


                                            <li>
                                                <a href="#/common/eol" target="_self">End of life product
                                                    information</a>
                                            </li>


                                            <li>
                                                <a href="#/common/rohs" target="_self">Measures for
                                                    environmental hazardous materials</a>
                                            </li>


                                        </ul>
                                    </div>

                                </li>

                                <li class="l-side-acc">
                                    <a href="#/caution" target="_self">Precautions</a>
                                    <span class="btn-side-acc" href="#"></span>

                                    <div class="wrap-side-acc">
                                        <ul class="l-localNav4th">

                                            <li>
                                                <a href="#/caution/resistor" target="_self">Resistors</a>
                                            </li>


                                            <li>
                                                <a href="#/caution/inductor" target="_self">Inductors</a>
                                            </li>


                                            <li>
                                                <a href="#/caution/fuse" target="_self">Fuses</a>
                                            </li>


                                            <li>
                                                <a href="#/caution/varistor" target="_self">Varistors</a>
                                            </li>


                                            <li>
                                                <a href="#/caution/sensor" target="_self">Thermal Sensors</a>
                                            </li>

                                        </ul>
                                    </div>

                                </li>

                                <li>
                                    <a href="#/counterfeit" target="_self">Warning on counterfeit products</a>

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
