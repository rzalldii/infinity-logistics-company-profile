<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto" aria-label="Infinity Logistics Indonesia - Home">
            <img src="{{ asset('img/logo.webp') }}" width="36" height="36" alt="Logo Infinity">
            <span class="sitename">Infinity Logistics Indonesia</span>
        </a>
        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}" {!! request()->routeIs('about') ? 'aria-current="page"' : '' !!} x-text="translations.messages.about">{{ __('messages.about') }}</a></li>
                <li class="dropdown"><a href="{{ route('services') }}" class="{{ request()->routeIs('services*') ? 'active' : '' }}" {!! request()->routeIs('services') ? 'aria-current="page"' : '' !!}><span x-text="translations.messages.services">{{ __('messages.services') }}</span> <i class="bi bi-chevron-down toggle-dropdown" role="button" tabindex="0" aria-label="Toggle submenu" aria-expanded="false"></i></a>
                    <ul>
                        <li class="dropdown"><a href="{{ route('services.nvocc') }}" class="{{ request()->routeIs('services.nvocc*') ? 'active' : '' }}" {!! request()->routeIs('services.nvocc') ? 'aria-current="page"' : '' !!}><span x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</span> <i class="bi bi-chevron-down toggle-dropdown" role="button" tabindex="0" aria-label="Toggle submenu" aria-expanded="false"></i></a>
                            <ul>
                                <li><a href="{{ route('services.nvocc-schedule') }}" class="{{ request()->routeIs('services.nvocc-schedule') ? 'active' : '' }}" {!! request()->routeIs('services.nvocc-schedule') ? 'aria-current="page"' : '' !!} x-text="translations.messages.nvocc_schedule">{{ __('messages.nvocc_schedule') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('services.freight-forwarding') }}" class="{{ request()->routeIs('services.freight-forwarding') ? 'active' : '' }}" {!! request()->routeIs('services.freight-forwarding') ? 'aria-current="page"' : '' !!} x-text="translations.messages.freight_forwarding">{{ __('messages.freight_forwarding') }}</a></li>
                        <li><a href="{{ route('services.domestic-forwarding') }}" class="{{ request()->routeIs('services.domestic-forwarding') ? 'active' : '' }}" {!! request()->routeIs('services.domestic-forwarding') ? 'aria-current="page"' : '' !!} x-text="translations.messages.domestic_forwarding">{{ __('messages.domestic_forwarding') }}</a></li>
                        <li class="dropdown"><a href="{{ route('services.flexitank-flexibag') }}" class="{{ request()->routeIs('services.flexitank-flexibag*') ? 'active' : '' }}" {!! request()->routeIs('services.flexitank-flexibag') ? 'aria-current="page"' : '' !!}><span x-text="translations.messages.flexitank_flexibag">{{ __('messages.flexitank_flexibag') }}</span> <i class="bi bi-chevron-down toggle-dropdown" role="button" tabindex="0" aria-label="Toggle submenu" aria-expanded="false"></i></a>
                            <ul>
                                <li><a href="{{ route('services.flexitank-flexibag-details') }}" class="{{ request()->routeIs('services.flexitank-flexibag-details') ? 'active' : '' }}" {!! request()->routeIs('services.flexitank-flexibag-details') ? 'aria-current="page"' : '' !!} x-text="translations.messages.flexitank_flexibag_details">{{ __('messages.flexitank_flexibag_details') }}</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ route('services.project-logistics') }}" class="{{ request()->routeIs('services.project-logistics') ? 'active' : '' }}" {!! request()->routeIs('services.project-logistics') ? 'aria-current="page"' : '' !!} x-text="translations.messages.project_logistics">{{ __('messages.project_logistics') }}</a></li>
                        <li><a href="{{ route('services.customs-clearance') }}" class="{{ request()->routeIs('services.customs-clearance') ? 'active' : '' }}" {!! request()->routeIs('services.customs-clearance') ? 'aria-current="page"' : '' !!} x-text="translations.messages.customs_clearance">{{ __('messages.customs_clearance') }}</a></li>
                    </ul>
                </li>
                <li><a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}" {!! request()->routeIs('contact') ? 'aria-current="page"' : '' !!} x-text="translations.messages.contact">{{ __('messages.contact') }}</a></li>
            </ul>
            <button type="button" class="mobile-nav-toggle d-xl-none" aria-label="Toggle navigation" aria-expanded="false">
                <i class="bi bi-list"></i>
            </button>
        </nav>
    </div>
</header>