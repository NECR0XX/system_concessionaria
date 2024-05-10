<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/FrotaController.php';
require_once '../../login-configs/filtros.php';

$frotaController = new FrotaController($pdo);
$frotas = $frotaController->listarFrotas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/stylepg.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
    <title>Document</title>
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
<a href="../pg.php">Home</a>

<fieldset>
    <legend><h2>Lista</h2></legend>
    <ul>
        <?php foreach ($frotas as $frota): ?>
            <li><strong>ID:</strong> <?php echo $frota['id_frota']; ?> - <strong>Marca/Modelo:</strong> <?php echo $frota['marca_modelo']; ?> - <strong>Ano de Fabricação:</strong> <?php echo $frota['ano_fabricacao']; ?> 
            - <strong>Placa:</strong> <?php echo $frota['placa']; ?> - <strong>Número de Chassi:</strong> <?php echo $frota['numero_chassi']; ?> 
            - <strong>Tipo de Veículo:</strong> <?php echo $frota['tipo_veiculo']; ?> - <strong>Tipo de Combustível:</strong> <?php echo $frota['tipo_combustivel']; ?> 
            - <strong>Quilometragem:</strong> <?php echo $frota['quilometragem']; ?> - <strong>Data da Próxima Revisão:</strong> <?php echo $frota['data_prox_rev']; ?> 
            - <strong>Histórico de Manutenção:</strong> <?php echo $frota['historico_manutencao']; ?> - <strong>Seguro:</strong> <?php echo $frota['seguro']; ?> 
            - <strong>Documentação:</strong> <?php echo $frota['documentacao']; ?> - <strong>Localização Atual:</strong> <?php echo $frota['localizacao_atual']; ?> 
            - <strong>Responsável:</strong> <?php echo $frota['responsavel']; ?> 
            - <strong>Status:</strong> <?php echo $frota['status']; ?> - <strong>Observações:</strong> <?php echo $frota['observacoes']; ?>
            - <?php 
                if (!empty($frota['imagem'])) {
                    echo '<img src="' . $frota['imagem'] . '" alt="Imagem do produto" width="100">';
                } else {
                    echo 'Sem Imagem';
                }; ?>
            - <?php echo "<a href='../../App/Providers/atualizarfrota.php?id={$frota['id_frota']}'>Atualizar</a>" ?></li>
        <?php endforeach; ?>
    </ul>
</fieldset>



<h2>Excluir</h2>
    <form method="post">
        <select name="excluir_id_frota">
            <?php foreach ($frotas as $frota): ?>
                <option value="<?php echo $frota['id_frota']; ?>"><?php echo $frota['marca_modelo']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir</button>
    </form>
</body>
</html>