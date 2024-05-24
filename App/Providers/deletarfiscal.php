<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:\xampp\htdocs\system_concessionaria\App\Controller\FiscalController.php';
if (isset($_GET['id_fiscal'])) {
    $id_fiscal = $_GET['id_fiscal'];
    $fiscalController = new FiscalController($pdo);

    try {
        $fiscalController->excluirFiscal($id_fiscal);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>