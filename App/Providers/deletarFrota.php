<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:\xampp\htdocs\system_concessionaria\App\Controller\FrotaController.php';
if (isset($_GET['id_frota'])) {
    $id_frota = $_GET['id_frota'];
    $frotaController = new FrotaController($pdo);

    try {
        $frotaController->excluirFrota($id_frota);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>