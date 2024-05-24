<?php
require_once 'C:/xampp/htdocs/system_concessionaria/config/config.php';
require_once 'C:\xampp\htdocs\system_concessionaria\App\Controller\EstoqueController.php';
if (isset($_GET['id_estoque'])) {
    $id_estoque = $_GET['id_estoque'];
    $estoqueController = new EstoqueController($pdo);

    try {
        $estoqueController->excluirEstoque($id_estoque);
        echo "success";
    } catch (Exception $e) {
        echo "error";
    }
} else {
    echo "error";
}
?>