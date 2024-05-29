<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/user.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/endereco.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/dados.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/Rh.php';

    require_once 'parametros/uf.php';
    require_once 'parametros/user.php';
    require_once 'parametros/endereco.php';
    require_once 'parametros/dados.php';
    require_once 'parametros/rh.php';

    require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylereg.css">
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">-->
    <title>Document</title>
</head>
<body>
<div class="content-wrapper">
        <div class="content">
            <a class="a3" href="index.php">«</a>

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
