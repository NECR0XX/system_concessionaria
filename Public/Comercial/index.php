<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';
require_once '../../login-configs/filtros.php';
require_once '../../login-configs/verificacaoEmpresa.php';
require_once '../../login-configs/verificacao.php';

$comercialController = new ComercialController($pdo);
$comerciais = $comercialController->listarComercials();

if (isset($_POST['excluir_id_comercial'])) {
    $comercialController->excluirComercial($_POST['excluir_id_comercial']);
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
    <title>SCAR - Listagem das Vendas</title>
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

    <h1>COMERCIAL</h1>
    <ul class="list3">
        <?php foreach ($comerciais as $comercial): ?>
            <li><strong>Id Comercial:</strong> <?php echo $comercial['id_comercial']; ?> - <strong>Nome do Cliente:</strong> <?php echo $comercial['nome_cliente']; ?> 
            - <strong>Telefone do Cliente:</strong> <?php echo $comercial['telefone_cliente']; ?> 
            - <strong>Email do Cliente:</strong> <?php echo $comercial['email_cliente']; ?> - <strong>Identificação do Cliente:</strong> <?php echo $comercial['identificacao_cliente']; ?> 
            - <strong>Marca do Carro:</strong> <?php echo $comercial['marca_car']; ?> - <strong>Modelo do Carro:</strong> <?php echo $comercial['modelo_car']; ?> 
            - <strong>Características do Carro:</strong> <?php echo $comercial['caracteristicas_car']; ?> - <strong>Preço do Carro:</strong> R$<?php echo $comercial['preco_car']; ?> 
            - <strong>Número do Chassi:</strong> <?php echo $comercial['numero_chassi']; ?> - <strong>Data da Venda:</strong> <?php echo $comercial['data_venda']; ?> 
            - <strong>Tipo de Transação:</strong> <?php echo $comercial['tipo_transacao']; ?> - <strong>Forma de Pagamento:</strong> <?php echo $comercial['forma_paga']; ?> 
            - <strong>Nota Fiscal:</strong> <?php echo $comercial['nota_fiscal']; ?> - <strong>Valor Total:</strong> R$<?php echo $comercial['valor_total']; ?> 
            - <strong>Canal de Venda:</strong> <?php echo $comercial['canal_venda']; ?> - <strong>Vendedor:</strong> <?php echo $comercial['vendedor']; ?> 
            - <strong>Estado da Transação:</strong> <?php echo $comercial['estado_transacao']; ?>
            - <?php echo "<a class='a1' href='../../App/Providers/atualizarcomercial.php?id={$comercial['id_comercial']}'>editar</a>" ?> 
            ou <a class="a2" href="#" onclick="confirmDelete(<?php echo $comercial['id_comercial']; ?>)">excluir</a><hr></li>
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

    function confirmDelete(id_comercial) {
        openModal();
        document.getElementById("confirmDeleteBtn").onclick = function() {
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../../App/Providers/deletarcomercial.php?id_comercial=" + id_comercial, true);
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

<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR PRODUTO</a></button></div>
</body>
</html>