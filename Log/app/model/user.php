<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar user
    public function criarUser($id, $nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u) {
        $sql = "INSERT INTO user (nome_c, rg, cpf, data_n, nacionalidade, estado_c, endereco, telefone, email, senha, cargo, data_ad, tipo_contrato, salario, tipo_u) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id, $nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u]);
    }


    // Model para listar user
    public function listarUsers() {
        $sql = "SELECT * FROM user";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar user
    public function atualizarUser($id, $nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u){
        $sql = "UPDATE user SET nome_c = ?, rg = ?, cpf = ?, data_n = ?, nacionalidade = ?, estado_c = ?, endereco = ?, telefone = ?, email = ?, senha = ?, cargo = ?, data_ad = ?, tipo_contrato = ?, salario = ?, tipo_u = ?
         WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_c, $rg, $cpf, $data_n, $nacionalidade, $estado_c, $endereco, $telefone, $email, $senha, $cargo, $data_ad, $tipo_contrato, $salario, $tipo_u, $id]);
    }
    
    // Model para deletar User
    public function excluirUser($id) {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}