@extends('master')
@section('title')
{{ __('messages.services_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Layanan logistik komprehensif: NVOCC, freight forwarding internasional & domestik, flexitank/flexibag, logistik proyek, kepabeanan, freight laut/udara/darat, dan pergudangan. Solusi door-to-door untuk FCL, LCL di Surabaya dan Asia Tenggara."/>
<meta name="keywords" content="layanan logistik, layanan freight forwarding, NVOCC, freight forwarding internasional, freight forwarding domestik, forwarding domestik, flexitank, flexibag, logistik proyek, kepabeanan, bea cukai, freight laut, ocean freight, freight udara, air freight, freight darat, road freight, pergudangan, warehouse services, FCL, LCL, full container load, less than container load, FTL, LTL, full truck load, less than truck load, reefer container, ISO tank, door-to-door, ekspor impor, consolidation, haulage, contract carriage, warehouse management, modular storage, integrated warehouse, layanan logistik Surabaya, freight forwarder Malaysia, freight forwarding Indonesia, NVOCC Indonesia, flexitank Indonesia, flexibag Indonesia, logistik Asia Tenggara, pengiriman laut, pengiriman udara, pengiriman darat, solusi supply chain, penyedia logistik, perusahaan forwarding, agen pelayaran"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.services_section"></span>
            <h1 x-text="translations.messages.services"></h1>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/NVOCC.webp" alt="NVOCC" loading="lazy">
                        </div>
                        <a href="/nvocc" class="stretched-link">
                            <h2 x-text="translations.messages.nvocc"></h2>
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
                            <h2 x-text="translations.messages.freight_forwarding"></h2>
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
                            <h2 x-text="translations.messages.domestic_forwarding"></h2>
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
                            <h2 x-text="translations.messages.flexitank_flexibag"></h2>
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
                            <h2 x-text="translations.messages.project_logistics"></h2>
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
                            <h2 x-text="translations.messages.customs_clearance"></h2>
                        </a>
                        <p x-text="translations.messages.customs_clearance_tagline"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->
    <!-- Solutions Section -->
    <section id="solutions" class="solutions section light-background">
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#solutions-tab-1">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP.webp" alt="SHIP" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP-A.webp" alt="SHIP-A" class="img-inactive" loading="lazy">
                        </div>
                        <span class="d-none d-lg-block" x-text="translations.messages.ocean_freight"></span>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-2">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE.webp" alt="PLANE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE-A.webp" alt="PLANE-A" class="img-inactive" loading="lazy">
                        </div>
                        <span class="d-none d-lg-block" x-text="translations.messages.air_freight"></span>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-3">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK.webp" alt="TRUCK" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK-A.webp" alt="TRUCK-A" class="img-inactive" loading="lazy">
                        </div>
                        <span class="d-none d-lg-block" x-text="translations.messages.road_freight"></span>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-4">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE.webp" alt="WAREHOUSE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE-A.webp" alt="WAREHOUSE-A" class="img-inactive" loading="lazy">
                        </div>
                        <span class="d-none d-lg-block" x-text="translations.messages.warehouse_services"></span>
                    </a>
                </li>
            </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="solutions-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h2 x-text="translations.messages.ocean_freight"></h2>
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
                            <h2 x-text="translations.messages.air_freight"></h2>
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
                            <h2 x-text="translations.messages.road_freight"></h2>
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
                            <h2 x-text="translations.messages.warehouse_services"></h2>
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
    </section>
    <!-- /Solutions Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h2 x-text="translations.messages.cta_title"></h2>
                        <p x-text="translations.messages.cta_description"></p>
                        <a class="cta-btn" href="/contact" x-text="translations.messages.get_quote"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Call To Action Section -->
</main>
@endsection('content')