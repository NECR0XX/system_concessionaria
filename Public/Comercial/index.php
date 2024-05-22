<?php
session_start();
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';
require_once '../../login-configs/filtros.php';
require_once '../login-configs/verificacaoEmpresa.php';
require_once '../login-configs/verificacao.php';

$comercialController = new ComercialController($pdo);
$comerciais = $comercialController->listarComercials();
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

<fieldset>
    <legend><h2>Lista</h2></legend>
    <ul>
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
            - <?php echo "<a href='../../App/Providers/atualizarcomercial.php?id={$comercial['id_comercial']}'>Atualizar</a>" ?></li>
        <?php endforeach; ?>
    </ul>
</fieldset>

<h2>Excluir</h2>
    <form method="post">
        <select name="excluir_id_comercial">
            <?php foreach ($comerciais as $comercial): ?>
                <option value="<?php echo $comercial['id_comercial']; ?>"><?php echo $comercial['identificacao_cliente']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir</button>
        <button><a href="crud.php">Criar</a></button>
    </form>
</body>
</html>