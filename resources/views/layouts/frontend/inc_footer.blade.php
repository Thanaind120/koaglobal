<footer id="footer" class="wrapper clearfix">

    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3">
                <div class="footer-content">
                    <h4 class="title">@lang('lang.contactus')</h4>
                    <div class="contact-section">
                        <p>@lang('lang.address_1')</p>
                        <p>@lang('lang.address_2')</p>
                        <p>@lang('lang.address_3')</p>
                        <p>@lang('lang.address_4')</p>
                        <p>@lang('lang.address_5')</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="l-footerNav">
                    <ul>
                        <li><a href="https://www.koaglobal.com/product?sc_lang=en" target="_blank">{{ trans('lang.products') }}</a></li>
                        <li><a href="https://www.koaglobal.com/app?sc_lang=en">{{ trans('lang.application') }}</a></li>
                        <li><a href="https://www.koaspore.com.sg/corporation">{{ trans('lang.corporation') }}</a></li>
                        <li><a href="https://www.koaspore.com.sg/salesnetwork">{{ trans('lang.salesnetwork') }}</a> </li>
                        <li><a href="{{ url(Session::get('lang').'/contactus') }}">{{ trans('lang.contactus') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-3">
                <div class="l-cta"><a href="{{ url(Session::get('lang').'/contactus') }}">
                        <h2>{{ trans('lang.contactform') }}</h2>
                        <p class="_btn">{{ trans('lang.contactform') }}</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- COPYRIGHT START
                ============================================= -->
    <div class="text-center">
        <div class="l-footerPolicy">
            <div class="container">
                <div class="l-inner-footerPolicy">
                <ul class="l-pp"><a href="https://www.koaspore.com.sg/-/media/Files/KOA_MultiDomain/singapore/corporation/salesagreement/GeneralSalesAgreement.pdf">{{ trans('lang.privacypolicy') }}</a></ul>
                <div class="l-copy"><span>{{ trans('lang.copyright') }}</span>
                </div>
                <p class="l-pagetop">
                    <a href="{{ url('/')}}">
                        <img src="{{ asset('frontend/img/btn_pagetop.png' ) }}" alt="{{ trans('lang.page_top') }}"></a>
                </p>
                </div>
            </div>            
        </div>
    </div>
    <!-- COPYRIGHT END -->

</footer>

<!---cookie---->
<div>
    <div class="scw-cookie">
        <div class="scw-cookie-panel-toggle scw-cookie-panel-toggle-left" onclick="scwCookiePanelToggle()">
            <span class="scwc-icon scwc-icon-cookie"></span>
        </div>                
        <div class="scw-cookie-content">
            <div class="scw-cookie-message">
                We use cookies to personalise content and to analyse our web traffic.
            </div>
            
            <div class="scw-cookie-decision">
                <div class="scw-cookie-btn" onclick="scwCookieHide()">OK</div>
                <div class="scw-cookie-settings scw-cookie-tooltip-trigger" onclick="scwCookieDetails()"
                    data-label="">
                    <span class="scwc-icon scwc-icon-settings"></span>
                </div>
                <div class="scw-cookie-policy scw-cookie-tooltip-trigger" data-label="">
                    <a href="https://www.koaspore.com.sg/-/media/Files/KOA_MultiDomain/singapore/corporation/salesagreement/GeneralSalesAgreement.pdf">
                        <span class="scwc-icon scwc-icon-policy"></span>
                    </a>
                </div>
            </div>
            <div class="scw-cookie-details">
                <div class="scw-cookie-details-title">Manage your cookies</div>
                <div class="scw-cookie-toggle">
                    <div class="scw-cookie-name">Essential site cookies</div>
                    <label class="scw-cookie-switch checked disabled">
                        <input type="checkbox" name="essential" checked="checked" disabled="disabled">
                        <div></div>
                    </label>
                </div>
                <div class="scw-cookie-toggle">
                    <div class="scw-cookie-name" onclick="scwCookieToggle(this)">Google Analytics</div>
                    <label class="scw-cookie-switch checked">
                        <input type="checkbox" name="Google_Analytics" checked="checked">
                        <div></div>
                    </label>
                </div>
                
    
            </div>
        </div>
    </div>
</div>
 <!--model-->
 <div id="RegionSelect">
    <div id="is-region" class="close" style="display: block;">
        <div class="is-content" style="top: 120px; left: 951px; display: block;">
            <div class="l-regionPC">
                <p class="btn-close"><a class="close"><img src="{{ asset('frontend/img/icon_close.svg') }}" alt="close"></a></p>
                <p class="ttl-modal">{{ trans('lang.selectyourregion') }}</p>
                <div class="_images">
                    <div id="mapster_wrap_0" style="display: block; position: relative; padding: 0px; width: 959px; height: 332px;">
                        <img class="mapster_el" src="{{ asset('frontend/img/img_country_on.png') }}" style="display: none;">
                        <img class="mapster_el" src="{{ asset('frontend/img/countory/img_country_on.png') }}" style="display: none;">
                        <canvas width="959" height="332" class="mapster_el" style="position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px;"></canvas>
                        <canvas width="959" height="332" class="mapster_el" style="position: absolute; left: 0px; top: 0px; padding: 0px; border: 0px; opacity: 1;"></canvas>
                        <img id="mapWorld" src="{{ asset('frontend/img/img_country.png') }}" heifht="332" alt="Select your region" usemap="#mapWorld" width="959" style="border: 0px; position: absolute; left: 0px; top: 0px; padding: 0px; opacity: 0;">
                    </div>
                    <map name="mapWorld">
                        <area shape="poly"
                            coords="-1,95,0,172,198,180,259,204,283,213,289,208,294,202,296,195,310,195,324,187,362,117,402,93,431,69,423,17,400,3,367,3,271,2,115,27,24,57"
                            href="http://www.koaspeer.com/" data-region="NorthAmerica" alt="North America"
                            region="northAmerica">

                        <area shape="poly"
                            coords="50,253,153,225,281,216,287,209,294,201,301,197,345,199,374,222,382,252,354,304,327,331,286,332,65,295"
                            href="http://www.koaspeer.com/" data-region="SouthAmerica" alt="South America"
                            region="southAmerica">

                        <area shape="poly"
                            coords="406,332,543,331,543,250,537,207,529,196,519,199,512,201,506,194,499,182,494,171,491,162,489,159,476,158,469,157,465,160,454,154,452,147,442,147,434,147,427,151,418,152,411,156,406,166,399,169,393,185,409,227"
                            href="http://www.koaeurope.de/" data-region="Africa" alt="Africa" region="africa">

                        <area shape="poly"
                            coords="630,257,652,237,672,218,703,200,736,199,753,211,768,258,776,289,864,288,867,327,642,328"
                            href="http://www.koaeurope.de/" data-region="Oceania" alt="Oceania" region="oceania">

                        <area shape="poly"
                            coords="442,0,585,0,581,25,572,37,545,51,531,66,532,72,531,78,526,85,525,93,525,102,526,108,529,110,532,114,532,116,529,118,526,119,520,119,520,124,521,130,524,135,520,142,519,147,516,148,511,145,506,142,501,138,494,136,488,137,483,139,481,141,479,145,478,152,466,153,457,151,452,144,441,145,433,147,428,151,422,152,416,152,410,155,405,164,398,170,390,170,387,149,393,112,422,93,437,75,436,51"
                            href="http://www.koaeurope.de/" data-region="Europe" alt="Europe" region="europe">

                        <area id="regionAsia" shape="poly"
                            coords="959,284,786,284,781,218,765,189,712,183,674,209,661,225,653,233,637,240,608,236,556,218,543,196,530,194,518,199,511,199,504,187,493,168,491,159,485,154,479,153,478,147,481,141,488,137,500,139,515,147,522,146,524,142,524,135,521,129,520,123,521,118,528,118,533,115,533,112,528,109,526,105,524,95,526,87,531,76,532,72,531,67,542,61,570,47,599,16,611,-1,959,0,958,283"
                            href="#" alt="Asia" region="asia">
                    </map>
                </div>
                <div class="bg-tertiary">
                    <ul class="l-country">
                        <li><a href="http://www.koaeurope.de/" data-region="Central_Asia">Central Asia</a></li>
                        <li><a href="#" data-region="Japan_Korea">Eastern Asia (Japan/Korea)</a></li>
                        <li><a href=" http://www.koaglobal.com.cn/" data-region="Shanghai" style="display: none">Eastern
                                Asia (Shanghai)</a></li>
                        <li><a href="https://www.hk.koaglobal.com/" data-region="Hongkong">Eastern Asia (Hong Kong)</a>
                        </li>
                        <li><a href="http://www.koadah.com/" data-region="Taipei">Eastern Asia (Taipei)</a></li>
                        <li><a href="https://www.koaglobal.com.tw/" data-region="Kaohsiung">Eastern Asia (Kaohsiung)</a>
                        </li>
                        <li><a href="http://www.koaeurope.de/" data-region="Russia">Russia</a></li>
                        <li><a href="http://www.koaspore.com.sg" data-region="South_Eastern_Asia">South-Eastern Asia</a>
                        </li>
                        <li><a href="http://www.koaspore.com.sg" data-region="Southern_Asia">Southern Asia</a></li>
                        <li><a href="http://www.koaeurope.de/" data-region="Western_Asia">Western Asia</a></li>
                    </ul>
                </div>
            </div>
            <div class="l-regionSP">
                <p class="btn-close"><a class="close"><img src="../img/icon_close.svg') }}" alt="close"></a></p>
                <p class="ttl-modal">Select Your Region</p>
                <h2><a href="http://www.koaeurope.de/" data-region="Africa">Africa</a></h2>
                <h2 class="headline-link">Asia</h2>
                <ul class="l-country">
                    <li><a href="http://www.koaeurope.de/" data-region="Central_Asia">Central Asia</a></li>
                    <li><a href="http://www.koaglobal.com/" data-region="Japan_Korea">Eastern Asia (Japan/Korea)</a>
                    </li>
                    <li><a href="http://www.koaglobal.com.cn/" data-region="Shanghai" style="display: none">Eastern Asia
                            (Shanghai)</a></li>
                    <li><a href="http://www.koaglobal.com/" data-region="Hongkong">Eastern Asia (Hongkong)</a></li>
                    <li><a href="http://www.koadah.com/" data-region="Taipei">Eastern Asia (Taipei)</a></li>
                    <li><a href="https://www.koaglobal.com.tw/" data-region="Kaohsiung">Eastern Asia (Kaohsiung)</a>
                    </li>
                    <li><a href="http://www.koaeurope.de/" data-region="Russia">Russia</a></li>
                    <li><a href="http://www.koaspore.com.sg" data-region="South_Eastern_Asia">South-Eastern Asia</a>
                    </li>
                    <li><a href="http://www.koaspore.com.sg" data-region="Southern_Asia">Southern Asia</a></li>
                    <li><a href="http://www.koaeurope.de/" data-region="Western_Asia">Western Asia</a></li>
                </ul>
                <h2><a href="#" data-region="Europe">Europe</a></h2>
                <h2><a href="#" data-region="NorthAmerica">North America</a></h2>
                <h2><a href="#" data-region="Oceania">Oceania</a></h2>
                <h2><a href="#" data-region="SouthAmerica">South America</a></h2>
            </div>
        </div>
        <div id="GeneralOverlayModal">
            <div class="l-regionPC">
                <a href="#">
                    <input id="once_overlay_key" type="hidden">
                </a>
            </div>
        </div>
    </div>
</div>
