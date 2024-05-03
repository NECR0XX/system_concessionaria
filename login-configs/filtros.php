<?php 
    //Adm=1 Gerente=2 Func Comer=3 Rh=4 Func Comum=5
function FiltroNav() {
    //ADM
    if ($_SESSION['usuarioNiveisAcessoId'] === 1) {
        echo '<li><button class="links"><a href="#">Controle de pessoas</a></button></li>';
        echo '<li><button class="links"><a href="Fiscal/crud.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="Estoque/crud.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="Frota/crud.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="#">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="Comercial/crud.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="../Rh/rh.php">RH</a></button></li>';
    }

    //GERENTE
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 2) {
        echo '<li><button class="links"><a href="#">Controle de pessoas</a></button></li>';
        echo '<li><button class="links"><a href="Fiscal/crud.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="Estoque/crud.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="Frota/crud.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="#">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="Comercial/crud.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="Rh/rh.php">RH</a></button></li>';
    }

    //Funcionario Comercial
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 3){ 
        echo '<li><button class="links"><a href="Fiscal/crud.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="Estoque/crud.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="Frota/crud.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="#">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="Comercial/crud.php">Comercial</a></button></li>';
    }

    //RH
    elseif($_SESSION['usuarioNiveisAcessoId'] === 4) {        
        echo '<li><button class="links"><a href="Rh/rh.php">RH</a></button></li>';
        }

    //Funcionario Comum
    elseif ($_SESSION['usuarioNiveisAcessoId'] === 5) {
        echo '<li><button class="links"><a href="#">Controle de pessoas</a></button></li>';
        echo '<li><button class="links"><a href="Fiscal/crud.php">Controle fiscal</a></button></li>';
        echo '<li><button class="links"><a href="Estoque/crud.php">Controle de estoque</a></button></li>';
        echo '<li><button class="links"><a href="Frota/crud.php">Controle de frota</a></button></li>';
        echo '<li><button class="links"><a href="#">Despesas</a></button></li>';
        echo '<li><button class="links"><a href="Comercial/crud.php">Comercial</a></button></li>';
        echo '<li><button class="links"><a href="Rh/rh.php">RH</a></button></li>';
    }
}

?>