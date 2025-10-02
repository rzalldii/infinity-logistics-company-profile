@extends('master')
@section('title')
Infinity Logistics Indonesia | Customs Clearance
@endsection('title')
@section('meta')
<meta name="description" content="Discover fast and efficient solutions for customs clearance with
our services. We help streamline document processing and customs procedures, ensuring your
shipments are smooth and compliant with regulations. Contact us now for reliable service."/>
<meta name="keywords" content="customs clearance, import clearance, export clearance, customs
services, customs documentation, shipping solutions, freight forwarding, import/export regulations,
international shipping, logistics, customs compliance, trade services"/>
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
                            <a href="/nvocc"><i class="bi bi-arrow-right-circle"></i><span>NVOCC</span></a>
                            <a href="/freight-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Freight Forwarding</span></a>
                            <a href="/domestic-forwarding"><i class="bi bi-arrow-right-circle"></i><span>Domestic Forwarding</span></a>
                            <a href="/flexitank-flexibag"><i class="bi bi-arrow-right-circle"></i><span>Flexitank / Flexibag</span></a>
                            <a href="/project-logistics"><i class="bi bi-arrow-right-circle"></i><span>Project Logistics</span></a>
                            <a href="/customs-clearance" class="active"><i class="bi bi-arrow-right-circle"></i><span>Customs Clearance</span></a>
                        </div>
                    </div>
                    <div class="service-box">
                        <h2>Download Catalog</h2>
                        <div class="download-catalog">
                            <a href="<?php echo url('/'); ?>/pdf/Company-Profile-INF.pdf"><i class="bi bi-filetype-pdf"></i><span>Company Profile INF</span></a>
                        </div>
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
                                <a href="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE1.webp" data-gallery="services-customs-clearance" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE1.webp" class="img-fluid services-img-swipe" alt="CUSTOMS CLEARANCE1">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE2.webp" data-gallery="services-customs-clearance" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE2.webp" class="img-fluid services-img-swipe" alt="CUSTOMS CLEARANCE2">
                                </a>
                            </div>
                            <div class="swiper-slide">
                                <a href="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE3.webp" data-gallery="services-customs-clearance" class="glightbox preview-link">
                                    <img src="<?php echo url('/'); ?>/img/services details/CUSTOMS CLEARANCE3.webp" class="img-fluid services-img-swipe" alt="CUSTOMS CLEARANCE3">
                                </a>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <h3>Customs Clearance</h3>
                    <p>
                        Customs clearance is an essential process that ensures goods are imported and
                        exported in compliance with both local and international regulations. It involves
                        preparing and submitting necessary documentation, including customs declarations,
                        invoices, and certificates of origin, along with paying any applicable duties and
                        taxes. A smooth and accurate clearance process is vital for businesses to avoid
                        delays, fines, or penalties during international trade.
                    </p>
                    <p>
                        In Surabaya, our customs clearance services are particularly efficient due to our
                        in-depth understanding of the local regulatory environment and our strong
                        relationships with customs authorities. Our team is skilled at handling the
                        complexities of Indonesian customs regulations, ensuring that all paperwork is
                        processed quickly and correctly, minimizing delays and ensuring shipments move
                        seamlessly through the customs process.
                    </p>
                    <p>
                        What sets us apart is our ability to quickly resolve any issues that may arise
                        during the clearance process. If complications occur, our dedicated team is ready
                        to address and resolve them promptly, ensuring that shipments continue on their
                        journey without unnecessary interruptions. With our reliable and professional
                        services, businesses can trust us to manage their customs clearance needs and keep
                        their supply chains running smoothly.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Service Details Section -->
</main>
@endsection('content')