<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/App/Controller/ContasController.php';

// conta
$contasController = new contasController($pdo);

if (isset($_POST['fornecedores']) && 
    isset($_POST['salarios_benef']) &&
    isset($_POST['aluguel']) &&
    isset($_POST['contas_publicas']) &&
    isset($_POST['impostos']) &&
    isset($_POST['emprestimos']) &&
    isset($_POST['manutencao']) &&
    isset($_POST['seguros']) &&
    isset($_POST['marketing']) &&
    isset($_POST['despesas_adm']) &&
    isset($_POST['logistica']) &&
    isset($_POST['pesquisa']) &&
    isset($_POST['garantia'])) 
{
    $contasController->criarconta($_POST['fornecedores'], $_POST['salarios_benef'], $_POST['aluguel'], $_POST['contas_publicas'], $_POST['impostos'], $_POST['emprestimos'], $_POST['manutencao'], $_POST['seguros'], $_POST['marketing'], $_POST['despesas_adm'], $_POST['logistica'], $_POST['pesquisa'], $_POST['garantia']);
}

// Atualiza conta
if (isset($_POST['fornecedores_atualizar']) && 
    isset($_POST['salarios_benef_atualizar']) &&
    isset($_POST['aluguel_atualizar']) &&
    isset($_POST['contas_publicas_atualizar']) &&
    isset($_POST['impostos_atualizar']) &&
    isset($_POST['emprestimos_atualizar']) &&
    isset($_POST['manutencao_atualizar']) &&
    isset($_POST['seguros_atualizar']) &&
    isset($_POST['marketing_atualizar']) &&
    isset($_POST['despesas_adm_atualizar']) &&
    isset($_POST['logistica_atualizar']) &&
    isset($_POST['pesquisa_atualizar']) &&
    isset($_POST['garantia_atualizar'])) 
{
    $contaController->atualizarconta($_POST['id_conta'], $_POST['fornecedores_atualizar'], $_POST['salarios_benef_atualizar'], $_POST['aluguel_atualizar'], $_POST['contas_publicas_atualizar'], $_POST['impostos_atualizar'], $_POST['emprestimos_atualizar'], $_POST['manutencao_atualizar'], $_POST['seguros_atualizar'], $_POST['marketing_atualizar'], $_POST['despesas_adm_atualizar'], $_POST['logistica_atualizar'], $_POST['pesquisa_atualizar'], $_POST['garantia_atualizar']);
}

// Excluir conta
if (isset($_POST['excluir_id_conta'])) {
    $contasController->excluirconta($_POST['excluir_id_conta']);
}

$contas = $contasController->listarcontas();
?>


<!DOCTYPE html>
<html>
<head>
    <title>CRUD com MVC e PDO</title>
</head>
<body>
    <h1>contas</h1>
    <form method="post">
        <!-- conta -->
        <input type="number" name="fornecedores" placeholder="Fornecedores" required>
        <input type="number" name="salarios_benef" placeholder="Salários e Benefícios" required>
        <input type="number" name="aluguel" placeholder="Aluguel" required>
        <input type="number" name="contas_publicas" placeholder="Contas Públicas" required>
        <input type="number" name="impostos" placeholder="Impostos" required>
        <input type="number" name="emprestimos" placeholder="Empréstimos" required>
        <input type="number" name="manutencao" placeholder="Manutenção" required>
        <input type="number" name="seguros" placeholder="Seguros" required>
        <input type="number" name="marketing" placeholder="Marketing" required>
        <input type="number" name="despesas_adm" placeholder="Despesas Administrativas" required>
        <input type="number" name="logistica" placeholder="Logística" required>
        <input type="number" name="pesquisa" placeholder="Pesquisa" required>
        <input type="number" name="garantia" placeholder="Garantia" required>
        <button type="submit">Adicionar Conta</button>
    </form>
    <!-- exibir conta -->
    <fieldset>
        <legend><h2>Lista de contas</h2></legend>
            <ul>
            <?php foreach ($contas as $conta): ?>
                <li>ID: <?php echo $conta['id_conta']; ?> - Fornecedores: <?php echo $conta['fornecedores']; ?> - Salários e Benefícios: <?php echo $conta['salarios_benef']; ?> - Aluguel: <?php echo $conta['aluguel']; ?> - Contas Públicas: <?php echo $conta['contas_publicas']; ?> - Impostos: <?php echo $conta['impostos']; ?> - Empréstimos: <?php echo $conta['emprestimos']; ?> - Manutenção: <?php echo $conta['manutencao']; ?> - Seguros: <?php echo $conta['seguros']; ?> - Marketing: <?php echo $conta['marketing']; ?> - Despesas Administrativas: <?php echo $conta['despesas_adm']; ?> - Logística: <?php echo $conta['logistica']; ?> - Pesquisa: <?php echo $conta['pesquisa']; ?> - Garantia: <?php echo $conta['garantia']; ?></li>
            <?php endforeach; ?>
            </ul>
    </fieldset>

    <!-- atualizar conta -->

<h2>Atualizar conta</h2>
    <form method="post">
        <select name="id_conta">
        <?php foreach ($contas as $conta): ?>
                                <option value="<?php echo $conta['id_conta']; ?>"><?php echo $conta['id_conta']; ?></option>
                                <?php endforeach; ?>
        </select>
                <input type="text" name="fornecedores_atualizar" placeholder="Novos Fornecedores">
                <input type="text" name="salarios_benef_atualizar" placeholder="Novos Salários e Benefícios">
                <input type="text" name="aluguel_atualizar" placeholder="Novo Aluguel">
                <input type="text" name="contas_publicas_atualizar" placeholder="Novas Contas Públicas">
                <input type="text" name="impostos_atualizar" placeholder="Novos Impostos">
                <input type="text" name="emprestimos_atualizar" placeholder="Novos Empréstimos">
                <input type="text" name="manutencao_atualizar" placeholder="Nova Manutenção">
                <input type="text" name="seguros_atualizar" placeholder="Novos Seguros">
                <input type="text" name="marketing_atualizar" placeholder="Novo Marketing">
                <input type="text" name="despesas_adm_atualizar" placeholder="Novas Despesas Administrativas">
                <input type="text" name="logistica_atualizar" placeholder="Nova Logística">
                <input type="text" name="pesquisa_atualizar" placeholder="Nova Pesquisa">
                <input type="text" name="garantia_atualizar" placeholder="Nova Garantia">
                <button type="submit">Atualizar Conta</button>

    </form>

    <h2>Excluir conta</h2>
    <form method="post">
        <select name="excluir_id_conta">
            <?php foreach ($contas as $conta): ?>
                <option value="<?php echo $conta['id_conta']; ?>"><?php echo $conta['id_conta']; ?></option>
            <?php endforeach; ?>
        </select>
        <button type="submit">Excluir conta</button>
    </form><br><br><br><br>

</form>
</body>
</html>