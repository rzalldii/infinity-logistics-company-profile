@extends('layouts.app')
@section('title', __('messages.nvocc_schedule_title'))
@section('meta_description', __('messages.nvocc_schedule_meta_description'))
@section('canonical', route('nvocc-schedule'))
@section('content')
    <main class="main">
        <!-- Page Title -->
        <div class="page-title">
            <div class="container d-lg-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <a href="{{ route('nvocc') }}" class="more-details-btn me-3" aria-label="NVOCC">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <h2 class="mb-0" x-text="translations.messages.nvocc_schedule"></h2>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        @php
            $scheduleMonth = 'september';

            $schedules = [
                [
                    'line' => 'GSL',
                    'vessel' => 'MTT SANDAKAN',
                    'voyage' => '79W',
                    'open_stack' => ['time' => '15:00', 'day' => '30', 'month' => 'august'],
                    'closing' => ['time' => '09:00', 'day' => '03', 'month' => 'september'],
                    'eta_sur' => ['day' => '03', 'month' => 'september'],
                    'etd_sur' => ['day' => '04', 'month' => 'september'],
                    'eta_klang' => ['day' => '10', 'month' => 'september'],
                    'remarks' => 'TPS',
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'INFERRO',
                    'voyage' => '046W',
                    'open_stack' => ['time' => '15:00', 'day' => '03', 'month' => 'september'],
                    'closing' => ['time' => '09:00', 'day' => '07', 'month' => 'september'],
                    'eta_sur' => ['day' => '07', 'month' => 'september'],
                    'etd_sur' => ['day' => '08', 'month' => 'september'],
                    'eta_klang' => ['day' => '12', 'month' => 'september'],
                    'remarks' => 'TPS',
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'MTT SANDAKAN',
                    'voyage' => '80W',
                    'open_stack' => ['time' => '15:00', 'day' => '11', 'month' => 'september'],
                    'closing' => ['time' => '09:00', 'day' => '15', 'month' => 'september'],
                    'eta_sur' => ['day' => '15', 'month' => 'september'],
                    'etd_sur' => ['day' => '16', 'month' => 'september'],
                    'eta_klang' => ['day' => '19', 'month' => 'september'],
                    'remarks' => 'TPS',
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'KOTA JOHAN',
                    'voyage' => '0079W',
                    'open_stack' => ['time' => '15:00', 'day' => '18', 'month' => 'september'],
                    'closing' => ['time' => '09:00', 'day' => '22', 'month' => 'september'],
                    'eta_sur' => ['day' => '22', 'month' => 'september'],
                    'etd_sur' => ['day' => '23', 'month' => 'september'],
                    'eta_klang' => ['day' => '26', 'month' => 'september'],
                    'remarks' => 'TPS',
                ],
                [
                    'line' => 'GSL',
                    'vessel' => 'INFERRO',
                    'voyage' => '047W',
                    'open_stack' => ['time' => '15:00', 'day' => '25', 'month' => 'september'],
                    'closing' => ['time' => '09:00', 'day' => '29', 'month' => 'september'],
                    'eta_sur' => ['day' => '29', 'month' => 'september'],
                    'etd_sur' => ['day' => '30', 'month' => 'september'],
                    'eta_klang' => ['day' => '03', 'month' => 'october'],
                    'remarks' => 'TPS',
                ],
            ];
        @endphp

        <!-- NVOCC Schedule Section -->
        <section id="nvocc-schedule" class="nvocc-schedule section">
            <div class="container section-title">
                <h2 class="text-uppercase" x-text="translations.messages.{{ $scheduleMonth }}"></h2>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th class="text-uppercase" x-text="translations.messages.vessel"></th>
                                <th class="text-uppercase" x-text="translations.messages.voyage"></th>
                                <th class="text-uppercase" x-text="translations.messages.open_stack"></th>
                                <th class="text-uppercase" x-text="translations.messages.closing_cargo"></th>
                                <th class="text-uppercase" x-text="translations.messages.eta_surabaya"></th>
                                <th class="text-uppercase" x-text="translations.messages.etd_surabaya"></th>
                                <th class="text-uppercase" x-text="translations.messages.eta_klang"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($schedules as $item)
                                <tr>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['line'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['vessel'] }}
                                        </div>
                                    </td>
                                    <td class="align-middle">{{ $item['voyage'] }}</td>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['open_stack']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['open_stack']['day'] }}
                                            <span x-text="translations.messages.{{ $item['open_stack']['month'] }}"></span>
                                        </div>
                                    </td>
                                    <td>
                                        <span
                                            class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                            {{ $item['closing']['time'] }}
                                        </span>
                                        <div class="margin-10px-top font-size14">
                                            {{ $item['closing']['day'] }}
                                            <span x-text="translations.messages.{{ $item['closing']['month'] }}"></span>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_sur']['month'] }}"></span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['etd_sur']['day'] }}
                                        <span x-text="translations.messages.{{ $item['etd_sur']['month'] }}"></span>
                                    </td>
                                    <td class="align-middle">
                                        {{ $item['eta_klang']['day'] }}
                                        <span x-text="translations.messages.{{ $item['eta_klang']['month'] }}"></span>
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