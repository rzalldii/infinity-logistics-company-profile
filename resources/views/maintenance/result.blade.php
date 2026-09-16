<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance Result - Infinity Logistics Indonesia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;600&family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-primary: #042470;
            --brand-accent: #0b3cb1;
            --bg-dark: #090e1a;
            --surface-card: #12192b;
            --surface-border: #1e2942;
            --text-main: #f1f5f9;
            --text-muted: #8493ad;
            --success-bg: rgba(34, 197, 94, 0.15);
            --success-border: #22c55e;
            --success-text: #4ade80;
            --error-bg: rgba(239, 68, 68, 0.15);
            --error-border: #ef4444;
            --error-text: #f87171;
        }
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-dark);
            color: var(--text-main);
            min-height: 100vh;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }
        .container {
            width: 100%;
            max-width: 860px;
            background: var(--surface-card);
            border: 1px solid var(--surface-border);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 16px;
            padding-bottom: 24px;
            border-bottom: 1px solid var(--surface-border);
            margin-bottom: 28px;
        }
        .header-title h1 {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: -0.02em;
        }
        .header-title p {
            margin-top: 4px;
            font-size: 13px;
            color: var(--text-muted);
        }
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 18px;
            border-radius: 9999px;
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        .status-pill.success {
            background: var(--success-bg);
            border: 1px solid var(--success-border);
            color: var(--success-text);
        }
        .status-pill.failed {
            background: var(--error-bg);
            border: 1px solid var(--error-border);
            color: var(--error-text);
        }
        .table-wrap {
            overflow-x: auto;
            border: 1px solid var(--surface-border);
            border-radius: 12px;
            background: rgba(10, 15, 28, 0.6);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }
        th {
            padding: 14px 18px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--text-muted);
            background: rgba(255, 255, 255, 0.02);
            border-bottom: 1px solid var(--surface-border);
        }
        td {
            padding: 16px 18px;
            font-size: 13px;
            border-bottom: 1px solid var(--surface-border);
            vertical-align: top;
        }
        tr:last-child td {
            border-bottom: none;
        }
        code {
            font-family: 'JetBrains Mono', monospace;
            font-size: 13px;
            color: #93c5fd;
            background: rgba(30, 58, 138, 0.3);
            padding: 4px 8px;
            border-radius: 6px;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }
        .badge {
            display: inline-block;
            padding: 4px 10px;
            border-radius: 6px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.05em;
        }
        .badge.success {
            background: var(--success-bg);
            color: var(--success-text);
            border: 1px solid rgba(34, 197, 94, 0.3);
        }
        .badge.failed, .badge.error {
            background: var(--error-bg);
            color: var(--error-text);
            border: 1px solid rgba(239, 68, 68, 0.3);
        }
        .output-box {
            font-family: 'JetBrains Mono', monospace;
            font-size: 12px;
            color: #cbd5e1;
            white-space: pre-wrap;
            word-break: break-word;
            line-height: 1.5;
        }
        .footer {
            margin-top: 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: var(--text-muted);
        }
        .back-link {
            color: #60a5fa;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s;
        }
        .back-link:hover {
            color: #93c5fd;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <div class="header-title">
                <h1>Optimization & Cache Maintenance</h1>
                <p>Executed at {{ $timestamp }}</p>
            </div>
            <div class="status-pill {{ $overallSuccess ? 'success' : 'failed' }}">
                <span>●</span> {{ $overallSuccess ? 'ALL SUCCESS' : 'SOME FAILED' }}
            </div>
        </header>
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th style="width: 25%;">Artisan Command</th>
                        <th style="width: 15%;">Status</th>
                        <th style="width: 60%;">Output Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $row)
                        <tr>
                            <td><code>{{ $row['command'] }}</code></td>
                            <td>
                                <span class="badge {{ strtolower($row['status']) }}">{{ $row['status'] }}</span>
                            </td>
                            <td>
                                <div class="output-box">{!! nl2br(e($row['output'])) !!}</div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="footer">
            <span>PT. Infinity Logistics Indonesia &bull; Server Maintenance</span>
            <a href="/" class="back-link">&larr; Return to Website</a>
        </footer>
    </div>
</body>
</html>