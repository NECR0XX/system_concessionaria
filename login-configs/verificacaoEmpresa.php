<?php
// Verifica se as variáveis de sessão estão definidas e não são vazias
if(!$_SESSION['empresa_id'] or !$_SESSION['empresa_email']) {
    // Redireciona para a página de login ou outra página apropriada
    header('Location: /system_concessionaria/index.php'); // Caminho relativo
    exit();
}
?>
