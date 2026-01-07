<?php

return [

    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合、:attributeを承認してください。',
    'active_url' => ':attributeは有効なURLではありません。',
    'after' => ':attributeは:dateより後の日付にしてください。',
    'after_or_equal' => ':attributeは:date以降の日付にしてください。',
    'alpha' => ':attributeは英字のみにしてください。',
    'alpha_dash' => ':attributeは英数字、ハイフン、アンダースコアのみにしてください。',
    'alpha_num' => ':attributeは英数字のみにしてください。',
    'array' => ':attributeは配列にしてください。',
    'before' => ':attributeは:dateより前の日付にしてください。',
    'before_or_equal' => ':attributeは:date以前の日付にしてください。',
    'between' => [
        'numeric' => ':attributeは:minから:maxの間にしてください。',
        'file' => ':attributeは:min KBから:max KBの間にしてください。',
        'string' => ':attributeは:min文字から:max文字の間にしてください。',
        'array' => ':attributeは:min個から:max個の間にしてください。',
    ],
    'boolean' => ':attributeはtrueかfalseにしてください。',
    'confirmed' => ':attributeの確認が一致しません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeは有効な日付ではありません。',
    'date_equals' => ':attributeは:dateと同じ日付にしてください。',
    'date_format' => ':attributeは:format形式にしてください。',
    'declined' => ':attributeを拒否してください。',
    'declined_if' => ':otherが:valueの場合、:attributeを拒否してください。',
    'different' => ':attributeと:otherは異なるものにしてください。',
    'digits' => ':attributeは:digits桁にしてください。',
    'digits_between' => ':attributeは:min桁から:max桁の間にしてください。',
    'dimensions' => ':attributeの画像サイズが無効です。',
    'distinct' => ':attributeに重複した値があります。',
    'email' => ':attributeはメール形式で入力してください。',
    'ends_with' => ':attributeは:valuesのいずれかで終わる必要があります。',
    'enum' => '選択された:attributeは無効です。',
    'exists' => '選択された:attributeは無効です。',
    'file' => ':attributeはファイルにしてください。',
    'filled' => ':attributeは必須です。',
    'gt' => [
        'numeric' => ':attributeは:valueより大きくしてください。',
        'file' => ':attributeは:value KBより大きくしてください。',
        'string' => ':attributeは:value文字より多くしてください。',
        'array' => ':attributeは:value個より多くしてください。',
    ],
    'gte' => [
        'numeric' => ':attributeは:value以上にしてください。',
        'file' => ':attributeは:value KB以上にしてください。',
        'string' => ':attributeは:value文字以上にしてください。',
        'array' => ':attributeは:value個以上にしてください。',
    ],
    'image' => ':attributeは画像にしてください。',
    'in' => '選択された:attributeは無効です。',
    'in_array' => ':attributeは:otherに存在しません。',
    'integer' => ':attributeは整数にしてください。',
    'ip' => ':attributeは有効なIPアドレスにしてください。',
    'ipv4' => ':attributeは有効なIPv4アドレスにしてください。',
    'ipv6' => ':attributeは有効なIPv6アドレスにしてください。',
    'json' => ':attributeは有効なJSON文字列にしてください。',
    'lt' => [
        'numeric' => ':attributeは:valueより小さくしてください。',
        'file' => ':attributeは:value KBより小さくしてください。',
        'string' => ':attributeは:value文字より少なくしてください。',
        'array' => ':attributeは:value個より少なくしてください。',
    ],
    'lte' => [
        'numeric' => ':attributeは:value以下にしてください。',
        'file' => ':attributeは:value KB以下にしてください。',
        'string' => ':attributeは:value文字以下にしてください。',
        'array' => ':attributeは:value個以下にしてください。',
    ],
    'mac_address' => ':attributeは有効なMACアドレスにしてください。',
    'max' => [
        'numeric' => ':attributeは:max以下にしてください。',
        'file' => ':attributeは:max KB以下にしてください。',
        'string' => ':attributeは:max文字以内で入力してください。',
        'array' => ':attributeは:max個以下にしてください。',
    ],
    'mimes' => ':attributeは:valuesタイプのファイルにしてください。',
    'mimetypes' => ':attributeは:valuesタイプのファイルにしてください。',
    'min' => [
        'numeric' => ':attributeは:min以上にしてください。',
        'file' => ':attributeは:min KB以上にしてください。',
        'string' => ':attributeは:min文字以上で入力してください。',
        'array' => ':attributeは:min個以上にしてください。',
    ],
    'multiple_of' => ':attributeは:valueの倍数にしてください。',
    'not_in' => '選択された:attributeは無効です。',
    'not_regex' => ':attributeの形式が無効です。',
    'numeric' => ':attributeは数値にしてください。',
    'password' => 'パスワードが正しくありません。',
    'present' => ':attributeが存在する必要があります。',
    'prohibited' => ':attributeは入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合、:attributeは入力禁止です。',
    'prohibited_unless' => ':otherが:valuesでない場合、:attributeは入力禁止です。',
    'prohibits' => ':attributeは:otherの入力を禁止しています。',
    'regex' => ':attributeの形式が無効です。',
    'required' => ':attributeを入力してください。',
    'required_array_keys' => ':attributeには:valuesのエントリが必要です。',
    'required_if' => ':otherが:valueの場合、:attributeは必須です。',
    'required_unless' => ':otherが:valuesでない場合、:attributeは必須です。',
    'required_with' => ':valuesが存在する場合、:attributeは必須です。',
    'required_with_all' => ':valuesがすべて存在する場合、:attributeは必須です。',
    'required_without' => ':valuesが存在しない場合、:attributeは必須です。',
    'required_without_all' => ':valuesがすべて存在しない場合、:attributeは必須です。',
    'same' => ':attributeと:otherが一致しません。',
    'size' => [
        'numeric' => ':attributeは:sizeにしてください。',
        'file' => ':attributeは:size KBにしてください。',
        'string' => ':attributeは:size文字にしてください。',
        'array' => ':attributeは:size個にしてください。',
    ],
    'starts_with' => ':attributeは:valuesのいずれかで始まる必要があります。',
    'string' => ':attributeは文字列にしてください。',
    'timezone' => ':attributeは有効なタイムゾーンにしてください。',
    'unique' => ':attributeは既に登録されています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeは有効なURLにしてください。',
    'uuid' => ':attributeは有効なUUIDにしてください。',

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーションメッセージ
    |--------------------------------------------------------------------------
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタム属性名
    |--------------------------------------------------------------------------
    */

    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'name' => 'お名前',
        'first_name' => '名',
        'last_name' => '姓',
        'gender' => '性別',
        'tel' => '電話番号',
        'tel1' => '電話番号',
        'tel2' => '電話番号',
        'tel3' => '電話番号',
        'address' => '住所',
        'building' => '建物名',
        'category_id' => 'お問い合わせの種類',
        'detail' => 'お問い合わせ内容',
    ],

];
