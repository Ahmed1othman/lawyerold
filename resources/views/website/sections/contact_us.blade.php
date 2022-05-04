<section data-id="contact" class="animated-section">
    <div class="page-title">
        <h2>{{__('site/app.contact Us Naw')}}</h2>
    </div>

    <div class="section-content">

        <div class="row">
            <!-- Contact Form -->
            <div class="col-md-12">
                <div class="block-title">
                    <h3>{{__('site/app.Leave your details and we will call you back')}}</h3>
                </div>
                <form id="contact_us_form" class="contact-form" action="" method="post" name="contact">

                    <div class="messages"></div>
                    <div class="controls">
                        <div class="fields clearfix">
                            <div class="left-column">
                                <div class="form-group form-group-with-icon">
                                    <input type="text" id="contact_us_name" name="name" class="form-control" placeholder="" required="required" data-error="{{__('site/app.name_is_required')}}">
                                    <label>{{__('site/app.full_name')}} <span style="color: red!important;">*</span></label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input type="email" id="contact_us_email" name="email" class="form-control" placeholder="" data-error="{{__('site/app.valid_email_is_required')}}">
                                    <label> {{__('site/app.email')}} </label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group form-group-with-icon">
                                    <input type="number" id="contact_us_phone" name="phone" class="form-control" placeholder="" required="required" data-error="{{__('site/app.phone_is_required')}}">
                                    <label>{{__('site/app.phone')}} <span style="color: red!important;">*</span></label>
                                    <div class="form-control-border"></div>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <button type="button" onclick="submitContactUs()" class="button btn-send col-12">{{__('site/app.send_message')}}</button>
                    </div>
                </form>
            </div>
            <!-- End of Contact Form -->
        </div>
        <div class="white-space-50"></div>
        <div class="row justify-content-around">
            <!-- Contact Info -->
            <div class="lm-info-block gray-default col-3">
                <i class="lnr lnr-map-marker"></i>
                <h4>{{websiteInfo_hlp('address_'.App::getLocale())}}</h4>
                <span class="lm-info-block-value"></span>
                <span class="lm-info-block-text"></span>
            </div>
            <div class="lm-info-block gray-default col-3">
                <i class="lnr lnr-phone-handset"></i>
                <h4>{{websiteInfo_hlp('phone')}}</h4>
                <span class="lm-info-block-value"></span>
                <span class="lm-info-block-text"></span>
            </div>
            <div class="lm-info-block gray-default col-3">
                <i class="lnr lnr-envelope"></i>
                <h4>{{websiteInfo_hlp('email')}}</h4>
                <span class="lm-info-block-value"></span>
                <span class="lm-info-block-text"></span>
            </div>
        </div>
    </div>
</section>
