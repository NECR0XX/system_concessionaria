<?php
if(!$_SESSION['usuarioEmail'] or !$_SESSION['usuarioNomedeUsuario']) {
    header('Location: C:/xampp/htdocs/system_concessionaria/Public/login.php');
    exit();
}