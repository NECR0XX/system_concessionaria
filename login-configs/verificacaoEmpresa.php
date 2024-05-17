<?php
// Verifica se as variáveis de sessão estão definidas e não são vazias
if(!isset($_SESSION['empresa_id']) || !isset($_SESSION['email']) || empty($_SESSION['empresa_id']) || empty($_SESSION['email'])) {
    // Redireciona para a página de login ou outra página apropriada
    header('Location: /system_concessionaria/index.php'); // Caminho relativo
    exit();
}
?>
