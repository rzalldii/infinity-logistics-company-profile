<?php

return [
    'agents' => [
        'freight_forwarding' => [
            'title' => 'FREIGHT FORWARDING',
            'phone' => env('WA_FREIGHT_FORWARDING', '6281553602916'),
        ],
        'nvocc' => [
            'title' => 'NVOCC',
            'phone' => env('WA_NVOCC', '6281330681408'),
        ],
        'domestic' => [
            'title' => 'DOMESTIC',
            'phone' => env('WA_DOMESTIC', '6282139131081'),
        ],
        'flexitank' => [
            'title' => 'FLEXITANK',
            'phone' => env('WA_FLEXITANK', '6281999198916'),
        ],
        'warehouse' => [
            'title' => 'WAREHOUSE',
            'phone' => env('WA_WAREHOUSE', '6281216882027'),
        ],
    ],
];