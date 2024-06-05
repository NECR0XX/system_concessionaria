<?php
include_once 'config/config.php';
include_once 'App/Controller/EmpresaController.php';
include_once 'Public/Rh/parametros/uf.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resources/Css/pagcss.css">
    <title>SCAR</title>
</head>
<body>
<div class="cont-web">
    <header>
        <nav>
            <div class="logo"><p class="logo-p">SCAR</p></div>
            <div class="bts">
                <div class="cad-button">
                    <?php if (isset($_GET['mensagem']) && $_GET['mensagem'] == 'sucesso'): ?>
                        <script>
                            alert("Cadastro realizado com sucesso!");
                        </script>
                    <?php endif; ?>

                    <a href="login.php">LOGIN</a>
                </div>
            
                <div class="cad-button">
                    <?php
                        // Consulta rápida para verificar se há algum registro no banco de dados
                        $query = "SELECT COUNT(*) as total FROM empresa";
                        $stmt = $pdo->prepare($query);
                        $stmt->execute();
                        $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

                        // Se houver pelo menos um registro no banco de dados, redirecione para 'index.php'
                        if ($resultado['total'] != 1) {
                            echo '<a href="cadastro.php">CADASTRO</a>';
                        }
                    ?>
                </div>
            </div>
        </nav>
    </header>
<section>
        <div class="imgscar">
            <img src="Resources/Assets/S C A R.png">
        </div>

        <br><br><br><br><br>

        <div class="container-subinfo flex"> 
            <div class="lado-e flex">
                <p class="subinfo">Ao lado, disponibilizamos um tutorial de como utilizar nosso sistema. Acesse o documento e/ou assista o vídeo a seguir</p>
            </div>
            <div class="lado-d flex">
            <a href="tutorial.php">
                <img class="img" src="Resources/Assets/documento-de-texto.png">
                </a>
                <a href="tutorial.php">
                    <img class="vid" src="Resources/Assets/video-player.png">
                </a>
            </div>
        </div>
</section>
</div>
</body>
</html>