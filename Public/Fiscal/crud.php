<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';

$mensagem = "";

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
    $mensagem = 'Cadastro realizado com sucesso!';
}
$fiscals = $fiscalController->listarFiscals();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <link rel="stylesheet" href="../../Resources/Css/msgcadastro.css">
    <title>Gerenciamento Fiscal</title>
</head>
<body>
    <a class="home" href="index.php">Home</a>

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