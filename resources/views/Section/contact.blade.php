@extends('master')
@section('title')
Infinity Logistics Indonesia | Contact
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