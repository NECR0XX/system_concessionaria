<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';
require_once '../../App/Controller/ContasController.php';
require_once '../../App/Controller/EstoqueController.php';
require_once '../../App/Controller/FiscalController.php';
require_once '../../App/Controller/FrotaController.php';
require_once '../Rh/app/controller/controleRh.php';

$comercialController = new ComercialController($pdo);
$comerciais = $comercialController->listarComercials();

$contasController = new ContasController($pdo);
$contas = $contasController->listarContas();

$estoqueController = new EstoqueController($pdo);
$estoques = $estoqueController->listarEstoque();

$fiscalController = new FiscalController($pdo);
$fiscals = $fiscalController->listarFiscals();

$frotaController = new FrotaController($pdo);
$frotas = $frotaController->listarFrotas();

$controleRhModel = new controleRhModel($pdo);
$controles = $controleRhModel->listarControleRhs();

$html = '<h2>Relatório do Comercial</h2>
<ul>';
foreach ($comerciais as $comercial) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $comercial['id_comercial'] 
    . ' <br><i><strong>Cliente:</strong></i> ' . $comercial['nome_cliente'] 
    . ' <br><i><strong>Telefone do Cliente:</strong></i> ' . $comercial['telefone_cliente'] 
    . ' <br><i><strong>Email do Cliente:</strong></i> ' . $comercial['email_cliente'] 
    . ' <br><i><strong>Identificação do Cliente:</strong></i> ' . $comercial['identificacao_cliente'] 
    . ' <br><i><strong>Marca do Carro:</strong></i> ' . $comercial['marca_car'] 
    . ' <br><i><strong>Modelo do Carro:</strong></i> ' . $comercial['modelo_car'] 
    . ' <br><i><strong>Características do Carro:</strong></i> ' . $comercial['caracteristicas_car'] 
    . ' <br><i><strong>Preço do Carro:</strong></i> ' . $comercial['preco_car'] 
    . ' <br><i><strong>Número do Chassi:</strong></i> ' . $comercial['numero_chassi'] 
    . ' <br><i><strong>Data da Venda:</strong></i> ' . $comercial['data_venda'] 
    . ' <br><i><strong>Tipo de Transação:</strong></i> ' . $comercial['tipo_transacao'] 
    . ' <br><i><strong>Forma de Pagamento:</strong></i> ' . $comercial['forma_paga'] 
    . ' <br><i><strong>Nota Fiscal:</strong></i> ' . $comercial['nota_fiscal'] 
    . ' <br><i><strong>Valor Total:</strong></i> ' . $comercial['valor_total'] 
    . ' <br><i><strong>Canal de Venda:</strong></i> ' . $comercial['canal_venda'] 
    . ' <br><i><strong>Vendedor:</strong></i> ' . $comercial['vendedor'] 
    . ' <br><i><strong>Estado da Transação:</strong></i> ' . $comercial['estado_transacao'] . '</li>';
}
$html .= '</ul>

<h2>Relatório das Despesas</h2>
<ul>';
foreach ($contas as $conta) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $conta['id_conta'] 
    . ' <br><i><strong>Fornecedores:</strong></i> ' . $conta['fornecedores'] 
    . ' <br><i><strong>Salário/Benefícios:</strong></i> ' . $conta['salarios_benef'] 
    . ' <br><i><strong>Aluguel:</strong></i> ' . $conta['aluguel'] 
    . ' <br><i><strong>Contas Públicas:</strong></i> ' . $conta['contas_publicas'] 
    . ' <br><i><strong>Impostos:</strong></i> ' . $conta['impostos'] 
    . ' <br><i><strong>Empréstimos:</strong></i> ' . $conta['emprestimos'] 
    . ' <br><i><strong>Manutenção:</strong></i> ' . $conta['manutencao'] 
    . ' <br><i><strong>Seguros:</strong></i> ' . $conta['seguros'] 
    . ' <br><i><strong>Marketing:</strong></i> ' . $conta['marketing'] 
    . ' <br><i><strong>Despesas de Escritório:</strong></i> ' . $conta['despesas_adm'] 
    . ' <br><i><strong>Logística:</strong></i> ' . $conta['logistica'] 
    . ' <br><i><strong>Pesquisa:</strong></i> ' . $conta['pesquisa'] 
    . ' <br><i><strong>Garantia:</strong></i> ' . $conta['garantia'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de Estoque</h2>
<ul>';
foreach ($estoques as $estoque) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $estoque['id_estoque'] 
    . ' <br><i><strong>Número de Referência:</strong></i> ' . $estoque['numero_referencia'] 
    . ' <br><i><strong>Categoria:</strong></i> ' . $estoque['categoria'] 
    . ' <br><i><strong>Quantidade:</strong></i> ' . $estoque['quantidade'] 
    . ' <br><i><strong>Preço Unitário:</strong></i> ' . $estoque['preco_unitario'] 
    . ' <br><i><strong>Fornecedor:</strong></i> ' . $estoque['fornecedor'] 
    . ' <br><i><strong>Localização:</strong></i> ' . $estoque['localizacao'] 
    . ' <br><i><strong>Reabastecimento Minímo:</strong></i> ' . $estoque['reabastecimento_minimo'] 
    . ' <br><i><strong>Validade:</strong></i> ' . $estoque['validade'] 
    . ' <br><i><strong>Observações:</strong></i> ' . $estoque['observacoes'] 
    . ' <br><i><strong>Imagem do Produto:</strong></i> ' . $estoque['imagem'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de Fiscal</h2>
<ul>';
foreach ($fiscals as $fiscal) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $fiscal['id_fiscal'] 
    . ' <br><i><strong>Data:</strong></i> ' . $fiscal['data'] 
    . ' <br><i><strong>Valor:</strong></i> ' . $fiscal['valor'] 
    . ' <br><i><strong>Tipo:</strong></i> ' . $fiscal['tipo'] 
    . ' <br><i><strong>Cliente ou Fornecedor:</strong></i> ' . $fiscal['cliente_fornecedor'] 
    . ' <br><i><strong>Nota Fiscal:</strong></i> ' . $fiscal['nota_fiscal'] 
    . ' <br><i><strong>Imposto:</strong></i> ' . $fiscal['imposto'] 
    . ' <br><i><strong>Método de Pagamento:</strong></i> ' . $fiscal['metodo_pagamento'] 
    . ' <br><i><strong>Código Fiscal:</strong></i> ' . $fiscal['codigo_fiscal'] 
    . ' <br><i><strong>Contas Contábeis:</strong></i> ' . $fiscal['contas_contabeis'] 
    . ' <br><i><strong>Localização:</strong></i> ' . $fiscal['localizacao'] 
    . ' <br><i><strong>Responsável:</strong></i> ' . $fiscal['responsavel'] 
    . ' <br><i><strong>Status:</strong></i> ' . $fiscal['status'] 
    . ' <br><i><strong>Observações:</strong></i> ' . $fiscal['observacoes'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de Frota de Veículos</h2>
<ul>';
foreach ($frotas as $frota) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $frota['id_frota'] 
    . ' <br><i><strong>Marca/Modelo do Carro:</strong></i> ' . $frota['marca_modelo'] 
    . ' <br><i><strong>Ano de Fabricação:</strong></i> ' . $frota['ano_fabricacao'] 
    . ' <br><i><strong>Placa:</strong></i> ' . $frota['placa'] 
    . ' <br><i><strong>Número da Chassi:</strong></i> ' . $frota['numero_chassi'] 
    . ' <br><i><strong>Tipo de Veículo:</strong></i> ' . $frota['tipo_veiculo'] 
    . ' <br><i><strong>Tipo de combustível:</strong></i> ' . $frota['tipo_combustivel'] 
    . ' <br><i><strong>Quilometragem:</strong></i> ' . $frota['quilometragem'] 
    . ' <br><i><strong>Data da Próxima Revisão:</strong></i> ' . $frota['data_prox_rev'] 
    . ' <br><i><strong>Histórico de Manutenção:</strong></i> ' . $frota['historico_manutencao'] 
    . ' <br><i><strong>Seguro:</strong></i> ' . $frota['seguro'] 
    . ' <br><i><strong>Documentação:</strong></i> ' . $frota['documentacao'] 
    . ' <br><i><strong>Localização Atual:</strong></i> ' . $frota['localizacao_atual'] 
    . ' <br><i><strong>Responsável:</strong></i> ' . $frota['responsavel'] 
    . ' <br><i><strong>Status:</strong></i> ' . $frota['status'] 
    . ' <br><i><strong>Observações:</strong></i> ' . $frota['observacoes'] 
    . ' <br><i><strong>Imagem do Veículo:</strong></i> ' . $frota['imagem'] . '</li>';
}
$html .= '</ul>

<h2>Relatório do RH</h2>
<ul>';
foreach ($controles as $controlerh) {
    $html .= '<li>' 
    . ' <i><strong>ID:</strong></i> ' . $controlerh['id'] 
    . ' <br><i><strong>Nome:</strong></i> ' . $controlerh['nome'] 
    . ' <br><i><strong>Email:</strong></i> ' . $controlerh['email'] 
    . ' <br><i><strong>Senha:</strong></i> ' . $controlerh['senha'] 
    . ' <br><i><strong>Tipo:</strong></i> ' . $controlerh['tipo'] 
    . ' <br><i><strong>Nome do Pai:</strong></i> ' . $controlerh['nome_pai'] 
    . ' <br><i><strong>Nome da Mãe:</strong></i> ' . $controlerh['nome_mae'] 
    . ' <br><i><strong>Naturalidade:</strong></i> ' . $controlerh['naturalidade'] 
    . ' <br><i><strong>UF:</strong></i> ' . $controlerh['uf'] 
    . ' <br><i><strong>Data de Nascimento:</strong></i> ' . $controlerh['data_nascimento'] 
    . ' <br><i><strong>Deficiente Físico:</strong></i> ' . $controlerh['deficiente_fisico'] 
    . ' <br><i><strong>Raça/Cor:</strong></i> ' . $controlerh['raca_cor'] 
    . ' <br><i><strong>Sexo:</strong></i> ' . $controlerh['sexo'] 
    . ' <br><i><strong>Estado Civil:</strong></i> ' . $controlerh['estado_civil'] 
    . ' <br><i><strong>Grau de Instrução:</strong></i> ' . $controlerh['grau_instrucao'] 
    . ' <br><i><strong>Endereço:</strong></i> ' . $controlerh['endereco'] 
    . ' <br><i><strong>Número:</strong></i> ' . $controlerh['numero'] 
    . ' <br><i><strong>Complemento:</strong></i> ' . $controlerh['complemento'] 
    . ' <br><i><strong>CEP:</strong></i> ' . $controlerh['cep'] 
    . ' <br><i><strong>Bairro:</strong></i> ' . $controlerh['bairro'] 
    . ' <br><i><strong>Cidade:</strong></i> ' . $controlerh['cidade'] 
    . ' <br><i><strong>Telefone:</strong></i> ' . $controlerh['telefone'] 
    . ' <br><i><strong>Celular:</strong></i> ' . $controlerh['celular'] 
    . ' <br><i><strong>Número da CTPS:</strong></i> ' . $controlerh['numero_ctps'] 
    . ' <br><i><strong>Série:</strong></i> ' . $controlerh['serie'] 
    . ' <br><i><strong>UF da CTPS:</strong></i> ' . $controlerh['uf_rh'] 
    . ' <br><i><strong>Data de Expedição da CTPS:</strong></i> ' . $controlerh['data_expedicao_ctps'] 
    . ' <br><i><strong>PIS:</strong></i> ' . $controlerh['pis'] 
    . ' <br><i><strong>Data de Cadastro do PIS:</strong></i> ' . $controlerh['data_cadastro_pis'] 
    . ' <br><i><strong>RG:</strong></i> ' . $controlerh['rg_rh'] 
    . ' <br><i><strong>Data de Expedição do RG:</strong></i> ' . $controlerh['data_expedicao_rg'] 
    . ' <br><i><strong>CPF:</strong></i> ' . $controlerh['cpf_rh'] 
    . ' <br><i><strong>Título de Eleitor:</strong></i> ' . $controlerh['titulo_eleitor'] 
    . ' <br><i><strong>Zona:</strong></i> ' . $controlerh['zona'] 
    . ' <br><i><strong>Seção:</strong></i> ' . $controlerh['secao'] 
    . ' <br><i><strong>Dependentes:</strong></i> ' . $controlerh['dependentes'] 
    . ' <br><i><strong>Vale Transporte:</strong></i> ' . $controlerh['vale_transporte'] 
    . ' <br><i><strong>Horário de Trabalho:</strong></i> ' . $controlerh['horario_trabalho'] 
    . ' <br><i><strong>Entrada:</strong></i> ' . $controlerh['entrada'] 
    . ' <br><i><strong>Intervalo:</strong></i> ' . $controlerh['intervalo'] 
    . ' <br><i><strong>Saída:</strong></i> ' . $controlerh['saida'] 
    . ' <br><i><strong>Cargo:</strong></i> ' . $controlerh['cargo'] 
    . ' <br><i><strong>Data de Admissão:</strong></i> ' . $controlerh['data_admissao'] 
    . ' <br><i><strong>Data do Exame Médico:</strong></i> ' . $controlerh['data_exame_medico'] 
    . ' <br><i><strong>Experiência:</strong></i> ' . $controlerh['experiencia'] . '</li>';
}
$html .= '</ul>';

require_once '../../vendor/autoload.php';

// referenciando o namespace do dompdf
use Dompdf\Dompdf;

// instanciando o dompdf
$dompdf = new Dompdf();

// inserindo o HTML que queremos converter
$dompdf->loadHtml($html);

// Definindo o papel e a orientação
$dompdf->setPaper('A4', 'landscape');

// Renderizando o HTML como PDF
$dompdf->render();

// Enviando o PDF para o browser
$dompdf->stream();
?>