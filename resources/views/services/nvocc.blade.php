@extends('layouts.app')
@section('title', __('messages.nvocc_title'))
@section('meta_description', __('messages.nvocc_meta_description'))
@section('canonical', route('services.nvocc'))
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
      "name": "{{ __('messages.nvocc') }}",
      "item": "{{ route('services.nvocc') }}"
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
                <h1 class="mb-2 mb-lg-0" x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</h1>
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <ol>
                        <li><a href="{{ route('services') }}" x-text="translations.messages.services">{{ __('messages.services') }}</a></li>
                        <li class="current" x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- Service Details Section -->
        <section id="service-details" class="service-details section">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-5">
                    @include('services.partials.sidebar', ['activeService' => 'nvocc'])
                    <div class="col-lg-8 ps-lg-5">
                        <div class="service-details-slider swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                { "loop": true, "speed": 600, "autoplay": { "delay": 5000 }, "slidesPerView": "auto", "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true } }
                            </script>
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/NVOCC1.webp') }}" data-gallery="services-nvocc" class="glightbox preview-link" aria-label="View NVOCC Gallery Image 1">
                                        <img src="{{ asset('img/services-details/NVOCC1.webp') }}" class="img-fluid services-img-swipe" alt="NVOCC shipping container operations" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/NVOCC2.webp') }}" data-gallery="services-nvocc" class="glightbox preview-link" aria-label="View NVOCC Gallery Image 2">
                                        <img src="{{ asset('img/services-details/NVOCC2.webp') }}" class="img-fluid services-img-swipe" alt="NVOCC vessel cargo loading" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/NVOCC3.webp') }}" data-gallery="services-nvocc" class="glightbox preview-link" aria-label="View NVOCC Gallery Image 3">
                                        <img src="{{ asset('img/services-details/NVOCC3.webp') }}" class="img-fluid services-img-swipe" alt="NVOCC port terminal logistics" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/NVOCC4.webp') }}" data-gallery="services-nvocc" class="glightbox preview-link" aria-label="View NVOCC Gallery Image 4">
                                        <img src="{{ asset('img/services-details/NVOCC4.webp') }}" class="img-fluid services-img-swipe" alt="NVOCC sea freight logistics" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <p x-text="translations.messages.nvocc_description_1">{{ __('messages.nvocc_description_1') }}</p>
                        <p x-text="translations.messages.nvocc_description_2">{{ __('messages.nvocc_description_2') }}</p>
                        <p x-text="translations.messages.nvocc_description_3">{{ __('messages.nvocc_description_3') }}</p>
                        <div class="service-action-card">
                            <div class="action-card-main">
                                <div class="action-card-icon" aria-hidden="true">
                                    <i class="bi bi-calendar2-week"></i>
                                </div>
                                <div class="action-card-text">
                                    <h3 x-text="translations.messages.nvocc_schedule">{{ __('messages.nvocc_schedule') }}</h3>
                                </div>
                            </div>
                            <a href="{{ route('services.nvocc-schedule') }}" class="action-card-btn">
                                <span x-text="translations.messages.view_schedule">{{ __('messages.view_schedule') }}</span>
                                <i class="bi bi-arrow-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Service Details Section -->
    </main>
@endsection