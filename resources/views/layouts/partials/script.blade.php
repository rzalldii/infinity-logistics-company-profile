<!-- Vendor Scripts -->
<script src="{{ asset('vendor/alpinejs/cdn.min.js') }}" defer></script>
<script src="{{ asset('vendor/aos/js/aos.js') }}" defer></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" defer></script>
<script src="{{ asset('vendor/swiper/js/swiper-bundle.min.js') }}" defer></script>
@stack('vendor-scripts')

<!-- Main Application Script -->
<script src="{{ asset('js/main.js') }}?v={{ @filemtime(public_path('js/main.js')) }}" defer></script>

<!-- Google Analytics -->
<script defer src="https://www.googletagmanager.com/gtag/js?id=G-7GKDNCWX4R"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-7GKDNCWX4R');
</script>

<!-- Language Switcher Script -->
<script>
    function languageSwitcher() {
        return {
            currentLang: '{{ app()->getLocale() }}',
            loading: false,
            translations: {
                messages: @json(trans('messages'))
            },
            async toggleLanguage() {
                this.loading = true;
                const newLang = this.currentLang === 'en' ? 'id' : 'en';
                try {
                    const response = await fetch('{{ route("language.toggle") }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({
                            locale: newLang
                        })
                    });
                    const data = await response.json();
                    if (data.success) {
                        this.currentLang = data.locale;
                        this.translations = data.translations;
                        document.documentElement.lang = data.locale;
                    }
                } catch (error) {
                    console.error('Language switch failed:', error);
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>

@stack('script')