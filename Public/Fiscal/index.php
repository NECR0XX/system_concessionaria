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
    <link rel="stylesheet" href="../../Resources/Css/rh.css">
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

    <div class="content-wrapper">
        <div class="content">
            <a class="a3" href="../pg.php">«</a>

        <h1>CONTROLE FISCAL</h1>

        <ul>
        <?php foreach ($fiscals as $fiscal): ?>
            <li><strong>Data:</strong> <?php echo $fiscal['data']; ?> 
            - <strong>Valor:</strong> R$<?php echo $fiscal['valor']; ?>
            - <strong>Cliente/Fornecedor:</strong> <?php echo $fiscal['cliente_fornecedor']; ?>  
            - <strong>Responsável:</strong> <?php echo $fiscal['responsavel']; ?> 
            - <strong>Status:</strong> <?php echo $fiscal['status']; ?> 
            - <?php echo "<a href='../../App/Providers/atualizarfiscal.php?id={$fiscal['id_fiscal']}'>Atualizar</a>" ?></li>
        <?php endforeach; ?>
        </ul>
</div>
</div>


<h2>Excluir Fiscal</h2>
    <form method="post">
        <select name="excluir_id_fiscal">
            <?php foreach ($fiscals as $fiscal): ?>
                <option value="<?php echo $fiscal['id_fiscal']; ?>"><?php echo $fiscal['id_fiscal']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir</button>
        <button><a href="crud.php">Criar</a></button>
    </form>
</body>
</html>