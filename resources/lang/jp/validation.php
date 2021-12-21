<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */
    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'token' => 'トークン',
    ],
    'required' => ':attribute は必須入力です。',
    'date'     => ':attribute には日付を入力してください。',
    'max'      => [
        'string'  => ':attribute は :max 文字以内で入力してください。',
    ],
    'confirmed'            => ':attribute が確認欄と一致していません。',
    'email'                => ':attribute には有効な形式のメールアドレスを入力してください。',
    'min'                  => [
        // 略
        'string'  => ':attribute は:min文字以上で入力してください。',
        // 略
    ],
    'string'               => ':attribute には文字を入力してください。',
    'unique'               => '入力いただいた :attribute はすでに使用されています。',
];
