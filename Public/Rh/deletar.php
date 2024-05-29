<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controleRhController = new controleRhController($pdo);

    try {
        $controleRhController->deletarControleRh($id);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>
