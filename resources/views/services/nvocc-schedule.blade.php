@extends('layouts.app')
@section('title', __('messages.nvocc_schedule_title'))
@section('meta_description', __('messages.nvocc_schedule_meta_description'))
@section('canonical', route('services.nvocc-schedule'))
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
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "{{ __('messages.nvocc_schedule') }}",
      "item": "{{ route('services.nvocc-schedule') }}"
    }
  ]
}
</script>
@endpush
@php
    $scheduleMonth = config('nvocc-schedule.month', 'september');
    $schedules = config('nvocc-schedule.schedules', []);
@endphp
@section('content')
    <main class="main" id="main-content">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <h1 class="mb-2 mb-lg-0" x-text="translations.messages.nvocc_schedule">{{ __('messages.nvocc_schedule') }}</h1>
                <nav class="breadcrumbs" aria-label="Breadcrumb">
                    <ol>
                        <li><a href="{{ route('services') }}" x-text="translations.messages.services">{{ __('messages.services') }}</a></li>
                        <li><a href="{{ route('services.nvocc') }}" x-text="translations.messages.nvocc">{{ __('messages.nvocc') }}</a></li>
                        <li class="current" x-text="translations.messages.nvocc_schedule">{{ __('messages.nvocc_schedule') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End Page Title -->
        <!-- NVOCC Schedule Section -->
        <section id="nvocc-schedule" class="nvocc-schedule section">
            <div class="container section-title" data-aos="fade-up">
                <h2 class="text-uppercase" x-text="translations.messages.{{ $scheduleMonth }}">{{ __('messages.' . $scheduleMonth) }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase" x-text="translations.messages.vessel">{{ __('messages.vessel') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.voyage">{{ __('messages.voyage') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.open_stack">{{ __('messages.open_stack') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.closing_cargo">{{ __('messages.closing_cargo') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.eta_surabaya">{{ __('messages.eta_surabaya') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.etd_surabaya">{{ __('messages.etd_surabaya') }}</th>
                                <th class="text-uppercase" x-text="translations.messages.eta_klang">{{ __('messages.eta_klang') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $item)
                                <tr>
                                    <td>
                                        <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">
                                            {{ $item['line'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['vessel'] }}
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $item['voyage'] }}</td>
                                    <td>
                                        <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">
                                            {{ $item['open_stack']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['open_stack']['day'] }}
                                            <span x-text="translations.messages.{{ $item['open_stack']['month'] }}">{{ __('messages.' . $item['open_stack']['month']) }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">
                                            {{ $item['closing']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['closing']['day'] }}
                                            <span x-text="translations.messages.{{ $item['closing']['month'] }}">{{ __('messages.' . $item['closing']['month']) }}</span>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_sur']['month'] }}">{{ __('messages.' . $item['eta_sur']['month']) }}</span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['etd_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['etd_sur']['month'] }}">{{ __('messages.' . $item['etd_sur']['month']) }}</span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_klang']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_klang']['month'] }}">{{ __('messages.' . $item['eta_klang']['month']) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /NVOCC Schedule Section -->
    </main>
@endsection