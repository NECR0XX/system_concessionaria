<?php
    session_start(); // Inicie a sessão no início do arquivo

    require_once '../config/config.php';
    require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/controller/user.php';

    $userController = new UserController($pdo);

    if (isset($_POST['nome_c']) && isset($_POST['rg']) && isset($_POST['cpf']) && isset($_POST['data_n']) && isset($_POST['nacionalidade']) && isset($_POST['estado_c']) && isset($_POST['endereco']) && isset($_POST['telefone']) && isset($_POST['email']) && isset($_POST['senha'])  && isset($_POST['cargo'])  && isset($_POST['data_ad']) && isset($_POST['tipo_contrato']) && isset($_POST['salario']) && isset($_POST['tipo_u'])) {
        $userController->criarUser($_POST['nome_c'], $_POST['rg'], $_POST['cpf'], $_POST['data_n'], $_POST['nacionalidade'], $_POST['estado_c'], $_POST['endereco'], $_POST['telefone'], $_POST['email'], $_POST['senha'], $_POST['cargo'], $_POST['data_ad'], $_POST['tipo_contrato'], $_POST['salario'], $_POST['tipo_u']);
        header('Location: register.php'); // Redirecione para a página de cadastro
        exit();
    }
    ?>

            <form method="post">
            <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome">

                <label for="rg">RG:</label>
                <input type="text" name="rg" id="rg">

                <label for="cpf">CPF:</label>
                <input type="text" name="cpf" id="cpf">

                <label for="data_n">Data de Nascimento:</label>
                <input type="date" name="data_n" id="data_n">

                <label for="nacionalidade">Nacionalidade:</label>
                <input type="text" name="nacionalidade" id="nacionalidade">

                <label for="estado_c">Estado Civil:</label>
                <input type="radio" name="estado_c" id="Solteiro">
                <label>Solteiro</label>
                <input type="radio" name="estado_c" id="Casado">
                <label>Casado</label>
                <input type="radio" name="estado_c" id="Separado">
                <label>Separado</label>
                <input type="radio" name="estado_c" id="Divorciádo">
                <label>Divorciádo</label>
                <input type="radio" name="estado_c" id="Viúvo">
                <label>Viúvo</label>
                

                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco">

                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone">

                <label for="email">Email:</label>
                <input type="email" name="email" id="email">

                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha">

                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo" id="cargo">

                <label for="data_ad">Data de Admissão:</label>
                <input type="date" name="data_ad" id="data_ad">

                <label for="tipo_contrato">Tipo de Contrato:</label>
                <input type="text" name="tipo_contrato" id="tipo_contrato">

                <label for="salario">Salário:</label>
                <input type="number" name="salario" id="salario">

                <label for="tipo_u">Tipo de Usuário:</label>
                <input type="radio" name="tipo_u" id="1">
                <label>Adiministrador</label>
                <input type="radio" name="tipo_u" id="2">
                <label>Gerente</label>
                <input type="radio" name="tipo_u" id="3">
                <label>Funcionário</label>
                <input type="radio" name="tipo_u" id="4">
                <label>Comercial</label>
                <input type="radio" name="tipo_u" id="5">
                <label>Funcionário Comun</label>
                
                
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