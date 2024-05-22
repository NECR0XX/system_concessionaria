<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/EstoqueController.php';
require_once '../../login-configs/filtros.php';

$estoqueController = new EstoqueController($pdo);
$estoques = $estoqueController->listarEstoque();
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
        <?php foreach ($estoques as $estoque): ?>
            <li><strong>ID:</strong> <?php echo $estoque['id_estoque']; ?> - <strong>Número de Referência:</strong> <?php echo $estoque['numero_referencia']; ?> - <strong>Categoria:</strong> <?php echo $estoque['categoria']; ?> - <strong>Quantidade:</strong> <?php echo $estoque['quantidade']; ?> 
            - <strong>Preço Unitário:</strong> <?php echo $estoque['preco_unitario']; ?> - <strong>Fornecedor:</strong> <?php echo $estoque['fornecedor']; ?> - <strong>Localização:</strong> <?php echo $estoque['localizacao']; ?> 
            - <strong>Reabastecimento Mínimo:</strong> <?php echo $estoque['reabastecimento_minimo']; ?> - <strong>Validade:</strong> <?php echo $estoque['validade']; ?> 
            - <strong>Observações:</strong> <?php echo $estoque['observacoes']; ?> 
            - <?php 
                if (!empty($estoque['imagem'])) {
                    echo '<img src="' . $estoque['imagem'] . '" alt="Imagem do produto" width="100">';
                } else {
                    echo 'Sem Imagem';
                }; ?>
            - <?php echo "<a href='../../App/Providers/atualizarestoque.php?id={$estoque['id_estoque']}'>Atualizar</a>" ?></li>
        <?php endforeach; ?>
        </ul>
</fieldset>



<h2>Excluir Estoque</h2>
    <form method="post">
        <select name="excluir_id_estoque">
            <?php foreach ($estoques as $estoque): ?>
                <option value="<?php echo $estoque['id_estoque']; ?>"><?php echo $estoque['id_estoque']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir Conta</button>
        <button><a href="crud.php">Criar</a></button>

    </form>
</body>
</html>