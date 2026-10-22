<?php

return [
    'agents' => [
        'freight_forwarding' => [
            'title_key' => 'freight_forwarding',
            'msg_key'   => 'wa_msg_freight_forwarding',
            'phone'     => env('WA_FREIGHT_FORWARDING', '628113299943'),
            // 'phone' => env('WA_FREIGHT_FORWARDING', '6282221190306'),
            // 'phone' => env('WA_FREIGHT_FORWARDING', '6281553602916'),
        ],
        'nvocc' => [
            'title_key' => 'nvocc',
            'msg_key'   => 'wa_msg_nvocc',
            'phone'     => env('WA_NVOCC', '6281330681408'),
        ],
        'domestic' => [
            'title_key' => 'domestic_forwarding',
            'msg_key'   => 'wa_msg_domestic',
            'phone'     => env('WA_DOMESTIC', '6282139131081'),
        ],
        'flexitank' => [
            'title_key' => 'flexitank_flexibag',
            'msg_key'   => 'wa_msg_flexitank',
            'phone'     => env('WA_FLEXITANK', '6281999198916'),
        ],
        'warehouse' => [
            'title_key' => 'warehouse',
            'msg_key'   => 'wa_msg_warehouse',
            'phone'     => env('WA_WAREHOUSE', '6281216882027'),
        ],
    ],
];
