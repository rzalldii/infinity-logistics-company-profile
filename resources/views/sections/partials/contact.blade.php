<!-- Contact Section -->
<section id="contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
        <span aria-hidden="true" x-text="translations.messages.contact_section">{{ __('messages.contact_section') }}</span>
        @if(!empty($isH1))
            <h1 x-text="translations.messages.contact">{{ __('messages.contact') }}</h1>
        @else
            <h2 x-text="translations.messages.contact">{{ __('messages.contact') }}</h2>
        @endif
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">
            <div class="col-lg-5">
                <div class="info-wrap">
                    <div class="info-item d-flex">
                        <i class="bi bi-geo-alt flex-shrink-0" aria-hidden="true"></i>
                        <div>
                            <h2 x-text="translations.messages.our_address">{{ __('messages.our_address') }}</h2>
                            <p x-text="translations.messages.head_office_address">{{ __('messages.head_office_address') }}</p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-telephone flex-shrink-0" aria-hidden="true"></i>
                        <div>
                            <h2 x-text="translations.messages.call_us">{{ __('messages.call_us') }}</h2>
                            <p><a href="tel:+62315492926" class="text-reset">+6231 549 2926</a></p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-envelope flex-shrink-0" aria-hidden="true"></i>
                        <div>
                            <h2 x-text="translations.messages.email_us">{{ __('messages.email_us') }}</h2>
                            <p><a href="mailto:cssurabaya@infinity-sby.com" class="text-reset">cssurabaya@infinity-sby.com</a></p>
                        </div>
                    </div>
                    <div class="info-item d-flex">
                        <i class="bi bi-clock flex-shrink-0" aria-hidden="true"></i>
                        <div>
                            <h2 x-text="translations.messages.working_hours">{{ __('messages.working_hours') }}</h2>
                            <p x-text="translations.messages.monday_friday">{{ __('messages.monday_friday') }}</p>
                            <p x-text="translations.messages.saturday">{{ __('messages.saturday') }}</p>
                            <p x-text="translations.messages.sunday">{{ __('messages.sunday') }}</p>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.241613433687!2d112.73795435839659!3d-7.273136269158283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbddceec0c2d%3A0x3a125fab20e07b6b!2sPT.%20Infinity%20Logistics%20Indonesia!5e0!3m2!1sen!2sus!4v1752200391253!5m2!1sen!2sus" title="Google Maps - PT Infinity Logistics Indonesia" frameborder="0" style="border:0; width: 100%; height: 245px;" width="600" height="245" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-lg-7">
                <form action="{{ route('contact.send') }}" method="POST" id="contact-form" class="php-email-form" novalidate>
                    @csrf
                    @honeypot
                    <div class="row gy-4 info-form">
                        <h2 class="text-center" x-text="translations.messages.get_in_touch">{{ __('messages.get_in_touch') }}</h2>
                        <p>
                            <strong x-text="translations.messages.contact_intro">{{ __('messages.contact_intro') }}</strong>
                            <span x-text="translations.messages.contact_description">{{ __('messages.contact_description') }}</span>
                        </p>
                        <div class="col-md-6">
                            <div class="inputgroup">
                                <input type="text" name="name" id="name-field" class="form-control" autocomplete="name" required aria-required="true">
                                <label for="name-field" class="form-label" x-text="translations.messages.placeholder_name">{{ __('messages.placeholder_name') }}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputgroup">
                                <input type="email" name="email" id="email-field" class="form-control" autocomplete="email" required aria-required="true">
                                <label for="email-field" class="form-label" x-text="translations.messages.placeholder_email">{{ __('messages.placeholder_email') }}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inputgroup">
                                <select name="subject" id="subject-field" class="form-select" required aria-required="true">
                                    <option value="" disabled selected></option>
                                    <option value="quotation" x-text="translations.messages.subject_rfq">{{ __('messages.subject_rfq') }}</option>
                                    <option value="general" x-text="translations.messages.subject_general">{{ __('messages.subject_general') }}</option>
                                    <option value="partnership" x-text="translations.messages.subject_partnership">{{ __('messages.subject_partnership') }}</option>
                                    <option value="technical" x-text="translations.messages.subject_technical">{{ __('messages.subject_technical') }}</option>
                                    <option value="feedback" x-text="translations.messages.subject_feedback">{{ __('messages.subject_feedback') }}</option>
                                    <option value="other" x-text="translations.messages.subject_other">{{ __('messages.subject_other') }}</option>
                                </select>
                                <label for="subject-field" class="form-label" x-text="translations.messages.placeholder_subject">{{ __('messages.placeholder_subject') }}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="inputgroup">
                                <textarea rows="10" name="message" id="message-field" class="form-control" required aria-required="true"></textarea>
                                <label for="message-field" class="form-label" x-text="translations.messages.placeholder_message">{{ __('messages.placeholder_message') }}</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-check">
                                <input type="checkbox" name="subscribe" id="subscribe-checkbox" class="form-check-input" value="yes">
                                <label for="subscribe-checkbox" class="form-check-label">
                                    <strong x-text="translations.messages.join_newsletter">{{ __('messages.join_newsletter') }}</strong>
                                    <span x-text="translations.messages.newsletter_description">{{ __('messages.newsletter_description') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="button-wrapper">
                                <button type="submit" id="submit-button">
                                    <div class="icon-wrapper">
                                        <i class="bi bi-send-fill" aria-hidden="true"></i>
                                    </div>
                                    <span x-text="translations.messages.send_message">{{ __('messages.send_message') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- /Contact Section -->
@pushOnce('vendor-scripts')
    <script src="{{ asset('vendor/sweetalert2/js/sweetalert2.all.min.js') }}" defer></script>
@endPushOnce
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const submitBtn = document.getElementById("submit-button");
            const form = document.getElementById("contact-form");
            if (!submitBtn || !form) return;
            function getTrans(key, fallback) {
                try {
                    if (window.Alpine && Alpine.$data(document.querySelector('[x-data]'))?.translations?.messages?.[key]) {
                        return Alpine.$data(document.querySelector('[x-data]')).translations.messages[key];
                    }
                } catch (e) {}
                return fallback;
            }
            submitBtn.addEventListener("click", function (e) {
                e.preventDefault();
                const nameInput = document.getElementById("name-field");
                const emailInput = document.getElementById("email-field");
                const subjectInput = document.getElementById("subject-field");
                const messageInput = document.getElementById("message-field");
                const fields = [nameInput, emailInput, subjectInput, messageInput];
                let hasError = false;
                fields.forEach(field => {
                    if (!field) return;
                    if (!field.value.trim()) {
                        field.setAttribute("aria-invalid", "true");
                        field.classList.add("is-invalid");
                        hasError = true;
                    } else {
                        field.removeAttribute("aria-invalid");
                        field.classList.remove("is-invalid");
                    }
                });
                if (hasError) {
                    Swal.fire({
                        icon: "warning",
                        title: getTrans("form_incomplete_title", "{{ __('messages.form_incomplete_title') }}"),
                        allowOutsideClick: false,
                        showConfirmButton: true,
                        confirmButtonColor: "#042470"
                    });
                    return;
                }
                const formData = new FormData(form);
                Swal.fire({
                    title: getTrans("form_sending_title", "{{ __('messages.form_sending_title') }}"),
                    allowOutsideClick: false,
                    didOpen: () => {
                        Swal.showLoading();
                    }
                });
                submitBtn.disabled = true;
                fetch("{{ route('contact.send') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value,
                        "Accept": "application/json"
                    },
                    body: formData
                })
                .then(async response => {
                    submitBtn.disabled = false;
                    if (response.ok) {
                        Swal.fire({
                            icon: "success",
                            title: getTrans("form_success_title", "{{ __('messages.form_success_title') }}"),
                            allowOutsideClick: false,
                            showConfirmButton: true,
                            confirmButtonColor: "#042470"
                        });
                        form.reset();
                        fields.forEach(f => {
                            if (f) {
                                f.removeAttribute("aria-invalid");
                                f.classList.remove("is-invalid");
                            }
                        });
                    } else {
                        const data = await response.json().catch(() => ({}));
                        let errorMsg = data.message;
                        if (data.errors) {
                            const firstErrKey = Object.keys(data.errors)[0];
                            if (firstErrKey && data.errors[firstErrKey][0]) {
                                errorMsg = data.errors[firstErrKey][0];
                            }
                        }
                        Swal.fire({
                            icon: "error",
                            title: errorMsg || getTrans("form_failed_title", "{{ __('messages.form_failed_title') }}"),
                            allowOutsideClick: false,
                            showConfirmButton: true,
                            confirmButtonColor: "#042470"
                        });
                    }
                })
                .catch(() => {
                    submitBtn.disabled = false;
                    Swal.fire({
                        icon: "error",
                        title: getTrans("form_network_error_title", "{{ __('messages.form_network_error_title') }}"),
                        allowOutsideClick: false,
                        showConfirmButton: true,
                        confirmButtonColor: "#042470"
                    });
                });
            });
        });
    </script>
@endpush