<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', 'Infinity Logistics Indonesia')</title>

<!-- Bing Webmaster Tools -->
<meta name="msvalidate.01" content="87838AA91B500CE846EA59FACB669B69" />

<!-- SEO -->
<meta name="description" content="@yield('meta_description', __('messages.home_meta_description'))">
<link rel="canonical" href="@yield('canonical', url()->current())">
<link rel="alternate" hreflang="id" href="@yield('canonical', url()->current())">
<link rel="alternate" hreflang="en" href="@yield('canonical', url()->current())">
<link rel="alternate" hreflang="x-default" href="@yield('canonical', url()->current())">

<!-- Open Graph -->
<meta property="og:title" content="@yield('title', 'Infinity Logistics Indonesia')">
<meta property="og:description" content="@yield('meta_description', __('messages.home_meta_description'))">
<meta property="og:url" content="@yield('canonical', url()->current())">
<meta property="og:image" content="{{ asset('img/hero-img.webp') }}">
<meta property="og:type" content="website">
<meta property="og:site_name" content="Infinity Logistics Indonesia">

<!-- Twitter Cards -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('title', 'Infinity Logistics Indonesia')">
<meta name="twitter:description" content="@yield('meta_description', __('messages.home_meta_description'))">
<meta name="twitter:image" content="{{ asset('img/hero-img.webp') }}">

<!-- Favicons -->
<link href="{{ asset('img/favicon.webp') }}" rel="icon" type="image/webp">
<link href="{{ asset('img/apple-touch-icon.webp') }}" rel="apple-touch-icon">

<!-- Preload critical assets -->
@stack('preload')

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&family=Raleway:wght@600;700;800&family=Ubuntu:wght@500;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400&family=Raleway:wght@600;700;800&family=Ubuntu:wght@500;700&display=swap">
</noscript>

<!-- Critical Stylesheets -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/aos/css/aos.css') }}" rel="stylesheet">
@php
    $cssFile = public_path('css/main.css');
    $cssVersion = file_exists($cssFile) ? filemtime($cssFile) : (file_exists(base_path('../public_html/css/main.css')) ? filemtime(base_path('../public_html/css/main.css')) : time());
@endphp
<link href="{{ asset('css/main.css') }}?v={{ $cssVersion }}" rel="stylesheet">

<style>
/* Critical Component: Language Toggle Switcher (Guaranteed styling across all environments & CDN/cPanel caches) */
.lang-toggle-btn {
  position: relative;
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  background: var(--surface-color, #ffffff);
  border: 2px solid color-mix(in srgb, var(--default-color, #212529), transparent 75%);
  border-radius: 25px;
  padding: 2px;
  width: 76px;
  height: 34px;
  cursor: pointer;
  transition: border-color 0.25s ease, box-shadow 0.25s ease;
  overflow: hidden;
  touch-action: manipulation;
  user-select: none;
  box-sizing: border-box;
}
.lang-toggle-btn:hover {
  border-color: var(--accent-color, #042470);
}
.lang-toggle-btn:focus-visible {
  outline: 2px solid var(--accent-color, #042470);
  outline-offset: 2px;
}
.lang-option {
  position: relative;
  z-index: 2;
  flex: 1;
  text-align: center;
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0.5px;
  color: var(--default-color, #212529);
  transition: color 0.25s ease;
  line-height: 1;
}
.lang-option.active {
  color: #ffffff;
}
.toggle-indicator {
  position: absolute;
  top: 2px;
  left: 2px;
  width: calc(50% - 2px);
  height: calc(100% - 4px);
  background: var(--accent-color, #042470);
  border-radius: 20px;
  transition: transform 0.25s cubic-bezier(0.4, 0, 0.2, 1);
  z-index: 1;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
}
.toggle-indicator.slide-right {
  transform: translateX(calc(100%));
}
.lang-toggle-btn.loading {
  opacity: 0.7;
  cursor: not-allowed;
  pointer-events: none;
}
.header .lang-toggle-btn {
  box-shadow: 0 1px 4px rgba(0, 0, 0, 0.06);
}
@media (max-width: 1199.98px) {
  .navmenu .mobile-nav-lang {
    padding: 12px 20px 8px 20px;
    border-top: 1px solid color-mix(in srgb, var(--default-color, #212529), transparent 88%);
    margin-top: 10px;
  }
  .navmenu .mobile-nav-lang .mobile-lang-label {
    font-family: var(--nav-font, inherit);
    font-size: 15px;
    font-weight: 600;
    color: var(--nav-dropdown-color, #212529);
  }
}
@media (max-width: 768px) {
  .lang-toggle-btn {
    width: 72px;
    height: 32px;
  }
  .lang-option {
    font-size: 11px;
  }
}
</style>

<!-- Non-critical Stylesheets -->
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
<link href="{{ asset('vendor/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
<link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
<noscript>
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/sweetalert2/css/sweetalert2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
</noscript>

@include('layouts.partials.json-ld')

@stack('style')