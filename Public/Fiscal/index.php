<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';

$fiscalController = new FiscalController($pdo);
$fiscals = $fiscalController->listarFiscals();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../pg.php">Home</a>

<fieldset>
    <legend><h2>Lista Fiscal</h2></legend>
        <ul>
        <?php foreach ($fiscals as $fiscal): ?>
            <li><strong>ID:</strong> <?php echo $fiscal['id_fiscal']; ?> - <strong>Data:</strong> <?php echo $fiscal['data']; ?> - <strong>Descrição:</strong> <?php echo $fiscal['descricao']; ?> 
            - <strong>Valor:</strong> R$<?php echo $fiscal['valor']; ?> - <strong>Tipo:</strong> <?php echo $fiscal['tipo']; ?> - <strong>Cliente/Fornecedor:</strong> <?php echo $fiscal['cliente_fornecedor']; ?> 
            - <strong>Nota Fiscal:</strong> <?php echo $fiscal['nota_fiscal']; ?> - <strong>Imposto:</strong> R$<?php echo $fiscal['imposto']; ?> - <strong>Método de Pagamento:</strong> <?php echo $fiscal['metodo_pagamento']; ?> 
            - <strong>Código Fiscal:</strong> <?php echo $fiscal['codigo_fiscal']; ?> - <strong>Contas Contábeis:</strong> <?php echo $fiscal['contas_contabeis']; ?> - <strong>Localização:</strong> <?php echo $fiscal['localizacao']; ?> 
            - <strong>Responsável:</strong> <?php echo $fiscal['responsavel']; ?> - <strong>Status:</strong> <?php echo $fiscal['status']; ?> - <strong>Observações:</strong> <?php echo $fiscal['observacoes']; ?>
            - <?php echo "<a href='../../App/Providers/atualizarfiscal.php?id={$fiscal['id_fiscal']}'>Atualizar</a>" ?></li>
        <?php endforeach; ?>
        </ul>
</fieldset>


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