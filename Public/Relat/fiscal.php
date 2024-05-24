<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/FiscalController.php';

$fiscalController = new FiscalController($pdo);
$fiscals = $fiscalController->listarFiscals();

$html = '<h2>Relatório de Fiscal</h2>
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