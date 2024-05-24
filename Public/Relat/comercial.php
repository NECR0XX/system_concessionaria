<?php
require_once '../../Config/config.php';
require_once '../../App/Controller/ComercialController.php';

$comercialController = new ComercialController($pdo);
$comerciais = $comercialController->listarComercials();

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