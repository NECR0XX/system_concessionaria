<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Inserção de Itens em Estoque</title>
</head>
<body>

    <fieldset>
        <legend><h1>Formulário de Inserção de Itens em Estoque</h1></legend>
        <form action="processar_insercao.php" method="POST">
            <label for="numero_referencia">Número de Referência:</label><br>
            <input type="text" id="numero_referencia" name="numero_referencia"><br>

            <label for="categoria">Categoria:</label><br>
            <input type="text" id="categoria" name="categoria"><br>

            <label for="quantidade">Quantidade:</label><br>
            <input type="number" id="quantidade" name="quantidade"><br>

            <label for="preco_unitario">Preço Unitário:</label><br>
            <input type="text" id="preco_unitario" name="preco_unitario"><br>

            <label for="fornecedor">Fornecedor:</label><br>
            <input type="text" id="fornecedor" name="fornecedor"><br>

            <label for="localizacao">Localização:</label><br>
            <input type="text" id="localizacao" name="localizacao"><br>

            <label for="reabastecimento_minimo">Reabastecimento Mínimo:</label><br>
            <input type="number" id="reabastecimento_minimo" name="reabastecimento_minimo"><br>

            <label for="validade">Validade:</label><br>
            <input type="date" id="validade" name="validade"><br>

            <label for="observacoes">Observações:</label><br>
            <textarea id="observacoes" name="observacoes"></textarea><br>

            <label for="imagem">Imagem:</label><br>
            <input type="file" id="imagem" name="imagem"><br>

            <input type="submit" value="Enviar">
        </form>
    </fieldset>
</body>
</html>
