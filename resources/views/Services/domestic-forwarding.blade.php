@extends('master')
@section('title')
{{ __('messages.domestic_forwarding_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Layanan pengiriman domestik terpercaya untuk pengiriman cepat dan aman ke seluruh Indonesia. Kami menawarkan solusi logistik efisien untuk transportasi barang yang tepat waktu dan hemat biaya dalam negeri."/>
<meta name="keywords" content="pengiriman domestik, pengiriman nasional, freight domestik, logistik lokal, transportasi kargo, pengiriman dalam negeri, layanan pengiriman, layanan freight, pengiriman seluruh Indonesia, perusahaan pengiriman, freight forwarding domestik, forwarding domestik, solusi pengiriman lokal, pengiriman aman, pengiriman cepat, layanan transportasi, ekspedisi domestik, cargo domestik, kirim barang dalam negeri, jasa pengiriman domestik, logistik Indonesia, trucking, darat, antar pulau, pengiriman darat, cargo darat, LTL, FTL"/>
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
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.freight_forwarding"></span></a>
                            <a href="/domestic-forwarding" class="active"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.domestic_forwarding"></span></a>
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
                                <a href="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING1.webp" data-gallery="services-domestic-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING1.webp" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING2.webp" data-gallery="services-domestic-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING2.webp" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING3.webp" data-gallery="services-domestic-forwarding" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/DOMESTIC FORWARDING3.webp" class="img-fluid services-img-swipe" alt="DOMESTIC FORWARDING3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3 x-text="translations.messages.domestic_forwarding"></h3>
                    <p x-text="translations.messages.domestic_forwarding_description_1"></p>
                    <p x-text="translations.messages.domestic_forwarding_description_2"></p>
                    <p x-text="translations.messages.domestic_forwarding_description_3"></p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')