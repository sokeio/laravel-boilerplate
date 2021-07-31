<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed'   => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'login' => [
        'title' => 'Sign In',
        'field' => [
            'email' => 'Email',
            'password' => 'Password',
            'remember' => 'Remember Me'
        ],
        'button' => [
            'submit' => 'Sign In',
            'reset-password' => 'I forgot my password',
            'register' => 'Register a new membership'
        ]
    ],
    'register' => [
        'title' => 'Register a new membership',
        'field' => [
            'fullname' => 'Full name',
            'email' => 'Email',
            'password' => 'Password',
            'password2' => 'Retype password',
            'agreeTerms' => 'I agree to the <a href=":link">terms</a>'
        ],
        'button' => [
            'submit' => 'Register',
            'login' => 'I already have a membership',
            'reset-password' => 'I forgot my password'
        ]
    ],
    'verify' => [
        'title' => 'Verify Your Email Address',
        'message' => [
            'resent' => 'A fresh verification link has been sent to
            your email address',
            'info' => 'Before proceeding, please check your email for a verification link.If you did not receive
            the email,'
        ],
        'button' => [
            'request-new' => 'click here to request another'
        ]
    ],
    'confirm' => [
        'title' => 'Please confirm your password before continuing.',
        'field' => [
            'password' => 'Password',
        ],
        'button' => [
            'submit' => 'Confirm Password',
            'reset-password' => 'Forgot Your Password?'
        ]
    ],
    'email' => [
        'title' => 'You forgot your password? Here you can easily retrieve a new password.',
        'field' => [
            'email' => 'Email',
        ],
        'button' => [
            'submit' => 'Send Password Reset Link',
            'login' => 'Login',
            'register'=>'Register a new membership'
        ]
    ]
];
