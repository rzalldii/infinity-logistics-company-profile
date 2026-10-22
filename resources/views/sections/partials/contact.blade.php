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
                                <input type="text" name="name" id="name-field" class="form-control" placeholder=" " autocomplete="name" required aria-required="true">
                                <label for="name-field" class="form-label" x-text="translations.messages.placeholder_name">{{ __('messages.placeholder_name') }}</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="inputgroup">
                                <input type="email" name="email" id="email-field" class="form-control" placeholder=" " autocomplete="email" required aria-required="true">
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
                                <textarea rows="10" name="message" id="message-field" class="form-control" placeholder=" " required aria-required="true"></textarea>
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
                                    <span class="btn-text-default" x-text="translations.messages.send_message">{{ __('messages.send_message') }}</span>
                                    <span class="btn-text-loading d-none" x-text="translations.messages.form_sending">{{ __('messages.form_sending') }}</span>
                                    <span class="btn-text-success d-none" x-text="translations.messages.form_sent">{{ __('messages.form_sent') }}</span>
                                    <span class="btn-text-error d-none" x-text="translations.messages.form_failed">{{ __('messages.form_failed') }}</span>
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
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("contact-form");
            const submitBtn = document.getElementById("submit-button");
            if (!form || !submitBtn) return;
            const btnTextDefault = submitBtn.querySelector(".btn-text-default");
            const btnTextLoading = submitBtn.querySelector(".btn-text-loading");
            const btnTextSuccess = submitBtn.querySelector(".btn-text-success");
            const btnTextError = submitBtn.querySelector(".btn-text-error");
            let buttonResetTimer = null;
            const nameInput = document.getElementById("name-field");
            const emailInput = document.getElementById("email-field");
            const subjectInput = document.getElementById("subject-field");
            const messageInput = document.getElementById("message-field");
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            const fields = [
                { el: nameInput, validate: (val) => Boolean(val && val.trim().length > 0) },
                { el: emailInput, validate: (val) => Boolean(val && emailRegex.test(val.trim())) },
                { el: subjectInput, validate: (val) => Boolean(val && val.trim().length > 0) },
                { el: messageInput, validate: (val) => Boolean(val && val.trim().length > 0) }
            ];
            function setButtonState(state) {
                if (buttonResetTimer) clearTimeout(buttonResetTimer);
                submitBtn.classList.remove('is-loading', 'is-success', 'is-error');
                if (btnTextDefault) btnTextDefault.classList.add('d-none');
                if (btnTextLoading) btnTextLoading.classList.add('d-none');
                if (btnTextSuccess) btnTextSuccess.classList.add('d-none');
                if (btnTextError) btnTextError.classList.add('d-none');
                if (state === 'loading') {
                    submitBtn.classList.add('is-loading');
                    submitBtn.disabled = true;
                    if (btnTextLoading) btnTextLoading.classList.remove('d-none');
                } else if (state === 'success') {
                    submitBtn.classList.add('is-success');
                    submitBtn.disabled = true;
                    if (btnTextSuccess) btnTextSuccess.classList.remove('d-none');
                    buttonResetTimer = setTimeout(() => {
                        setButtonState('default');
                    }, 4000);
                } else if (state === 'error') {
                    submitBtn.classList.add('is-error');
                    submitBtn.disabled = false;
                    if (btnTextError) btnTextError.classList.remove('d-none');
                    buttonResetTimer = setTimeout(() => {
                        setButtonState('default');
                    }, 3500);
                } else {
                    submitBtn.disabled = false;
                    if (btnTextDefault) btnTextDefault.classList.remove('d-none');
                }
            }
            // Real-time invalid clearance upon user interaction
            fields.forEach(({ el, validate }) => {
                if (!el) return;
                const onInteract = () => {
                    if (el.classList.contains('is-invalid') && validate(el.value)) {
                        el.classList.remove('is-invalid');
                        el.removeAttribute('aria-invalid');
                        const group = el.closest('.inputgroup');
                        if (group) group.classList.remove('shake');
                    }
                };
                el.addEventListener('input', onInteract);
                el.addEventListener('change', onInteract);
            });
            form.addEventListener('submit', function (e) {
                e.preventDefault();
                let firstInvalidField = null;
                let hasError = false;
                fields.forEach(({ el, validate }) => {
                    if (!el) return;
                    const isValid = validate(el.value);
                    const group = el.closest('.inputgroup');
                    if (!isValid) {
                        hasError = true;
                        el.setAttribute('aria-invalid', 'true');
                        el.classList.add('is-invalid');
                        if (group) {
                            group.classList.remove('shake');
                            void group.offsetWidth; // Reflow to re-trigger CSS shake animation
                            group.classList.add('shake');
                        }
                        if (!firstInvalidField) {
                            firstInvalidField = el;
                        }
                    } else {
                        el.removeAttribute('aria-invalid');
                        el.classList.remove('is-invalid');
                        if (group) {
                            group.classList.remove('shake');
                        }
                    }
                });
                if (hasError) {
                    if (firstInvalidField) {
                        firstInvalidField.focus({ preventScroll: false });
                        firstInvalidField.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                    return;
                }
                setButtonState('loading');
                const formData = new FormData(form);
                fetch("{{ route('contact.send') }}", {
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
                        'Accept': 'application/json'
                    },
                    body: formData
                })
                .then(async (response) => {
                    if (response.ok) {
                        setButtonState('success');
                        form.reset();
                        fields.forEach(({ el }) => {
                            if (el) {
                                el.removeAttribute('aria-invalid');
                                el.classList.remove('is-invalid');
                                const group = el.closest('.inputgroup');
                                if (group) group.classList.remove('shake');
                            }
                        });
                    } else {
                        setButtonState('error');
                        const data = await response.json().catch(() => ({}));
                        let firstBackendInvalid = null;
                        if (data.errors) {
                            Object.keys(data.errors).forEach(key => {
                                const input = form.querySelector(`[name="${key}"]`);
                                if (input) {
                                    input.classList.add('is-invalid');
                                    input.setAttribute('aria-invalid', 'true');
                                    const group = input.closest('.inputgroup');
                                    if (group) {
                                        group.classList.remove('shake');
                                        void group.offsetWidth;
                                        group.classList.add('shake');
                                    }
                                    if (!firstBackendInvalid) firstBackendInvalid = input;
                                }
                            });
                        }
                        if (firstBackendInvalid) {
                            firstBackendInvalid.focus();
                            firstBackendInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
                        }
                    }
                })
                .catch(() => {
                    setButtonState('error');
                });
            });
        });
    </script>
@endpush