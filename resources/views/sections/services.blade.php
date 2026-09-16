@extends('layouts.app')
@section('title', __('messages.services_title'))
@section('meta_description', __('messages.services_meta_description'))
@section('canonical', route('services'))
@section('content')
    <main class="main" id="main-content">
        <!-- Services Section -->
        <section id="services" class="services section">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.services_section">{{ __('messages.services_section') }}</span>
                <h1 x-text="translations.messages.services">{{ __('messages.services') }}</h1>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/NVOCC.webp') }}" alt="NVOCC Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.nvocc') }}" class="stretched-link">
                                <h3 x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</h3>
                            </a>
                            <p x-text="translations.messages.nvocc_tagline">{{ __('messages.nvocc_tagline') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/FREIGHT FORWARDING.webp') }}" alt="FREIGHT FORWARDING Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.freight-forwarding') }}" class="stretched-link">
                                <h3 x-text="translations.messages.freight_forwarding">{{ __('messages.freight_forwarding') }}</h3>
                            </a>
                            <p x-text="translations.messages.freight_forwarding_tagline">{{ __('messages.freight_forwarding_tagline') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/DOMESTIC FORWARDING.webp') }}" alt="DOMESTIC FORWARDING Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.domestic-forwarding') }}" class="stretched-link">
                                <h3 x-text="translations.messages.domestic_forwarding">{{ __('messages.domestic_forwarding') }}</h3>
                            </a>
                            <p x-text="translations.messages.domestic_forwarding_tagline">{{ __('messages.domestic_forwarding_tagline') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/FLEXITANK FLEXIBAG.webp') }}" alt="FLEXITANK FLEXIBAG Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.flexitank-flexibag') }}" class="stretched-link">
                                <h3 x-text="translations.messages.flexitank_flexibag">{{ __('messages.flexitank_flexibag') }}</h3>
                            </a>
                            <p x-text="translations.messages.flexitank_flexibag_tagline">{{ __('messages.flexitank_flexibag_tagline') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/PROJECT LOGISTICS.webp') }}" alt="PROJECT LOGISTICS Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.project-logistics') }}" class="stretched-link">
                                <h3 x-text="translations.messages.project_logistics">{{ __('messages.project_logistics') }}</h3>
                            </a>
                            <p x-text="translations.messages.project_logistics_tagline">{{ __('messages.project_logistics_tagline') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <img src="{{ asset('img/icons/CUSTOMS CLEARANCE.webp') }}" alt="CUSTOMS CLEARANCE Icon" loading="lazy" width="64" height="64">
                            </div>
                            <a href="{{ route('services.customs-clearance') }}" class="stretched-link">
                                <h3 x-text="translations.messages.customs_clearance">{{ __('messages.customs_clearance') }}</h3>
                            </a>
                            <p x-text="translations.messages.customs_clearance_tagline">{{ __('messages.customs_clearance_tagline') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Services Section -->
        <!-- Solutions Section -->
        <section id="solutions" class="solutions section light-background">
            <div class="container" data-aos="fade-up">
                <ul class="nav nav-tabs row d-flex" data-aos="fade-up" data-aos-delay="100" role="tablist">
                    <li class="nav-item col-3" role="presentation">
                        <button class="nav-link active show w-100" data-bs-toggle="tab" data-bs-target="#solutions-tab-1"
                            type="button" role="tab" aria-selected="true" aria-controls="solutions-tab-1">
                            <div class="icon">
                                <img src="{{ asset('img/icons/SHIP.webp') }}" alt="Ocean freight active icon" class="img-active" loading="lazy" width="64" height="64">
                                <img src="{{ asset('img/icons/SHIP-A.webp') }}" alt="Ocean freight inactive icon" class="img-inactive" loading="lazy" width="64" height="64">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.ocean_freight">{{ __('messages.ocean_freight') }}</span>
                        </button>
                    </li>
                    <li class="nav-item col-3" role="presentation">
                        <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#solutions-tab-2"
                            type="button" role="tab" aria-selected="false" aria-controls="solutions-tab-2">
                            <div class="icon">
                                <img src="{{ asset('img/icons/PLANE.webp') }}" alt="Air freight active icon" class="img-active" loading="lazy" width="64" height="64">
                                <img src="{{ asset('img/icons/PLANE-A.webp') }}" alt="Air freight inactive icon" class="img-inactive" loading="lazy" width="64" height="64">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.air_freight">{{ __('messages.air_freight') }}</span>
                        </button>
                    </li>
                    <li class="nav-item col-3" role="presentation">
                        <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#solutions-tab-3"
                            type="button" role="tab" aria-selected="false" aria-controls="solutions-tab-3">
                            <div class="icon">
                                <img src="{{ asset('img/icons/TRUCK.webp') }}" alt="Road freight active icon" class="img-active" loading="lazy" width="64" height="64">
                                <img src="{{ asset('img/icons/TRUCK-A.webp') }}" alt="Road freight inactive icon" class="img-inactive" loading="lazy" width="64" height="64">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.road_freight">{{ __('messages.road_freight') }}</span>
                        </button>
                    </li>
                    <li class="nav-item col-3" role="presentation">
                        <button class="nav-link w-100" data-bs-toggle="tab" data-bs-target="#solutions-tab-4"
                            type="button" role="tab" aria-selected="false" aria-controls="solutions-tab-4">
                            <div class="icon">
                                <img src="{{ asset('img/icons/WAREHOUSE.webp') }}" alt="Warehouse active icon" class="img-active" loading="lazy" width="64" height="64">
                                <img src="{{ asset('img/icons/WAREHOUSE-A.webp') }}" alt="Warehouse inactive icon" class="img-inactive" loading="lazy" width="64" height="64">
                            </div>
                            <span class="d-none d-lg-block" x-text="translations.messages.warehouse_services">{{ __('messages.warehouse_services') }}</span>
                        </button>
                    </li>
                </ul>
                <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                    <div class="tab-pane fade active show" id="solutions-tab-1" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.ocean_freight">{{ __('messages.ocean_freight') }}</h2>
                                <p x-text="translations.messages.ocean_freight_description">{{ __('messages.ocean_freight_description') }}</p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i>
                                        <span x-text="translations.messages.fcl">{{ __('messages.fcl') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.lcl">{{ __('messages.lcl') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.reefer_container">{{ __('messages.reefer_container') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.iso_tank">{{ __('messages.iso_tank') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-1.webp') }}" alt="Ocean Freight Shipping Service" class="img-fluid" loading="lazy" width="800" height="600">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-2" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.air_freight">{{ __('messages.air_freight') }}</h2>
                                <p x-text="translations.messages.air_freight_description">{{ __('messages.air_freight_description') }}</p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.domestic">{{ __('messages.domestic') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.export_import">{{ __('messages.export_import') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.consolidation">{{ __('messages.consolidation') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.full_charter">{{ __('messages.full_charter') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-2.webp') }}" alt="Air Freight Service" class="img-fluid" loading="lazy" width="800" height="600">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-3" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.road_freight">{{ __('messages.road_freight') }}</h2>
                                <p x-text="translations.messages.road_freight_description">{{ __('messages.road_freight_description') }}</p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.ftl">{{ __('messages.ftl') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.ltl">{{ __('messages.ltl') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.haulage">{{ __('messages.haulage') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.contract_carriage">{{ __('messages.contract_carriage') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-3.webp') }}" alt="Road Freight Trucking Service" class="img-fluid" loading="lazy" width="800" height="600">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="solutions-tab-4" role="tabpanel" tabindex="0">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                                <h2 x-text="translations.messages.warehouse_services">{{ __('messages.warehouse_services') }}</h2>
                                <p x-text="translations.messages.warehouse_services_description">{{ __('messages.warehouse_services_description') }}</p>
                                <ul>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.warehouse_management">{{ __('messages.warehouse_management') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.modular_storage">{{ __('messages.modular_storage') }}</span>
                                    </li>
                                    <li>
                                        <i class="bi bi-check2-all" aria-hidden="true"></i> 
                                        <span x-text="translations.messages.integrated_warehouse">{{ __('messages.integrated_warehouse') }}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{ asset('img/services-4.webp') }}" alt="Warehouse Logistics Service" class="img-fluid" loading="lazy" width="800" height="600">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Solutions Section -->
        <!-- Call To Action Section -->
        @include('layouts.partials.cta')
        <!-- /Call To Action Section -->
    </main>
@endsection