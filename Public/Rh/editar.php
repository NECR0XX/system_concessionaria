<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
    require_once 'parametros/uf.php';
    require_once 'parametros/controleRh.php';
    //include_once '../login-configs/verificacao.php';

    if (isset($_POST['id']) && 
    isset($_POST['atualizar_nome']) 
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
    
    $controleRhController->atualizarControleRh($_POST['id'], 
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
$id = $_GET['id'];
$UserRh = $controleRhController->listarRhPorID($id);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="atualizar_viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylereg.css">
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">-->
    <title>Document</title>
</head>
<body>
    <p class="logo">SCAR</p>

    <div class="container"> 
        <form method="post" class="form">
            <div class="form-row">
            <form method="post" class="form">
    <div class="form-row">
        <label>Nome Completo</label>
        <input value="<?php echo $UserRh['nome']; ?>" type="text" placeholder="Nome Completo" name="atualizar_nome">
    </div>
    <div class="form-row">
        <label>Email</label>
        <input value="<?php echo $UserRh['email']; ?>" type="email" placeholder="Email" name="atualizar_email">
    </div>
    <div class="form-row">
        <label>Senha</label>
        <input value="<?php echo $UserRh['senha']; ?>" type="text" placeholder="Senha" name="atualizar_senha">
    </div>
    
    <div class="form-row">
        <label>Endereço</label>
        <input value="<?php echo $UserRh['endereco']; ?>" type="text" placeholder="Endereço" name="atualizar_endereco">

        <label>Número</label>
        <input value="<?php echo $UserRh['numero']; ?>" type="number" placeholder="Número" name="atualizar_numero">

        <label>Complemento</label>
        <input value="<?php echo $UserRh['complemento']; ?>" type="text" placeholder="Complemento" name="atualizar_complemento">
    </div>
    
    <div class="form-row">
        <label>CEP</label>
        <input value="<?php echo $UserRh['cep']; ?>" type="text" placeholder="CEP" name="atualizar_cep">
    </div>
    
    <div class="form-row">
        <label>Bairro</label>
        <input value="<?php echo $UserRh['bairro']; ?>" type="text" placeholder="Bairro" name="atualizar_bairro">

        <label>Cidade</label>
        <input value="<?php echo $UserRh['cidade']; ?>" type="text" placeholder="Cidade" name="atualizar_cidade">

        <label>Telefone</label>
        <input value="<?php echo $UserRh['telefone']; ?>" type="text" placeholder="Telefone" name="atualizar_telefone">
    </div>
    
    <div class="form-row">
        <label>Celular</label>
        <input value="<?php echo $UserRh['celular']; ?>" type="text" placeholder="Celular" name="atualizar_celular">
    </div>
    
    <div class="form-row">
        <label>Nome do pai</label>
        <input value="<?php echo $UserRh['nome_pai']; ?>" type="text" placeholder="Nome do pai" name="atualizar_nome_pai">

        <label>Nome da Mãe</label>
        <input value="<?php echo $UserRh['nome_mae']; ?>" type="text" placeholder="Nome da Mãe" name="atualizar_nome_mae">

        <label>Naturalidade</label>
        <input value="<?php echo $UserRh['naturalidade']; ?>" type="text" placeholder="Naturalidade" name="atualizar_naturalidade">

        <label>UF</label>
        <select name="atualizar_uf">
            <option value="" disabled selected hidden>Selecione um UF</option>
            <?php
            foreach ($ufs as $sigla => $nome) {
                echo '<option value="' . $sigla . '">' . $sigla . '</option>';
            }
            ?>
        </select>
    </div>
    
    
<label>Estado Civil</label>
<select name="atualizar_estado_civil">
    <option value="" disabled selected hidden>Selecione o Estado Civil</option>
    <option value="Solteiro" <?php echo $UserRh['estado_civil'] === 'Solteiro' ? 'selected' : ''; ?>>Solteiro</option>
    <option value="Casado" <?php echo $UserRh['estado_civil'] === 'Casado' ? 'selected' : ''; ?>>Casado</option>
    <option value="Separado" <?php echo $UserRh['estado_civil'] === 'Separado' ? 'selected' : ''; ?>>Separado</option>
    <option value="Divorciado" <?php echo $UserRh['estado_civil'] === 'Divorciado' ? 'selected' : ''; ?>>Divorciado</option>
    <option value="Viúvo" <?php echo $UserRh['estado_civil'] === 'Viúvo' ? 'selected' : ''; ?>>Viúvo</option>
</select>

<label>Grau de Instrução</label>
<select name="atualizar_grau_instrucao">
    <option value="" disabled selected hidden>Selecione o Grau de Instrução</option>
    <option value="1 completo" <?php echo $UserRh['grau_instrucao'] === '1 completo' ? 'selected' : ''; ?>>Primeiro grau completo</option>
    <option value="1 incompleto" <?php echo $UserRh['grau_instrucao'] === '1 incompleto' ? 'selected' : ''; ?>>Primeiro grau incompleto</option>
    <option value="2" <?php echo $UserRh['grau_instrucao'] === '2' ? 'selected' : ''; ?>>Segundo grau</option>
    <option value="2 incompleto" <?php echo $UserRh['grau_instrucao'] === '2 incompleto' ? 'selected' : ''; ?>>Segundo grau incompleto</option>
    <option value="3" <?php echo $UserRh['grau_instrucao'] === '3' ? 'selected' : ''; ?>>Terceiro grau</option>
    <option value="3 incompleto" <?php echo $UserRh['grau_instrucao'] === '3 incompleto' ? 'selected' : ''; ?>>Terceiro grau incompleto</option>
</select>

<label>Endereço</label>
<input value="<?php echo $UserRh['endereco']; ?>" type="text" placeholder="Endereço" name="atualizar_endereco">

<label>Número</label>
<input value="<?php echo $UserRh['numero']; ?>" type="number" placeholder="Número" name="atualizar_numero">

<label>Complemento</label>
<input value="<?php echo $UserRh['complemento']; ?>" type="text" placeholder="Complemento" name="atualizar_complemento">

<label>CEP</label>
<input value="<?php echo $UserRh['cep']; ?>" type="text" placeholder="CEP" name="atualizar_cep">

<label>Bairro</label>
<input value="<?php echo $UserRh['bairro']; ?>" type="text" placeholder="Bairro" name="atualizar_bairro">

<label>Cidade</label>
<input value="<?php echo $UserRh['cidade']; ?>" type="text" placeholder="Cidade" name="atualizar_cidade">

<label>Telefone</label>
<input value="<?php echo $UserRh['telefone']; ?>" type="text" placeholder="Telefone" name="atualizar_telefone">

<label>Celular</label>
<input value="<?php echo $UserRh['celular']; ?>" type="text" placeholder="Celular" name="atualizar_celular">

<label>Nome do Pai</label>
<input value="<?php echo $UserRh['nome_pai']; ?>" type="text" placeholder="Nome do Pai" name="atualizar_nome_pai">

<label>Nome da Mãe</label>
<input value="<?php echo $UserRh['nome_mae']; ?>" type="text" placeholder="Nome da Mãe" name="atualizar_nome_mae">

<label>Naturalidade</label>
<input value="<?php echo $UserRh['naturalidade']; ?>" type="text" placeholder="Naturalidade" name="atualizar_naturalidade">

<label>Data de Nascimento</label>
<input value="<?php echo $UserRh['data_nascimento']; ?>" type="date" placeholder="Data de Nascimento" name="atualizar_data_nascimento">

<label>Deficiente Físico</label>
<label>Sim</label>
<input value="sim" type="radio" name="atualizar_deficiente_fisico" <?php echo $UserRh['deficiente_fisico'] === 'sim' ? 'checked' : ''; ?>>
<label>Não</label>
<input value="nao" type="radio" name="atualizar_deficiente_fisico" <?php echo $UserRh['deficiente_fisico'] === 'nao' ? 'checked' : ''; ?>>

<label>Raça/Cor</label>
<select name="atualizar_raca_cor">
    <option value="" disabled selected hidden>Selecione a raça/cor</option>
    <option value="branco" <?php echo $UserRh['raca_cor'] === 'branco' ? 'selected' : ''; ?>>Branco</option>
    <option value="preto" <?php echo $UserRh['raca_cor'] === 'preto' ? 'selected' : ''; ?>>Preto</option>
    <option value="pardo" <?php echo $UserRh['raca_cor'] === 'pardo' ? 'selected' : ''; ?>>Pardo</option>
    <option value="amarelo" <?php echo $UserRh['raca_cor'] === 'amarelo' ? 'selected' : ''; ?>>Amarelo</option>
    <option value="vermelho" <?php echo $UserRh['raca_cor'] === 'vermelho' ? 'selected' : ''; ?>>Vermelho</option>
</select>

<label>Sexo</label>
<select name="atualizar_sexo">
    <option value="" disabled selected hidden>Selecione o sexo</option>
    <option value="masculino" <?php echo $UserRh['sexo'] === 'masculino' ? 'selected' : ''; ?>>Masculino</option>
    <option value="feminino" <?php echo $UserRh['sexo'] === 'feminino' ? 'selected' : ''; ?>>Feminino</option>
</select>

<label>Estado Civil</label>
<select name="atualizar_estado_civil">
    <option value="" disabled selected hidden>Selecione o Estado Civil</option>
    <option value="Solteiro" <?php echo $UserRh['estado_civil'] === 'Solteiro' ? 'selected' : ''; ?>>Solteiro</option>
    <option value="Casado" <?php echo $UserRh['estado_civil'] === 'Casado' ? 'selected' : ''; ?>>Casado</option>
    <option value="Separado" <?php echo $UserRh['estado_civil'] === 'Separado' ? 'selected' : ''; ?>>Separado</option>
    <option value="Divorciado" <?php echo $UserRh['estado_civil'] === 'Divorciado' ? 'selected' : ''; ?>>Divorciado</option>
    <option value="Viúvo" <?php echo $UserRh['estado_civil'] === 'Viúvo' ? 'selected' : ''; ?>>Viúvo</option>
</select>

<label>Grau de Instrução</label>
<select name="atualizar_grau_instrucao">
    <option value="" disabled selected hidden>Selecione o Grau de Instrução</option>
    <option value="1 completo" <?php echo $UserRh['grau_instrucao'] === '1 completo' ? 'selected' : ''; ?>>Primeiro grau completo</option>
    <option value="1 incompleto" <?php echo $UserRh['grau_instrucao'] === '1 incompleto' ? 'selected' : ''; ?>>Primeiro grau incompleto</option>
    <option value="2" <?php echo $UserRh['grau_instrucao'] === '2' ? 'selected' : ''; ?>>Segundo grau</option>
    <option value="2 incompleto" <?php echo $UserRh['grau_instrucao'] === '2 incompleto' ? 'selected' : ''; ?>>Segundo grau incompleto</option>
    <option value="3" <?php echo $UserRh['grau_instrucao'] === '3' ? 'selected' : ''; ?>>Terceiro grau</option>
    <option value="3 incompleto" <?php echo $UserRh['grau_instrucao'] === '3 incompleto' ? 'selected' : ''; ?>>Terceiro grau incompleto</option>
</select>

<label>Numero CTPS</label>
<input value="<?php echo $UserRh['numero_ctps']; ?>" type="text" placeholder="Numero CTPS" name="atualizar_numero_ctps">

<label>Serie</label>
<input value="<?php echo $UserRh['serie']; ?>" type="number" placeholder="Serie" name="atualizar_serie">

<label>UF</label>
<select name="atualizar_uf_rh">
    <option value="" disabled selected hidden>Selecione um UF</option>
    <?php
        foreach ($ufs as $sigla => $nome) {
            $selected = $UserRh['uf_rh'] === $sigla ? 'selected' : '';
            echo '<option value="' . $sigla . '" ' . $selected . '>' . $sigla . '</option>';
        }
    ?>
</select>

<label>Data de Expedição do CTPS</label>
<input value="<?php echo $UserRh['data_expedicao_ctps']; ?>" type="date" name="atualizar_data_expedicao_ctps">

<label>PIS</label>
<input value="<?php echo $UserRh['pis']; ?>" type="text" placeholder="PIS" name="atualizar_pis">

<label>Data de Cadastro do PIS</label>
<input value="<?php echo $UserRh['data_cadastro_pis']; ?>" type="date" name="atualizar_data_cadastro_pis">

<label>RG</label>
<input value="<?php echo $UserRh['rg_rh']; ?>" type="text" placeholder="RG" name="atualizar_rg_rh">

<label>Data de Expedição do RG</label>
<input value="<?php echo $UserRh['data_expedicao_rg']; ?>" type="date" name="atualizar_data_expedicao_rg">

<label>CPF</label>
<input value="<?php echo $UserRh['cpf_rh']; ?>" type="text" placeholder="CPF" name="atualizar_cpf_rh">

<label>Título de Eleitor</label>
<input value="<?php echo $UserRh['titulo_eleitor']; ?>" type="text" placeholder="Título de eleitor" name="atualizar_titulo_eleitor">

<label>Zona</label>
<input value="<?php echo $UserRh['zona']; ?>" type="number" placeholder="Zona" name="atualizar_zona">

<label>Seção</label>
<input value="<?php echo $UserRh['secao']; ?>" type="number" placeholder="Seção" name="atualizar_secao">

<label>Possui dependentes?</label>
<label>Sim</label>
<input value="<?php echo $UserRh['dependentes']; ?>" type="radio" name="atualizar_dependentes" value="sim">
<label>Não</label>
<input value="<?php echo $UserRh['dependentes']; ?>" type="radio" name="atualizar_dependentes" value="nao">

<label>Vale Transporte</label>
<label>Sim</label>
<input value="<?php echo $UserRh['vale_transporte']; ?>" type="radio" name="atualizar_vale_transporte" value="sim">
<label>Não</label>
<input value="<?php echo $UserRh['vale_transporte']; ?>" type="radio" name="atualizar_vale_transporte" value="nao">

<label>Horário de Trabalho</label>
<input value="<?php echo $UserRh['horario_trabalho']; ?>" type="number" placeholder="Horário de Trabalho" name="atualizar_horario_trabalho">

<label>Entrada</label>
<input value="<?php echo $UserRh['entrada']; ?>" type="time" name="atualizar_entrada">

<label>Intervalo</label>
<input value="<?php echo $UserRh['intervalo']; ?>" type="time" name="atualizar_intervalo">

<label>Saída</label>
<input value="<?php echo $UserRh['saida']; ?>" type="time" name="atualizar_saida">

<label>Cargo</label>
<input value="<?php echo $UserRh['cargo']; ?>" type="text" placeholder="Cargo" name="atualizar_cargo">

<label>Data de Admissão</label>
<input value="<?php echo $UserRh['data_admissao']; ?>" type="date" name="atualizar_data_admissao">

<label>Data do Exame Médico Admissional</label>
<input value="<?php echo $UserRh['data_exame_medico']; ?>" type="date" name="atualizar_data_exame_medico">

<label>Possui Experiência?</label>
<label>Sim</label>
<input value="<?php echo $UserRh['experiencia']; ?>" type="radio" name="atualizar_experiencia" value="sim">
<label>Não</label>
<input value="<?php echo $UserRh['experiencia']; ?>" type="radio" name="atualizar_experiencia" value="nao">
<input value="<?php echo $UserRh['experiencia']; ?>" type="text" placeholder="Quanto tempo" name="atualizar_experiencia">

<label>Tipo de Usuário</label>
<label>Administrador</label>
<input value="<?php echo $UserRh['tipo']; ?>" type="radio" name="atualizar_tipo" value="1">
<label>Gerente</label>
<input value="<?php echo $UserRh['tipo']; ?>" type="radio" name="atualizar_tipo" value="2">
<label>Funcionário Comercial</label>
<input value="<?php echo $UserRh['tipo']; ?>" type="radio" name="atualizar_tipo" value="3">
<label>Estagiário</label>
<input value="<?php echo $UserRh['tipo']; ?>" type="radio" name="atualizar_tipo" value="4">
<label>Funcionário Comum</label>
<input value="<?php echo $UserRh['tipo']; ?>" type="radio" name="atualizar_tipo" value="5">

                <button type="submit">  Criar</button>
        </form>
    </div>
</body>
</html>
