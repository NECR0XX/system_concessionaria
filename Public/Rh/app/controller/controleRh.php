<?php
require_once '../model/controleRh.php';

class controleRhController {
    private $controleRhModel;

    public function __construct($pdo) {

        $this->controleRhModel = new controleRhModel($pdo);
    }

    public function criarControleRh($nome, $email, $senha, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $tipo) {
        $this->controleRhModel->criarControleRh($nome, $email, $senha, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $tipo);
    }

    public function exibirListaControleRh() {
        $rhs = $this->rhModel->listarControleRh();
        include '';
    }

    public function atualizarControleRh($id, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) {
        $this->rhModel->atualizarControleRh($id, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia);
    }
    
    public function excluirControleRh ($id) {
        $this->rhModel->excluirControleRh($id);
    }
}