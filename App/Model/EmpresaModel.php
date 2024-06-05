<?php
class EmpresaModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function criarEmpresa($numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $logradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha) {
        $sql = "INSERT INTO empresa (numero_inscricao, data_abertura, razao_social, nome_fantasia, cnpj, porte, capital_social, logradouro, cep, bairro_restrito, municipio, numero, complemento, telefone, uf, empresa_email, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([ $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $logradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha]);
        header("Location: ../../Public/Empresa/index.php");
        exit;
    }

    public function listarEmpresas() {
        $sql = "SELECT * FROM empresa";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarEmpresa($empresa_id, $numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $logradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha) {
        $sql = "UPDATE empresa SET numero_inscricao = ?, data_abertura = ?, razao_social = ?, nome_fantasia = ?, cnpj = ?, porte = ?, capital_social = ?, logradouro = ?, cep = ?, bairro_restrito = ?, municipio = ?, numero = ?, complemento = ?, telefone = ?, uf = ?, empresa_email = ?, senha = ? WHERE empresa_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero_inscricao, $data_abertura, $razao_social, $nome_fantasia, $cnpj, $porte, $capital_social, $logradouro, $cep, $bairro_restrito, $municipio, $numero, $complemento, $telefone, $uf, $empresa_email, $senha, $empresa_id]);
        
        // Redirecionar imediatamente após a execução do SQL
        header("Location: ../../Public/Empresa/index.php");
        exit;
    }
    

    public function deletarEmpresa($empresa_id) {
        $sql = "DELETE FROM empresa WHERE empresa_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$empresa_id]);
    }

    public function listarEmpresaPorID($empresa_id) {
        $sql = "SELECT * FROM empresa WHERE empresa_id = :empresa_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':empresa_id', $empresa_id, PDO::PARAM_INT);
        $stmt->execute();
    
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
} 