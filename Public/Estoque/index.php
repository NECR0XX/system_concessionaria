<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/EstoqueController.php';
require_once '../../login-configs/filtros.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
$filtroRh = FiltroRh();
$estoqueController = new EstoqueController($pdo);
$estoques = $estoqueController->listarEstoque();

if (isset($_POST['excluir_id_estoque'])) {
    $estoqueController->excluirEstoque($_POST['excluir_id_estoque']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylepg.css">
    <link rel="stylesheet" href="../../Resources/Css/styledelete.css">
    <link rel="stylesheet" href="../../Resources/Css/modal-imagem.css">
    <link rel="stylesheet" href="../../Resources/Css/ambientes.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>SCAR - Listagem de Estoque</title>
</head>
<body>
<aside>
       <nav>
        <p class="logo">SCAR
    </p>
        
   
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

        <h1>CONTROLE DE ESTOQUE</h1>

        <ul class="list">
        <?php foreach ($estoques as $estoque): ?>
            <li><strong>Número de Referência:</strong> 
            <?php echo $estoque['numero_referencia']; ?> - 
            <strong>Categoria:</strong> 
            <?php echo $estoque['categoria']; ?> - 
            <strong>Quantidade:</strong> 
            <?php echo $estoque['quantidade']; ?> 
            - <strong>Preço Unitário:</strong> 
            <?php echo $estoque['preco_unitario']; ?> - 
            <strong>Fornecedor:</strong> 
            <?php echo $estoque['fornecedor']; ?> - 
            <strong>Localização:</strong> 
            <?php echo $estoque['localizacao']; ?> 
            - <strong>Reabastecimento Mínimo:</strong> 
            <?php echo $estoque['reabastecimento_minimo']; ?> - 
            <strong>Validade:</strong> 
            <?php echo $estoque['validade']; ?> - 
            <strong>Imagem:</strong> 
            <img class="imagemPequena" alt="Imagem do Produto" style="width:50px; cursor:pointer;" src="<?php echo $estoque['imagem']; ?>"> 
             | 
            <?php
            if ($_SESSION['usuarioNiveisAcessoId'] != 5) {
                echo '<a class="a1" href="../../App/Providers/atualizarestoque.php?id=' . $estoque['id_estoque'] . '">editar</a>';
                echo ' ou ';
                echo '<a class="a2" href="#" onclick="confirmDelete(' . $estoque['id_estoque'] . ')">excluir</a>';
                echo '<hr></li>';
            }
            ?>

           
        <?php endforeach; ?>
        </ul>

<!-- Modal -->
<div id="meuModal" class="modal">
        <span class="fechar">&times;</span>
        <img class="modal-conteudo" id="imagemExpandida">
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

        function confirmDelete(id_estoque) {
            openModal();
            document.getElementById("confirmDeleteBtn").onclick = function() {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../../App/Providers/deletarestoque.php?id_estoque=" + id_estoque, true);
                xhr.onreadystatechange = function() {
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
    
    <?php $FiltroCadastroEstoque = FiltroCadastroEstoque(); ?>
    
<script src="../../Resources/js/script.js"></script>
</body>
</html>