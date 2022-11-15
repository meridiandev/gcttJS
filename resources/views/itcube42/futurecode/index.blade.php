<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

{{--    @foreach ($settings as $setting)--}}
{{--        <title>{{ $setting->site_title ?: 'IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования'}}</title>--}}
{{--    @endforeach--}}
    <meta content="IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования" name="description">
    <meta content="IT-куб.Новокузнецк" name="keywords">

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <link href="{{ asset('assets/apply/apply.css') }}" rel="stylesheet" id="bootstrap-css">

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
    * Updated: 19.10.2022
    ======================================================== -->
</head>

<body>

{{--@include('itcube42/topbar')--}}
{{--@include('itcube42/header')--}}
{{--@include('itcube42/slider')--}}

<main id="main">
@include('itcube42.futurecode.promo')

</main><!-- End #main -->
<!-- ======= Footer ======= -->
{{--@include('itcube42/footer')--}}
<!-- ======= End footer ====== -->
{{--@include('itcube42/preloader')--}}
</body>
</html>

