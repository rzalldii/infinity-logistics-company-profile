<!-- About Section -->
<section id="about" class="about section">
    <div class="container section-title" data-aos="fade-up">
        <span aria-hidden="true" x-text="translations.messages.about_section">{{ __('messages.about_section') }}<br></span>
        @if(!empty($isH1))
            <h1 x-text="translations.messages.about">{{ __('messages.about') }}</h1>
        @else
            <h2 x-text="translations.messages.about">{{ __('messages.about') }}</h2>
        @endif
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 align-items-center">
            <div class="col-lg-6 position-relative align-self-start">
                <img src="{{ asset('img/about.webp') }}" alt="About PT Infinity Logistics Indonesia" class="img-fluid rounded" loading="lazy" width="800" height="565">
            </div>
            <div class="col-lg-6 content">
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
</section>
<!-- /About Section -->