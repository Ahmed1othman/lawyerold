@extends('layouts.website.master')
@section('content')

    <div class="page">
        @include('website.sections.news_ticker')
        <div class="page-content">

            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
{{--                    <div class="header-photo" style="height: 180px;">--}}
{{--                        <img src="{{asset('storage/front/'.websiteInfo_hlp('lawyer_photo'))}}" alt="{{websiteInfo_hlp('website_name_'.App::getlocale())}}" style="height: 100%;">--}}
{{--                    </div>--}}
                    <div class="header-titles">
                        {!! websiteInfo_hlp('header_text_'.App::getLocale()) !!}
                    </div>
                </div>

                @include('website.main_menu')

{{--                <div class="social-links">--}}
{{--                    <ul>--}}
{{--                        @if(websiteInfo_hlp('linked_link'))--}}
{{--                            <li><a href="{{websiteInfo_hlp('linked_link')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>--}}
{{--                        @endif--}}
{{--                        @if(websiteInfo_hlp('fb_link'))--}}
{{--                            <li><a href="{{websiteInfo_hlp('fb_link')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>--}}
{{--                        @endif--}}
{{--                        @if(websiteInfo_hlp('twitter_link'))--}}
{{--                            <li><a href="{{websiteInfo_hlp('twitter_link')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>--}}
{{--                        @endif--}}
{{--                        @if(websiteInfo_hlp('snapchat_link'))--}}
{{--                            <li><a href="{{websiteInfo_hlp('snapchat_link')}}" target="_blank"><i class="fab fa-snapchat"></i></a></li>--}}
{{--                        @endif--}}
{{--                        @if(websiteInfo_hlp('instagram_link'))--}}
{{--                            <li><a href="{{websiteInfo_hlp('instagram_link')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>--}}
{{--                        @endif--}}
{{--                    </ul>--}}
{{--                </div>--}}

                <div class="header-buttons">
                    <a href="https://api.whatsapp.com/send?phone={{ websiteInfo_hlp('whats_up') }}" target="_blank" class="btn btn-primary col-md-10"><i class="fab fa-whatsapp custom-icon"></i> {{__('site/app.contact_us_via')}}</a>
                    <a href="tel:{{ websiteInfo_hlp('phone') }}" target="_blank" class="btn btn-primary col-md-10"><i class="fa fa-phone custom-icon"></i> {{__('site/app.call_us')}}</a>

{{--                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)--}}
{{--                        <a rel="alternate" class="btn btn-primary col-md-5" style="" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">--}}
{{--                            {{ $properties['native'] }}--}}
{{--                        </a>--}}
{{--                    @endforeach--}}
                </div>

                @if(App::getLocale()=='en')
                    <div class="copyrights">Copyright @ {{ date('Y') }} For <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_en')}}</a> </span>. All rights reserved.</div>
                @else
                    <div class="copyrights">جميع الحقوق محفوظة لـ <span class="h5"><a class="text-danger" href="{{route('home')}}">{{websiteInfo_hlp('website_name_ar')}}</a> </span> @ {{date('Y')}}</div>
                @endif


            </header>

            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->

            <!-- Arrows Nav -->
            <div class="lmpixels-arrows-nav">
                <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
                <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
            </div>
            <!-- End Arrows Nav -->

            <!-- Arrows Nav -->
            <div id="languages">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    @if($properties['native'] != LaravelLocalization::getCurrentLocaleNative() )
                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                    @endif
                @endforeach
            </div>
            <!-- End Arrows Nav -->

            <div class="social-links" id="scl_lnks">
                <ul>
                    @if(websiteInfo_hlp('linked_link'))
                        <li><a href="{{websiteInfo_hlp('linked_link')}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if(websiteInfo_hlp('fb_link'))
                        <li><a href="{{websiteInfo_hlp('fb_link')}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if(websiteInfo_hlp('twitter_link'))
                        <li><a href="{{websiteInfo_hlp('twitter_link')}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if(websiteInfo_hlp('snapchat_link'))
                        <li><a href="{{websiteInfo_hlp('snapchat_link')}}" target="_blank"><i class="fab fa-snapchat"></i></a></li>
                    @endif
                    @if(websiteInfo_hlp('instagram_link'))
                        <li><a href="{{websiteInfo_hlp('instagram_link')}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    @endif
                </ul>
            </div>

            <div class="content-area">
                <div class="animated-sections kit-overlay1" style="background-image: url('');">

                    @include('website.sections.logos')

                    <!-- Home Subpage -->
                    @include('website.sections.home')
                    <!-- End of Home Subpage -->

                    <!-- About Me Subpage -->
                    @include('website.sections.about_us')
                    <!-- End of About Me Subpage -->


                    <!-- services Subpage -->
                    @include('website.sections.our_services')
                    <!-- End of services Subpage -->

                    <!-- documentation Subpage -->
                    @include('website.sections.documentation')
                    <!-- End of documentation Subpage -->

                    <!-- request legal advice Subpage -->
                    @include('website.sections.request_legal_advice')
                    <!-- End of documentation Subpage -->

                    <!-- Contact Subpage -->
                    @include('website.sections.contact_us')
                    <!-- End of Contact Subpage -->


                </div>
            </div>
        </div>

    </div>


@endsection
