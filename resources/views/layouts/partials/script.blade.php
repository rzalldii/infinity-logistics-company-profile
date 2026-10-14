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
            init() {
                try {
                    const stored = this.getStoredLocale();
                    if (stored && (stored === 'id' || stored === 'en') && stored !== this.currentLang) {
                        this.toggleLanguage(stored);
                    }
                    window.addEventListener('storage', (e) => {
                        if (e.key === 'locale' && (e.newValue === 'id' || e.newValue === 'en') && e.newValue !== this.currentLang) {
                            this.toggleLanguage(e.newValue);
                        }
                    });
                } catch (e) {
                    console.debug('Storage sync error:', e);
                }
            },
            getStoredLocale() {
                try {
                    const localVal = localStorage.getItem('locale');
                    if (localVal === 'id' || localVal === 'en') return localVal;
                    const match = document.cookie.match(/(?:^|;\s*)locale=([^;]+)/);
                    if (match && (match[1] === 'id' || match[1] === 'en')) return decodeURIComponent(match[1]);
                } catch (e) {}
                return null;
            },
            setStoredLocale(locale) {
                try {
                    localStorage.setItem('locale', locale);
                    document.cookie = 'locale=' + encodeURIComponent(locale) + ';path=/;max-age=31536000;SameSite=Lax';
                } catch (e) {}
            },
            async toggleLanguage(explicitLocale = null) {
                if (this.loading) return;
                this.loading = true;
                const prevLang = this.currentLang;
                const newLang = explicitLocale || (this.currentLang === 'en' ? 'id' : 'en');
                this.currentLang = newLang;
                document.documentElement.lang = newLang;
                this.setStoredLocale(newLang);
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
                        this.setStoredLocale(data.locale);
                        if (typeof AOS !== 'undefined') {
                            setTimeout(() => AOS.refresh(), 150);
                        }
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