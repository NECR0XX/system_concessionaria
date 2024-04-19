<?php
require_once 'config.php';
require_once 'controllers/EsporteController.php';

// ESPORTE
$esporteController = new EsporteController($pdo);

if (isset($_POST['modalidade']) && 
    isset($_POST['ano_olimpiada'])) 
{
    $esporteController->criarEsporte($_POST['modalidade'], $_POST['ano_olimpiada']);
}

// Atualiza esporte
if (isset($_POST['id_esporte']) && isset($_POST['atualizar_modalidade']) && isset($_POST['atualizar_ano_olimpiada'])) {
    $esporteController->atualizarEsporte($_POST['id_esporte'], $_POST['atualizar_modalidade'], $_POST['atualizar_ano_olimpiada']);
}

// Excluir esporte
if (isset($_POST['excluir_id_esporte'])) {
    $esporteController->excluirEsporte($_POST['excluir_id_esporte']);
}

$esportes = $esporteController->listarEsportes();

?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <h1>Esportes</h1>
    <form method="post">
        <!-- ESPORTE -->
        <input type="text" name="modalidade" placeholder="Modalidade" required>
        <input type="number" name="ano_olimpiada" placeholder="Ano da Olimpíada" required>
        <button type="submit">Adicionar Esporte</button>
    </form>
    <!-- ESPORTE -->
    <fieldset>
        <legend><h2>Lista de Esportes</h2></legend>
            <ul>
                <?php foreach ($esportes as $esporte): ?>
                    <li><?php echo $esporte['modalidade']; ?> - <?php echo $esporte['ano_olimpiada']; ?></li>
                <?php endforeach; ?>
            </ul>
    </fieldset>

<h2>Atualizar Esporte</h2>
    <form method="post">
        <select name="id_esporte">
        <?php foreach ($esportes as $esporte): ?>
                                <option value="<?php echo $esporte['id_esporte']; ?>"><?php echo $esporte['id_esporte']; ?></option>
                                <?php endforeach; ?>
        </select>
                <input type="text" name="atualizar_modalidade" placeholder="Nova Modalidade">
                <input type="number" name="atualizar_ano_olimpiada" placeholder="Novo Ano da Olimpíada">
                <button type="submit">Atualizar Esporte</button>
    </form>

    <h2>Excluir Esporte</h2>
    <form method="post">
        <select name="excluir_id_esporte">
            <?php foreach ($esportes as $esporte): ?>
                <option value="<?php echo $esporte['id_esporte']; ?>"><?php echo $esporte['modalidade']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Esporte</button>
    </form><br><br><br><br>

</form>
</body>
</html>