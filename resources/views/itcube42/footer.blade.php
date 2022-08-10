<footer id="footer">
@foreach($settings as $setting)
{{--    <div class="footer-newsletter">--}}
{{--        <div class="container">--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <h4>Join Our Newsletter</h4>--}}
{{--                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>--}}
{{--                    <form action="" method="post">--}}
{{--                        <input type="email" name="email"><input type="submit" value="Subscribe">--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4><span>{{ $setting->site_header }}.</span></h4>
                    <p>{{ $setting->site_address }}<br><br>
                        <strong>Телефон:</strong>{{ $setting->site_phone }}<br>
                        <strong>Email:</strong>{{ $setting->site_email }}<br>
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Мы работаем</h4>
                    <p>Понедельник-Пятница с 9.00 до 20.00</p>
                    <p>Суббота с 8:30 до 20:00</p>
                    <p>Воскресенье с 11:00 до 14:00</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Мы в социальных сетях</h4>
                    <p>Актуальную информацию всегда можно найти в сетях</p>
                    <div class="social-links mt-3">
                        <a href="https://vk.com/itcube42"><i class="bx bxl-vk"></i></a>
{{--                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
{{--                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
{{--                        <a href="https://www.instagram.com/itcube42/" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
{{--                        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>--}}
{{--                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>--}}
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container py-4">
        <div class="copyright">
            &copy; {{ $setting->site_footer }} " | Работает на <a href="https://laravel.com/">Laravel</a>  v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bizland-bootstrap-business-template/ -->
            <a href="{{ $setting->site_footer_link }}">Меридиан</a>
        </div>
    </div>
    @endforeach
</footer><!-- End Footer -->
