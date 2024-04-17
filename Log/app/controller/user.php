<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/model/user.php';

class UserController {
    private $userModel;

    public function __construct($pdo) {

        $this->userModel = new UserModel($pdo);
    }

    public function criarUser($nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u) {
        $this->userModel->criarUser($nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u);
    }

    public function listarUsers() {
        return $this->userModel->listarUsers();
    }

    public function exibirListaUsers() {
        $users = $this->userModel->listarUsers();
        include '';
    }

    public function atualizarUser($id, $nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u) {
        $this->userModel->atualizarUser($id, $nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u);
    }
    
    public function excluirUser ($id) {
        $this->userModel->excluirUser($id);
    }

}