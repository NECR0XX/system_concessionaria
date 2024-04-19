<?php
class UserModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar user
    public function criarUser($nome, $email, $senha, $tipo_u) {
        $sql = "INSERT INTO user (nome, email, senha, tipo_u) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $tipo_u]);
    }


    // Model para listar user
    public function listarUsers() {
        $sql = "SELECT * FROM user";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar user
    public function atualizarUser($id, $nome, $email, $senha, $tipo_u){
        $sql = "UPDATE user SET nome = ?, email = ?, senha = ?, tipo_u = ?
         WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome, $email, $senha, $tipo_u, $id]);
    }
    
    // Model para deletar User
    public function excluirUser($id) {
        $sql = "DELETE FROM user WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }
}