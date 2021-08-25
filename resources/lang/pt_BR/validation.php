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

    'accepted' => 'O campo ":attribute" must be accepted.',
    'active_url' => 'O campo ":attribute" is not a valid URL.',
    'after' => 'O campo ":attribute" precisa ser uma data depois de :date.',
    'after_or_equal' => 'O campo ":attribute" must be a date after or equal to :date.',
    'alpha' => 'O campo ":attribute" must only contain letters.',
    'alpha_dash' => 'O campo ":attribute" must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'O campo ":attribute" must only contain letters and numbers.',
    'array' => 'O campo ":attribute" must be an array.',
    'before' => 'O campo ":attribute" precisa ser uma data antes de :date.',
    'before_or_equal' => 'O campo ":attribute" must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'O campo ":attribute" must be between :min and :max.',
        'file' => 'O campo ":attribute" must be between :min and :max kilobytes.',
        'string' => 'O campo ":attribute" precisa ter entre :min e :max caracteres.',
        'array' => 'O campo ":attribute" must have between :min and :max items.',
    ],
    'boolean' => 'O campo ":attribute" field must be true or false.',
    'confirmed' => 'O campo ":attribute" confirmation does not match.',
    'current_password' => 'The password is incorrect.',
    'date' => 'O campo ":attribute" is not a valid date.',
    'date_equals' => 'O campo ":attribute" must be a date equal to :date.',
    'date_format' => 'O campo ":attribute" does not match the format :format.',
    'different' => 'O campo ":attribute" and ":other" must be different.',
    'digits' => 'O campo ":attribute" must be :digits digits.',
    'digits_between' => 'O campo ":attribute" must be between :min and :max digits.',
    'dimensions' => 'O campo ":attribute" has invalid image dimensions.',
    'distinct' => 'O campo ":attribute" field has a duplicate value.',
    'email' => 'O campo ":attribute" must be a valid email address.',
    'ends_with' => 'O campo ":attribute" must end with one of the following: ":values".',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'O campo ":attribute" must be a file.',
    'filled' => 'O campo ":attribute" field must have a value.',
    'gt' => [
        'numeric' => 'O campo ":attribute" must be greater than :value.',
        'file' => 'O campo ":attribute" must be greater than :value kilobytes.',
        'string' => 'O campo ":attribute" must be greater than :value characters.',
        'array' => 'O campo ":attribute" must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'O campo ":attribute" must be greater than or equal :value.',
        'file' => 'O campo ":attribute" must be greater than or equal :value kilobytes.',
        'string' => 'O campo ":attribute" must be greater than or equal :value characters.',
        'array' => 'O campo ":attribute" must have :value items or more.',
    ],
    'image' => 'O campo ":attribute" must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'O campo ":attribute" field does not exist in ":other".',
    'integer' => 'O campo ":attribute" must be an integer.',
    'ip' => 'O campo ":attribute" must be a valid IP address.',
    'ipv4' => 'O campo ":attribute" must be a valid IPv4 address.',
    'ipv6' => 'O campo ":attribute" must be a valid IPv6 address.',
    'json' => 'O campo ":attribute" must be a valid JSON string.',
    'lt' => [
        'numeric' => 'O campo ":attribute" must be less than :value.',
        'file' => 'O campo ":attribute" must be less than :value kilobytes.',
        'string' => 'O campo ":attribute" must be less than :value characters.',
        'array' => 'O campo ":attribute" must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'O campo ":attribute" must be less than or equal :value.',
        'file' => 'O campo ":attribute" must be less than or equal :value kilobytes.',
        'string' => 'O campo ":attribute" must be less than or equal :value characters.',
        'array' => 'O campo ":attribute" must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'O campo ":attribute" must not be greater than :max.',
        'file' => 'O campo ":attribute" must not be greater than :max kilobytes.',
        'string' => 'O campo ":attribute" must not be greater than :max characters.',
        'array' => 'O campo ":attribute" must not have more than :max items.',
    ],
    'mimes' => 'O campo ":attribute" must be a file of type: ":values".',
    'mimetypes' => 'O campo ":attribute" must be a file of type: ":values".',
    'min' => [
        'numeric' => 'O campo ":attribute" must be at least :min.',
        'file' => 'O campo ":attribute" must be at least :min kilobytes.',
        'string' => 'O campo ":attribute" precisa ter pelo menos :min caracteres.',
        'array' => 'O campo ":attribute" must have at least :min items.',
    ],
    'multiple_of' => 'O campo ":attribute" must be a multiple of :value.',
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'O campo ":attribute" format is invalid.',
    'numeric' => 'O campo ":attribute" must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'O campo ":attribute" field must be present.',
    'regex' => 'O campo ":attribute" format is invalid.',
    'required' => 'O campo ":attribute" field is required.',
    'required_if' => 'O campo ":attribute" é obrigatório quando ":other" é :value.',
    'required_unless' => 'O campo ":attribute" é obrigatório a não ser que o campo ":other" está em ":values".',
    'required_with' => 'O campo ":attribute" é obrigatório quando ":values" está presente.',
    'required_with_all' => 'O campo ":attribute" é obrigatório quando ":values" estão presentes.',
    'required_without' => 'O campo ":attribute" é obrigatório quando ":values" não está presente.',
    'required_without_all' => 'O campo ":attribute" é obrigatório quando none of ":values" estão presentes.',
    'prohibited' => 'O campo ":attribute" field is prohibited.',
    'prohibited_if' => 'O campo ":attribute" field is prohibited when ":other" is :value.',
    'prohibited_unless' => 'O campo ":attribute" field is prohibited unless ":other" is in ":values".',
    'same' => 'O campo ":attribute" and ":other" must match.',
    'size' => [
        'numeric' => 'O campo ":attribute" must be :size.',
        'file' => 'O campo ":attribute" must be :size kilobytes.',
        'string' => 'O campo ":attribute" must be :size characters.',
        'array' => 'O campo ":attribute" must contain :size items.',
    ],
    'starts_with' => 'O campo ":attribute" must start with one of the following: ":values".',
    'string' => 'O campo ":attribute" must be a string.',
    'timezone' => 'O campo ":attribute" must be a valid timezone.',
    'unique' => 'O campo ":attribute" has already been taken.',
    'uploaded' => 'O campo ":attribute" failed to upload.',
    'url' => 'O campo ":attribute" must be a valid URL.',
    'uuid' => 'O campo ":attribute" must be a valid UUID.',

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
        'residencia_cep' => [
            'regex' => 'O campo CEP deve ser informado no formato XX.XXX-XXX.'
        ],
        'necessidades_especiais' => [
            'required_unless' => 'O preenchimento do campo ":attribute" é obrigatório se for portador de necessidades especiais.'
        ],
        'parente_nome' => [
            'required_unless' => 'O preenchimento do campo ":attribute" é obrigatório se possuir um parente trabalhando na empresa.'
        ],
        'tipo_parentesco' => [
            'required_unless' => 'O preenchimento do campo ":attribute" é obrigatório se possuir um parente trabalhando na empresa.'
        ],
        'conhecidos_nomes' => [
            'required_unless' => 'O preenchimento do campo ":attribute" é obrigatório se possuir amigos ou conhecidos trabalhando na empresa.'
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
        'genero' => 'gênero',
        'profissao' => "profissão",
        'residencia_endereco' => "endereço",
        'residencia_bairro' => "bairro",
        'residencia_uf' => "estado",
        'residencia_cidade' => "cidade",
        'residencia_cep' => "cep",
        'qtde_filhos' => "quantidade de filhos",
        'conjuge' => "nome do conjuge",
        'parente_nome' => "nome do parente",
        'tipo_parentesco' => "tipo de parentesco",
        'conhecidos_nome' => "nomes dos conhecidos",
        'auto_descricao_personalidade' => "descrição da sua personalidade",
        'porque_trabalhar_aqui' => "por que gostaria de trabalhar nesta empresa",
        'outras_informacoes' => "outras informações a seu respeito",
        'facebook_url' => "endereço do perfil no Facebook",
        'instagram_url' => "endereço do perfil no Instagram",
        'twitter_url' => "endereço do perfil no Twitter",
        'linkedin_url' => "endereço do perfil no LinkedIn",
        'github_url' => "endereço do perfil no GitHub",
        'pretensao_salarial' => "pretensão salarial"

    ],

];
