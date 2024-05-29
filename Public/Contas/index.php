<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';
require_once '../../login-configs/filtros.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';

$contasController = new contasController($pdo);
$contas = $contasController->listarcontas();

if (isset($_POST['excluir_id_conta'])) {
    $contasController->excluirconta($_POST['excluir_id_conta']);
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
    <title>SCAR - Listagem das Despesas</title>
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

    <h1>DESPESAS</h1>
    <ul class="list">
        <?php foreach ($contas as $conta): ?>
            <li><strong>ID:</strong> <?php echo $conta['id_conta']; ?> - <strong>Fornecedores:</strong> R$<?php echo $conta['fornecedores']; ?>  
            - <strong>Salários e Benefícios:</strong> R$<?php echo $conta['salarios_benef']; ?> 
            - <strong>Aluguel:</strong> R$<?php echo $conta['aluguel']; ?> - <strong>Contas Públicas:</strong> R$<?php echo $conta['contas_publicas']; ?> 
            - <strong>Impostos:</strong> R$<?php echo $conta['impostos']; ?> - <strong>Empréstimos:</strong> R$<?php echo $conta['emprestimos']; ?> 
            - <strong>Manutenção:</strong> R$<?php echo $conta['manutencao']; ?> - <strong>Seguros:</strong> R$<?php echo $conta['seguros']; ?> 
            - <strong>Marketing:</strong> R$<?php echo $conta['marketing']; ?> - <strong>Despesas Administrativas:</strong> R$<?php echo $conta['despesas_adm']; ?> 
            - <strong>Logística:</strong> R$<?php echo $conta['logistica']; ?> 
            - <strong>Pesquisa:</strong> R$<?php echo $conta['pesquisa']; ?> - <strong>Garantia:</strong> R$<?php echo $conta['garantia']; ?>
            - <?php echo "<a class='a1' href='../../App/Providers/atualizarcontas.php?id={$conta['id_conta']}'>editar</a>" ?>
            ou <a class="a2" href="#" onclick="confirmDelete(<?php echo $conta['id_conta']; ?>)">excluir</a><hr></li>
        <?php endforeach; ?>
    </ul>

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

        function confirmDelete(id_conta) {
            openModal();
            document.getElementById("confirmDeleteBtn").onclick = function() {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../../App/Providers/deletarcontas.php?id_conta=" + id_conta, true);
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
    <div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR DESPESAS</a></button></div>
</body>
</html>