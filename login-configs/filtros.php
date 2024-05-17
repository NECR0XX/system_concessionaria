<?php
function FiltroNav() {
    //ADM
    if ($_SESSION['usuarioNiveisAcessoId'] === 1) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
    }

    //GERENTE
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 2) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
    }

    //Funcionario Comercial
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
    }

    //RH
    elseif($_SESSION['usuarioNiveisAcessoId'] === 4) {        
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
        }

    //Funcionario Comum
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 5) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
    }
}
//FILTRO DE ACESSO AS PÁGINAS

function FiltroPessoas() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        header('Location: ../pg.php');
    }
}

function FiltroComercial() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroContas() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroEmpresa() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroEstoque() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroFiscal() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroFrota() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}

function FiltroRh() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        header('Location: ../pg.php');
    }
}

//FILTRO DE ACESSO AS FUNÇÔES

function FiltroCadastro() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<button type="submit">Criar</button>';
    }
}

function FiltroAtualizar() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '';
    }
}

function FiltroDeletar() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '';
    }
}
?>