<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Public/Rh/app/model/endereco.php';

class EnderecoController {
    private $enderecoModel;

    public function __construct($pdo) {

        $this->enderecoModel = new EnderecoModel($pdo);
    }

    public function criarEndereco($endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular) {
        $this->enderecoModel->criarEndereco($endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular);
    }

    public function listarEnderecos() {
        return $this->enderecoModel->listarEnderecos();
    }

    public function exibirListaEnderecos() {
        $enderecos = $this->enderecoModel->listarEnderecos();
        include '';
    }

    public function atualizarEndereco($id_endereco, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular) {
        $this->enderecoModel->atualizarEndereco($id_endereco, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular);
    }
    
    public function excluirEndereco ($id_endereco) {
        $this->enderecoModel->excluirEndereco($id_endereco);
    }

}