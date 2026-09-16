<!-- WhatsApp Floating Chat Widget -->
<div class="wa-hover-zone">
    <div class="wa-popup" id="waPopup" role="dialog" aria-modal="true" aria-labelledby="waPopupTitle">
        <div class="wa-popup-header">
            <div class="wa-popup-header-icon" aria-hidden="true">
                <i class="bi bi-whatsapp"></i>
            </div>
            <div class="wa-popup-header-text">
                <strong id="waPopupTitle" x-text="translations.messages.wa_start_conversation">{{ __('messages.wa_start_conversation') }}</strong>
                <span x-text="translations.messages.wa_click_member">{{ __('messages.wa_click_member') }}</span>
            </div>
            <button type="button" class="wa-popup-close" id="waClose" aria-label="Close WhatsApp chat popup">&times;</button>
        </div>
        <div class="wa-popup-agents">
            @foreach(config('whatsapp.agents', []) as $key => $agent)
                <a :href="'https://wa.me/{{ $agent['phone'] }}?text=' + encodeURIComponent('Hi, I\'m interested in your services. (via website)')"
                    class="wa-agent" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp with {{ $agent['title'] }} agent">
                    <div class="wa-agent-info">
                        <span>{{ $agent['title'] }}</span>
                    </div>
                    <i class="bi bi-whatsapp" aria-hidden="true"></i>
                </a>
            @endforeach
        </div>
    </div>
    <button type="button" class="wa-widget" id="waButton" aria-label="Open WhatsApp Chat" aria-expanded="false" aria-controls="waPopup">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </button>
</div>
<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center" aria-label="Scroll to top"><i class="bi bi-shift-fill" aria-hidden="true"></i></a>