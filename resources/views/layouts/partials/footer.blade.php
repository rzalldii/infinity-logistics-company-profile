<footer id="footer" class="footer">
    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-3 col-md-6 footer-about">
                <h3 class="d-flex align-items-center" x-text="translations.messages.head_office">{{ __('messages.head_office') }}</h3>
                <div class="footer-contact-info">
                    <a href="https://maps.app.goo.gl/usmiAqCiVkk7Db569" class="d-block mb-3">
                        <span x-text="translations.messages.head_office_address">{{ __('messages.head_office_address') }}</span>
                    </a>
                    <a href="tel:+62315492926" class="d-block mb-2">
                        <strong><i class="bi bi-telephone-fill" aria-hidden="true"></i> <span x-text="translations.messages.call">{{ __('messages.call') }}</span>:</strong>
                        <span>+6231 549 2926</span>
                    </a>
                    <a href="mailto:cssurabaya@infinity-sby.com" class="d-block">
                        <strong><i class="bi bi-envelope-fill" aria-hidden="true"></i> <span x-text="translations.messages.email">{{ __('messages.email') }}</span>:</strong>
                        <span>cssurabaya@infinity-sby.com</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 footer-about">
                <h3 class="d-flex align-items-center" x-text="translations.messages.warehouse">{{ __('messages.warehouse') }}</h3>
                <div class="footer-contact-info">
                    <a href="https://maps.app.goo.gl/R1yCKxVYq4VN2HqA9" class="d-block mb-3">
                        <span x-text="translations.messages.warehouse_address">{{ __('messages.warehouse_address') }}</span>
                    </a>
                    <a href="https://maps.app.goo.gl/Za8DtDNG7ctwwvSz6" class="d-block mb-3">
                        <span x-text="translations.messages.warehouse_address2">{{ __('messages.warehouse_address2') }}</span>
                    </a>
                    <a href="https://maps.app.goo.gl/KvPuH4JfjdNN5ktt9" class="d-block">
                        <span x-text="translations.messages.warehouse_address3">{{ __('messages.warehouse_address3') }}</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 footer-links">
                <h4 x-text="translations.messages.useful_links">{{ __('messages.useful_links') }}</h4>
                <ul>
                    <li><i class="bi bi-chevron-right" aria-hidden="true"></i><a href="{{ route('about') }}" x-text="translations.messages.about">{{ __('messages.about') }}</a></li>
                    <li><i class="bi bi-chevron-right" aria-hidden="true"></i><a href="{{ route('services') }}" x-text="translations.messages.services">{{ __('messages.services') }}</a></li>
                    <li><i class="bi bi-chevron-right" aria-hidden="true"></i><a href="{{ route('contact') }}" x-text="translations.messages.contact">{{ __('messages.contact') }}</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12">
                <h4 x-text="translations.messages.follow_us">{{ __('messages.follow_us') }}</h4>
                <p x-text="translations.messages.follow_desc">{{ __('messages.follow_desc') }}</p>
                <div class="social-links d-flex">
                    <a href="https://www.linkedin.com/company/infinity-logistics-and-transport" class="linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn"><i class="bi bi-linkedin" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/infinitylogisticsandtransport" class="facebook" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="bi bi-facebook" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/infinitysurabaya.id/" class="instagram" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="bi bi-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container copyright mt-4">
        <div class="copyright-wrapper">
            <div class="language-switcher">
                <button type="button" @click="toggleLanguage()" :disabled="loading" class="lang-toggle-btn" :class="{ 'loading': loading }" aria-label="Toggle language between ID and EN">
                    <span class="lang-option" :class="{ 'active': currentLang === 'id' }">ID</span>
                    <span class="lang-option" :class="{ 'active': currentLang === 'en' }">EN</span>
                    <span class="toggle-indicator" :class="{ 'slide-right': currentLang === 'en' }"></span>
                </button>
            </div>
            <div class="copyright-content">
                <p>
                    <span>&copy; </span>
                    <span> {{ date('Y') }}</span>
                    <strong class="px-1 sitename">PT. INFINITY LOGISTICS INDONESIA</strong>
                    <span x-text="translations.messages.all_rights_reserved">{{ __('messages.all_rights_reserved') }}</span>
                </p>
                <div class="credits">
                    <span x-text="translations.messages.designed_by">{{ __('messages.designed_by') }}</span> <i class="bi bi-heart-fill" aria-hidden="true"></i> <span x-text="translations.messages.by_it_infinity">{{ __('messages.by_it_infinity') }}</span>
                </div>
            </div>
            <div class="copyright-spacer"></div>
        </div>
    </div>
</footer>