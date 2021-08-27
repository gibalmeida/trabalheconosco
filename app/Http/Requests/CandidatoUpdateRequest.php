<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class CandidatoUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Prepare the data for validation.
     *
     * @return void
     */
    protected function prepareForValidation()
    {

        if ($this->input('estado_civil') != 'casado') {
            $this->merge(['conjuge' => null]);
        }
        if ($this->input('portador_de_necessidades_especiais') == 0) {
            $this->merge(['necessidades_especiais' => null]);
        }
        if ($this->input('parente_na_empresa') == 0) {
            $this->merge(['parente_nome' => null, 'tipo_parentesco' => null ]);
        }
        if ($this->input('conhecidos_na_empresa') == 0) {
            $this->merge(['conhecidos_nomes' => null]);
        }
        // error_log($this->dump());
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $dataNascimentoAfter = date("Y-m-d", strtotime("-100 year", time())); // o candidato não pode ter mais do que 100 anos para se cadastrar no site
        $dataNascimentoBefore = date("Y-m-d", strtotime("-16 year", time())); // o candidato precisa ter no mínimo 16 anos para se cadastrar no site

        return [
            'nome' => ['required', 'string', 'min:5', 'max:70'],
            'data_de_nascimento' => ['required', 'date', "before:${dataNascimentoBefore}", "after:${dataNascimentoAfter}"],
            'genero' => ['required', 'string'],
            'profissao' => ['required', 'min:4', 'max:70'],
            'residencia_endereco' => ['required', 'string', 'min:4', 'max:80'],
            'residencia_bairro' => ['required', 'string', 'min:3', 'max:30'],
            'residencia_uf' => ['required', 'string', 'min:2'],
            'residencia_cidade' => ['required', 'string', 'min:4', 'max:100'],
            'residencia_cep' => ['required', 'string', 'regex:/^[0-9]{2}\.[0-9]{3}-[0-9]{3}$/i'],
            'telefone_principal' => ['required', 'string', 'min:8', 'max:15'],
            'telefone_principal' => ['nullable', 'string', 'min:8', 'max:15'],
            'habilitacao_cat_a' => ['nullable'],
            'habilitacao_cat_b' => ['nullable'],
            'habilitacao_cat_c' => ['nullable'],
            'habilitacao_cat_d' => ['nullable'],
            'habilitacao_cat_e' => ['nullable'],
            'veiculo_proprio' => ['required', 'string'],
            'estado_civil' => ['required', 'string'],
            'qtde_filhos' => ['nullable', 'integer'],
            'conjuge' => ['required_if:estado_civil,casado'],
            'portador_de_necessidades_especiais' => ['nullable'],
            'necessidades_especiais' => ['required_unless:portador_de_necessidades_especiais,false'],
            'parente_na_empresa' => ['nullable'],
            'parente_nome' => ['required_unless:parente_na_empresa,false'],
            'tipo_parentesco' => ['required_unless:parente_na_empresa,false'],
            'conhecidos_na_empresa' => ['nullable'],
            'conhecidos_nomes' => ['required_unless:conhecidos_na_empresa,false'],
            'auto_descricao_personalidade' => ['nullable'],
            'porque_trabalhar_aqui' => ['nullable'],
            'outras_informacoes' => ['nullable'],
            'facebook_url' => ['nullable'],
            'instagram_url' => ['nullable'],
            'twitter_url' => ['nullable'],
            'linkedin_url' => ['nullable'],
            'github_url' => ['nullable'],
            'areas_pretendidas' => ['nullable'],
            'pretensao_salarial' => ['nullable']
        ];
    }
}
