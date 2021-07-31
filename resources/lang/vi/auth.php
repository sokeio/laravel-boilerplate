<?php

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

return [
    'failed'   => 'Thông tin tài khoản không tìm thấy trong hệ thống.',
    'password' => 'Mật khẩu không đúng.',
    'throttle' => 'Vượt quá số lần đăng nhập cho phép. Vui lòng thử lại sau :seconds giây.',
    'login' => [
        'title' => 'Đăng nhập',
        'field' => [
            'email' => 'Địa chỉ email',
            'password' => 'Mật khẩu',
            'remember' => 'Nhớ tài khoàn.'
        ],
        'button' => [
            'submit' => 'Đăng nhập',
            'reset-password' => 'Lấy lại mật khẩu',
            'register' => 'Đăng ký tài khoản mới'
        ]
    ],
    'register' => [
        'title' => 'Đăng ký tài khoản mới',
        'field' => [
            'fullname' => 'Họ tên',
            'email' => 'Địa chỉ email',
            'password' => 'Mật khẩu',
            'password2' => 'Gõ lại mật khẩu',
            'agreeTerms' => 'Bạn đồng ý <a href=":link">điều khoản</a>'
        ],
        'button' => [
            'submit' => 'Đăng ký',
            'login' => 'Tôi có tài khoản rồi.',
            'reset-password' => 'Lấy lại mật khẩu'
        ]
    ],
    'verify' => [
        'title' => 'Xác thực địa chỉ email',
        'message' => [
            'resent' => 'Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn',
            'info' => 'Trước khi tiếp tục, vui lòng kiểm tra email của bạn để tìm liên kết xác minh. Nếu bạn không nhận được email,'
        ],
        'button' => [
            'request-new' => 'bấm vào đây để yêu cầu khác'
        ]
    ],
    'confirm' => [
        'title' => 'Vui lòng xác nhận mật khẩu của bạn trước khi tiếp tục.',
        'field' => [
            'password' => 'Mật khẩu',
        ],
        'button' => [
            'submit' => 'Xác nhận mật khẩu',
            'reset-password' => 'Lấy lại mật khẩu?'
        ]
    ],
    'email' => [
        'title' => 'Bạn quên mật khẩu của mình? Tại đây bạn có thể dễ dàng lấy lại mật khẩu mới.',
        'field' => [
            'email' => 'Email',
        ],
        'button' => [
            'submit' => 'Gửi liên kết đặt lại mật khẩu',
            'login' => 'Đăng nhập',
            'register' => 'Đăng ký tài khoản mới'
        ]
    ]
];
