<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Contact</title>
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

        <!-- headline TITLE
            ============================================= -->

        <section class="l-headlineTitle clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="wrap-h1">
                            <h1>
                                Contact Us
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/./img/Banner_LOGO_NEW.jpg') }}" alt=""
                                    style="max-height: 110px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- headline TITLE END -->

        <!-- PAGE TITLE START
                    ============================================= -->
        <section class="wrapper clearfix">
            <div class="container">
                <div class="row">
                    <div class="breadcrumbs">
                        <p>
                            <span><a href="#">Home</a></span>
                            <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                            <span>Contact</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- PAGE TITLE END -->

        <!-- CONTENT START
                    ============================================= -->
        <section id="content" class="clearfix">
            <!-- SINGLE SERVICES START
                        ============================================= -->
            <div class="contact-th wrapper">
                <div class="container">
                    <div class="row">
                        <div class="contact-wrap row">
                            <div class="contact-details col-md-3">
                                <div class="address wow fadeInLeft" data-wow-delay="0.3s">
                                    <h4 class="title">Our Office Address</h4>
                                    <p>KOA DENKO (S) PTE. LTD. THAILAND</p>
                                    <p>24TH FLOOR, ROOM 24101</p>
                                    <p>PHAYATHAI ROAD, PATHUMWAN,BANGKOK,10330</p>
                                </div>
                            </div>

                            <div class="contact-form col-md-9">
                                <form class="row">
                                    <div class="l-main1col">
                                        <div class="l-contact">
                                            <div class="scfForm">
                                                <p>Please ensure all required fields are completed.
                                                    Fields marked with an * are required</p>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>Type of Inquiry <span>*</span></label>
                                                        <select class="scfDropList">
                                                            <option selected="selected" value=""></option>
                                                            <option value="Customer Service">Customer Service</option>
                                                            <option value="Samples">Samples</option>
                                                            <option value="Support">Support</option>
                                                            <option value="Product Engineering＆Quality">Product
                                                                Engineering＆Quality</option>
                                                            <option value="Sales">Sales</option>
                                                            <option value="Field Application Engineer">Field Application
                                                                Engineer</option>
                                                            <option value="Catalogue">Catalogue</option>
                                                        </select>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>Primary Application <span>*</span></label>
                                                        <select class="scfDropList">
                                                            <option selected="selected" value=""></option>
                                                            <option value="Smart home">Smart home</option>
                                                            <option value="Healthcare">Healthcare</option>
                                                            <option value="Automotive">Automotive</option>
                                                            <option value="Smartphone">Smartphone</option>
                                                            <option value="Wearable">Wearable</option>
                                                            <option value="Base Station">Base Station</option>
                                                            <option value="Network">Network</option>
                                                            <option value="Data Center">Data Center</option>
                                                            <option value="Lighting">Lighting</option>
                                                            <option value="White Goods">White Goods</option>
                                                            <option value="Industrial">Industrial</option>
                                                            <option value="Security＆Safety">Security＆Safety</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>Primary Product Category <span>*</span></label>
                                                        <select class="scfDropList">
                                                            <option selected="selected" value=""></option>
                                                            <option value="Resistors">Resistors</option>
                                                            <option value="Inductors">Inductors</option>
                                                            <option value="Sensors">Sensors</option>
                                                            <option value="Fuses">Fuses</option>
                                                            <option value="Varistors">Varistors</option>
                                                            <option value="LTCC">LTCC</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-12 scfMultipleLineGeneralPanel">
                                                        <label>Primary Product Category <span>*</span></label>
                                                        <textarea rows="5" cols="20" class="scfMultipleLineTextBox">
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>First Name<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox">
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>Last Name<span>*</span></label>
                                                        <input type="text" maxlength="100"
                                                            class="sscfSingleLineTextBox">
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>(Company) Email Address<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfEmailTextBox">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>Company Name<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox">
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>Country / Area<span>*</span></label>
                                                        <input type="text" maxlength="100"
                                                            class="sscfSingleLineTextBox">
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>Postal / Zip Code<span>*</span></label>
                                                        <select class="scfDropList">
                                                            <option selected="selected" value=""></option>
                                                            <option value="	Samphanthawong">Samphanthawong</option>
                                                            <option value="Udon Thani">Udon Thani</option>
                                                            <option value="Nong Khai">Nong Khai</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-12 scfSubmitButtonBorder">
                                                        <a href="#" class="button-normal scfSubmitButton">Send
                                                            Message</a>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p> How we handling your personal information </p>
                                                        <p>Please read this <strong>Privacy Policy.</strong></p>
                                                        <p>*Read and confirm our privacy policy and agreed to the
                                                            contents.</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7921.211728581471!2d107.636263!3d-6.937619!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e86e2acbf353%3A0x68e3efb164a5f3de!2sJl.+Aries%2C+Batununggal%2C+Kota+Bandung%2C+Jawa+Barat+40275%2C+Indonesia!5e0!3m2!1sen!2sid!4v1449826718370"
                    allowfullscreen></iframe>
            </div>
            <!-- SINGLE SERVICES END -->
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
