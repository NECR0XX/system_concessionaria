<?php 
session_start();
unset($_SESSION["usuarioId"]);
unset($_SESSION['usuarioEmail']);
unset($_SESSION['usuarioNomedeUsuario']);
unset($_SESSION['usuarioNiveisAcessoId']);
unset($_SESSION['nao_autenticado']);

header('Location: ../Public/login.php');
exit();