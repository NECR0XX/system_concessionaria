<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
$controleRhController = new controleRhController($pdo);

if (isset($_POST['resposta'])) {
    if ($_POST['resposta'] === 'sim') {
        $id = $_GET['id'];
        // Se 'sim' foi selecionado, deletar o usuário
        $resposta = $_POST['resposta']; // Você precisa passar o ID do usuário aqui
        $controleRhController->deletarControleRh($id);
        
    }
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label>Deseja deletar esse usuario?</label><br>

        <label>sim</label>
        <input type="radio" name="resposta" value="sim"><br>

        <label>não</label>
        <input type="radio" name="resposta" value="nao"><br>

        <button type="submit">Pronto</button>
    </form>
</body>
</html>