<?php
$enderecoController = new EnderecoController($pdo);

if (isset($_POST['endereco']) &&
    isset($_POST['numero']) &&
    isset($_POST['complemento']) &&
    isset($_POST['cep']) &&
    isset($_POST['bairro']) &&
    isset($_POST['cidade']) &&
    isset($_POST['telefone']) &&
    isset($_POST['celular'])) {
    
    $enderecoController->criarEndereco(
        $_POST['endereco'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['cep'],
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['telefone'],
        $_POST['celular']
    );
}
?>