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
<a href="register.php"><img src="../Resources/Assets/seta2.png"></a>

    <div class="container"> 

            <form method="post">
                <label>Nome do pai</label>
                <input type="text" placeholder="Nome do pai" name="nome_pai">

                <label>Nome da Mãe</label>
                <input type="text" placeholder="Nome da Mãe" name="nome_mae">

                <label>Naturalidade</label>
                <input type="text" placeholder="Naturalidade" name="naturalidade">

                <label>UF</label>
                <select name="uf">
                <option value="" disabled selected hidden>Selecione um UF</option>
                    <?php
                        foreach ($ufs as $sigla => $nome) {
                            echo '<option value="' . $sigla . '">' . $sigla . '</option>';
                        }
                    ?>
                </select>

                <label>Data de Nascimento</label>
                <input type="date" placeholder="Data de Nascimento" name="data_nascimento">

                <label>Deficiente Físico</label>
                <label>Sim</label>
                <input type="radio" name="deficiente_fisico" value="sim">
                <label>Não</label>
                <input type="radio" name="deficiente_fisico" value="não">

                <label>Raça/Cor</label>
                <select name="raca_cor">
                <option value="" disabled selected hidden>Selecione a raça/cor</option>
                    <option value="branco">Branco</option>
                    <option value="preto">Preto</option>
                    <option value="pardo">Pardo</option>
                    <option value="amarelo">Amarelo</option>
                    <option value="vermelho">Vermelho</option>
                </select>

                <label>Sexo</label>
                <select name="sexo">
                <option value="" disabled selected hidden>Selecione o sexo</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>

                <label>Estado Civíl</label>
                <select name="estado_civil">
                <option value="" disabled selected hidden>Selecione o Estado Civíl</option>
                    <option value="Solteiro">Solteiro</option>
                    <option value="Casado">Casado</option>
                    <option value="Separado">Separado</option>
                    <option value="Divorciado">Divorciado</option>
                    <option value="Viúvo">Viúvo</option>
                </select>

                <label>Grau de Instrução</label>
                <select name="grau_instrucao">
                <option value="" disabled selected hidden>Selecione o Grau de Instrução</option>
                    <option value="1 completo">Primeiro grau</option>
                    <option value="1 incompleto">Primeiro grau incompleto</option>
                    <option value="2">Segundo grau</option>
                    <option value="2 incompleto">Segundo grau incompleto</option>
                    <option value="3">Terceiro grau</option>
                    <option value="3 incompleto">Terceiro grau incompleto</option>
                </select>
<button><a href="part3.php">prosseguir</a>

                    </form>

                    </div>
                    <a href="part3.php"><img src="../Resources/Assets/seta.png"></a>
</body>
</html>
