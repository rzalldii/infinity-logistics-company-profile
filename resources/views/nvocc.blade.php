@extends('master')
@section('title')
Infinity Logistics Indonesia | NVOCC
@endsection('title')
@section('meta')
<meta name="description" content="Reliable NVOCC services offering flexible and cost-effective solutions
for international shipping. We manage cargo logistics, ensuring secure, efficient, and timely delivery
across global routes."/>
<meta name="keywords" content="NVOCC, Non-Vessel Operating Common Carrier, freight forwarding,
international shipping, ocean freight, logistics services, cargo management, container shipping,
import/export, customs clearance, supply chain solutions, global shipping, transport services,
multi-modal transport, shipping company, freight logistics"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Page Title -->
    <div class="page-title">
        <div class="container d-lg-flex justify-content-between align-items-center">
            <h1 class="mb-2 mb-lg-0">Service Details</h1>
        </div>
    </div>
    <!-- End Page Title -->
    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-box">
                        <h2>Services List</h2>
                        <div class="services-list">
                            <a href="#" class="active"><i class="bi bi-arrow-right-circle"></i><span>NVOCC</span></a>
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Freight Forwarding</span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Domestic Forwarding</span></a>
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span>Flexitank / Flexibag</span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span>Project Logistics</span></a>
                            <a href="/customs-clearance"><i class="bi bi-arrow-right-circle"></i><span>Customs Clearance</span></a>                       
                        </div>
                    </div>
                    <div class="service-box">
                        <h2>Download Catalog</h2>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/Company-Profile-INF.pdf"><i class="bi bi-filetype-pdf"></i><span>Company Profile INF</span></a>
                        </div>
                    </div>
                    <div class="help-box d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-headset help-icon"></i>
                        <h2>Have a Question?</h2>
                        <a href="tel:0315492926"><p class="d-flex align-items-center mt-2 mb-0"><i class="bi bi-telephone me-2"></i> <span>(+62)31-5492926</span></p></a>
                        <a href="mailto:cssurabaya@infinity-sby.com"><p class="d-flex align-items-center mt-1 mb-0"><i class="bi bi-envelope me-2"></i> <span>cssurabaya@infinity-sby.com</span></p></a>
                    </div>
                </div>
                <div class="col-lg-8 ps-lg-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-details-slider swiper init-swiper">
                        <script type="application/json" class="swiper-config">
                            {
                                "loop": true,
                                "speed": 600,
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": "auto",
                                "pagination": {
                                    "el": ".swiper-pagination",
                                    "type": "bullets",
                                    "clickable": true
                                }
                            }
                        </script>
                        <div class="swiper-wrapper align-items-center">
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/NVOCC1.webp" class="img-fluid services-img-swipe" alt="NVOCC1">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/NVOCC2.webp" class="img-fluid services-img-swipe" alt="NVOCC2">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/NVOCC3.webp" class="img-fluid services-img-swipe" alt="NVOCC3">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo url('/'); ?>/img/services details/NVOCC4.webp" class="img-fluid services-img-swipe" alt="NVOCC4">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>NVOCC</h3>
                    <p>
                        We specialize in Full Container Load (FCL) shipments, offering reliable space
                        allocation on a wide range of ocean liners operating across major trade routes
                        in Asia. Our network includes regular sailings to and from key ports in Malaysia,
                        Thailand, Indonesia, Singapore, Vietnam, India, and Myanmar. With multiple weekly
                        sailing schedules, our clients benefit from enhanced flexibility, allowing them
                        to select the most suitable departure dates and transit times that align with
                        their cargo planning and supply chain needs.
                    </p>
                    <p>
                        In support of the NVOCC (Non Vessel Operating Common Carrier) market, our Surabaya
                        Branch plays a vital role by providing high quality 20 ft High Cube containers.
                        These containers offer approximately 12% more payload capacity compared to
                        standard General Purpose (GP) containers, making them a cost effective option
                        for maximizing cargo volume per shipment. This additional space is particularly
                        advantageous for low density, high volume cargo, including items such as
                        chipboard, gypsum board, and sheet glass.
                    </p>
                    <p>
                        By combining consistent space availability, route flexibility, and container
                        specialization, we provide a robust FCL solution that caters to a diverse
                        range of industries and cargo profiles ensuring both operational efficiency
                        and cost optimization for exporters.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')