<?php
$userController = new UserController($pdo);
var_dump($_POST);
var_dump('chegou no controller do a');
if (isset($_POST['nome']) &&
    isset($_POST['email']) &&
    isset($_POST['senha']) &&
    isset($_POST['tipo'])) {
    
    $userController->criarUser(
        $_POST['nome_c'],
        $_POST['email'],
        $_POST['senha'],
        $_POST['tipo']);
}
?>