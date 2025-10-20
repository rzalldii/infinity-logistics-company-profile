@extends('master')
@section('title')
Infinity Logistics Indonesia
@endsection('title')
@section('meta')
<meta name="description" content="Layanan freight forwarding profesional untuk pengiriman internasional. Kami menyediakan solusi logistik terintegrasi dengan pengiriman cepat, aman, dan efisien ke seluruh dunia."/>
<meta name="keywords" content="freight forwarding, layanan logistik, pengiriman internasional, manajemen supply chain, logistik global, solusi transportasi, NVOCC, freight udara, freight laut, kepabeanan, bea cukai, manajemen kargo, penyedia logistik, pelacakan kiriman, pengiriman curah, logistik proyek, layanan freight, pengiriman aman, perusahaan logistik, pengiriman door-to-door, logistik ekspor impor, forwarder surabaya, forwarding surabaya, shipping line surabaya, logistik surabaya, infinity surabaya, pelayaran surabaya, freight forwarder surabaya, freight forwarding surabaya, flexibag surabaya, flexitank surabaya, flexibag indonesia, flexitank indonesia, flexibag, flexitank, forwarder indonesia, forwarding indonesia, shipping line indonesia, logistik indonesia, infinity indonesia, freight forwarder indonesia, freight forwarding indonesia"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1 x-text="translations.messages.hero_title"></h1>
                    <p x-text="translations.messages.hero_subtitle"></p>
                    <div class="d-flex">
                        <a href="/#about" class="btn-get-started" x-text="translations.messages.get_started"></a>
                        <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span x-text="translations.messages.watch_video"></span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/hero-img.webp" alt="Container Infinity" class="img-fluid animated" fetchpriority="high"/>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-eye icon" x-text="translations.messages.vision"></i>
                        </h2>
                        <p x-text="translations.messages.vision_text"></p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-bullseye icon" x-text="translations.messages.mission"></i>
                        </h2>
                        <p x-text="translations.messages.mission_text"></p>
                    </div>
                </div>
		        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-gem icon" x-text="translations.messages.core_values"></i>
                        </h2>
                        <p x-text="translations.messages.core_values_text"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Services Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.about_section"><br></span>
            <h2 x-text="translations.messages.about"></h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo url('/'); ?>/img/about.webp" alt="About Infinity" class="img-fluid" loading="lazy">
                        <!-- <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox pulsating-play-btn"></a> -->
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <p x-text="translations.messages.about_description"></p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_1"></span></li>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_2"></span></li>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_3"></span></li>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_4"></span></li>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_5"></span></li>
                            <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.about_service_6"></span></li>
                        </ul>
                        <p x-text="translations.messages.about_description_2"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
    <!-- Stats Section -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                        <p x-text="translations.messages.years_experience"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
                        <p x-text="translations.messages.shipments_handled"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter"></span>
                        <p x-text="translations.messages.clients_active"></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                        <p x-text="translations.messages.countries_served"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Section -->
    <!-- WCU Section -->
    <!-- <section id="wcu" class="wcu section light-background">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/feature.webp" alt="Feature Infinity" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-7 py-5 py-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <h2 x-text="translations.messages.why_choose_us"></h2>
                    <h3 x-text="translations.messages.why_choose_subtitle"></h3>
                    <p x-text="translations.messages.why_choose_description"></p>
                    <div class="row g-3">
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="wcu-items p-3">
                                <div class="wcu-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/GLOBAL.webp" alt="GLOBAL" loading="lazy"/>
                                    <h4 x-text="translations.messages.global_reach"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="wcu-items p-3">
                                <div class="wcu-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/END-TO-END.webp" alt="END-TO-END" loading="lazy"/>
                                    <h4 x-text="translations.messages.end_to_end_service"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="wcu-items p-3">
                                <div class="wcu-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/24-HOUR.webp" alt="24-HOUR" loading="lazy"/>
                                    <h4 x-text="translations.messages.hour_support"></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="wcu-items p-3">
                                <div class="wcu-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/SPECIALIZED.webp" alt="SPECIALIZED" loading="lazy"/>
                                    <h4 x-text="translations.messages.specialized_handling"></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /WCU Section -->
    <!-- HIW Section -->
    <!-- <section id="hiw" class="hiw section">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-6 text-center mx-auto" data-aos="fade-up" data-aos-delay="0">
                    <h2 data-aos="fade-up" data-aos-delay="100" x-text="translations.messages.how_it_works"></h2>
                    <p data-aos="fade-up" data-aos-delay="200" x-text="translations.messages.how_it_works_description"></p>
                </div>
            </div>
            <div class="row g-md-5">
                <div class="col-md-6 col-lg-3">
                    <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative" data-aos="fade-up" data-aos-delay="0">
                        <div data-aos="fade-right" data-aos-delay="300"><img class="arch-line" src="<?php echo url('/'); ?>/img/arch-line.svg" alt="Arch Line"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                        <div>
                            <h3 x-text="translations.messages.step_1_title"></h3>
                            <p x-text="translations.messages.step_1_description"></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <div data-aos="fade-right" data-aos-delay="700"><img class="arch-line reverse" src="<?php echo url('/'); ?>/img/arch-line-reverse.svg" alt="Arch Line Reverse"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                        <h3 x-text="translations.messages.step_2_title"></h3>
                        <p x-text="translations.messages.step_2_description"></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                    <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <div data-aos="fade-right" data-aos-delay="1100"><img class="arch-line" src="<?php echo url('/'); ?>/img/arch-line.svg" alt="Arch Line"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                        <h3 x-text="translations.messages.step_3_title"></h3>
                        <p x-text="translations.messages.step_3_description"></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                    <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                        <div>
                            <h3 x-text="translations.messages.step_4_title"></h3>
                            <p x-text="translations.messages.step_4_description"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /HIW Section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.services_section"></span>
            <h2 x-text="translations.messages.services"></h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/NVOCC.webp" alt="NVOCC" loading="lazy">
                        </div>
                        <a href="/nvocc" class="stretched-link">
                            <h3 x-text="translations.messages.nvocc"></h3>
                        </a>
                        <p x-text="translations.messages.nvocc_tagline"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/FREIGHT FORWARDING.webp" alt="FREIGHT FORWARDING" loading="lazy">
                        </div>
                        <a href="/freight-forwarding" class="stretched-link">
                            <h3 x-text="translations.messages.freight_forwarding"></h3>
                        </a>
                        <p x-text="translations.messages.freight_forwarding_tagline"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/DOMESTIC FORWARDING.webp" alt="DOMESTIC FORWARDING" loading="lazy">
                        </div>
                        <a href="/domestic-forwarding" class="stretched-link">
                            <h3 x-text="translations.messages.domestic_forwarding"></h3>
                        </a>
                        <p x-text="translations.messages.domestic_forwarding_tagline"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/FLEXITANK FLEXIBAG.webp" alt="FLEXITANK FLEXIBAG" loading="lazy">
                        </div>
                        <a href="/flexitank-flexibag" class="stretched-link">
                            <h3 x-text="translations.messages.flexitank_flexibag"></h3>
                        </a>
                        <p x-text="translations.messages.flexitank_flexibag_tagline"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/PROJECT LOGISTICS.webp" alt="PROJECT LOGISTICS" loading="lazy">
                        </div>
                        <a href="/project-logistics" class="stretched-link">
                            <h3 x-text="translations.messages.project_logistics"></h3>
                        </a>
                        <p x-text="translations.messages.project_logistics_tagline"></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/CUSTOMS CLEARANCE.webp" alt="CUSTOMS CLEARANCE" loading="lazy">
                        </div>
                        <a href="/customs-clearance" class="stretched-link">
                            <h3 x-text="translations.messages.customs_clearance"></h3>
                        </a>
                        <p x-text="translations.messages.customs_clearance_tagline"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->
    <!-- Solutions Section -->
    <!-- <section id="solutions" class="solutions section">
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#solutions-tab-1">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP.webp" alt="SHIP" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP-A.webp" alt="SHIP-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block" x-text="translations.messages.ocean_freight"></h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-2">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE.webp" alt="PLANE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE-A.webp" alt="PLANE-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block" x-text="translations.messages.air_freight"></h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-3">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK.webp" alt="TRUCK" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK-A.webp" alt="TRUCK-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block" x-text="translations.messages.road_freight"></h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-4">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE.webp" alt="WAREHOUSE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE-A.webp" alt="WAREHOUSE-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block" x-text="translations.messages.warehouse_services"></h4>
                    </a>
                </li>
            </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="solutions-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 x-text="translations.messages.ocean_freight"></h3>
                            <p x-text="translations.messages.ocean_freight_description"></p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.fcl"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.lcl"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.reefer_container"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.iso_tank"></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-1.webp" alt="Ocean Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 x-text="translations.messages.air_freight"></h3>
                            <p x-text="translations.messages.air_freight_description"></p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.domestic"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.export_import"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.consolidation"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.full_charter"></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-2.webp" alt="Air Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 x-text="translations.messages.road_freight"></h3>
                            <p x-text="translations.messages.road_freight_description"></p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.ftl"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.ltl"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.haulage"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.contract_carriage"></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-3.webp" alt="Road Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3 x-text="translations.messages.warehouse_services"></h3>
                            <p x-text="translations.messages.warehouse_services_description"></p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.warehouse_management"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.modular_storage"></span></li>
                                <li><i class="bi bi-check2-all"></i> <span x-text="translations.messages.integrated_warehouse"></span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-4.webp" alt="Warehouse" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Solutions Section -->
    <!-- News Section -->
    <!-- <section id="news" class="news section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span>Our News</span>
            <h2>News</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo url('/'); ?>/img/news/news-1.jpg" alt="">
                        <div class="position-absolute primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="secondary" style="padding: 30px;">
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo url('/'); ?>/img/news/news-2.jpg" alt="">
                        <div class="position-absolute primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">02</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="secondary" style="padding: 30px;">
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /News Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3 x-text="translations.messages.cta_title"></h3>
                        <p x-text="translations.messages.cta_description"></p>
                        <a class="cta-btn" href="/contact" x-text="translations.messages.get_quote"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Call To Action Section -->
    <!-- Projects Section -->
    <!-- <section id="projects" class="projects section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.projects_section"></span>
            <h2 x-text="translations.messages.projects_title"></h2>
        </div>
        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="projects-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active" x-text="translations.messages.all"></li>
                    <li data-filter=".filter-nvocc" x-text="translations.messages.nvocc"></li>
                    <li data-filter=".filter-freight-forwarding" x-text="translations.messages.freight_forwarding"></li>
                    <li data-filter=".filter-domestic-forwarding" x-text="translations.messages.domestic_forwarding"></li>
                    <li data-filter=".filter-flexitank-flexibag" x-text="translations.messages.flexitank_flexibag"></li>
                    <li data-filter=".filter-project-logistics" x-text="translations.messages.project_logistics"></li>
                    <li data-filter=".filter-customs-clearance" x-text="translations.messages.customs_clearance"></li>
                </ul>
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-nvocc">
                        <img src="<?php echo url('/'); ?>/img/projects/NVOCC1.webp" class="img-fluid" alt="NVOCC 1">
                        <div class="projects-info">
                            <h4>NVOCC 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/NVOCC1.webp" data-gallery="projects-gallery-nvocc" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/nvocc" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-freight-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING1.webp" class="img-fluid" alt="FREIGHT FORWARDING 1">
                        <div class="projects-info">
                            <h4>FREIGHT FORWARDING 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING1.webp" data-gallery="projects-gallery-freight-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/freight-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-domestic-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING1.webp" class="img-fluid" alt="DOMESTIC FORWARDING 1">
                        <div class="projects-info">
                            <h4>DOMESTIC FORWARDING 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING1.webp" data-gallery="projects-gallery-domestic-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/domestic-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-flexitank-flexibag">
                        <img src="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG1.webp" class="img-fluid" alt="FLEXITANK FLEXIBAG 1">
                        <div class="projects-info">
                            <h4>FLEXITANK FLEXIBAG 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG1.webp" data-gallery="projects-gallery-flexitank-flexibag" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/flexitank-flexibag" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-project-logistics">
                        <img src="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS1.webp" class="img-fluid" alt="PROJECT LOGISTICS 1">
                        <div class="projects-info">
                            <h4>PROJECT LOGISTICS 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS1.webp" data-gallery="projects-gallery-project-logistics" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/project-logistics" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-customs-clearance">
                        <img src="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE1.webp" class="img-fluid" alt="CUSTOMS CLEARANCE 1">
                        <div class="projects-info">
                            <h4>CUSTOMS CLEARANCE 1</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE1.webp" data-gallery="projects-gallery-customs-clearance" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/customs-clearance" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-nvocc">
                        <img src="<?php echo url('/'); ?>/img/projects/NVOCC2.webp" class="img-fluid" alt="NVOCC 2">
                        <div class="projects-info">
                            <h4>NVOCC 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/NVOCC2.webp" data-gallery="projects-gallery-nvocc" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/nvocc" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-freight-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING2.webp" class="img-fluid" alt="FREIGHT FORWARDING 2">
                        <div class="projects-info">
                            <h4>FREIGHT FORWARDING 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING2.webp" data-gallery="projects-gallery-freight-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/freight-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-domestic-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING2.webp" class="img-fluid" alt="DOMESTIC FORWARDING 2">
                        <div class="projects-info">
                            <h4>DOMESTIC FORWARDING 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING2.webp" data-gallery="projects-gallery-domestic-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/domestic-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-flexitank-flexibag">
                        <img src="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG2.webp" class="img-fluid" alt="FLEXITANK FLEXIBAG 2">
                        <div class="projects-info">
                            <h4>FLEXITANK FLEXIBAG 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG2.webp" data-gallery="projects-gallery-flexitank-flexibag" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/flexitank-flexibag" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-project-logistics">
                        <img src="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS2.webp" class="img-fluid" alt="PROJECT LOGISTICS 2">
                        <div class="projects-info">
                            <h4>PROJECT LOGISTICS 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS2.webp" data-gallery="projects-gallery-project-logistics" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/project-logistics" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-customs-clearance">
                        <img src="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE2.webp" class="img-fluid" alt="CUSTOMS CLEARANCE 2">
                        <div class="projects-info">
                            <h4>CUSTOMS CLEARANCE 2</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE2.webp" data-gallery="projects-gallery-customs-clearance" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/customs-clearance" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-nvocc">
                        <img src="<?php echo url('/'); ?>/img/projects/NVOCC3.webp" class="img-fluid" alt="NVOCC 3">
                        <div class="projects-info">
                            <h4>NVOCC 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/NVOCC3.webp" data-gallery="projects-gallery-nvocc" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/nvocc" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-freight-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING3.webp" class="img-fluid" alt="FREIGHT FORWARDING 1">
                        <div class="projects-info">
                            <h4>FREIGHT FORWARDING 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FREIGHT FORWARDING3.webp" data-gallery="projects-gallery-freight-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/freight-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-domestic-forwarding">
                        <img src="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING3.webp" class="img-fluid" alt="DOMESTIC FORWARDING 3">
                        <div class="projects-info">
                            <h4>DOMESTIC FORWARDING 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/DOMESTIC FORWARDING3.webp" data-gallery="projects-gallery-domestic-forwarding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/domestic-forwarding" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-flexitank-flexibag">
                        <img src="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG3.webp" class="img-fluid" alt="FLEXITANK FLEXIBAG 3">
                        <div class="projects-info">
                            <h4>FLEXITANK FLEXIBAG 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/FLEXITANK FLEXIBAG3.webp" data-gallery="projects-gallery-flexitank-flexibag" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/flexitank-flexibag" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-project-logistics">
                        <img src="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS3.webp" class="img-fluid" alt="PROJECT LOGISTICS 3">
                        <div class="projects-info">
                            <h4>PROJECT LOGISTICS 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/PROJECT LOGISTICS3.webp" data-gallery="projects-gallery-project-logistics" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/project-logistics" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 projects-item isotope-item filter-customs-clearance">
                        <img src="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE3.webp" class="img-fluid" alt="CUSTOMS CLEARANCE 3">
                        <div class="projects-info">
                            <h4>CUSTOMS CLEARANCE 3</h4>
                            <a href="<?php echo url('/'); ?>/img/projects/CUSTOMS CLEARANCE3.webp" data-gallery="projects-gallery-customs-clearance" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="/customs-clearance" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /Projects Section -->
    <!-- Team Section -->
    <section id="team" class="team section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.management_section"></span>
            <h2 x-text="translations.messages.management_title"></h2>
        </div>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="<?php echo url('/'); ?>/img/team.webp" class="img-fluid" alt="Member Infinity" loading="lazy"></div>
                        <div class="member-info">
                            <h3>Ayu Wulan Maya Sary</h3>
                            <span x-text="translations.messages.director"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Team Section -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.clients_section"></span>
            <h2 x-text="translations.messages.clients_title"></h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
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
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                            },
                            "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                            },
                            "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                            },
                            "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-1.webp" class="img-fluid" alt="AJINOMOTO INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-2.webp" class="img-fluid" alt="WILMAR CAHAYA INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-3.webp" class="img-fluid" alt="GUDANG GARAM" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-4.webp" class="img-fluid" alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-5.webp" class="img-fluid" alt="INDO OIL PERKASA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-6.webp" class="img-fluid" alt="GUNTNER INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-7.webp" class="img-fluid" alt="KEMIRA CHEMICALS INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-8.webp" class="img-fluid" alt="SAHATI HAMPARAN TANGGUH" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-9.webp" class="img-fluid" alt="DUNIA KIMIA JAYA" loading="lazy"></div>
                </div>
            </div>
            <div class="swiper init-swiper" dir="rtl">
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
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        },
                        "rtl": true
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-10.webp" class="img-fluid" alt="LOKA REFRACTORIES WIRA JATIM" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-11.webp" class="img-fluid" alt="AGROMINA WICAKSANA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-12.webp" class="img-fluid" alt="OMYA INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-13.webp" class="img-fluid" alt="DELTA HIJAU ABADI" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-14.webp" class="img-fluid" alt="BONANZA MEGAH" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-15.webp" class="img-fluid" alt="INDOKEMIKA JAYATAMA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-16.webp" class="img-fluid" alt="NYLEX INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-17.webp" class="img-fluid" alt="PROTAS MALANG INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-18.webp" class="img-fluid" alt="KIRANA MEGATARA" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Clients Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.contact_section"></span>
            <h2 x-text="translations.messages.contact"></h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.our_address"></h3>
                                <p x-text="translations.messages.head_office_address"></p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.call_us"></h3>
                                <p>(+62)31-5492926</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.email_us"></h3>
                                <p>cssurabaya@infinity-sby.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.working_hours"></h3>
                                <p x-text="translations.messages.monday_friday"></p>
                                <p x-text="translations.messages.saturday"></p>
                                <p x-text="translations.messages.sunday"></p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus"
                            title="Google Maps" frameborder="0" style="border:0; width: 100%; height: 330px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        @honeypot
                        <div class="row gy-4">
                            <h4 class="text-center" x-text="translations.messages.get_in_touch"></h4>
                            <p>
                                <strong x-text="translations.messages.contact_intro"></strong>
                                <span x-text="translations.messages.contact_description"></span>
                            </p>
                            <div class="col-md-12">
                                <input type="text" name="name" id="name-field" class="form-control" :placeholder="translations.messages.placeholder_name" required="" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email-field" class="form-control" :placeholder="translations.messages.placeholder_email" required="" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <textarea rows="10" name="message" id="message-field"  class="form-control" :placeholder="translations.messages.placeholder_message" required="" autocomplete="off"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" name="subscribe" id="subscribe-checkbox" class="form-check-input" value="yes">
                                    <label for="subscribe-checkbox" class="form-check-label">
                                        <strong x-text="translations.messages.join_newsletter"></strong>
                                        <span x-text="translations.messages.newsletter_description"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}" data-size="flexible" data-theme="light"></div>
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            <input type="hidden" name="turnstile_token" id="turnstile_token">
                            <div class="col-md-12">
                                <button type="submit" id="submit-button"><i class="bi bi-send-fill"></i><span x-text="translations.messages.send_message"></span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

    <script src="https://www.googletagmanager.com/gtag/js?id={{ env('ANALYTICS_KEY') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}&badge=bottomleft" defer></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('ANALYTICS_KEY') }}');
    </script>

    <script>
        document.getElementById("submit-button").addEventListener("click", function (e) {
            e.preventDefault();

            const form = document.getElementById("contact-form");
            const name = document.getElementById("name-field").value.trim();
            const email = document.getElementById("email-field").value.trim();
            const message = document.getElementById("message-field").value.trim();

            if (!name || !email || !message) {
                Swal.fire({
                    icon: "warning",
                    title: "Incomplete Form",
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }

            grecaptcha.ready(function () {
                grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", { action: "submit" }).then(function (token) {
                    document.getElementById("recaptcha_token").value = token;

                    const turnstileToken = turnstile.getResponse();
                    document.getElementById("turnstile_token").value = turnstileToken;

                    const formData = new FormData(form);

                    Swal.fire({
                        title: 'Loading',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    fetch("{{ route('send.email') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(async response => {
                        const data = await response.json().catch(() => ({}));

                        if (response.ok) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: data.message || "Message sent successfully.",
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                            form.reset();
                        } else {
                            let errorText = "Message not sent.";

                            if (data.errors) {
                                errorText = Object.values(data.errors).flat().join("\n");
                            } else if (data.message) {
                                errorText = data.message;
                            }

                            Swal.fire({
                                icon: "error",
                                title: "Failed!",
                                text: errorText,
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Unable to connect to the server.",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    });
                });
            });
        });
    </script>
</main>
@endsection('content')