
<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ContasController.php';

$contasController = new contasController($pdo);
$contas = $contasController->listarcontas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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