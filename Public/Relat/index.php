<?php
session_start();
require_once '../../Config/config.php';
require_once '../../login-configs/filtros.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylepg.css">
    <link rel="stylesheet" href="../../Resources/Css/styledelete.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>SCAR - Listagem de Frota</title>
</head>
<body>
<aside>
       <nav>
        <p class="logo">SCAR
    </p>
        
    <div class="search-container">
    <form action="" method="get">
        <input type="text" class="search-box" name="q" placeholder="">
        <img src="../../Resources/Assets/lupa.svg">
    </form>
</div>
    <div class="ambiente">
        <p>AMBIENTES</p>
    </div>
        <div>
            <ul>
            <?php $filtrosNav = FiltroNav(); ?>
            </ul>
        </div>

    </nav>
    </aside>
<a href="../pg.php">Home</a>

<section>
    <h1>Gerar relatórios</h1>
    <ul>
        <li>
            <a href="rh.php">Gerar relatório do controle de pessoas - RH</a>
        </li>
        <li>
            <a href="fiscal.php">Gerar relatório do controle fiscal</a>
        </li>
        <li>
            <a href="frota.php">Gerar relatório de frota de veículos</a>
        </li>
        <li>
            <a href="despesas.php">Gerar relatório das despesas</a>
        </li>
        <li>
            <a href="comercial.php">Gerar relatório do comercial</a>
        </li>
        <li>
            <a href="relatorio.php">Gerar relatório geral</a>
        </li>
    </ul>
</section>
</body>
</html>