<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'nome',
        'data_de_nascimento',
        'genero',
        'profissao',
        'residencia_endereco',
        'residencia_bairro',
        'residencia_uf',
        'residencia_cidade',
        'residencia_cep',
        'telefone_principal',
        'telefone_alternativo',
        'habilitacao_cat_a',
        'habilitacao_cat_b',
        'habilitacao_cat_c',
        'habilitacao_cat_d',
        'habilitacao_cat_e',
        'veiculo_proprio',
        'estado_civil',
        'qtde_filhos',
        'conjuge',
        'portador_de_necessidades_especiais',
        'necessidades_especiais',
        'parente_na_empresa',
        'parente_nome',
        'tipo_parentesco',
        'conhecidos_na_empresa',
        'conhecidos_nomes',
        'auto_descricao_personalidade',
        'porque_trabalhar_aqui',
        'outras_informacoes',
        'facebook_url',
        'instagram_url',
        'twitter_url',
        'linkedin_url',
        'github_url',
        'areas_pretendidas',
        'pretensao_salarial'
    ];

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
