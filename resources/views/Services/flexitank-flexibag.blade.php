@extends('master')
@section('title')
{{ __('messages.flexitank_flexibag_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Solusi flexitank hemat biaya kapasitas 18.000-24.000 liter untuk cairan non-berbahaya: minyak nabati, minuman, bahan kimia ringan. Material food-grade polyethylene & polypropylene. Diproduksi di Malaysia, dukungan penuh Surabaya Indonesia dengan instalasi cepat dan after-sales andal."/>
<meta name="keywords" content="flexitank, flexibag, flexitank Indonesia, flexitank Malaysia, bulk liquid transport, transportasi cairan curah, flexitank 20ft, flexitank 24000 liter, food grade flexitank, minyak nabati, edible oil transport, beverage shipping, light chemicals transport, polyethylene flexitank, polypropylene flexitank, flexitank food grade, Infinity Bulk Logistics, IBL flexitank, flexitank Surabaya, flexitank hemat biaya, cost effective liquid transport, contamination free shipping, flexitank installation, flexitank manufacturing, liquid latex transport, wine transport, juice transport, non-hazardous liquid, flexitank capacity, container liquid transport, bulk liquid container, flexibag 20 kaki, pengiriman cairan curah, tangki fleksibel, liquid cargo solution, flexitank ramah lingkungan, recyclable flexitank, flexitank support Indonesia, after sales flexitank, R&D flexitank, technical support flexitank, flexitank Malaysia Indonesia, ISO tank alternative, drum alternative, IBC alternative, flexi tank kontainer, bulk liquid logistics, liquid shipping solution"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0" x-text="translations.messages.flexitank_flexibag"></h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('services') }}" x-text="translations.messages.services"></a></li>
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
                            <a href="{{ route('nvocc') }}"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.nvocc"></span></a>
                            <a href="{{ route('freight-forwarding') }}"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.freight_forwarding"></span></a>
                            <a href="{{ route('domestic-forwarding') }}"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.domestic_forwarding"></span></a>
                            <a href="{{ route('flexitank-flexibag') }}" class="active"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.flexitank_flexibag"></span></a>
                            <a href="{{ route('project-logistics') }}"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.project_logistics"></span></a>
                            <a href="{{ route('customs-clearance') }}"><i class="bi bi-arrow-right-circle"></i><span x-text="translations.messages.customs_clearance"></span></a>                       
                        </div>
                    </div>
                    <div class="service-box">
                        <h3 x-text="translations.messages.download_catalog"></h3>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/IBL-Brochures.pdf"><i class="bi bi-filetype-pdf"></i><span x-text="translations.messages.ibl_brochures"></span></a>
                            <a href="<?php echo url('/'); ?>/pdf/IBL-Profile.pdf"><i class="bi bi-filetype-pdf"></i><span x-text="translations.messages.ibl_profile"></span></a>
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
                                <a href="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG1.webp" data-gallery="services-flexitank-flexibag" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG1.webp" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG2.webp" data-gallery="services-flexitank-flexibag" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG2.webp" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG3.webp" data-gallery="services-flexitank-flexibag" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG3.webp" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG3">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG4.webp" data-gallery="services-flexitank-flexibag" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/FLEXITANK FLEXIBAG4.webp" class="img-fluid services-img-swipe" alt="FLEXITANK FLEXIBAG4">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <p x-text="translations.messages.flexitank_flexibag_description_1"></p>
                    <p x-text="translations.messages.flexitank_flexibag_description_2"></p>
                    <p x-text="translations.messages.flexitank_flexibag_description_3"></p>
                    <a href="{{ route('flexitank-flexibag-details') }}" class="more-details-btn" x-text="translations.messages.flexitank_flexibag_details"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')