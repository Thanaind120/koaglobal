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
                        <img src="{{ asset('frontend/./img/btn_pagetop.png' ) }}" alt="{{ trans('lang.page_top') }}"></a>
                </p>
                </div>
            </div>            
        </div>
    </div>
    <!-- COPYRIGHT END -->

</footer>
