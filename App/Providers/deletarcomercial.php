<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:\xampp\htdocs\system_concessionaria\App\Controller\ComercialController.php';
if (isset($_GET['id_comercial'])) {
    $id_comercial = $_GET['id_comercial'];
    $comercialController = new ComercialController($pdo);

    try {
        $comercialController->excluirComercial($id_comercial);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>