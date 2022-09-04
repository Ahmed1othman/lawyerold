<!DOCTYPE html>
<html lang="{{App::getLocale()}}" class="no-js" {{App::getLocale()=='ar'? 'dir=rtl':''}} >
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
{{--    <title>@yield('title') {{ websiteInfo_hlp('website_name') }}</title>--}}
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

{{--    <meta name="description" content="موقع الاستاذ المحامي والموثق لدي وزارة العدل السعودية/ عبد الله المنصوري" />--}}
{{--    <meta name="keywords" content="نقدم خدمات الاستشارات القانونية وخدمات التوثيق اطلب الان اونلاين وسوف نتواصل معك في اقرب وقت." />--}}



    <link rel="icon" type="image/png" href="{{asset('storage/front/'.websiteInfo_hlp('favicon'))}}" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('storage/front/'.websiteInfo_hlp('favicon'))}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! Twitter::generate() !!}
    {!! JsonLd::generate() !!}
    @yield('meta')
    @include('layouts.website.header')
</head>
<body>
    @include('layouts.website.loader')
    @include('layouts.website.navbar')
    @yield('content')

    @include('layouts.website.footer-script')
</body>
</html>
