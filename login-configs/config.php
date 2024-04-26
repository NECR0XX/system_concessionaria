<?php
session_start();
require_once '../config/config.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];




    $query = "SELECT * FROM usuarios WHERE (email = :email or nome = :email) AND senha = :senha";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    



    if ($resultado) {
      
        $_SESSION['usuarioId'] = $resultado['id'];
        $_SESSION['usuarioEmail'] = $resultado['email'];
        $_SESSION['usuarioNomedeUsuario'] = $resultado['nome'];
        $_SESSION['usuarioNiveisAcessoId'] = $resultado['tipo'];
        $_SESSION['nao_autenticado'] = false;
  
        if ($_SESSION['usuarioNiveisAcessoId'] == 1) {
            header('Location: ../Public/pg.php');
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == 2) {
            header("Location: ../Public/pg.php");
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == 3) {
            header("Location: ../Public/pg.php");
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == 4) {
            header("Location: ../Public/pg.php");
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == 5) {
            header("Location: ../Public/pg.php");
        } elseif ($_SESSION['usuarioNiveisAcessoId'] == 0) {
            header("Location: ../Public/index.php");
        }
        
    } else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: ../Public/login.php');
        exit();
    }
}
