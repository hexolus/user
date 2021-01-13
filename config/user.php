<?php

return [
    'uuid_column' => env('HEXOLUS_USER_UUID', 'uuid'),
    'is_soft_delete' => (bool) env('HEXOLUS_USER_SOFT_DELETE', true),
    'username' => [
        'handler' => \Hexolus\User\Handlers\Username::class,
        'limit' => 15
    ]
];