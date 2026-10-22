<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>DevOps Maintenance Console • Infinity Logistics</title>
    <link href="/img/favicon.webp" rel="icon" type="image/webp">
    <link href="/img/apple-touch-icon.webp" rel="apple-touch-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-body: #070a13;
            --bg-grid: rgba(255, 255, 255, 0.02);
            --surface-panel: #0d1322;
            --surface-card: #121a2f;
            --surface-card-hover: #151e36;
            --surface-border: #1e2a47;
            --surface-border-subtle: rgba(255, 255, 255, 0.06);
            --text-heading: #f8fafc;
            --text-body: #cbd5e1;
            --text-muted: #64748b;
            --text-dim: #475569;
            --brand-primary: #042470;
            --brand-accent: #3b82f6;
            --success-glow: rgba(16, 185, 129, 0.25);
            --success-border: rgba(16, 185, 129, 0.4);
            --success-bg: rgba(16, 185, 129, 0.1);
            --success-text: #34d399;
            --danger-glow: rgba(239, 68, 68, 0.25);
            --danger-border: rgba(239, 68, 68, 0.4);
            --danger-bg: rgba(239, 68, 68, 0.1);
            --danger-text: #f87171;
            --terminal-bg: #060911;
            --terminal-border: #182238;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--bg-body);
            background-image:
                radial-gradient(ellipse at 50% 0%, rgba(4, 36, 112, 0.35) 0%, transparent 60%),
                linear-gradient(to right, var(--bg-grid) 1px, transparent 1px),
                linear-gradient(to bottom, var(--bg-grid) 1px, transparent 1px);
            background-size: 100% 100%, 32px 32px, 32px 32px;
            color: var(--text-body);
            min-height: 100vh;
            padding: 32px 16px 48px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .console-container {
            width: 100%;
            max-width: 920px;
            animation: consoleFadeIn 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
            will-change: transform, opacity;
        }
        @keyframes consoleFadeIn {
            from {
                opacity: 0;
                transform: translateY(14px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        /* Top Brand Header */
        .top-brand {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
            padding: 0 4px;
        }
        .brand-meta {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }
        .brand-logo {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #fff;
            padding: 5px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.4);
            flex-shrink: 0;
        }
        .brand-logo img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .brand-text h2 {
            font-size: 15px;
            font-weight: 700;
            color: var(--text-heading);
            letter-spacing: -0.01em;
            line-height: 1.2;
        }
        .brand-text span {
            font-size: 12px;
            color: var(--text-muted);
            font-weight: 500;
        }
        .env-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 10px;
            border-radius: 9999px;
            font-size: 11px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            background: rgba(59, 130, 246, 0.12);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: #93c5fd;
        }
        /* Main Panel */
        .console-panel {
            background: var(--surface-panel);
            border: 1px solid var(--surface-border);
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.65);
            position: relative;
            overflow: hidden;
        }
        .console-panel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.5), transparent);
        }
        /* Header Hero */
        .console-header {
            display: flex;
            align-items: flex-start;
            justify-content: space-between;
            gap: 20px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--surface-border);
            flex-wrap: wrap;
        }
        .header-info h1 {
            font-size: 24px;
            font-weight: 800;
            color: var(--text-heading);
            letter-spacing: -0.02em;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .header-info p {
            margin-top: 6px;
            font-size: 13px;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 6px;
        }
        /* Beacon Pill */
        .status-beacon-pill {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            position: relative;
            user-select: none;
        }
        .status-beacon-pill.success {
            background: var(--success-bg);
            border: 1px solid var(--success-border);
            color: var(--success-text);
            box-shadow: 0 0 20px var(--success-glow);
        }
        .status-beacon-pill.failed {
            background: var(--danger-bg);
            border: 1px solid var(--danger-border);
            color: var(--danger-text);
            box-shadow: 0 0 20px var(--danger-glow);
        }
        .beacon-indicator {
            position: relative;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: currentColor;
            flex-shrink: 0;
        }
        .beacon-indicator::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            border: 2px solid currentColor;
            opacity: 0.7;
            animation: beaconPulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
            will-change: transform, opacity;
        }
        @keyframes beaconPulse {
            0% {
                transform: scale(0.9);
                opacity: 0.8;
            }
            70% {
                transform: scale(2.2);
                opacity: 0;
            }
            100% {
                transform: scale(0.9);
                opacity: 0;
            }
        }
        /* KPI Summary Grid */
        .kpi-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 12px;
            margin: 24px 0;
        }
        .kpi-card {
            background: var(--surface-card);
            border: 1px solid var(--surface-border-subtle);
            border-radius: 12px;
            padding: 14px 16px;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }
        .kpi-label {
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
        }
        .kpi-value {
            font-size: 17px;
            font-weight: 700;
            color: var(--text-heading);
            font-family: 'JetBrains Mono', monospace;
        }
        .kpi-value.text-success {
            color: var(--success-text);
        }
        .kpi-value.text-danger {
            color: var(--danger-text);
        }
        /* Toolbar Actions */
        .toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 16px;
            flex-wrap: wrap;
        }
        .toolbar-title {
            font-size: 13px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            color: var(--text-muted);
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .toolbar-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        /* Buttons with micro-interactions */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            font-family: inherit;
            font-size: 12px;
            font-weight: 600;
            padding: 8px 14px;
            border-radius: 8px;
            cursor: pointer;
            border: 1px solid transparent;
            text-decoration: none;
            transition: transform 0.15s cubic-bezier(0.16, 1, 0.3, 1),
                        background-color 0.15s ease,
                        border-color 0.15s ease,
                        box-shadow 0.15s ease;
            will-change: transform;
            user-select: none;
        }
        .btn:hover {
            transform: translateY(-1px);
        }
        .btn:active {
            transform: scale(0.96);
        }
        .btn-subtle {
            background: var(--surface-card);
            border-color: var(--surface-border);
            color: var(--text-body);
        }
        .btn-subtle:hover {
            background: var(--surface-card-hover);
            border-color: #2e3e68;
            color: #fff;
        }
        .btn-primary {
            background: linear-gradient(135deg, #0b3cb1 0%, #042470 100%);
            border-color: rgba(59, 130, 246, 0.4);
            color: #fff;
            box-shadow: 0 4px 12px rgba(4, 36, 112, 0.4);
        }
        .btn-primary:hover {
            border-color: rgba(96, 165, 250, 0.6);
            box-shadow: 0 6px 16px rgba(11, 60, 177, 0.5);
        }
        /* Command Stream Cards */
        .command-stream {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }
        .command-card {
            background: var(--surface-card);
            border: 1px solid var(--surface-border);
            border-radius: 12px;
            overflow: hidden;
            transition: border-color 0.2s ease;
        }
        .command-card:hover {
            border-color: #2d3b5e;
        }
        .command-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            padding: 12px 16px;
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--surface-border-subtle);
            flex-wrap: wrap;
        }
        .command-name {
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: #93c5fd;
        }
        .command-prompt {
            color: var(--text-muted);
            user-select: none;
            font-weight: 700;
        }
        .command-meta {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .badge-status {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            padding: 3px 8px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.04em;
            font-family: 'JetBrains Mono', monospace;
        }
        .badge-status.success {
            background: var(--success-bg);
            border: 1px solid var(--success-border);
            color: var(--success-text);
        }
        .badge-status.failed,
        .badge-status.error {
            background: var(--danger-bg);
            border: 1px solid var(--danger-border);
            color: var(--danger-text);
        }
        .btn-mini-copy {
            background: transparent;
            border: 1px solid transparent;
            color: var(--text-muted);
            padding: 4px 8px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 11px;
            display: inline-flex;
            align-items: center;
            gap: 4px;
            transition: color 0.15s, background-color 0.15s;
        }
        .btn-mini-copy:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.06);
        }
        .command-terminal {
            background: var(--terminal-bg);
            padding: 14px 16px;
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            line-height: 1.6;
            color: #cbd5e1;
            white-space: pre-wrap;
            word-break: break-word;
            overflow-x: auto;
        }
        /* Console Footer */
        .console-footer {
            margin-top: 28px;
            padding-top: 20px;
            border-top: 1px solid var(--surface-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            flex-wrap: wrap;
            font-size: 12px;
            color: var(--text-muted);
        }
        .footer-note {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .footer-note span.bullet {
            color: var(--text-dim);
        }
        .return-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #93c5fd;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.15s cubic-bezier(0.16, 1, 0.3, 1), color 0.15s;
        }
        .return-link:hover {
            color: #bfdbfe;
            transform: translateX(-3px);
        }
        /* Toast Notification */
        .toast-notify {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: #1e293b;
            color: #fff;
            padding: 10px 18px;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            font-size: 12px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            transform: translateY(20px);
            opacity: 0;
            pointer-events: none;
            transition: transform 0.2s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.2s ease;
            z-index: 1000;
        }
        .toast-notify.show {
            transform: translateY(0);
            opacity: 1;
        }
        @media (max-width: 640px) {
            body {
                padding: 16px 10px 32px;
            }
            .console-panel {
                padding: 18px;
                border-radius: 16px;
            }
            .header-info h1 {
                font-size: 20px;
            }
            .status-beacon-pill {
                width: 100%;
                justify-content: center;
            }
            .toolbar {
                flex-direction: column;
                align-items: stretch;
            }
            .toolbar-actions {
                width: 100%;
                justify-content: stretch;
            }
            .toolbar-actions .btn {
                flex: 1;
            }
            .console-footer {
                flex-direction: column;
                align-items: flex-start;
            }
        }
        @media (prefers-reduced-motion: reduce) {
            .console-container {
                animation: none;
            }
            .beacon-indicator::after {
                animation: none;
            }
            .btn, .return-link {
                transition: none;
            }
        }
    </style>
</head>
<body>
    <main class="console-container">
        <!-- Top Brand Meta -->
        <header class="top-brand">
            <a href="/" class="brand-meta" title="Return to Homepage">
                <div class="brand-logo">
                    <img src="/img/logo.webp" alt="Infinity Logistics Logo" width="28" height="28">
                </div>
                <div class="brand-text">
                    <h2>PT. Infinity Logistics Indonesia</h2>
                    <span>DevOps & Infrastructure Console</span>
                </div>
            </a>
            <div class="env-badge">
                <span>●</span> {{ app()->environment() }}
            </div>
        </header>
        <!-- Main Console Card -->
        <section class="console-panel" aria-label="Maintenance Console Output">
            <div class="console-header">
                <div class="header-info">
                    <h1>
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #60a5fa;"><polyline points="4 17 10 11 4 5"></polyline><line x1="12" y1="19" x2="20" y2="19"></line></svg>
                        Artisan Cache & Route Optimizer
                    </h1>
                    <p>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                        Executed on {{ $timestamp }}
                    </p>
                </div>
                <div class="status-beacon-pill {{ $overallSuccess ? 'success' : 'failed' }}">
                    <span class="beacon-indicator"></span>
                    {{ $overallSuccess ? 'All Systems Optimized' : 'Attention Required' }}
                </div>
            </div>
            <!-- KPI Metric Bar -->
            <div class="kpi-grid">
                <div class="kpi-card">
                    <span class="kpi-label">Commands Run</span>
                    <span class="kpi-value">{{ count($results) }} Tasks</span>
                </div>
                <div class="kpi-card">
                    <span class="kpi-label">Success Rate</span>
                    @php
                        $successfulCount = collect($results)->where('status', 'SUCCESS')->count();
                        $rate = count($results) > 0 ? round(($successfulCount / count($results)) * 100) : 100;
                    @endphp
                    <span class="kpi-value {{ $overallSuccess ? 'text-success' : 'text-danger' }}">
                        {{ $successfulCount }}/{{ count($results) }} ({{ $rate }}%)
                    </span>
                </div>
                <div class="kpi-card">
                    <span class="kpi-label">Cache State</span>
                    <span class="kpi-value text-success">Freshly Rebuilt</span>
                </div>
                <div class="kpi-card">
                    <span class="kpi-label">Framework</span>
                    <span class="kpi-value">Laravel {{ app()->version() }}</span>
                </div>
            </div>
            <!-- Toolbar Actions -->
            <div class="toolbar">
                <div class="toolbar-title">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    Execution Stream
                </div>
                <div class="toolbar-actions">
                    <button type="button" class="btn btn-subtle" id="copyAllBtn" onclick="copyFullLog()" title="Copy all outputs to clipboard">
                        <svg id="copyIcon" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                        <span id="copyText">Copy Full Log</span>
                    </button>
                    <button type="button" class="btn btn-primary" onclick="window.location.reload()" title="Re-run optimization commands">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg>
                        Run Again
                    </button>
                </div>
            </div>
            <!-- Command Output List -->
            <div class="command-stream">
                @foreach($results as $index => $row)
                    <article class="command-card">
                        <div class="command-header">
                            <div class="command-name">
                                <span class="command-prompt">$</span>
                                <span>php artisan {{ $row['command'] }}</span>
                            </div>
                            <div class="command-meta">
                                <button type="button" class="btn-mini-copy" onclick="copySingleLog('cmd-out-{{ $index }}', this)" title="Copy this command output">
                                    <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg>
                                    Copy
                                </button>
                                <span class="badge-status {{ strtolower($row['status']) }}">
                                    @if(strtolower($row['status']) === 'success')
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    @else
                                        <svg width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                    @endif
                                    {{ $row['status'] }}
                                </span>
                            </div>
                        </div>
                        <div class="command-terminal" id="cmd-out-{{ $index }}">{{ $row['output'] }}</div>
                    </article>
                @endforeach
            </div>
            <!-- Console Footer -->
            <footer class="console-footer">
                <div class="footer-note">
                    <span>PT Infinity Logistics Indonesia</span>
                    <span class="bullet">&bull;</span>
                    <span>Internal Server Maintenance</span>
                </div>
                <a href="/" class="return-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                    Return to Website
                </a>
            </footer>
        </section>
    </main>
    <!-- Hidden Raw Log Data for Quick Clipboard Copy -->
    <textarea id="rawLogData" style="display: none;" readonly>
    [PT Infinity Logistics Indonesia - Maintenance Report]
    Timestamp   : {{ $timestamp }}
    Status      : {{ $overallSuccess ? 'ALL SUCCESS' : 'SOME FAILED' }}
    Environment : {{ app()->environment() }}
    Framework   : Laravel {{ app()->version() }}
    @foreach($results as $row)
    ==================================================
    $ php artisan {{ $row['command'] }}
    Status : {{ $row['status'] }}
    Output :
    {{ $row['output'] }}
    @endforeach
    </textarea>
    <!-- Notification Toast -->
    <div id="toast" class="toast-notify" role="status" aria-live="polite">
        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
        <span id="toastMsg">Logs copied to clipboard</span>
    </div>
    <script>
        function showToast(message) {
            const toast = document.getElementById('toast');
            const msgEl = document.getElementById('toastMsg');
            if (!toast || !msgEl) return;
            msgEl.textContent = message;
            toast.classList.add('show');
            setTimeout(() => {
                toast.classList.remove('show');
            }, 2400);
        }
        function copyFullLog() {
            const rawData = document.getElementById('rawLogData').value.trim();
            const copyBtn = document.getElementById('copyAllBtn');
            const copyText = document.getElementById('copyText');
            const copyIcon = document.getElementById('copyIcon');
            navigator.clipboard.writeText(rawData).then(() => {
                if (copyText) copyText.textContent = 'Copied!';
                if (copyIcon) {
                    copyIcon.innerHTML = '<polyline points="20 6 9 17 4 12"></polyline>';
                    copyIcon.style.stroke = '#34d399';
                }
                showToast('Full maintenance log copied to clipboard');
                setTimeout(() => {
                    if (copyText) copyText.textContent = 'Copy Full Log';
                    if (copyIcon) {
                        copyIcon.innerHTML = '<rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>';
                        copyIcon.style.stroke = 'currentColor';
                    }
                }, 2200);
            }).catch(err => {
                showToast('Failed to copy: ' + err);
            });
        }
        function copySingleLog(elementId, btnElement) {
            const el = document.getElementById(elementId);
            if (!el) return;
            const text = el.innerText || el.textContent;
            navigator.clipboard.writeText(text.trim()).then(() => {
                const originalHtml = btnElement.innerHTML;
                btnElement.innerHTML = '<svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="#34d399" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg> Copied';
                showToast('Command output copied');
                setTimeout(() => {
                    btnElement.innerHTML = originalHtml;
                }, 1800);
            }).catch(err => {
                showToast('Failed to copy: ' + err);
            });
        }
    </script>
</body>
</html>