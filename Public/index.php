<?php
    require_once '../login-configs/config.php';
    require_once '../login-configs/verificacaoEmpresa.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Resources/Css/pagcss.css">
<!--    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">-->
    <title>SCAR - Home</title>
</head>
<body>
    <div class="cont-web">
    <header>
        <nav>
            <div class="logo"><p class="logo-p">SCAR</p></div>
            <div class="cad-button">
            </div>
            <div class="cad-button">
                <?php 

                    if(!isset($_SESSION['usuarioEmail']) or $_SESSION['usuarioEmail'] == '') {
                        echo '<a href="login.php" class="link-cadastro">Entre</a>';
                    }
                    else {
                        echo '<a href="../login-configs/logout.php" class="link-cadastro">Sair</a>';
                    }
                ?>
            </div>
        </nav>
    </header>
    <section>
        <div class="imgscar">
            <img src="../Resources/Assets/S C A R.png">
        </div>

        <br><br><br><br><br>

        <div class="container-subinfo flex"> 
            <div class="lado-e flex">
                <p class="subinfo">Ao lado, disponibilizamos um tutorial de como utilizar nosso sistema. Acesse o documento e/ou assista o vídeo a seguir</p>
            </div>
            <div class="lado-d flex">
                <a href="">
                    <img class="img" src="../Resources/Assets/documento-de-texto.png">
                </a>
                <a href="">
                    <img class="vid" src="../Resources/Assets/video-player.png">
                </a>
            </div>
        </div>
</section>
</div>