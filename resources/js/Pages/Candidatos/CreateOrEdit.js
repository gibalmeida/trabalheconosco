import Button from "@/Components/Button";
import Authenticated from "@/Layouts/Authenticated";
import InputForFloatingLabel from "@/Components/InputForFloatingLabel";
import FormSection from "@/Components/FormSection";
import FloatingLabel from "@/Components/FloatingLabel";
import SelectGenero from "@/Components/SelectGenero";
import SelectVeiculoProprio from "@/Components/SelectVeiculoProprio";
import SelectUF from "@/Components/SelectUF";
import SelectEstadoCivil from "@/Components/SelectEstadoCivil";
import Checkbox from "@/Components/Checkbox";
import React, { useEffect } from "react";
import ValidationErrors from "@/Components/ValidationErrors";
import { InertiaLink } from "@inertiajs/inertia-react";
import { useForm } from "@inertiajs/inertia-react";
import TextAreaForFloatingLabel from "@/Components/TextAreaForFloatingLabel";

export default function CreateOrEdit(props) {
    const { auth, candidato } = props;
    const { data, setData, post, put, processing, errors, reset } = useForm({
        nome: '',
        data_de_nascimento: '',
        genero: '',
        profissao: '',
        residencia_endereco:  '',
        residencia_bairro:  '',
        residencia_uf:  '',
        residencia_cidade:  '',
        residencia_cep:  '',
        telefone_principal:  '',
        telefone_alternativo:  '',
        habilitacao_cat_a: false,
        habilitacao_cat_b: false,
        habilitacao_cat_c: false,
        habilitacao_cat_d: false,
        habilitacao_cat_e: false,
        veiculo_proprio:  '',
        estado_civil:  '',
        qtde_filhos:  '',
        conjuge:  '',
        portador_de_necessidades_especiais:  false,
        necessidades_especiais:  '',
        parente_na_empresa:   false,
        parente_nome:  '',
        tipo_parentesco:  '',
        conhecidos_na_empresa:  false,
        conhecidos_nomes:  '',
        auto_descricao_personalidade:  '',
        porque_trabalhar_aqui:  '',
        outras_informacoes:  '',
        facebook_url:  '',
        instagram_url:  '',
        twitter_url:  '',
        linkedin_url:  '',
        github_url:  '',
        areas_pretendidas:  '',
        pretensao_salarial:  '',
        ...candidato?.data,

    });

    // useEffect(() => {
    //     return () => {
    //         reset("password", "password_confirmation");
    //     };
    // }, []);

    const onHandleChange = (event) => {
        setData(
            event.target.name,
            event.target.type === "checkbox"
                ? event.target.checked
                : event.target.value
        );
    };

    const submit = (e) => {
        e.preventDefault();

        if (data.id) {
            put(route("candidatos.update", data.id))
        } else {
            post(route("candidatos.store"));
        }
    };

    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Meus dados
                </h2>
            }
        >
            <ValidationErrors errors={errors} />

            <form
                onSubmit={submit}
                className="max-w-7xl mx-auto rounded-lg shadow-xl overflow-hidden p-2 space-y-10 bg-white mt-2"
            >
                <FormSection value="Dados Básicos">
                    <div className="md:flex-grow md:w-8/12  md:max-w-2xl mb-2">
                        <FloatingLabel forInput="nome" value="Nome completo">
                            <InputForFloatingLabel
                                type="text"
                                name="nome"
                                id="nome"
                                value={data.nome}
                                autoComplete="name"
                                isFocused={true}
                                handleChange={onHandleChange}
                                placeholder="Nome"
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="md:flex-grow md:w-2/12 md:max-w-xs">
                        <FloatingLabel
                            forInput="data_de_nascimento"
                            value="Data de Nascimento"
                        >
                            <InputForFloatingLabel
                                type="date"
                                id="data_de_nascimento"
                                name="data_de_nascimento"
                                value={data.data_de_nascimento}
                                autoComplete="bday"
                                handleChange={onHandleChange}
                                placeholder="Data de Nascimento"
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="md:flex-grow md:w-2/12 md:max-w-xs">
                        <FloatingLabel forInput="genero" value="Gênero">
                            <SelectGenero
                                id="genero"
                                name="genero"
                                value={data.genero}
                                autocomplete="genero"
                                required
                                className="w-full "
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>

                    <div className="md:flex-grow md:w-8/12 md:max-w-2xl">
                        <FloatingLabel forInput="profissao" value="Profissão">
                            <InputForFloatingLabel
                                type="text"
                                id="profissao"
                                name="profissao"
                                value={data.profissao}
                                placeholder="Profissão"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="Endereço de Residência">
                    <div className="flex-grow md:w-8/12">
                        <FloatingLabel
                            forInput="residencia_endereco"
                            value="Endereço"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="residencia_endereco"
                                name="residencia_endereco"
                                value={data.residencia_endereco}
                                autoComplete="address-line1"
                                placeholder="Endereço"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-2/12">
                        <FloatingLabel
                            forInput="residencia_bairro"
                            value="Bairro"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="residencia_bairro"
                                name="residencia_bairro"
                                value={data.residencia_bairro}
                                autoComplete="address-level3"
                                placeholder="Bairro"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow-0 md:w-3/12">
                        <FloatingLabel forInput="residencia_uf" value="Estado">
                            <SelectUF
                                id="residencia_uf"
                                name="residencia_uf"
                                value={data.residencia_uf}
                                autoComplete="residencia_uf"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-6/12">
                        <FloatingLabel
                            forInput="residencia_cidade"
                            value="Cidade"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="residencia_cidade"
                                name="residencia_cidade"
                                value={data.residencia_cidade}
                                autoComplete="address-level2"
                                placeholder="Cidade"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-1/12">
                        <FloatingLabel
                            forInput="residencia_cep"
                            value="CEP"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="residencia_cep"
                                name="residencia_cep"
                                value={data.residencia_cep}
                                autoComplete="postal-code"
                                placeholder="CEP"
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>                    
                </FormSection>
                <FormSection value="Telefones para contato">
                    <div className="flex-grow md:w-3/12">
                        <FloatingLabel
                            forInput="telefone_principal"
                            value="Telefone Principal"
                        >
                            <InputForFloatingLabel
                                type="tel"
                                id="telefone_principal"
                                name="telefone_principal"
                                value={data.telefone_principal}
                                autoComplete="tel-national"
                                placeholder="Telefone Principal"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-3/12">
                        <FloatingLabel
                            forInput="telefone_alternativo"
                            value="Telefone Alternativo"
                        >
                            <InputForFloatingLabel
                                type="tel"
                                id="telefone_alternativo"
                                name="telefone_alternativo"
                                value={data.telefone_alternativo}
                                placeholder="Telefone Alternativo"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="CNH e Veículo Próprio">
                    <div className="flex-glow md:w-6/12">
                        <p className="text-center md:text-left text-gray-500 mb-2">
                            Marque abaixo as categorias que você tem
                            habilitação.
                        </p>
                        <div className="flex flew-col flew-wrap gap-2">
                            <div className="flex-grow">
                                <Checkbox
                                    name="habilitacao_cat_a"
                                    value={data.habilitacao_cat_a}
                                    handleChange={onHandleChange}
                                />
                                <label
                                    htmlFor="habilitacao_cat_a"
                                    className="ml-2"
                                >
                                    A
                                </label>
                            </div>
                            <div className="flex-grow">
                                <Checkbox
                                    name="habilitacao_cat_b"
                                    value={data.habilitacao_cat_b}
                                    handleChange={onHandleChange}
                                />
                                <label
                                    htmlFor="habilitacao_cat_b"
                                    className="ml-2"
                                >
                                    B
                                </label>
                            </div>
                            <div className="flex-grow">
                                <Checkbox
                                    name="habilitacao_cat_c"
                                    value={data.habilitacao_cat_c}
                                    handleChange={onHandleChange}
                                />
                                <label
                                    htmlFor="habilitacao_cat_c"
                                    className="ml-2"
                                >
                                    C
                                </label>
                            </div>
                            <div className="flex-grow">
                                <Checkbox
                                    name="habilitacao_cat_d"
                                    value={data.habilitacao_cat_d}
                                    handleChange={onHandleChange}
                                />
                                <label
                                    htmlFor="habilitacao_cat_d"
                                    className="ml-2"
                                >
                                    D
                                </label>
                            </div>
                            <div className="flex-grow">
                                <Checkbox
                                    name="habilitacao_cat_e"
                                    value={data.habilitacao_cat_e}
                                    handleChange={onHandleChange}
                                />
                                <label
                                    htmlFor="habilitacao_cat_e"
                                    className="ml-2"
                                >
                                    E
                                </label>
                            </div>
                        </div>
                    </div>
                    <div className="flex-grow md:w-3/12">
                        <FloatingLabel
                            forInput="residencia-uf"
                            value="Veículo Próprio"
                        >
                            <SelectVeiculoProprio
                                id="veiculo_proprio"
                                name="veiculo_proprio"
                                autoComplete="veiculo_proprio"
                                value={data.veiculo_proprio}
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="Estado Civil e Filhos">
                    <div className="flex-grow-0 md:w-2/12">
                        <FloatingLabel
                            forInput="estado_civil"
                            value="Estado Civil"
                        >
                            <SelectEstadoCivil
                                id="estado_civil"
                                name="estado_civil"
                                value={data.estado_civil}
                                handleChange={onHandleChange}
                                required
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow-0 md:w-2/12">
                        <FloatingLabel
                            forInput="qtde_filhos"
                            value="Nº de filhos"
                        >
                            <InputForFloatingLabel
                                type="number"
                                id="qtde_filhos"
                                name="qtde_filhos"
                                value={data.qtde_filhos}
                                placeholder="Nº de Filhos"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-6/12">
                        <FloatingLabel
                            forInput="conjuge"
                            value="Nome do Conjuge"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="conjuge"
                                name="conjuge"
                                value={data.conjuge}
                                placeholder="Nome do Conjuge"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="Necessidades Especiais">
                    <div className="flex-grow flex flex-col">
                        <div>
                            <Checkbox
                                name="portador_de_necessidades_especiais"
                                value={data.portador_de_necessidades_especiais}
                                handleChange={onHandleChange}
                            />
                            <label
                                htmlFor="portador_de_necessidades_especiais"
                                className="ml-2 text-xs sm:text-sm"
                            >
                                Portador de necessidades especiais
                            </label>
                        </div>
                        <div className="flex-grow">
                            <FloatingLabel
                                forInput="necessidades_especiais"
                                value="Necessidades Especiais"
                            >
                                <InputForFloatingLabel
                                    id="necessidades_especiais"
                                    name="necessidades_especiais"
                                    value={data.necessidades_especiais}
                                    placeholder="Especifique as necessidades especiais"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                    </div>
                </FormSection>
                <FormSection value="Parentes e amigos/conhecidos que trabalham na empresa">
                    <div className="flex-grow w-full">
                        <Checkbox
                            name="parente_na_empresa"
                            value={data.parente_na_empresa}
                            handleChange={onHandleChange}
                        />
                        <label
                            htmlFor="parente_na_empresa"
                            className="ml-2 text-xs sm:text-sm"
                        >
                            Possui parentes trabalhando na empresa ou
                            namorado(a)
                        </label>
                    </div>
                    <div className="flex-grow md:w-6/12">
                        <FloatingLabel
                            forInput="parente_nome"
                            value="Nome do parente que trabalha na empresa"
                        >
                            <InputForFloatingLabel
                                id="parente_nome"
                                name="parente_nome"
                                value={data.parente_nome}
                                placeholder="Nome do parente que trabalha na empresa"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:w-4/12">
                        <FloatingLabel
                            forInput="tipo_parentesco"
                            value="Tipo de Parentesco (pai, mãe, irmão(ã), etc.)"
                        />
                        <InputForFloatingLabel
                            type="text"
                            id="tipo_parentesco"
                            name="tipo_parentesco"
                            value={data.tipo_parentesco}
                            placeholder="Tipo de Parentesco (pai, mãe, irmão(ã), etc.)"
                            handleChange={onHandleChange}
                        />
                    </div>
                    <div className="flex-grow w-full">
                        <Checkbox
                            name="conhecidos_na_empresa"
                            value={data.conhecidos_na_empresa}
                            handleChange={onHandleChange}
                        />
                        <label
                            htmlFor="conhecidos_na_empresa"
                            className="ml-2 text-xs sm:text-sm"
                        >
                            Possui amigos ou conhecidos trabalhando na empresa
                        </label>
                    </div>
                    <div className="flex-grow md:w-6/12">
                        <FloatingLabel
                            forInput="conhecidos_nomes"
                            value="Pessoas que trabalham na empresa e lhe conhece bem"
                        >
                            <InputForFloatingLabel
                                id="conhecidos_nomes"
                                name="conhecidos_nomes"
                                value={data.conhecidos_nomes}
                                placeholder="Pessoas que trabalham na empresa e lhe conhece bem"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="Outras Informações">
                    <div className="flex-grow w-full">
                        <FloatingLabel
                            forInput="auto_descricao_personalidade"
                            value="Faça uma descrição da sua personalidade"
                        >
                            <TextAreaForFloatingLabel
                                type="textarea"
                                id="auto_descricao_personalidade"
                                name="auto_descricao_personalidade"
                                value={data.auto_descricao_personalidade}
                                placeholder="Faça uma descrição da sua personalidade"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow w-full">
                        <FloatingLabel
                            forInput="porque_trabalhar_aqui"
                            value="Por que você gostaria de trabalhar nesta empresa?"
                        >
                            <TextAreaForFloatingLabel
                                type="textarea"
                                id="porque_trabalhar_aqui"
                                name="porque_trabalhar_aqui"
                                value={data.porque_trabalhar_aqui}
                                placeholder="Por que você gostaria de trabalhar nesta empresa?"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow w-full">
                        <FloatingLabel
                            forInput="outras_informacoes"
                            value="Outras informações a seu respeito que você gostaria que soubessemos."
                        >
                            <TextAreaForFloatingLabel
                                type="textarea"
                                id="outras_informacoes"
                                name="outras_informacoes"
                                value={data.outras_informacoes}
                                placeholder="Outras informações a seu respeito que você gostaria que soubessemos."
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>
                <FormSection value="Redes Sociais">
                    <div className="flex-grow w-full text-gray-500 text-center text-sm mb-2">
                        Informe os endereços dos seus perfis nas redes sociais que você participar.
                    </div>
                    <div className="w-full flex-grow flex flex-col flex-wrap gap-2 md:max-h-48 ">
                        <div className="md:flex-grow">
                            <FloatingLabel
                                forInput="facebook_url"
                                value="Facebook (ex: https://www.facebook.com/seuid)"
                            >
                                <InputForFloatingLabel
                                    type="url"
                                    id="facebook_url"
                                    name="facebook_url"
                                    value={data.facebook_url}
                                    placeholder="Facebook"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                        <div className="md:flex-grow">
                            <FloatingLabel
                                forInput="instagram_url"
                                value="Instagram (ex: https://www.instagram.com/seuid)"
                            >
                                <InputForFloatingLabel
                                    type="url"
                                    id="instagram_url"
                                    name="instagram_url"
                                    value={data.instagram_url}
                                    placeholder="Instagram"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                        <div className="md:flex-grow">
                            <FloatingLabel
                                forInput="twitter_url"
                                value="Twitter (ex: https://twitter.com/seuid)"
                            >
                                <InputForFloatingLabel
                                    type="url"
                                    id="twitter_url"
                                    name="twitter_url"
                                    value={data.twitter_url}
                                    placeholder="Twitter"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                        <div className="md:flex-grow">
                            <FloatingLabel
                                forInput="linkedin_url"
                                value="LinkedIn (ex: https://www.linkedin.com/in/seuid)"
                            >
                                <InputForFloatingLabel
                                    type="url"
                                    id="linkedin_url"
                                    name="linkedin_url"
                                    value={data.linkedin_url}
                                    placeholder="LinkedIn"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                        <div className="md:flex-grow">
                            <FloatingLabel forInput="github_url" value="GitHub (ex: https://github.com/seuid)">
                                <InputForFloatingLabel
                                    type="url"
                                    id="github_url"
                                    name="github_url"
                                    value={data.github_url}
                                    placeholder="GitHub"
                                    handleChange={onHandleChange}
                                />
                            </FloatingLabel>
                        </div>
                    </div>
                </FormSection>
                <FormSection value="Áreas de Interesse e Pretensão Salarial">
                    <div className="flex-grow md:m-5/12">
                        <FloatingLabel
                            forInput="areas_pretendidas"
                            value="Áreas pretendidas na empresa"
                        >
                            <InputForFloatingLabel
                                type="text"
                                id="areas_pretendidas"
                                name="areas_pretendidas"
                                value={data.areas_pretendidas}
                                placeholder="Áreas pretendidas na empresa"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                    <div className="flex-grow md:m-5/12">
                        <FloatingLabel
                            forInput="pretensao_salarial"
                            value="Pretensão Salarial (R$)"
                        >
                            <InputForFloatingLabel
                                type="number"
                                id="pretensao_salarial"
                                name="pretensao_salarial"
                                value={data.pretensao_salarial}
                                min="1000"
                                max="20000"
                                step="100"
                                placeholder="Pretensão Salarial (R$)"
                                handleChange={onHandleChange}
                            />
                        </FloatingLabel>
                    </div>
                </FormSection>

                <div className="w-full flex items-center md:justify-end md:p-6 mt-4">
                    <Button
                        className="w-full md:w-auto justify-center"
                        processing={processing}
                    >
                        {data.id ? 'Atualizar' : 'Salvar'}
                    </Button>
                </div>
            </form>
        </Authenticated>
    );
}
