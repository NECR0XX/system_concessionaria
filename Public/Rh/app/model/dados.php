<?php
class DadoUModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar Endereço
    public function criarDado_U($nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao) {
        $sql = "INSERT INTO dados_usuario (nome_pai, nome_mae, naturalidade, uf, data_nascimento, deficiente_fisico, raca_cor, sexo, estado_civil, grau_instrucao) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao]);
    }


    // Model para listar Endereço
    public function listarDadoUs() {
        $sql = "SELECT * FROM dados_usuario";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar Endereço
    public function atualizarDadoU($id_dado_u, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao){
        $sql = "UPDATE dados_usuario SET nome_pai = ?, nome_mae = ?, naturalidade = ?, uf = ?, data_nascimento = ?, raca_cor = ?, sexo = ?, estado_civil = ?, grau_instrucao = ?
         WHERE id_dado_u = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $id_dado_u]);
    }
    
    // Model para deletar Endereço
    public function excluirDadoU($id_dado_u) {
        $sql = "DELETE FROM dados_usuario WHERE id_dado_u = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_dado_u]);
    }
}