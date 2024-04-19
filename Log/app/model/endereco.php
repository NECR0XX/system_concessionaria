<?php
class EnderecoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Endereço
    public function criarEndereco($endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular) {
        $sql = "INSERT INTO endereco (endereco, numero, complemento, cep, bairro, cidade, telefone, celular) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular]);
    }


    // Model para listar Endereço
    public function listarEnderecos() {
        $sql = "SELECT * FROM endereco";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Endereço
    public function atualizarEndereco($id_endereco, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular){
        $sql = "UPDATE endereco SET endereco = ?, numero = ?, complemento = ?, cep = ?, bairro = ?, cidade = ?, telefone = ?, celular = ?
         WHERE id_endereco = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $id_endereco]);
    }
    
    // Model para deletar Endereço
    public function excluirEndereco($id_endereco) {
        $sql = "DELETE FROM endereco WHERE id_endereco = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_endereco]);
    }
}