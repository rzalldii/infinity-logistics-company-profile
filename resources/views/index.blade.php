@extends('master')
@section('title')
Infinity Logistics Indonesia
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
    <!-- Hero Section -->
    <section id="hero" class="hero section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
                    <h1>Next Decade. Next Wave.</h1>
                    <p>AT INFINITY, WE ASPIRE TO LEAP TO THE NEXT LEVEL OF ACHIEVEMENTS, GOING FROM GOOD TO GREAT</p>
                    <div class="d-flex">
                        <a href="/#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/hero-img.webp" width="546" height="513" alt="Container Infinity" class="img-fluid animated" fetchpriority="high"/>
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <!-- Featured Services Section -->
    <section id="featured-services" class="featured-services section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-eye icon"> Vision</i>
                        </h2>
                        <p>To Become The Leading Regional Logistics Provider By Empowering Export Growth Through World Class Services</p>
                    </div>
                </div>
                <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-bullseye icon"> Mission</i>
                        </h2>
                        <p>To Deliver Innovative And Reliable Logistics Solutions Through Our Integrated Global Network Ensuring The Seamless Flow Of Export Goods</p>
                    </div>
                </div>
		        <div class="col-lg-4 d-flex" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative text-center">
                        <h2>
                            <i class="bi bi-gem icon"> Core Values</i>
                        </h2>
                        <p>Integrity, People Driven, Technology Oriented, Customer Focus, Innovation & Excellence, Teamwork, HSEC Responbility</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Featured Services Section -->
    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container section-title" data-aos="fade-up">
            <span>About Us<br></span>
            <h2>About</h2>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="row gy-4">
                    <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php echo url('/'); ?>/img/about.webp" width="546" height="386" alt="About Infinity" class="img-fluid" loading="lazy">
                        <!-- <a href="https://www.youtube.com/watch?v=zx4s5h1Fats&ab_channel=MuhammadMohdAzam" class="glightbox pulsating-play-btn"></a> -->
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <p>
                            We are a logistics service provider headquartered in Malaysia, with a strong
                            operational presence in Surabaya, Indonesia, and across Southeast Asia. Our
                            services cover five key areas: 
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> <span>NVOCC (Non-Vessel Operating Common Carrier)</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Freight Forwarding Services</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Domestic Forwarding Services</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Flexitank Solutions and Related Services</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Project Logistics Services</span></li>
                            <li><i class="bi bi-check2-all"></i> <span>Customs Clearance Services</span></li>
                        </ul>
                        <p>
                            We specialize in providing efficient and reliable logistics solutions across a
                            wide range of industries. Our team is dedicated to delivering high-quality,
                            efficient logistics services to meet the diverse needs of our clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /About Section -->
    <!-- Stats Section -->
    <section id="stats" class="stats section">
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Years Experience</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="20000" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Shipments Handled</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="350" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Clients Active</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item text-center w-100 h-100">
                        <span data-purecounter-start="0" data-purecounter-end="40" data-purecounter-duration="1" class="purecounter"></span>
                        <p>Countries Served</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Stats Section -->
    <!-- Features Section -->
    <section id="features" class="features section light-background">
        <div class="container" data-aos="fade-up">
            <div class="row align-items-center">
                <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">
                    <img src="<?php echo url('/'); ?>/img/feature.webp" width="451" height="564" alt="Feature Infinity" class="img-fluid" loading="lazy">
                </div>
                <div class="col-lg-7 py-5 py-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <h2>Why Choose Us</h2>
                    <h3>Efficient, Reliable, and Cost-Effective Solutions</h3>
                    <p>
                        We ensure consistent and dependable delivery, with goods reaching their destination
                        safely and securely. Our solutions are also designed to offer exceptional value,
                        delivering high-quality service at competitive prices.
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="300">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/GLOBAL.webp" alt="GLOBAL" loading="lazy"/>
                                    <h4>Global Reach</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/END-TO-END.webp" alt="END-TO-END" loading="lazy"/>
                                    <h4>End-to-End Service</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/24-HOUR.webp" alt="24-HOUR" loading="lazy"/>
                                    <h4>24-Hour Support</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/SPECIALIZED.webp" alt="SPECIALIZED" loading="lazy"/>
                                    <h4>Specialized Handling</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Features Section -->
    <!-- Deliver Section -->
    <section id="deliver" class="deliver section">
        <div class="container" data-aos="fade-up">
            <div class="row mb-5">
                <div class="col-md-6 text-center mx-auto" data-aos="fade-up" data-aos-delay="0">
                    <h2 data-aos="fade-up" data-aos-delay="100">How It Works</h2>
                    <p data-aos="fade-up" data-aos-delay="200">
                        Our process for managing shipments is designed to make it simple and efficient.
                        Follow these easy steps to get started:
                    </p>
                </div>
            </div>
            <div class="row g-md-5">
                <div class="col-md-6 col-lg-3">
                    <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative" data-aos="fade-up" data-aos-delay="0">
                        <div data-aos="fade-right" data-aos-delay="300"><img class="arch-line" src="<?php echo url('/'); ?>/img/arch-line.svg" alt="Arch Line"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">1</span>
                        <div>
                            <h3>Check Rates with Us</h3>
                            <p>
                                Contact us directly to inquire about the latest rates for all logistics
                                services, ensuring you get the best value.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="step-card reverse text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <div data-aos="fade-right" data-aos-delay="700"><img class="arch-line reverse" src="<?php echo url('/'); ?>/img/arch-line-reverse.svg" alt="Arch Line Reverse"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">2</span>
                        <h3>Check Services, Space, and Requirements</h3>
                        <p>
                            Review available services, storage space, and specific requirements to tailor
                            your logistics needs.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="800">
                    <div class="step-card text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <div data-aos="fade-right" data-aos-delay="1100"><img class="arch-line" src="<?php echo url('/'); ?>/img/arch-line.svg" alt="Arch Line"></div>
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">3</span>
                        <h3>Confirmation of Booking and Delivery Order</h3>
                        <p>
                            Secure your booking by confirming your shipment details and placing the delivery
                            order.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="1200">
                    <div class="step-card last text-center h-100 d-flex flex-column justify-content-start position-relative">
                        <span class="step-number rounded-circle text-center fw-bold mb-5 mx-auto">4</span>
                        <div>
                            <h3>Shipment Ongoing</h3>
                            <p>
                                Stay updated on your shipment is progress and directly reach out to us for any
                                urgent inquiries or status updates.                               
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Deliver Section -->
    <!-- Services Section -->
    <section id="services" class="services section light-background">
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
    <!-- ... Section -->
    <!-- <section id="..." class="... section light-background">
    </section> -->
    <!-- /... Section -->
    <!-- News Section -->
    <!-- <section id="news" class="news section">
        <div class="container section-title" data-aos="fade-up">
            <span>Our News</span>
            <h2>News</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo url('/'); ?>/img/news/news-1.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div class="position-relative">
                        <img class="img-fluid w-100" src="<?php echo url('/'); ?>/img/news/news-2.jpg" alt="">
                        <div class="position-absolute bg-primary d-flex flex-column align-items-center justify-content-center rounded-circle"
                            style="width: 60px; height: 60px; bottom: -30px; right: 30px;">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="bg-secondary" style="padding: 30px;">
                        <h4 class="font-weight-bold mb-3">Kasd tempor diam sea justo dolor</h4>
                        <p>Dolor sea ipsum ipsum et. Erat duo lorem magna vero dolor dolores. Rebum eirmod no dolor diam dolor amet ipsum. Lorem lorem sea sed diam est lorem magna</p>
                        <a class="border-bottom border-primary text-uppercase text-decoration-none" href="">Read More <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- /News Section -->
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
    <!-- Team Section -->
    <section id="team" class="team section light-background">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Management</span>
            <h2>Management</h2>
        </div>
        <div class="container">
            <div class="row gy-5 justify-content-center">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="member">
                        <div class="pic"><img src="<?php echo url('/'); ?>/img/team.webp" class="img-fluid" alt="Member Infinity" loading="lazy"></div>
                        <div class="member-info">
                            <h3>Ayu Wulan Maya Sary</h3>
                            <span>Director</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Team Section -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">
        <div class="container section-title" data-aos="fade-up">
            <span>Our Clients</span>
            <h2>Clients</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper init-swiper">
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
                        },
                        "breakpoints": {
                            "320": {
                            "slidesPerView": 2,
                            "spaceBetween": 40
                            },
                            "480": {
                            "slidesPerView": 3,
                            "spaceBetween": 60
                            },
                            "640": {
                            "slidesPerView": 4,
                            "spaceBetween": 80
                            },
                            "992": {
                            "slidesPerView": 6,
                            "spaceBetween": 120
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-1.webp" class="img-fluid" alt="AJINOMOTO INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-2.webp" class="img-fluid" alt="WILMAR CAHAYA INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-3.webp" class="img-fluid" alt="GUDANG GARAM" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-4.webp" class="img-fluid" alt="SINAR MAS AGRO RESOURCES AND TECHNOLOGY" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-5.webp" class="img-fluid" alt="INDO OIL PERKASA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-6.webp" class="img-fluid" alt="GUNTNER INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-7.webp" class="img-fluid" alt="KEMIRA CHEMICALS INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-8.webp" class="img-fluid" alt="SAHATI HAMPARAN TANGGUH" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-9.webp" class="img-fluid" alt="DUNIA KIMIA JAYA" loading="lazy"></div>
                </div>
            </div>
            <div class="swiper init-swiper" dir="rtl">
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
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 2,
                                "spaceBetween": 40
                            },
                            "480": {
                                "slidesPerView": 3,
                                "spaceBetween": 60
                            },
                            "640": {
                                "slidesPerView": 4,
                                "spaceBetween": 80
                            },
                            "992": {
                                "slidesPerView": 6,
                                "spaceBetween": 120
                            }
                        },
                        "rtl": true
                    }
                </script>
                <div class="swiper-wrapper align-items-center">
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-10.webp" class="img-fluid" alt="LOKA REFRACTORIES WIRA JATIM" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-11.webp" class="img-fluid" alt="AGROMINA WICAKSANA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-12.webp" class="img-fluid" alt="OMYA INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-13.webp" class="img-fluid" alt="DELTA HIJAU ABADI" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-14.webp" class="img-fluid" alt="BONANZA MEGAH" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-15.webp" class="img-fluid" alt="INDOKEMIKA JAYATAMA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-16.webp" class="img-fluid" alt="NYLEX INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-17.webp" class="img-fluid" alt="PROTAS MALANG INDONESIA" loading="lazy"></div>
                    <div class="swiper-slide"><img src="<?php echo url('/'); ?>/img/clients/clients-18.webp" class="img-fluid" alt="KIRANA MEGATARA" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Clients Section -->
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <span>Contact Us</span>
            <h2>Contact</h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Our Address</h3>
                                <p>Plaza BRI, 12th Floor, Suite 1206,</p>
                                <p>Jl. Jendral Basuki Rahmad 122,</p>
                                <p>Surabaya City, East Java Indonesia</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p>(+62)31-5492926</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p>cssurabaya@infinity-sby.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3>Our Working Hours</h3>
                                <p>Monday to Friday - 08:30 to 17:00 WIB</p>
                                <p>Saturday - 08:30 to 13:00 WIB</p>
                                <p>Sunday - Closed</p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus"
                            title="Google Maps" frameborder="0" style="border:0; width: 100%; height: 310px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        @honeypot
                        <div class="row gy-4">
                            <h4 class="text-center">
                                GET IN TOUCH
                            </h4>
                            <p>
                                <strong>You can reach anytime.</strong> Contact us via call or email, or simply fill out the form below and we will get back to you as soon as possible.
                            </p>
                            <div class="col-md-12">
                                <input type="text" name="name" id="name-field" class="form-control" placeholder="Your Name *" required="">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email-field" class="form-control" placeholder="Your Email *" required="">
                            </div>
                            <div class="col-md-12">
                                <textarea rows="10" name="message" id="message-field"  class="form-control" placeholder="Your Message *" required=""></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" name="subscribe" id="subscribe-checkbox" class="form-check-input" value="yes">
                                    <label for="subscribe-checkbox" class="form-check-label">
                                        <strong>Join Our Newsletter.</strong> Subscribe to our newsletter and receive the latest news about our services!
                                    </label>
                                </div>
                            </div>
                            <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}" data-size="flexible" data-theme="light"></div>
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            <input type="hidden" name="turnstile_token" id="turnstile_token">
                            <div class="col-md-12">
                                <button type="submit" id="submit-button"><i class="bi bi-send-fill"></i><span> Send Message</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /Contact Section -->

    <script src="https://www.googletagmanager.com/gtag/js?id={{ env('ANALYTICS_KEY') }}" defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render={{ env('RECAPTCHA_SITE_KEY') }}&badge=bottomleft" defer></script>
    <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" defer></script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '{{ env('ANALYTICS_KEY') }}');
    </script>

    <script>
        document.getElementById("submit-button").addEventListener("click", function (e) {
            e.preventDefault();

            const form = document.getElementById("contact-form");
            const name = document.getElementById("name-field").value.trim();
            const email = document.getElementById("email-field").value.trim();
            const message = document.getElementById("message-field").value.trim();

            if (!name || !email || !message) {
                Swal.fire({
                    icon: "warning",
                    title: "Incomplete Form",
                    allowOutsideClick: false,
                    showConfirmButton: false,
                    timer: 2000,
                });
                return;
            }

            grecaptcha.ready(function () {
                grecaptcha.execute("{{ env('RECAPTCHA_SITE_KEY') }}", { action: "submit" }).then(function (token) {
                    document.getElementById("recaptcha_token").value = token;

                    const turnstileToken = turnstile.getResponse();
                    document.getElementById("turnstile_token").value = turnstileToken;

                    const formData = new FormData(form);

                    Swal.fire({
                        title: 'Loading',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading();
                        }
                    });
                    fetch("{{ route('send.email') }}", {
                        method: "POST",
                        headers: {
                            "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                        },
                        body: formData
                    })
                    .then(async response => {
                        const data = await response.json().catch(() => ({}));

                        if (response.ok) {
                            Swal.fire({
                                icon: "success",
                                title: "Success!",
                                text: data.message || "Message sent successfully.",
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                            form.reset();
                        } else {
                            let errorText = "Message not sent.";

                            if (data.errors) {
                                errorText = Object.values(data.errors).flat().join("\n");
                            } else if (data.message) {
                                errorText = data.message;
                            }

                            Swal.fire({
                                icon: "error",
                                title: "Failed!",
                                text: errorText,
                                allowOutsideClick: false,
                                showConfirmButton: false,
                                timer: 3000,
                            });
                        }
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "Unable to connect to the server.",
                            allowOutsideClick: false,
                            showConfirmButton: false,
                            timer: 3000,
                        });
                    });
                });
            });
        });
    </script>
</main>
@endsection('content')