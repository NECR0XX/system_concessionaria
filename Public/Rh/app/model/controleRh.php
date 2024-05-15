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

    public function deletarControleRh($id) {
        $sql = "DELETE usuarios, dados_usuario, endereco, rh
        FROM usuarios
        INNER JOIN dados_usuario ON usuarios.id = dados_usuario.usuario_id
        INNER JOIN endereco ON usuarios.id = endereco.usuario_id
        INNER JOIN rh ON usuarios.id = rh.usuario_id WHERE usuarios.id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
    }

    public function atualizarControleRh($id, $nome, $email, $senha, $tipo, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular,$numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis,$rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes,$vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia) {
    $sql = "UPDATE usuarios
    INNER JOIN dados_usuario ON usuarios.id = dados_usuario.usuario_id
    INNER JOIN endereco ON usuarios.id = endereco.usuario_id
    INNER JOIN rh ON usuarios.id = rh.usuario_id
    SET usuarios.nome = ?, usuarios.email = ?, usuarios.senha = ?, usuarios.tipo = ?, dados_usuario.nome_pai = ?, dados_usuario.nome_mae = ?, dados_usuario.naturalidade = ?,  dados_usuario.uf = ?, dados_usuario.data_nascimento = ?, dados_usuario.deficiente_fisico = ?,  dados_usuario.raca_cor = ?, dados_usuario.sexo = ?, dados_usuario.estado_civil = ?,  dados_usuario.grau_instrucao = ?, endereco.endereco = ?, endereco.numero = ?, endereco.complemento = ?,  endereco.cep = ?, endereco.bairro = ?, endereco.cidade = ?, endereco.telefone = ?, endereco.celular = ?, rh.numero_ctps = ?, rh.serie = ?, rh.uf_rh = ?, rh.data_expedicao_ctps = ?, rh.pis = ?,  rh.data_cadastro_pis = ?, rh.rg_rh = ?, rh.data_expedicao_rg = ?, rh.cpf_rh = ?, rh.titulo_eleitor = ?,  rh.zona = ?, rh.secao = ?, rh.dependentes = ?, rh.vale_transporte = ?, rh.horario_trabalho = ?,  rh.entrada = ?, rh.intervalo = ?, rh.saida = ?, rh.cargo = ?, rh.data_admissao = ?,  rh.data_exame_medico = ?, rh.experiencia = ?
    WHERE usuarios.id = ?";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$nome, $email, $senha, $tipo, $nome_pai, $nome_mae, $naturalidade, $uf, $data_nascimento, $deficiente_fisico, $raca_cor, $sexo, $estado_civil, $grau_instrucao, $endereco, $numero, $complemento, $cep, $bairro, $cidade, $telefone, $celular, $numero_ctps, $serie, $uf_rh, $data_expedicao_ctps, $pis, $data_cadastro_pis, $rg_rh, $data_expedicao_rg, $cpf_rh, $titulo_eleitor, $zona, $secao, $dependentes, $vale_transporte, $horario_trabalho, $entrada, $intervalo, $saida, $cargo, $data_admissao, $data_exame_medico, $experiencia, $id]);
}

public function listarRhPorID($id) {
    $sql = "SELECT dados_usuario.*, endereco.*, rh.*, usuarios.*
    FROM usuarios
    INNER JOIN dados_usuario ON usuarios.id = dados_usuario.usuario_id
    INNER JOIN endereco ON usuarios.id = endereco.usuario_id
    INNER JOIN rh ON usuarios.id = rh.usuario_id
    WHERE usuarios.id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
}


}