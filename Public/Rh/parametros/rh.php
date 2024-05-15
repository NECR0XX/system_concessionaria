<?php
    $rhController = new RhController($pdo);

    if (isset($_POST['numero_ctps']) &&
        isset($_POST['serie']) &&
        isset($_POST['uf_rh']) &&
        isset($_POST['data_expedicao_ctps']) &&
        isset($_POST['pis']) &&
        isset($_POST['data_cadastro_pis']) &&
        isset($_POST['rg_rh']) &&
        isset($_POST['data_expedicao_rg']) &&
        isset($_POST['cpf_rh']) &&
        isset($_POST['titulo_eleitor']) &&
        isset($_POST['zona']) &&
        isset($_POST['secao']) &&
        isset($_POST['dependentes']) &&
        isset($_POST['vale_transporte']) &&
        isset($_POST['horario_trabalho']) &&
        isset($_POST['entrada']) &&
        isset($_POST['intervalo']) &&
        isset($_POST['saida']) &&
        isset($_POST['cargo']) &&
        isset($_POST['data_admissao']) &&
        isset($_POST['data_exame_medico']) &&
        isset($_POST['experiencia'])) {
        
        $rhController->criarRh(
            $_POST['numero_ctps'],
            $_POST['serie'],
            $_POST['uf_rh'],
            $_POST['data_expedicao_ctps'],
            $_POST['pis'],
            $_POST['data_cadastro_pis'],
            $_POST['rg_rh'],
            $_POST['data_expedicao_rg'],
            $_POST['cpf_rh'],
            $_POST['titulo_eleitor'],
            $_POST['zona'],
            $_POST['secao'],
            $_POST['dependentes'],
            $_POST['vale_transporte'],
            $_POST['horario_trabalho'],
            $_POST['entrada'],
            $_POST['intervalo'],
            $_POST['saida'],
            $_POST['cargo'],
            $_POST['data_admissao'],
            $_POST['data_exame_medico'],
            $_POST['experiencia']
        );
    }

    if (!empty($_POST)) {
        $rhController = new RhController($pdo);

        $rhController->criarRh(
            $_POST['numero_ctps'],
            $_POST['serie'],
            $_POST['uf_rh'],
            $_POST['data_expedicao_ctps'],
            $_POST['pis'],
            $_POST['data_cadastro_pis'],
            $_POST['rg_rh'],
            $_POST['data_expedicao_rg'],
            $_POST['cpf_rh'],
            $_POST['titulo_eleitor'],
            $_POST['zona'],
            $_POST['secao'],
            $_POST['dependentes'],
            $_POST['vale_transporte'],
            $_POST['horario_trabalho'],
            $_POST['entrada'],
            $_POST['intervalo'],
            $_POST['saida'],
            $_POST['cargo'],
            $_POST['data_admissao'],
            $_POST['data_exame_medico'],
            $_POST['experiencia']
        );
    }
?>