@extends('master')
@section('title')
{{ __('messages.contact_title') }}
@endsection('title')
@section('meta')
<meta name="description" content="Hubungi kami untuk penawaran & dukungan: NVOCC, freight forwarding, flexitank, logistik proyek, kepabeanan, pergudangan. Kantor pusat Malaysia, Surabaya, Asia Tenggara."/>
<meta name="keywords" content="kontak logistik, kontak freight forwarder, hubungi forwarder, NVOCC, flexitank, logistik proyek, kepabeanan, bea cukai, pergudangan, freight laut, freight udara, freight darat, ekspor impor, Malaysia, Surabaya, Indonesia, Asia Tenggara, door-to-door, LCL, FCL"/>
@endsection('meta')
@section('content')
<main class="main">
    <!-- Contact Section -->
    <section id="contact" class="contact section">
        <div class="container section-title" data-aos="fade-up">
            <span x-text="translations.messages.contact_section"></span>
            <h2 x-text="translations.messages.contact"></h2>
        </div>
        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-5">
                    <div class="info-wrap">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.our_address"></h3>
                                <p x-text="translations.messages.head_office_address"></p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.call_us"></h3>
                                <p>(+62)31-5492926</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.email_us"></h3>
                                <p>cssurabaya@infinity-sby.com</p>
                            </div>
                        </div>
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-clock flex-shrink-0"></i>
                            <div>
                                <h3 x-text="translations.messages.working_hours"></h3>
                                <p x-text="translations.messages.monday_friday"></p>
                                <p x-text="translations.messages.saturday"></p>
                                <p x-text="translations.messages.sunday"></p>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus"
                            title="Google Maps" frameborder="0" style="border:0; width: 100%; height: 330px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form action="{{ route('send.email') }}" method="POST" id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                        @csrf
                        @honeypot
                        <div class="row gy-4">
                            <h4 class="text-center" x-text="translations.messages.get_in_touch"></h4>
                            <p>
                                <strong x-text="translations.messages.contact_intro"></strong>
                                <span x-text="translations.messages.contact_description"></span>
                            </p>
                            <div class="col-md-12">
                                <input type="text" name="name" id="name-field" class="form-control" :placeholder="translations.messages.placeholder_name" required="" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <input type="email" name="email" id="email-field" class="form-control" :placeholder="translations.messages.placeholder_email" required="" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <textarea rows="10" name="message" id="message-field"  class="form-control" :placeholder="translations.messages.placeholder_message" required="" autocomplete="off"></textarea>
                            </div>
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input type="checkbox" name="subscribe" id="subscribe-checkbox" class="form-check-input" value="yes">
                                    <label for="subscribe-checkbox" class="form-check-label">
                                        <strong x-text="translations.messages.join_newsletter"></strong>
                                        <span x-text="translations.messages.newsletter_description"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}" data-size="flexible" data-theme="light"></div>
                            <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                            <input type="hidden" name="turnstile_token" id="turnstile_token">
                            <div class="col-md-12">
                                <button type="submit" id="submit-button"><i class="bi bi-send-fill"></i><span x-text="translations.messages.send_message"></span></button>
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