<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CandidatoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'data_de_nascimento' => $this->data_de_nascimento,
            'genero' => $this->genero,
            'profissao' => $this->profissao,
            'residencia_endereco' => $this->residencia_endereco,
            'residencia_bairro' => $this->residencia_bairro,
            'residencia_uf' => $this->residencia_uf,
            'residencia_cidade' => $this->residencia_cidade,
            'residencia_cep' => $this->residencia_cep,
            'telefone_principal' => $this->telefone_principal,
            'telefone_alternativo' => $this->telefone_alternativo,
            'habilitacao_cat_a' => $this->habilitacao_cat_a,
            'habilitacao_cat_b' => $this->habilitacao_cat_b,
            'habilitacao_cat_c' => $this->habilitacao_cat_c,
            'habilitacao_cat_d' => $this->habilitacao_cat_d,
            'habilitacao_cat_e' => $this->habilitacao_cat_e,
            'veiculo_proprio' => $this->veiculo_proprio,
            'estado_civil' => $this->estado_civil,
            'qtde_filhos' => $this->qtde_filhos,
            'conjuge' => $this->conjuge,
            'portador_de_necessidades_especiais' => $this->portador_de_necessidades_especiais,
            'necessidades_especiais' => $this->necessidades_especiais,
            'parente_na_empresa' => $this->parente_na_empresa,
            'parente_nome' => $this->parente_nome,
            'tipo_parentesco' => $this->tipo_parentesco,
            'conhecidos_na_empresa' => $this->conhecidos_na_empresa,
            'conhecidos_nomes' => $this->conhecidos_nomes,
            'auto_descricao_personalidade' => $this->auto_descricao_personalidade,
            'porque_trabalhar_aqui' => $this->porque_trabalhar_aqui,
            'outras_informacoes' => $this->outras_informacoes,
            'facebook_url' => $this->facebook_url,
            'instagram_url' => $this->instagram_url,
            'twitter_url' => $this->twitter_url,
            'linkedin_url' => $this->linkedin_url,
            'github_url' => $this->github_url,
            'areas_pretendidas' => $this->areas_pretendidas,
            'pretensao_salarial' => $this->pretensao_salarial 
        ];
    }
}
