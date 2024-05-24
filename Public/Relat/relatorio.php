<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';
require_once '../../App/Controller/ContasController.php';
require_once '../../App/Controller/EstoqueController.php';
require_once '../../App/Controller/FiscalController.php';
require_once '../../App/Controller/FrotaController.php';

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

<h2>Relatório das Contas</h2>
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