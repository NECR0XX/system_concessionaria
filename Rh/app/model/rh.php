<?php
class RhModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar rh
    public function criarRh($numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) {
        $sql = "INSERT INTO rh (numero_ctps, serie, uf_rh, data_expedicao_ctps, pis, data_cadastro_pis, rg_rh, data_expedicao_rg, cpf_rh, titulo_eleitor, zona, secao, dependentes, vale_transporte, horario_trabalho, entrada, intervalo, saida, cargo, data_admissao, data_exame_medico, experiencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia]);
    }


    // Model para listar rh
    public function listarRhs() {
        $sql = "SELECT * FROM rh";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Model para atualizar rh
    public function atualizarRh($id_rh, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia){
        $sql = "UPDATE rh SET numero_ctps = ?, serie = ?, uf_rh = ?, data_expedicao_ctps = ?, pis = ?, data_cadastro_pis = ?, rg_rh = ?, data_expedicao_rg = ?, cpf_rh = ?, titulo_eleitor = ?, zona = ?, secao = ?, dependentes = ?, vale_transporte = ?, horario_trabalho = ?, entrada = ?, intervalo = ?, saida = ?, data_exame_medico = ?, experiencia = ?
        WHERE id_rh = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $id_rh]);
    }
    
    // Model para deletar Rh
    public function excluirRh($id_rh) {
        $sql = "DELETE FROM rh WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id_rh]);
    }
}