<?php
require_once 'C:/xampp/htdocs/system_concessionaria/Log/app/model/dados.php';

class DadoUController {
    private $dadosUModel;

    public function __construct($pdo) {

        $this->dadosUModel = new DadoUModel($pdo);
    }

    public function criarDado_U($nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao) {
        $this->dadosUModel->criarDado_U($nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao);
    }

    public function listarDadoUs() {
        return $this->dadosUModel->listarDadoUs();
    }

    public function exibirListaDadoUs() {
        $dadosUs = $this->dadosUModel->listarDadoUs();
        include '';
    }

    public function atualizarDadoU($id_dados_u, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao) {
        $this->dadosUModel->atualizarDadoU($id_dados_u, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao);
    }
    
    public function excluirDadoU ($id_dados_u) {
        $this->dadosUModel->excluirDadoU($id_dados_u);
    }

}