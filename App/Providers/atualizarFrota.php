<?php
include '../../Config/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_GET['id'])) {
        header('Location: ../../Public/Frota/index.php');
        exit;
    }
    
    $id_frota = $_GET['id'];

    if (!empty($_FILES['nova_imagem']['tmp_name'])) {
        $imagem = "../../Resources/Assets/Uploads/" . $_FILES['nova_imagem']['name'];
        move_uploaded_file($_FILES['nova_imagem']['tmp_name'], $imagem);
    } else {
        $stmt = $pdo->prepare('SELECT imagem FROM frota_veiculo WHERE id_frota = ?');
        $stmt->execute([$id_frota]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $imagem = $result['imagem'];
    }

    $marca_modelo = $_POST['marca_modelo'];
    $ano_fabricacao = $_POST['ano_fabricacao'];
    $placa = $_POST['placa'];
    $numero_chassi = $_POST['numero_chassi'];
    $tipo_veiculo = $_POST['tipo_veiculo'];
    $tipo_combustivel = $_POST['tipo_combustivel'];
    $quilometragem = $_POST['quilometragem'];
    $data_prox_rev = $_POST['data_prox_rev'];
    $historico_manutencao = $_POST['historico_manutencao'];
    $seguro = $_POST['seguro'];
    $documentacao = $_POST['documentacao'];
    $localizacao_atual = $_POST['localizacao_atual'];
    $responsavel = $_POST['responsavel'];
    $status = $_POST['status'];
    $observacoes = $_POST['observacoes'];

    $stmt = $pdo->prepare('UPDATE frota_veiculo SET marca_modelo = ?, ano_fabricacao = ?, placa = ?, numero_chassi = ?, tipo_veiculo = ?, tipo_combustivel = ?, quilometragem = ?, data_prox_rev = ?, historico_manutencao = ?, seguro = ?, documentacao = ?, localizacao_atual = ?, responsavel = ?, status = ?, observacoes = ?, imagem = ? WHERE id_frota = ?');
    $stmt->execute([$marca_modelo, $ano_fabricacao, $placa, $numero_chassi, $tipo_veiculo, $tipo_combustivel, $quilometragem, $data_prox_rev, $historico_manutencao, $seguro, $documentacao, $localizacao_atual, $responsavel, $status, $observacoes, $imagem, $id_frota]);
    header('Location: ../../Public/Frota/index.php');
    exit;
}

if (!isset($_GET['id'])) {
    header('Location: ../../Public/Frota/index.php');
    exit;
}

$id_frota = $_GET['id'];

$stmt = $pdo->prepare('SELECT * FROM frota_veiculo WHERE id_frota = ?');
$stmt->execute([$id_frota]);
$appointment = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$appointment) {
    header('Location: ../../Public/Frota/index.php');
    exit;   
}

$imagem = $appointment['imagem'];
$marca_modelo = $appointment['marca_modelo'];   
$ano_fabricacao = $appointment['ano_fabricacao'];
$placa = $appointment['placa'];
$numero_chassi = $appointment['numero_chassi'];
$tipo_veiculo = $appointment['tipo_veiculo'];
$tipo_combustivel = $appointment['tipo_combustivel'];
$quilometragem = $appointment['quilometragem'];
$data_prox_rev = $appointment['data_prox_rev'];
$historico_manutencao = $appointment['historico_manutencao'];
$seguro = $appointment['seguro'];
$documentacao = $appointment['documentacao'];
$localizacao_atual = $appointment['localizacao_atual'];
$responsavel = $appointment['responsavel'];
$status = $appointment['status'];
$observacoes = $appointment['observacoes'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../public/css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/adm3.css">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <title>Atualizar Veículo</title>
</head>
<body>
<div class="content-wrapper">
        <div class="content">
            <a class="a3" href="../../Public/Frota/index.php">«</a>
<h1>Atualizar Veículo</h1>
<form method="post" enctype="multipart/form-data">
  

    <label for="marca_modelo">Marca/Modelo:</label>
    <input type="text" name="marca_modelo" value="<?php echo $marca_modelo; ?>" required><br>

    <label for="ano_fabricacao">Ano de Fabricação:</label>
    <input type="number" name="ano_fabricacao" value="<?php echo $ano_fabricacao; ?>" required><br>

    <label for="placa">Placa:</label>
    <input type="text" name="placa" value="<?php echo $placa; ?>" required><br>

    <label for="numero_chassi">Número de Chassi:</label>
    <input type="text" name="numero_chassi" value="<?php echo $numero_chassi; ?>" required><br>

    <label for="tipo_veiculo">Tipo de Veículo:</label>
    <input type="text" name="tipo_veiculo" value="<?php echo $tipo_veiculo; ?>" required><br>

    <label for="tipo_combustivel">Tipo de Combustível:</label>
    <input type="text" name="tipo_combustivel" value="<?php echo $tipo_combustivel; ?>" required><br>

    <label for="quilometragem">Quilometragem:</label>
    <input type="number" name="quilometragem" value="<?php echo $quilometragem; ?>" required><br>

    <label for="data_prox_rev">Data da Próxima Revisão:</label>
    <input type="date" name="data_prox_rev" value="<?php echo $data_prox_rev; ?>"><br>

    <label for="historico_manutencao">Histórico de Manutenção:</label>
    <textarea name="historico_manutencao"><?php echo $historico_manutencao; ?></textarea><br>

    <label for="seguro">Seguro:</label>
    <input type="text" name="seguro" value="<?php echo $seguro; ?>"><br>

    <label for="documentacao">Documentação:</label>
    <input type="text" name="documentacao" value="<?php echo $documentacao; ?>"><br>

    <label for="localizacao_atual">Localização Atual:</label>
    <input type="text" name="localizacao_atual" value="<?php echo $localizacao_atual; ?>"><br>

    <label for="responsavel">Responsável:</label>
    <input type="text" name="responsavel" value="<?php echo $responsavel; ?>"><br>

    <label for="status">Status:</label>
    <select name="status" required>
        <option value="" disabled selected hidden>Status...</option>
        <option value="Disponível"<?php if ($status == 'Disponível') echo ' selected'; ?>>Disponível</option>
        <option value="Ocupado"<?php if ($status == 'Ocupado') echo ' selected'; ?>>Ocupado</option>
        <option value="Em Manutenção"<?php if ($status == 'Em Manutenção') echo ' selected'; ?>>Em Manutenção</option>
    </select><br>

    <label for="observacoes">Observações:</label>
    <textarea name="observacoes"><?php echo $observacoes; ?></textarea><br>

    <button type="submit">Atualizar</button>
</form>

</body>
</html>