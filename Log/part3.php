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

                <label>Numero CTPS</label>
                <input type="text" placeholder="Numero CTPS" name="numero_ctps">

                <label>serie</label>
                <input type="number" placeholder="serie" name="serie">

                <label>UF</label>
                <select name="uf_rh">
                <option value="" disabled selected hidden>Selecione um UF</option>
                    <?php
                        foreach ($ufs as $sigla => $nome) {
                            echo '<option value="' . $sigla . '">' . $sigla . '</option>';
                        }
                    ?>
                </select>
       
                <label>Data de Expedição do CTPS</label>
                <input type="date" name="data_expedicao_ctps">

                <label>PIS</label>
                <input type="text" placeholder="PIS" name="pis">

                <label>Data de Cadastro do PIS</label>
                <input type="date" name="data_cadastro_pis">

                <label>RG</label>
                <input type="text" placeholder="RG" name="rg_rh">

                <label>Data de Expedição do RG</label>
                <input type="date" name="data_expedicao_rg">

                <label>CPF</label>
                <input type="text" placeholder="CPF" name="cpf_rh">

                <label>Título de Eleitor</label>
                <input type="text" placeholder="Título de eleitor" name="titulo_eleitor">

                <label>Zona</label>
                <input type="number" placeholder="Zona" name="zona">

                <label>Seção</label>
                <input type="number" placeholder="Seção" name="secao">

                <label>Possui dependentes?</label>
                <label>Sim</label>
                <input type="radio" name="dependentes" value="sim, ">
                <label>Não</label>
                <input type="radio" name="dependentes" value="nao, ">
                <input type="text" placeholder="Qual parentesco?" name="dependentes">
                <label> Data de Nascimento do Dependente</label>
                <input type="date" name="dependentes">

                 <button><a href="part4.php">prosseguir</a>
            </form>
                    </div>
    
</body>
</html>
