<form action="{{ route('contact.send') }}" method="POST" id="contact-form" class="php-email-form" data-aos="fade-up" data-aos-delay="200" novalidate>
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