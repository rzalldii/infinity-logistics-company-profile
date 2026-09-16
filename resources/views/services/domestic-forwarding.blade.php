@extends('layouts.app')
@section('title', __('messages.domestic_forwarding_title'))
@section('meta_description', __('messages.domestic_forwarding_meta_description'))
@section('canonical', route('services.domestic-forwarding'))
@push('style')
<script type="application/ld+json">
{
  "@@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "{{ route('home') }}"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Services",
      "item": "{{ route('services') }}"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "{{ __('messages.domestic_forwarding') }}",
      "item": "{{ route('services.domestic-forwarding') }}"
    }
  ]
}
</script>
@endpush
@section('content')
    <main class="main" id="main-content">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0" x-text="translations.messages.domestic_forwarding">{{ __('messages.domestic_forwarding') }}</h1>
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <ol>
                        <li><a href="{{ route('services') }}" x-text="translations.messages.services">{{ __('messages.services') }}</a></li>
                        <li class="current" x-text="translations.messages.service_details">{{ __('messages.service_details') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container">
                <div class="row gy-5">
                    @include('services.partials.sidebar', ['activeService' => 'domestic-forwarding'])
                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-details-slider swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                { "loop": true, "speed": 600, "autoplay": { "delay": 5000 }, "slidesPerView": "auto", "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true } }
                            </script>
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/DOMESTIC FORWARDING1.webp') }}" data-gallery="services-domestic-forwarding" class="glightbox preview-link" aria-label="View Domestic Forwarding Image 1">
                                        <img src="{{ asset('img/services-details/DOMESTIC FORWARDING1.webp') }}" class="img-fluid services-img-swipe" alt="Domestic inter-island container forwarding" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/DOMESTIC FORWARDING2.webp') }}" data-gallery="services-domestic-forwarding" class="glightbox preview-link" aria-label="View Domestic Forwarding Image 2">
                                        <img src="{{ asset('img/services-details/DOMESTIC FORWARDING2.webp') }}" class="img-fluid services-img-swipe" alt="Domestic freight shipping in Indonesia" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/DOMESTIC FORWARDING3.webp') }}" data-gallery="services-domestic-forwarding" class="glightbox preview-link" aria-label="View Domestic Forwarding Image 3">
                                        <img src="{{ asset('img/services-details/DOMESTIC FORWARDING3.webp') }}" class="img-fluid services-img-swipe" alt="Domestic cargo fleet and transport" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <p x-text="translations.messages.domestic_forwarding_description_1">{{ __('messages.domestic_forwarding_description_1') }}</p>
                        <p x-text="translations.messages.domestic_forwarding_description_2">{{ __('messages.domestic_forwarding_description_2') }}</p>
                        <p x-text="translations.messages.domestic_forwarding_description_3">{{ __('messages.domestic_forwarding_description_3') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Service Details Section -->
    </main>
@endsection