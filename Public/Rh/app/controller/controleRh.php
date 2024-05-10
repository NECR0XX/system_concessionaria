<?php
require_once 'C:\xampp\htdocs\system_concessionaria\Public\Rh\app\model\controleRh.php';

class controleRhController {
    private $controleRhModel;

    public function __construct($pdo) {

        $this->controleRhModel = new controleRhModel($pdo);
    }
 
    public function listarControleRhs() {
        return $this->controleRhModel->listarControleRhs();
    }

    public function deletarControleRh($id) {
        $this->controleRhModel->deletarControleRh($id);
    }    

    public function atualizarControleRh($id, $nome, $email, $senha, $tipo, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular,$numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis,$rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes,$vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) { 
        var_dump("Controler Aqui");
        $this->controleRhModel->atualizarControleRh($id, $nome, $email, $senha, $tipo, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular,$numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis,$rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes,$vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia);
    }   

    public function listarRhPorID($id) {
        return $this->controleRhModel->listarRhPorID($id);
    }
}