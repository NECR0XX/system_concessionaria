<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:\xampp\htdocs\system_concessionaria\App\Controller\ContasController.php';
if (isset($_GET['id_conta'])) {
    $id_conta = $_GET['id_conta'];
    $contasController = new ContasController($pdo);

    try {
        $contasController->excluirConta($id_conta);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>