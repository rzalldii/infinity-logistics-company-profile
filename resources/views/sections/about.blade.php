@extends('layouts.app')
@section('title', __('messages.about_title'))
@section('meta_description', __('messages.about_meta_description'))
@section('canonical', route('about'))
@section('content')
    <main class="main" id="main-content">
        @include('sections.partials.about', ['isH1' => true])
        @include('sections.partials.stats')
        <!-- Why Choose Us Section -->
        <section id="why-choose-us" class="why-choose-us section light-background">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-center">
                    <div class="col-lg-5 text-center text-lg-start mb-4 mb-lg-0">
                        <img src="{{ asset('img/feature.webp') }}" alt="Infinity Feature Logistics" class="img-fluid rounded" loading="lazy" width="600" height="750">
                    </div>
                    <div class="col-lg-7 py-2 py-lg-0">
                        <h2 x-text="translations.messages.why_choose_us">{{ __('messages.why_choose_us') }}</h2>
                        <h3 x-text="translations.messages.why_choose_subtitle">{{ __('messages.why_choose_subtitle') }}</h3>
                        <p x-text="translations.messages.why_choose_description">{{ __('messages.why_choose_description') }}</p>
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div class="why-choose-us-items p-3">
                                    <div class="why-choose-us-items-details py-4 px-3">
                                        <img class="align-self-center mb-3" src="{{ asset('img/icons/GLOBAL.webp') }}" alt="GLOBAL reach icon" loading="lazy" width="64" height="64" />
                                        <p x-text="translations.messages.global_reach">{{ __('messages.global_reach') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-choose-us-items p-3">
                                    <div class="why-choose-us-items-details py-4 px-3">
                                        <img class="align-self-center mb-3" src="{{ asset('img/icons/END-TO-END.webp') }}" alt="END-TO-END logistics icon" loading="lazy" width="64" height="64" />
                                        <p x-text="translations.messages.end_to_end_service">{{ __('messages.end_to_end_service') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-choose-us-items p-3">
                                    <div class="why-choose-us-items-details py-4 px-3">
                                        <img class="align-self-center mb-3" src="{{ asset('img/icons/24-HOUR.webp') }}" alt="24-HOUR support icon" loading="lazy" width="64" height="64" />
                                        <p x-text="translations.messages.hour_support">{{ __('messages.hour_support') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="why-choose-us-items p-3">
                                    <div class="why-choose-us-items-details py-4 px-3">
                                        <img class="align-self-center mb-3" src="{{ asset('img/icons/SPECIALIZED.webp') }}" alt="SPECIALIZED handling icon" loading="lazy" width="64" height="64" />
                                        <p x-text="translations.messages.specialized_handling">{{ __('messages.specialized_handling') }}</p>
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
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6 text-center mx-auto" data-aos="fade-up">
                        <h2 x-text="translations.messages.how_it_works">{{ __('messages.how_it_works') }}</h2>
                        <p x-text="translations.messages.how_it_works_description">{{ __('messages.how_it_works_description') }}</p>
                    </div>
                </div>
                <div class="row g-md-5">
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <div><img class="arch-line" src="{{ asset('img/arch-line.svg') }}" alt="" aria-hidden="true"></div>
                            <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                            <div>
                                <h3 x-text="translations.messages.step_1_title">{{ __('messages.step_1_title') }}</h3>
                                <p x-text="translations.messages.step_1_description">{{ __('messages.step_1_description') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                        <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <div><img class="arch-line reverse" src="{{ asset('img/arch-line-reverse.svg') }}" alt="" aria-hidden="true"></div>
                            <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                            <h3 x-text="translations.messages.step_2_title">{{ __('messages.step_2_title') }}</h3>
                            <p x-text="translations.messages.step_2_description">{{ __('messages.step_2_description') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <div><img class="arch-line" src="{{ asset('img/arch-line.svg') }}" alt="" aria-hidden="true"></div>
                            <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                            <h3 x-text="translations.messages.step_3_title">{{ __('messages.step_3_title') }}</h3>
                            <p x-text="translations.messages.step_3_description">{{ __('messages.step_3_description') }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                            <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                            <div>
                                <h3 x-text="translations.messages.step_4_title">{{ __('messages.step_4_title') }}</h3>
                                <p x-text="translations.messages.step_4_description">{{ __('messages.step_4_description') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /How It Works Section -->
        @include('sections.partials.cta')
    </main>
@endsection