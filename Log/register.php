<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once '../config/config.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/controller/endereco.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/controller/dados.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/controller/rh.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/controller/user.php';

    require_once 'parametros/uf.php';
    require_once 'parametros/endereco.php';
    require_once 'parametros/dados.php';
    require_once 'parametros/rh.php';
    require_once 'parametros/user.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Resources/Css/stylereg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <p class="logo">SCAR</p>

    <div class="container"> 
        <form method="post" class="form">
            <div class="form-row">
                <label>Nome Completo</label>
                <input type="text" placeholder="Nome Completo" name="nome">
            </div>
            <div class="form-row">
                <label>Email</label>
                <input type="email" placeholder="Email" name="email">
            </div>
            <div class="form-row">
                <label>Senha</label>
                <input type="text" placeholder="Senha" name="senha">
            </div>
            <div class="form-row">
                <label>Endereço</label>
                <input type="text" placeholder="Endereço" name="endereco">

                <label>Número</label>
                <input type="number" placeholder="Número" name="numero">

                <label>Complemento</label>
                <input type="text" placeholder="Complemento" name="complemento">
            </div>
            <div class="form-row">
                <label>CEP</label>
                <input type="text" placeholder="CEP" name="cep">
            </div>
            <div class="form-row">
                <label>Bairro</label>
                <input type="text" placeholder="Bairro" name="bairro">

                <label>Cidade</label>
                <input type="text" placeholder="Cidade" name="cidade">

                <label>Telefone</label>
                <input type="text" placeholder="Telefone" name="telefone">
            </div>
            <div class="form-row">
                <label>Celular</label>
                <input type="text" placeholder="Celular" name="celular">
            </div>
            <button><a href="part2.php">prosseguir</a></button>
        </form>
    </div>
</body>
</html>
