<?php
session_start();
require_once '../../login-configs/filtros.php';
require_once '../../Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';
require_once 'C:/xampp/htdocs/system_concessionaria/App/Controller/EmpresaController.php';
$empresaModel = new empresaModel($pdo);
$empresas = $empresaModel->listarempresas();
$filtroEmpresa = FiltroEmpresa();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylepg.css">
    <link rel="stylesheet" href="../../Resources/Css/styledelete.css">
    <link rel="stylesheet" href="../../Resources/Css/ambientes.css">
    <link rel="stylesheet" href="../../Resources/Css/correcao.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>SCAR - Empresa</title>
    <title></title>
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

        <h1>empresa DA EMPRESA</h1>

        <?php foreach($empresas as $empresa): ?>
    <ul class="list">
        <li>
            <?php echo $empresa['numero_inscricao'] . " - >" ; ?>
            <?php echo $empresa['data_abertura'] . " - >"; ?>
            <?php echo $empresa['razao_social'] . " - >" ; ?>
            <?php echo $empresa['nome_fantasia'] . " - >" ; ?>
            <?php echo $empresa['cnpj'] . " - >" ; ?>
            <?php echo $empresa['porte'] . " - >" ; ?>
            <?php echo $empresa['capital_social'] . " - >" ; ?>
            <?php echo $empresa['logradouro'] . " - >" ; ?>
            <?php echo $empresa['cep'] . " - >" ; ?>
            <?php echo $empresa['bairro_restrito'] . " - >" ; ?>
            <?php echo $empresa['municipio'] . " - >" ; ?>
            <?php echo $empresa['numero'] . " - >" ; ?>
            <?php echo $empresa['complemento'] . " - >" ; ?>
            <?php echo $empresa['telefone'] . " - >" ; ?>
            <?php echo $empresa['uf'] . " - >" ; ?>
            <?php echo $empresa['empresa_email'] . " - >"; ?>
            <?php echo $empresa['senha'] . " |" ; ?>
            <?php
            if ($_SESSION['usuarioNiveisAcessoId'] != 5) {
                echo "<a class='a1' href='../../App/Providers/atualizarEmpresa.php?id={$empresa['empresa_id']}'>editar</a> ";
            }
            ?>
            <hr>
        </li>
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
                if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            if (xhr.responseText == "success") {
                                window.location.href = "index.php";
                            } else {
                                alert("Falha ao excluir o usuário: " + xhr.responseText);
                            }}
                }
            };
            xhr.send();
        };
    }
</script>
</body>
</html>

