<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @foreach ($settings as $setting)
        <title>{{ $setting->site_title ?: 'IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования'}}</title>
    @endforeach
    <meta content="IT-куб.Новокузнецк Федеральная сеть детских Центров цифрового образования" name="description">
    <meta content="IT-куб.Новокузнецк" name="keywords">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{{asset('new/css/bootstrap.min.css')}}">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{asset('new/css/style.css')}}">
    <!-- Awesome CSS CDN-->
    <link href="{{asset('new/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/brands.css')}}" rel="stylesheet">
    <link href="{{asset('new/css/solid.css')}}" rel="stylesheet">

    <!-- Font Awesome JS -->
    <script defer src="{{asset('new/js/solid.js')}}"></script>
    <script defer src="{{asset('new/js/fontawesome.js')}}"></script>
    <script defer src="{{asset('new/js/brands.js')}}"></script>


@include('itcube42new/loader')
@include('itcube42.googleAnalytics')
@include('itcube42.yandexMetrika')

<!-- =======================================================
    * Template Name: ITCube42 v0.22
    * Author: Sergeev
    * License: https://bootstrapmade.com/license/
    * Rework: v.sergeev.m@gmail.com
    * IT-куб.Новокузнецк
    * Updated: 8.11.2022
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
    @include('itcube42/join')
    @include('itcube42/contact')

</main><!-- End #main -->
<!-- ======= Footer ======= -->
@include('itcube42/footer')
<!-- ======= End footer ====== -->
@include('itcube42/preloader')
</body>
</html>

