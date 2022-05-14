<link rel="stylesheet" href="{{ asset('website/css/reset.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/bootstrap-grid.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/animations.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/perfect-scrollbar.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/owl.carousel.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('website/css/magnific-popup.css')}}" type="text/css">
@if(App::isLocale('ar'))
    @if(websiteInfo_hlp('theme')!='light')
        <link rel="stylesheet" href="{{ asset('website/css/main-small-rtl.css')}}" type="text/css">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/main-small-rtl.css')}}" type="text/css">
    @endif
@else
    @if(websiteInfo_hlp('theme')!='light')
        <link rel="stylesheet" href="{{ asset('website/css/main-small.css')}}" type="text/css">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/main-small.css')}}" type="text/css">
    @endif
@endif

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<style>
     body{
        font-family: 'Cairo', sans-serif!important;
    }
</style>

<script src="{{ asset('website/js/modernizr.custom.js')}}"></script>


<link href="{{ websiteInfo_hlp('font_url') }}" rel="stylesheet">

@if(websiteInfo_hlp('theme')!='light')
    <style>
    /*.kit-overlay1 {*/
    /*    background-position: center center;*/
    /*    background-repeat: no-repeat;*/
    /*    background-size: cover;*/
    /*}*/
    /*.kit-overlay1::before {*/
    /*    opacity: 0.9;*/
    /*}*/

    /*.kit-overlay1::before {*/
    /*    content: "";*/
    /*    display: block;*/
    /*    position: absolute;*/
    /*    z-index: -1;*/
    /*    width: 100%;*/
    /*    height: 100%;*/
    /*    top: 0;*/
    /*    left: 0;*/
    /*    !*background: #05233a;*!*/
    /*    background: #222;*/
    /*}*/

    /*section{*/
    /*    background-color: transparent!important;*/
    /*}*/
</style>
@else
    <style>
        /*.kit-overlay1 {*/
        /*    background-position: center center;*/
        /*    background-repeat: no-repeat;*/
        /*    background-size: cover;*/
        /*}*/
        /*.kit-overlay1::before {*/
        /*    opacity: 0.97;*/
        /*}*/

        /*.kit-overlay1::before {*/
        /*    content: "";*/
        /*    display: block;*/
        /*    position: absolute;*/
        /*    z-index: -1;*/
        /*    width: 100%;*/
        /*    height: 100%;*/
        /*    top: 0;*/
        /*    left: 0;*/
        /*    !*background: #05233a;*!*/
        /*    background: #fff;*/
        /*}*/

        /*section{*/
        /*    background-color: transparent!important;*/
        /*}*/
        /*@media only screen and (min-width: 1025px){*/
        /*    ul.main-menu {*/
        /*        width: 85px;*/
        /*    }*/
        /*}*/

        a {
            color: {{ websiteInfo_hlp('main_font_color') }};
        }
    </style>
@endif
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>

    .btn-primary:hover,
    .btn-primary:focus,
    button:hover,
    button:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    .preloader-spinner,
    .ps:hover>.ps__scrollbar-y-rail:hover>.ps__scrollbar-y,
    .ps:hover.ps--in-scrolling.ps--y>.ps__scrollbar-y-rail>.ps__scrollbar-y,
    .testimonials.owl-carousel .owl-nav .owl-prev:hover,
    .testimonials.owl-carousel .owl-nav .owl-next:hover,
    .clients.owl-carousel .owl-nav .owl-prev:hover,
    .clients.owl-carousel .owl-nav .owl-next:hover,
    .timeline-second-style .divider:before,
    .skills-second-style .skill-container:before,
    .skills-second-style .skill-percentage,
    .knowledges li,
    .ajax-page-nav > div.nav-item a:hover,
    .share-buttons a:hover,
    .menu-toggle,
    .fw-pricing .fw-package-wrap.highlight-col .fw-heading-row span:after,
    .home_button:hover
    {
        background-color: {{ websiteInfo_hlp('main_font_color') }};
    }

    ul.main-menu a.active,
    ul.main-menu a:focus,
    ul.main-menu a:hover,
    .lmpixels-arrows-nav div:hover,
    .header-buttons .btn-primary:hover,
    .page-title h2 span,
    .form-group-with-icon.form-group-focus i,
    .form-group .form-control:focus ~ label,
    .form-group.form-group-focus .form-control ~ label,
    .block-title h3 span,
    .block-title h3 span,
    .info-list .title,
    .info-block-w-icon i,
    .lm-info-block i,
    .lm-info-block .lm-info-block-value,
    .testimonial .author-info .icon,
    .portfolio-grid figure i,
    .project-general-info .fa,
    .fun-fact i,
    .fun-fact .lm-info-block,
    .home_button
    {
        color: {{ websiteInfo_hlp('main_font_color') }};;
    }


    .wp-block-button .wp-block-button__link,
    .btn-primary:hover,
    .btn-primary:focus,
    button:hover,
    button:focus,
    input[type="button"]:hover,
    input[type="button"]:focus,
    input[type="submit"]:hover,
    input[type="submit"]:focus,
    .form-control ~ .form-control-border,
    .timeline-second-style .divider:after,
    .lmpixels-arrows-nav,
    .lmpixels-arrows-nav,
    .home_button,
    .btn-primary, .btn-secondary, button, input[type="button"], input[type="submit"], .wp-block-button .wp-block-button__link
    {
        border: 2px solid {{ websiteInfo_hlp('main_font_color') }};;
    }

    .page-title:after,
    .block-title:after
    {
        background-image: -webkit-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
        background-image: -moz-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
        background-image: -ms-repeating-radial-gradient(center center, {{ websiteInfo_hlp('main_font_color') }}, {{ websiteInfo_hlp('main_font_color') }} 1px, transparent 0px, transparent 100%);
    }

    .testimonials.owl-carousel .owl-nav .owl-prev:hover,
    .testimonials.owl-carousel .owl-nav .owl-next:hover,
    .clients.owl-carousel .owl-nav .owl-prev:hover,
    .clients.owl-carousel .owl-nav .owl-next:hover
    {
        border-color: {{ websiteInfo_hlp('main_font_color') }};;
    }

    .skills-second-style .skill-container
    {
        border: 1px solid {{ websiteInfo_hlp('main_font_color') }};
    }

    body,
    h1, h2, h3, h4, h5, h6,
    .btn-primary,
    .btn-secondary,
    button,
    input[type="button"],
    input[type="submit"],
    .wp-block-button .wp-block-button__link,
    .form-control,
    .form-control:focus,
    .has-error .form-control,
    .has-error .form-control:focus,
    input[type="search"],
    input[type="password"],
    input[type="text"]
    {
        font-family: {!! websiteInfo_hlp('font_family') !!};
    }

    .testimonials.owl-carousel .owl-nav .owl-prev,
    .testimonials.owl-carousel .owl-nav .owl-next,
    .clients.owl-carousel .owl-nav .owl-prev,
    .clients.owl-carousel .owl-nav .owl-next,
    .portfolio-page-carousel .owl-nav [class*='owl-']
    {
        font-family: "Font Awesome 5 Free";
    }
    .blog-card .media-block a .mask{
        font-family: 'Linearicons-Free';
    }

</style>

<style>
    {
        font-family: 'El Messiri', sans-serif;
    }
</style>

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="{{ asset('website/plugins/notifications/css/lobibox.min.css') }}" rel="stylesheet"/>

<link rel="stylesheet" href="{{ asset('website/css/custom.css')}}" type="text/css">

<style>
    #logos{
        position: absolute;
        top: 30px;

        {{App::getLocale()=='en'?'right: 30px;':'left: 30px;'}}
        z-index: 1000;
    }

    #languages{
        text-align: center;
        position: absolute;
        bottom: 0px;
        width: 60px;
        height: 60px;
        border: 2px solid {{websiteInfo_hlp('main_font_color')}};
        font-size: 12px;
        {{App::getLocale()=='en'?'left: -85px;':'right: -85px;'}};
        z-index: 90;
        background-color: #fff;
        border-radius: 30px;
        list-style: none;
        -webkit-box-shadow: 0 0 30px -5px rgb(0 0 0 / 15%);
        -moz-box-shadow: 0 0 30px -5px rgba(0,0,0,.15);
        box-shadow: 0 0 30px -5px rgb(0 0 0 / 15%);
    }

    .page-content {
        background: -webkit-gradient(linear, right top, right bottom, from({{websiteInfo_hlp('main_color')}}), to({{websiteInfo_hlp('main_color')}}));
        background: linear-gradient({{websiteInfo_hlp('main_color')}}, {{websiteInfo_hlp('main_color')}});
    }

    #scl_lnks{
        position: absolute;
        padding: 15px 0;
        width: 65px;
        {{App::getLocale()=='en'?'left: -85px;':'right: -85px;'}};
        background-color: #fff;
        border-radius: 35px;
        z-index: 999;
        list-style: none;
        top: 0;
        -webkit-box-shadow: 0 0 30px -5px rgb(0 0 0 / 15%);
        -moz-box-shadow: 0 0 30px -5px rgba(0,0,0,.15);
        box-shadow: 0 0 30px -5px rgb(0 0 0 / 15%);
    }

    .social-links ul li a {
        display: block;
        position: relative;
        color: {{websiteInfo_hlp('main_font_color')}};
        padding: 10px;
        font-size: 30px;
        width: auto;
        height: auto;
        color: #b5b6b7;
    }
    .social-links {
         margin:     0;
    }

    .home_button{
        color: {{websiteInfo_hlp('main_color')}};
        border: 2px solid {{websiteInfo_hlp('main_color')}};
        font-size: 12pt;
    }
    h1, h2 {
        color: {{websiteInfo_hlp('main_font_color')}};
    }

    h3, h4, h5, h6 {
        color: {{websiteInfo_hlp('main_color')}};
    }
    body{
        color: #384140;
    }

    .home_button:hover{
        background-color: {{websiteInfo_hlp('main_color')}};
        color: #fff;
        border: 2px solid {{websiteInfo_hlp('main_color')}};
    }

    .social-links ul li {
        display:block;
    }

    #languages a{
        color: #b5b6b7;
        line-height: 4.5;
    }

    #languages a:hover,
    #scl_lnks ul li a:hover
    {
        color: {{websiteInfo_hlp('main_font_color')}};
    }


    @media only screen and (min-width: 1025px){
        ul.main-menu .link-text
        {
            background-color: {{websiteInfo_hlp('main_color')}};
        }
    }

 @media only screen and (max-width: 1025px){
        .header
        {
            background-color: {{websiteInfo_hlp('main_color')}};
        }
    }


    .logo_image {
        margin:5px;
        width: 50px;
        height: 50px;
        border-radius: 5px;
        display: inline-block;
    }


</style>
