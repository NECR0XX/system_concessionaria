<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Config/config.php';
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/controller/controleRh.php';

function FiltroNav() {
    //ADM
    if ($_SESSION['usuarioNiveisAcessoId'] === 1) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Empresa/index.php">Empresa</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Relat/index.php">Relatório</a></button></li>';
    }    

    //GERENTE
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 2) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Relat/index.php">Relatório</a></button></li>';
    }

    //Funcionario Comercial
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Relat/index.php">Relatório</a></button></li>';
    }

    //RH
    elseif($_SESSION['usuarioNiveisAcessoId'] === 4) {        
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Relat/index.php">Relatório</a></button></li>';
        }

    //Funcionario Comum
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 5) {
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Comercial/index.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Contas/index.php">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Fiscal/index.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Frota/index.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Estoque/index.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Rh/index.php">RH</a></button></li>';
        echo '<li><button class="links"><a href="http://localhost/system_concessionaria/Public/Relat/index.php">Relatório</a></button></li>';
    }
}
//FILTRO DE ACESSO AS PÁGINAS

function FiltroComercial() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        header('Location: ../pg.php');
    }
}

function FiltroRh() {

    if ($_SESSION['usuarioNiveisAcessoId'] === 4){ 
        header('Location: ../pg.php');
    }
}


function FiltroEmpresa() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 1){ 
        header('Location: ../pg.php');
    }
}

//FILTRO DE ACESSO AS FUNÇÔES

function FiltroCadastroRh() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"> <a href="register.php">CADASTRAR NO RH</a></button></div>';
    }
}

function FiltroCadastroComercial() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR PRODUTO</a></button></div>';
    }
}

function FiltroCadastroContas() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR DESPESAS</a></button></div>';
    }
}

function FiltroCadastroEstoque() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR PRODUTO</a></button></div>';
    }
}

function FiltroCadastroFrota() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR VEÍCULO</a></button></div>';
    }
}

function FiltroCadastroFiscal() {

    if ($_SESSION['usuarioNiveisAcessoId'] != 5){ 
        echo '<div class="butespaco"><button class="but"><a href="crud.php">CADASTRAR</a></button></div>';
    }
}

?>