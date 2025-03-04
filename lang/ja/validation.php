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
    /*
    |--------------------------------------------------------------------------
    | バリデーションに関わる言語設定
    |--------------------------------------------------------------------------
    |
    | これらはバリデーションの際に関わりユーザーに表示される文言です。
    | sizeのように、更に細かく設定できるものもあります。必要に応じて設定してください。
    |
    | ##### 末尾に、バリデーションの項目名（attribute:属性）を設定するスペースがあります。
    |

    （例）　'string' => 'The :attribute field must be a string.',
        item登録のバリデーションでitemの名前nameについて
            'name' => string|max:30,
        と設定していた場合、下記のようにエラーが表示されます。
            「The name field must be a string.」

        'string' => ':attribute は文字を含めて入力してください。',
        と設定を変更した場合、下記のようにエラーが表示されます。
            「name は文字を含めて入力してください。」

            このnameの部分が項目名です。
    |
    |
    */

    'accepted' => 'The :attribute field must be accepted.',
    'accepted_if' => 'The :attribute field must be accepted when :other is :value.',
    'active_url' => 'The :attribute field must be a valid URL.',
    'after' => 'The :attribute field must be a date after :date.',
    'after_or_equal' => 'The :attribute field must be a date after or equal to :date.',
    'alpha' => 'The :attribute field must only contain letters.',
    'alpha_dash' => 'The :attribute field must only contain letters, numbers, dashes, and underscores.',
    'alpha_num' => 'The :attribute field must only contain letters and numbers.',
    'array' => 'The :attribute field must be an array.',
    'ascii' => 'The :attribute field must only contain single-byte alphanumeric characters and symbols.',
    'before' => 'The :attribute field must be a date before :date.',
    'before_or_equal' => 'The :attribute field must be a date before or equal to :date.',
    'between' => [
        'array' => 'The :attribute field must have between :min and :max items.',
        'file' => 'The :attribute field must be between :min and :max kilobytes.',
        'numeric' => ':attribute は :min から :max 文字にしてください。', // パスワードの文字数で使用します。これいちいち書かなくていいと思います。
        'string' => ':attribute は :min から :max 文字にしてください。', // パスワードの文字数で使用します。
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'can' => 'The :attribute field contains an unauthorized value.',
    'confirmed' => ':attribute が一致していません。', // :attributeは「パスワード」になる想定です。
    'current_password' => 'The password is incorrect.',
    'date' => 'The :attribute field must be a valid date.',
    'date_equals' => 'The :attribute field must be a date equal to :date.',
    'date_format' => 'The :attribute field must match the format :format.',
    'decimal' => 'The :attribute field must have :decimal decimal places.',
    'declined' => 'The :attribute field must be declined.',
    'declined_if' => 'The :attribute field must be declined when :other is :value.',
    'different' => 'The :attribute field and :other must be different.',
    'digits' => 'The :attribute field must be :digits digits.',
    'digits_between' => 'The :attribute field must be between :min and :max digits.',
    'dimensions' => 'The :attribute field has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'doesnt_end_with' => 'The :attribute field must not end with one of the following: :values.',
    'doesnt_start_with' => 'The :attribute field must not start with one of the following: :values.',
    'email' => ':attribute は正しく入力してください。', // xxx-yyyy.com など @ が入っていない時に出るエラー
    'ends_with' => 'The :attribute field must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'extensions' => 'The :attribute field must have one of the following extensions: :values.',
    'file' => 'The :attribute field must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'array' => 'The :attribute field must have more than :value items.',
        'file' => 'The :attribute field must be greater than :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than :value.',
        'string' => 'The :attribute field must be greater than :value characters.',
    ],
    'gte' => [
        'array' => 'The :attribute field must have :value items or more.',
        'file' => 'The :attribute field must be greater than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be greater than or equal to :value.',
        'string' => 'The :attribute field must be greater than or equal to :value characters.',
    ],
    'hex_color' => 'The :attribute field must be a valid hexadecimal color.',
    'image' => 'The :attribute field must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field must exist in :other.',
    'integer' => 'The :attribute field must be an integer.',
    'ip' => 'The :attribute field must be a valid IP address.',
    'ipv4' => 'The :attribute field must be a valid IPv4 address.',
    'ipv6' => 'The :attribute field must be a valid IPv6 address.',
    'json' => 'The :attribute field must be a valid JSON string.',
    'lowercase' => 'The :attribute field must be lowercase.',
    'lt' => [
        'array' => 'The :attribute field must have less than :value items.',
        'file' => 'The :attribute field must be less than :value kilobytes.',
        'numeric' => 'The :attribute field must be less than :value.',
        'string' => 'The :attribute field must be less than :value characters.',
    ],
    'lte' => [
        'array' => 'The :attribute field must not have more than :value items.',
        'file' => 'The :attribute field must be less than or equal to :value kilobytes.',
        'numeric' => 'The :attribute field must be less than or equal to :value.',
        'string' => 'The :attribute field must be less than or equal to :value characters.',
    ],
    'mac_address' => 'The :attribute field must be a valid MAC address.',
    'max' => [
        'array' => ':attribute field must not have more than :max items.',
        'file' => 'The :attribute field must not be greater than :max kilobytes.',
        'numeric' => ':attribute は最大 :max 文字にしてください。', // 数字の最大文字数、priceのところで表現がおかしくなるかも？
        'string' => ':attribute は最大 :max 文字にしてください。', // 最大文字数オーバーのエラー
    ],
    'max_digits' => 'The :attribute field must not have more than :max digits.', // priceとかの 最大桁数 をバリデーションする場合はこっち？ digits:桁数
    'mimes' => 'The :attribute field must be a file of type: :values.',
    'mimetypes' => 'The :attribute field must be a file of type: :values.',
    'min' => [
        'array' => 'The :attribute field must have at least :min items.',
        'file' => 'The :attribute field must be at least :min kilobytes.',
        'numeric' => ':attribute は :max 文字以上にしてください。', // 数字の最小文字数、同上priceに注意
        'string' => ':attribute は :max 文字以上にしてください。', // 最小文字数に足りないエラー
    ],
    'min_digits' => 'The :attribute field must have at least :min digits.', // もし最小桁数のバリデーションをするならこっち？たぶん使わない
    'missing' => 'The :attribute field must be missing.',
    'missing_if' => 'The :attribute field must be missing when :other is :value.',
    'missing_unless' => 'The :attribute field must be missing unless :other is :value.',
    'missing_with' => 'The :attribute field must be missing when :values is present.',
    'missing_with_all' => 'The :attribute field must be missing when :values are present.',
    'multiple_of' => 'The :attribute field must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute field format is invalid.',
    'numeric' => 'The :attribute field must be a number.',
    // 'password' => [
    //     'letters' => 'The :attribute field must contain at least one letter.',
    //     'mixed' => 'The :attribute field must contain at least one uppercase and one lowercase letter.',
    //     'numbers' => 'The :attribute field must contain at least one number.',
    //     'symbols' => 'The :attribute field must contain at least one symbol.',
    //     'uncompromised' => 'The given :attribute has appeared in a data leak. Please choose a different :attribute.',
    // ],
    //
    // 漏えいなどのリスクを下げるために、パスワードにより難しいルールを課している場合のバリデーションエラーメッセージ
    // 今回は余力があればルールを設定する、メッセージだけ設定しておく。メッセージ内容はネットで拾ったもの。
    'password' => [
        'letters' => ':attributeは、少なくとも1つの文字が含まれていなければなりません。',
        'mixed' => ':attributeは、少なくとも大文字と小文字を1つずつ含める必要があります。',
        'numbers' => ':attributeは、少なくとも1つの数字が含まれていなければなりません。',
        'symbols' => ':attributeは、少なくとも1つの記号が含まれていなければなりません。',
        'uncompromised' => 'この:attributeは過去に漏洩したことのある脆弱な:attributeです。別の:attributeを入力してください。',
    ],
    'present' => 'The :attribute field must be present.',
    'present_if' => 'The :attribute field must be present when :other is :value.',
    'present_unless' => 'The :attribute field must be present unless :other is :value.',
    'present_with' => 'The :attribute field must be present when :values is present.',
    'present_with_all' => 'The :attribute field must be present when :values are present.',
    'prohibited' => 'The :attribute field is prohibited.',
    'prohibited_if' => 'The :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'The :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'The :attribute field prohibits :other from being present.',
    'regex' => 'The :attribute field format is invalid.',
    'required' => ':attributeは必須の項目です。', // 日本語これでいいでしょうか？
    'required_array_keys' => 'The :attribute field must contain entries for: :values.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute field must match :other.',
    'size' => [
        'array' => 'The :attribute field must contain :size items.',
        'file' => 'The :attribute field must be :size kilobytes.',
        'numeric' => 'The :attribute field must be :size.',
        'string' => 'The :attribute field must be :size characters.',
    ],
    'starts_with' => 'The :attribute field must start with one of the following: :values.',
    'string' => ':attributeは文字を入力してください。', // 文字かどうかのバリデーションエラー
    'timezone' => 'The :attribute field must be a valid timezone.',
    'unique' => ':attributeはすでに使用されています。', // アカウント登録時。登録メールアドレスのダブりはNGなのでこれが出ます。
    'uploaded' => 'The :attribute failed to upload.',
    'uppercase' => 'The :attribute field must be uppercase.',
    'url' => 'The :attribute field must be a valid URL.',
    'ulid' => 'The :attribute field must be a valid ULID.',
    'uuid' => 'The :attribute field must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    /*
    |--------------------------------------------------------------------------
    | バリデーションエラーのカスタムメッセージ
    |--------------------------------------------------------------------------
    |
    | 条件の組み合わせで、個別のエラー文章を設定することができます。
    |
    （例）
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'email' => [
            'required'  => ':attributeを入力してください。'　emailを入力してください。
        ],
    ],
    'required'　エラーメッセージは「:attributeは必須の項目です。」となっているが、個別のメッセージが表示される。
    |
    |
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */
    /*
    |--------------------------------------------------------------------------
    | 項目名のカスタマイズ （attribute:属性　≒項目）
    |--------------------------------------------------------------------------
    |
    | ここから特定の項目名をそれぞれ変更し、「email」を「メールアドレス」など
    | エラーで表示された際に、より理解しやすい表現に変更することができます。
    |
    |
    |
    |
    */

    'attributes' => [
        // ここに配列で定義していく
        'name' => '名前', // ユーザー名のつもりでnameとしています。どこかで干渉するようなら考えましょう
        'email' => 'メールアドレス',
        'password' => 'パスワード',

        'item-name' => '商品名',
        'category_id' => 'カテゴリ名',
        'price' => '価格',
        'detail' => '商品詳細',
    ],

];
