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
        'accepted' => 'يجب أن يتم قبوله.',
        'accepted_if' => 'يجب أن يتم قبوله عندما :other هو :value.',
        'active_url' => 'هذا ليس عنوان URL صالح.',
        'after' => 'يجب أن تكون تاريخ بعد :date.',
        'after_or_equal' => 'يجب أن تكون تاريخ بعد أو يساوي :date.',
        'alpha' => 'قد يحتوي فقط على حروف.',
        'alpha_dash' => 'قد يحتوي فقط على حروف، أرقام، شرطات وشرطات سفلية.',
        'alpha_num' => 'قد يحتوي فقط على حروف وأرقام.',
        'array' => 'يجب أن يكون مصفوفة.',
        'ascii' => 'يجب أن يحتوي فقط على أحرف ورموز أبجدية رقمية ببايت واحد.',
        'before' => 'يجب أن تكون تاريخ قبل :date.',
        'before_or_equal' => 'يجب أن تكون تاريخ قبل أو يساوي :date.',
        'between' => [
            'array' => 'يجب أن يكون بين :min و :max عناصر.',
            'file' => 'يجب أن يكون بين :min و :max كيلوبايت.',
            'numeric' => 'يجب أن يكون بين :min و :max.',
            'string' => 'يجب أن يكون بين :min و :max حروف.',
        ],
        'boolean' => 'يجب أن يكون صحيح أو خطأ.',
        'can' => 'يحتوي على قيمة غير مصرح بها.',
        'confirmed' => 'التأكيد غير متطابق.',
        'current_password' => 'كلمة المرور غير صحيحة.',
        'date' => 'ليست تاريخ صالح.',
        'date_equals' => 'يجب أن تكون تاريخ يساوي :date.',
        'date_format' => 'لا يتطابق مع الشكل :format.',
        'decimal' => 'يجب أن يكون لديه :decimal من العلامات العشرية.',
        'declined' => 'يجب أن يتم رفضه.',
        'declined_if' => 'يجب أن يتم رفضه عندما :other هو :value.',
        'different' => 'هذا الحقل و :other يجب أن يكونا مختلفين.',
        'digits' => 'يجب أن يكون :digits أرقام.',
        'digits_between' => 'يجب أن يكون بين :min و :max أرقام.',
        'dimensions' => 'أبعاد الصورة غير صالحة.',
        'distinct' => 'هذا الحقل له قيمة مكررة.',
        'doesnt_end_with' => 'يجب ألا ينتهي بأحد القيم التالية: :values.',
        'doesnt_start_with' => 'يجب ألا يبدأ بأحد القيم التالية: :values.',
        'email' => 'يجب أن يكون عنوان بريد إلكتروني صالح.',
        'ends_with' => 'يجب أن ينتهي بواحد من :values',
        'enum' => 'القيمة المحددة :attribute غير صالحة.',
        'exists' => 'هذا غ
    
    ير صالح.',
        'file' => 'يجب أن يكون ملفًا.',
        'filled' => 'يجب أن يحتوي على قيمة.',
        'gt' => [
            'array' => 'يجب أن يحتوي على أكثر من :value عناصر.',
            'file' => 'يجب أن يكون أكبر من :value كيلوبايت.',
            'numeric' => 'يجب أن يكون أكبر من :value.',
            'string' => 'يجب أن يكون أكثر من :value حروف.',
        ],
        'gte' => [
            'numeric' => 'يجب أن يكون أكبر من أو يساوي :value.',
            'file' => 'يجب أن يكون أكبر من أو يساوي :value كيلوبايت.',
            'string' => 'يجب أن يكون أكبر من أو يساوي :value حروف.',
            'array' => 'يجب أن يكون لديه :value عناصر أو أكثر.',
        ],
        'image' => 'يجب أن يكون صورة.',
        'in' => 'هذا غير صالح.',
        'in_array' => 'هذا الحقل غير موجود في :other.',
        'integer' => 'يجب أن يكون عددًا صحيحًا.',
        'ip' => 'يجب أن يكون عنوان IP صالحًا.',
        'ipv4' => 'يجب أن يكون عنوان IPv4 صالحًا.',
        'ipv6' => 'يجب أن يكون عنوان IPv6 صالحًا.',
        'json' => 'يجب أن يكون سلسلة JSON صالحة.',
        'lowercase' => 'يجب أن يكون بأحرف صغيرة.',
        'lt' => [
            'numeric' => 'يجب أن يكون أقل من :value.',
            'file' => 'يجب أن يكون أقل من :value كيلوبايت.',
            'string' => 'يجب أن يكون أقل من :value حروف.',
            'array' => 'يجب أن يكون أقل من :value عناصر.',
        ],
        'lte' => [
            'numeric' => 'يجب أن يكون أقل من أو يساوي :value.',
            'file' => 'يجب أن يكون أقل من أو يساوي :value كيلوبايت.',
            'string' => 'يجب أن يكون أقل من أو يساوي :value حروف.',
            'array' => 'يجب ألا يحتوي على أكثر من :value عناصر.',
        ],
        'mac_address' => 'يجب أن يكون عنوان MAC صالحًا.',
        'max' => [
            'numeric' => 'قد لا يكون أكبر من :max.',
            'file' => 'قد لا يكون أكبر من :max كيلوبايت.',
            'string' => 'قد لا يكون أكبر من :max حروف.',
            'array' => 'قد لا يكون لديه أكثر من :max عناصر.',
        ],
        'max_digits' => 'يجب ألا يكون لديه أكثر من :max أرقام.',
        'mimes' => 'يجب أن يكون ملفًا من نوع: :values.',
        'mimetypes' => 'يجب أن يكون ملفًا من نوع: :values.',
        'min' => [
            'numeric' => 'يجب أن
    
     يكون على الأقل :min.',
            'file' => 'يجب أن يكون على الأقل :min كيلوبايت.',
            'string' => 'يجب أن يكون على الأقل :min حروف.',
            'array' => 'يجب أن يكون على الأقل :min عناصر.',
        ],
        'min_digits' => 'يجب أن يكون لديه على الأقل :min أرقام.',
        'missing' => 'يجب أن يكون مفقودًا.',
        'missing_if' => 'يجب أن يكون مفقودًا عندما :other هو :value.',
        'missing_unless' => 'يجب أن يكون مفقودًا ما لم :other هو في :values.',
        'missing_with' => 'يجب أن يكون مفقودًا عندما :values موجود.',
        'missing_with_all' => 'يجب أن يكون مفقودًا عندما :values موجودة.',
        'multiple_of' => 'يجب أن يكون مضاعفًا لـ :value.',
        'not_in' => 'هذا غير صالح.',
        'not_regex' => 'الشكل غير صالح.',
        'numeric' => 'يجب أن يكون رقمًا.',
        'present' => 'يجب أن يكون حاضرًا.',
        'prohibited' => 'محظور.',
        'prohibited_if' => 'محظور عندما :other هو :value.',
        'prohibited_unless' => 'محظور ما لم :other هو في :values.',
        'prohibits' => 'يحظر :other من أن يكون حاضرًا.',
        'regex' => 'الشكل غير صالح.',
        'required' => 'هذا الحقل مطلوب.',
        'required_array_keys' => 'يجب أن يحتوي على مدخلات لـ: :values.',
        'required_if' => 'هذا الحقل مطلوب عندما :other هو :value.',
        'required_if_accepted' => 'هذا الحقل مطلوب عندما :other تم قبوله.',
        'required_unless' => 'هذا الحقل مطلوب ما لم :other في :values.',
        'required_with' => 'هذا الحقل مطلوب عند وجود :values.',
        'required_with_all' => 'هذا الحقل مطلوب عند وجود :values.',
        'required_without' => 'هذا الحقل مطلوب عند عدم وجود :values.',
        'required_without_all' => 'هذا الحقل مطلوب عند عدم وجود أي من :values.',
        'same' => 'هذا الحقل و :other يجب أن يتطابقا.',
        'size' => [
            'array' => 'يجب أن يحتوي على :size عناصر.',
            'file' => 'يجب أن يكون :size كيلوبايت.',
            'numeric' => 'يجب أن يكون :size.',
            'string' => 'يجب أن يكون :size حروف.',
        ],
        'starts_with' => 'يجب أن يبدأ بواحد من :values',
        'string' => 'يجب أن يكون سلسلة.',
        'timezone' => 'يجب أن يكون منطقة صالحة.',
        'unique' => 'تم أخذ هذه القيمة بالفعل.',
        'uploaded' => 'فشل في الرفع.',
        '
    
    uppercase' => 'يجب أن يكون بأحرف كبيرة.',
        'url' => 'الشكل غير صالح.',
        'ulid' => 'يجب أن يكون ULID صالح.',
        'uuid' => 'يجب أن يكون UUID صالح.',
    
        /*
        |--------------------------------------------------------------------------
        | Custom Statamic Validation Language Lines
        |--------------------------------------------------------------------------
        |
        | Here you may validation messages for the custom rules provided by Statamic.
        |
        */
    
        'unique_entry_value' => 'تم أخذ هذه القيمة بالفعل.',
        'unique_term_value' => 'تم أخذ هذه القيمة بالفعل.',
        'unique_user_value' => 'تم أخذ هذه القيمة بالفعل.',
        'unique_form_handle' => 'تم أخذ هذه القيمة بالفعل.',
        'duplicate_field_handle' => 'لا يمكن استخدام حقل بمقبض :handle أكثر من مرة واحدة.',
        'one_site_without_origin' => 'يجب أن يكون هناك موقع واحد على الأقل بدون أصل.',
        'origin_cannot_be_disabled' => 'لا يمكن اختيار أصل معطل.',
        'unique_uri' => 'تم أخذ هذا URI بالفعل.',
        'duplicate_uri' => 'URI مكرر :value',
        'reserved' => 'هذه كلمة محجوزة.',
        'reserved_field_handle' => 'حقل بمقبض :handle هو كلمة محجوزة.',
        'parent_causes_root_children' => 'هذا سيتسبب في أن تحتوي الصفحة الجذر على أطفال.',
        'parent_cannot_be_itself' => 'لا يمكن أن يكون والده بنفسه.',
        'time' => 'ليس وقتًا صالحًا.',
        'date_fieldtype_date_required' => 'التاريخ مطلوب.',
        'date_fieldtype_time_required' => 'الوقت مطلوب.',
        'date_fieldtype_start_date_required' => 'تاريخ البداية مطلوب.',
        'date_fieldtype_start_date_invalid' => 'ليس تاريخ بداية صالحًا.',
        'date_fieldtype_end_date_required' => 'تاريخ النهاية مطلوب.',
        'date_fieldtype_end_date_invalid' => 'ليس تاريخ نهاية صالحًا.',
        'date_fieldtype_only_single_mode_allowed' => 'يمكنك استخدام وضع "فردي" فقط عندما يكون مقبض الحقل تاريخ.',
        'code_fieldtype_rulers' => 'هذا غير صالح.',
        'options_require_keys' => 'جميع الخيارات يجب أن تحتوي على مفاتيح.',
    
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
                'rule-name' => 'رسالة مخصصة',
            ],
        ],
    
        /*
        |--------------------------------------------------------------------------
        | Custom Validation Attributes
        |--------------------------------------------------------------------------
        |
        | The following language lines are used to swap attribute place-holders
        | with something more reader friendly such as E-Mail Address instead
        | of "email". This simply helps us make messages a little cleaner.
        |
        */
    
        'attributes' => [],

];
