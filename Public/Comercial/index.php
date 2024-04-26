<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';

$comercialController = new ComercialController($pdo);

if (isset($_POST['nome_cliente']) && 
    isset($_POST['telefone_cliente']) &&
    isset($_POST['email_cliente']) &&
    isset($_POST['identificacao_cliente']) &&
    isset($_POST['marca_car']) &&
    isset($_POST['modelo_car']) &&
    isset($_POST['caracteristicas_car']) &&
    isset($_POST['preco_car']) &&
    isset($_POST['numero_chassi']) &&
    isset($_POST['data_venda']) &&
    isset($_POST['tipo_transacao']) &&
    isset($_POST['forma_paga']) &&
    isset($_POST['nota_fiscal']) &&
    isset($_POST['valor_total']) &&
    isset($_POST['canal_venda']) &&
    isset($_POST['vendedor']) &&
    isset($_POST['estado_transacao'])) 
{
    $comercialController->criarComercial($_POST['nome_cliente'], $_POST['telefone_cliente'], $_POST['email_cliente'], $_POST['identificacao_cliente'], $_POST['marca_car'], $_POST['modelo_car'], $_POST['caracteristicas_car'], $_POST['preco_car'], $_POST['numero_chassi'], $_POST['data_venda'], $_POST['tipo_transacao'], $_POST['forma_paga'], $_POST['nota_fiscal'], $_POST['valor_total'], $_POST['canal_venda'], $_POST['vendedor'], $_POST['estado_transacao']);
    header('Location: #');
}

// Atualiza Comercial
if (isset($_POST['id_comercial']) && isset($_POST['atualizar_nome_cliente']) && isset($_POST['atualizar_telefone_cliente']) && isset($_POST['atualizar_email_cliente']) && isset($_POST['atualizar_identificacao_cliente']) && isset($_POST['atualizar_marca_car']) && isset($_POST['atualizar_modelo_car']) && isset($_POST['atualizar_caracteristicas_car']) && isset($_POST['atualizar_preco_car']) && isset($_POST['atualizar_numero_chassi']) && isset($_POST['atualizar_data_venda']) && isset($_POST['atualizar_tipo_transacao']) && isset($_POST['atualizar_forma_paga']) && isset($_POST['atualizar_nota_fiscal']) && isset($_POST['atualizar_valor_total']) && isset($_POST['atualizar_canal_venda']) && isset($_POST['atualizar_vendedor']) && isset($_POST['atualizar_estado_transacao'])) {
    $comercialController->atualizarComercial($_POST['id_comercial'], $_POST['atualizar_nome_cliente'], $_POST['atualizar_telefone_cliente'], $_POST['atualizar_email_cliente'], $_POST['atualizar_identificacao_cliente'], $_POST['atualizar_marca_car'], $_POST['atualizar_modelo_car'], $_POST['atualizar_caracteristicas_car'], $_POST['atualizar_preco_car'], $_POST['atualizar_numero_chassi'], $_POST['atualizar_data_venda'], $_POST['atualizar_tipo_transacao'], $_POST['atualizar_forma_paga'], $_POST['atualizar_nota_fiscal'], $_POST['atualizar_valor_total'], $_POST['atualizar_canal_venda'], $_POST['atualizar_vendedor'], $_POST['atualizar_estado_transacao']);
}

// Excluir Comercial
if (isset($_POST['excluir_id_comercial'])) {
    $comercialController->excluirComercial($_POST['excluir_id_comercial']);
}

$comerciais = $comercialController->listarComercials();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Comercial</title>
</head>
<body>
    <h2>Controle de Comercial</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="nome_cliente" placeholder="Nome do Cliente" required>
        <input type="number" name="telefone_cliente" placeholder="Telefone do Cliente" required>
        <input type="email" name="email_cliente" placeholder="E-mail do Cliente" required>
        <input type="text" name="identificacao_cliente" placeholder="Identificação do Cliente" required>
        <input type="text" name="marca_car" placeholder="Marca do Carro" required>
        <input type="text" name="modelo_car" placeholder="Modelo do Carro" required>
        <input type="text" name="caracteristicas_car" placeholder="Características do Carro" required>
        <input type="number" name="preco_car" placeholder="Preço do Carro" required>
        <input type="text" name="numero_chassi" placeholder="Número do Chassi" required>
        <input type="date" name="data_venda" placeholder="Data da Venda" required>
        <input type="text" name="tipo_transacao" placeholder="Tipo de Transação" required>
        <input type="text" name="forma_paga" placeholder="Forma de Pagamento" required>
        <input type="text" name="nota_fiscal" placeholder="Nota Fiscal" required>
        <input type="number" name="valor_total" placeholder="Valor Total" required>
        <input type="text" name="canal_venda" placeholder="Canal de Venda" required>
        <input type="text" name="vendedor" placeholder="Vendedor" required>
        <select name="estado_transacao" required>
            <option value="">Estado da Transação...</option>
            <option value="1">Aprovado</option>
            <option value="2">Pendente</option>
            <option value="3">Cancelado</option>
        </select>
        <button type="submit">Adicionar</button>
    </form>
</body>
</html>