<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';

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
}

// Atualiza conta
if (isset($_POST['id_conta']) && isset($_POST['fornecedores_atualizar']) && isset($_POST['salarios_benef_atualizar']) &&isset($_POST['aluguel_atualizar']) &&isset($_POST['contas_publicas_atualizar']) &&isset($_POST['impostos_atualizar']) &&isset($_POST['emprestimos_atualizar']) &&isset($_POST['manutencao_atualizar']) &&isset($_POST['seguros_atualizar']) &&isset($_POST['marketing_atualizar']) &&isset($_POST['despesas_adm_atualizar']) &&isset($_POST['logistica_atualizar']) &&isset($_POST['pesquisa_atualizar']) &&isset($_POST['garantia_atualizar'])) 
{
    $contasController->atualizarConta($_POST['id_conta'], $_POST['fornecedores_atualizar'], $_POST['salarios_benef_atualizar'], $_POST['aluguel_atualizar'], $_POST['contas_publicas_atualizar'], $_POST['impostos_atualizar'], $_POST['emprestimos_atualizar'], $_POST['manutencao_atualizar'], $_POST['seguros_atualizar'], $_POST['marketing_atualizar'], $_POST['despesas_adm_atualizar'], $_POST['logistica_atualizar'], $_POST['pesquisa_atualizar'], $_POST['garantia_atualizar']);
}

// Excluir conta
if (isset($_POST['excluir_id_conta'])) {
    $contasController->excluirconta($_POST['excluir_id_conta']);
}

$contas = $contasController->listarcontas();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <title>Gerenciamento de Contas</title>
</head>
<body>
    <a href="../pg.php">Home</a>
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