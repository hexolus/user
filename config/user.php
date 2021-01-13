<?php

return [
    'uuid_column' => env('HEXOLUS_USER_UUID', 'uuid'),
    'is_soft_delete' => (bool) env('HEXOLUS_USER_SOFT_DELETE', true)
];