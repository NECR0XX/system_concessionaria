<?php
class controleRhModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Model para criar rh
    public function criarControleRh($nome, $email, $senha, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $tipo) {
        $sql = "INSERT INTO usuarios
        INNER JOIN rh
        INNER JOIN endereco
        INNER JOIN dados_usuario ($nome, $email, $senha, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $tipo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([]);
    }
}