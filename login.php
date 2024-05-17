<?php
session_start();
require_once 'config/config.php';

// Verifica se o usuário já está logado, redireciona para a página principal se estiver
if(isset($_SESSION["empresa_id"])) {
    header("location: public/index.php");
    exit;
}

// Verifica se o formulário de login foi enviado
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica se o email e a senha foram enviados
    if(isset($_POST['email']) && isset($_POST['senha'])) {

        // Verifique o email e a senha
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // Consulta SQL para verificar as credenciais
        $query = "SELECT empresa_id, email FROM empresa WHERE email = :email AND senha = :senha";
        $stmt = $pdo->prepare($query);
        $stmt->execute(array(':email' => $email, ':senha' => $senha));

        // Verifica se há correspondência de credenciais
        if($stmt->rowCount() == 1) {
            // Credenciais válidas, iniciar sessão e redirecionar para a página principal
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $_SESSION["empresa_id"] = $row['empresa_id'];
            $_SESSION["email"] = $row['email'];
            header("location:  public/index.php");
            exit;
        } else {
            // Credenciais inválidas, exibir mensagem de erro
            $erro = "Email ou senha incorretos.";
        }
    } else {
        // Se email ou senha não foram enviados, exibir mensagem de erro
        $erro = "Por favor, insira email e senha.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="senha">Senha:</label><br>
        <input type="password" id="senha" name="senha"><br><br>
        <input type="submit" value="Login">
    </form>
    <?php if(isset($erro)) { echo "<p>$erro</p>"; } ?>
</body>
</html>
