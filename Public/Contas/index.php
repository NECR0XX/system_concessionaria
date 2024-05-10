<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';
require_once '../../login-configs/filtros.php';

$contasController = new contasController($pdo);
$contas = $contasController->listarcontas();
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
    <legend><h2>Lista de contas</h2></legend>
    <ul>
        <?php foreach ($contas as $conta): ?>
            <li><strong>ID:</strong> <?php echo $conta['id_conta']; ?> - <strong>Fornecedores:</strong> R$<?php echo $conta['fornecedores']; ?>  
            - <strong>Salários e Benefícios:</strong> R$<?php echo $conta['salarios_benef']; ?> 
            - <strong>Aluguel:</strong> R$<?php echo $conta['aluguel']; ?> - <strong>Contas Públicas:</strong> R$<?php echo $conta['contas_publicas']; ?> 
            - <strong>Impostos:</strong> R$<?php echo $conta['impostos']; ?> - <strong>Empréstimos:</strong> R$<?php echo $conta['emprestimos']; ?> 
            - <strong>Manutenção:</strong> R$<?php echo $conta['manutencao']; ?> - <strong>Seguros:</strong> R$<?php echo $conta['seguros']; ?> 
            - <strong>Marketing:</strong> R$<?php echo $conta['marketing']; ?> - <strong>Despesas Administrativas:</strong> R$<?php echo $conta['despesas_adm']; ?> 
            - <strong>Logística:</strong> R$<?php echo $conta['logistica']; ?> 
            - <strong>Pesquisa:</strong> R$<?php echo $conta['pesquisa']; ?> - <strong>Garantia:</strong> R$<?php echo $conta['garantia']; ?>
            - <?php echo "<a href='../../App/Providers/atualizarcontas.php?id={$conta['id_conta']}'>Atualizar</a>" ?>
        </li>
        <?php endforeach; ?>
    </ul>
</fieldset>


    <h2>Excluir conta</h2>
    <form method="post">
        <select name="excluir_id_conta">
            <?php foreach ($contas as $conta): ?>
                <option value="<?php echo $conta['id_conta']; ?>"><?php echo $conta['id_conta']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir conta</button>
    </form>
</body>
</html>