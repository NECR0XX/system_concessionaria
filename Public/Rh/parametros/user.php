<?php
$userController = new UserController($pdo);

if (isset($_POST['nome']) &&
    isset($_POST['email']) &&
    isset($_POST['senha']) &&
    isset($_POST['tipo'])) {
    
    $userController->criarUser(
        $_POST['nome'],
        $_POST['email'],
        $_POST['senha'],
        $_POST['tipo']);
}
?>