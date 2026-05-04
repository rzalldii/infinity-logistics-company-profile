<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class MaintenanceController extends Controller
{
    public function clear(string $token)
    {
        abort_unless($token === 'INF-01', 403);

        $commands = [
            'cache:clear',
            'config:clear',
            'route:clear',
            'view:clear',
            'config:cache',
            'route:cache',
            'view:cache',
        ];

        $results = [];

        foreach ($commands as $command) {
            try {
                $exitCode = Artisan::call($command);

                $results[] = [
                    'command'   => $command,
                    'status'    => $exitCode === 0 ? 'SUCCESS' : 'FAILED',
                    'output'    => trim(Artisan::output()) ?: '-',
                ];
            } catch (\Throwable $e) {
                $results[] = [
                    'command'   => $command,
                    'status'    => 'ERROR',
                    'output'    => $e->getMessage(),
                ];
            }
        }

        $html = '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Maintenance Result</title>
            <style>
                body {
                    font-family: Arial, sans-serif;
                    background: #0f172a;
                    color: #e2e8f0;
                    margin: 0;
                    padding: 30px;
                }
                .container {
                    max-width: 1000px;
                    margin: 0 auto;
                }
                h1 {
                    margin-bottom: 20px;
                    font-size: 28px;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                    background: #111827;
                    border-radius: 10px;
                    overflow: hidden;
                }
                th, td {
                    padding: 14px 16px;
                    border-bottom: 1px solid #1f2937;
                    text-align: left;
                    vertical-align: top;
                }
                th {
                    background: #1e293b;
                    color: #f8fafc;
                }
                .success {
                    color: #22c55e;
                    font-weight: bold;
                }
                .failed, .error {
                    color: #ef4444;
                    font-weight: bold;
                }
                code {
                    background: #0b1220;
                    padding: 2px 6px;
                    border-radius: 6px;
                    color: #facc15;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>Maintenance Result</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Command</th>
                            <th>Status</th>
                            <th>Output</th>
                        </tr>
                    </thead>
                    <tbody>';
        foreach ($results as $row) {
            $statusClass = strtolower($row['status']);
            $html .= '
                        <tr>
                            <td><code>' . e($row['command']) . '</code></td>
                            <td class="' . e($statusClass) . '">' . e($row['status']) . '</td>
                            <td>' . nl2br(e($row['output'])) . '</td>
                        </tr>';
        }
        $html .= '
                    </tbody>
                </table>
            </div>
        </body>
        </html>';

        return response($html)->header('Content-Type', 'text/html');
    }
}
