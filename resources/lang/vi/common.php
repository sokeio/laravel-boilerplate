<?php

return [

    /*
    |--------------------------------------------------------------------------
    | common Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match reasons
    | that are given by the password broker for a password update attempt
    | has failed, such as for an invalid token or invalid new password.
    |
    */
    'module' => [
        'dashboard' => 'Dashboard',
        'home' => 'Home',
        'users' => 'User',
        'roles' => 'Role',
        'permissions' => 'Permission',
        'attendances'=>'Checkin/out',
        'generator_builder'=>'Generator Builder'
    ],
    'permission' => [
        'home' => 'Access Home Page',
        'users' => [
            'index' => 'Access User Page'
        ],
        'generator_builder'=>[
            'index' => 'Access Generator Builder',
            'field_template'=>'Access File Template'
        ]
    ],

];
