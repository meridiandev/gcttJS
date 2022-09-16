<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    @foreach ($settings as $setting)
    <title>{{ $setting->site_title ?: 'IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования'}}</title>
    @endforeach
    <meta content="IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования" name="description">
    <meta content="IT-куб.Новокузнецк" name="keywords">

@include('itcube42/loader')
    @include('itcube42.googleAnalytics')
    @include('itcube42.yandexMetrika')

<!-- =======================================================
    * Template Name: BizLand - v3.0.1
    * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    * Rework: v.sergeev.m@gmail.com
    * IT-куб.Новокузнецк
    * Updated: 8.08.2022
    ======================================================== -->
</head>

<body>

@include('itcube42/topbar')
@include('itcube42/header')
@include('itcube42/slider')

<main id="main">
{{-- @include('itcube42/featured') --}}
@include('itcube42/about')
@include('itcube42/skills')
@include('itcube42/counts')
@include('itcube42/clients')
@include('itcube42/services')
{{--@include('itcube42/testimonials')--}}
{{--@include('itcube42/portfolio')--}}
@include('itcube42/team')
{{--@include('itcube42/pricing')--}}
    @include('itcube42/doc')
@include('itcube42/ask')
@include('itcube42/contact')

</main><!-- End #main -->
<!-- ======= Footer ======= -->
@include('itcube42/footer')
<!-- ======= End footer ====== -->
@include('itcube42/preloader')
</body>

</html>

