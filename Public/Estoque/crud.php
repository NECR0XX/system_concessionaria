<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/EstoqueController.php';

$estoqueController = new EstoqueController($pdo);

if (isset($_FILES['imagem']) && !empty($_FILES['imagem'])) {
    $imagem = "../../Resources/Assets/Uploads/" . $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
} else {
    $imagem = "";
}

if (isset($_POST['numero_referencia']) &&
    isset($_POST['categoria']) &&
    isset($_POST['quantidade']) &&
    isset($_POST['preco_unitario']) &&
    isset($_POST['fornecedor']) &&
    isset($_POST['localizacao']) &&
    isset($_POST['reabastecimento_minimo']) &&
    isset($_POST['validade']) &&
    isset($_POST['observacoes'])) 
{
    $estoqueController->criarEstoque($_POST['numero_referencia'], $_POST['categoria'], $_POST['quantidade'], $_POST['preco_unitario'], $_POST['fornecedor'], $_POST['localizacao'], $_POST['reabastecimento_minimo'], $_POST['validade'], $_POST['observacoes'], $imagem);
    header('Location: #');
}

// Atualiza Estoque
if (isset($_POST['id_estoque']) && isset($_POST['atualizar_numero_referencia']) && isset($_POST['atualizar_categoria']) && isset($_POST['atualizar_quantidade']) && isset($_POST['atualizar_preco_unitario']) && isset($_POST['atualizar_fornecedor']) && isset($_POST['atualizar_localizacao']) && isset($_POST['atualizar_reabastecimento_minimo']) && isset($_POST['atualizar_validade']) && isset($_POST['atualizar_observacoes']) && isset($_POST['atualizar_imagem'])) 
{
    $estoqueController->atualizarEstoque($_POST['id_estoque'], $_POST['atualizar_numero_referencia'], $_POST['atualizar_categoria'], $_POST['atualizar_quantidade'], $_POST['atualizar_preco_unitario'], $_POST['atualizar_fornecedor'], $_POST['atualizar_localizacao'], $_POST['atualizar_reabastecimento_minimo'], $_POST['atualizar_validade'], $_POST['atualizar_observacoes'], $_POST['atualizar_imagem']);
}

// Excluir Estoque
if (isset($_POST['excluir_id_estoque'])) {
    $estoqueController->excluirEstoque($_POST['excluir_id_estoque']);
}

$estoques = $estoqueController->listarEstoque();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <link rel="stylesheet" href="../../Resources/Css/ambientes.css">
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <div class="content-wrapper">
        <div class="content">
            <a class="a3" href="index.php">«</a>

    <h2>Controle do Estoque</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="number" name="numero_referencia" placeholder="Número de Referência" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <input type="number" name="preco_unitario" placeholder="Preço Unitário" required>
        <input type="text" name="fornecedor" placeholder="Fornecedor" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="number" name="reabastecimento_minimo" placeholder="Reabastecimento Mínimo" required>
        <input type="date" name="validade" placeholder="Validade" required>
        <textarea name="observacoes" placeholder="Observações" required></textarea>
        <input type="file" name="imagem" accept="image/*" placeholder="Imagem" required>
        <button type="submit">Adicionar Conta</button>
    </form>
</body>
</html>
