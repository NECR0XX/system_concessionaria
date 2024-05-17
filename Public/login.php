<?php
require_once '../login-configs/verificacaoEmpresa.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<body>
        <form action="../login-configs/config.php" method="POST">
                <input type="text" name="email" placeholder="E-mail ou Nome de Usuário">
                <input type="password" name="senha" placeholder="Senha">

                <button type="submit">Logar</button>
        </form>
</body>
</html>