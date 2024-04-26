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

<form method="post">
            <label>Vale Transporte</label>
                <label>Sim</label>
                <input type="radio" name="vale_transporte" value="sim">
                <label>Não</label>
                <input type="radio" name="vale_transporte" value="nao">

                <label>Horario de Trabalho</label>
                <input type="number" placeholder="Horario de Trabalho" name="horario_trabalho">

                <label>Entrada</label>
                <input type="time" name="entrada">

                <label>intervalo</label>
                <input type="time" name="intervalo">

                <label>Saída</label>
                <input type="time" name="saida">

                <label>Cargo</label>
                <input type="text" placeholder="Cargo" name="cargo">

                <label>Data de admissão</label>
                <input type="date" name="data_admissao">

                <label>Data do Exame Médico Admissional</label>
                <input type="date" name="data_exame_medico">

                <label>Possui Experiência?</label>
                <label>Sim</label>
                <input type="radio" name="experiencia" value="sim, ">
                <label>Não</label>
                <input type="radio" name="experiencia" value="nao">
                <input type="text" placeholder="Quanto tempo" name="experiencia">
                
                <label>Tipo de Usuário</label>
                <label>Administrador</label>
                <input type="radio" name="tipo" value="1">
                <label>Gerente</label>
                <input type="radio" name="tipo" value="2">
                <label>Funcionário Comercial</label>
                <input type="radio" name="tipo" value="3">
                <label>Estagiário</label>
                <input type="radio" name="tipo" value="4">
                <label>Funcionário Comum</label>
                <input type="radio" name="tipo" value="5">

                <button type="submit">  Criar</button>
            </form>
</div>
    
    
</body>
</html>
