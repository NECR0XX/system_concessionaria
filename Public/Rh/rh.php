<?php 
include_once 'app/view/listar_rh.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>
</head>
<body>
    <a href="register.php">Cadastrar</a>

    <?php 
     $exibirlistaRhs = exibirListaRhs();
    ?>
</body>
</html>