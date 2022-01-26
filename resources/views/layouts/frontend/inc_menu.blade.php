<div>
    <nav class="l-globalNav">
        <ul class="l-menu5">

            <li>
                {{-- <a href="https://www.koaglobal.com/product?sc_lang=en" target="_blank">Products</a> --}}
                <a href="{{ url('/product') }}" target="_blank">Products</a>

            </li>

            <li>
                {{-- <a href="https://www.koaglobal.com/app?sc_lang=en" target="_blank">Applications</a> --}}
                <a href="{{ url('/applications') }}" target="_blank">Applications</a>

            </li>

            <li>
                <a href="{{ url('/corporation') }}" target="_self">Corporation</a>

                <ul class="l-globalNav2nd">
                    <li>
                        <a href="{{ url('/corporation') }}" target="_self">Corporation</a>
                        <ul class="l-globalNav3rd">

                            <li>
                                <a href="{{ url('/corporation/aboutus') }}" target="_self">About Us</a>

                            </li>

                            <li>
                                <a href="{{ url('/corporation/mission') }}" target="_self">Our Mission</a>

                            </li>

                            <li>
                                <a href="{{ url('/corporation/policy') }}" target="_self">Our Policy</a>

                                <ul class="l-globalNav4th">

                                    <li>
                                        <a href="/-/media/Files/KOA_MultiDomain/singapore/corporation/salesagreement/GeneralSalesAgreement.pdf"
                                            target="_blank">General Sales Agreement</a>
                                    </li>

                                </ul>

                            </li>

                            <li>
                                <a href="{{ url('/corporation/commitment') }}" target="_self">Our Commitment</a>

                            </li>

                        </ul>

                    </li>
                </ul>

            </li>

            <li>
                <a href="{{ url('/salesnetwork') }}" target="_self">Sales Network</a>

            </li>

            <li>
                <a href="{{ url('/contactus') }}" target="_self">Contact Us</a>

            </li>

        </ul>
    </nav>
    <ul class="l-extraNav hidden-custom l-extraNavB">
        <li id="nav-toggle">
            <div class="padding-0">
                <div class="slide-buttons">
                    <button id="slide-buttons" class="slide-button icon icon-navicon"></button>
                </div>
                <!-- Menu Mobile
                    ============================================= -->
                <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                    <button class="c-menu__close icon icon-close"></button>
                    <ul class="slide-menu-items">
                        <li><a href="javascript:void(0)">Home</a></li>
                        <li><a href="javascript:void(0)">Products</a></li>
                        <li><a href="javascript:void(0)">Applications</a></li>
                        <li class="has-sub"><a href="corporate.html">Corporation</a>
                            <ul>
                                <li><a href="javascript:void(0)">About Us</a></li>
                                <li><a href="javascript:void(0)">Our Mission</a></li>
                                <li><a href="javascript:void(0)">Our Policy</a></li>
                                <li><a href="javascript:void(0)">General Sales Agreement</a></li>
                                <li><a href="javascript:void(0)">Our Commitment</a></li>
                            </ul>
                        </li>
                        <li><a href="salesnetwork.html">Sales Network</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
                <!-- Menu Mobile End -->
            </div>
        </li>
        <li class="l-region">
            <a class="is-openRegion" onclick="return false;" href="#">Select Your Region</a>
        </li>
        <li class="l-siteSearch">
            <script>
                (function () {
                    var cx = '015393406554709036033:4gvbc1nhadm';
                    var gcse = document.createElement('script');
                    gcse.type = 'text/javascript';
                    gcse.async = true;
                    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(gcse, s);
                })();

            </script>
            <gcse:search></gcse:search>
        </li>
    </ul>
</div>