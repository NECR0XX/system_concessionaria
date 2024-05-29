<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FrotaController.php';

$mensagem = "";

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
    $mensagem = 'Cadastro realizado com sucesso!';
}
$frotas = $frotaController->listarFrotas();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <link rel="stylesheet" href="../../Resources/Css/msgcadastro.css">
    <title>Gerenciamento de Frota de Veículos</title>
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