<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    @include('layouts.frontend.inc_header');
    <title>Register form</title>
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
                                Register form
                            </h1>
                            <div class="bg-h1">
                                <img src="{{ asset('frontend/./img/Banner_LOGO_NEW.jpg') }}" alt="" style="max-height: 110px;">
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
                            <span>Register form</span>
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
                            <div class="contact-form col-md-12">
                                <form class="row" method="POST" enctype="multipart/form-data"
                                action="{{ route('register.insert') }}">
                                @csrf
                                    <div class="l-main1col">
                                        <div class="l-contact">
                                            <div class="scfForm">
                                                <p>Please ensure all required fields are completed.
                                                    Fields marked with an * are required</p>
                                                <div class="row">
                                                    <div class="name col-md-3">
                                                        <label>Name <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox" name="name" required>
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>Email <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfEmailTextBox" name="email" required>
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>Contact number <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfEmailTextBox" name="tel" required>
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>Company Name <span>*</span></label>
                                                        <input type="text" maxlength="100"
                                                            class="sscfSingleLineTextBox" name="company_name" required>
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>Product Category <span>*</span></label>
                                                        <select class="scfDropList" name="product_category" required>
                                                            <option name="product_category" selected="selected" value=""></option>
                                                            <option name="product_category" value="Resistors(SMD)">Resistors(SMD)</option>
                                                            <option name="product_category" value="Low Resistance/Current Sense Shunt Resistors">Low Resistance/Current Sense Shunt Resistors</option>
                                                            <option name="product_category" value="Resistors(Leaded)">Resistors(Leaded)</option>
                                                            <option name="product_category" value="Thermistors Thermal Sensors">Thermistors Thermal Sensors</option>
                                                            <option name="product_category" value="Inductors">Inductors</option>
                                                            <option name="product_category" value="Fuses">Fuses</option>
                                                            <option name="product_category" value="Varistors">Varistors</option>
                                                            <option name="product_category" value="LTCC Substrates">LTCC Substrates</option>
                                                            <option name="product_category" value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                {{-- <div class="row">
                                                    <div class="name col-md-3">
                                                        <label>You job title<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox" name="title_name">
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>You department<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox" name="department_name">
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>You organization<span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox" name="organization_name">
                                                    </div>
                                                    <div class="name col-md-3">
                                                        <label>Your location<span>*</span></label>
                                                        <input type="text" maxlength="100"
                                                            class="sscfSingleLineTextBox" name="location_name">
                                                    </div>
                                                </div> --}}
                                                <div class="row">
                                                    <div class="name col-md-12 scfMultipleLineGeneralPanel">
                                                        <label>MESSAGE <span>*</span></label>
                                                        <textarea rows="5" cols="20" class="scfMultipleLineTextBox" name="product_message" required>
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 scfSubmitButtonBorder">
                                                        <button type="submit" class="btn btn-24 scfSubmitButton">Send
                                                            Message</button>
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
