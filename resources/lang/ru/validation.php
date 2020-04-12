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

    'accepted' => ':attribute должен быть принят.',
    'active_url' => ':attribute не является действительным URL.',
    'after' => ':attribute должна быть дата после :date.',
    'after_or_equal' => ':attribute должна быть дата после или равна :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должно быть дата до :date.',
    'before_or_equal' => ':attribute должна быть дата до или равна :date.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'string' => ':attribute должен быть между :min и :max символов.',
        'array' => ':attribute должен быть между :min и :max элементов.',
    ],
    'boolean' => ':attribute поле должно быть истинным или ложным.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'date' => ':attribute недействительная дата',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должен быть различны.',
    'digits' => ':attribute должен состоять из :digits цифр.',
    'digits_between' => ':attribute должен быть между :min и :max цифр.',
    'dimensions' => ':attribute имеет неверные размеры изображения.',
    'distinct' => ':attribute поле имеет повторяющееся значение.',
    'email' => ':attribute адрес эл. почты должен быть действительным.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих: :values.',
    'exists' => 'Выбранный :attribute является недействительным.',
    'file' => ':attribute должен быть файл.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value килобайтов.',
        'string' => ':attribute должно быть больше чем :value символов.',
        'array' => ':attribute должно иметь больше, чем :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value килобайтов.',
        'string' => ':attribute должно быть больше или равно :value символов.',
        'array' => ':attribute должно иметь :value элементов или больше.',
    ],
    'image' => ':attribute должно быть изображением.',
    'in' => 'Выбранный :attribute является недействительным.',
    'in_array' => ':attribute field не существует в :other.',
    'integer' => ':attribute должно быть целым числом',
    'ip' => ':attribute должен быть действительным IP-адресом.',
    'ipv4' => ':attribute должен быть действительным IPv4 адресом.',
    'ipv6' => ':attribute должен быть действительным IPv6 адресом.',
    'json' => ':attribute должен быть действительным JSON строкой.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше чем :value.',
        'file' => ':attribute должно быть меньше чем :value килобайтов.',
        'string' => ':attribute должно быть меньше чем :value символов.',
        'array' => ':attribute должно иметь меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file' => ':attribute должно быть меньше или равно :value килобайтов.',
        'string' => ':attribute должно быть меньше или равно :value символов.',
        'array' => ':attribute должно иметь меньше или равно :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше чем :max килобайтов.',
        'string' => ':attribute не может быть больше чем :max символов.',
        'array' => ':attribute не может иметь больше чем :max элементов.',
    ],
    'mimes' => ':attribute должен быть файл типа: :values.',
    'mimetypes' => ':attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min килобайтов.',
        'string' => ':attribute должен быть не менее :min символов.',
        'array' => ':attribute должен иметь не менее :min элементов.',
    ],
    'not_in' => 'Выбранный :attribute является недействительным.',
    'not_regex' => ':attribute формат неверен.',
    'numeric' => ':attribute должно быть числом.',
    'password' => 'Неправильный пароль.',
    'present' => ':attribute поле должно присутствовать.',
    'regex' => ':attribute формат неверен.',
    'required' => ':attribute поле, обязательное для заполнения.',
    'required_if' => ':attribute поле обязательно для заполнения, когда :other равно :value.',
    'required_unless' => ':attribute поле обязательно для заполнения, если :other содержится в :values.',
    'required_with' => ':attribute поле обязательно для заполнения, когда :values представлены.',
    'required_with_all' => ':attribute поле обязательно для заполнения, когда все :values представлены.',
    'required_without' => ':attribute поле обязательно для заполнения, когда :values не представлены.',
    'required_without_all' => ':attribute поле обязательно для заполнения, когда ни один из :values не представлен.',
    'same' => ':attribute и :other должен совпадать.',
    'size' => [
        'numeric' => ':attribute должен быть :size.',
        'file' => ':attribute должен быть :size килобайтов.',
        'string' => ':attribute должен быть :size символов.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values.',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должна быть действительной зоной.',
    'unique' => ':attribute уже использовано.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute формат неверен.',
    'uuid' => ':attribute должен быть действительным UUID.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'на заказ сообщения',
        ],
        'g-recaptcha-response' => [
            'required' => 'Пожалуйста, убедитесь, что вы не робот.',
            'captcha' => 'Ошибка с кодом! попробуйте позже или обратитесь к администратору сайта.',
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

    'attributes' => [],

];
