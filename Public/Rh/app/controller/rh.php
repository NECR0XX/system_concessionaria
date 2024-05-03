<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Rh/app/model/rh.php';

class RhController {
    private $rhModel;

    public function __construct($pdo) {

        $this->rhModel = new RhModel($pdo);
    }

    public function criarRh($numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) {
        $this->rhModel->criarRh($numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia);
    }

    public function listarRhs() {
        return $this->rhModel->listarRhs();
    }

    public function exibirListaRhs() {
        $rhs = $this->rhModel->listarRhs();
        include '../view/listar_rh.php';
    }

    public function atualizarRh($id, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) {
        $this->rhModel->atualizarRh($id, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia);
    }
    
    public function excluirRh ($id) {
        $this->rhModel->excluirRh($id);
    }

}