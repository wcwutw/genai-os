<?php

return [
    /*
     |------------------------------------------------- -------------------------
     | Validation Language Lines
     |------------------------------------------------- -------------------------
     |
     | The following language lines contain the default error messages used by
     | the validator class. Some of these rules have multiple versions such
     | as the size rules. Feel free to tweak each of these messages here.
     |
     */

    'accepted' => ' :attribute 필드를 수락해야 합니다. ',
    'accepted_if' => ' :other 가 :value 일 때, :attribute 필드를 수락해야 합니다. ',
    'active_url' => ' :attribute 필드는 유효한 URL 이어야 합니다. ',
    'after' => ' :attribute 필드는 :date 이후의 날짜여야 합니다. ',
    'after_or_equal' => ' :attribute 필드는 :date 이후 또는 해당 날짜와 같은 날짜여야 합니다. ',
    'alpha' => ' :attribute 필드는 문자만 포함해야 합니다. ',
    'alpha_dash' => ' :attribute 필드는 문자, 숫자, 대시 및 밑줄 만 포함해야 합니다. ',
    'alpha_num' => ' :attribute 필드는 문자와 숫자만 포함해야 합니다. ',
    'array' => ' :attribute 필드는 배열이어야 합니다. ',
    'ascii' => ' :attribute 필드는 ASCII 문자 및 기호만 포함해야 합니다. ',
    'before' => ' :attribute 필드는 :date 이전의 날짜여야 합니다. ',
    'before_or_equal' => ' :attribute 필드는 :date 이전 또는 해당 날짜와 같은 날짜여야 합니다. ',
    'between' => [
        'array' => ' :attribute 필드는 :min 에서 :max 개의 항목을 가져야 합니다. ',
        'file' => ' :attribute 필드는 :min 에서 :max KB 사이여야 합니다. ',
        'numeric' => ' :attribute 필드는 :min 에서 :max 사이여야 합니다. ',
        'string' => ' :attribute 필드는 :min 에서 :max 문자 사이여야 합니다. ',
    ],
    'boolean' => ' :attribute 필드는 true 또는 false 여야 합니다. ',
    'can' => ' :attribute 필드에는 승인되지 않은 값이 포함되어 있습니다. ',
    'confirmed' => ' :attribute 필드 확인이 일치하지 않습니다. ',
    'current_password' => '잘못된 암호입니다. ',
    'date' => ' :attribute 필드는 유효한 날짜여야 합니다. ',
    'date_equals' => ' :attribute 필드는 :date 와 같아야 합니다. ',
    'date_format' => ' :attribute 필드는 :format 형식과 일치해야 합니다. ',
    'decimal' => ' :attribute 필드는 :decimal 소수 자릿수를 가져야 합니다. ',
    'declined' => ' :attribute 필드는 거절되어야 합니다. ',
    'declined_if' => ' :other 가 :value 일 때, :attribute 필드는 거절되어야 합니다. ',
    'different' => ' :attribute 필드와 :other 는 달라야 합니다. ',
    'digits' => ' :attribute 필드는 :digits 자릿수 여야 합니다. ',
    'digits_between' => ' :attribute 필드는 :min 에서 :max 자릿수 사이여야 합니다. ',
    'dimensions' => ' :attribute 필드에는 유효하지 않은 이미지 크기가 있습니다. ',
    'distinct' => ' :attribute 필드에 중복 값이 있습니다. ',
    'doesnt_end_with' => ' :attribute 필드는 다음 중 하나로 끝나면 안 됩니다. :values. ',
    'doesnt_start_with' => ' :attribute 필드는 다음 중 하나로 시작할 수 없습니다. :values. ',
    'email' => ' :attribute 필드는 유효한 이메일 주소여야 합니다. ',
    'ends_with' => ' :attribute 필드는 다음 중 하나로 끝나야 합니다. :values. ',
    'enum' => '선택한 :attribute 가 유효하지 않습니다. ',
    'exists' => '선택한 :attribute 가 유효하지 않습니다. ',
    'extensions' => ' :attribute 필드는 다음 중 하나의 확장명을 가져야 합니다. :values. ',
    'file' => ' :attribute 필드는 파일이어야 합니다. ',
    'filled' => ' :attribute 필드는 값을 가져야 합니다. ',
    'gt' => [
        'array' => ' :attribute 필드에는 :value 개 이상의 항목이 있어야 합니다. ',
        'file' => ' :attribute 필드는 :value KB보다 커야 합니다. ',
        'numeric' => ' :attribute 필드는 :value 보다 커야 합니다. ',
        'string' => ' :attribute 필드는 :value 글자보다 커야 합니다. ',
    ],
    'gte' => [
        'array' => ' :attribute 필드는 :value 개 이상의 항목을 가져야 합니다. ',
        'file' => ' :attribute 필드는 :value KB 이상이어야 합니다. ',
        'numeric' => ' :attribute 필드는 :value 이상이어야 합니다. ',
        'string' => ' :attribute 필드는 :value 글자 이상이어야 합니다. ',
    ],

    'hex_color' => ':attribute 필드는 유효한 16진수 색상이어야 합니다.',
    'image' => ':attribute 필드는 이미지여야 합니다.',
    'in' => '선택한 :attribute가 유효하지 않습니다.',
    'in_array' => ':attribute 필드는 :other에 존재해야 합니다.',
    'integer' => ':attribute 필드는 정수여야 합니다.',
    'ip' => ':attribute 필드는 유효한 IP 주소여야 합니다.',
    'ipv4' => ':attribute 필드는 유효한 IPv4 주소여야 합니다.',
    'ipv6' => ':attribute 필드는 유효한 IPv6 주소여야 합니다.',
    'json' => ':attribute 필드는 유효한 JSON 문자열이어야 합니다.',
    'lowercase' => ':attribute 필드는 소문자여야 합니다.',
    'lt' => [
        'array' => ':attribute 필드는 :value 개보다 적어야 합니다.',
        'file' => ':attribute 필드는 :value 킬로바이트보다 작아야 합니다.',
        'numeric' => ':attribute 필드는 :value 보다 작아야 합니다.',
        'string' => ':attribute 필드는 :value 자보다 작아야 합니다.',
    ],
    'lte' => [
        'array' => ':attribute 필드는 :value 개 이하이어야 합니다.',
        'file' => ':attribute 필드는 :value 킬로바이트 이하이어야 합니다.',
        'numeric' => ':attribute 필드는 :value 이하이어야 합니다.',
        'string' => ':attribute 필드는 :value 자 이하이어야 합니다.',
    ],
    'mac_address' => ':attribute 필드는 유효한 MAC 주소여야 합니다.',
    'max' => [
        'array' => ':attribute 필드는 :max 개를 초과할 수 없습니다.',
        'file' => ':attribute 필드는 :max 킬로바이트를 초과할 수 없습니다.',
        'numeric' => ':attribute 필드는 :max 보다 클 수 없습니다.',
        'string' => ':attribute 필드는 :max 자를 초과할 수 없습니다.',
    ],
    'max_digits' => ':attribute 필드는 :max 자리 이상일 수 없습니다.',
    'mimes' => ':attribute 필드는 :values 타입의 파일이어야 합니다.',
    'mimetypes' => ':attribute 필드는 :values 타입의 파일이어야 합니다.',
    'min' => [
        'array' => ':attribute 필드는 최소한 :min 개의 항목을 가져야 합니다.',
        'file' => ':attribute 필드는 최소한 :min 킬로바이트여야 합니다.',
        'numeric' => ':attribute 필드는 최소한 :min 이어야 합니다.',
        'string' => ':attribute 필드는 최소한 :min 자여야 합니다.',
    ],
    'min_digits' => '필드 :attribute는 최소 :min 자리 숫자여야 합니다.',
    'missing' => '필드 :attribute는 누락되어야 합니다.',
    'missing_if' => ':other가 :value 인 경우 필드 :attribute는 누락되어야 합니다.',
    'missing_unless' => ':other가 :value가 아닌 경우 필드 :attribute는 누락되어야 합니다.',
    'missing_with' => ':values가 존재하는 경우 필드 :attribute는 누락되어야 합니다.',
    'missing_with_all' => ':values가 모두 존재하는 경우 필드 :attribute는 누락되어야 합니다.',
    'multiple_of' => '필드 :attribute는 :value의 배수여야 합니다.',
    'not_in' => '선택한 :attribute가 잘못되었습니다.',
    'not_regex' => '필드 :attribute 형식이 잘못되었습니다.',
    'numeric' => '필드 :attribute는 숫자여야 합니다.',
    'password' => [
        'letters' => ':attribute 필드에는 적어도 하나의 문자가 있어야 합니다.',
        'mixed' => ':attribute 필드에는 대문자와 소문자가 적어도 하나씩 있어야 합니다.',
        'numbers' => ':attribute 필드에는 적어도 하나의 숫자가 있어야 합니다.',
        'symbols' => ':attribute 필드에는 적어도 하나의 기호가 있어야 합니다.',
        'uncompromised' => ':attribute가 이미 데이터 누출에 사용되었습니다. 다른 :attribute를 선택하십시오.',
    ],
    'present' => ':attribute 필드는 존재해야 합니다.',
    'present_if' => ':other가 :value 인 경우 :attribute 필드가 존재해야 합니다.',
    'present_unless' => ':other가 :value가 아닌 경우 :attribute 필드가 존재해야 합니다.',
    'present_with' => ':values가 존재하는 경우 :attribute 필드가 존재해야 합니다.',
    'present_with_all' => ':values가 모두 존재하는 경우 :attribute 필드가 존재해야 합니다.',
    'prohibited' => ':attribute 필드는 금지되었습니다.',
    'prohibited_if' => ':other가 :value 인 경우 :attribute 필드는 금지되었습니다.',
    'prohibited_unless' => ':values에 :other가 포함되지 않은 경우 :attribute 필드는 금지되었습니다.',
    'prohibits' => ':attribute 필드는 :other의 존재를 금지합니다.',
    'regex' => ':attribute 필드 형식이 잘못되었습니다.',
    'required' => ':attribute 필드는 필수입니다.',
    'required_array_keys' => ':attribute 필드에는 다음을 포함해야 합니다: :values.',
    'required_if' => ':other가 :value 인 경우 :attribute 필드는 필수입니다.',
    'required_if_accepted' => ':other가 수락된 경우 :attribute 필드는 필수입니다.',
    'required_unless' => ':other가 :values에 포함되어 있지 않은 경우 :attribute 필드는 필수입니다.',
    'required_with' => ':values가 존재하는 경우 :attribute 필드는 필수입니다.',
    'required_with_all' => ':values가 모두 존재하는 경우 :attribute 필드는 필수입니다.',
    'required_without' => ':values가 존재하지 않는 경우 :attribute 필드는 필수입니다.',
    'required_without_all' => ':values가 모두 존재하지 않는 경우 :attribute 필드는 필수입니다.',
    'same' => ':attribute 필드는 :other와 일치해야 합니다.',
    'size' => [
        'array' => ':attribute 필드는 :size 항목을 포함해야 합니다.',
        'file' => ':attribute 필드는 :size 킬로바이트여야 합니다.',
        'numeric' => ':attribute 필드는 :size여야 합니다.',
        'string' => ':attribute 필드는 :size 문자여야 합니다.',
    ],
    'starts_with' => ':attribute 필드는 다음 중 하나로 시작해야 합니다: :values.',
    'string' => ':attribute 필드는 문자열이어야 합니다.',
    'timezone' => ':attribute 필드는 유효한 시간대여야 합니다.',
    'unique' => ':attribute는 이미 사용 중입니다.',
    'uploaded' => ':attribute를 업로드할 수 없습니다.',
    'uppercase' => ':attribute 필드는 대문자여야 합니다.',
    'url' => ':attribute 필드는 유효한 URL이어야 합니다.',
    'ulid' => ':attribute 필드는 유효한 ULID여야 합니다.',
    'uuid' => ':attribute 필드는 유효한 UUID여야 합니다.',
    'email_domain' => [
        'invalid' => ':attribute는 유효한 이메일 도메인이어야 합니다.',
    ],
];
