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
                <h2 x-text="translations.messages.{{ $scheduleMonth }}">{{ __('messages.' . $scheduleMonth) }}</h2>
            </div>
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <!-- Desktop -->
                <div class="table-responsive schedule-table-wrapper d-none d-lg-block">
                    <table class="table schedule-table align-middle text-center mb-0">
                        <thead>
                            <tr>
                                <th x-text="translations.messages.vessel">{{ __('messages.vessel') }}</th>
                                <th x-text="translations.messages.voyage">{{ __('messages.voyage') }}</th>
                                <th x-text="translations.messages.open_stack">{{ __('messages.open_stack') }}</th>
                                <th x-text="translations.messages.closing_cargo">{{ __('messages.closing_cargo') }}</th>
                                <th x-text="translations.messages.eta_surabaya">{{ __('messages.eta_surabaya') }}</th>
                                <th x-text="translations.messages.etd_surabaya">{{ __('messages.etd_surabaya') }}</th>
                                <th x-text="translations.messages.eta_klang">{{ __('messages.eta_klang') }}</th>
                                <th x-text="translations.messages.terminal">{{ __('messages.terminal') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $item)
                                <tr>
                                    <td class="text-start ps-3">
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="schedule-line-badge">{{ $item['line'] }}</span>
                                            <strong class="schedule-vessel-name">{{ $item['vessel'] }}</strong>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="schedule-voyage-badge">{{ $item['voyage'] }}</span>
                                    </td>
                                    <td>
                                        <div class="schedule-datetime">
                                            <span class="schedule-date">{{ $item['open_stack']['day'] }} <span x-text="translations.messages.{{ $item['open_stack']['month'] }}">{{ __('messages.' . $item['open_stack']['month']) }}</span></span>
                                            <span class="schedule-time">{{ $item['open_stack']['time'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="schedule-datetime schedule-closing">
                                            <span class="schedule-date text-danger">{{ $item['closing']['day'] }} <span x-text="translations.messages.{{ $item['closing']['month'] }}">{{ __('messages.' . $item['closing']['month']) }}</span></span>
                                            <span class="schedule-time text-danger">{{ $item['closing']['time'] }}</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="schedule-transit-date">
                                            {{ $item['eta_sur']['day'] }}
                                            <span x-text="translations.messages.{{ $item['eta_sur']['month'] }}">{{ __('messages.' . $item['eta_sur']['month']) }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="schedule-transit-date text-primary fw-semibold">
                                            {{ $item['etd_sur']['day'] }}
                                            <span x-text="translations.messages.{{ $item['etd_sur']['month'] }}">{{ __('messages.' . $item['etd_sur']['month']) }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="schedule-transit-date text-success fw-bold">
                                            {{ $item['eta_klang']['day'] }}
                                            <span x-text="translations.messages.{{ $item['eta_klang']['month'] }}">{{ __('messages.' . $item['eta_klang']['month']) }}</span>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="schedule-terminal-badge">{{ $item['remarks'] ?? 'TPS' }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Mobile -->
                <div class="schedule-cards d-lg-none">
                    @foreach ($schedules as $item)
                        <div class="schedule-card mb-3">
                            <div class="schedule-card-header d-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="schedule-line-badge">{{ $item['line'] }}</span>
                                    <h3 class="schedule-card-vessel mb-0">{{ $item['vessel'] }}</h3>
                                </div>
                                <span class="schedule-voyage-badge">{{ $item['voyage'] }}</span>
                            </div>

                            <div class="schedule-route-banner">
                                <div class="route-point">
                                    <span class="route-city">Surabaya (ID)</span>
                                    <span class="route-date text-primary">ETD: {{ $item['etd_sur']['day'] }} <span x-text="translations.messages.{{ $item['etd_sur']['month'] }}">{{ __('messages.' . $item['etd_sur']['month']) }}</span></span>
                                </div>
                                <div class="route-arrow" aria-hidden="true">
                                    <i class="bi bi-arrow-right"></i>
                                </div>
                                <div class="route-point text-end">
                                    <span class="route-city">Port Klang (MY)</span>
                                    <span class="route-date text-success">ETA: {{ $item['eta_klang']['day'] }} <span x-text="translations.messages.{{ $item['eta_klang']['month'] }}">{{ __('messages.' . $item['eta_klang']['month']) }}</span></span>
                                </div>
                            </div>

                            <div class="schedule-card-body">
                                <div class="row g-2">
                                    <div class="col-6">
                                        <div class="schedule-detail-item">
                                            <span class="detail-label" x-text="translations.messages.open_stack">{{ __('messages.open_stack') }}</span>
                                            <span class="detail-value">{{ $item['open_stack']['day'] }} <span x-text="translations.messages.{{ $item['open_stack']['month'] }}">{{ __('messages.' . $item['open_stack']['month']) }}</span> • {{ $item['open_stack']['time'] }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="schedule-detail-item">
                                            <span class="detail-label" x-text="translations.messages.closing_cargo">{{ __('messages.closing_cargo') }}</span>
                                            <span class="detail-value text-danger fw-semibold">{{ $item['closing']['day'] }} <span x-text="translations.messages.{{ $item['closing']['month'] }}">{{ __('messages.' . $item['closing']['month']) }}</span> • {{ $item['closing']['time'] }}</span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="schedule-detail-item">
                                            <span class="detail-label" x-text="translations.messages.eta_surabaya">{{ __('messages.eta_surabaya') }}</span>
                                            <span class="detail-value">{{ $item['eta_sur']['day'] }} <span x-text="translations.messages.{{ $item['eta_sur']['month'] }}">{{ __('messages.' . $item['eta_sur']['month']) }}</span></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="schedule-detail-item">
                                            <span class="detail-label" x-text="translations.messages.terminal">{{ __('messages.terminal') }}</span>
                                            <span class="detail-value">{{ $item['remarks'] ?? 'TPS' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="schedule-bottom-nav text-center">
                    <a href="{{ route('services.nvocc') }}" class="btn-schedule-back">
                        <i class="bi bi-arrow-left" aria-hidden="true"></i>
                        <span x-text="translations.messages.back_to_nvocc">{{ __('messages.back_to_nvocc') }}</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- /NVOCC Schedule Section -->
    </main>
@endsection