<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FrotaController.php';

$frotaController = new FrotaController($pdo);

if (isset($_FILES['imagem']) && !empty($_FILES['imagem'])) {
    $imagem = "../../Resources/Assets/Uploads/" . $_FILES['imagem']['name'];
    move_uploaded_file($_FILES['imagem']['tmp_name'], $imagem);
} else {
    $imagem = "";
}

if (isset($_POST['marca_modelo']) && 
    isset($_POST['ano_fabricacao']) &&
    isset($_POST['placa']) &&
    isset($_POST['numero_chassi']) &&
    isset($_POST['tipo_veiculo']) &&
    isset($_POST['tipo_combustivel']) &&
    isset($_POST['quilometragem']) &&
    isset($_POST['data_prox_rev']) &&
    isset($_POST['historico_manutencao']) &&
    isset($_POST['seguro']) &&
    isset($_POST['documentacao']) &&
    isset($_POST['localizacao_atual']) &&
    isset($_POST['responsavel']) &&
    isset($_POST['status']) &&
    isset($_POST['observacoes'])) 
{
    $frotaController->criarFrota($_POST['marca_modelo'], $_POST['ano_fabricacao'], $_POST['placa'], $_POST['numero_chassi'], $_POST['tipo_veiculo'], $_POST['tipo_combustivel'], $_POST['quilometragem'], $_POST['data_prox_rev'], $_POST['historico_manutencao'], $_POST['seguro'], $_POST['documentacao'], $_POST['localizacao_atual'], $_POST['responsavel'], $_POST['status'], $_POST['observacoes'], $imagem);
    header('Location: #');
}

// Atualiza Frota
if (isset($_POST['id_frota']) && isset($_POST['atualizar_marca_modelo']) && isset($_POST['atualizar_ano_fabricacao']) && isset($_POST['atualizar_placa']) && isset($_POST['atualizar_numero_chassi']) && isset($_POST['atualizar_tipo_veiculo']) && isset($_POST['atualizar_tipo_combustivel']) && isset($_POST['atualizar_quilometragem']) && isset($_POST['atualizar_data_prox_rev']) && isset($_POST['atualizar_historico_manutencao']) && isset($_POST['atualizar_seguro']) && isset($_POST['atualizar_documentacao']) && isset($_POST['atualizar_localizacao_atual']) && isset($_POST['atualizar_responsavel']) && isset($_POST['atualizar_status']) && isset($_POST['atualizar_observacoes'])) {
    $frotaController->atualizarFrota($_POST['id_frota'], $_POST['atualizar_marca_modelo'], $_POST['atualizar_ano_fabricacao'], $_POST['atualizar_placa'], $_POST['atualizar_numero_chassi'], $_POST['atualizar_tipo_veiculo'], $_POST['atualizar_tipo_combustivel'], $_POST['atualizar_quilometragem'], $_POST['atualizar_data_prox_rev'], $_POST['atualizar_historico_manutencao'], $_POST['atualizar_seguro'], $_POST['atualizar_documentacao'], $_POST['atualizar_localizacao_atual'], $_POST['atualizar_responsavel'], $_POST['atualizar_status'], $_POST['atualizar_observacoes']);
}

// Excluir Frota
if (isset($_POST['excluir_id_frota'])) {
    $frotaController->excluirFrota($_POST['excluir_id_frota']);
}

$frotas = $frotaController->listarFrotas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Frota de Veículos</title>
</head>
<body>
    <a href="../pg.php">Home</a>
    <h2>Controle de Frota de Veículos</h2>
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="marca_modelo" placeholder="Marca e Modelo" required>
        <input type="number" name="ano_fabricacao" placeholder="Ano de Fabricação" required>
        <input type="text" name="placa" placeholder="Placa" required>
        <input type="text" name="numero_chassi" placeholder="Número do Chassi" required>
        <input type="text" name="tipo_veiculo" placeholder="Tipo de Veículo" required>
        <input type="text" name="tipo_combustivel" placeholder="Tipo de Combustível" required>
        <input type="number" name="quilometragem" placeholder="Quilometragem" required>
        <input type="date" name="data_prox_rev" placeholder="Próxima Revisão" required>
        <input type="text" name="historico_manutencao" placeholder="Histórico de Manutenção" required>
        <input type="text" name="seguro" placeholder="Seguro" required>
        <input type="text" name="documentacao" placeholder="Documentação" required>
        <input type="text" name="localizacao_atual" placeholder="Localização Atual" required>
        <input type="text" name="responsavel" placeholder="Responsável" required>
        <select name="status" required>
            <option value="">Status...</option>
            <option value="Disponível">Disponível</option>
            <option value="Ocupado">Ocupado</option>
            <option value="Em Manutenção">Em Manutenção</option>
        </select>
        <textarea name="observacoes" cols="30" rows="5" placeholder="Observações" required></textarea>
        <input type="file" name="imagem" accept="image/*" placeholder="Imagem" required>
        <button type="submit">Criar Frota</button>
    </form>
</body>
</html>