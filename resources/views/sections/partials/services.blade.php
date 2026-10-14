<!-- Services Section -->
<section id="services" class="services section {{ !empty($lightBackground) ? 'light-background' : '' }}">
    <div class="container section-title" data-aos="fade-up">
        <span aria-hidden="true" x-text="translations.messages.services_section">{{ __('messages.services_section') }}</span>
        @if(!empty($isH1))
            <h1 x-text="translations.messages.services">{{ __('messages.services') }}</h1>
        @else
            <h2 x-text="translations.messages.services">{{ __('messages.services') }}</h2>
        @endif
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
    @if(!empty($showButton))
        <div class="button-container">
            <a href="{{ route('services') }}" class="more-details-btn" x-text="translations.messages.read_more_services">{{ __('messages.read_more_services') }}</a>
        </div>
    @endif
</section>
<!-- /Services Section -->