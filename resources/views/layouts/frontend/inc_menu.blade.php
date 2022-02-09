<div>
    <nav class="l-globalNav">
        <ul class="l-menu5">

            <li>
                <a href="https://www.koaglobal.com/product?sc_lang=en" target="_blank">{{ trans('lang.products') }}</a>

            </li>

            <li>
                <a href="https://www.koaglobal.com/app?sc_lang=en" target="_blank">{{ trans('lang.application') }}</a>

            </li>

            <li>
                <a href="https://www.koaspore.com.sg/corporation" target="_self">{{ trans('lang.corporation') }}</a>

                <ul class="l-globalNav2nd">
                    <li>
                        <a href="https://www.koaspore.com.sg/corporation" target="_self">{{ trans('lang.corporation') }}</a>
                        <ul class="l-globalNav3rd">

                            <li>
                                <a href="https://www.koaspore.com.sg/corporation/aboutus" target="_self">{{ trans('lang.aboutus') }}</a>

                            </li>

                            <li>
                                <a href="https://www.koaspore.com.sg/corporation/mission" target="_self">{{ trans('lang.ourmission') }}</a>

                            </li>

                            <li>
                                <a href="https://www.koaspore.com.sg/corporation/policy" target="_self">{{ trans('lang.ourpolicy') }}</a>

                                <ul class="l-globalNav4th">

                                    <li>
                                        <a href="/-/media/Files/KOA_MultiDomain/singapore/corporation/salesagreement/GeneralSalesAgreement.pdf"
                                            target="_blank">{{ trans('lang.generalsalesagreement') }}</a>
                                    </li>

                                </ul>

                            </li>

                            <li>
                                <a href="https://www.koaspore.com.sg/corporation/commitment" target="_self">{{ trans('lang.ourcommitment') }}</a>

                            </li>

                        </ul>

                    </li>
                </ul>

            </li>

            <li>
                <a href="https://www.koaspore.com.sg/salesnetwork" target="_self">{{ trans('lang.salesnetwork') }}</a>

            </li>

            <li>
                <a href="{{ url(Session::get('lang').'/contactus') }}" target="_self">{{ trans('lang.contactus') }}</a>

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
                        <li><a href="{{ url('/') }}">{{ trans('lang.home') }}</a></li>
                        <li><a href="https://www.koaglobal.com/product?sc_lang=en">{{ trans('lang.products') }}</a></li>
                        <li><a href="https://www.koaglobal.com/app?sc_lang=en">{{ trans('lang.application') }}</a></li>
                        <li class="has-sub"><a href="https://www.koaspore.com.sg/corporation">{{ trans('lang.corporation') }}</a>
                            <ul>
                                <li><a href="https://www.koaspore.com.sg/corporation/aboutus">{{ trans('lang.aboutus') }}</a></li>
                                <li><a href="https://www.koaspore.com.sg/corporation/mission">{{ trans('lang.ourmission') }}</a></li>
                                <li><a href="https://www.koaspore.com.sg/corporation/policy">{{ trans('lang.ourpolicy') }}</a></li>
                                <li><a
                                        href="/-/media/Files/KOA_MultiDomain/singapore/corporation/salesagreement/GeneralSalesAgreement.pdf">{{ trans('lang.generalsalesagreement') }}</a></li>
                                <li><a href="https://www.koaspore.com.sg/corporation/commitment">{{ trans('lang.ourcommitment') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="https://www.koaspore.com.sg/salesnetwork">{{ trans('lang.salesnetwork') }}</a></li>
                        <li><a href="{{ url(Session::get('lang').'/contactus') }}">{{ trans('lang.contactus') }}</a></li>
                    </ul>
                </nav>
                <!-- Menu Mobile End -->
            </div>
        </li>
        <li class="l-region">
            <a class="is-openRegion" href="#">{{ trans('lang.selectyourregion') }}</a>
        </li>
        <li class="l-language">
            <select id="HeaderLanguage" onchange="window.location.href=this.value;" name="Language">
                <option value="">{{ trans('lang.language') }}</option>
                <option value="{{url('en').session()->get('prefix')}}">{{ trans('lang.english') }}</option>
                <option value="{{url('th').session()->get('prefix')}}">{{ trans('lang.thailand') }}</option>
            </select>
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
