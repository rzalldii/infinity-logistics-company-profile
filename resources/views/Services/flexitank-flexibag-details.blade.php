@extends('master')
@section('title')
{{ __('messages.flexitank_flexibag_details_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Jelajahi keunggulan solusi Flexitank untuk transportasi cairan curah. Pelajari tentang pilihan pengiriman cairan, kimia, dan produk food grade kami yang aman, hemat biaya, dan ramah lingkungan dalam kontainer fleksibel bervolume besar."/>
<meta name="keywords" content="detail flexitank, solusi flexitank, transportasi cairan curah, pengiriman flexible tank, kargo cairan, pengiriman hemat biaya, kemasan ramah lingkungan, solusi penyimpanan cairan, transportasi kimia, flexitank food grade, logistik cairan curah, kontainer pengiriman cairan, transportasi cairan berkelanjutan, keunggulan flexitank, keuntungan flexitank, spesifikasi flexitank, kapasitas flexitank, flexibag, bulk liquid, liquid cargo, flexitank 20ft, flexitank 24000 liter, flexitank liner, pengiriman minyak nabati, edible oil transport, chemical shipping, non-hazardous liquid, flexitank installation, flexitank benefits"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/flexitank-flexibag" class="more-details-btn me-3" aria-label="Flexitank">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h1 class="mb-0" x-text="translations.messages.flexitank_flexibag_details"></h1>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- MULTILAYER Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container section-title">
            <h2 x-text="translations.messages.multilayer"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER1.webp" data-gallery="flexitank-flexibag-multilayer" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER1.webp" class="img-fluid rounded services-img-swipe" alt="MULTILAYER1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER2.webp" data-gallery="flexitank-flexibag-multilayer" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/MULTILAYER2.webp" class="img-fluid rounded services-img-swipe" alt="MULTILAYER2">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.multilayer_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.beta_tank"></span></li>
                        </ul>
                        <p x-text="translations.messages.beta_tank_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.gamma_tank"></span></li>
                        </ul>
                        <p x-text="translations.messages.gamma_tank_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.delta_tank"></span></li>
                        </ul>
                        <p x-text="translations.messages.delta_tank_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.epsilon_tank"></span></li>
                        </ul>
                        <p x-text="translations.messages.epsilon_tank_desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /MULTILAYER Section -->
    <!-- PP WOVEN Section -->
    <section id="flexitank-details" class="flexitank-details section light-background">
        <div class="container section-title">
            <h2 x-text="translations.messages.pp_woven"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN1.webp" data-gallery="flexitank-flexibag-pp-woven" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN1.webp" class="img-fluid rounded services-img-swipe" alt="PP WOVEN1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN2.webp" data-gallery="flexitank-flexibag-pp-woven" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/PP WOVEN2.webp" class="img-fluid rounded services-img-swipe" alt="PP WOVEN2">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.pp_woven_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.polyethylene_liner"></span></li>
                        </ul>
                        <p x-text="translations.messages.polyethylene_liner_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.evoh_liner"></span></li>
                        </ul>
                        <p x-text="translations.messages.evoh_liner_desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /PP WOVEN Section -->
    <!-- VALVE Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container section-title">
            <h2 x-text="translations.messages.valve"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/VALVE1.webp" data-gallery="flexitank-flexibag-valve" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/VALVE1.webp" class="img-fluid rounded services-img-swipe" alt="VALVE1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/VALVE2.webp" data-gallery="flexitank-flexibag-valve" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/VALVE2.webp" class="img-fluid rounded services-img-swipe" alt="VALVE2">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.valve_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.butterfly_valve_gland"></span></li>
                        </ul>
                        <p x-text="translations.messages.butterfly_valve_gland_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.butterfly_valve_compression"></span></li>
                        </ul>
                        <p x-text="translations.messages.butterfly_valve_compression_desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /VALVE Section -->
    <!-- BULKHEAD Section -->
    <section id="flexitank-details" class="flexitank-details section light-background">
        <div class="container section-title">
            <h2 x-text="translations.messages.bulkhead"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD1.webp" data-gallery="flexitank-flexibag-bulkhead" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD1.webp" class="img-fluid rounded services-img-swipe" alt="BULKHEAD1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD2.webp" data-gallery="flexitank-flexibag-bulkhead" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD2.webp" class="img-fluid rounded services-img-swipe" alt="BULKHEAD2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD3.webp" data-gallery="flexitank-flexibag-bulkhead" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/BULKHEAD3.webp" class="img-fluid rounded services-img-swipe" alt="BULKHEAD3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.bulkhead_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.bulkhead_a"></span></li>
                        </ul>
                        <p x-text="translations.messages.bulkhead_a_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.bulkhead_b"></span></li>
                        </ul>
                        <p x-text="translations.messages.bulkhead_b_desc"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.bulkhead_c"></span></li>
                        </ul>
                        <p x-text="translations.messages.bulkhead_c_desc"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /BULKHEAD Section -->
    <!-- HEATING PAD Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container section-title">
            <h2 x-text="translations.messages.heating_pad"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD1.webp" data-gallery="flexitank-flexibag-heating-pad" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD1.webp" class="img-fluid rounded services-img-swipe" alt="HEATING PAD1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD2.webp" data-gallery="flexitank-flexibag-heating-pad" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD2.webp" class="img-fluid rounded services-img-swipe" alt="HEATING PAD2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD3.webp" data-gallery="flexitank-flexibag-heating-pad" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEATING PAD3.webp" class="img-fluid rounded services-img-swipe" alt="HEATING PAD3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.heating_pad_description"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /HEATING PAD Section -->
    <!-- INSULATION LINER Section -->
    <section id="flexitank-details" class="flexitank-details section light-background">
        <div class="container section-title">
            <h2 x-text="translations.messages.insulation_liner"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER1.webp" data-gallery="flexitank-flexibag-insulation-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER1.webp" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER2.webp" data-gallery="flexitank-flexibag-insulation-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER2.webp" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER3.webp" data-gallery="flexitank-flexibag-insulation-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/INSULATION LINER3.webp" class="img-fluid rounded services-img-swipe" alt="INSULATION LINER3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.insulation_liner_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.insulation_benefit_1"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.insulation_benefit_2"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.insulation_benefit_3"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.insulation_benefit_4"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /INSULATION LINER Section -->
    <!-- TUB LINER Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container section-title">
            <h2 x-text="translations.messages.tub_liner"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/TUB LINER1.webp" data-gallery="flexitank-flexibag-tub-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER1.webp" class="img-fluid rounded services-img-swipe" alt="TUB LINER1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/TUB LINER2.webp" data-gallery="flexitank-flexibag-tub-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER2.webp" class="img-fluid rounded services-img-swipe" alt="TUB LINER2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/TUB LINER3.webp" data-gallery="flexitank-flexibag-tub-liner" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/TUB LINER3.webp" class="img-fluid rounded services-img-swipe" alt="TUB LINER3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.tub_liner_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.tub_benefit_1"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.tub_benefit_2"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.tub_benefit_3"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.tub_benefit_4"></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /TUB LINER Section -->
    <!-- HEAT EXCHANGER Section -->
    <section id="flexitank-details" class="flexitank-details section light-background">
        <div class="container section-title">
            <h2 x-text="translations.messages.heat_exchanger"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="flexitank-details-slider swiper init-swiper col-lg-6 position-relative align-self-start">
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
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER1.webp" data-gallery="flexitank-flexibag-heat-exchanger" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER1.webp" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER2.webp" data-gallery="flexitank-flexibag-heat-exchanger" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER2.webp" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER3.webp" data-gallery="flexitank-flexibag-heat-exchanger" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/flexitank details/HEAT EXCHANGER3.webp" class="img-fluid rounded services-img-swipe" alt="HEAT EXCHANGER3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-6 content">
                        <p x-text="translations.messages.heat_exchanger_description"></p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.heat_exchanger_benefit_1"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.heat_exchanger_benefit_2"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.heat_exchanger_benefit_3"></span></li>
                            <li><i class="bi bi-check-circle"></i> <span x-text="translations.messages.heat_exchanger_benefit_4"></span></li>
                        </ul>
                        <p x-text="translations.messages.heat_exchanger_cta"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /HEAT EXCHANGER Section -->
    <!-- CERTIFICATE Section -->
    <section id="flexitank-details" class="flexitank-details section">
        <div class="container">
            <div class="d-flex flex-column">
                <div class="d-flex flex-column">
                    <div class="marquee w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-1.webp" class="img-fluid" alt="FSSC 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-2.webp" class="img-fluid" alt="ISO 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-3.webp" class="img-fluid" alt="ISO 14001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-4.webp" class="img-fluid" alt="ISO 9001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-5.webp" class="img-fluid" alt="HACCP">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-6.webp" class="img-fluid" alt="SUCI PURE HALAL IFRC">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-7.webp" class="img-fluid" alt="GMP FDA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-8.webp" class="img-fluid" alt="KLBD">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-9.webp" class="img-fluid" alt="COA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-1.webp" class="img-fluid" alt="FSSC 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-2.webp" class="img-fluid" alt="ISO 22000">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-3.webp" class="img-fluid" alt="ISO 14001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-4.webp" class="img-fluid" alt="ISO 9001">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-5.webp" class="img-fluid" alt="HACCP">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-6.webp" class="img-fluid" alt="SUCI PURE HALAL IFRC">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-7.webp" class="img-fluid" alt="GMP FDA">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-8.webp" class="img-fluid" alt="KLBD">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="<?php echo url('/'); ?>/img/certificates/certificate-9.webp" class="img-fluid" alt="COA">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /CERTIFICATE Section -->
</main>
@endsection('content')