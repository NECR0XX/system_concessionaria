<?php
$dadoUController = new DadoUController($pdo);

if (isset($_POST['nome_pai']) &&
    isset($_POST['nome_mae']) &&
    isset($_POST['naturalidade']) &&
    isset($_POST['uf']) &&
    isset($_POST['data_nascimento']) &&
    isset($_POST['deficiente_fisico']) &&
    isset($_POST['raca_cor']) &&
    isset($_POST['sexo']) &&
    isset($_POST['estado_civil']) &&
    isset($_POST['grau_instrucao'])) {
    
    $dadoUController->criarDado_U(
        $_POST['nome_pai'],
        $_POST['nome_mae'],
        $_POST['naturalidade'],
        $_POST['uf'],
        $_POST['data_nascimento'],
        $_POST['deficiente_fisico'],
        $_POST['raca_cor'],
        $_POST['sexo'],
        $_POST['estado_civil'],
        $_POST['grau_instrucao']
    );
}

?>