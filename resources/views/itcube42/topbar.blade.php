<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
            @foreach ($settings as $setting)
            <i class="bi bi-envelope d-flex align-items-center">
                <a href="mailto:contact@example.com">{{ $setting->site_email }}</a></i>
            <i class="bi bi-phone d-flex align-items-center ms-4"><span>{{ $setting->site_phone }}</span></i>
            <i class="bi bi-house d-flex align-items-center ms-4"><span><a href="{{ $setting->site_footer_link }}">{{ $setting->site_meridian }}</a></span></i>
            @endforeach
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
            <a href="https://vk.com/itcube42"><i class="bx bxl-vk"></i></a>
{{--            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>--}}
{{--            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>--}}
{{--            <a href="https://www.instagram.com/itcube42/" class="instagram"><i class="bi bi-instagram"></i></a>--}}
{{--            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>--}}
        </div>
    </div>
</section>
