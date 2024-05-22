<?php
include_once 'config/config.php';
include_once 'App/Controller/EmpresaController.php';
include_once 'Public/Rh/parametros/uf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="./login.php">Login</a>

<?php
// Consulta rápida para verificar se há algum registro no banco de dados
$query = "SELECT COUNT(*) as total FROM empresa";
$stmt = $pdo->prepare($query);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

// Se houver pelo menos um registro no banco de dados, redirecione para 'index.php'
if ($resultado['total'] != 1) {
    echo '<a href="cadastro.php">Cadastro</a>';
}
?>
</body>
</html>