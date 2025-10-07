@extends('master')
@section('title')
Infinity Logistics Indonesia | Services
@endsection('title')
@section('meta')
<meta name="description" content="Professional freight forwarding services for international shipments.
We provide integrated logistics solutions with fast, secure, and efficient delivery worldwide."/>
<meta name="keywords" content="freight forwarding, logistics services, international shipping, supply
chain management, global logistics, transportation solutions, NVOCC, air freight, ocean freight, customs
clearance, cargo management, logistics provider, shipment tracking, bulk shipping, project logistics,
freight services, secure shipping, logistics company, door-to-door delivery, import export logistics,
forwarder surabaya, forwarding surabaya, shipping line surabaya, logistics surabaya, infinity surabaya,
pelayaran surabaya, logistik surabaya, freight forwarder surabaya, freight forwarding surabaya,
flexibag surabaya, flexitank surabaya, flexibag indonesia, flexitank indonesia, flexibag, flexitank,
forwarder indonesia, forwarding indonesia, shipping line indonesia, logistics indonesia, infinity
indonesia, logistik indonesia, freight forwarder indonesia, freight forwarding indonesia"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Services Section -->
    <section id="services" class="services section">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Services</span>
            <h2>Services</h2>
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/NVOCC.webp" alt="NVOCC" loading="lazy">
                        </div>
                        <a href="/nvocc" class="stretched-link">
                            <h3>NVOCC</h3>
                        </a>
                        <p>
                            Connecting Cargo, Without a Vessel.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/FREIGHT FORWARDING.webp" alt="FREIGHT FORWARDING" loading="lazy">
                        </div>
                        <a href="/freight-forwarding" class="stretched-link">
                            <h3>Freight Forwarding</h3>
                        </a>
                        <p>
                            Navigating Your Cargo, Wherever It Needs to Go.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/DOMESTIC FORWARDING.webp" alt="DOMESTIC FORWARDING" loading="lazy">
                        </div>
                        <a href="/domestic-forwarding" class="stretched-link">
                            <h3>Domestic Forwarding</h3>
                        </a>
                        <p>
                            Local Logistics Expertise, Nationwide Solutions.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/FLEXITANK FLEXIBAG.webp" alt="FLEXITANK FLEXIBAG" loading="lazy">
                        </div>
                        <a href="/flexitank-flexibag" class="stretched-link">
                            <h3>Flexitank / Flexibag</h3>
                        </a>
                        <p>
                            Transforming Containers for Liquid Freight.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/PROJECT LOGISTICS.webp" alt="PROJECT LOGISTICS" loading="lazy">
                        </div>
                        <a href="/project-logistics" class="stretched-link">
                            <h3>Project Logistics</h3>
                        </a>
                        <p>
                            Precision Logistics for Large-Scale Projects.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/CUSTOMS CLEARANCE.webp" alt="CUSTOMS CLEARANCE" loading="lazy">
                        </div>
                        <a href="/customs-clearance" class="stretched-link">
                            <h3>Customs Clearance</h3>
                        </a>
                        <p>
                            Simplifying Customs, Speeding Up Deliveries.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services Section -->
    <!-- Solutions Section -->
    <section id="solutions" class="solutions section">
        <div class="container" data-aos="fade-up">
            <ul class="nav nav-tabs row  d-flex" data-aos="fade-up" data-aos-delay="100">
                <li class="nav-item col-3">
                    <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#solutions-tab-1">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP.webp" alt="SHIP" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/SHIP-A.webp" alt="SHIP-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block">Sea Freight</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-2">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE.webp" alt="PLANE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/PLANE-A.webp" alt="PLANE-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block">Air Freight</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-3">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK.webp" alt="TRUCK" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/TRUCK-A.webp" alt="TRUCK-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block">Land Freight</h4>
                    </a>
                </li>
                <li class="nav-item col-3">
                    <a class="nav-link" data-bs-toggle="tab" data-bs-target="#solutions-tab-4">
                        <div class="icon">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE.webp" alt="WAREHOUSE" class="img-active" loading="lazy">
                            <img src="<?php echo url('/'); ?>/img/icons/WAREHOUSE-A.webp" alt="WAREHOUSE-A" class="img-inactive" loading="lazy">
                        </div>
                        <h4 class="d-none d-lg-block">Warehouse</h4>
                    </a>
                </li>
            </ul>
            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">
                <div class="tab-pane fade active show" id="solutions-tab-1">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Sea Freight Services</h3>
                            <p>
                                Infinity Logistics Indonesia provides cost-effective and reliable sea freight
                                solutions suitable for shipments of all sizes, from small packages to large
                                container loads. We prioritize the safe handling of your cargo and ensure it
                                reaches its destination securely, whether within Indonesia or internationally.
                                Our flexible sea freight services are backed by trusted partners, giving you
                                peace of mind throughout the shipping process.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Full Container Load (FCL)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Less Than Container Load (LCL)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Reefer Container</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>ISO Tank</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-1.webp" alt="Sea Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-2">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Air Freight Services</h3>
                            <p>
                                Our air freight services are designed to offer fast, reliable, and tailored
                                shipping solutions for your urgent and important shipments. From airport-to-door
                                delivery, Infinity Logistics Indonesia carefully manages every aspect of your
                                cargo, ensuring safe handling and secure arrival. With seamless service and
                                real-time tracking, you can remain informed and confident at every step of the
                                journey.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Domestic</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Export-Import</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Consolidation</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Full Charter</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-2.webp" alt="Air Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-3">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Land Freight Services</h3>
                            <p>
                                We offer versatile and dependable land freight solutions across all regions of
                                Indonesia. Our extensive fleet includes container trucks, wing box trucks,
                                single axle trucks, pick-ups, and grand vans, able to transport a wide range of
                                cargo types reliably and efficiently. Supported by competitive pricing and
                                professional handling at every stage, our land freight services connect cities,
                                provinces, and islands with ease and safety.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Full Truck Load (FTL)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Less Than Truck Load (LTL)</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Haulage</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Contract Carriage</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-3.webp" alt="Land Freight" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="solutions-tab-4">
                    <div class="row">
                        <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                            <h3>Warehouse Services</h3>
                            <p>
                               Infinity Logistics Indonesia's warehouse services provide secure and flexible
                               storage solutions tailored to meet your business demands. Featuring modern
                               storage facilities equipped with advanced inventory management technologies, we
                               ensure your goods are stored safely and handled with care. Our warehouse
                               solutions support efficient operations and provide you with real-time control
                               and monitoring, enabling smooth logistics flow and complete peace of mind.
                            </p>
                            <ul>
                                <li><i class="bi bi-check2-all"></i> <span>Warehouse Management Solution</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Modular Storage Solution</span></li>
                                <li><i class="bi bi-check2-all"></i> <span>Integrated Warehouse System</span></li>
                            </ul>
                        </div>
                        <div class="col-lg-6 order-1 order-lg-2 text-center">
                            <img src="<?php echo url('/'); ?>/img/services-4.webp" alt="Warehouse" class="img-fluid" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Solutions Section -->
    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section accent-background">
        <div class="container">
            <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                <div class="col-xl-10">
                    <div class="text-center">
                        <h3>Flexible and Reliable Freight Services</h3>
                        <p>
                            Discover our specialized Flexitank and forwarding solutions today.
                        </p>
                        <a class="cta-btn" href="/contact">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Call To Action Section -->
</main>
@endsection('content')