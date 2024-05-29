<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';

$mensagem = "";

$contasController = new contasController($pdo);

if (isset($_POST['fornecedores']) && 
    isset($_POST['salarios_benef']) &&
    isset($_POST['aluguel']) &&
    isset($_POST['contas_publicas']) &&
    isset($_POST['impostos']) &&
    isset($_POST['emprestimos']) &&
    isset($_POST['manutencao']) &&
    isset($_POST['seguros']) &&
    isset($_POST['marketing']) &&
    isset($_POST['despesas_adm']) &&
    isset($_POST['logistica']) &&
    isset($_POST['pesquisa']) &&
    isset($_POST['garantia'])) 
{
    $contasController->criarConta($_POST['fornecedores'], $_POST['salarios_benef'], $_POST['aluguel'], $_POST['contas_publicas'], $_POST['impostos'], $_POST['emprestimos'], $_POST['manutencao'], $_POST['seguros'], $_POST['marketing'], $_POST['despesas_adm'], $_POST['logistica'], $_POST['pesquisa'], $_POST['garantia']);
    $mensagem = 'Cadastro realizado com sucesso!';
}
$contas = $contasController->listarcontas();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <link rel="stylesheet" href="../../Resources/Css/msgcadastro.css">
    <link rel="stylesheet" href="../../Resources/Css/stylereg.css">
    <title>Gerenciamento de Contas</title>
</head>
<body>
<div class="content-wrapper">
        <div class="content">
            <a class="a3" href="index.php">«</a>

    <?php if ($mensagem): ?>
        <div id="modal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="document.getElementById('modal').style.display='none'">&times;</span>
                <p><?= $mensagem ?></p>
            </div>
        </div>
        <script>
            document.getElementById('modal').style.display = 'block';
        </script>
    <?php endif; ?>
    
    <h2>Controle de Contas</h2>
    <form method="post">
        <input type="number" name="fornecedores" placeholder="Fornecedores" required>
        <input type="number" name="salarios_benef" placeholder="Salários e Benefícios" required>
        <input type="number" name="aluguel" placeholder="Aluguel" required>
        <input type="number" name="contas_publicas" placeholder="Contas Públicas" required>
        <input type="number" name="impostos" placeholder="Impostos" required>
        <input type="number" name="emprestimos" placeholder="Empréstimos" required>
        <input type="number" name="manutencao" placeholder="Manutenção" required>
        <input type="number" name="seguros" placeholder="Seguros" required>
        <input type="number" name="marketing" placeholder="Marketing" required>
        <input type="number" name="despesas_adm" placeholder="Despesas Administrativas" required>
        <input type="number" name="logistica" placeholder="Logística" required>
        <input type="number" name="pesquisa" placeholder="Pesquisa" required>
        <input type="number" name="garantia" placeholder="Garantia" required>
        <button type="submit">Adicionar Conta</button>
    </form>
</body>
</html>