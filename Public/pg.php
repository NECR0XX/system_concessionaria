<?php 
    require_once '../login-configs/config.php';
    require_once '../login-configs/filtros.php';
    require_once '../login-configs/verificacao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Site</title>
    <link rel="stylesheet" href="../Resources/Css/stylepg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
</head>
<body>
    
    <aside>
       <nav>
        <p class="logo">SCAR
    </p>
        
    <div class="search-container">
    <form action="" method="get">
        <input type="text" class="search-box" name="q" placeholder="">
        <img src="../Resources/Assets/lupa.svg">
    </form>
</div>
    <div class="ambiente">
        <p>AMBIENTES</p>
    </div>
        <div>
            <ul>
                <?php $filtrosNav = FiltroNav(); ?>
            </ul>
        </div>

    </nav>
    </aside>
    <main>
        <div class="container-main">
            <p class="titulo">SELECIONE UM AMBIENTE</p>
            <p class="subtitulo">e configure como quiser!</p>
            <div class="logout">
            <li><button class="links"><a href="../login-configs/logout.php">Logout</a></button></li>
        </div>
        </div>
</main>
</body>
</html>