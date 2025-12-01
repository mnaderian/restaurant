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
    | Translated By : avasam.ir
    */

    'accepted' => ':attribute باید تایید شود.',
    'accepted_if' => 'فیلد :attribute باید قبول شده باشد زمانی که مقدار :other برابر با :value باشد.',
    'active_url' => ':attribute لینک وارد شده معتبر نیست.',
    'after' => ':attribute تاریخ باید بعد از :date باشد',
    'after_or_equal' => ':attribute باید برابر با :date یا زمانی بعد از آن باشد',
    'alpha' => ':attribute فقط حروف مجاز است.',
    'alpha_dash' => ':attribute فقط حروف ، اعداد ، خط تیره مانند - و _ مجاز است',
    'alpha_num' => ':attribute فقط حروف و اعداد مجاز است..',
    'array' => ':attribute فقط آرایه مجاز است.',
    'ascii' => 'فیلد :attribute تنهای می‌تواند شامل اعداد، حروف و کاراکترهای تک بایتی باشد.',
    'before' => ':attribute باید تاریخ قبل از :date باشد.',
    'before_or_equal' => ':attribute باید برابر با :date یا زمانی قبل از آن باشد',
    'between' => [
        'array' => ':attribute باید مابین :min و :max آیتم باشد.',
        'file' => ':attribute باید مابین :min و :max کیلوبایت باشد.',
        'numeric' => ':attribute باید مابین  :min و :max باشد',
        'string' => ':attribute باید مابین :min و :max کاراکتر باشد.',
    ],
    'boolean' => ':attribute فیلد باید true یا false باشد.',
    'can' => 'فیلد :attribute دارای مقداری غیرمجازی می‌باشد.',
    'confirmed' => 'رمز عبور و تکرار رمز عبور باید یکسان وارد شوند.',
    'contains' => 'فیلد :attribute شامل مقدار مدنظر نمی‌باشد.',
    'current_password' => 'رمز عبور وارد شده نادرست می‌باشد.',
    'date' => ':attribute تاریخ معتبر وارد نشده است.',
    'date_equals' => ':attribute باید تاریخ یکسان با :date وارد شود',
    'date_format' => ':attribute فرمت باید به شکل :format وارد شود',
    'decimal' => 'فیلد :attriute باید دارای :decimal عدد اعشاری باشد.',
    'declined' => 'فیلد :attribute باید رد شود.',
    'declined_if' => 'فیلد :attribute باید رد شود زمانی که مقدار :other برابر با :value می‌باشد.',
    'different' => 'مقدار :attribute و :other باید متفاوت باشند.',
    'digits' => ':attribute باید :digits رقم باشد.',
    'digits_between' => ':attribute باید مابین :min و :max رقم باشد.',
    'dimensions' => ':attribute طول و عرض تصویر معتبر نیست.',
    'distinct' => ':attribute دارای مقدار تکراری است.',
    'doesnt_end_with' => 'فیلد :attribute نباید منتهی به این مقادیر شود: :values.',
    'doesnt_start_with' => 'فیلد :attribute نباید با این مقادیر آغاز شود: :values.',
    'email' => 'آدرس ایمیل معتبر وارد نمایید.',
    'ends_with' => 'آخرین مقدار :attribute باید شامل این موارد باشد: :values',
    'enum' => 'مورد انتخابی در فیلد :attribute نامعتبر است.',
    'exists' => ':attribute مورد انتخاب شده معتبر نیست.',
    'extensions' => 'فیلد :attribute باید دارای یکی از این پسوندها باشد: :values.',
    'file' => ':attribute باید یک فایل انتخاب شود.',
    'filled' => ':attribute باید یک مقدار وارد شود.',
    'gt' => [
        'array' => ':attribute باید بیشتر از :value آیتم باشد.',
        'file' => ':attribute باید بزرگتر از  :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر از :value باشد',
        'string' => ':attribute باید بیشتر از :value کاراکتر باشد.',
    ],
    'gte' => [
        'array' => ':attribute باید حداقل :value آیتم یا بیشتر باشد.',
        'file' => ':attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => ':attribute باید بزرگتر یا مساوی با :value باشد',
        'string' => ':attribute باید بیشتر یا مساوی با :value کاراکتر باشد.',
    ],
    'hex_color' => 'مقدار فیلد :attribute باید برابر با یک کد رنگ معتبر باشد.',
    'image' => ':attribute باید یک تصویر انتخاب شود.',
    'in' => ':attribute معتبر نیست.',
    'in_array' => ':attribute فیلد در :other موجود نیست',
    'integer' => ':attribute باید عدد وارد شود.',
    'ip' => ':attribute باید IP آدرس معتبر وارد شود.',
    'ipv4' => ':attribute باید IP آدرس وارد شده IPv4 باشد.',
    'ipv6' => ':attribute باید IP آدرس وارد شده IPv6 باشد.',
    'json' => ':attribute باید مقدار وارد شده JSON باشد.',
    'list' => 'فیلد :attribute باید یک لیست باشد.',
    'lowercase' => 'فیلد :attribute باید دارای حروف انگلیسی کوچک باشد.',
    'lt' => [
        'array' => ':attribute باید کمتر از  :value آیتم باشد.',
        'file' => ':attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر از :value وارد شود',
        'string' => ':attribute باید کمتر از :value کارکتر باشد.',
    ],
    'lte' => [
        'array' => ':attribute باید کمتر یا مساوی با :value آیتم باشد.',
        'file' => ':attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => ':attribute باید کمتر یا مساوی با :value باشد',
        'string' => ':attribute باید کمتر یا مساوی با :value کارکتر باشد.',
    ],
    'mac_address' => 'مقدار فیلد :attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => ':attribute نباید بیشتر از :max آیتم باشد.',
        'file' => ':attribute نباید بزرگتر از :max کیلوبایت باشد.',
        'numeric' => ':attribute نباید بزرگتر از :max رقم باشد',
        'string' => ':attribute نباید بیشتر از :max کارکتر باشد.',
    ],
    'max_digits' => 'تعداد کاراکترهای فیلد :attribute نباید بیشتر از :max حرف باشد.',
    'mimes' => 'پسوند و نوع فایل :attribute باید :values باشد',
    'mimetypes' => 'پسوند و نوع فایل :attribute باید :values باشد',
    'min' => [
        'numeric' => ':attribute حداقل باید :min باشد',
        'file' => ':attribute حداقل باید :min کیلوبایت باشد.',
        'string' => ':attribute حداقل باید :min کارکتر باشد.',
        'array' => ':attribute حداقل باید :min آیتم باشد.',
    ],
    'min_digits' => ':attribute نباید کمتر از :min رقم داشته باشد.',
    'missing' => ':attribute باید از دست رفته باشد.',
    'missing_if' => ':attribute نباید وجود داشته باشد تا زمانی که :other :value باشد.',
    'missing_unless' => ':attribute نباید وجود داشته باشد یا اینکه :other :value باشد.',
    'missing_with' => ':attribute باید در صورت :value وجود نداشته باشد.',
    'missing_with_all' => ':attribute باید در صورت تمامی :value وجود نداشته باشد.',
    'multiple_of' => ':attribute باید ضریبی از :value باشد.',
    'not_in' => ':attribute معتبر نیست.',
    'not_regex' => ':attribute فرمت وارد شده معتبر نیست.',
    'numeric' => 'مقدار فیلد :attribute باید عددی باشد.',
    'password' => [
         'letters' => ':attribute باید حدقل شامل یک حرف باشد.',
        'mixed' => ':attribute باید حداقل یک حرف بزرگ یا یک حرف کوچک انگلیسی را شامل باشد.',
        'numbers' => ':attribute باید حداقل شامل یک عدد باشد.',
        'symbols' => ':attribute باید حداقل شامل یک نماد یا نشان(سمبل) باشد ',
        'uncompromised' => ':attribute وارد شده سازگار ندارد. لطفا :attribute دیگری را امتحان کنید.',
    ],
    'present' => ':attribute باید موجودیت داشته باشد.',
    'present_if' => 'فیلد :attribute ضروری است زمانی که مقدار :other برابر با :value باشد.',
    'present_unless' => 'فیلد :attribute ضروری است مگر زمانی که مقدار :other برابر با :value باشد.',
    'present_with' => 'مقدار فیلد :attribute ضروری است اگر مقدار :values موجود باشد.',
    'present_with_all' => 'مقدار فیلد :attribute ضروری است اگر مقادیر :values موجود باشند.',
    'prohibited' => 'فیلد :attribute ممنوع است.',
    'prohibited_if' => 'هنگام که :other، :value است فیلد :attribute ممنوع است.',
    'prohibited_unless' => ':attribute ممنوع است مگر اینکه :other برابر با (:values) باشد.',
    'prohibits' => 'هنگام ورود فیلد :attribute، وارد کردن فیلد :other ممنوع است.',
    'regex' => ' فرمت :attribute قابل قبول نیست.',
    'required' => 'فیلد :attribute ضروری است.',
    'required_array_keys' => ':attribute باید شامل ورودی هایی برای :for :values باشد.',
    'required_if' => 'فیلد :attribute ضروری است در صورتی که :other برابر با :value باشد',
    'required_if_accepted' => ':attribute زمانی الزامی میباشد که :other پذیرفته شود.',
    'required_if_declined' => 'مقدار فیلد :attribute در صورتی که :other رد شده باشد ضروری است.',
    'required_unless' => 'فیلد :attribute ضروری است مگر اینکه :other برابر با :values باشد',
    'required_with' => 'فیلد :attribute ضروری است وقتی که :values موجود باشد.',
    'required_with_all' => 'فیلد :attribute ضروری است اگر :values موجود باشد.',
    'required_without' => 'فیلد :attribute ضروری است وقتی که :values موجود نباشد.',
    'required_without_all' => 'فیلد :attribute ضروری است اگر هیچ یک از :values موجود نباشد.',
    'same' => ':attribute و :other باید یکسان باشند.',
    'size' => [
        'array' => ':attribute باید شامل :size آیتم باشد.',
        'file' => ':attribute باید :size کیلوبایت باشد.',
        'numeric' => ':attribute باید :size رقم باشد',
        'string' => ':attribute باید :size کاراکتر باشد.',
    ],
    'starts_with' => ':attribute باید با یکی از این موارد آغاز شده باشد: :values',
    'string' => 'محتوای :attribute باید شامل حروف و اعداد باشد.',
    'timezone' => ':attribute زمان باید معتبر باشد.',
    'unique' => 'این :attribute قبلا ثبت شده و تکراری است.',
    'uploaded' => ':attribute آپلود دچار اشکال شده است.',
    'uppercase' => 'فیلد :attribute باید شامل حروف انگلیسی بزرگ باشد.',
    'url' => 'فرمت :attribute قابل قبول نمیباشد.',
    'ulid' => ':attribute باید یک فرمت درست ULID باشد.',
    'uuid' => 'مقدار فیلد :attribute باید یک UUID معتبر باشد',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention 'attribute.rule' to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'logo' => [
            'ends_with' => 'لوگو باید از نوع PNG باشد.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as 'E-Mail Address' instead
    | of 'email'. This simply helps us make our message more expressive.
    | Translated By : avasam.ir
    |
    */

    'attributes' => [
        'name' => 'نام',
        'username' => 'نام کاربری',
        'email' => 'آدرس ایمیل',
        'first_name' => 'نام',
        'last_name' => 'نام خانوادگی',
        'family' => 'نام خانوادگی',
        'password' => 'رمز عبور',
        'password_confirmation' => 'تاییدیه ی رمز عبور',
        'current_password' => 'رمز عبور فعلی',
        'city' => 'شهر',
        'country' => 'کشور',
        'address' => 'نشانی',
        'phone' => 'تلفن',
        'mobile' => 'شماره تلفن',
        'message' => 'پیام',
        'codemelli' => 'کدملی',
        'age' => 'سن',
        'sex' => 'جنسیت',
        'gender' => 'جنسیت',
        'day' => 'روز',
        'month' => 'ماه',
        'year' => 'سال',
        'hour' => 'ساعت',
        'minute' => 'دقیقه',
        'second' => 'ثانیه',
        'title' => 'عنوان',
		'pretitle' => 'پیش‌عنوان',
        'text' => 'متن',
        'content' => 'محتوا',
        'description' => 'توضیحات',
        'excerpt' => 'چکیده',
        'date' => 'تاریخ',
        'time' => 'زمان',
        'available' => 'موجود',
        'notavailable' => 'موجود نیست',
        'size' => 'اندازه',
        'subject' => 'موضوع',
        'image' => 'تصویر',
        'body' => 'محتوا',
        'logo' => 'لوگو',
        'url' => 'آدرس',
        'start_time' => 'زمان شروع',
        'end_time' => 'زمان پایان',
        'guests_count' => 'تعداد نفرات',
        'restaurant_table_id' => 'میز انتخابی'
    ],

];