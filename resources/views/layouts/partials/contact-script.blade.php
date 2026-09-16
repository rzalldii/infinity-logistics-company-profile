@pushOnce('vendor-scripts')
<script src="{{ asset('vendor/sweetalert2/js/sweetalert2.all.min.js') }}" defer></script>
@endPushOnce
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