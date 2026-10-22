<!-- WhatsApp Floating Chat Widget -->
<div class="wa-hover-zone">
    <div class="wa-popup" id="waPopup" role="dialog" aria-modal="true" aria-labelledby="waPopupTitle">
        <div class="wa-popup-header">
            <div class="wa-popup-header-icon" aria-hidden="true">
                <i class="bi bi-whatsapp"></i>
                <span class="wa-status-dot" aria-hidden="true"></span>
            </div>
            <div class="wa-popup-header-text">
                <strong id="waPopupTitle" x-text="translations.messages.wa_start_conversation">{{ __('messages.wa_start_conversation') }}</strong>
                <span class="wa-status-text" x-text="translations.messages.wa_online_status">{{ __('messages.wa_online_status') }}</span>
            </div>
            <button type="button" class="wa-popup-close" id="waClose" aria-label="Close WhatsApp chat popup">&times;</button>
        </div>
        <div class="wa-popup-body">
            <div class="wa-popup-agents">
                @foreach(config('whatsapp.agents', []) as $key => $agent)
                    @php
                        $titleKey = $agent['title_key'] ?? $key;
                        $msgKey   = $agent['msg_key'] ?? 'wa_msg_' . $key;
                        $initialTitle = __('messages.' . $titleKey);
                        $initialMsg   = __('messages.' . $msgKey);
                    @endphp
                    <a :href="'https://wa.me/{{ $agent['phone'] }}?text=' + encodeURIComponent(translations.messages.{{ $msgKey }} || '{{ addslashes($initialMsg) }}')" href="https://wa.me/{{ $agent['phone'] }}?text={{ rawurlencode($initialMsg) }}" class="wa-agent" target="_blank" rel="noopener noreferrer" :aria-label="'Chat on WhatsApp with ' + (translations.messages.{{ $titleKey }} || '{{ addslashes($initialTitle) }}') + ' division'">
                        <span class="wa-agent-title" x-text="translations.messages.{{ $titleKey }}">{{ $initialTitle }}</span>
                        <i class="bi bi-chevron-right wa-agent-arrow" aria-hidden="true"></i>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <button type="button" class="wa-widget" id="waButton" aria-label="Open WhatsApp Chat" aria-expanded="false" aria-controls="waPopup">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </button>
</div>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll to top"><i class="bi bi-shift-fill" aria-hidden="true"></i></a>