<?php
class controleRhModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para listar o controle de Rh 
    public function listarControleRhs() {
        $sql = "SELECT dados_usuario.*, endereco.*, rh.*, usuarios.*
                FROM usuarios
                INNER JOIN dados_usuario ON usuarios.id = dados_usuario.usuario_id
                INNER JOIN endereco ON usuarios.id = endereco.usuario_id
                INNER JOIN rh ON usuarios.id = rh.usuario_id";
        
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deletarControleRh($usuario_id) {
        $sql = "DELETE FROM usuarios
        INNER JOIN dados_usuario ON usuarios.id = dados_usuario.usuario_id
        INNER JOIN endereco ON usuarios.id = endereco.usuario_id
        INNER JOIN rh ON usuarios.id = rh.usuario_id WHERE usuarios.id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$usuario_id]);
    }
}