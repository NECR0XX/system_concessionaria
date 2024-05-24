<?php
session_start();
require_once '../../login-configs/filtros.php';
require_once '../../Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';
$controleRhModel = new controleRhModel($pdo);
$controles = $controleRhModel->listarControleRhs();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylepg.css">
    <link rel="stylesheet" href="../../Resources/Css/styledelete.css">
    <link rel="stylesheet" href="../../Resources/Css/ambientes.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>SCAR - RH</title>
    <title>RH</title>
</head>
<body>
<aside>
       <nav>
        <p class="logo">SCAR
    </p>
        
    <div class="search-container">
    <form action="" method="get">
        <input type="text" class="search-box" name="q" placeholder="">
        <img src="../../Resources/Assets/lupa.svg">
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
    <div class="content-wrapper">
        <div class="content">
            <a class="a3" href="../pg.php">«</a>

        <h1>CONTROLE DE PESSOAS - RH</h1>

        <?php foreach($controles as $controlerh): ?>
    <ul class="list">
        <li><?php echo $controlerh['nome'] . " - >" ; ?></li>
        <li><?php echo $controlerh['cargo'] . " |"; ?></li>
        <li><?php echo '<a class="a1" href="editar.php?id=' . $controlerh['id'] . '">'?>editar</a></li>
        <li><?php echo " ou ";?></li>
        <li><a class="a2" href="#" onclick="confirmDelete(<?php echo $controlerh['id']; ?>)">excluir</a></li>
        
    </ul>
<?php endforeach; ?>

    </div>
    </div>
    <div id="myModal" class="modal">
    <div class="modal-content">
        <p>Tem certeza que deseja excluir o item?</p>
        <div class="op">
        <button class="confirm" id="confirmDeleteBtn">Sim</button>
        <button class="close" onclick="closeModal()">Cancelar</button></div>
    </div>
</div>
<script>
    function openModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
    }

    function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
    }

    function confirmDelete(id) {
        openModal();
        document.getElementById("confirmDeleteBtn").onclick = function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "deletar.php?id=" + id, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    if (xhr.responseText == "success") {
                        window.location.href = "index.php";
                    } else {
                        alert("Falha ao excluir o usuário.");
                    }
                }
            };
            xhr.send();
        };
    }
</script>

</body>
</html>

