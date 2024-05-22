<?php
session_start();
require_once '../../login-configs/filtros.php';
require_once '../../Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
$controleRhModel = new controleRhModel($pdo);
$controles = $controleRhModel->listarControleRhs();
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
    <title>SCAR - Home</title>
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
            <?php $filtrosNav = FiltroNav(); ?>

            </ul>
        </div>

    </nav>
    </aside>
    <div class="content-wrapper">
        <div class="content">
            <a href="../pg.php">Home</a>
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
                <td><a href="#" onclick="confirmDelete(<?php echo $controlerh['id']; ?>)">Deletar</a></td>
                <td><?php echo '<a href="editar.php?id=' . $controlerh['id'] . '">'?>Editar</a></td>
            </tr>
        </table>
    <?php endforeach; ?>
    </div>
    </div>
    <div id="myModal" class="modal">
    <div class="modal-content">
        <p>Tem certeza que deseja excluir o item?</p>
        <div class="op">
        <button class="confirm" id="confirmDeleteBtn">Sim</button>
        <button class="close" onclick="closeModal()">Cancelar</button></div>
    </div>
</div>
<script>
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    function confirmDelete(id) {
        openModal();
        document.getElementById("confirmDeleteBtn").onclick = function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "deletar.php?id=" + id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText == "success") {
                        window.location.href = "index.php";
                    } else {
                        alert("Falha ao excluir o usuário.");
                    }
                }
            };
            xhr.send();
        };
    }
</script>

</body>
</html>

