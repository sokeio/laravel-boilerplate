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
    'failed'   => '認証に失敗しました。',
    'password' => 'パスワードが間違っています。',
    'throttle' => 'ログインの試行回数が多すぎます。:seconds 秒後にお試しください。',
    'login' => [
        'title' => 'ログイン',
        'field' => [
            'email' => 'Eメール',
            'password' => 'パスワード',
            'remember' => '私を覚えてますか'
        ],
        'button' => [
            'submit' => 'ログイン',
            'reset-password' => 'パスワードを忘れた',
            'register' => '新しいメンバーシップを登録する'
        ]
    ],
    'register' => [
        'title' => '新しいメンバーシップを登録する',
        'field' => [
            'fullname' => 'フルネーム',
            'email' => 'Eメール',
            'password' => 'パスワード',
            'password2' => 'パスワードを再入力してください',
            'agreeTerms' => '<a href=":link">条件</a>に同意します'
        ],
        'button' => [
            'submit' => '登録',
            'login' => '私はすでにメンバーシップを持っています',
            'reset-password' => 'パスワードを忘れた'
        ]
    ],
    'verify' => [
        'title' => 'あなたのメールアドレスを確認してください',
        'message' => [
            'resent' => '新しい確認リンクがあなたのメールアドレスに送信されました',
            'info' => '続行する前に、確認リンクがないかメールを確認してください。メールが届かない場合は、'
        ],
        'button' => [
            'request-new' => '別のリクエストするには、ここをクリックしてください'
        ]
    ],
    'confirm' => [
        'title' => '続行する前にパスワードを確認してください。',
        'field' => [
            'password' => 'パスワード',
        ],
        'button' => [
            'submit' => 'パスワードを認証する',
            'reset-password' => 'パスワードをお忘れですか？'
        ]
    ],
    'email' => [
        'title' => 'パスワードを忘れましたか？ ここでは、新しいパスワードを簡単に取得できます。',
        'field' => [
            'email' => 'Eメール',
        ],
        'button' => [
            'submit' => 'パスワードリセットリンクを送信',
            'login' => 'ログイン',
            'register'=>'新しいメンバーシップを登録する'
        ]
    ]
];
