@props(['showButton' => false])
<section id="stats" class="stats section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter">20</span>
                    <p x-text="translations.messages.years_experience">{{ __('messages.years_experience') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter">20000</span>
                    <p x-text="translations.messages.shipments_handled">{{ __('messages.shipments_handled') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter">350</span>
                    <p x-text="translations.messages.clients_active">{{ __('messages.clients_active') }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stats-item text-center w-100 h-100">
                    <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter">40</span>
                    <p x-text="translations.messages.countries_served">{{ __('messages.countries_served') }}</p>
                </div>
            </div>
        </div>
    </div>
    @if($showButton)
        <div class="button-container">
            <a href="{{ route('about') }}" class="more-details-btn" x-text="translations.messages.read_more_about">{{ __('messages.read_more_about') }}</a>
        </div>
    @endif
</section>
@pushOnce('vendor-scripts')
<script src="{{ asset('vendor/purecounterjs/purecounter_vanilla.js') }}" defer></script>
@endPushOnce