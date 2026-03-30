<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="msvalidate.01" content="87838AA91B500CE846EA59FACB669B69" />
    <title>@yield('title')</title>
    @yield('meta')

    <!-- Favicons -->
    <link href="<?php echo url('/'); ?>/img/favicon.webp" rel="icon" alt="Icon Infinity">
    <link href="<?php echo url('/'); ?>/img/apple-touch-icon.webp" rel="apple-touch-icon" alt="Touch Icon Infinity">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Preload CSS Files -->
    <link href="<?php echo url('/'); ?>/vendor/aos/css/aos.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/sweetalert2/css/sweetalert2.min.css" rel="preload" as="style">
    <link href="<?php echo url('/'); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="preload" as="style">
    <!-- <link href="<?php echo url('/'); ?>/css/main.css" rel="preload" as="style"> -->
    <link href="<?php echo url('/'); ?>/css/main.min.css" rel="preload" as="style">

    <!-- Vendor CSS Files -->
    <link href="<?php echo url('/'); ?>/vendor/aos/css/aos.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/bootstrap-icons/bootstrap-icons.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/sweetalert2/css/sweetalert2.min.css" rel="stylesheet">
    <link href="<?php echo url('/'); ?>/vendor/swiper/css/swiper-bundle.min.css" rel="stylesheet">

    <!-- Main CSS File -->
    <!-- <link href="<?php echo url('/'); ?>/css/main.css" rel="stylesheet"> -->
    <link href="<?php echo url('/'); ?>/css/main.min.css" rel="stylesheet">
</head>

<body class="index-page" x-data="languageSwitcher()">

    <!-- WhatsApp Floating Chat Widget -->
    <div class="wa-hover-zone">
        <div class="wa-popup" id="waPopup">
            <div class="wa-popup-header">
                <div class="wa-popup-header-icon">
                    <i class="bi bi-whatsapp"></i>
                </div>
                <div class="wa-popup-header-text">
                    <strong>Start a Conversation</strong>
                    <span>Click one of our members below</span>
                </div>
                <button class="wa-popup-close" id="waClose" aria-label="Close">&times;</button>
            </div>
            <div class="wa-popup-agents">
                <a :href="'https://wa.me/6281330229112?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                    class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <div class="wa-agent-info">
                        <span>FREIGHT FORWARDING</span>
                    </div>
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a :href="'https://wa.me/6281330681408?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                    class="wa-agent" target="_blank" rel="noopener">
                    <div class="wa-agent-info">
                        <span>NVOCC</span>
                    </div>
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a :href="'https://wa.me/6281999198916?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                    class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <div class="wa-agent-info">
                        <span>FLEXITANK</span>
                    </div>
                    <i class="bi bi-whatsapp"></i>
                </a>
                <a :href="'https://wa.me/6281216882027?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                    class="wa-agent" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <div class="wa-agent-info">
                        <span>WAREHOUSE</span>
                    </div>
                    <i class="bi bi-whatsapp"></i>
                </a>
            </div>
        </div>
        <button class="wa-widget" id="waButton" aria-label="WhatsApp">
            <i class="bi bi-whatsapp"></i>
        </button>
    </div>

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            <a href="/" class="logo d-flex align-items-center me-auto">
                <img src="<?php echo url('/'); ?>/img/logo.webp" width="36" height="36" alt="Logo Infinity" loading="lazy">
                <h1 class="sitename">Infinity Logistics Indonesia</h1>
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="/about" x-text="translations.messages.about"></a></li>
                    <li class="dropdown"><a href="/services"><span x-text="translations.messages.services"></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                        <ul>
                            <li class="dropdown"><a href="/nvocc"><span x-text="translations.messages.nvocc"></span>  <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="/nvocc-schedule" x-text="translations.messages.nvocc_schedule"></a></li>
                                </ul>
                            </li>
                            <li><a href="/freight-forwarding" x-text="translations.messages.freight_forwarding"></a></li>
                            <li><a href="/domestic-forwarding" x-text="translations.messages.domestic_forwarding"></a></li>
                            <li class="dropdown"><a href="/flexitank-flexibag"><span x-text="translations.messages.flexitank_flexibag"></span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                                <ul>
                                    <li><a href="/flexitank-flexibag-details" x-text="translations.messages.flexitank_flexibag_details"></a></li>
                                </ul>
                            </li>
                            <li><a href="/project-logistics" x-text="translations.messages.project_logistics"></a></li>
                            <li><a href="/customs-clearance" x-text="translations.messages.customs_clearance"></a></li>
                        </ul>
                    </li>
                    <!-- <li><a href="/news" x-text="translations.messages.news"></a></li> -->
                    <li><a href="/contact" x-text="translations.messages.contact"></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- <a class="btn-getstarted" href="/contact" x-text="translations.messages.get_quote"></a> -->
        </div>
    </header>

    @yield('content')

    <footer id="footer" class="footer">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="d-flex align-items-center" x-text="translations.messages.head_office"></h3>
                    <div>
                        <a href="https://maps.app.goo.gl/usmiAqCiVkk7Db569">
                            <span x-text="translations.messages.head_office_address"></span>
                        </a>
                        <p class="mt-3"></p>
                        <a href="tel:+62315492926">
                            <strong><i class="bi bi-telephone-fill"></i> <span x-text="translations.messages.call"></span> :</strong> 
                            <span>+6231 549 2926</span>
                        </a>
                        <p></p>
                        <a href="mailto:cssurabaya@infinity-sby.com">
                            <strong><i class="bi bi-envelope-fill"></i> <span x-text="translations.messages.email"></span> :</strong> 
                            <span>cssurabaya@infinity-sby.com</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-about">
                    <h3 class="d-flex align-items-center" x-text="translations.messages.warehouse"></h3>
                    <div>
                        <a href="https://maps.app.goo.gl/R1yCKxVYq4VN2HqA9">
                            <span x-text="translations.messages.warehouse_address"></span>
                        </a>
                        <p class="mt-3"></p>
                        <a href="https://maps.app.goo.gl/Za8DtDNG7ctwwvSz6">
                            <span x-text="translations.messages.warehouse_address2"></span>
                        </a>
                        <p class="mt-3"></p>
                        <a href="https://maps.app.goo.gl/KvPuH4JfjdNN5ktt9">
                            <span x-text="translations.messages.warehouse_address3"></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 footer-links">
                    <h4 x-text="translations.messages.useful_links"></h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i><a href="/about" x-text="translations.messages.about"></a></li>
                        <li><i class="bi bi-chevron-right"></i><a href="/services" x-text="translations.messages.services"></a></li>
                        <!-- <li><i class="bi bi-chevron-right"></i><a href="/news" x-text="translations.messages.news"></a></li> -->
                        <li><i class="bi bi-chevron-right"></i><a href="/contact" x-text="translations.messages.contact"></a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-12">
                    <h4 x-text="translations.messages.follow_us"></h4>
                    <p x-text="translations.messages.follow_desc"></p>
                    <div class="social-links d-flex">
                        <a href="https://www.linkedin.com/company/infinity-logistics-and-transport" class="linkedin" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                        <a href="https://www.facebook.com/infinitylogisticsandtransport" class="facebook" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                        <a href="https://www.instagram.com/infinitysurabaya.id/" class="instagram" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                        <!-- <a href="https://www.tiktok.com/" class="tiktok" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                        <a href="https://x.com/" class="twitter-x" aria-label="TwitterX"><i class="bi bi-twitter-x"></i></a>
                        <a href="https://www.youtube.com/" class="youtube" aria-label="YouTube"><i class="bi bi-youtube"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container copyright mt-4">
            <div class="copyright-wrapper">
                <div class="language-switcher">
                    <button @click="toggleLanguage()" :disabled="loading" class="lang-toggle-btn" :class="{ 'loading': loading }">
                        <span class="lang-option" :class="{ 'active': currentLang === 'id' }">ID</span>
                        <span class="lang-option" :class="{ 'active': currentLang === 'en' }">EN</span>
                        <span class="toggle-indicator" :class="{ 'slide-right': currentLang === 'en' }"></span>
                    </button>
                </div>
                <div class="copyright-content">
                    <p>
                        <span>Copyright </span>
                        ©<span> 2025</span>
                        <strong class="px-1 sitename">PT. INFINITY LOGISTICS INDONESIA</strong>
                        <span>All Rights Reserved.</span>
                        <!-- | <a href="/terms-and-conditions">Terms and Conditions</a>
                        | <a href="/privacy-policy">Privacy Policy</a> -->
                    </p>
                    <div class="credits">
                        Designed and Developed with ❤ by IT Infinity
                    </div>
                </div>
                <div class="copyright-spacer"></div>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll"><i class="bi bi-shift-fill"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?php echo url('/'); ?>/vendor/alpinejs/cdn.min.js" defer></script>
    <script src="<?php echo url('/'); ?>/vendor/aos/js/aos.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/purecounterjs/purecounter_vanilla.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/sweetalert2/js/sweetalert2.all.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/swiper/js/swiper-bundle.min.js"></script>
    <script src="<?php echo url('/'); ?>/vendor/php-email-form/validate.js"></script>

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
                        const response = await fetch('{{ route("language.switch") }}', {
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
                    } finally {
                        this.loading = false;
                    }
                }
            }
        }
    </script>

    <!-- Main JS File -->
    <!-- <script src="<?php echo url('/'); ?>/js/main.js"></script> -->
    <script src="<?php echo url('/'); ?>/js/main.min.js"></script>
</body>

</html>