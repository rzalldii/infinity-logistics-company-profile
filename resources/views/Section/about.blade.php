@extends('master')
@section('title')
Infinity Logistics Indonesia | About
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
                        <img
                            src="<?php echo url('/'); ?>/img/about.webp"
                            srcset="<?php echo url('/'); ?>/img/about-546x386.webp 546w, <?php echo url('/'); ?>/img/about-364x257.webp 364w" 
                            sizes="(max-width: 600px) 364px, 546px"
                            class="img-fluid"
                            alt="About Infinity"
                        >
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
                    <img
                        src="<?php echo url('/'); ?>/img/feature.webp"
                        srcset="<?php echo url('/'); ?>/img/feature-451x564.webp 451w, <?php echo url('/'); ?>/img/about-388x485.webp 388w" 
                        sizes="(max-width: 600px) 388px, 451px"
                        class="img-fluid"
                        alt="Feature Infinity"
                    >
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
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/GLOBAL.webp" alt="GLOBAL"/>
                                    <h4>Global Reach</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="400">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/END-TO-END.webp" alt="END-TO-END"/>
                                    <h4>End-to-End Service</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="500">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/24-HOUR.webp" alt="24-HOUR"/>
                                    <h4>24-Hour Support</h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" data-aos="fade-up" data-aos-delay="600">
                            <div class="features-items p-3">
                                <div class="features-items-details py-4 px-3">
                                    <img class="align-self-center mb-3" src="<?php echo url('/'); ?>/img/icons/SPECIALIZED.webp" alt="SPECIALIZED"/>
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