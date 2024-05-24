<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';
require_once '../../login-configs/filtros.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';

$fiscalController = new FiscalController($pdo);
$fiscals = $fiscalController->listarFiscals();

if (isset($_POST['excluir_id_fiscal'])) {
    $fiscalController->excluirFiscal($_POST['excluir_id_fiscal']);
}
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
    <title>SCAR - Listagem de Notas Fiscais</title>
</head>

<body>
    <aside>
        <nav>
            <p class="logo">SCAR</p>

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

            <h1>CONTROLE FISCAL</h1>


            <ul class="list">
            <?php foreach ($fiscals as $fiscal): ?>
                    <li><strong>Data:</strong> <?php echo $fiscal['data']; ?>
                        - <strong>Valor:</strong> R$<?php echo $fiscal['valor']; ?>
                        - <strong>Cliente/Fornecedor:</strong> <?php echo $fiscal['cliente_fornecedor']; ?>
                        - <strong>Responsável:</strong> <?php echo $fiscal['responsavel']; ?>
                        - <strong>Status:</strong> <?php echo $fiscal['status'] . " |"; ?>
                        -
                        <?php echo "<a class='a1' href='../../App/Providers/atualizarfiscal.php?id={$fiscal['id_fiscal']}'>Editar</a> " ?>
                        ou <a class="a2" href="#" onclick="confirmDelete(<?php echo $fiscal['id_fiscal']; ?>)">Excluir</a>
                        <hr>
                    </li>
                <?php endforeach; ?>
            </ul>
            <br>

        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>Tem certeza que deseja excluir o item?</p>
            <div class="op">
                <button class="confirm" id="confirmDeleteBtn">Sim</button>
                <button class="close" onclick="closeModal()">Cancelar</button>
            </div>
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

        function confirmDelete(id_fiscal) {
            openModal();
            document.getElementById("confirmDeleteBtn").onclick = function () {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../../App/Providers/deletarfiscal.php?id_fiscal=" + id_fiscal, true);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            if (xhr.responseText == "success") {
                                window.location.href = "index.php";
                            } else {
                                alert("Falha ao excluir o usuário: " + xhr.responseText);
                            }
                        }
                    }
                };
                xhr.send();
            };
        }
    </script>
    <button><a href="crud.php">Criar</a></button>
</body>

</html>