@extends('master')
@section('title')
{{ __('messages.nvocc_schedule_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Temukan jadwal NVOCC terkini untuk freight laut FCL/LCL, cek rute, kapal, cutoff, dan ETD/ETA secara real time untuk memperlancar perencanaan ekspor impor."/>
<meta name="keywords" content="jadwal NVOCC, jadwal kapal, sailing schedule, jadwal pengiriman, jadwal freight laut, FCL, LCL, ETD, ETA, waktu cutoff, voyage, voyage number, rotasi pelabuhan, transit time, ocean carrier, shipping line, rute, pelabuhan muat, pelabuhan bongkar, POL, POD, booking kontainer, track and trace, tanggal keberangkatan, tanggal tiba, feeder, transshipment, jadwal ekspor, jadwal impor, terminal cutoff, CFS, ICD, berth window, nomor booking, House Bill of Lading, Master Bill of Lading, HBL, MBL, jadwal kontainer, cek jadwal kapal, schedule kapal, jadwal pelayaran, cek ETD ETA, lacak kontainer, booking slot, jadwal vessel"/>
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
            <h2 class="text-uppercase" x-text="translations.messages.october"></h2>
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
                                    INFERRO
                                </div>
                            </td>
                            <td class="align-middle">031 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    25 <span x-text="translations.messages.september"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    29 <span x-text="translations.messages.september"></span>
                                </div>
                            </td>
                            <td class="align-middle">30 <span x-text="translations.messages.september"></span></td>
                            <td class="align-middle">01 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">04 <span x-text="translations.messages.october"></span></td>
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
                            <td class="align-middle">281 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    09 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    13 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">14 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">15 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">18 <span x-text="translations.messages.october"></span></td>
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
                            <td class="align-middle">032 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    16 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    20 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">21 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">22 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">25 <span x-text="translations.messages.october"></span></td>
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
                            <td class="align-middle">065 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    16:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    23 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    10:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    27 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">28 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">29 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">01 <span x-text="translations.messages.november"></span></td>
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
                            <td class="align-middle">001 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    01 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    05 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">06 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">07 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">13 <span x-text="translations.messages.october"></span></td>
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
                            <td class="align-middle">328 N</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    15 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    19 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">20 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">21 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">27 <span x-text="translations.messages.october"></span></td>
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
                            <td class="align-middle">002 W</td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    08:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    22 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td>
                                <span class="bg padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">
                                    02:00
                                </span>
                                <div class="margin-10px-top font-size14">
                                    26 <span x-text="translations.messages.october"></span>
                                </div>
                            </td>
                            <td class="align-middle">27 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">28 <span x-text="translations.messages.october"></span></td>
                            <td class="align-middle">03 <span x-text="translations.messages.november"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /NVOCC Schedule Section -->
</main>
@endsection('content')