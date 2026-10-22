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
                    <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                        <h1 x-text="translations.messages.hero_title">{{ __('messages.hero_title') }}</h1>
                        <p x-text="translations.messages.hero_subtitle">{{ __('messages.hero_subtitle') }}</p>
                        <div class="d-flex justify-content-center justify-content-lg-start">
                            <a href="/#about" class="btn-get-started" x-text="translations.messages.get_started">{{ __('messages.get_started') }}</a>
                            <a href="https://www.youtube.com/watch?v=zx4s5h1Fats" class="glightbox btn-watch-video d-flex align-items-center" aria-label="Watch Introduction Video"><i class="bi bi-play-circle" aria-hidden="true"></i><span x-text="translations.messages.watch_video">{{ __('messages.watch_video') }}</span></a>
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
        @include('sections.partials.about')
        @include('sections.partials.stats', ['showButton' => true])
        @include('sections.partials.services', ['lightBackground' => true, 'showButton' => true])
        @include('sections.partials.cta')
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
                                <img src="{{ asset('img/clients/clients-1.webp') }}" class="img-fluid" alt="MEGA HARAPAN SUKSES" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-2.webp') }}" class="img-fluid" alt="AJINOMOTO INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-3.webp') }}" class="img-fluid" alt="AGROMINA WICAKSANA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-4.webp') }}" class="img-fluid" alt="ANTAMAS" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-5.webp') }}" class="img-fluid" alt="ASAHIMAS FLAT GLASS" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-6.webp') }}" class="img-fluid" alt="BONANZA MEGAH" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-7.webp') }}" class="img-fluid" alt="CITRA NUTRINDO LANGGENG" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-8.webp') }}" class="img-fluid" alt="COMEXTRA MAJORA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-9.webp') }}" class="img-fluid" alt="DELTA HIJAU ABADI" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-10.webp') }}" class="img-fluid" alt="DUNIA KIMIA JAYA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-11.webp') }}" class="img-fluid" alt="ECOOILS JAYA INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-12.webp') }}" class="img-fluid" alt="GAPURA MAS LESTARI" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-13.webp') }}" class="img-fluid" alt="GUDANG GARAM" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-14.webp') }}" class="img-fluid" alt="GUNTNER INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-15.webp') }}" class="img-fluid" alt="INDO OIL PERKASA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-16.webp') }}" class="img-fluid" alt="INDOKEMIKA JAYATAMA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-17.webp') }}" class="img-fluid" alt="KEMIRA CHEMICALS INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-18.webp') }}" class="img-fluid" alt="KIRANA MEGATARA" width="78" height="78">
                            </div>
                        </div>
                    </div>
                    <div class="marquee marquee-right w-100 d-flex align-items-center overflow-hidden">
                        <div class="marquee-content d-flex align-items-center">
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-36.webp') }}" class="img-fluid" alt="XINYI GLASS" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-35.webp') }}" class="img-fluid" alt="WILMAR CAHAYA INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-34.webp') }}" class="img-fluid" alt="TIGA RASA INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-33.webp') }}" class="img-fluid" alt="SURYA TRIMEGAH WISESA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-32.webp') }}" class="img-fluid" alt="SUMBER ANUGERAH UTAMA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-31.webp') }}" class="img-fluid" alt="SORINI AGRO ASIA CORPORINDO" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-30.webp') }}" class="img-fluid" alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-29.webp') }}" class="img-fluid" alt="SEMESTA AGRO TANI INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-28.webp') }}" class="img-fluid" alt="SAHATI HAMPARAN TANGGUH" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-27.webp') }}" class="img-fluid" alt="PUTERA RACKINDO SEJAHTERA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-26.webp') }}" class="img-fluid" alt="PROTAS MALANG INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-25.webp') }}" class="img-fluid" alt="PRIMA BERSAUDARA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-24.webp') }}" class="img-fluid" alt="OMYA INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-23.webp') }}" class="img-fluid" alt="NYLEX INDONESIA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-22.webp') }}" class="img-fluid" alt="MITRA FINEX ANTARNUSA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-21.webp') }}" class="img-fluid" alt="MEGA SURYA ERATAMA" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-20.webp') }}" class="img-fluid" alt="LOUISIANA FAR EAST" width="78" height="78">
                            </div>
                            <div class="marquee-tag hstack justify-content-center">
                                <img src="{{ asset('img/clients/clients-19.webp') }}" class="img-fluid" alt="LOKA REFRACTORIES WIRA JATIM" width="78" height="78">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Clients Section -->
        @include('sections.partials.contact')
    </main>
@endsection