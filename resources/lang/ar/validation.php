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

    'accepted' => 'يجب قبول الحقل :attribute',
    'accepted_if' => 'الحقل :attribute مقبول في حال ما إذا كان :other يساوي :value.',
    'active_url' => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'before' => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between' => [
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'current_password' => 'كلمة المرور غير صحيحة',
    'date' => 'الحقل :attribute ليس تاريخًا صحيحًا',
    'date_equals' => 'لا يساوي الحقل :attribute مع :date.',
    'date_format' => 'لا يتوافق الحقل :attribute مع الشكل :format.',
    'declined' => 'يجب رفض الحقل :attribute',
    'declined_if' => 'الحقل :attribute مرفوض في حال ما إذا كان :other يساوي :value.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي الحقل :attribute بين :min و :max رقمًا/أرقام',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'doesnt_end_with' => 'الحقل :attribute يجب ألا ينتهي بواحدة من القيم التالية: :values.',
    'doesnt_start_with' => 'الحقل :attribute يجب ألا يبدأ بواحدة من القيم التالية: :values.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    'ends_with' => 'الـ :attribute يجب ان ينتهي بأحد القيم التالية :value.',
    'enum' => 'الحقل :attribute غير صحيح',
    'exists' => ':attribute غير موجود',
    'file' => 'الـ :attribute يجب أن يكون من ملفا.',
    'filled' => 'الحقل :attribute إجباري',
    'gt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من :value حروفٍ/حرفًا.',
    ],
    'gte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي :value عناصر/عنصر او اكثر.',
        'file' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اكبر من او يساوي :value حروفٍ/حرفًا.',
    ],
    'image' => 'يجب أن يكون الحقل :attribute صورةً',
    'in' => 'الحقل :attribute لاغٍ',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون الحقل :attribute عنوان IP ذا بُنية صحيحة',
    'ipv4' => 'يجب أن يكون الحقل :attribute عنوان IPv4 ذا بنية صحيحة.',
    'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 ذا بنية صحيحة.',
    'json' => 'يجب أن يكون الحقل :attribute نصا من نوع JSON.',
    'lowercase' => 'الحقل :attribute يجب ان يتكون من حروف صغيرة',
    'lt' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اقل من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من :value حروفٍ/حرفًا.',
    ],
    'lte' => [
        'array' => 'الـ :attribute يجب ان يحتوي علي اكثر من :value عناصر/عنصر.',
        'file' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value كيلو بايت.',
        'numeric' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value.',
        'string' => 'الـ :attribute يجب ان يكون اقل من او يساوي :value حروفٍ/حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون الحقل :attribute عنوان MAC ذا بنية صحيحة.',
    'max' => [
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أصغر لـ :max.',
        'string' => 'يجب أن لا يتجاوز طول نص :attribute :max حروفٍ/حرفًا',
    ],
    'max_digits' => 'الحقل :attribute يجب ألا يحتوي أكثر من :max أرقام.',
    'mimes' => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'min' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'string' => 'يجب أن يكون طول نص :attribute على الأقل :min حروفٍ/حرفًا',
    ],
    'min_digits' => 'الحقل :attribute يجب أن يحتوي :min أرقام على الأقل.',
    'multiple_of' => 'الحقل :attribute يجب أن يكون من مضاعفات :value.',
    'not_in' => 'الحقل :attribute لاغٍ',
    'not_regex' => 'الحقل :attribute نوعه لاغٍ',
    'numeric' => 'يجب على الحقل :attribute أن يكون رقمًا',
    'password' => [
        'letters' => 'يجب ان يشمل حقل :attribute على حرف واحد على الاقل.',
        'mixed' => 'يجب ان يشمل حقل :attribute على حرف واحد بصيغة كبيرة على الاقل وحرف اخر بصيغة صغيرة.',
        'numbers' => 'يجب ان يشمل حقل :attribute على رقم واحد على الاقل.',
        'symbols' => 'يجب ان يشمل حقل :attribute على رمز واحد على الاقل.',
        'uncompromised' => 'حقل :attribute تبدو غير آمنة. الرجاء اختيار قيمة اخرى.',
    ],
    'present' => 'يجب تقديم الحقل :attribute',
    'prohibited' => 'الحقل :attribute محظور',
    'prohibited_if' => 'الحقل :attribute محظور في حال ما إذا كان :other يساوي :value.',
    'prohibited_unless' => 'الحقل :attribute محظور في حال ما لم يكون :other يساوي :value.',
    'prohibits' => 'الحقل :attribute يحظر :other من اي يكون موجود',
    'regex' => 'صيغة الحقل :attribute .غير صحيحة',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'الحقل :attribute يجب ان يحتوي علي مدخلات للقيم التالية :values.',
    'required_if' => 'حقل :attribute مطلوب.',
    'required_if_accepted' => 'The :attribute field is required when :other is accepted.',
    'required_unless' => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all' => 'الحقل :attribute إذا توفّر :values.',
    'required_without' => 'الحقل :attribute مطلوب  إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size' => [
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصرٍ/عناصر بالظبط',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
    ],
    'starts_with' => 'الحقل :attribute يجب ان يبدأ بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون الحقل :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute',
    'uppercase' => 'The :attribute must be uppercase.',
    'url' => 'صيغة الرابط :attribute غير صحيحة',
    'uuid' => 'الحقل :attribute يجب ان ايكون رقم UUID صحيح.',

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
            'rule-name' => 'custom-message',
        ],
        'name' => [
            'required' => 'يجب ان تدخل الاسم',
        ]

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

    'attributes' => [
        'title_ar' => 'العنوان باللغة العربية',
        'name' => 'fdklsjfdlskjflsd',
        'description_ar' => 'الوصف باللغة العربية',
        'title_en' => 'العنوان باللغة الإنجليزية',
        'description_en' => 'الوصف باللغة الإنجليزية',
        'description2_ar' => 'الوصف 2 باللغة العربية',
        'description2_en' => 'الوصف 2 باللغة الإنجليزية',
        'price' => 'السعر',
        'duration' => 'المدة',
        'email' => 'البريد الإلكترونى',
        'name' => 'الإسم',
        'images.' => 'صور',
        'password' => 'كلمة المرور',
        'message' => 'الرسالة',
        'name_ar' => 'الإسم باللغة العربية',
        'name_en' => 'الإسم باللغة الإنجليزية',
        'phone' => 'رقم الجوال',
        'address_ar' => 'العنوان باللغة العربية',
        'address_en' => 'العنوان باللغة الإنجليزية',
        'message_ar' => 'رسالتنا باللغة العربية',
        'message_en' => 'رسالتنا باللغة الإنجليزية',
        'objective_ar' => 'أهدافنا باللغة العربية',
        'objective_en' => 'أهدافنا باللغة الإنجليزية',
        'vision_ar' => 'رؤيتنا باللغة العربية',
        'vision_en' => 'رؤيتنا باللغة الإنجليزية',
        'short_description_ar' => ' الوصف القصير باللغة العربية',
        'short_description_en' => ' الوصف القصير باللغة الإنجليزية',
        'hint1_ar' => ' عنوان الموقع 1 باللغة العربية',
        'hint1_en' => ' عنوان الموقع1 باللغة الإنجليزية',
        'hint2_ar' => 'عنوان الموقع2 للموقع باللغة العربية',
        'hint2_en' => 'عنوان الموقع2 للموقع باللغة الإنجليزية',
        'national_identity' => 'رقم الهوية',
        'license_number' => 'رقم الترخيص',
        'hint_register_ar' => 'ملحوظة صفحة إنشاء حساب باللغة العربية',
        'hint_register_en' => 'ملحوظة صفحة إنشاء حساب باللغة الإنجليزية',
        'package_id' => 'من فضلك ,إختر باقة',
        'images' => 'الصور',
        'hint_package_en' => 'ملحوظة صفحة الباقات باللغة الإنجليزية',
        'hint_package_ar' => 'ملحوظهة صفحة الباقات باللغة العربية',
        'details_ar' => 'التفاصيل باللغة العربية',
        'details_en' => 'التفاصيل باللغة الإنجليزية',
        'details' => 'التفاصيل',
        'link' => 'لينك',
        'count' => 'عدد الخدمات المتاحة',
        'image_vision' => 'صورة رؤيتنا',
        'image_message' => 'صورة رسالتنا',
        'image_description' => 'صورة نبذة عنا',
        'desc_image1' => ' 1الصورة ',
        'desc_image2' => ' 2الصورة ',
        'Incorrect email or password' => 'البريد الإلكترونى او كلمة المرور غير صحيحة',
        'answer' => 'الإجابة',
        'content_ar' => 'المحتوي باللغة العربية',
        'content_en' => 'المحتوي باللغة الإنجليزية',
        'type' => 'النوع',
        'file' => 'الملف',
        'discount' => 'الخصم',
        'discount_percentage' => 'نسبة الخصم ',
        'profit' => 'الربح ',
        'profit_percentage' => 'نسبة الربح ',
        'max_use' => ' اقصي عدد مرات للإستخدام',
        'active' => 'تفعيل ',
        'reason_unactivate' => ' سبب إلغاء التفعيل ',
        'content' => 'المحتوي ',
        'category_id' => 'القسم ',
        'logo' => 'الصورة الخاصة بكم ',
        'terms_ar' => 'الشروط باللغة العربية ',
        'terms_en' => 'الشروط باللغة الإنجليزية  ',
        'certificates_ar' => 'الشهادات المطلوبة باللغة العربية ',
        'certificates_en' => 'الشهادات المطلوبة باللغة الإنجليزية ',
        'duration_houres' => 'المدة بالساعات ',
        'duration_days' => 'المدة بالأيام ',
        'start_at' => 'تبدأ في ',
        'new_password' => 'كلمة المرور الجديده',
        'old_password' => 'كلمة المرور القديمه',

        'place' => 'المكان ',
        'price' => 'السعر ',
        'diploma_rate' => 'تقييم الدبلومة ',
        'site_rate' => 'تقييم الموقع ',
        'teacher_rate' => 'تقييم المعلمين ',
        'note' => 'ملحوظة ',
        'time' => 'الوقت ',
        'link' => 'لينك ',
        'sol' => 'الإجابة ',
        'study_year' => 'العام الدراسي ',
        'icon' => 'الأيقونة ',
        'amount' => 'الكمية ',
        'semesters' => 'الفصول الدراسية ',
        'student_guide_file' => 'دليل المتدرب ',
        'min_withdrawal' => 'الحد الأدني لسحب أرباح المسوق ',
        'commision_buy' => 'عمولة البيع',
        'commision_rent' => 'عمولة الايجار',
        'honisty_ar' => ' الأمانه بالعربي',
        'honisty_en' => ' الأمانه بالانجليزي',
        'keys_ar' => 'المفاتيح باللغه العربيه',
        'key_en' => 'المفاتيح باللغه الانجليزيه',
        'cat_id' => 'القسم',
        'ad_type' => 'نوع المعلن',
        'width' => 'العرض',
        'height' => 'الطول',
        'discription' => 'الوصف',
        'for_rent' => 'للايجار ام لا',
        'map_latitude' => 'الموقع',
        'map_longitude' => 'الموقع',
        'area' => 'المساحة',
        'family' => 'عائله',
        //Apartment
        'neighborhood' => 'جوار',
        'rent_time' => 'وقت الإيجار',
        'floor' => 'طابق',
        'building_age' => 'عمر البناء',
        'living_rooms' => 'غرف المعيشة',
        'bedrooms' => 'غرف نوم',
        'bathrooms' => 'الحمامات',
        'street_width' => 'عرض الشارع',
        'furnished' => 'مفروش',
        'kitchen_availability' => 'توفر المطبخ',
        'extra_unit_availability' => 'توفر وحدة إضافية',
        'water_availability' => 'توفر المياه',
        'car_entrance' => 'مدخل السيارة',
        'elevator_availability' => 'توفر المصعد',
        'size' => 'الحجم',
        'length' => 'الطول',
        'service_type' => 'نوع الخدمه',
        'phone_number' => 'رقم الهاتف',
        'city' => 'المدينه',
        'service_details' => 'تفاصيل الخدمه',
        'face_building_id' => 'واجهة المبني',
        'price_from' => 'السعر من ',
        'price_to' => 'السعر الي',
        'area_from' => 'المساحة من ',
        'area_to' => 'المساحة الي',
        'for_rent' => 'للايجار او لا',
        'street_width' => 'عرض الشارع',
        'street_width_from' => 'عرض الشارع من',
        'street_width_to' => 'عرض الشارع الي',
        'property_age_from' => 'عمر العقار من ',
        'property_age_to' => 'عمر العقار الي',
        'is_equipped' => 'مجهزة؟',
        'category_id' => 'القسم',
        'renting_duration' => 'المدة',
        'purpose' => 'النوع',
        'floor_number' => 'الدور',
        'number_of_rooms' => 'عدد الغرف',
        'number_of_living_rooms' => 'الصالات',
        'number_of_bathrooms' => 'دورات المياة',
        'number_of_shops' => 'عدد المحلات',
        'number_of_halls' => 'عدد الصالات',
        'number_of_apartments' => 'عدد الشقق',
        'number_of_wells' => 'عدد الابار',
        'number_of_floors' => 'عدد الادوار',
        'user_id' => 'الرقم التعريفي',
        'name' => 'الاسم مطلوب ',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',
        '' => '',

    ],

];
