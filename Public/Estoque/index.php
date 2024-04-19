<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/App/Controller/EstoqueController.php';

// Estoque
$estoqueController = new EstoqueController($pdo);

// Verifica se o formulário foi submetido para inserção de uma nova conta
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST['numero_referencia']) &&
        isset($_POST['categoria']) &&
        isset($_POST['quantidade']) &&
        isset($_POST['preco_unitario']) &&
        isset($_POST['fornecedor']) &&
        isset($_POST['localizacao']) &&
        isset($_POST['reabastecimento_minimo']) &&
        isset($_POST['validade']) &&
        isset($_POST['observacoes']) &&
        isset($_POST['imagem'])
    ) {
        $estoqueController->criarEstoque(
            $_POST['numero_referencia'],
            $_POST['categoria'],
            $_POST['quantidade'],
            $_POST['preco_unitario'],
            $_POST['fornecedor'],
            $_POST['localizacao'],
            $_POST['reabastecimento_minimo'],
            $_POST['validade'],
            $_POST['observacoes'],
            $_POST['imagem']
        );
    }

    // Atualização de um item no estoque
    if (
        isset($_POST['atualizar_id_estoque']) &&
        isset($_POST['atualizar_numero_referencia']) &&
        isset($_POST['atualizar_categoria']) &&
        isset($_POST['atualizar_quantidade']) &&
        isset($_POST['atualizar_preco_unitario']) &&
        isset($_POST['atualizar_fornecedor']) &&
        isset($_POST['atualizar_localizacao']) &&
        isset($_POST['atualizar_reabastecimento_minimo']) &&
        isset($_POST['atualizar_validade']) &&
        isset($_POST['atualizar_observacoes']) &&
        isset($_POST['atualizar_imagem'])
    ) {
        $estoqueController->atualizarEstoque(
            $_POST['atualizar_id_estoque'],
            $_POST['atualizar_numero_referencia'],
            $_POST['atualizar_categoria'],
            $_POST['atualizar_quantidade'],
            $_POST['atualizar_preco_unitario'],
            $_POST['atualizar_fornecedor'],
            $_POST['atualizar_localizacao'],
            $_POST['atualizar_reabastecimento_minimo'],
            $_POST['atualizar_validade'],
            $_POST['atualizar_observacoes'],
            $_POST['atualizar_imagem']
        );
    }

    // Exclusão de um item do estoque
    if (isset($_POST['excluir_id_estoque'])) {
        $estoqueController->excluirEstoque($_POST['excluir_id_estoque']);
    }
}

// Listagem dos itens em estoque
$estoques = $estoqueController->listarEstoque();
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <h1>ESTOQUES</h1>
    <form method="post">
        <!-- Estoque -->
        <input type="number" name="numero_referencia" placeholder="Número de Referência" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <input type="number" name="preco_unitario" placeholder="Preço Unitário" required>
        <input type="text" name="fornecedor" placeholder="Fornecedor" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="number" name="reabastecimento_minimo" placeholder="Reabastecimento Mínimo" required>
        <input type="date" name="validade" placeholder="Validade" required>
        <input type="text" name="observacoes" placeholder="Observações" required>
        <input type="file" name="imagem" placeholder="Imagem" required>
        <button type="submit">Adicionar Conta</button>
    </form>

    <!-- Exibir Estoque -->
    <fieldset>
        <legend><h2>Lista de Estoque</h2></legend>
        <ul>
            <?php foreach ($estoques as $estoque): ?>
                <li>ID: <?php echo $estoque['id_estoque']; ?> - Número de Referência: <?php echo $estoque['numero_referencia']; ?> - Categoria: <?php echo $estoque['categoria']; ?> - Quantidade: <?php echo $estoque['quantidade']; ?> - Preço Unitário: <?php echo $estoque['preco_unitario']; ?> - Fornecedor: <?php echo $estoque['fornecedor']; ?> - Localização: <?php echo $estoque['localizacao']; ?> - Reabastecimento Mínimo: <?php echo $estoque['reabastecimento_minimo']; ?> - Validade: <?php echo $estoque['validade']; ?> - Observações: <?php echo $estoque['observacoes']; ?> - Imagem: <?php echo $estoque['imagem']; ?></li>
            <?php endforeach; ?>
        </ul>
    </fieldset>

    <!-- Atualizar Estoque -->
    <h2>Atualizar Estoque</h2>
    <form method="post">
        <select name="atualizar_id_estoque">
            <?php foreach ($estoques as $estoque): ?>
                <option value="<?php echo $estoque['id_estoque']; ?>"><?php echo $estoque['id_estoque']; ?></option>
            <?php endforeach; ?>
        </select>
        <input type="number" name="atualizar_numero_referencia" placeholder="Novo Número de Referência">
        <input type="text" name="atualizar_categoria" placeholder="Nova Categoria">
        <input type="number" name="atualizar_quantidade" placeholder="Nova Quantidade">
        <input type="number" name="atualizar_preco_unitario" placeholder="Novo Preço Unitário">
        <input type="text" name="atualizar_fornecedor" placeholder="Novo Fornecedor">
        <input type="text" name="atualizar_localizacao" placeholder="Nova Localização">
        <input type="number" name="atualizar_reabastecimento_minimo" placeholder="Novo Reabastecimento Mínimo">
        <input type="date" name="atualizar_validade" placeholder="Nova Validade">
        <input type="text" name="atualizar_observacoes" placeholder="Nova Observação">
        <input type="file" name="atualizar_imagem" placeholder="Nova Imagem">
        <button type="submit">Atualizar Conta</button>
    </form>

    <!-- Excluir Estoque -->
    <h2>Excluir Estoque</h2>
    <form method="post">
        <select name="excluir_id_estoque">
            <?php foreach ($estoques as $estoque): ?>
                <option value="<?php echo $estoque['id_estoque']; ?>"><?php echo $estoque['id_estoque']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Conta</button>
    </form>
</body>
</html>
