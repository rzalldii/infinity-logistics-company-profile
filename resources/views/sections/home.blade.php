@extends('layouts.app')
@section('title', 'Infinity Logistics Indonesia')
@section('meta_description', __('messages.home_meta_description'))
@section('canonical', route('home'))
@push('preload')
    <link rel="preload" as="image" href="{{ asset('img/hero-img.webp') }}" type="image/webp" fetchpriority="high">
@endpush
@section('content')
    <main class="main" id="main-content">
        <!-- Hero Section -->
        <section id="hero" class="hero section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                        <h1 x-text="translations.messages.hero_title">{{ __('messages.hero_title') }}</h1>
                        <p x-text="translations.messages.hero_subtitle">{{ __('messages.hero_subtitle') }}</p>
                        <div class="d-flex">
                            <a href="/#about" class="btn-get-started" x-text="translations.messages.get_started">{{ __('messages.get_started') }}</a>
                            <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox btn-watch-video d-flex align-items-center" aria-label="Watch Introduction Video"><i class="bi bi-play-circle" aria-hidden="true"></i><span x-text="translations.messages.watch_video">{{ __('messages.watch_video') }}</span></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img">
                        <img src="{{ asset('img/hero-img.webp') }}" alt="Container Infinity" class="img-fluid animated" fetchpriority="high" width="800" height="752" />
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
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-eye icon" aria-hidden="true"></i></div>
                                <h2 x-text="translations.messages.vision">{{ __('messages.vision') }}</h2>
                            </div>
                            <p x-text="translations.messages.vision_text">{{ __('messages.vision_text') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative text-center">
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-bullseye icon" aria-hidden="true"></i></div>
                                <h2 x-text="translations.messages.mission">{{ __('messages.mission') }}</h2>
                            </div>
                            <p x-text="translations.messages.mission_text">{{ __('messages.mission_text') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative text-center">
                            <div class="icon-title">
                                <div class="icon"><i class="bi bi-gem icon" aria-hidden="true"></i></div>
                                <h2 x-text="translations.messages.core_values">{{ __('messages.core_values') }}</h2>
                            </div>
                            <p x-text="translations.messages.core_values_text">{{ __('messages.core_values_text') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Featured Services Section -->
        <!-- About Section -->
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.about_section">{{ __('messages.about_section') }}<br></span>
                <h2 x-text="translations.messages.about">{{ __('messages.about') }}</h2>
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="row gy-4">
                        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('img/about.webp') }}" alt="About PT Infinity Logistics Indonesia" class="img-fluid" loading="lazy" width="800" height="565">
                        </div>
                        <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                            <p x-text="translations.messages.about_description">{{ __('messages.about_description') }}</p>
                            <ul>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_1">{{ __('messages.about_service_1') }}</span></li>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_2">{{ __('messages.about_service_2') }}</span></li>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_3">{{ __('messages.about_service_3') }}</span></li>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_4">{{ __('messages.about_service_4') }}</span></li>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_5">{{ __('messages.about_service_5') }}</span></li>
                                <li><i class="bi bi-check2-all" aria-hidden="true"></i> <span x-text="translations.messages.about_service_6">{{ __('messages.about_service_6') }}</span></li>
                            </ul>
                            <p x-text="translations.messages.about_description_2">{{ __('messages.about_description_2') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->
        <!-- Stats Section -->
        @include('layouts.partials.stats', ['showButton' => true])
        <!-- /Stats Section -->
        <!-- Services Section -->
        <section id="services" class="services section light-background">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.services_section">{{ __('messages.services_section') }}</span>
                <h2 x-text="translations.messages.services">{{ __('messages.services') }}</h2>
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
            <div class="button-container">
                <a href="{{ route('services') }}" class="more-details-btn" x-text="translations.messages.read_more_services">{{ __('messages.read_more_services') }}</a>
            </div>
        </section>
        <!-- /Services Section -->
        <!-- Call To Action Section -->
        @include('layouts.partials.cta')
        <!-- /Call To Action Section -->
        <!-- Team Section -->
        <section id="team" class="team section light-background">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.management_section">{{ __('messages.management_section') }}</span>
                <h2 x-text="translations.messages.management_title">{{ __('messages.management_title') }}</h2>
            </div>
            <div class="container">
                <div class="row gy-5 justify-content-center">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="pic"><img src="{{ asset('img/team.webp') }}" class="img-fluid" alt="Member Infinity - Ayu Wulan Maya Sary" loading="lazy" width="400" height="400"></div>
                            <div class="member-info">
                                <h3>Ayu Wulan Maya Sary</h3>
                                <span x-text="translations.messages.director">{{ __('messages.director') }}</span>
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
                <span aria-hidden="true" x-text="translations.messages.clients_section">{{ __('messages.clients_section') }}</span>
                <h2 x-text="translations.messages.clients_title">{{ __('messages.clients_title') }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="d-flex flex-column">
                    <div class="marquee marquee-left w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-1.webp') }}" class="img-fluid" alt="MEGA HARAPAN SUKSES" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-2.webp') }}" class="img-fluid" alt="AJINOMOTO INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-3.webp') }}" class="img-fluid" alt="AGROMINA WICAKSANA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-4.webp') }}" class="img-fluid" alt="ANTAMAS" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-5.webp') }}" class="img-fluid" alt="ASAHIMAS FLAT GLASS" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-6.webp') }}" class="img-fluid" alt="BONANZA MEGAH" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-7.webp') }}" class="img-fluid" alt="CITRA NUTRINDO LANGGENG" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-8.webp') }}" class="img-fluid" alt="COMEXTRA MAJORA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-9.webp') }}" class="img-fluid" alt="DELTA HIJAU ABADI" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-10.webp') }}" class="img-fluid" alt="DUNIA KIMIA JAYA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-11.webp') }}" class="img-fluid" alt="ECOOILS JAYA INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-12.webp') }}" class="img-fluid" alt="GAPURA MAS LESTARI" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-13.webp') }}" class="img-fluid" alt="GUDANG GARAM" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-14.webp') }}" class="img-fluid" alt="GUNTNER INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-15.webp') }}" class="img-fluid" alt="INDO OIL PERKASA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-16.webp') }}" class="img-fluid" alt="INDOKEMIKA JAYATAMA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-17.webp') }}" class="img-fluid" alt="KEMIRA CHEMICALS INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-18.webp') }}" class="img-fluid" alt="KIRANA MEGATARA" loading="lazy" width="78" height="78">
                            </div>
                        </div>
                    </div>
                    <div class="marquee marquee-right w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-19.webp') }}" class="img-fluid" alt="LOKA REFRACTORIES WIRA JATIM" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-20.webp') }}" class="img-fluid" alt="LOUISIANA FAR EAST" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-21.webp') }}" class="img-fluid" alt="MEGA SURYA ERATAMA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-22.webp') }}" class="img-fluid" alt="MITRA FINEX ANTARNUSA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-23.webp') }}" class="img-fluid" alt="NYLEX INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-24.webp') }}" class="img-fluid" alt="OMYA INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-25.webp') }}" class="img-fluid" alt="PRIMA BERSAUDARA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-26.webp') }}" class="img-fluid" alt="PROTAS MALANG INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-27.webp') }}" class="img-fluid" alt="PUTERA RACKINDO SEJAHTERA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-28.webp') }}" class="img-fluid" alt="SAHATI HAMPARAN TANGGUH" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-29.webp') }}" class="img-fluid" alt="SEMESTA AGRO TANI INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-30.webp') }}" class="img-fluid" alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-31.webp') }}" class="img-fluid" alt="SORINI AGRO ASIA CORPORINDO" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-32.webp') }}" class="img-fluid" alt="SUMBER ANUGERAH UTAMA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-33.webp') }}" class="img-fluid" alt="SURYA TRIMEGAH WISESA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-34.webp') }}" class="img-fluid" alt="TIGA RASA INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-35.webp') }}" class="img-fluid" alt="WILMAR CAHAYA INDONESIA" loading="lazy" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-36.webp') }}" class="img-fluid" alt="XINYI GLASS" loading="lazy" width="78" height="78">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Clients Section -->
        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.contact_section">{{ __('messages.contact_section') }}</span>
                <h2 x-text="translations.messages.contact">{{ __('messages.contact') }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.our_address">{{ __('messages.our_address') }}</h2>
                                    <p x-text="translations.messages.head_office_address">{{ __('messages.head_office_address') }}</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.call_us">{{ __('messages.call_us') }}</h2>
                                    <p><a href="tel:+62315492926" class="text-reset">+6231 549 2926</a></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.email_us">{{ __('messages.email_us') }}</h2>
                                    <p><a href="mailto:cssurabaya@infinity-sby.com" class="text-reset">cssurabaya@infinity-sby.com</a></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.working_hours">{{ __('messages.working_hours') }}</h2>
                                    <p x-text="translations.messages.monday_friday">{{ __('messages.monday_friday') }}</p>
                                    <p x-text="translations.messages.saturday">{{ __('messages.saturday') }}</p>
                                    <p x-text="translations.messages.sunday">{{ __('messages.sunday') }}</p>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus" title="Google Maps - PT Infinity Logistics Indonesia" frameborder="0" style="border:0; width: 100%; height: 245px;" width="600" height="245" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        @include('layouts.partials.contact-form')
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
@push('script')
    @include('layouts.partials.contact-script')
@endpush