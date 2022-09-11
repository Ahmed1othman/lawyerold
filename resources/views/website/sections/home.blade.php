<section data-id="home" class="animated-section start-page">
    <div class="section-content vcentered">


        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="title-block">
                    @if(websiteInfo_hlp('show_logo') && websiteInfo_hlp('logo_'.App::getLocale()))
                        <div class="img-thumbnail img-circle img-responsive" style="width: 200px;height: 200px;display: block;margin-left: auto;margin-right: auto;">
                            <img src="{{asset('storage/front/'.websiteInfo_hlp('logo_'.App::getLocale()))}}" alt="{{websiteInfo_hlp('website_name_'.App::getLocale())}}">
                        </div>
                    @else
                        <h2 style="margin-bottom: 15px">
                            {{websiteInfo_hlp('website_name_'.App::getLocale())}}
                        </h2>
                    @endif
                    <div class="owl-carousel text-rotation">
                        <div class="item">
                            <div class="sp-subtitle gold_color">
                                {{__('site/app.For Law and Legal Consultations')}}
                            </div>
                        </div>

                        <div class="item">
                            <div class="sp-subtitle gold_color">{{__('site/app.Providing documentation services')}}</div>
                        </div>
                        <div class="item">
                            <div class="sp-subtitle">
                                <a href="#documentation" class="btn btn-primary home_button">{{__('site/app.request_documentation_service')}}</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="sp-subtitle">
                                <a href="#legal_advice" class="btn btn-primary home_button">{{__('site/app.request_legal_advice')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--important links--}}
        <div class="row">
            <div class="col">
                <h3 style="margin-bottom: 10px">{{__('site/app.important_links')}}</h3>
                <a href="https://mwathiq.sa/MowathiqenSearch/MowathiqenSearchIndex" target="_blank">
                    <img class="logo_image" src="{{asset('website/img/logos/auth_logo.png')}}" alt="الموثق">
                </a>
                <a href="https://sba.gov.sa" target="_blank">
                    <img class="logo_image" src="{{asset('website/img/logos/lawer_logo.jpg')}}" alt="الهيئة السعودية للمحامين">
                </a>

                <a href="https://www.moj.gov.sa/ar/pages/default.aspx" target="_blank">
                    <img class="logo_image" src="{{asset('website/img/logos/Ministry.png')}}" alt="وزارة العدل السعودية">
                </a>
            </div>
        </div>

    </div>
</section>
