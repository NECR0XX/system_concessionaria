<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/EstoqueController.php';

$mensagem = "";

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
    $mensagem = 'Cadastro realizado com sucesso!';
}
$estoques = $estoqueController->listarEstoque();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <link rel="stylesheet" href="../../Resources/Css/msgcadastro.css">
    <title>CRUD com MVC e PDO</title>
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
