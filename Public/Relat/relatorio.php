<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';
require_once '../../App/Controller/ContasController.php';
require_once '../../App/Controller/EstoqueController.php';
require_once '../../App/Controller/FiscalController.php';
require_once '../../App/Controller/FrotaController.php';

$comercialController = new ComercialController($pdo);
$comerciais = $comercialController->listarComercials();

$contasController = new contasController($pdo);
$contas = $contasController->listarcontas();

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
    $html .= '<li>' . $comercial['id_comercial'] . ' - ' . $comercial['nome_cliente'] . ' - ' . $comercial['telefone_cliente'] . ' - ' . $comercial['email_cliente'] . ' - ' . $comercial['identificacao_cliente'] . ' - ' . $comercial['marca_car'] . ' - ' . $comercial['modelo_car'] . ' - ' . $comercial['caracteristicas_car'] . ' - ' . $comercial['preco_car'] . ' - ' . $comercial['numero_chassi'] . ' - ' . $comercial['data_venda'] . ' - ' . $comercial['tipo_transacao'] . ' - ' . $comercial['forma_paga'] . ' - ' . $comercial['nota_fiscal'] . ' - ' . $comercial['valor_total'] . ' - ' . $comercial['canal_venda'] . ' - ' . $comercial['vendedor'] . ' - ' . $comercial['estado_transacao'] . '</li>';
}
$html .= '</ul>

<h2>Relatório das Contas</h2>
<ul>';
foreach ($contas as $conta) {
    $html .= '<li>' 
            . $conta['id_conta'] . ' - ' 
            . $conta['fornecedores'] . ' - ' 
            . $conta['salarios_benef'] . ' - ' 
            . $conta['aluguel'] . ' - ' 
            . $conta['contas_publicas'] . ' - ' 
            . $conta['impostos'] . ' - ' 
            . $conta['emprestimos'] . ' - ' 
            . $conta['manutencao'] . ' - ' 
            . $conta['seguros'] . ' - ' 
            . $conta['marketing'] . ' - ' 
            . $conta['despesas_adm'] . ' - ' 
            . $conta['logistica'] . ' - ' 
            . $conta['pesquisa'] . ' - ' 
            . $conta['garantia'] . 
            '</li>';
}
$html .= '</ul>

<h2>Relatório de Estoque</h2>
<ul>';
foreach ($estoques as $estoque) {
    $html .= '<li>' . $estoque['id_estoque'] . ' - ' . $estoque['numero_referencia'] . ' - ' . $estoque['categoria'] . ' - ' . $estoque['quantidade'] . ' - ' . $estoque['preco_unitario'] . ' - ' . $estoque['fornecedor'] . ' - ' . $estoque['localizacao'] . ' - ' . $estoque['reabastecimento_minimo'] . ' - ' . $estoque['validade'] . ' - ' . $estoque['observacoes'] . ' - ' . $estoque['imagem'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de Fiscal</h2>
<ul>';
foreach ($fiscals as $fiscal) {
    $html .= '<li>' . $fiscal['id_favorito'] . ' - ' . $fiscal['fanfic_imagem'] . ' Anos - ' . $fiscal['fanfic_titulo'] . ' - ' . $fiscal['user_id'] . ' - ' . $fiscal['fanfic_id'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de Frota de Veículos</h2>
<ul>';
foreach ($frotas as $frota) {
    $html .= '<li>' . $frota['id_favorito'] . ' - ' . $frota['fanfic_imagem'] . ' Anos - ' . $frota['fanfic_titulo'] . ' - ' . $frota['user_id'] . ' - ' . $frota['fanfic_id'] . '</li>';
}
$html .= '</ul>

<h2>Relatório de RH</h2>
<ul>';
foreach ($controles as $controle) {
    $html .= '<li>' . $controle['id_fanfic'] . ' - ' . $controle['imagem'] . ' Anos - ' . $controle['titulo'] . ' - ' . $controle['sinopse'] . ' - ' . $controle['categoria_id'] . ' - ' . $controle['nome_user'] . ' - ' . $controle['user_id'] . ' - ' . $controle['concluido'] . '</li>';
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