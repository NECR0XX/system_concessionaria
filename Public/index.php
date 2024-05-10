<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
$controleRhModel = new controleRhModel($pdo);
$controles = $controleRhModel->listarControleRhs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
</head>
<body>
<aside>
       <nav>
        <p class="logo">SCAR
    </p>
        
    <div class="search-container">
    <form action="" method="get">
        <input type="text" class="search-box" name="q" placeholder="">
        <img src="../Resources/Assets/lupa.svg">
    </form>
</div>
    <div class="ambiente">
        <p>AMBIENTES</p>
    </div>
        <div>
            <ul>
            </ul>
        </div>

    </nav>
    </aside>
    <a href="register.php">Cadastrar</a>

    <?php foreach($controles as $controlerh): ?>
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Nome</td>
                <td>Email</td>
                <td>Senha</td>
                <td>Endereço</td>
                <td>Número</td>
                <td>Complemento</td>
                <td>CEP</td>
                <td>Bairro</td>
                <td>Cidade</td>
                <td>Telefone</td>
                <td>Celular</td>
                <td>Nome do Pai</td>
                <td>Nome da Mãe</td>
                <td>Naturalidade</td>
                <td>UF</td>
                <td>Data de Nascimento</td>
                <td>Deficiente Físico</td>
                <td>Raça/Cor</td>
                <td>Sexo</td>
                <td>Estado Civil</td>
                <td>Grau de Instrução</td>
                <td>Número CTPS</td>
                <td>Série CTPS</td>
                <td>UF CTPS</td>
                <td>Data de Expedição CTPS</td>
                <td>PIS</td>
                <td>Data de Cadastro do PIS</td>
                <td>RG</td>
                <td>Data de Expedição do RG</td>
                <td>CPF</td>
                <td>Título de Eleitor</td>
                <td>Zona Eleitoral</td>
                <td>Seção Eleitoral</td>
                <td>Dependentes</td>
                <td>Vale Transporte</td>
                <td>Horário de Trabalho</td>
                <td>Entrada</td>
                <td>Intervalo</td>
                <td>Saída</td>
                <td>Cargo</td>
                <td>Data de Admissão</td>
                <td>Data do Exame Médico</td>
                <td>Experiência</td>
                <td>Tipo</td>
                <td>#</td>
                <td>#</td>
            </tr>
            <tr>
                <td><?php echo $controlerh['id']; ?></td>
                <td><?php echo $controlerh['nome']; ?></td>
                <td><?php echo $controlerh['email']; ?></td>
                <td><?php echo $controlerh['senha']; ?></td>
                <td><?php echo $controlerh['endereco']; ?></td>
                <td><?php echo $controlerh['numero']; ?></td>
                <td><?php echo $controlerh['complemento']; ?></td>
                <td><?php echo $controlerh['cep']; ?></td>
                <td><?php echo $controlerh['bairro']; ?></td>
                <td><?php echo $controlerh['cidade']; ?></td>
                <td><?php echo $controlerh['telefone']; ?></td>
                <td><?php echo $controlerh['celular']; ?></td>
                <td><?php echo $controlerh['nome_pai']; ?></td>
                <td><?php echo $controlerh['nome_mae']; ?></td>
                <td><?php echo $controlerh['naturalidade']; ?></td>
                <td><?php echo $controlerh['uf']; ?></td>
                <td><?php echo $controlerh['data_nascimento']; ?></td>
                <td><?php echo $controlerh['deficiente_fisico']; ?></td>
                <td><?php echo $controlerh['raca_cor']; ?></td>
                <td><?php echo $controlerh['sexo']; ?></td>
                <td><?php echo $controlerh['estado_civil']; ?></td>
                <td><?php echo $controlerh['grau_instrucao']; ?></td>
                <td><?php echo $controlerh['numero_ctps']; ?></td>
                <td><?php echo $controlerh['serie']; ?></td>
                <td><?php echo $controlerh['uf_rh']; ?></td>
                <td><?php echo $controlerh['data_expedicao_ctps']; ?></td>
                <td><?php echo $controlerh['pis']; ?></td>
                <td><?php echo $controlerh['data_cadastro_pis']; ?></td>
                <td><?php echo $controlerh['rg_rh']; ?></td>
                <td><?php echo $controlerh['data_expedicao_rg']; ?></td>
                <td><?php echo $controlerh['cpf_rh']; ?></td>
                <td><?php echo $controlerh['titulo_eleitor']; ?></td>
                <td><?php echo $controlerh['zona']; ?></td>
                <td><?php echo $controlerh['secao']; ?></td>
                <td><?php echo $controlerh['dependentes']; ?></td>
                <td><?php echo $controlerh['vale_transporte']; ?></td>
                <td><?php echo $controlerh['horario_trabalho']; ?></td>
                <td><?php echo $controlerh['entrada']; ?></td>
                <td><?php echo $controlerh['intervalo']; ?></td>
                <td><?php echo $controlerh['saida']; ?></td>
                <td><?php echo $controlerh['cargo']; ?></td>
                <td><?php echo $controlerh['data_admissao']; ?></td>
                <td><?php echo $controlerh['data_exame_medico']; ?></td>
                <td><?php echo $controlerh['experiencia']; ?></td>
                <td><?php echo $controlerh['tipo']; ?></td>
                <td><?php echo '<a href="deletar.php?id=' . $controlerh['id'] . '">'?>Deletar</a></td>
                <td><?php echo '<a href="editar.php?id=' . $controlerh['id'] . '">'?>Editar</a></td>
            </tr>
        </table>
    <?php endforeach; ?>
</body>
</html>