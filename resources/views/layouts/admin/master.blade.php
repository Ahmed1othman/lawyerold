<!DOCTYPE html>
<html dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="موقع الاستاذ المحامي والموثق لدي وزارة العدل السعودية/ عبد الله المنصوري" />
    <meta name="keywords" content="نقدم خدمات الاستشارات القانونية وخدمات التوثيق اطلب الان اونلاين وسوف نتواصل معك في اقرب وقت." />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" type="image/png" href="{{asset('storage/front/'.websiteInfo_hlp('favicon'))}}" />
    <link rel="icon" type="image/png" sizes="512x512" href="{{asset('storage/front/'.websiteInfo_hlp('favicon'))}}" />
    @yield('meta')
    <title>@yield('title')</title>
    @include('layouts.admin.header')
</head>

<body style="font-family: 'Cairo', sans-serif;">
<div class="wrapper">
    <!--sidebar wrapper -->
    @include('layouts.admin.sidebar')
    <!--end sidebar wrapper -->
    <!--start header -->
    @include('layouts.admin.navbar')
    <!--end header -->
    <!--start page wrapper -->
        @yield('content')
        @include('layouts.admin.footer')

</div>





    @include('layouts.admin.footer-script')
</body>

</html>
