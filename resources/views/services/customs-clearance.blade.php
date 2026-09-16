@extends('layouts.app')
@section('title', __('messages.customs_clearance_title'))
@section('meta_description', __('messages.customs_clearance_meta_description'))
@section('canonical', route('services.customs-clearance'))
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
      "name": "{{ __('messages.customs_clearance') }}",
      "item": "{{ route('services.customs-clearance') }}"
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
                <h1 class="mb-2 mb-lg-0" x-text="translations.messages.customs_clearance">{{ __('messages.customs_clearance') }}</h1>
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
                    @include('services.partials.sidebar', ['activeService' => 'customs-clearance'])
                    <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-details-slider swiper init-swiper">
                            <script type="application/json" class="swiper-config">
                                { "loop": true, "speed": 600, "autoplay": { "delay": 5000 }, "slidesPerView": "auto", "pagination": { "el": ".swiper-pagination", "type": "bullets", "clickable": true } }
                            </script>
                            <div class="swiper-wrapper align-items-center">
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/CUSTOMS CLEARANCE1.webp') }}" data-gallery="services-customs-clearance" class="glightbox preview-link" aria-label="View Customs Clearance Image 1">
                                        <img src="{{ asset('img/services-details/CUSTOMS CLEARANCE1.webp') }}" class="img-fluid services-img-swipe" alt="Customs clearance import export clearance documents" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/CUSTOMS CLEARANCE2.webp') }}" data-gallery="services-customs-clearance" class="glightbox preview-link" aria-label="View Customs Clearance Image 2">
                                        <img src="{{ asset('img/services-details/CUSTOMS CLEARANCE2.webp') }}" class="img-fluid services-img-swipe" alt="Indonesian customs port inspection clearance" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                                <div class="swiper-slide">
                                    <a href="{{ asset('img/services-details/CUSTOMS CLEARANCE3.webp') }}" data-gallery="services-customs-clearance" class="glightbox preview-link" aria-label="View Customs Clearance Image 3">
                                        <img src="{{ asset('img/services-details/CUSTOMS CLEARANCE3.webp') }}" class="img-fluid services-img-swipe" alt="Customs clearance brokerage and legal transport compliance" loading="lazy" width="1024" height="648">
                                    </a>
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <p x-text="translations.messages.customs_clearance_description_1">{{ __('messages.customs_clearance_description_1') }}</p>
                        <p x-text="translations.messages.customs_clearance_description_2">{{ __('messages.customs_clearance_description_2') }}</p>
                        <p x-text="translations.messages.customs_clearance_description_3">{{ __('messages.customs_clearance_description_3') }}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Service Details Section -->
    </main>
@endsection