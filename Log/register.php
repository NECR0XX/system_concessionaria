<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once '../config/config.php';
    require_once 'C:/xampp/htdocs/system-concessionaria/';

    $userController = new UserController($pdo);

    if (isset($_POST['nome']) && isset($_POST['nome_u']) && isset($_POST['email']) && isset($_POST['senha'])) {
        $userController->criarUser($_POST['nome'], $_POST['nome_u'], $_POST['email'], $_POST['senha']);
        header('Location: cadastro.php'); // Redirecione para a página de cadastro
        exit();
    }
    ?>

            <form method="post">
                <input type="text" name="nome" placeholder="Nome Completo" required>
                <input type="text" name="nome_u" placeholder="Nome de Usuario" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="senha" placeholder="Senha" required>
                
                <button type="submit">  Criar</button>

                <?php
                if (isset($_SESSION['mensagem'])) {
                    echo '<div class="alert"><p>' . $_SESSION['mensagem'] . '</p></div>';
                    unset($_SESSION['mensagem']);
                }
                ?>
            </form>

</body>
</html>