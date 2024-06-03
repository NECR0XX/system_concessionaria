<?php
class EstoqueModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function criarEstoque($numero_referencia, $categoria, $quantidade, $preco_unitario, $fornecedor, $localizacao, $reabastecimento_minimo, $validade, $observacoes, $imagem) {
        $sql = "INSERT INTO Estoque (numero_referencia, categoria, quantidade, preco_unitario, fornecedor, localizacao, reabastecimento_minimo, validade, observacoes, imagem) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero_referencia, $categoria, $quantidade, $preco_unitario, $fornecedor, $localizacao, $reabastecimento_minimo, $validade, $observacoes, $imagem]);
        header("Location: index.php");
        exit;
    }

    public function listarEstoque() {
        $sql = "SELECT * FROM Estoque";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarEstoque($id_estoque, $numero_referencia, $categoria, $quantidade, $preco_unitario, $fornecedor, $localizacao, $reabastecimento_minimo, $validade, $observacoes, $imagem) {
        $sql = "UPDATE Estoque SET numero_referencia = ?, categoria = ?, quantidade = ?, preco_unitario = ?, fornecedor = ?, localizacao = ?, reabastecimento_minimo = ?, validade = ?, observacoes = ?, imagem = ? WHERE id_estoque = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero_referencia, $categoria, $quantidade, $preco_unitario, $fornecedor, $localizacao, $reabastecimento_minimo, $validade, $observacoes, $imagem, $id_estoque]);
        header("Location: index.php");
        exit;
    }

    public function excluirEstoque($id_estoque) {
        $sql = "DELETE FROM Estoque WHERE id_estoque = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_estoque]); 
    }
}
?>
