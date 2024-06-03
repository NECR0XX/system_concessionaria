<?php
class EmpresaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarEmpresa( $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha) {
        $sql = "INSERT INTO empresa (numero_inscricao, data_abertura, razao_social, nome_fantasia, cnpj, porte, capital_social, lagradouro, cep, bairro_restrito, municipio, numero, complemento, telefone, uf, empresa_email, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha]);
        header("Location: index.php");
        exit;
    }

    public function atualizarEmpresa($empresa_id, $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha) {
    $sql = "UPDATE empresa SET numero_inscricao = ?, data_abertura = ?, razao_social = ?, nome_fantasia = ?, cnpj = ?, porte = ?, capital_social = ?, lagradouro = ?, bairro_restrito = ?, municipio = ?, numero = ?, complemento = ?, telefone = ?, uf = ?, empresa_email = ?, senha = ? WHERE id_conta = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $lagradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha, $empresa_id]);
    header("Location: index.php");
        exit;
    }

    public function deletarEmpresa($empresa_id) {
        $sql = "DELETE FROM empresa WHERE empresa_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$empresa_id]);
    }
}