<?php 
session_start();
unset($_SESSION["empresa_id"]);
unset($_SESSION['email']);

header('Location: ../login.php');
exit();