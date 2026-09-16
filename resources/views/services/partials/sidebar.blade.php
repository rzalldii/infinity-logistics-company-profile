@props(['activeService' => ''])
<div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
    <div class="service-box">
        <h3 x-text="translations.messages.services_list">{{ __('messages.services_list') }}</h3>
        <div class="services-list">
            <a href="{{ route('services.nvocc') }}" class="{{ $activeService === 'nvocc' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</span>
            </a>
            <a href="{{ route('services.freight-forwarding') }}" class="{{ $activeService === 'freight-forwarding' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.freight_forwarding">{{ __('messages.freight_forwarding') }}</span>
            </a>
            <a href="{{ route('services.domestic-forwarding') }}" class="{{ $activeService === 'domestic-forwarding' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.domestic_forwarding">{{ __('messages.domestic_forwarding') }}</span>
            </a>
            <a href="{{ route('services.flexitank-flexibag') }}" class="{{ $activeService === 'flexitank-flexibag' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.flexitank_flexibag">{{ __('messages.flexitank_flexibag') }}</span>
            </a>
            <a href="{{ route('services.project-logistics') }}" class="{{ $activeService === 'project-logistics' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.project_logistics">{{ __('messages.project_logistics') }}</span>
            </a>
            <a href="{{ route('services.customs-clearance') }}" class="{{ $activeService === 'customs-clearance' ? 'active' : '' }}">
                <i class="bi bi-arrow-right-circle" aria-hidden="true"></i>
                <span x-text="translations.messages.customs_clearance">{{ __('messages.customs_clearance') }}</span>
            </a>
        </div>
    </div>
    <div class="service-box">
        <h3 x-text="translations.messages.download_catalog">{{ __('messages.download_catalog') }}</h3>
        <div class="download-catalog">
            @if($activeService === 'flexitank-flexibag')
                <a href="{{ asset('pdf/IBL-Brochures.pdf') }}" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                    <span>
                        <span x-text="translations.messages.ibl_brochures">{{ __('messages.ibl_brochures') }}</span>
                        <small class="text-muted d-block">(PDF, 2.4 MB)</small>
                    </span>
                </a>
                <a href="{{ asset('pdf/IBL-Profile.pdf') }}" target="_blank" rel="noopener noreferrer" class="mt-2">
                    <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                    <span>
                        <span x-text="translations.messages.ibl_profile">{{ __('messages.ibl_profile') }}</span>
                        <small class="text-muted d-block">(PDF, 4.5 MB)</small>
                    </span>
                </a>
            @else
                <a href="{{ asset('pdf/Company-Profile-INF.pdf') }}" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-filetype-pdf" aria-hidden="true"></i>
                    <span>
                        <span x-text="translations.messages.company_profile">{{ __('messages.company_profile') }}</span>
                        <small class="text-muted d-block">(PDF, 5.2 MB)</small>
                    </span>
                </a>
            @endif
        </div>
    </div>
</div>