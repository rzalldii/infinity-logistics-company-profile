@extends('master')
@section('title')
{{ __('messages.about_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Penyedia logistik terpercaya dengan 20 tahun pengalaman melayani 40 negara. Layanan NVOCC, freight forwarding internasional & domestik, flexitank, logistik proyek, dan kepabeanan. Kantor pusat Malaysia, operasional di Surabaya dan Asia Tenggara dengan dukungan 24/7."/>
<meta name="keywords" content="tentang perusahaan logistik, tentang freight forwarder, profil perusahaan logistik, NVOCC Malaysia, NVOCC Surabaya, freight forwarding internasional, freight forwarding domestik, flexitank Indonesia, flexibag Indonesia, logistik proyek, kepabeanan Indonesia, bea cukai, perusahaan logistik Surabaya, perusahaan logistik Malaysia, perusahaan logistik Asia Tenggara, freight laut, freight udara, freight darat, ekspor impor, LCL, FCL, door-to-door, agen pelayaran, penyedia 3PL, pergudangan, solusi supply chain, jangkauan global, layanan end-to-end, dukungan 24 jam, 20 tahun pengalaman, 350 klien aktif, 40 negara dilayani"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.about_section"><br></span>
            <h1 x-text="translations.messages.about"></h1>
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
    <!-- Why Choose Us Section -->
    <section id="why-choose-us" class="why-choose-us section light-background">
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
                            <div class="why-choose-us-items p-3">
                                <div class="why-choose-us-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/GLOBAL.webp" alt="GLOBAL" loading="lazy"/>
                                    <p x-text="translations.messages.global_reach"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="why-choose-us-items p-3">
                                <div class="why-choose-us-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/END-TO-END.webp" alt="END-TO-END" loading="lazy"/>
                                    <p x-text="translations.messages.end_to_end_service"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="why-choose-us-items p-3">
                                <div class="why-choose-us-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/24-HOUR.webp" alt="24-HOUR" loading="lazy"/>
                                    <p x-text="translations.messages.hour_support"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="why-choose-us-items p-3">
                                <div class="why-choose-us-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/SPECIALIZED.webp" alt="SPECIALIZED" loading="lazy"/>
                                    <p x-text="translations.messages.specialized_handling"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Why Choose Us Section -->
    <!-- How It Works Section -->
    <section id="how-it-works" class="how-it-works section">
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
    </section>
    <!-- /How It Works Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h2 x-text="translations.messages.cta_title"></h2>
                        <p x-text="translations.messages.cta_description"></p>
                        <a class="cta-btn" href="{{ route('contact') }}" x-text="translations.messages.get_quote"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Call To Action Section -->
</main>
@endsection('content')