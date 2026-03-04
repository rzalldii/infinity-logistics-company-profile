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
            <h2 class="text-uppercase" x-text="translations.messages.march"></h2>
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
                                    MTT SANDAKAN
                                </div>
                            </td>
                            <td class="align-middle">071 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    15:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    25 <span x-text="translations.messages.february"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    09:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    02 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">02 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">03 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">06 <span x-text="translations.messages.march"></span></td>
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
                            <td class="align-middle">287 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    15:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    06 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    09:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    10 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">10 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">11 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">14 <span x-text="translations.messages.march"></span></td>
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
                            <td class="align-middle">038 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    15:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    13 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    09:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    17 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">17 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">18 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">21 <span x-text="translations.messages.march"></span></td>
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
                            <td class="align-middle">072 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    15:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    18 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    09:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    22 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">22 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">23 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">26 <span x-text="translations.messages.march"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    CELSIUS EINDHOVEN
                                </div>
                            </td>
                            <td class="align-middle">028 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    06 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    03:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    10 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">10 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">11 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">17 <span x-text="translations.messages.march"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    WAN HANG HENG YUAN
                                </div>
                            </td>
                            <td class="align-middle">006 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    14 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    03:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    18 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">18 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">19 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">25 <span x-text="translations.messages.march"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    HALLEY
                                </div>
                            </td>
                            <td class="align-middle">010 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    17 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    03:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    21 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">21 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">22 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">27 <span x-text="translations.messages.march"></span></td>
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
                            <td class="align-middle">333 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    19 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    03:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    23 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">23 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">24 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">30 <span x-text="translations.messages.march"></span></td>
                        </tr>
                        <tr>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    COSCO
                                </span>
                                <div class="margin-10px-top font-size14">
                                    CELSIUS EINDHOVEN
                                </div>
                            </td>
                            <td class="align-middle">029 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    26 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    03:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    30 <span x-text="translations.messages.march"></span>
                                </div>
                            </td>
                            <td class="align-middle">30 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">31 <span x-text="translations.messages.march"></span></td>
                            <td class="align-middle">06 <span x-text="translations.messages.april"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /NVOCC Schedule Section -->
</main>
@endsection('content')