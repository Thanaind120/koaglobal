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
                                @lang('lang.contactus')
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
                            <span><a href="#">@lang('lang.home')</a></span>
                            <span class="arrow"><i class="icon icon-arrow-right"></i></span>
                            <span>@lang('lang.contact')</span>
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
                                    <h4 class="title">@lang('lang.detail_6')</h4>
                                    <p>@lang('lang.detail_7')</p>
                                    <p>@lang('lang.detail_8')</p>
                                    <p>@lang('lang.detail_9')</p>
                                </div>
                            </div>

                            <div class="contact-form col-md-9">
                                <form class="row" method="POST" enctype="multipart/form-data"
                                    action="{{ url(Session::get('lang').'/contactus') }}">
                                    @csrf
                                    <div class="l-main1col">
                                        <div class="l-contact">
                                            <div class="scfForm">
                                                <p>@lang('lang.detail_1')</p>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.type_inquiry')<span>*</span></label>
                                                        <select class="scfDropList" id="type_inquiry"
                                                            name="type_inquiry" required>
                                                            <option name="type_inquiry" selected="selected" value="">
                                                            </option>
                                                            <option name="type_inquiry" value="Customer Service">
                                                                @lang('lang.customer')</option>
                                                            <option name="type_inquiry" value="Samples">@lang('lang.samples')</option>
                                                            <option name="type_inquiry" value="Support">@lang('lang.support')</option>
                                                            <option name="type_inquiry"
                                                                value="Product Engineering＆Quality">@lang('lang.proQty')</option>
                                                            <option name="type_inquiry" value="Sales">@lang('lang.sales')</option>
                                                            <option name="type_inquiry"
                                                                value="Field Application Engineer">@lang('lang.field')</option>
                                                            <option name="type_inquiry" value="Catalogue">@lang('lang.catalogue')
                                                            </option>
                                                        </select>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.pri_application') <span>*</span></label>
                                                        <select class="scfDropList" id="application" name="application"
                                                            required>
                                                            <option name="application" selected="selected" value="">
                                                            </option>
                                                            <option name="application" value="Smart home">@lang('lang.smart')
                                                            </option>
                                                            <option name="application" value="Healthcare">@lang('lang.healthcare')
                                                            </option>
                                                            <option name="application" value="Automotive">@lang('lang.automotive')
                                                            </option>
                                                            <option name="application" value="Smartphone">@lang('lang.smartphone')
                                                            </option>
                                                            <option name="application" value="Wearable">@lang('lang.wearable')
                                                            </option>
                                                            <option name="application" value="Base Station">@lang('lang.base')
                                                            </option>
                                                            <option name="application" value="Network">@lang('lang.network')</option>
                                                            <option name="application" value="Data Center">@lang('lang.data')
                                                            </option>
                                                            <option name="application" value="Lighting">@lang('lang.lighting')
                                                            </option>
                                                            <option name="application" value="White Goods">@lang('lang.white')
                                                            </option>
                                                            <option name="application" value="Industrial">@lang('lang.industrial')
                                                            </option>
                                                            <option name="application" value="Security＆Safety">
                                                                @lang('lang.security')</option>
                                                            <option name="application" value="Others">@lang('lang.oothers')</option>
                                                        </select>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.pri_pro') <span>*</span></label>
                                                        <select class="scfDropList" id="product_category"
                                                            name="product_category" required>
                                                            <option name="product_category" selected="selected"
                                                                value=""></option>
                                                            <option name="product_category" value="Resistors">@lang('lang.resistors')
                                                            </option>
                                                            <option name="product_category" value="Inductors">@lang('lang.inductors')
                                                            </option>
                                                            <option name="product_category" value="Sensors">@lang('lang.sensors')
                                                            </option>
                                                            <option name="product_category" value="Fuses">@lang('lang.fuses')</option>
                                                            <option name="product_category" value="Varistors">@lang('lang.varistors')
                                                            </option>
                                                            <option name="product_category" value="LTCC">@lang('lang.lTCC')</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-12 scfMultipleLineGeneralPanel">
                                                        <label>@lang('lang.detail_10') <span>*</span></label>
                                                        <textarea rows="5" cols="20" class="scfMultipleLineTextBox"
                                                            id="product_message" name="product_message" required>
                                                        </textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.first') <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox"
                                                            id="firstname" name="firstname" required>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.last') <span>*</span></label>
                                                        <input type="text" maxlength="100" class="sscfSingleLineTextBox"
                                                            id="lastname" name="lastname" required>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.eaddress') <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfEmailTextBox"
                                                            id="email" name="email" onblur="check_email(this)" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.com') <span>*</span></label>
                                                        <input type="text" maxlength="100" class="scfSingleLineTextBox"
                                                            id="company_name" name="company_name" required>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.Country') <span>*</span></label>
                                                        <input type="text" maxlength="100" class="sscfSingleLineTextBox"
                                                            id="area" name="area" required>
                                                    </div>
                                                    <div class="name col-md-4">
                                                        <label>@lang('lang.Postal') <span>*</span></label>
                                                        {{-- <select class="scfDropList" id="zip_code" name="zip_code"
                                                            required>
                                                            <option name="zip_code" selected="selected" value="">
                                                            </option>
                                                            <option name="zip_code" value="	Samphanthawong">
                                                                @lang('lang.Samphanthawong')</option>
                                                            <option name="zip_code" value="Udon Thani">@lang('lang.Udon')
                                                            </option>
                                                            <option name="zip_code" value="Nong Khai">@lang('lang.Nong')</option>
                                                        </select> --}}
                                                        <input type="text" maxlength="100" class="sscfSingleLineTextBox"
                                                            id="zip_code" name="zip_code" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <p>@lang('lang.detail_2')</p>
                                                        <p>@lang('lang.detail_3') <strong><a class="text-sizeLarger"
                                                                    href="https://www.koaspore.com.sg/privacy"
                                                                    target="_blank">@lang('lang.detail_4')</a></strong></p>
                                                        <p>@lang('lang.detail_5')</p>

                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{-- <div class="col-md-12" align="center"> --}}
                                                    <input type="submit" name="submit"
                                                        value="@lang('lang.submit')" id="submit"
                                                        class="scfSubmitButton" disabled>
                                                    {{-- <button type="submit" id="submit" class="btn btn-24 scfSubmitButton"
                                                        style="font-size: 24px;" disabled>I agree to the above terms and
                                                        submit
                                                    </button> --}}
                                                    {{-- </div> --}}
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
    <script type="text/javascript">
        function check_email(elm) {
            var regex_email = /^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*\@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.([a-zA-Z]){2,4})$/
            if (!elm.value.match(regex_email)) {
                alert('คุณใส่ E-mail ผิดครับ กรุณาใส่ E-mail ใหม่ให้ถูกต้อง');
            } else {

            }
        }
        $('#type_inquiry').click(function () {
            if ($('#application').val() != '' && $('#product_category').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#company_name')
                .val() != '' && $('#area').val() != '' && $('#zip_code').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#application').click(function () {
            if ($('#company_name').val() != '' && $('#product_category').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#product_category').click(function () {
            if ($('#company_name').val() != '' && $('#application').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#product_message').click(function () {
            if ($('#company_name').val() != '' && $('#application').val() != '' && $('#product_category')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#firstname').click(function () {
            if ($('#company_name').val() != '' && $('#application').val() != '' && $('#product_category')
                .val() != '' && $('#product_message')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#lastname').click(function () {
            if ($('#company_name').val() != '' && $('#application').val() != '' && $('#product_category')
                .val() != '' && $('#product_message')
                .val() != '' && $('#firstname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#email').click(function () {
            if ($('#company_name').val() != '' && $('#application').val() != '' && $('#product_category')
                .val() != '' && $('#product_message')
                .val() != '' && $('#firstname').val() != '' && $('#lastname').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#company_name').click(function () {
            if ($('#application').val() != '' && $('#product_category').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#area').val() !=
                '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#area').click(function () {
            if ($('#application').val() != '' && $('#product_category').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#company_name')
                .val() != '' && $('#zip_code').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });
        $('#zip_code').click(function () {
            if ($('#application').val() != '' && $('#product_category').val() != '' && $('#product_message')
                .val() != '' && $('#firstname')
                .val() != '' && $('#lastname').val() != '' && $('#email').val() != '' && $('#company_name')
                .val() != '' && $('#area').val() != '' && $('#type_inquiry').val() != '') {
                document.getElementById('submit').disabled = false;
                $('#submit').prop('disabled', false);
                var inputs = document.getElementsByClassName('submit');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].disabled = false;
                }
            }
        });

        $('#submit').click(function () {
            move();
        });
        var i = 0;

        function move() {
            let timerInterval
            Swal.fire({
                title: '',
                html: 'Please wait a moment. <b></b>',
                timer: 4000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    timerInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(timerInterval)
                }
            }).then((result) => {
                /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        }

    </script>
</body>

</html>
