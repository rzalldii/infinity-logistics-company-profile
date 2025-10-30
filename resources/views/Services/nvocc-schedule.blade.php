@extends('master')
@section('title')
{{ __('messages.nvocc_schedule_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Jadwal kapal NVOCC Oktober 2025 Surabaya-Port Klang: GSL (Inferro, YM Interaction, MTT Sandakan) & COSCO dengan ETD/ETA, cargo closing, voyage number. Update sailing schedule mingguan untuk FCL booking real-time."/>
<meta name="keywords" content="jadwal NVOCC, NVOCC schedule, jadwal kapal Surabaya, sailing schedule Surabaya, jadwal kapal Port Klang, Surabaya Klang schedule, GSL schedule, COSCO schedule, vessel schedule Indonesia, shipping schedule Surabaya, cargo closing date, ETD Surabaya, ETA Surabaya, ETA Port Klang, voyage number, jadwal pelayaran, jadwal pengiriman, FCL schedule, container shipping schedule, weekly sailing schedule, jadwal mingguan, open stack date, booking schedule, shipping line schedule, Surabaya Malaysia schedule, Indonesia Malaysia shipping, freight schedule Surabaya, ocean freight schedule, sea freight schedule, vessel ETA ETD, jadwal keberangkatan kapal, jadwal kedatangan kapal, Port Klang West, Klang Barat, Tanjung Perak schedule, container vessel schedule, NVOCC Surabaya schedule, real-time schedule, updated schedule, cargo cutoff time, vessel arrival departure, shipping timetable, maritime schedule Indonesia, freight forwarder schedule, export schedule, import schedule, jadwal ekspor impor, booking cutoff, container booking schedule"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
                <a href="/nvocc" class="more-details-btn me-3" aria-label="NVOCC">
                    <i class="bi bi-arrow-left"></i>
                </a>
                <h1 class="mb-0" x-text="translations.messages.nvocc_schedule"></h1>
            </div>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- NVOCC Schedule Section -->
    <section id="nvocc-schedule" class="nvocc-schedule section">
        <div class="container section-title">
            <h2 class="text-uppercase" x-text="translations.messages.november"></h2>
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
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    GSL
                                </span>
                                <div class="margin-10px-top font-size14">
                                    YM INTERACTION
                                </div>
                            </td>
                            <td class="align-middle">282 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    31 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    04 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">04 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">05 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">08 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    GSL
                                </span>
                                <div class="margin-10px-top font-size14">
                                    INFERRO
                                </div>
                            </td>
                            <td class="align-middle">033 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    07 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    11 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">11 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">12 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">15 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    GSL
                                </span>
                                <div class="margin-10px-top font-size14">
                                    MTT SANDAKAN
                                </div>
                            </td>
                            <td class="align-middle">067 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    14 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    18 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">18 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">19 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">22 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    GSL
                                </span>
                                <div class="margin-10px-top font-size14">
                                    YM INTERACTION
                                </div>
                            </td>
                            <td class="align-middle">065 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    21 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    25 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">25 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">26 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">29 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    ERASMUS JUSTICE
                                </div>
                            </td>
                            <td class="align-middle">002 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    30 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    03 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">03 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">04 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">10 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    XIN TAI CANG
                                </div>
                            </td>
                            <td class="align-middle">329 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    13 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    17 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">17 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">18 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">24 <span x-text="translations.messages.november"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    BEROLINA C
                                </div>
                            </td>
                            <td class="align-middle">003 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    20 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    24 <span x-text="translations.messages.november"></span>
                                </div>
                            </td>
                            <td class="align-middle">24 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">25 <span x-text="translations.messages.november"></span></td>
                            <td class="align-middle">01 <span x-text="translations.messages.december"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /NVOCC Schedule Section -->
</main>
@endsection('content')