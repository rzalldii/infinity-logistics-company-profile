@extends('master')
@section('title')
{{ __('messages.nvocc_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Layanan NVOCC FCL terpercaya dengan alokasi ruang andal ke Malaysia, Thailand, Indonesia, Singapura, Vietnam, India, Myanmar. Kontainer 20ft high cube Surabaya berkapasitas 12% lebih besar. Jadwal mingguan fleksibel untuk cargo berdensitas rendah."/>
<meta name="keywords" content="NVOCC, NVOCC Indonesia, Non-Vessel Operating Common Carrier, layanan NVOCC, FCL, Full Container Load, pengiriman FCL, kontainer 20ft high cube, high cube container, kontainer Surabaya, NVOCC Surabaya, freight laut Asia, pengiriman Malaysia, pengiriman Thailand, pengiriman Singapura, pengiriman Vietnam, pengiriman India, pengiriman Myanmar, jalur perdagangan Asia, shipping schedule, jadwal kapal, alokasi ruang kontainer, kontainer GP, general purpose container, kargo berdensitas rendah, particle board shipping, gypsum board shipping, sheet glass shipping, pengiriman volume tinggi, solusi FCL hemat biaya, NVOCC Asia Tenggara, ocean freight NVOCC, maritime logistics, carrier laut, weekly sailing schedule, flexible departure dates, transit time, supply chain solution, eksportir Indonesia, NVOCC Malaysia-Indonesia, pelabuhan Asia, routing flexibility, container allocation, vessel operator"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0" x-text="translations.messages.nvocc"></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/services" x-text="translations.messages.services"></a></li>
                    <li class="current" x-text="translations.messages.service_details"></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h3 x-text="translations.messages.services_list"></h3>
                        <div class="services-list">
                            <a href="/nvocc" class="active"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.nvocc"></span></a>
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.freight_forwarding"></span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.domestic_forwarding"></span></a>
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.flexitank_flexibag"></span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.project_logistics"></span></a>
                            <a href="/customs-clearance"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.customs_clearance"></span></a>                       
                        </div>
                    </div>
                    <div class="service-box">
                        <h3 x-text="translations.messages.download_catalog"></h3>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/Company-Profile-INF.pdf"><i class="bi bi-filetype-pdf"></i><span x-text="translations.messages.company_profile"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-details-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                        </script>
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/NVOCC1.webp" data-gallery="services-nvocc" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/NVOCC1.webp" class="img-fluid services-img-swipe" alt="NVOCC1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/NVOCC2.webp" data-gallery="services-nvocc" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/NVOCC2.webp" class="img-fluid services-img-swipe" alt="NVOCC2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/NVOCC3.webp" data-gallery="services-nvocc" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/NVOCC3.webp" class="img-fluid services-img-swipe" alt="NVOCC3">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/NVOCC4.webp" data-gallery="services-nvocc" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/NVOCC4.webp" class="img-fluid services-img-swipe" alt="NVOCC4">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <p x-text="translations.messages.nvocc_description_1"></p>
                    <p x-text="translations.messages.nvocc_description_2"></p>
                    <p x-text="translations.messages.nvocc_description_3"></p>
                    <a href="/nvocc-schedule" class="more-details-btn" x-text="translations.messages.nvocc_schedule"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')