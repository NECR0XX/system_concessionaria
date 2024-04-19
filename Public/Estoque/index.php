<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Config/config.php';
require_once '../../App/Controller/EstoqueController.php';

$estoqueController = new EstoqueController($pdo);

// Verifica se o formulário de inserção foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Inserção de um novo item no estoque
    if (isset($_POST['numero_referencia']) && isset($_POST['categoria']) && isset($_POST['quantidade']) && isset($_POST['preco_unitario']) && isset($_POST['fornecedor']) && isset($_POST['localizacao']) && isset($_POST['reabastecimento_minimo']) && isset($_POST['validade']) && isset($_POST['observacoes']) && isset($_POST['imagem'])) {
        $estoqueController->criarEstoque($_POST['numero_referencia'], $_POST['categoria'], $_POST['quantidade'], $_POST['preco_unitario'], $_POST['fornecedor'], $_POST['localizacao'], $_POST['reabastecimento_minimo'], $_POST['validade'], $_POST['observacoes'], $_POST['imagem']);
    }

    // Atualização de um item no estoque
    if (isset($_POST['atualizar_id_estoque']) && isset($_POST['atualizar_numero_referencia']) && isset($_POST['atualizar_categoria']) && isset($_POST['atualizar_quantidade']) && isset($_POST['atualizar_preco_unitario']) && isset($_POST['atualizar_fornecedor']) && isset($_POST['atualizar_localizacao']) && isset($_POST['atualizar_reabastecimento_minimo']) && isset($_POST['atualizar_validade']) && isset($_POST['atualizar_observacoes']) && isset($_POST['atualizar_imagem'])) {
        $estoqueController->atualizarEstoque($_POST['atualizar_id_estoque'], $_POST['atualizar_numero_referencia'], $_POST['atualizar_categoria'], $_POST['atualizar_quantidade'], $_POST['atualizar_preco_unitario'], $_POST['atualizar_fornecedor'], $_POST['atualizar_localizacao'], $_POST['atualizar_reabastecimento_minimo'], $_POST['atualizar_validade'], $_POST['atualizar_observacoes'], $_POST['atualizar_imagem']);
    }

    // Exclusão de um item do estoque
    if (isset($_POST['excluir_id_estoque'])) {
        $estoqueController->excluirEstoque($_POST['excluir_id_estoque']);
    }
}

// Listagem dos itens em estoque
$estoques = $estoqueController->listarEstoques();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Gerenciamento de Estoque</title>
</head>
<body>
    <h1>Gerenciamento de Estoque</h1>
    <form method="post">
        <h2>Inserir Item em Estoque</h2>
        <input type="text" name="numero_referencia" placeholder="Número de Referência" required>
        <input type="text" name="categoria" placeholder="Categoria" required>
        <input type="number" name="quantidade" placeholder="Quantidade" required>
        <input type="text" name="preco_unitario" placeholder="Preço Unitário" required>
        <input type="text" name="fornecedor" placeholder="Fornecedor" required>
        <input type="text" name="localizacao" placeholder="Localização" required>
        <input type="number" name="reabastecimento_minimo" placeholder="Reabastecimento Mínimo" required>
        <input type="date" name="validade" placeholder="Validade" required>
        <input type="text" name="observacoes" placeholder="Observações" required>
        <input type="file" name="imagem" placeholder="Imagem" required>
        <button type="submit">Adicionar Item</button>
    </form>

    <h2>Lista de Itens em Estoque</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Número de Referência</th>
                <th>Categoria</th>
                <th>Quantidade</th>
                <th>Preço Unitário</th>
                <th>Fornecedor</th>
                <th>Localização</th>
                <th>Reabastecimento Mínimo</th>
                <th>Validade</th>
                <th>Observações</th>
                <th>Imagem</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estoques as $estoque): ?>
                <tr>
                    <td><?php echo $estoque['id_estoque']; ?></td>
                    <td><?php echo $estoque['numero_referencia']; ?></td>
                    <td><?php echo $estoque['categoria']; ?></td>
                    <td><?php echo $estoque['quantidade']; ?></td>
                    <td><?php echo $estoque['preco_unitario']; ?></td>
                    <td><?php echo $estoque['fornecedor']; ?></td>
                    <td><?php echo $estoque['localizacao']; ?></td>
                    <td><?php echo $estoque['reabastecimento_minimo']; ?></td>
                    <td><?php echo $estoque['validade']; ?></td>
                    <td><?php echo $estoque['observacoes']; ?></td>
                    <td><?php echo $estoque['imagem']; ?></td>
                    <td>
                        <form method="post">
                            <input type="hidden" name="excluir_id_estoque" value="<?php echo $estoque['id_estoque']; ?>">
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
