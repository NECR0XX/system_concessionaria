<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';

$fiscalController = new FiscalController($pdo);

if (isset($_POST['data']) &&
    isset($_POST['valor']) &&
    isset($_POST['tipo']) &&
    isset($_POST['cliente_fornecedor']) &&
    isset($_POST['nota_fiscal']) &&
    isset($_POST['imposto']) &&
    isset($_POST['metodo_pagamento']) &&
    isset($_POST['codigo_fiscal']) &&
    isset($_POST['contas_contabeis']) &&
    isset($_POST['localizacao']) &&
    isset($_POST['responsavel']) &&
    isset($_POST['status']) &&
    isset($_POST['observacoes'])) 
{
    $fiscalController->criarFiscal($_POST['data'], $_POST['valor'], $_POST['tipo'], $_POST['cliente_fornecedor'], $_POST['nota_fiscal'], $_POST['imposto'], $_POST['metodo_pagamento'], $_POST['codigo_fiscal'], $_POST['contas_contabeis'], $_POST['localizacao'], $_POST['responsavel'], $_POST['status'], $_POST['observacoes']);
}

// Atualiza fiscal
if (isset($_POST['id_fiscal_atualizar']) && isset($_POST['data_atualizar']) && isset($_POST['valor_atualizar']) && isset($_POST['tipo_atualizar']) && isset($_POST['cliente_fornecedor_atualizar']) && isset($_POST['nota_fiscal_atualizar']) && isset($_POST['imposto_atualizar']) && isset($_POST['metodo_pagamento_atualizar']) && isset($_POST['codigo_fiscal_atualizar']) && isset($_POST['fiscal_contabeis_atualizar']) && isset($_POST['localizacao_atualizar']) && isset($_POST['responsavel_atualizar']) && isset($_POST['status_atualizar']) && isset($_POST['observacoes_atualizar'])) 
{
    $fiscalController->atualizarFiscal($_POST['id_fiscal_atualizar'], $_POST['data_atualizar'], $_POST['valor_atualizar'], $_POST['tipo_atualizar'], $_POST['cliente_fornecedor_atualizar'], $_POST['nota_fiscal_atualizar'], $_POST['imposto_atualizar'], $_POST['metodo_pagamento_atualizar'], $_POST['codigo_fiscal_atualizar'], $_POST['contas_contabeis_atualizar'], $_POST['localizacao_atualizar'], $_POST['responsavel_atualizar'], $_POST['status_atualizar'], $_POST['observacoes_atualizar']);
}

// Excluir fiscal
if (isset($_POST['excluir_id_fiscal'])) {
    $fiscalController->excluirFiscal($_POST['excluir_id_fiscal']);
}

$fiscals = $fiscalController->listarFiscals();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <title>Gerenciamento Fiscal</title>
</head>
<body>
    <a href="index.php">Home</a>
    <h2>Controle de Fiscal</h2>
    <form method="post">
        <input type="date" name="data" placeholder="Data" required>
        <input type="number" name="valor" placeholder="Valor" required>
        <select name="tipo" required>
            <option value="">Tipo...</option>
            <option value="Compra">Compra</option>
            <option value="Venda">Venda</option>
            <option value="Despesa">Despesa</option>
            <option value="Receita">Receita</option>
        </select>
        <input type="text" name="cliente_fornecedor" placeholder="Cliente/Fornecedor" required>
        <input type="number" name="nota_fiscal" placeholder="Nota Fiscal" required>
        <input type="number" name="imposto" placeholder="Imposto" required>
        <select name="metodo_pagamento" required>
            <option value="">Metódos de Pagamento</option>
            <option value="Dinheiro">Dinheiro</option>
            <option value="Pix">Pix</option>
            <option value="Boleto Bancário">Boleto Bancário</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cartão de Debito">Cartão de Debito</option>
        </select>
        <input type="number" name="codigo_fiscal" placeholder="Código Fiscal" required>
        <input type="number" name="contas_contabeis" placeholder="Contas Contábeis" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="text" name="responsavel" placeholder="Responsável" required>
        <select name="status" required>
            <option value="">Status...</option>
            <option value="1">Concluído</option>
            <option value="2">Pendente</option>
            <option value="3">Cancelada</option>
        </select>
        <textarea name="observacoes" placeholder="Observações" required></textarea>
        <button type="submit">Adicionar Conta</button>
    </form>
</body>
</html>