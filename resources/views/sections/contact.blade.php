@extends('layouts.app')
@section('title', __('messages.contact_title'))
@section('meta_description', __('messages.contact_meta_description'))
@section('canonical', route('contact'))
@section('content')
    <main class="main" id="main-content">
        <!-- Contact Section -->
        <section id="contact" class="contact section">
            <div class="container section-title" data-aos="fade-up">
                <span aria-hidden="true" x-text="translations.messages.contact_section">{{ __('messages.contact_section') }}</span>
                <h1 x-text="translations.messages.contact">{{ __('messages.contact') }}</h1>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row gy-4">
                    <div class="col-lg-5">
                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.our_address">{{ __('messages.our_address') }}</h2>
                                    <p x-text="translations.messages.head_office_address">{{ __('messages.head_office_address') }}</p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.call_us">{{ __('messages.call_us') }}</h2>
                                    <p><a href="tel:+62315492926" class="text-reset">+6231 549 2926</a></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.email_us">{{ __('messages.email_us') }}</h2>
                                    <p><a href="mailto:cssurabaya@infinity-sby.com" class="text-reset">cssurabaya@infinity-sby.com</a></p>
                                </div>
                            </div>
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                                <i class="bi bi-clock flex-shrink-0" aria-hidden="true"></i>
                                <div>
                                    <h2 x-text="translations.messages.working_hours">{{ __('messages.working_hours') }}</h2>
                                    <p x-text="translations.messages.monday_friday">{{ __('messages.monday_friday') }}</p>
                                    <p x-text="translations.messages.saturday">{{ __('messages.saturday') }}</p>
                                    <p x-text="translations.messages.sunday">{{ __('messages.sunday') }}</p>
                                </div>
                            </div>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus" title="Google Maps - PT Infinity Logistics Indonesia" frameborder="0" width="600" height="245" style="border:0; width: 100%; height: 245px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        @include('layouts.partials.contact-form')
                    </div>
                </div>
            </div>
        </section>
        <!-- /Contact Section -->
    </main>
@endsection
@push('script')
    @include('layouts.partials.contact-script')
@endpush