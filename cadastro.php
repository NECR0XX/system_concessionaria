<?php
include_once 'config/config.php';
include_once 'App/Controller/EmpresaController.php';
include_once 'Public/Rh/parametros/uf.php';

$query = "SELECT COUNT(*) as total FROM empresa";
$stmt = $pdo->prepare($query);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

if ($resultado['total'] > 0) {
    header("Location: index.php");
    exit;
}

$empresaController = new EmpresaController($pdo);

if ($_SERVER['REQUEST_METHOD'] === 'POST' &&
    isset($_POST['numero_inscricao']) &&
    isset($_POST['data_abertura']) &&
    isset($_POST['razao_social']) &&
    isset($_POST['nome_fantasia']) &&
    isset($_POST['cnpj']) &&
    isset($_POST['porte']) &&
    isset($_POST['capital_social']) &&
    isset($_POST['lagradouro']) &&
    isset($_POST['cep']) &&
    isset($_POST['bairro_restrito']) &&
    isset($_POST['municipio']) &&
    isset($_POST['numero']) &&
    isset($_POST['complemento']) &&
    isset($_POST['telefone']) &&
    isset($_POST['uf']) &&
    isset($_POST['email']) &&
    isset($_POST['senha'])) {
    
    $empresaController->criarEmpresa(
        $_POST['numero_inscricao'],
        $_POST['data_abertura'],
        $_POST['razao_social'],
        $_POST['nome_fantasia'],
        $_POST['cnpj'],
        $_POST['porte'],
        $_POST['capital_social'],
        $_POST['lagradouro'],
        $_POST['cep'],
        $_POST['bairro_restrito'],
        $_POST['municipio'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['telefone'],
        $_POST['uf'],
        $_POST['email'],
        $_POST['senha']
    );

    header("Location: index.php?mensagem=sucesso");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Resources/Css/stylecrud.css">
    <title>Criar Empresa</title>
</head>
<body>
    <a class="home" href="index.php">Voltar</a>

    <h1>Cadastre sua empresa</h1>

    <form method="POST">
        <label>Número Inscrição</label>
        <input type="text" name="numero_inscricao">
        <label>Data Abertura</label>
        <input type="date" name="data_abertura">
        <label>Razão Social</label>
        <input type="text" name="razao_social">
        <label>Nome Fantasia</label>
        <input type="text" name="nome_fantasia">
        <label>CNPJ</label>
        <input type="number" name="cnpj">
        <label>Porte</label>
        <input type="text" name="porte">
        <label>Capital Social</label>
        <input type="text" name="capital_social">
        <label>Lagradouro</label>
        <input type="text" name="lagradouro">
        <label>CEP</label>
        <input type="number" name="cep">
        <label>Bairro Restrito</label>
        <input type="text" name="bairro_restrito">
        <label>Município</label>
        <input type="text" name="municipio">
        <label>Número</label>
        <input type="number" name="numero">
        <label>Complemento</label>
        <input type="text" name="complemento">
        <label>Telefone</label>
        <input type="text" name="telefone">
        <label>UF</label>
        <select name="uf">
            <option value="" disabled selected hidden>Selecione um UF</option>
            <?php
                foreach ($ufs as $sigla => $nome) {
                    echo '<option value="' . $sigla . '">' . $sigla . '</option>';
                }
            ?>
        </select>
        <label>Email</label>
        <input type="email" name="email">
        <label>Senha</label>
        <input type="password" name="senha">

        <button type="submit">Criar</button>
    </form>
</body>
</html>
