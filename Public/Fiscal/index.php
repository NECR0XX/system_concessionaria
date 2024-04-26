<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';

$fiscalController = new FiscalController($pdo);

if (isset($_POST['data']) &&
    isset($_POST['descricao']) &&
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
    $fiscalController->criarFiscal($_POST['data'], $_POST['descricao'], $_POST['valor'], $_POST['tipo'], $_POST['cliente_fornecedor'], $_POST['nota_fiscal'], $_POST['imposto'], $_POST['metodo_pagamento'], $_POST['codigo_fiscal'], $_POST['contas_contabeis'], $_POST['localizacao'], $_POST['responsavel'], $_POST['status'], $_POST['observacoes']);
}

// Atualiza fiscal
if (isset($_POST['id_fiscal_atualizar']) && isset($_POST['data_atualizar']) && isset($_POST['descricao_atualizar']) && isset($_POST['valor_atualizar']) && isset($_POST['tipo_atualizar']) && isset($_POST['cliente_fornecedor_atualizar']) && isset($_POST['nota_fiscal_atualizar']) && isset($_POST['imposto_atualizar']) && isset($_POST['metodo_pagamento_atualizar']) && isset($_POST['codigo_fiscal_atualizar']) && isset($_POST['fiscal_contabeis_atualizar']) && isset($_POST['localizacao_atualizar']) && isset($_POST['responsavel_atualizar']) && isset($_POST['status_atualizar']) && isset($_POST['observacoes_atualizar'])) 
{
    $fiscalController->atualizarFiscal($_POST['id_fiscal_atualizar'], $_POST['data_atualizar'], $_POST['descricao_atualizar'], $_POST['valor_atualizar'], $_POST['tipo_atualizar'], $_POST['cliente_fornecedor_atualizar'], $_POST['nota_fiscal_atualizar'], $_POST['imposto_atualizar'], $_POST['metodo_pagamento_atualizar'], $_POST['codigo_fiscal_atualizar'], $_POST['contas_contabeis_atualizar'], $_POST['localizacao_atualizar'], $_POST['responsavel_atualizar'], $_POST['status_atualizar'], $_POST['observacoes_atualizar']);
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
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <h1>Gerenciamento Fiscal</h1>
    <form method="post">
        <input type="date" name="data" placeholder="Data" required>
        <textarea name="descricao" cols="30" rows="5" placeholder="Descrição" required></textarea>
        <input type="number" name="valor" placeholder="Valor" required>
        <select name="tipo" required>
            <option value="">Tipo...</option>
            <option value="Compra">Compra</option>
            <option value="Venda">Venda</option>
            <option value="Despesa">Despesa</option>
            <option value="Receita">Receita</option>
        </select>
        <input type="text" name="cliente_fornecedor" placeholder="Cliente/Fornecedor" required>
        <input type="text" name="nota_fiscal" placeholder="Nota Fiscal" required>
        <input type="number" name="imposto" placeholder="Imposto" required>
        <select name="metodo_pagamento" required>
            <option value="">Metódos de Pagamento</option>
            <option value="Dinheiro">Dinheiro</option>
            <option value="Pix">Pix</option>
            <option value="Boleto Bancário">Boleto Bancário</option>
            <option value="Cartão de Crédito">Cartão de Crédito</option>
            <option value="Cartão de Debito">Cartão de Debito</option>
        </select>
        <input type="text" name="codigo_fiscal" placeholder="Código Fiscal" required>
        <input type="text" name="contas_contabeis" placeholder="Contas Contábeis" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="text" name="responsavel" placeholder="Responsável" required>
        <select name="status"required>
            <option value="">Status...</option>
            <option value="">Status...</option>
            <option value="">Status...</option>
            <option value="">Status...</option>
        </select>
        <input type="text" name="" placeholder="Status" required>
        <input type="text" name="observacoes" placeholder="Observações" required>
        <button type="submit">Adicionar Conta</button>
    </form>

    <fieldset>
        <legend><h2>Lista Fiscal</h2></legend>
            <ul>
            <?php foreach ($fiscals as $fiscal): ?>
                <li>ID: <?php echo $fiscal['id_fiscal']; ?> - Data: <?php echo $fiscal['data']; ?> - Descrição: <?php echo $fiscal['descricao']; ?> - Valor: <?php echo $fiscal['valor']; ?> - Tipo: <?php echo $fiscal['tipo']; ?> - Cliente/Fornecedor: <?php echo $fiscal['cliente_fornecedor']; ?> - Nota Fiscal: <?php echo $fiscal['nota_fiscal']; ?> - Imposto: <?php echo $fiscal['imposto']; ?> - Método de Pagamento: <?php echo $fiscal['metodo_pagamento']; ?> - Código Fiscal: <?php echo $fiscal['codigo_fiscal']; ?> - Contas Contábeis: <?php echo $fiscal['contas_contabeis']; ?> - Localização: <?php echo $fiscal['localizacao']; ?> - Responsável: <?php echo $fiscal['responsavel']; ?> - Status: <?php echo $fiscal['status']; ?> - Observações: <?php echo $fiscal['observacoes']; ?></li>
            <?php endforeach; ?>
            </ul>
    </fieldset>

<h2>Atualizar Fiscal</h2>
    <form method="post">
        <select name="id_fiscal">
        <?php foreach ($fiscals as $fiscal): ?>
            <option value="<?php echo $fiscal['id_fiscal']; ?>"><?php echo $fiscal['id_fiscal']; ?></option>
        <?php endforeach; ?>
        </select>
                <input type="date" name="data_atualizar" placeholder="Nova Data">
                <input type="text" name="descricao_atualizar" placeholder="Nova Descrição">
                <input type="number" name="valor_atualizar" placeholder="Novo Valor">
                <input type="text" name="tipo_atualizar" placeholder="Novo Tipo">
                <input type="text" name="cliente_fornecedor_atualizar" placeholder="Novo Cliente/Fornecedor">
                <input type="text" name="nota_fiscal_atualizar" placeholder="Nova Nota Fiscal">
                <input type="number" name="imposto_atualizar" placeholder="Novo Imposto">
                <input type="text" name="metodo_pagamento_atualizar" placeholder="Novo Método de Pagamento">
                <input type="text" name="codigo_fiscal_atualizar" placeholder="Novo Código Fiscal">
                <input type="text" name="contas_contabeis_atualizar" placeholder="Novas Contas Contábeis">
                <input type="text" name="localizacao_atualizar" placeholder="Nova Localização">
                <input type="text" name="responsavel_atualizar" placeholder="Novo Responsável">
                <input type="text" name="status_atualizar" placeholder="Novo Status">
                <input type="text" name="observacoes_atualizar" placeholder="Novas Observações">
                <button type="submit">Atualizar</button>
    </form>

    <h2>Excluir Fiscal</h2>
    <form method="post">
        <select name="excluir_id_fiscal">
            <?php foreach ($fiscals as $fiscal): ?>
                <option value="<?php echo $fiscal['id_fiscal']; ?>"><?php echo $fiscal['id_fiscal']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir</button>
    </form>
</body>
</html>
