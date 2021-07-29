<?php

return [

    'admin_prefix' => 'admin',
    // 1-Enable auto checkin/out;0-Disable auto checkin/out; default:1
    'checkin_out' => 1,
    'key_checkin' => 'user_checkin_session',
    'key_checkout' => 'user_checkout_session',
    'time_checkout' => 2,
    'guest_perrmission' => [
        'dashboard',
        'users.profile'
    ]
];
