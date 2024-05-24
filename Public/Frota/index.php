<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/FrotaController.php';
require_once '../../login-configs/filtros.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacaoEmpresa.php';
require_once 'C:/xampp/htdocs/system_concessionaria/login-configs/verificacao.php';

$frotaController = new FrotaController($pdo);
$frotas = $frotaController->listarFrotas();

if (isset($_POST['excluir_id_frota'])) {
    $frotaController->excluirFrota($_POST['excluir_id_frota']);
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
    <title>SCAR - Listagem de Frota</title>
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
<a href="../pg.php">Home</a>


    <h2>Lista</h2>
    <ul class="list">
        <?php foreach ($frotas as $frota): ?>
            <li><strong>ID:</strong> <?php echo $frota['id_frota']; ?> - <strong>Marca/Modelo:</strong> <?php echo $frota['marca_modelo']; ?> - <strong>Ano de Fabricação:</strong> <?php echo $frota['ano_fabricacao']; ?> 
            - <strong>Placa:</strong> <?php echo $frota['placa']; ?> - <strong>Número de Chassi:</strong> <?php echo $frota['numero_chassi']; ?> 
            - <strong>Tipo de Veículo:</strong> <?php echo $frota['tipo_veiculo']; ?> - <strong>Tipo de Combustível:</strong> <?php echo $frota['tipo_combustivel']; ?> 
            - <strong>Quilometragem:</strong> <?php echo $frota['quilometragem']; ?> - <strong>Data da Próxima Revisão:</strong> <?php echo $frota['data_prox_rev']; ?> 
            - <strong>Histórico de Manutenção:</strong> <?php echo $frota['historico_manutencao']; ?> - <strong>Seguro:</strong> <?php echo $frota['seguro']; ?> 
            - <strong>Documentação:</strong> <?php echo $frota['documentacao']; ?> - <strong>Localização Atual:</strong> <?php echo $frota['localizacao_atual']; ?> 
            - <strong>Responsável:</strong> <?php echo $frota['responsavel']; ?> 
            - <strong>Status:</strong> <?php echo $frota['status']; ?> - <strong>Observações:</strong> <?php echo $frota['observacoes']; ?>
            - <?php echo "<a href='../../App/Providers/atualizarfrota.php?id={$frota['id_frota']}'>Atualizar</a>" ?>
            ou <a class="a2" href="#" onclick="confirmDelete(<?php echo $frota['id_frota']; ?>)">excluir</a></li>
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

        function confirmDelete(id_frota) {
            openModal();
            document.getElementById("confirmDeleteBtn").onclick = function() {
                var xhr = new XMLHttpRequest();
                xhr.open("POST", "../../App/Providers/deletarfrota.php?id_frota=" + id_frota, true);
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
    <button><a href="crud.php">Criar</a></button>
</body>
</html>