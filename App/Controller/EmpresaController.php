<?php
require_once 'C:/xampp/htdocs/system_concessionaria/App/Model/EmpresaModel.php';

class EmpresaController {
    private $empresaModel;

    public function __construct($pdo) {
        $this->empresaModel = new EmpresaModel($pdo);
    }

    public function criarEmpresa($numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $email, $senha) {
        $this->empresaModel->criarEmpresa($numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $email, $senha);
    }

    public function atualizarEmpresa($empresa_id, $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $email, $senha) {
    $this->empresaModel->atualizarEmpresa($empresa_id, $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $email, $senha);
    }

    public function deletarEmpresa($empresa_id) {
        $this->empresaModel->deletarEmpresa($empresa_id);
    }
}
?>