<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Artisan;

final class MaintenanceController extends Controller
{
    public function clear(string $token): View
    {
        abort_unless(
            hash_equals((string) config('app.maintenance_clear_token'), $token),
            403
        );
        $commands = [
            'optimize:clear',
            'config:cache',
            'route:cache',
            'view:cache',
        ];
        $results = [];
        $overallSuccess = true;
        foreach ($commands as $command) {
            try {
                $exitCode = Artisan::call($command);
                $status = $exitCode === 0 ? 'SUCCESS' : 'FAILED';
                if ($status === 'FAILED') {
                    $overallSuccess = false;
                }
                $results[] = [
                    'command' => $command,
                    'status' => $status,
                    'output' => trim(Artisan::output()) ?: '-',
                ];
            } catch (\Throwable $e) {
                $overallSuccess = false;
                $results[] = [
                    'command' => $command,
                    'status' => 'ERROR',
                    'output' => $e->getMessage(),
                ];
            }
        }
        $timestamp = now()->format('d M Y, H:i:s');
        return view('maintenance.result', compact('results', 'overallSuccess', 'timestamp'));
    }
}