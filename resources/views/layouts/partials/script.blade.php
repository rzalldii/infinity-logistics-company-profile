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
            async toggleLanguage(explicitLocale = null) {
                if (this.loading) return;
                this.loading = true;
                const prevLang = this.currentLang;
                const newLang = explicitLocale || (this.currentLang === 'en' ? 'id' : 'en');
                this.currentLang = newLang;
                document.documentElement.lang = newLang;
                try {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || '';
                    const response = await fetch('/language/toggle', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'Accept': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest',
                            'X-CSRF-TOKEN': csrfToken
                        },
                        body: JSON.stringify({
                            locale: newLang
                        })
                    });
                    if (!response.ok) {
                        throw new Error('HTTP error ' + response.status);
                    }
                    const data = await response.json();
                    if (data && data.success) {
                        this.currentLang = data.locale;
                        if (data.translations) {
                            this.translations = data.translations;
                        }
                        document.documentElement.lang = data.locale;
                    } else {
                        throw new Error('Server returned unsuccessful response');
                    }
                } catch (error) {
                    console.warn('Language switch via API failed, fallback to full reload:', error);
                    window.location.href = '/language/toggle?locale=' + encodeURIComponent(newLang);
                    return;
                } finally {
                    this.loading = false;
                }
            }
        }
    }
</script>

@stack('script')