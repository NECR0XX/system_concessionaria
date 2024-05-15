<?php

$controleRhController = new controleRhController($pdo);

if (isset($_GET['id']) 
    && isset($_POST['atualizar_nome']) 
    && isset($_POST['atualizar_email']) 
    && isset($_POST['atualizar_senha']) 
    && isset($_POST['atualizar_tipo']) 
    && isset($_POST['atualizar_nome_pai']) 
    && isset($_POST['atualizar_nome_mae']) 
    && isset($_POST['atualizar_naturalidade']) 
    && isset($_POST['atualizar_uf']) 
    && isset($_POST['atualizar_data_nascimento']) 
    && isset($_POST['atualizar_deficiente_fisico']) 
    && isset($_POST['atualizar_raca_cor']) 
    && isset($_POST['atualizar_sexo']) 
    && isset($_POST['atualizar_estado_civil']) 
    && isset($_POST['atualizar_grau_instrucao']) 
    && isset($_POST['atualizar_endereco']) 
    && isset($_POST['atualizar_numero']) 
    && isset($_POST['atualizar_complemento']) 
    && isset($_POST['atualizar_cep']) 
    && isset($_POST['atualizar_bairro']) 
    && isset($_POST['atualizar_cidade']) 
    && isset($_POST['atualizar_telefone']) 
    && isset($_POST['atualizar_celular']) 
    && isset($_POST['atualizar_numero_ctps']) 
    && isset($_POST['atualizar_serie']) 
    && isset($_POST['atualizar_uf_rh']) 
    && isset($_POST['atualizar_data_expedicao_ctps']) 
    && isset($_POST['atualizar_pis']) 
    && isset($_POST['atualizar_data_cadastro_pis']) 
    && isset($_POST['atualizar_rg_rh']) 
    && isset($_POST['atualizar_data_expedicao_rg']) 
    && isset($_POST['atualizar_cpf_rh']) 
    && isset($_POST['atualizar_titulo_eleitor']) 
    && isset($_POST['atualizar_zona']) 
    && isset($_POST['atualizar_secao']) 
    && isset($_POST['atualizar_dependentes']) 
    && isset($_POST['atualizar_vale_transporte']) 
    && isset($_POST['atualizar_horario_trabalho']) 
    && isset($_POST['atualizar_entrada']) 
    && isset($_POST['atualizar_intervalo']) 
    && isset($_POST['atualizar_saida']) 
    && isset($_POST['atualizar_cargo']) 
    && isset($_POST['atualizar_data_admissao']) 
    && isset($_POST['atualizar_data_exame_medico']) 
    && isset($_POST['atualizar_experiencia'])) {
    
        $controleRhController->atualizarControleRh(
        $_GET['id'], 
        $_POST['atualizar_nome'], 
        $_POST['atualizar_email'], 
        $_POST['atualizar_senha'], 
        $_POST['atualizar_tipo'], 
        $_POST['atualizar_nome_pai'], 
        $_POST['atualizar_nome_mae'], 
        $_POST['atualizar_naturalidade'], 
        $_POST['atualizar_uf'], 
        $_POST['atualizar_data_nascimento'], 
        $_POST['atualizar_deficiente_fisico'], 
        $_POST['atualizar_raca_cor'], 
        $_POST['atualizar_sexo'], 
        $_POST['atualizar_estado_civil'], 
        $_POST['atualizar_grau_instrucao'], 
        $_POST['atualizar_endereco'], 
        $_POST['atualizar_numero'], 
        $_POST['atualizar_complemento'], 
        $_POST['atualizar_cep'], 
        $_POST['atualizar_bairro'], 
        $_POST['atualizar_cidade'], 
        $_POST['atualizar_telefone'], 
        $_POST['atualizar_celular'], 
        $_POST['atualizar_numero_ctps'], 
        $_POST['atualizar_serie'], 
        $_POST['atualizar_uf_rh'], 
        $_POST['atualizar_data_expedicao_ctps'], 
        $_POST['atualizar_pis'], 
        $_POST['atualizar_data_cadastro_pis'], 
        $_POST['atualizar_rg_rh'], 
        $_POST['atualizar_data_expedicao_rg'], 
        $_POST['atualizar_cpf_rh'], 
        $_POST['atualizar_titulo_eleitor'], 
        $_POST['atualizar_zona'], 
        $_POST['atualizar_secao'], 
        $_POST['atualizar_dependentes'], 
        $_POST['atualizar_vale_transporte'], 
        $_POST['atualizar_horario_trabalho'], 
        $_POST['atualizar_entrada'], 
        $_POST['atualizar_intervalo'], 
        $_POST['atualizar_saida'], 
        $_POST['atualizar_cargo'], 
        $_POST['atualizar_data_admissao'], 
        $_POST['atualizar_data_exame_medico'], 
        $_POST['atualizar_experiencia']
        );
        
        
    }