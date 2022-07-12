<section data-id="about-me" class="animated-section">


    <div class="page-title">
        <h2>{{__('site/app.about_us')}}</h2>
    </div>
    <div class="section-content">
        <!-- about us -->
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <p>{{websiteInfo_hlp('about_us_'.App::getLocale())}}</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img src="{{asset('website/img/tawtheeq.jpg')}}" style="margin: auto;border: 4px solid #47896a;padding: 7px;">
            </div>
        </div>
        <!-- End of about us -->

        <div class="white-space-50"></div>

        <!-- vision -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.vision')}}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p>{!! websiteInfo_hlp('vision_'.App::getLocale()) !!}</p>
            </div>
        </div>
        <!-- End of vision -->


        <div class="white-space-50"></div>
        <!-- mission -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.mission')}}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p>{!! websiteInfo_hlp('mission_'.App::getLocale()) !!}</p>
            </div>
        </div>
        <!-- End of mission -->


        <div class="white-space-50"></div>
        <!-- values -->

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="block-title">
                    <h3>{{__('site/app.values')}}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <p>{!! websiteInfo_hlp('values_'.App::getLocale()) !!}</p>
            </div>
        </div>
        <!-- End of values -->


    </div>
</section>
