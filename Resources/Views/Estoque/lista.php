<!DOCTYPE html>
<html>
<head>
    <title>Lista de Itens em Estoque</title>
</head>
<body>

    <fieldset>
        <legend><h1>Lista de Itens em Estoque</h1></legend>
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
                    </tr>
                </thead>
                <?php foreach ($estoques as $estoque): ?>
                    <tbody>
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
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
</body>
</html>
