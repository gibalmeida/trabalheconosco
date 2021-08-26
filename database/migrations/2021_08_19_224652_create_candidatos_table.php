<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidatos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->unique();
            $table->string('nome', 70);
            $table->date("data_de_nascimento");
            $table->enum("genero", ["masculino","feminino","prefiro não dizer"]);
            $table->string('profissao', 70)->nullable();
            $table->string('residencia_endereco',80);
            $table->string('residencia_bairro',30);
            $table->enum("residencia_uf",['AC','AL','AP','AM','BA','CE','DF','ES','GO','MA','MT','MS','MG','PA','PB','PR','PE','PI','RJ','RN','RS','RO','RR','SC','SP','SE','TO' ]);
            $table->string('residencia_cidade',100);
            $table->string('residencia_cep',10);
            $table->string('telefone_principal',15);
            $table->string('telefone_alternativo',15)->nullable();
            $table->boolean('habilitacao_cat_a');
            $table->boolean('habilitacao_cat_b');
            $table->boolean('habilitacao_cat_c');
            $table->boolean('habilitacao_cat_d');
            $table->boolean('habilitacao_cat_e');
            $table->enum('veiculo_proprio',['não possui veículo próprio','carro','moto','carro e moto','outro']);
            $table->enum('estado_civil',['solteiro','casado','separado','divorciado']);
            $table->tinyInteger('qtde_filhos')->unsigned()->nullable();
            $table->string('conjuge',70)->nullable();
            $table->boolean('portador_de_necessidades_especiais');
            $table->string('necessidades_especiais',80)->nullable();
            $table->boolean('parente_na_empresa');
            $table->string('parente_nome')->nullable();
            $table->string('tipo_parentesco',20)->nullable();
            $table->boolean('conhecidos_na_empresa');
            $table->string('conhecidos_nomes',100)->nullable();
            $table->text('auto_descricao_personalidade')->nullable();
            $table->text('porque_trabalhar_aqui')->nullable();
            $table->text('outras_informacoes')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('github_url')->nullable();
            $table->string('areas_pretendidas')->nullable();
            $table->decimal('pretensao_salarial',7,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatos');
    }
}
