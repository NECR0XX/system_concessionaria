<?php
session_start();
require_once '../login-configs/verificacaoEmpresa.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Resources/Css/login.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
                <a href="index.php">Voltar</a>
    <form action="../login-configs/config.php" method="POST">
        <h2>Login</h2>
        <input type="text" name="email" placeholder="E-mail">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit">Logar</button>
    </form>
    </div>
</body>
</html>
