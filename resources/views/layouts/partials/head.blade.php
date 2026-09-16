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
<link href="{{ asset('css/main.css') }}?v={{ @filemtime(public_path('css/main.css')) }}" rel="stylesheet">

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