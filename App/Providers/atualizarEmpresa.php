<?php
require_once '../../Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/App/Controller/EmpresaController.php';

$empresaController = new EmpresaController($pdo);

$id = $_GET['id'];


if (isset($_GET['id']) &&
    isset($_POST['numero_inscricao']) &&
    isset($_POST['data_abertura']) &&
    isset($_POST['razao_social']) &&
    isset($_POST['nome_fantasia']) &&
    isset($_POST['cnpj']) &&
    isset($_POST['porte']) &&
    isset($_POST['capital_social']) &&
    isset($_POST['logradouro']) &&
    isset($_POST['cep']) &&
    isset($_POST['bairro_restrito']) &&
    isset($_POST['municipio']) &&
    isset($_POST['numero']) &&
    isset($_POST['complemento']) &&
    isset($_POST['telefone']) &&
    isset($_POST['uf']) &&
    isset($_POST['empresa_email']) &&
    isset($_POST['senha'])
) {
    $empresaController->atualizarEmpresa(
        $_GET['id'],
        $_POST['numero_inscricao'],
        $_POST['data_abertura'],
        $_POST['razao_social'],
        $_POST['nome_fantasia'],
        $_POST['cnpj'],
        $_POST['porte'],
        $_POST['capital_social'],
        $_POST['logradouro'],
        $_POST['cep'],
        $_POST['bairro_restrito'],
        $_POST['municipio'],
        $_POST['numero'],
        $_POST['complemento'],
        $_POST['telefone'],
        $_POST['uf'],
        $_POST['empresa_email'],
        $_POST['senha']
    );
    var_dump('chegou aqui');
die;
}
$empresa = $empresaController->listarEmpresaPorID($id);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../public/css/style3.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Resources/Css/adm3.css">
    <link rel="stylesheet" href="../../Resources/Css/stylecrud.css">
    <title>Atualizar Produto</title>
</head>

<body>
    <a href="../../Public/Empresa/index.php">Voltar</a>

    <h1>Atualizar Produto</h1>
    <form method="post">

        <label>Número de Inscricao:</label>
        <input type="text" name="numero_inscricao" value="<?php echo $empresa['numero_inscricao']; ?>" required><br>

        <label>Data de Abertura:</label>
        <input type="date" name="data_abertura" value="<?php echo $empresa['data_abertura']; ?>" required><br>

        <label>Razao Social:</label>
        <input type="text" name="razao_social" value="<?php echo $empresa['razao_social']; ?>" required><br>

        <label>Nome de Fantasia:</label>
        <input type="text" name="nome_fantasia" value="<?php echo $empresa['nome_fantasia']; ?>" required><br>

        <label>CNPJ:</label>
        <input type="text" name="cnpj" value="<?php echo $empresa['cnpj']; ?>" required><br>

        <label>Porte:</label>
        <input type="text" name="porte" value="<?php echo $empresa['porte']; ?>" required><br>

        <label>Capital Social:</label>
        <input type="text" name="capital_social" value="<?php echo $empresa['capital_social']; ?>" required><br>

        <label>Logradouro:</label>
        <input type="text" name="logradouro" value="<?php echo $empresa['logradouro']; ?>" required><br>

        <label>CEP:</label>
        <input type="text" name="cep" value="<?php echo $empresa['cep']; ?>" required><br>

        <label>Bairro Restrito:</label>
        <input type="text" name="bairro_restrito" value="<?php echo $empresa['bairro_restrito']; ?>" required><br>

        <label>Município:</label>
        <input type="text" name="municipio" value="<?php echo $empresa['municipio']; ?>" required><br>

        <label>Número:</label>
        <input type="text" name="numero" value="<?php echo $empresa['numero']; ?>" required><br>

        <label>Complemento:</label>
        <input type="text" name="complemento" value="<?php echo $empresa['complemento']; ?>" required><br>

        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?php echo $empresa['telefone']; ?>" required><br>

        <label>UF da Empresa:</label>
        <input type="text" name="uf" value="<?php echo $empresa['uf']; ?>" required><br>

        <label>Email da Empresa:</label>
        <input type="text" name="empresa_email" value="<?php echo $empresa['empresa_email']; ?>" required><br>

        <label>Senha:</label>
        <input type="text" name="senha" value="<?php echo $empresa['senha']; ?>" required><br>

        <button type="submit">Atualizar</button>
    </form>

</body>

</html>
