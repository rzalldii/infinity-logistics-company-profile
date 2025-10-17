@extends('master')
@section('title')
{{ __('messages.freight_forwarding_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Layanan freight forwarding efisien untuk kebutuhan pengiriman global. Kami menangani semua aspek logistik, memastikan pengiriman barang yang aman, tepat waktu, dan hemat biaya ke seluruh dunia melalui darat, laut, atau udara."/>
<meta name="keywords" content="freight forwarding, layanan logistik, pengiriman internasional, transportasi kargo, solusi pengiriman, freight global, freight laut, freight udara, kepabeanan, bea cukai, manajemen supply chain, penanganan kargo, penyedia logistik, pengiriman door-to-door, perusahaan pelayaran, impor ekspor, layanan freight, jasa pengiriman barang, ekspedisi internasional, forwarder, cargo darat, cargo laut, cargo udara, logistik terintegrasi, pengiriman kontainer"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0" x-text="translations.messages.service_details"></h1>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h2 x-text="translations.messages.services_list"></h2>
                        <div class="services-list">
                            <a href="/nvocc"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.nvocc"></span></a>
                            <a href="/freight-forwarding" class="active"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.freight_forwarding"></span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.domestic_forwarding"></span></a>
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.flexitank_flexibag"></span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.project_logistics"></span></a>
                            <a href="/customs-clearance"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.customs_clearance"></span></a>                       
                        </div>
                    </div>
                    <div class="service-box">
                        <h2 x-text="translations.messages.download_catalog"></h2>
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
                                <a href="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING1.webp" data-gallery="services-freight-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING1.webp" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING2.webp" data-gallery="services-freight-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING2.webp" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING3.webp" data-gallery="services-freight-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FREIGHT FORWARDING3.webp" class="img-fluid services-img-swipe" alt="FREIGHT FORWARDING3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3 x-text="translations.messages.freight_forwarding"></h3>
                    <p x-text="translations.messages.freight_forwarding_description_1"></p>
                    <p x-text="translations.messages.freight_forwarding_description_2"></p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.ff_desc_1"></span></li>
                        <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.ff_desc_2"></span></li>
                        <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.ff_desc_3"></span></li>
                        <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.ff_desc_4"></span></li>
                    </ul>
                    <p x-text="translations.messages.freight_forwarding_description_3"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')