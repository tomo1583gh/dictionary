<?php

return [
    'accepted' => ':attributeを承認してください。',
    'active_url' => ':attributeが有効なURLではありません。',
    'after' => ':attributeには、:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには、:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash' => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num' => ':attributeはアルファベット数字がご利用できます。',
    'array' => ':attributeは配列でなくてはなりません。',
    'before' => ':attributeには、:dateより前の日付をご利用ください。',
    'before_or_equal' => ':attributeには、:date以前の日付をご利用ください。',
    'between' => [
        'numeric' => ':attributeは、:minから:maxの間で指定してください。',
        'file'    => ':attributeは、:min kBから、:max kBの間で指定してください。',
        'string'  => ':attributeは、:min文字から、:max文字の間で指定してください。',
        'array'   => ':attributeは、:min個から:max個の間で指定してください。',
    ],
    'boolean' => ':attributeは、trueかfalseを指定してください。',
    'confirmed' => ':attributeと、確認フィールドとが、一致していません。',
    'date' => ':attributeには有効な日付を指定してください。',
    'date_equals' => ':attributeには、:dateと同じ日付けを指定してください。',
    'date_format' => ':attributeは:format形式で指定してください。',
    'different' => ':attributeと:otherには、異なった内容を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'dimensions' => ':attributeの図形サイズが正しくありません。',
    'distinct' => ':attributeには異なった値を指定してください。',
    'email' => ':attributeには、有効なメールアドレスを指定してください。',
    'ends_with' => ':attributeには、:valuesのどれかで終わる値を指定してください。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeはファイルでなければいけません。',
    'filled' => ':attributeに値を指定してください。',
    'gt' => [
        'numeric' => ':attributeは:valueより大きくなければなりません。',
        'file'    => ':attributeは:value kBより大きくなければなりません。',
        'string'  => ':attributeは:value文字より多くなければなりません。',
        'array'   => ':attributeは:value個より多くなければなりません。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上でなければなりません。',
        'file'    => ':attributeは:value kB以上でなければなりません。',
        'string'  => ':attributeは:value文字以上でなければなりません。',
        'array'   => ':attributeは:value個以上でなければなりません。',
    ],
    'image' => ':attributeは画像でなければなりません。',
    'in' => '選択された:attributeは正しくありません。',
    'in_array' => ':attributeが:otherに存在しません。',
    'integer' => ':attributeは整数でなければなりません。',
    'ip' => ':attributeは有効なIPアドレスでなければなりません。',
    'ipv4' => ':attributeは有効なIPv4アドレスでなければなりません。',
    'ipv6' => ':attributeは有効なIPv6アドレスでなければなりません。',
    'json' => ':attributeは有効なJSON文字列でなければなりません。',
    'lt' => [
        'numeric' => ':attributeは:valueより小さくなければなりません。',
        'file'    => ':attributeは:value kBより小さくなければなりません。',
        'string'  => ':attributeは:value文字より少なくなければなりません。',
        'array'   => ':attributeは:value個より少なくなければなりません。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下でなければなりません。',
        'file'    => ':attributeは:value kB以下でなければなりません。',
        'string'  => ':attributeは:value文字以下でなければなりません。',
        'array'   => ':attributeは:value個以下でなければなりません。',
    ],
    'max' => [
        'numeric' => ':attributeは:max以下でなければなりません。',
        'file'    => ':attributeは:max kB以下でなければなりません。',
        'string'  => ':attributeは:max文字以下でなければなりません。',
        'array'   => ':attributeは:max個以下でなければなりません。',
    ],
        'min' => [
        'numeric' => ':attributeは:min以上でなければなりません。',
        'file'    => ':attributeは:min kB以上でなければなりません。',
        'string'  => ':attributeは:min文字以上でなければなりません。',
        'array'   => ':attributeは:min個以上でなければなりません。',
    ],
    'not_in' => '選択された:attributeは正しくありません。',
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeは数値でなければなりません。',
    'present' => ':attributeが存在している必要があります。',
    'regex' => ':attributeの形式が正しくありません。',
    'required' => ':attributeは必須です。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesにない場合、:attributeは必須です。',
    'required_with' => ':valuesがある場合、:attributeは必須です。',
    'required_with_all' => ':valuesがすべてある場合、:attributeは必須です。',
    'required_without' => ':valuesがない場合、:attributeは必須です。',
    'required_without_all' => ':valuesがすべてない場合、:attributeは必須です。',
    'same' => ':attributeと:otherが一致していません。',
    'size' => [
        'numeric' => ':attributeは:sizeでなければなりません。',
        'file'    => ':attributeは:size kBでなければなりません。',
        'string'  => ':attributeは:size文字でなければなりません。',
        'array'   => ':attributeは:size個含まれていなければなりません。',
    ],
    'starts_with' => ':attributeは:valuesのいずれかで始まる必要があります。',
    'string' => ':attributeは文字列でなければなりません。',
    'timezone' => ':attributeは有効なタイムゾーンでなければなりません。',
    'unique' => ':attributeは既に使用されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeの形式が正しくありません。',
    'uuid' => ':attributeは有効なUUIDでなければなりません。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下では、属性プレースホルダーに表示される日本語名を設定できます。
    | 例: 'email' => 'メールアドレス'
    |
    */

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'password_confirmation' => 'パスワード確認',
        'keyword' => 'キーワード',
        'description' => '説明',
    ],
];



